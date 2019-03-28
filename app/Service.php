<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'description','image', 'price'
    ];

    //
    public function orderDetail()
    {
        return $this->belongsTo('App\OrderDetail');
    }
}
