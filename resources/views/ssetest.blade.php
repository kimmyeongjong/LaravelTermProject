@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<div class="container">
    <div class="bg-primary center-block" style="width:300px;">
        <img src="/img/101.jpg" alt="">
    </div>
    <br>
    <div class="container" style="text-align:center">
        <form class="" action="" method="post">
            <br>
            <h3>환영합니다</h3>
            <h3>현재 경매 상품은 {{$auction[0]->product}} 입니다</h3>
            <h3>시작 가격은 {{$auction[0]->nowPrice}} 입니다</h3>
            <h3>입찰 가격을 클릭하면 입찰가격에 표시되어 있는 금액 만큼 포인트가 차감됩니다.</h3>
            <h2 style="display:inline-block;">현재 입찰자 : </h2> <input type="text" id="nowBidder" class="form-control" name="" style="display:inline-block;width:500px;" value="">
            <br>
            <h2 style="display:inline-block;">현재 가격 : </h2> <input id="nowPrice" class="form-control" name="nowPrice" style="display:inline-block;width:500px;" value="{{$auction[0]->nowPrice}}" readonly>
            <br>
            <h2 style="display:inline-block;">입찰 가격 : </h2> <input id="bidPrice" class="form-control" name="bidPrice" style="display:inline-block;width:500px;" value="{{$auction[0]->nowPrice +500}}" readonly>
            <br>
            <br>
            <button type="button" name="button" onclick="chart_vote_button(500)" class="btn btn-danger">입찰</button>
        </form>
    </div>
    <br>
</div>
{{$auction[0]->id}}
<h1 id="time"></h1>

<script type="text/javascript">

  function chart_vote_button(para){
    $.ajax({
        url:"/chart/" + para+"",
        success:function(data){
        },
        error:function(){
          alert('틀렸어');
        }
    });
  }
</script>

<script>
var animationCheck = true;
function chart(datas) {
    var datass = eval(datas);
    var nowPrice = $('#nowPrice').val();
    var bidPrice = parseInt(nowPrice) + 500;
    $('#nowPrice').val(datass[0]);
    $('#bidPrice').val(bidPrice);
    $('#nowBidder').val(datass[1]);
    animationCheck = false;
}
</script>
<!--client-->
<script type="text/javascript">
var event_data = '';
//chart(event.data);
$(function(){
    client();
  });
  function client(data){
    var source = new EventSource("/server/100");
    // console.log(source);
    source.onmessage = function(event) {
        chart(event.data);
      }
    }
</script>
@endsection
