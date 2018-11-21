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
        $nav = collect(explode(',', env('DATA_TYPES')));
        return $nav;
    }
}
