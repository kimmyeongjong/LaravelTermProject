@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<div class="container">
    <marquee scrollamount=8 style="font-size:20px;">사카미치, AKB사단에 대한 비난, 비방글은 통보 없이 삭제처리됩니다.</marquee>
    <form class="" action="{{ action('FreeBoardController@store') }}" method="post">
        @csrf
        <table class="table">
            <tr>
                <th>제목</th>
                <td> <input type="text" name="title" maxlength="80" class="form-control" value="{{ old('title') }}"> </td>
            </tr>
            <tr>
                <th>작성자</th>
                <td> <input type="hidden" name="email" class="form-control" value="{{auth()->user()->email}}">
                     <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" readonly></td>
            </tr>
            <tr>
                <!-- 이 부분 어떤 멤버에 관련된 글인지 작성 받을것 DB에도 물론 추가 -->
                <th>누구에 관련된 게시글인가요?</th>
                <td><select onchange="categoryChange(this)" class="form-control" name="group">
                    <option>누구에 관련된 글인가요?</option>
                    <option value="nogizaka46">乃木坂46</option>
                    <option value="keyakizaka46">欅坂46</option>
                    <option value="AKB48">AKB48</option>
                    <option value="NMB48">NMB48</option>
                    <option value="HKT48">HKT48</option>
                    <option value="SKE48">SKE48</option>
                    <option value="NGT48">NGT48</option>
                </select>
                <select id="good" class="form-control" name="member">
                    <option>이 게시물과 관련있는 멤버를 골라주세요</option>
                </select></td>
            </tr>
            <tr>
                <th>내용</th>
                <td>
                    <textarea name="contents"></textarea>
                    <script type="text/javascript">
                         CKEDITOR.replace('contents',{
                             'filebrowserUploadUrl' : "{{URL::to('/')}}/ckeditor/upload.php"
                         });
                    </script>
                </td>
            </tr>
        </table>
        <br>
        <div class="">
            <input type="submit" name="" class="btn btn-danger" value="글등록">
        </div>
    </form>
    <br>
</div>
<!-- <form class="dropzone needsclick dz-clickable from" id="demo-upload" action="index.html" method="post">
    <div class="dz-message needsclick">
        please upload
    </div>
</form>
<form action="/file-upload" class="dropzone" id="my-awesome-dropzone" style="text-align:center;">
    <br>
    <input type="submit" name="file_send" value="SEND" class="btn btn-primary">
</form> -->

<script>
    var nogi = {!! $nogi !!};
    var keyaki = {!! $keyaki !!};
    var akb = {!! $akb !!};
    var nmb = {!! $nmb !!};
    var hkt = {!! $hkt !!};
    var ske = {!! $ske !!};
    var ngt = {!! $ngt !!};

    var nogiArr = [];
    var kayakiArr = [];
    var akbArr = [];
    var nmbArr = [];
    var hktArr = [];
    var skeArr = [];
    var ngtArr = [];

    for(var i in nogi)
        nogiArr.push([i, nogi[i]]);
    for(var i in keyaki)
        kayakiArr.push([i, keyaki[i]]);
    for(var i in akb)
        akbArr.push([i, akb[i]]);
    for(var i in nmb)
        nmbArr.push([i, nmb[i]]);
    for(var i in hkt)
        hktArr.push([i, hkt[i]]);
    for(var i in ske)
        skeArr.push([i, ske[i]]);
    for(var i in ngt)
        ngtArr.push([i, ngt[i]]);

    function categoryChange(e) {

        var target = document.getElementById("good");

        if(e.value == "nogizaka46") var d = nogiArr;
        else if(e.value == "keyakizaka46") var d = kayakiArr;
        else if(e.value == "AKB48") var d = akbArr;
        else if(e.value == "NMB48") var d = nmbArr;
        else if(e.value == "HKT48") var d = hktArr;
        else if(e.value == "SKE48") var d = skeArr;
        else if(e.value == "NGT48") var d = ngtArr;

        target.options.length = 0;

        for (x in d) {
            var opt = document.createElement("option");
            opt.value = d[x][1].name_cc;
            opt.innerHTML = d[x][1].name_cc +" "+ d[x][1].name_en;
            target.appendChild(opt);
        }
    }

</script>



@endsection
