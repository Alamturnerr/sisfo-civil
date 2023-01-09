<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $guard ='member';
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','token', 'status'];
}
