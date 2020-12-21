<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $table = 'news';
    public $fillable = ['title', 'content', 'category','active','image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
