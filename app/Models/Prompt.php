<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;

    protected $table = 'prompts';

    protected $fillable = [
        'chat_id',
        'user_id',
        'content'
        // Add other fillable fields as needed
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

    public function response()
    {
        return $this->hasOne(Response::class, 'prompt_id', 'id');
    }
}
