<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use SSEEvent;
use SSE;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

    class AuctionController extends Controller
    {
        public function index()
        {
            $auction = DB::table('auctions')->get();
            return view('ssetest',['auction'=>$auction]);
        }
        public function chart($para){
            //DB에 업데이트
            $tempId = DB::table('auctions')->get();
            $id = $tempId[0]->id;
            $price = $tempId[0]->nowPrice + $para;
            $temp = DB::table('auctions')->get();
            DB::table('auctions')
            ->where('id', $id)
            ->update(['nowPrice' => $price]);
            $user = Auth::user()['name'];
            DB::table('auctions')
            ->where('id', $id)
            ->update(['user_name' => $user]);
            return "ok";
        }

        public function server($data){
         header('Content-Type: text/event-stream');
         header('Cache-Control: no-cache');
         //DB에서 get
         $temp = DB::table('auctions')->get();
         retry: 500;
         $realData = [];

         $realData[0] = $temp[0]->nowPrice;
         $realData[1] = $temp[0]->user_name;
         $data = json_encode($realData);
         echo "data:{$data}\n\n";
         flush();
        }

        public function view()
        {
            $contents = DB::table('auction')->paginate(10);
            return view('auction',['contents'=>$contents]);
        }
        public function regist()
        {
            return view('auctionRegist');
        }
    }
