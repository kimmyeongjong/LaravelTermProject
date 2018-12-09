<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function writeComment(Request $request)
    {
        if ($request->connect_table == 0) {
            DB::table('comments')->insert(
                ['connect_table'=>$request->connect_table,
                 'connect_contents'=>$request->connect_contents,
                 'writer'=>$request->writer,
                 'contents'=>$request->contents
            ]);

        }else if($request->connect_table == 1){
            DB::table('comments')->insert(
                ['connect_table'=>$request->connect_table,
                 'connect_contents'=>$request->connect_contents,
                 'writer'=>$request->writer,
                 'contents'=>$request->contents
            ]);
        }
        return $request;
    }

}
