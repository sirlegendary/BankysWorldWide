<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function beneficiary()
    {
    	/**
	     * Get the beneficiaries for the customer.
	     */
    	return $this->hasMany('App\Beneficiary');
    }
}
