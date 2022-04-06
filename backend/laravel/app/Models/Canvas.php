<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canvas extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->hasOne('App\Models\CanvasRoom', 'id', 'canvas_room_id');
    }
}
