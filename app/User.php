<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
  
    /**
     * The attributes that are mass assignable.
     * movement
     * right
     * here
     *
     * @var array
     */
    protected  $fillable = [
        'name', 'email', 'password',
    ];

    private $test =  'yas';
    
    /**
     * The  attributes  that dosomething
     * @var \stdClass
     */
    protected $hidden = [
        'password', 
	'remember_tokenz',
    ];
}
