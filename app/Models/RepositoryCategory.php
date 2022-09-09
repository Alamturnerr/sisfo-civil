<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepositoryCategory extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','slug'];

    public function repositories()
    {
    	return $this->hasMany(Repository::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
