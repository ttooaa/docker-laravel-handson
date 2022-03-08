<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'topic_name'
    ];

    public function rooms()
    {
        return $this->belongsToMany('App\Http\Models\Room');
    }
}
