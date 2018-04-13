<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table='tbl_customer_history';
    protected $fillable=['user_id','room','room_type','time_in','time_out','hour','total_payment'];
}
