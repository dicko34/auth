<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'img',
        'ad_duration_per_day',
        'city',
        'advertiser_name',
        'phone_number',
        'mobile',
        'email',
        'facebook_url',
        'state',
    ];

}
