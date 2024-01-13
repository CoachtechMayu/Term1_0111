<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Timestamp;
use App\Models\User;
use Auth;
use Carbon\Carbon;


class RestController extends Controller
{
    public function BreakStart()
    {
        $user = Auth::user();
        $break_time = Rest::create([
            'user_id' => $user->id,
            'break_start' => Carbon::now()
        ]);
        return back();
    }

    public function BreakEnd()
    {
        $user = Auth::user();
        $break_time = Rest::where('user_id', $user->id)->latest()->first();
        $break_time->update([
            'break_end' => Carbon::now()
        ]);
            return back();
    }

}
