<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * App\BusinessDetail
 *
 * @property integer $id
 * @property string $name
 * @property string $reference
 * @property string $category
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
 * @property boolean $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereReference($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereTelNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereMobileNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereFacebook($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereTwitter($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail wherePostalAdd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereAbout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereLogo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereRating($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BusinessDetail whereUpdatedAt($value)
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
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
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
        'reference',
    ];
}