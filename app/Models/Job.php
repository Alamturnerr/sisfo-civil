<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'description', 'status'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function applicants()
    {
    	return $this->hasMany(Applicant::class);
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
