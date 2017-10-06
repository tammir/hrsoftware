<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'achievments';

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
    protected $fillable = ['Employee', 'Forward Application To', 'Achievement Title', 'Achievement Date'];

    
}
