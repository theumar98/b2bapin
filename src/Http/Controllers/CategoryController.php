<?php

namespace Slm\B2b\Http\Controllers;

use Illuminate\Http\Request;

use Slm\B2b\Http\Services\CategoryService;
use Slm\B2b\Http\Resources\Category as CategoryResource;
use Slm\B2b\Http\Resources\CategoryCollection as CategoryResourceCollection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected CategoryService $categoryService;

    public function __controller(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $category = $this->categoryService->all();
        return new CategoryResource($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = $this->categoryService->create($request);
        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryService->find($id);
        return new CategoryResource($category);
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
        $category = $this->categoryService->update($request, $id);
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->categoryService->delete($id);
        return new CategoryResource($category);
    }

    public function categoryProducts($id)
    {
        $category = $this->categoryService->categoryProducts($id);
        return new CategoryResource($category);
    }
}
