<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timestamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'time_in',
        'time_out'
    ];

    /**
     * ユーザー関連付け
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
