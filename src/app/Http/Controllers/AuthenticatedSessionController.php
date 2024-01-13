<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
     /* ホームページ表示 */
    public function index()
    {
        /* 名前取得 */
        $users = User::all();
        return view('attendance', compact('users'));
    }
}
