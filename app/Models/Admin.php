<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;


 use Notifiable;

 protected $guard = 'admin';

   protected $fillable = [
   'name',
   'email',
   'password',
   ];

 protected $hidden = ['password'];

}
