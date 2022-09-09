<?php
 
namespace App\Http\Controllers;
 
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
 
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $input = $request->all();
        $input['total_visited'] = 0;
        $input['date_time'] = date("Y-m-d H:i:s", strtotime($input['date_time'])); 
 
        if ($input['link'] != null) {
            $messages = [
                'link.url' => 'URL tidak valid',
            ];
 
            $link = request()->validate([
                'link' => 'url'
            ], $messages);
        }
 
        if (request()->file('poster')) {
            $thumbnail = request()->file('poster');
            $thumbnailUrl = $thumbnail->storeAs("img/events", Str::slug($input['name']) . "-" . time() . ".{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = null;
        }
        $input['poster'] = "$thumbnailUrl";
 
        $event = Event::create($input);
 
        return redirect()->route('events.index')
            ->with('success', 'Event berhasil dibuat!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', [
            'event' => $event,
        ]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $input = $request->all();
        $input['date_time'] = date("Y-m-d H:i:s", strtotime($input['date_time'])); 
 
        if (request()->file('poster')) {
            if ($event->poster && Storage::exists($event->poster)) {
                Storage::delete($event->poster);
            }
            $thumbnail = request()->file('poster');
            $thumbnailUrl = $thumbnail->storeAs("img/events", time() . ".{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = $event->poster;
        }
        $input['poster'] = "$thumbnailUrl";
 
        $event->update($input);
 
        if ($event->getChanges() != []) {
            return redirect()->route('events.show', $event->slug)
                ->with('success', 'Event berhasil diedit!');
        } else {
            return redirect()->route('events.show', $event->slug)
                ->with('success', '-- Tidak ada perubahan --');
        }
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if ($event->poster && Storage::exists($event->poster)) {
            Storage::delete($event->poster);
        }
 
        $event->delete();
 
        return redirect()->route('events.index')
            ->with('success', 'Event berhasil dihapus!');
    }
}