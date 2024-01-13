<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $table = 'users'; /* テーブル名を指定 */
    /* getData メソッドで users テーブルの中の全てのデータを取得 */
    public function getData(){
        $data = DB::table($this->table)->get();
        return $data;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /*  */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
      * Timestampモデル関連付け
      */
    public function timestamp()
    {
        return $this->hasOne(Timestamp::class);
    }
}
