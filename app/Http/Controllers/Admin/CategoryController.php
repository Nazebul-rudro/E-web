<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFromRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFromRequest $request, Category $category)
    {
       try {
        //code...
        // $imagePath = null;
        if($request->hasFile('image')) {
            $imagePath = $this->uploadImage(Request()->file('image'));
        }
        
        $category::create([
            "name" => $request->name,
            'slug' =>Str::slug($request->slug),
            'description' => $request->description,
            'image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_keyword'=> $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'status' => $request->status == true ? '1' : '0',
        ]);
        

        return redirect()->route('categories.list')->with('message', 'Category Added Successfully');
       } catch (\Throwable $th) {
        //throw $th;
        dd($th->getMessage());
       }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryFromRequest $request, Category $category)
{
    try {
        $imagePath = null; // Initialize the variable with null
    
        if ($request->hasFile('image')) {
            $oldImagePath = $category->image;
            $imagePath = $this->uploadImage($request->file('image'));
            $category->image = $imagePath;
            $category->save();
            
            // Delete old image
            if ($oldImagePath != null) {
                Storage::delete($oldImagePath);
            }
        }
    
        // Set the updated category attributes, including the $imagePath variable
        $category->update([
            "name" => $request->name,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'image' => $imagePath ?? $category->image, // Use $category->image if $imagePath is null
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'status' => $request->status == true ? '1' : '0',
        ]);
    
        return redirect()->route('categories.list')->with('message', 'Category Updated Successfully');
    } catch (\Throwable $th) {
        dd($th->getMessage());
    }
    
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
     $category->delete();
    return redirect()->route('categories.list');
    }
    public function uploadImage($file)
{
    $fileName = $file->getClientOriginalExtension();
    $filePath = time().uniqid().'.'. $fileName;
    Image::make($file)->resize(300, 200)->save(storage_path('/app/public/category/'. $fileName));
    return $filePath;
}

}
