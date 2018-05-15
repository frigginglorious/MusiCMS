<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gear;
use App\Type;


class GearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gears.list',['gears' => Gear::all(), 'types' => Type::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gears.create',['gear' => new Gear, 'types' => Type::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear = new Gear;

        $fullRequest = $request->all();

        $result = $gear::create($fullRequest);

        // return view('gears.list',['gears' => Gear::all()]);
        return redirect()->action('GearController@index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd(Gear::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('gears.edit',['gear' => Gear::find($id), 'types' => Type::all()]);

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
        $origModel = Gear::findOrFail($id);

        $origRequest = $request->all();

        if($request['name'] != null && $request['name'] != $origModel->name){
          $origModel->name = $origRequest['name'];
        }
        if($request['short_description'] != null){
          $origModel->short_description = $origRequest['short_description'];
        }
        if($request['type_id'] != null){
          $origModel->type_id = $origRequest['type_id'];
        }
        // if($request['pic'] != null){
        //   // dd(getcwd());
        //   $picToDelete = $origModel['pic'];
        //   $fullDirectory = getcwd() . "/uploads/bandPics/" . $picToDelete;
        //   $fullDirectory = escapeshellcmd($fullDirectory);
        //   if(unlink($fullDirectory)){
        //     $file = $request->file('pic');
        //     $name = $file->getClientOriginalName();
        //     $origModel['pic'] = $name;
        //     $file->move(public_path("/uploads/bandPics"), $name);
        //     $this->imgSize($name);
        //   }
        // }

        $origModel->save();

        // ClientRoles::where("client_id", $origModel->id)->delete();
        //
        // foreach ($origRequest['role'] as $value) {
        //   $theRole = new ClientRoles;
        //   $theRole->client_id = $origModel->id;
        //   $theRole->role_id = $value;
        //   $theRole->save();
        // }
        // return view('gears.list',['gears' => Gear::all()]);
        return redirect()->action('GearController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gear::find($id)->delete();

        // GearType::where("gear_id", $id)->delete();

        // return view('gears.list',['gears' => Gear::all()]);
        return redirect()->action('GearController@index');

    }
}
