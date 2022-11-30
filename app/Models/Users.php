<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use HasFactory;
    use Notifiable;
    public $table="users";
    public $fillable = ['id','name','email','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
 