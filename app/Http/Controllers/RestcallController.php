<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restcall;


class RestcallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restcall = restcall::latest()->paginate(5);
        return view('dashboard.rest_call.index', compact('restcall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.rest_call.create');
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
            'location' => 'required',
            'email' => 'required',
            'timelesson' => 'required',
            'call' => 'required'
        ]);
        $input = $request->all();
        $count = restcall::all()->count();
        if($count < 1){
            $saqla = restcall::create($input);
            return redirect()->route('call.index')->with('success', 'Malumot muvaffaqiyatli saqlandi!');
        }else{
            return redirect()->route('call.index')->with('success', '1 tadan ortiq malumot saqlanmasin');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $restcall = restcall::find($id);
        return view('dashboard.rest_call.show', compact('restcall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restcall = Restcall::find($id);
        return view('dashboard.rest_call.edit', compact('restcall'));
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
            'location' => 'required',
            'email' => 'required',
            'timelesson' => 'required',
            'call' => 'required'
        ]);
        $input = $request->all();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $call = Restcall::find($id);
        $call->delete();
        return back();


    }
}
