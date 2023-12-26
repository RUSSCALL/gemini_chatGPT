<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'prompt_id',
        'user_id',
        'content'
    ];

    // Relationships
    public function chat()
    {
        return $this->belongsTo(Chat::class, 'chat_id', 'uuuid');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
