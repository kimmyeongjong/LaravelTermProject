@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

    <div class="container">
        <table class="table">

            @foreach($titles as $index=>$title)
            <tr>
                <td> {!! $title !!}<br> <img src="" style="width:200px; height:100px;" class="img_array" alt=""></td>

                <td> {!! $contents[$index] !!} </td>
            </tr>
            @endforeach
        </table>
    </div>
    <?php $temp = json_encode($imges); ?>
    <script>
        var imgArr = <?= $temp ?>;
        var img_array = document.getElementsByClassName('img_array');
        console.log(imgArr);
        for (var i = 0; i < imgArr.length; i++) {
            img_array[i].src = (imgArr[i].substring(imgArr[i].indexOf("data-src=")+10,imgArr[i].indexOf("\" class")));
        }
    </script>
@endsection
