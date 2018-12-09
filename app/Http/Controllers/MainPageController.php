<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vote = DB::table('main_pages')->get();
        $team = DB::table('idol_team')->orderBy('order')->get();
        $nogizaka = $vote[0]->nogizaka;
        $akb = $vote[0]->akb;

        $nogi_value = round((100/($nogizaka+$akb))*$nogizaka);
        return view('welcome',['teams'=>$team,'vote_nogi'=>$nogi_value]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vote = DB::table('main_pages')->get();

        if ($request->nogizaka == 1) {
            $nogizaka = $vote[0]->nogizaka;
            DB::table('main_pages')->where('id',0)->update(['nogizaka'=>$nogizaka+1]);
        }else {
            $akb = $vote[0]->akb;
            DB::table('main_pages')->where('id',0)->update(['akb'=>$akb+1]);
        }

        $team = DB::table('idol_team')->orderBy('order')->get();
        $nogizaka = $vote[0]->nogizaka;
        $akb = $vote[0]->akb;

        $nogi_value = round((100/($nogizaka+$akb))*$nogizaka);
        return view('welcome',['teams'=>$team,'vote_nogi'=>$nogi_value]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function vote(Request $request)
    {
        return "ok";
    }

    public function logout()
    {
        Auth::logout();
        $vote = DB::table('main_pages')->get();
        $team = DB::table('idol_team')->orderBy('order')->get();
        $nogizaka = $vote[0]->nogizaka;
        $akb = $vote[0]->akb;

        $nogi_value = round((100/($nogizaka+$akb))*$nogizaka);
        return view('welcome',['teams'=>$team,'vote_nogi'=>$nogi_value]);
    }
}
