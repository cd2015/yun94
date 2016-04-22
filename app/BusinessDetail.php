<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BusinessDetail extends Eloquent
{
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
    ];
}