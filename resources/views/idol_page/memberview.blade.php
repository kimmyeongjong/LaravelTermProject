@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<br>
<div class="container">
    <table class="table">
        <tr>
            <td>이름</td>
            <td>{{$member->name_cc}} {{$member->name_en}}</td>
        </tr>
        <tr>
            <td>별명</td>
            <td>{{$member->nickname}}</td>
        </tr>
        <tr>
            <td>생일</td>
            <td>{{$member->birthday}}</td>
        </tr>
        <tr>
            <td>능력치</td>
            <td><div id="Nwagon"></div></td>
        </tr>
        <tr>
            <td>팀</td>
            <td>{{$team[0]->team}}</td>
        </tr>
        <tr>
            <td>팀 컬러</td>
            <td> <div style="width:100px; height:50px; background-color:{{$team[0]->team_color}};"></div> </td>
        </tr>
        <tr>
            <td>데뷔곡</td>
            <td>{{$team[0]->debut_song}}</td>
        </tr>
        <tr>
            <td>캡틴</td>
            <td>{{$team[0]->captain}}</td>
        </tr>
        <tr>
            <td>소속</td>
            <td>{{$team[0]->belongTo}}</td>
        </tr>
        <tr>
            <td>로고</td>
            <td> <img src="{{$team[0]->logo_src}}" style="width:200px;height:400px;" alt=""> </td>
        </tr>
        <tr>
            <td>자기소개</td>
            <td>{!!$member->introduce!!}</td>
        </tr>
    </table>
</div>


<script>
    var options = {
        'legend':{
            names: [
                '귀여움',
                '섹시',
                '뷰티',
                '스마트',
                '스타일',
                '긍정',
                '에너지',
                '갭모에'
            ],
            hrefs: [

            ]
        },
        'dataset': {
            title: 'Member Ability',
            values: [[{{$member->cute}},
                {{$member->sexy}},
                {{$member->beauty}},
                {{$member->smart}},
                {{$member->style}},
                {{$member->positive}},
                {{$member->energy}},
                {{$member->anti_charm}}]],
            bgColor: '#f9f9f9',
            fgColor: '#30a1ce',
        },
        'chartDiv': 'Nwagon',
        'chartType': 'radar',
        'chartSize': { width: 500, height: 300 }
    };
    Nwagon.chart(options);
</script>

@endsection
