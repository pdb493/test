<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
  // hey-ooooooo
    /**
     * The attributes that are mass assignable.
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
        'password', 'remember_token',
    ];
}



//test
