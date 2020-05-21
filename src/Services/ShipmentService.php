<?php

namespace Slm\B2b\Http\Services;

use Slm\B2b\Models\Shipment;

class ShipmentService
{

    protected $model;

    public function __construct(Shipment $shipmentModel)
    {
        $this->model = $shipmentModel;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
?>
