<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    /*
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    */

    /**
     * Fillable(Mass Assignable) details of a category
     * @var array
     */
    protected $fillable = [
        'name', 'category_id'
    ];
}
