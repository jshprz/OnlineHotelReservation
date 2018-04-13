<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    protected $table='tbl_reserved';
    protected $fillable=['user_id','customer_number','reservation_count','time_in','time_out'];
}
