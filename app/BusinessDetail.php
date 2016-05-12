<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;

/**
 * App\BusinessDetail
 *
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property string $tel_no
 * @property string $mobile_no
 * @property string $email
 * @property string $website
 * @property string $facebook
 * @property string $twitter
 * @property string $postal_add
 * @property string $location
 * @property string $region
 * @property string $about
 * @property string $logo
 * @property integer $rating
 * @property integer $user_id
 * @property string $category_id
 * @property boolean $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static Builder|BusinessDetail whereId($value)
 * @method static Builder|BusinessDetail whereName($value)
 * @method static Builder|BusinessDetail whereReference($value)
 * @method static Builder|BusinessDetail whereTelNo($value)
 * @method static Builder|BusinessDetail whereMobileNo($value)
 * @method static Builder|BusinessDetail whereEmail($value)
 * @method static Builder|BusinessDetail whereWebsite($value)
 * @method static Builder|BusinessDetail whereFacebook($value)
 * @method static Builder|BusinessDetail whereTwitter($value)
 * @method static Builder|BusinessDetail wherePostalAdd($value)
 * @method static Builder|BusinessDetail whereLocation($value)
 * @method static Builder|BusinessDetail whereRegion($value)
 * @method static Builder|BusinessDetail whereAbout($value)
 * @method static Builder|BusinessDetail whereLogo($value)
 * @method static Builder|BusinessDetail whereRating($value)
 * @method static Builder|BusinessDetail whereUserId($value)
 * @method static Builder|BusinessDetail whereCategoryId($value)
 * @method static Builder|BusinessDetail whereActive($value)
 * @method static Builder|BusinessDetail whereCreatedAt($value)
 * @method static Builder|BusinessDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BusinessDetail extends Eloquent
{
    /*
    protected $table = 'business_details';
    protected $primaryKey = 'id';
    public $timestamps = true;
    */

    /**
     * Fillable details of a business
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'about',
        'tel_no',
        'mobile_no',
        'email',
        'website',
        'facebook',
        'twitter',
        'postal_add',
        'location',
        'region',
        'about',
        'logo',
        'rating',
        'user_id',
        'category_id',
        'reference',
    ];

    /**
     * A business belongs to a specific user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    /**
     * A business belongs to a specific category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
}