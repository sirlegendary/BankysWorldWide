<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
