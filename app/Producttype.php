<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{
    //naam verwijzing naar een tafel
    protected $table = 'producttype';


    protected $fillable=[
        'id',
        'type',
        'image',
        'created_at',
    ];

public function producten(){
    return $this->hasMany(Product::class);
}



    
}
