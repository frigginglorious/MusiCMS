<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Storage;
use App\Roles;
use App\ClientRoles;
use Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(Clients::all());
        return view('clients.list',['clients' => Clients::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('clients.create',['client' => new Clients, 'roles' => Roles::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd(storage_path('app'));
        // dd($request->all());
        // dd($request->all()['role']);

        $client = new Clients;
        $file = $request->file('pic');

        $name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->name) . $file->getClientOriginalName();
        // $name = escapeshellcmd($name);
        // dd($name);
        $fullRequest = $request->all();
        $fullRequest['pic'] = $name;
        $file->move(public_path("/uploads/bandPics"), $name);
        $this->imgSize($name);
        $result = $client::create($fullRequest);

        foreach ($fullRequest['role'] as $value) {
          $theRole = new ClientRoles;
          $theRole->client_id = $result->id;
          $theRole->role_id = $value;
          $theRole->save();
        }

        return view('clients.list',['clients' => Clients::all()]);

        // dd($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(Clients::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('clients.edit',['client' => Clients::find($id), 'roles' => Roles::all()]);

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
      $origClient = Clients::findOrFail($id);

      $origRequest = $request->all();

      if($request['name'] != null && $request['name'] != $origClient->name){
        $origClient->name = $origRequest['name'];
      }
      if($request['url'] != null){
        $origClient->url = $origRequest['url'];
      }
      if($request['pic'] != null){
        // dd(getcwd());
        $picToDelete = $origClient['pic'];
        $fullDirectory = getcwd() . "/uploads/bandPics/" . $picToDelete;
        $fullDirectory = escapeshellcmd($fullDirectory);
        if(unlink($fullDirectory)){
          $file = $request->file('pic');
          $name = $file->getClientOriginalName();
          $origClient['pic'] = $name;
          $file->move(public_path("/uploads/bandPics"), $name);
          $this->imgSize($name);
        }
      }

      $origClient->save();

      ClientRoles::where("client_id", $origClient->id)->delete();

      foreach ($origRequest['role'] as $value) {
        $theRole = new ClientRoles;
        $theRole->client_id = $origClient->id;
        $theRole->role_id = $value;
        $theRole->save();
      }
      return view('clients.list',['clients' => Clients::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Clients::find($id)->delete();
      ClientRoles::where("client_id", $id)->delete();
      return view('clients.list',['clients' => Clients::all()]);

    }
    public function imgSize($file){
      // open an image file
      $fullDirectory = getcwd() . "/uploads/bandPics/" . $file;
      $fullDirectory = escapeshellcmd($fullDirectory);
      $img = Image::make($fullDirectory);

      $img->resize(320, 240, function ($constraint) {
          $constraint->aspectRatio();
      });

      $img->save($fullDirectory);
    }
}
