<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'promotions';

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
    protected $fillable = ['Employee_Promotions', 'Promotional_date', 'promotion To'];

    
}
