<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'plan',
        'download_limit',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_subscription');
    }
}
