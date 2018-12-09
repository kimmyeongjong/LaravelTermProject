@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

<script language="javascript">
    var delay=10;
    var correctAnswers=new Array("a","c","a","a","d");

    var q_num=1;
    var timer;
    var layer;
    var clock=delay;
    var score=0;

    function show_question(){
    	if (layer=eval("document.all.question"+q_num)){
    		layer.style.display="inline";
    		document.all.timeLeft.innerHTML=clock;
    		hide_question();
    	} else {
    		document.all.timeLeft.innerHTML=0;
    		document.all.quizScore.innerHTML="당신은 "+(q_num-1)+"문제중 "+score+"개를 맞췄습니다.";
    		document.all.quizScore.style.display="inline";
    	}
    }

    function hide_question(){
    	if (clock>0) {
    		document.all.timeLeft.innerHTML=clock;
    		clock--;
    		timer=setTimeout("hide_question()",1000);
    	} else {
    		clearTimeout(timer);
    		document.all.answerBoard.innerHTML=" ";
    		clock=delay;
    		layer.style.display="none";
    		q_num++;
    		show_question();
    	}
    }

    function check_answer(answer){
    	if (correctAnswers[q_num-1]==answer){
    		score++;
    		document.all.answerBoard.innerHTML="<font color=blue><b>정답입니다.</b></font>";
            document.all.point.value = score*100;
    	} else {
    		document.all.answerBoard.innerHTML="<font color=red><b>땡! 틀렸습니다.</b></font>";
    	}
    	clock=0;
    	clearTimeout(timer);
    	timer=setTimeout("hide_question()",700);
    }

    window.onload=show_question;
</script>
<div class="container" style="text-align:center">
    제한시간 : <B><span id="timeLeft"></span></B> 초<br>
    <br>
    <form class="form" action="/quiz/point" method="post">
        @csrf
        <input type="text" id="point" name="point" value="" style="width:30px;background-color:transparent;border:0 solid black;" readonly>
        <input type="submit" class="btn btn-danger" name="" value="GET">
    </form>
    <div id="answerBoard"> </div>
    <br>

    <div id="question1" style="display:none">
    	<b>1. 노기자카 내에서 도S케릭터로 가장 유명한 멤버는?</b><br>
    	<a href="javascript:void(0)" onclick="check_answer('a')">a) 사이토 아스카</a><br>
    	<a href="javascript:void(0)" onclick="check_answer('b')">b) 시라이시 마이</a><br>
    	<a href="javascript:void(0)" onclick="check_answer('c')">c) 후카가와 마이</a><br>
    	<a href="javascript:void(0)" onclick="check_answer('d')">d) 아키모토 마나츠</a><br>
    </div>

    <div id="question2" style="display:none">
        <b>2. AKB 3대 극장 총 지배인은?</b><br>
        <a href="javascript:void(0)" onclick="check_answer('a')">a) 사쿠라이 레이카</a><br>
        <a href="javascript:void(0)" onclick="check_answer('b')">b) 카시와기 유키</a><br>
        <a href="javascript:void(0)" onclick="check_answer('c')">c) 무카이치 미온</a><br>
        <a href="javascript:void(0)" onclick="check_answer('d')">d) 미야와키 사쿠라</a><br>
    </div>

    <div id="question3" style="display:none">
        <b>3. 2019년 2월에 졸업하며 노기자카에서 가장 많은 센터를 한 멤버는?</b><br>
        <a href="javascript:void(0)" onclick="check_answer('a')">a) 니시노 나나세</a><br>
        <a href="javascript:void(0)" onclick="check_answer('b')">b) 카와고 히나타</a><br>
        <a href="javascript:void(0)" onclick="check_answer('c')">c) 이와모토 렌카</a><br>
        <a href="javascript:void(0)" onclick="check_answer('d')">d) 에토 미사</a><br>
    </div>

    <div id="question4" style="display:none">
        <b>4. 케야키 자카에서 가장 많은 센터를 한 멤버는?</b><br>
        <a href="javascript:void(0)" onclick="check_answer('a')">a) 히라테 유리나</a><br>
        <a href="javascript:void(0)" onclick="check_answer('b')">b) 와타나베 리사</a><br>
        <a href="javascript:void(0)" onclick="check_answer('c')">c) 나가하마 네루</a><br>
        <a href="javascript:void(0)" onclick="check_answer('d')">d) 야부키 나코</a><br>
    </div>

    <div id="question5" style="display:none">
        <b>5. NMB의 영원한 캡틴은?</b><br>
        <a href="javascript:void(0)" onclick="check_answer('a')">a) 시부야 나기사</a><br>
        <a href="javascript:void(0)" onclick="check_answer('b')">b) 시로마 미루</a><br>
        <a href="javascript:void(0)" onclick="check_answer('c')">c) 요시다 아카리</a><br>
        <a href="javascript:void(0)" onclick="check_answer('d')">d) 야마모토 사야카</a><br>
    </div>

    <div id="quizScore" style="display:none">
    </div>
</div>

@endsection
