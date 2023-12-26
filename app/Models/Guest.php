<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'guest';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
