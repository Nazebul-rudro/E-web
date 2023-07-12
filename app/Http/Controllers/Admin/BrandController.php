<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    //
    public function index(){
        $brands = Brand::latest()->paginate(5);
        return view('admin.brand.index', compact('brands'));
    }
    public function store(BrandRequest $request, Brand $brand){
        $brand::create([
            "name" => $request->name,
            'slug' =>Str::slug($request->slug),
            "status" => $request->name == true ? '1' : '0',

        ]);
        return redirect()->route('brands.list')->with('message', 'Category Added Successfully');
    }
    public function update(Request $request, Brand $brand)
    {
         $brand->update([
            "name" => $request->name,
            'slug' =>Str::slug($request->slug),
            "status" => $request->name == true ? '1' : '0',

        ]);
        return redirect()->route('brands.list');
       
    }

    public function destroy(Brand $brand)
    {

        // dd($brand);
        $brand->delete();
        return redirect()->route('brands.list');
    }
}
