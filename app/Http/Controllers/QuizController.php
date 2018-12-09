<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function getPoint(Request $request)
    {
        $nowPoint = auth()->user()->point;
        $id = Auth::user()['email'];
        DB::update('update users set point = ? where email = ?', [$request->point + $nowPoint,$id]);
        return redirect('/');
    }
}
