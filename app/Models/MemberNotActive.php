<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MemberNotActive extends Authenticatable
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $guard ='MemberNotActive';
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','token', 'status'];
}
