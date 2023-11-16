<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function dentalservices(){
        return $this->hasMany(DentalService::class,'category_id');
    } 
}
