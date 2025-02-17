<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reservation_date',
        'phone',
        'location',
        'number_of_persons',
        'table_number',
        'time',
        'wishes',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
