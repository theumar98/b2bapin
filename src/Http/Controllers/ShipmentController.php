<?php

namespace Slm\B2b\Http\Controllers;

use Slm\B2b\Models\Shipment;
use Illuminate\Http\Request;

use Slm\B2b\Services\ShipmentService;
use Slm\B2b\Http\Resources\Shipment as ShipmentResource;
use Slm\B2b\Http\Resources\ShipmentCollection as ShipmentResourceCollection;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected ShipmentService $shipmentService;

    public function __controller(ShipmentService $shipmentService)
    {
        $this->shipmentService = $shipmentService;
    }

    public function index()
    {
        return response()->json(['shipments', Shipment::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipment = $this->shipmentService->find($id);
        return new ShipmentResource($shipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
