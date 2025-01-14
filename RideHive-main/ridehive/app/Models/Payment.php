<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'user_id',
        'amount',
        'payment_method',
        'payment_date',
        'status',
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id'); // 'user_id' is the foreign key
    }
}
