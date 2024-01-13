<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'break_start',
        'break_end'
    ];
    /**
     * タイムスタンプ関連付け
     */
    public function timestamp()
    {
        return $this->belongsTo(User::class);
    }
}
