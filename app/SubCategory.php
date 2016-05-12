<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

/**
 * App\SubCategory
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $category_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static Builder|SubCategory whereId($value)
 * @method static Builder|SubCategory whereName($value)
 * @method static Builder|SubCategory whereSlug($value)
 * @method static Builder|SubCategory whereCategoryId($value)
 * @method static Builder|SubCategory whereCreatedAt($value)
 * @method static Builder|SubCategory whereUpdatedAt($value)
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

    /**
     * A subcategory belongs to a specific category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
}
