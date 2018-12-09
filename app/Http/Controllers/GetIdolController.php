<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Redirector;

class GetIdolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back()->with('alert', 'Deleted!');
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
        if ($request->src == 0) {
            $icon = 0;
        }else {
            $icon = $request->src;
        }
        $id = Auth::user()['email'];
        $point = Auth::user()['point'];
        DB::update('update users set icon = ? where email = ?', [$icon,$id]);
        DB::update('update users set point = ? where email = ?', [$point-100,$id]);
        return redirect()->back();

    }

    public function getIdol(Request $request)
    {
        $icon = $request->src;
        $id = Auth::user()['email'];
        $point = Auth::user()['point'];
        DB::update('update users set icon = ? where email = ?', [$icon,$id]);
        DB::update('update users set point = ? where email = ?', [$point-100,$id]);
        return redirect()->back();
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

    }
}
