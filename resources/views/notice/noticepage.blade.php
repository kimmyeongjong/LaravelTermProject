@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

<div class="main">
    <div class="container">
        <table class="table table-striped">
          <!-- 게시판 메인 테이블 -->
              <tr>
                  <th scope="col">번호</th>
                  <th scope="col">제목</th>
                  <th scope="col">작성자</th>
                  <th scope="col">작성일시</th>
                  <th scope="col">조회수</th>
                  <th scope="col">설정</th>
              </tr>
              <?php $num = 1; ?>
              @foreach($members as $member)
              <tr>
                  <td>
                     {{$num}}
                  </td>
                  <td>
                      <a href="/notice/{{$member->notice_id}}">
                          {{$member->title}}
                      </a>
                  </td>
                  <td>
                      <img src="/icon/{{$member->icon}}.jpg" alt="" style="width:30px">
                     {{$member->writer}}
                  </td>
                  <td>
                      {{$member->writedDay}}
                  </td>
                  <td>
                      {{$member->hits}}
                  </td>
                  <td>
                      @if($user==($member->writer))
                         <button type="button" name="button" class="btn" onClick="location.href='/notice/delete/{{$member->notice_id}}'">삭제</button>
                         <button type="button" name="button" class="btn" onClick="location.href='/notice/modify/{{$member->notice_id}}'">수정</button>
                      @endif
                  </td>
              </tr>
              <?php  $num++; ?>
             @endforeach
          </table>
              {{$members->links()}}
          <div class="">
              <a href="/notice/write" class="btn btn-primary" style="font-size:20px; color:black;">글작성</a>
          </div>
          <br>
          <input type="text" id="searchbox" class="" name="" value=""> <input type="submit" name="" value="submit">
    </div>
</div>
<br>
<script>
var getDB = {!! $serch_value !!};
    var availableTags = [];
    for (var i in getDB) {
        for (var j in getDB[i]) {
                availableTags.push([getDB[i][j]]);
        }
    }
    console.log(availableTags);
    $(document).ready(function() {
        $("#searchbox").autocomplete(availableTags,{
            matchContains: true,
            selectFirst: false
        });
    });
</script>
@endsection
