<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['lastname', 'firstname', 'age', 'phone_number', 'email'];
}
