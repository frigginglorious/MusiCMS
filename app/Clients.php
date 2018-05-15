<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'name', 'url', 'pic',
    ];

    public function getRoles()
    {
      return $this->hasMany('App\ClientRoles', 'client_id');
    }
    public function getRoleIDs()
    {
      // $theRoles = $this->hasMany('App\ClientRoles', 'client_id');
      // dd($theRoles);
      // $collection = collect([
      //   ['product' => 'Desk', 'price' => 200],
      //   ['product' => 'Chair', 'price' => 100],
      //
      $collection = collect();
      $all = ClientRoles::where('client_id', $this->id)->get();
      foreach($all as $role){
        // dd($role);
        $collection->push($role->role_id);
      }
      return $collection;
    }


}
