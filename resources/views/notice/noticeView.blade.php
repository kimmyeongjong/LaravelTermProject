@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection
@section('mainSection')
<br>
    <div class="container">
        <table class="table">
            <tr>
                <td>TITLE</td>
                <td>{{$viewValue[0]->title}}</td>
                <td>{{$viewValue[0]->writedDay}}</td>
            </tr>
            <tr>
                <td>WRITER</td>
                <td>{{$viewValue[0]->writer}}</td>
                <td><img src="/icon/{{$viewValue[0]->icon}}.jpg" alt=""></td>
            </tr>
            <tr style="height:600px;">
                <td><?= $viewValue[0]->contents ?></td>
            </tr>
        </table>
    </div>
    <div class="container">
        <form class="form" id="comment_form" action="/comment" method="post">
            @csrf
            <table class="table">
                <input type="hidden" name="connect_table" value="1">
                <input type="hidden" name="connect_contents" value="{{$viewValue[0]->notice_id}}">
                <tr>
                    <td>작성자</td>
                    <td> <input type="text" class="form-control" name="writer" value="{{ auth()->user()->name }}" readonly> </td>
                </tr>
                <tr>
                    <td>댓글 내용</td>
                    <td> <textarea class="form-control" name="contents" rows="8" cols="80"></textarea> </td>
                </tr>
                <tr>
                    <td> <input type="button" class="btn btn-primary" id="push_comment" name="" value="등록"> </td>
                </tr>
            </table>
        </form>
        <table class="table" id="comments_table" cellpadding="5" cellspacing="2" style="word-break:break-all;">
            @foreach($comments as $comment)
            <tr>
                <td style="width:150px;"> {{ $comment->writer }} </td>
                <td> {{ $comment->contents }} <td>
            </tr>
            @endforeach
        </table>
    </div>
<script>
    $(function(){
        $('#push_comment').click(function() {
            var params = $("#comment_form").serialize();
            $.ajax({
                type:"POST",
                url:"{{ url('/comment') }}",
                data:params,
                dataType:"html",
                success:function (data) {
                    var parserData = JSON.parse(data);
                    var writer = parserData['writer'];
                    var contents = parserData['contents'];

                    var innerComment = '<tr><td style="width:150px;">' + writer + '</td><td>'+ contents + '</td></tr>';
                    $('#comments_table').append(innerComment);
                }
            })
        })
    })
</script>
@endsection
