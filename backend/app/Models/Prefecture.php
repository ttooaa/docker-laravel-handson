<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
       'prefecture_name'
    ];

    public function users()
    {
        return $this->hasMany('App\Http\Models\User');
    }
}
