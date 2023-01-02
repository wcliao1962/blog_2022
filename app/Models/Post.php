<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
