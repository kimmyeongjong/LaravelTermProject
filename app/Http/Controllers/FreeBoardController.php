<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreeBoard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Snoopy;

class FreeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = DB::table('free_boards')->paginate(10);
        return view('free_board.freeBoard',['contents'=>$contents]);
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
        $freeBoard = new FreeBoard;
        $freeBoard->title = $request->title;
        $freeBoard->name = $request->name;
        $freeBoard->group = $request->group;
        $freeBoard->member = $request->member;
        $freeBoard->contents = $request->contents;
        $freeBoard->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    public function view($num)
    {
        $view = DB::table('free_boards')->where('id',$num)->get();
        return view('free_board.freeBoardView',['view'=>$view]);
    }

    public function test($group)
    {
        $snoopy = new Snoopy;
        $snoopy->fetch('https://www.showroom-live.com/room/search?genre_id=0&keyword='.$group);

        preg_match_all('/<h4 class=\"listcardinfo-main-text\">(.*?)<\/h4>/is', iconv("utf-8","utf-8",$snoopy->results), $product_list);
        preg_match_all('/<p class=\"listcardinfo-sub-text\">(.*?)<\/p>/is', iconv("utf-8","utf-8",$snoopy->results), $p_list);
        preg_match_all('/<img src="(.+?)[^>]">/is', iconv("utf-8","utf-8",$snoopy->results), $img_list);
        preg_match_all('/<a href="(.+?)[^>]" class="room-url">(.*)<\/a>/is', iconv("utf-8","utf-8",$snoopy->results), $test);

        return view('community.showroom',['titles'=>$product_list[0],'contents'=>$p_list[0],'imges'=>$img_list[0]]);
    }
}
