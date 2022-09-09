<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'description', 'thumbnail', 'slug', 'post_category_id', 'total_visited'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function takeImage()
    {
        return "/storage/" . $this->thumbnail;

        // // Untuk data dummy
        // return $this->thumbnail;
    }

    public function post_category() 
    {
        return $this->belongsTo(PostCategory::class);
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
