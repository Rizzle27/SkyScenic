<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $fillable = ['img_path', 'aircraft', 'airline', 'license_plate', 'location', 'country', 'date'];

    public function users() {
        return $this->BelongsTo(User::class, 'id_user');
    }
}
