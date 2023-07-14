<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $fillable = ['address','category','price','description','img','ad_durtion_per_day','advertiser_name','phone_number','mobile','email','advertiser_city','advertiser_address','state'];
}