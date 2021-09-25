<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('dashboard.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galleries.create');
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
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2000',
            'picture_type' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            // dd($image);
            $path = 'dashboardstyle/gallery_images/';
            $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($path,$imageName);
            $rasm = $path.$imageName;
            $input['image'] = $rasm;

        }
        // dd($input);
        Gallery::create($input);
        return redirect()->route('galleries.index')->with('seccess', 'Rasm muvaffaqiyatli saqlandi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);
        // dd($gallery);
        return view('dashboard.galleries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.galleries.edit', compact('gallery'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,gif',
            'picture_type' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        // dd($input);
        if($image = $request->file('image')){
            $path = 'dashboardstyle/gallery_images/';
            $imageName = date('YmdHis').'.'.$image->getClientOriginalExtension();  
            $image->move($path,$imageName);
            $photo = $path.$imageName;
            $input['image'] = $photo;
        }else{
            unset($input['image']);
        }
        unlink($gallery->image);
        $gallery->update($input);

        return redirect()->route('galleries.index')->with('success', 'Rasm muvaffaqiyatli tahrirlandi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        
        $gallery->delete();
        unlink($gallery->image);
        return redirect()->route('galleries.index');


    }

    public function search(Request $request){

        
        // $galleries = Gallery::latest()->paginate(2);
        $search_text = $_GET['query'];
        $gallery = Gallery::where('picture_type', 'LIKE', '%'.$search_text.'%')->paginate(2);
        $gallery->appends($request->all());
        return view('dashboard.galleries.search', compact('gallery'));
    }
}
