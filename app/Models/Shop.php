<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = ['offre','displayed','brief' ,'loung','price','description','img', 'gov','city','street','address','ad_durtion_per_day','advertiser_name','phone_number','mobile','email','advertiser_city','advertiser_address','state'];
}
