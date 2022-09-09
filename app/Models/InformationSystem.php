<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InformationSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','province','city','address','description','status','x','y','thumbnail'
    ];

    public function takeImage()
    {
        return "/storage/" . $this->thumbnail;

        // // Untuk data dummy
        // return $this->thumbnail;
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
            return $query->where('title', 'like', '%' .$search. '%');
        });
    }
}
