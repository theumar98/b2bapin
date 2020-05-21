<?php

namespace Slm\B2b\Http\Services;

use Slm\B2b\Models\Order;

class OrderService
{

    protected $model;

    public function __construct(Order $orderModel)
    {
        $this->model = $orderModel;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function orderShipments($id)
    {
        return $this->model->find($id)->with('shipments');
    }

    public function orderItems($id)
    {
        return $this->model->find($id)->with('orderItems');
    }

}
?>
