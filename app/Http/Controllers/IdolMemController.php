<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App;

class IdolMemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($num)
    {
        if ($num<10) {
            $team = \App\Idol_member::where('team_num',$num)->get();
            return view( 'idol_page.memberpage', ['members' => $team]);
        }else{

            $member = DB::table('idol_members')
            ->where('mem_num',$num)
            ->join('idol_ability','mem_num','=','idol_ability.id')
            ->select('idol_members.*', 'idol_ability.*')->get();
            $my_team = DB::table('idol_members')->where('mem_num',$num)->select('team_num')->get();
            $team = DB::table('idol_team')->where('team_num',$my_team[0]->team_num)->get();


            return view('idol_page.memberview',['member'=>$member[0], 'team'=>$team]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('idol_members')->where('mem_num',$request->title)->update(['introduce'=>$request->contents]);
        \App\Idol_member::where('mem_num',$request->title)->update(['introduce'=>$request->contents]);
        $team = DB::table('idol_team')->orderBy('order')->get();
        return view("/welcome",['teams'=>$team]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
