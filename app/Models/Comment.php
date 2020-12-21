<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $table = 'comments';
    public $fillable = [ 'content', 'user_id'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    // returns post of any comment
    public function post()
    {
      return $this->belongsTo(Post::class);
    }

}
