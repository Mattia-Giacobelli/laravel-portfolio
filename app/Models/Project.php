<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function type()
    {

        $this->belongsTo(Type::class);
    }
}
