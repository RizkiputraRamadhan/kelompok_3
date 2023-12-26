<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'room';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
