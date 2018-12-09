@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="https://nogizakazk.files.wordpress.com/2017/12/dasasdsds.jpg" style="width:100%" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="color:white">乃木坂46</h1>
                    <p style="color:white">nogizaka46</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://livedoor.blogimg.jp/fumichen2/imgs/c/c/cc9dd81d.jpg" style="width:100%" data-src="" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="color:white">欅坂46</h1>
                    <p style="color:black">keyakizaka46</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://images6.fanpop.com/image/photos/34300000/AKB48-akb48-fan-club-34351277-1920-1080.jpg" style="width:100%" data-src="" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="color:black">AKB48</h1>
                    <p style="color:black">akb48</p>
                </div>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<br>
<div class="container">
    <h1>nogizaka46 VS AKB48</h1>
    <br>
        <table class="table">
            <tr>
                <td><h1> 乃木坂46 </h1></td>
                <form class="" action="{{ action('MainPageController@store') }}" method="post">
                    @csrf
                    <input type="hidden" name="nogizaka" value="1">
                    <td> <button type="submit" name="button" style="width:85px; height:50px;" class="btn btn-default" onclick="alert('노기자카에 투표하셨습니다');">
                        <span class="glyphicon glyphicon-thumbs-up" style="font-size:40px; color:#7F1085;"></span>
                    </button></td>
                </form>
                <td><h1> VS </h1></td>
                <td><h1> AKB48 </h1></td>
                <form class="" action="{{ action('MainPageController@store') }}" method="post">
                    @csrf
                    <input type="hidden" name="akb" value="1">
                    <td> <button type="submit" name="button" style="width:85px; height:50px;" class="btn btn-default" onclick="alert('AKB에 투표하셨습니다');">
                        <span class="glyphicon glyphicon-thumbs-up" style="font-size:40px; color:#F390B0;"></span>
                    </button></td>
                </form>
            </tr>
        </table>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:{{$vote_nogi}}%; background-color:#7F1085 !important;">
        乃木坂46
    </div>
    <div class="progress-bar" role="progressbar" style="width:{{100-$vote_nogi}}%; background-color:#F390B0 !important;">
        AKB48
    </div>
</div>
<div class="container">
    <script>

    function callMembersList () {
        var url = "localhost:8000/callMembersList";
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if(xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status === 200) {
                return xmlhttp.responseText;
            }
        }

        xmlhttp.open("get" , url , true);
        xmlhttp.send();
    }

</script>

<div class="container" style="text-align:center;">
<br>
    <ul id="myTab" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a data-target="#nogizaka46" id="nogizaka46-tab" role="tab" data-toggle="tab" aria-controls="nogizaka46" aria-expanded>乃木坂46</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#keyakizaka46" role="tab" id="keyakizaka46-tab" data-toggle="tab" aria-controls="keyakizaka46" aria-expanded="false">欅坂46</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#akb48" role="tab" id="akb48-tab" data-toggle="tab" aria-controls="akb" aria-expanded="false">AKB48</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#nmb48" role="tab" id="nmb48-tab" data-toggle="tab" aria-controls="nmb" aria-expanded="false" >NMB48</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#hkt48" role="tab" id="hkt48-tab" data-toggle="tab" aria-controls="hkt" aria-expanded="false">HKT48</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#ske48" role="tab" id="ske48-tab" data-toggle="tab" aria-controls="ske" aria-expanded="false">SKE48</a>
        </li>
        <li role="presentation" class="">
            <a data-target="#ngt48" role="tab" id="ngt48-tab" data-toggle="tab" aria-controls="ngt" aria-expanded="false">NGT48</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
    <?php
    $index = 0;
     ?>

    @foreach($teams as $team)
    @if($index==0)
        <div role="tabpanel" class="tab-pane fade active in" id="{{$team->team}}" aria-labelledby="{{$team->team}}-tab" style="text-align:center">
    @else
        <div role="tabpanel" class="tab-pane fade" id="{{$team->team}}" aria-labelledby="{{$team->team}}-tab" style="text-align:center">
    @endif
        <br>
        <a href="group/{{$team->team_num}}"> <img src="{{$team->logo_src}}" class="logo"></a>
        <br>
        <br>
            <table class="table" id="team_table" style="color:{{$team->team_color}};">
                <tr>
                    <th colspan="2" style="text-align:center;">{{ $team->team }}</th>
                </tr>
                <tr>
                    <td>데뷔일</td>
                    <td>{{ $team->d_day }}</td>
                </tr>
                <tr>
                    <td>debut song</td>
                    <td>{{ $team->debut_song }}</td>
                </tr>
                <tr>
                    <td>captain</td>
                    <td>{{ $team->captain }}</td>
                </tr>
                <tr>
                    <td>belong to</td>
                    <td>{{ $team->belongTo }}</td>
                </tr>
            </table>
        </div>
        <?php
        $index++;
         ?>
    @endforeach
</div>
</div>
</div>
<br>
<script>
var table = document.getElementById('team_table');
    var tdes = table.getElementsByTagName('td');
    for (var i = 0; i < tdes.length; i++) {
        tdes[i].style.width = "100px";
    }

    var agent = navigator.userAgent.toLowerCase();

    if (agent.indexOf("chrome") != -1) {
        //크롬
    }
    if (agent.indexOf("msie") != -1) {
        alert("크롬으로 접속하길 권장드립니다.");
    }

</script>

@endsection
