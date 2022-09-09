<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Applicant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'email', 'number', 'address', 'file', 'job_id', 'status'
    ];

    public function takePdf()
    {
        return "/storage/" . $this->file;
    }

    public function job() 
    {
        return $this->belongsTo(Job::class);
    }

    public function getCreatedAtAttribute($date)
    {
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat('d F Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        Carbon::setLocale('id');
        return Carbon::parse($date)->translatedFormat('d F Y');
    }
}
