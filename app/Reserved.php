<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    protected $table='tbl_reserved';
    protected $fillable=['user_id','reservation_code','room','room_type','approve','time_in','time_out','hour','total_payment'];
}
