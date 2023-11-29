<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['img_path', 'aircraft', 'airline', 'license_plate', 'location', 'country', 'date'];
}
