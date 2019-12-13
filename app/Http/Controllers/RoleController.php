<?php

namespace App\Http\Controllers;

use App\PageContent;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roles.index')->with('roles', Roles::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create')->with(Auth::user());;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = Roles::firstOrNew((['id' => $request->id]));

        $r->name = $request->name;
        $r->icon = $request->icon;
        $r->save();
        return view('roles.index')->with('roles', Roles::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function show(PageContent $pageContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $role)
    {
        // return view('pageContent.edit')->with('pc', PageContent::find($));
        return view('roles.edit')->with('role', $role);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $role)
    {
        $role->delete();
        return view('roles.index')->with('roles', Roles::all());

    }
}
