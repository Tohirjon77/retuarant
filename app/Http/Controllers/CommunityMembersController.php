<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommunityMember;

class CommunityMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communityMembers = CommunityMember::latest()->paginate(5);
        return view('dashboard.team.index', compact('communityMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
        
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
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2000'
        ]);
        $input = $request->all();
        if($images = $request->file('image')){
            $path = 'dashboardstyle/team_images/';
            $imageName = date('YmdHis').'.'.$images->getClientOriginalExtension();
            $images->move($path,$imageName);
            $rasm = $path.$imageName;
            $input['image'] = $rasm;
        }
        CommunityMember::create($input);
        return redirect()->route('team.index')->with('success', 'Azo muvaffaqiyatli saqlandi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CommunityMember $team)
    {
        return view('dashboard.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = CommunityMember::find($id);
        return view('dashboard.team.edit', compact('member'));
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
        $members = CommunityMember::find($id);
        // dd($members);

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2000'
        ]);
        $input = $request->all();
        if($images = $request->file('image')){
            $path = 'dashboardstyle/team_images/';
            $imageName = date('YmdHis').'.'.$images->getClientOriginalExtension();
            $images->move($path,$imageName);
            $rasm = $path.$imageName;
            $input['image'] = $rasm;
        }else{
            unset($input['image']);
        }
        unlink($members->image);
        $members->update($input);
        return redirect()->route('team.index')->with('success', "Ushbu azo muvaffaqiyatli tahrirlandi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = CommunityMember::find($id);
        $member->delete();
        unlink($member->image);
        return redirect()->route('team.index')->with('success', "Jamoa azosi muvaffaqiyatli o'chirildi");
    }
}
