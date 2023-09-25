<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCompanies extends Model
{
    protected $table = 'car_companies';

    public function models()
    {
        return $this->hasMany(CarModel::class, 'car_companies', 'name');
    }

}
