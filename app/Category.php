<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    */

    /**
     * Fillable(Mass Assignable) details of a category
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
