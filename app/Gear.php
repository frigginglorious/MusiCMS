<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Gear extends Model
{
    protected $fillable = [
        'name', 'short_description', 'type_id', 'icon', 'path', 'pic'
    ];
    public function type()
    {
      return $this->belongsTo('App\Type');
    // return Type::find($this->id);
    }
}
