<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(1);
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $path = 'dashboardstyle/category_image/';
            $categoryImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($path, $categoryImage);
            $rasm = $path.$categoryImage;
            $input['image'] = $rasm;
        }
        Category::create($input);
        return redirect()->route('categories.index')->with('success', 'Category create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'description_uz' => 'required|min:5|max:1000',
            'description_ru' => 'required|min:5|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $path = 'dashboardstyle/category_image/';
            $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($path,$imageName);
            $rasm = $path.$imageName;
            $input['image'] = $rasm;
        }else{
            unset($input['image']);
        }
        unlink($category->image);
        $category->update($input);
        return redirect()->route('categories.index')->with('success', 'Category updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        unlink($category->image);
        return redirect()->route('categories.index')->with('success', 'Category deleted successfuly');
    }
}
