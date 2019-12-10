<?php

namespace App\Http\Controllers;

use App\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pageContent.index')->with('pageContent', PageContent::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pageContent.create')->with(Auth::user());;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pc = PageContent::firstOrNew((['id' => $request->id]));

        $pc->title = $request->title;
        $pc->content = $request->content;
        $pc->page_id = 1;
        $pc->user_id = Auth::user()->id;
        $pc->save();
        return view('pageContent.index')->with('pageContent', PageContent::all());
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
    public function edit(PageContent $pageContent)
    {
        // return view('pageContent.edit')->with('pc', PageContent::find($));
        return view('pageContent.edit')->with('pc', $pageContent);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageContent $pageContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageContent $pageContent)
    {
        //
    }
}
