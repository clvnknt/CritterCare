<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
    ];

    // Polymorphic relationship with users and admins
    public function user()
    {
        return $this->morphTo();
    }
}

