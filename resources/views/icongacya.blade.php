@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
    <script type="text/javascript">

    var generateRandom = function (min, max) {
      var ranNum = Math.floor(Math.random()*(max-min+1)) + min;
      return ranNum;
    }
        function iconLotto() {
            var trigger = 0;
            //아이콘 숫자로 처리하고 숫자별 if 작성
            big_message.innerHTML = "아이콘이 나올 때 까지 기다려주세요";
            small_message.innerHTML = "아이콘이 나오기 전에 GET을 누르면 초기 아이콘으로 돌아갑니다.";
            var thr = setInterval(function () {
                var icon_img = document.getElementById('icon_img');
                var big_message = document.getElementById('big_message');
                var small_message = document.getElementById('small_message');
                var imgSrc = document.getElementById('imgSrc');

                var ran_src =  Math.floor(Math.random() * (8- 0) + 0);
                var temp = String(ran_src);
                icon_img.src = "/icon/" + temp + ".jpg";
                trigger++;

                if(trigger>100){
                    clearInterval(thr);
                    if (ran_src==0||ran_src==4) {
                        big_message.innerHTML = "아깝네요";
                        small_message.innerHTML = "꽝입니다.";
                    }else if (ran_src>0&&ran_src<4) {
                        big_message.innerHTML = "축하합니다.";
                        small_message.innerHTML = "시라이시 마이.";
                    }else {
                        big_message.innerHTML = "축하합니다.";
                        small_message.innerHTML = "니시노 나나세.";
                    }
                    imgSrc.value = ran_src;
                }
            },40);
        }

        function pointLotto() {
            alert()
            var trigger = 0;

            var thr = setInterval(function () {
                var point = document.getElementById('point');

                var randomPoint =  generateRandom(50, 200);
                point.innerHTML = randomPoint;
                trigger++;
                if(trigger>100){
                    clearInterval(thr);
                }
            },40);
        }

    </script>
    <br>
<div class="container">

    <div class="col-xs-2 center-block" style="float:none;">
        <form action="/lotto/get" method="post">
            @csrf
            <table class="table">
                <tr>
                    <td>
                        <img  alt="" id="icon_img" style="width:50px; height:50px margin:10px;" src="http://mblogthumb4.phinf.naver.net/MjAxNzAzMjVfMTk1/MDAxNDkwNDE3ODA5OTU3.ORj5q89lWH5qATVP1uJcK3G22Gy8Nh9xQmYQpGLI-X8g.U92lJbIwuoInw08WPtEaWd72FPRl7wTX3PVE9zoCjZwg.PNG.koowq/%EB%AC%BC%EC%9D%8C%ED%91%9C3_%EC%95%84%EC%9D%B4%EC%BD%98-01.png?type=w800">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" name="button" style=" margin:10px;" onclick="iconLotto()"> START </button>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" class="btn" style=" margin:10px;" value="GET">
                    </td>
                </tr>
            </table>

            <input type="hidden" name="src" id="imgSrc" value="" style="color:white">
            <br>
            <h1 id="point"></h1>
            <table>
                <tr>
                    <td> <button type="button" name="button" class="btn btn-primary" onclick="pointLotto()">START</button></td>
                    <td> <button type="button" name="button" class="btn btn-primary" onclick="">GET</button></td>
                </tr>
            </table>

            <br><br>
        </form>
    </div>
    <h1 id="big_message">START버튼을 누르고 대기해주세요</h1>
    <h1 id="small_message"></h1>

</div>

@endsection
