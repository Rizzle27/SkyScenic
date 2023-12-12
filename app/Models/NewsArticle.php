<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = ['img_path', 'title', 'subtitle', 'body', 'date', 'id_user'];

    public function users() {
        return $this->BelongsTo(User::class, 'id_user');
    }
}
