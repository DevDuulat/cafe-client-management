<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'review', 'user_id', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
