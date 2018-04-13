<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siteSettings extends Model
{
    protected $table='siteSettings';
    protected $fillable=['option','value'];
}
