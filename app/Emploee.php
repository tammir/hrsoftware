<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emploee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'emploees';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company', 'employee_id', 'employee_type', 'work_shift', 'email', 'first_name', 'last_name', 'dob', 'gender', 'home_district', 'city', 'address', 'country', 'contact_number', 'emergency_contact'];

    
}
