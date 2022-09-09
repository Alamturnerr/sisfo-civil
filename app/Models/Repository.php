<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Repository extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'type', 'file', 'repository_category_id' 
    ];

    public function takePdf()
    {
        return "/storage/" . $this->file;
    }

    public function repository_category() 
    {
        return $this->belongsTo(RepositoryCategory::class);
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
