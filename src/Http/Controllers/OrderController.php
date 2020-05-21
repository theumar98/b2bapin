<?php

namespace Slm\B2b\Http\Controllers;

use Illuminate\Http\Request;
use Slm\B2b\Models\Order;
use Slm\B2b\Services\OrderService;
use Slm\B2b\Http\Resources\Order as OrderResource;
use Slm\B2b\Http\Resources\OrderCollection as OrderResourceCollection;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected OrderService $orderService;

    public function __controller(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $order = $this->orderService->all();
        return new OrderResource($order);
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
        $order = $this->orderService->find($id);
        return new OrderResource($order);
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

    public function orderShipments($id)
    {
        $order = $this->orderService->orderShipments($id);
        return new OrderResource($order);
    }

    public function orderItems($id)
    {
        $order = $this->orderService->orderItems($id);
        return new OrderResource($order);
    }

}
