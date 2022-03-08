<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'prefecture_id','email','name','password',
        'sex','hobby','profile','image'
    ];

    public function prefectures()
    {
        return $this->belongsTo('App\Http\Models\Prefecture');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Http\Models\Room');
    }
}
