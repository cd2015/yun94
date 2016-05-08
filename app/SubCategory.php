<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubCategory
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubCategory extends Model
{
    /*
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    */

    /**
     * Fillable(Mass Assignable) details of a subcategory
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'category_id',
    ];
}
