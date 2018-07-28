<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //naam verwijzing naar een tafel
    protected $table = 'producten';


    protected $fillable=[
        'id',
        'naam',
        'rank',
        'prijs',
        'hoeveelheid',
        'reg_datum',
        'producttype_id',
        'tekstkort',
        'tekstlang',
        'korting',
    ];

    public function producttype(){
        return $this->belongsTo(Producttype::class);
    }






    
}
