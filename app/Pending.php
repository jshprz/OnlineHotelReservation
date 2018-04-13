<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
    protected $table='tbl_pending';
    protected $fillable=['user_id','customer_number','reservation_count','time_in','time_out'];
}
