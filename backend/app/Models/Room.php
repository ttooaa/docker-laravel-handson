<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'host_id','member_id','title','detail',
        'start_time','end_time','number_of_people'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Http\Models\User');
    }

    public function topics()
    {
        return $this->belongsToMany('App\Http\Models\Topic');
    }
}
