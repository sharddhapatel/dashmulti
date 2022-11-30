<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlist extends Model
{
    protected $table="tbluserlisting";
   protected  $fillable=['broker','master','status','client','login_after','login_before','join_after','join_before'];
    use HasFactory;
}
