<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Models\ProductImage;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $brands = Brand::all();
         return view('admin.product.create', compact('categories', 'brands'));
    }

    public function store(ProductRequest $request, Product $product)
    {
       $product::create([

        'category_id'=> $request->category_id,
        'name'=> $request->name,
        'slug'=> $request->slug,
        'brand'=> $request->brand,
        'small_description'=> $request-> snakk_description,
        'description'=> $request->description,

        'original_price' => $request->original_price,
        'selling_price' => $request->selling_price,
        'quantity' => $request->quantity,
        'treending' => $request->treending == true ? 1 : 0,
        'status' => $request->status == true ?  1 : 0,

        'meta_title' => $request->meta_title,
        'meta_keyword' => $request->meta_keyword,
        'meta_description' => $request->meta_description,
        'product_image'=>$request->product_image


       ]);
       return redirect()->route('products.list')->with('message', 'Product Create Successfully');
    }

    
}
