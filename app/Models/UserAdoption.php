<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        // Add other fillable attributes here
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
