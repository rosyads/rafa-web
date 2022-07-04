<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getBrands($name_id){
        $brandData['data'] = Brand::select('id','brand')->where('name_id', $name_id)->get();

        return response()->json($brandData);
    }

    public function getTypes($brand_id){
        $typeData['data'] = Type::select('id','type')->where('brand_id', $brand_id)->get();

        return response()->json($typeData);
    }

    public function getSerialNumbers($type_id){
        $serialData['data'] = Product::select('id','serial_number')->where('type_id', $type_id)->get();

        return response()->json($serialData);
    }

    public function getVersions(){
        // dd(request());

        $serial_number = request('id');
        $type_id = request('type_id');
        // $type_id = Product::select('type_id')->where('serial_number', $serial_number)->get();
        $versionData['data'] = Product::select('id', 'version')
                                // ->where('id', $serial_number)
                                // ->where('type_id', $type_id)
                                ->where('serial_number', $serial_number)
                                ->get();
        
        return response()->json($versionData);
    }
}
