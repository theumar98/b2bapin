<?php

namespace Slm\B2b\Http\Controllers;

use Illuminate\Http\Request;
use Slm\B2b\Models\Brand;
use Slm\B2b\Services\BrandService;
use Slm\B2b\Http\Resources\Brand as BrandResource;
use Slm\B2b\Http\Resources\BrandCollection as BrandResourceCollection;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected BrandService $brandService;

    public function __controller(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brand = $this->brandService->all();
        return new BrandResource($brand);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = $this->brandService->create($request);
        return new BrandResource($brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = $this->brandService->find($id);
        return new BrandResource($brand);
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
        $brand = $this->brandService->update($request);
        return new BrandResource($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = $this->brandService->delete($id);
        return new BrandResource($brand);
    }

    public function brandProducts($id)
    {
        $brand = $this->brandService->brandProducts($id);
        return new BrandResource($brand);
    }
}
