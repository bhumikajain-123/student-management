<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{ 
    protected $table = 'register';

   protected $fillable = [

    'name',
    'father_name',
    'mother_name',
    'gender',
    'dob',
    'email',
    'password'

];
}
