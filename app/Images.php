<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table='tbl_image';
    protected $fillable=['name'];
}
