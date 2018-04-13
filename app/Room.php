<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='tbl_room';
    protected $fillable=['room_type','number_of_rooms','occupy','price'];
}
