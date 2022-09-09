<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Applicant;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
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
        $jobs = Job::latest()->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $input = $request->all();

        $job = Job::create($input);
         
        return redirect()->route('jobs.index')
            ->with('success','Lowongan kerja berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('admin.jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $input = $request->all();

        $job->update($input);

        if ($job->getChanges() != [])
        {
            return redirect()->route('jobs.show', $job->id)
            ->with('success','Lowongan kerja berhasil diedit!');
    
        } else{
            return redirect()->route('jobs.show', $job->id)
            ->with('success','-- Tidak ada perubahan --');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $applicants = Applicant::get();

        foreach($applicants as $applicant){
            if($applicant->job_id == $job->id){
                return redirect()->route('jobs.index')
                    ->with('error', 'Lowongan kerja tersebut tidak bisa dihapus! Ada pelamar yang memakai posisi tersebut.');
            }
        }

        $job->delete();
  
        return redirect()->route('jobs.index')
            ->with('success','Lowongan kerja berhasil dihapus!');
    }
}
