<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $table = 'projects';
    public $fillable = ['title', 'content', 'active','image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
