<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable = [
        'komen_id',
        'user_id',
        'message',
    ];

    public function komen()
    {
        return $this->belongsTo(komen::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
