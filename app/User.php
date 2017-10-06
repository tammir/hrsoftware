<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
//    use Notifiable;
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

/*
 \

php artisan crud:generate Employee --fields="

company#string;
employee_id#string;
employee_type#text;
work_shift#select#options=day,night;
email:string;
first_name#string;
last_name#string;
dob#integer;
gender#string;
home_district#string;
city#string;
address#text;
country#text;
contact_number#string;
emergency_contact#string;" --view-path=employee --controller-namespace=Employee --route-group=employee

 */