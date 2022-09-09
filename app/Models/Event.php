<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'location', 'description', 'date_time', 'link', 'poster', 'slug', 'total_visited'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function takeImage()
    {
        return "/storage/" . $this->poster;

        // // Untuk data dummy
        // return $this->poster;
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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' .$search. '%');
        });
    }
}
