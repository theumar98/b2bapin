<?php

namespace Slm\B2b\Http\Services;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Slm\B2b\Models\Brand;

class BrandService
{

    protected $model;

    public function __construct(Brand $brandModel)
    {
        $this->model = $brandModel;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function brandProducts($id)
    {
        return $this->model->find($id)->with('products');
    }

    public function create(Request $request)
    {
        $returnData = (object)[];
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'enabled' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['data'=>$returnData,'errors' => $validator->errors()]);
        }
        return $this->model->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $returnData = (object)[];
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'enabled' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['data'=>$returnData,'errors' => $validator->errors()]);
        }
        return $this->model->where('id',$id)->update($request->all());
    }

    public function delete($id)
    {
        return $this->model->where('id',$id)->delete();
    }



}
?>
