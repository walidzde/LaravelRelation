<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get the User that owns an order.
     */
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
