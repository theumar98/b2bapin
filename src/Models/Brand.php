<?php

namespace Slm\B2b\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
