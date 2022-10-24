<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Galery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'slug'
    ];


    public function takeImage()
    {
        return "/storage/" . $this->image;

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

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

