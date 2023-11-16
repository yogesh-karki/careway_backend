<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DentalService extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
