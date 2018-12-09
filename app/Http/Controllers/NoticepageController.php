<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class NoticepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()['name'];
        // $contents = DB::select('select * from notices')->paginate(15);
        $contents = DB::table('notices')->paginate(10);
        $serch_value = DB::table('notices')->select('contents','title','writer')->get();
        return view('notice.noticepage',['members'=>$contents,'user'=>$user,'serch_value'=>$serch_value]);
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
    {   $date = date("Y-m-d H:i:s");
        $icon = Auth::user()['icon'];
        $name = Auth::user()['name'];
        DB::insert(
            'insert into notices (title,icon,writer,writedDay,contents) values (?,?,?,?,?)'
            ,[$request->title,$icon,$name,$date,$request->contents]);
        $user = Auth::user()['name'];
        $contents = DB::table('notices')->paginate(10);

        return redirect('/notice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($num)
     {
         $select_value = DB::table('notices')
         ->where('notice_id', $num)
         ->get();

         $select_comment = DB::table('comments')
         ->where('connect_contents', $num)
         ->where('connect_table', 1)
         ->get();
         return view('notice.noticeView',['viewValue'=>$select_value,'comments'=>$select_comment]);
     }

     public function delete($num)
     {
         //pagination 글 삭제 구현

         DB::table('notices')
         ->where('writer', Auth::user()['name'])
         ->where('notice_id', $num)
         ->delete();

         $user = Auth::user()['name'];
         $contents = DB::table('notices')->paginate(10);
         $serch_value = DB::table('notices')->select('contents','title','writer')->get();
         return view('notice.noticepage',['members'=>$contents,'user'=>$user,'serch_value'=>$serch_value]);
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
    public function update(Request $request)
    {
        $id = $request->id;
        DB::update('update notices set contents = ? where notice_id = ?', [$request->contents,$id]);
        DB::update('update notices set title = ? where notice_id = ?', [$request->title,$id]);
        $user = Auth::user()['name'];
        // $contents = DB::select('select * from notices')->paginate(15);
        $contents = DB::table('notices')->paginate(10);
        $serch_value = DB::table('notices')->select('contents','title','writer')->get();
        return view('notice.noticepage',['members'=>$contents,'user'=>$user,'serch_value'=>$serch_value]);
    }

    public function write()
    {
        if (Auth::check()) {
            return view('notice.noticewrite');
        }else{
            echo "<script> alert('please login'); </script>";
            return view('auth.login');
            // return redirect()->intended('/login');
            // alert 창 출력하고 redirect
        }
    }

    public function modify($num)
    {
        $modify = DB::table('notices')
        ->where('writer', Auth::user()['name'])
        ->where('notice_id', $num)->get();

        return view('notice.noticeModify',['modify'=>$modify]);
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
