<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    // Relationship: A customer belongs to a customer type


    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    
}
