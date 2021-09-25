<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
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
            'structura_uz' => 'required',
            'structura_ru' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'cat_name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $path = 'dashboardstyle/product_image/';
            $categoryImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($path, $categoryImage);
            $rasm = $path.$categoryImage;
            $input['image'] = $rasm;
        }
       Product::create($input);
        return redirect()->route('products.index')->with('seccess', 'Mahsulot muvaffaqiyatli saqlandi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        return view('dashboard.products.edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'structura_uz' => 'required',
            'structura_ru' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,gif|max:2048',
            'price' => 'required',
            'cat_name' => 'required', 
            'status' => 'required',
        ]);

        $input = $request->all();
        if($image = $request->file('image')){
            $path = 'dashboardstyle/product_image/';
            $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($path,$imageName);
            $rasm = $path.$imageName;
            $input['image'] = $rasm;
        }else{
            unset($input['image']);
        }

        unlink($product->image);

        $product->update($input);
        return redirect()->route('products.index')->with('success', 'Mahsulot muvaffaqiyatli tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        unlink($product->image);
        return redirect()->route('products.index')->with('success', "Mahsulot muvaffaqiyatli o'chirldi.");
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $products = Product::where('name_uz', 'LIKE', '%'.$search_text.'%')->get();
        return view('dashboard.products.search', compact('products'));
    }
}
