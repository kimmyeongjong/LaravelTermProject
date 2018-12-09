@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
    <div class="container">
        <table class="table">
            <tr>
                <td>타이틀</td>
                <td>{{$view[0]->title}}</td>
            </tr>
            <tr>
                <td>작성자</td>
                <td>{{$view[0]->name}}</td>
            </tr>
            <tr>
                <td>내용</td>
                <td>{!!$view[0]->contents!!}</td>
            </tr>
        </table>
    </div>
@endsection
