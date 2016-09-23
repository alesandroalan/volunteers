<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //protected $guarded = ['_token'];
    protected $fillable = ['name','phone','email'];

    /* Opção para fazer validação dos forms no controller
    public static $rules = [
    		'name' => 'required',
    		'email' => 'required|email'
    	];
    */
}
