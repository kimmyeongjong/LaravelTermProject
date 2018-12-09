@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

<div class="container">
    <table class="table">
        <tr>
            <td>번호</td>
            <td>경매 이름</td>
            <td>경매 상품</td>
            <td>등록자</td>
            <td>종료 일자</td>
        </tr>
        <?php $num = 1; ?>
        @foreach($contents as $content)
        <tr>
            <td>{{$num}}</td>
            <td> <a href="/auctionShop/{{$content->id}}">{{$content->name}}</a></td>
            <td>{{$content->product}}</td>
            <td>{{$content->registrant}}</td>
            <td>{{$content->deadline}}</td>
        </tr>
        <?php  $num++; ?>
        @endforeach
    </table>
    {{$contents->links()}}
</div>
<a href="/iconregist">경매등록</a>
@endsection
