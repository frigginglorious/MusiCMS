<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = ['id'];
    public function getContents(){
        return $this->content;
    }
}
