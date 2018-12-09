@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<script src="/js/dropzone.js">
</script>
<div class="container">
    <marquee scrollamount=8 style="font-size:20px;">사카미치, AKB사단에 대한 비난, 비방글은 통보 없이 삭제처리됩니다.</marquee>
    <table class="table" style="height:60%;">
        <tr>
            <td>번호</td>
            <td>제목</td>
            <td>작성자</td>
            <td>그룹</td>
            <td>멤버</td>
            <td>작성 날짜</td>
            <td>설정</td>
        </tr>

        <?php $num = 1; ?>
        @foreach($contents as $member)
        <tr>
            <td>
               {{$num}}
            </td>
            <td>
                <a href="/freeBoard/{{$member->id}}">
                    {{$member->title}}
                </a>
            </td>
            <td>
               {{$member->name}}
            </td>
            <td>
                {{$member->group}}
            </td>
            <td>
                {{$member->member}}
            </td>
            <td>
                {{$member->created_at}}
            </td>
            <td>
                @if(auth()->user()->name == ($member->name))
                   <button type="button" name="button" class="btn" onClick="location.href='/notice/delete/{{$num}}'">삭제</button>
                   <button type="button" name="button" class="btn" onClick="location.href='/'">수정</button>
                @else

                @endif
            </td>
        </tr>
        <?php  $num++; ?>
       @endforeach
    </table>

</div>

<a href="/freeBoard/write">글쓰기</a>

@endsection
