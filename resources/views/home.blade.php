@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection
@section('content')
<div style="background-image:url('/img/backgroundGif.gif'); background-size:100%;  background-repeat: repeat-y; background-attachment: fixed;">
    <br>
    <div class="container" style="height:800px; opacity: 0.5;">
        <br>
        <div class="columns is-marginless is-centered" style="background-color: white;">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            {{ auth()->user()->name }}님 환영합니다.
                        </p>
                    </header>
                    <div class="card-content">
                        포인트 : {{ auth()->user()->point }}
                        <br>
                        推しメン : {{ auth()->user()->push_member }}
                        <br>
                        <?php
                            $joinTime = auth()->user()->created_at;
                            $result = (strtotime(date('Y-m-d H:i:s')) - strtotime($joinTime));
                            $tempMinute = $result/60;
                            $tempHour = $tempMinute/60;
                            $minute = $result%60;
                            $hour = $tempMinute%60;
                            $day = $tempHour/24;
                            echo "가입한지 ".(int)$day."일 ".$hour."시간 ".$minute."분 지났습니다.";
                         ?>
                         <br><br>
                         <button type="button" name="button" onclick="location.href='/'" class="btn" style="margin:2px; background-color:pink;">홈으로</button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
