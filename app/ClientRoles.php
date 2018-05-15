<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRoles extends Model
{
    protected $fillable = [
        'client_id', 'role_id',
    ];
    public function role()
    {
      return $this->belongsTo('App\Roles', 'role_id');
    }
    public function client()
    {
      return $this->hasOne('App\Clients', 'client_id');
    }
}
