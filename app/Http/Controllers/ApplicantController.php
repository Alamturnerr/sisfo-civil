<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::latest()->get();
        return view('admin.applicants.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('applicants.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantRequest $request)
    {
        $input['status'] = false;
        $input = $request->all();

        if (request()->file('file')) {
            $file = request()->file('file');
            $fileUrl = $file->storeAs("pdf/applicants", Str::slug($input['name'])."-".time().".{$file->extension()}");
        } else{
            $fileUrl = null;
        }
        $input['file'] = "$fileUrl";

        $applicant = Applicant::create($input);

        return redirect('/loker')
            ->with('success','Data berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        return view('admin.applicants.show', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        return view('admin.applicants.edit', [
            'applicant' => $applicant,
            'jobs' => job::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantRequest  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        $input = $request->all();

        if (request()->file('file')) {
            if($applicant->file && Storage::exists($applicant->file)){
                Storage::delete($applicant->file);
            }
            $file = request()->file('file');
            $fileUrl = $file->storeAs("pdf/applicants", Str::slug($input['name']).".{$file->extension()}");
        } else{
            $fileUrl = $applicant->file;
        }
        $input['file'] = "$fileUrl";

        $applicant->update($input);

        if ($applicant->getChanges() != [])
        {
            return redirect()->route('applicants.show', $applicant->id)
            ->with('success','Data berhasil diedit!');
    
        } else{
            return redirect()->route('applicants.show', $applicant->id)
            ->with('success','-- Tidak ada perubahan --');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        if($applicant->file && Storage::exists($applicant->file)){
            Storage::delete($applicant->file);
        }

        $applicant->delete();
  
        return redirect()->route('applicants.index')
            ->with('success','Data berhasil dihapus!');
    }
}
