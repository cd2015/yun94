<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

/**
 * App\Category
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category whereSlug($value)
 * @method static Builder|Category whereCreatedAt($value)
 * @method static Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    /*
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    */

    /**
     * Fillable(Mass Assignable) details of a category
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug',
    ];

    /**
     * A category can have many subcategories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories()
    {
        return $this->hasMany('\App\SubCategory');
    }

    /**
     * A category can have many businesses
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businesses()
    {
        return $this->hasMany('\App\BusinessDetail');
    }
}
