<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

protected $fillable = ['fullname','gender','email','address','postcode','building_name','opinion'];

public static $rules = array(
'fullname' => 'required',
'gender' => 'required',
'email' => 'required|email',
'postcode' => 'required|max:8',
'address' => 'required',
'building_name'=> 'string',
'opinion' => 'required'
);

}
