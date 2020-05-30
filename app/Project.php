<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    //projects
    public function getRouteKeyName()
    {
        return 'url';
    }
}
