@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

<div class="container">
    <form class="form" action="/goAction" method="post">
        @csrf
        <table class="table">
            <tr>
                <td>경매 이름</td>
                <td><input type="text" class="form-control" name="name" value=""></td>
            </tr>
            <tr>
                <td>경매 상품</td>
                <td><input type="text" class="form-control" name="product" value=""></td>
            </tr>
            <tr>
                <td>등록자</td>
                <td><input type="text" class="form-control" name="registrant" value="{{ Auth::user()['name'] }}" readonly></td>
            </tr>
            <tr>
                <td>시작 가격</td>
                <td><input type="number" class="form-control" name="start" value="100"></td>
            </tr>
            <tr>
                <td>종료 날짜</td>
                <td><input type="datetime-local" class="form-control" name="deadline"></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" class="form-control" name="" value="등록"> </td>
            </tr>
        </table>
    </form>
</div>

@endsection
