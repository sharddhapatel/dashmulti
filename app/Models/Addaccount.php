<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Addaccount extends Model
{
    use HasFactory;
    use Notifiable;
    public $table="addaccount";
    public $fillable = ['id','usertype','name','password','freshlimit','accounttype','markettype'];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
 