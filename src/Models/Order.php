<?php

namespace Slm\B2b\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
