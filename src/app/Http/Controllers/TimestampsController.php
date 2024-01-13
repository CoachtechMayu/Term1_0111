<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timestamp;
use App\Models\User;
use App\Models\Rest;
use Auth;
use Carbon\Carbon;

class TimestampsController extends Controller
{
    public function timeOn()
    {   // 現在認証しているユーザーを取得
        $user = Auth::user();
        $timestamp = Timestamp::create([
            'user_id' => $user->id,
            'time_in' => Carbon::now()
        ]);
        return back();
    }

    public function timeOff()
    {
        $user = Auth::user();
        $timestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        $timestamp->update([
            'time_out' => Carbon::now()
        ]);
            return back();
    }
}