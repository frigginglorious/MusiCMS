<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
    ];

    public function gear()
    {
      return $this->hasMany('App\Gear');
    // return Type::find($this->id);
    }
    public static function nav()
    {
        $nav = collect(["Studio", "Mic Locker", "Outboard", "Monitoring", "DAW", "Amps", "Instruments", "FX Pedals", "Misc"]);
        return $nav;
    }
}
