<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restdetail;

class RestDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = restdetail::latest()->paginate(2);
        return view('dashboard.rest_data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.rest_data.create');
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
            'title' => 'required',
            'description' => 'required',
            'menus' => 'required',
            'face_custom' => 'required',
            'month_new_recipe' => 'required'
        ]);
        $input = $request->all();
        $count = Restdetail::all()->count();
        
        // dd($count);
        if($count < 1){
            Restdetail::create($input);
        return redirect()->route('rest_data.index')->with('success', 'Malumot muvaffaqiyatli saqlandi!');

        }else{
        return redirect()->route('rest_data.index')->with('success', 'saqlangan malumot 1 tadan kop bolmasligi kerak!');
        }
        
        // dd($count);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Restdetail::find($id);
        return view('dashboard.rest_data.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Restdetail::find($id);
        return view('dashboard.rest_data.edit', compact('data'));
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
        $request->validate([
            'menus' => 'required', 
            'title' => 'required', 
            'description' => 'required',
            'month_new_recipe' => 'required',
            'face_custom' => 'required'
        ]);
        
        $rest = Restdetail::find($id);
        $rest->update($request->all());
        return redirect()->route('rest_data.index')->with('success', 'Malumot muvaffaqiyatli tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rest = Restdetail::find($id);
        $rest->delete();
        return back()->with('success', "Malumot muvaffaqiyatli o'chirildi");
    }
}
