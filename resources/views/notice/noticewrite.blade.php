@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<div class="container">
    <form class="" action="{{ action('NoticepageController@store') }}" method="post">
        @csrf
        <table class="table table-dark">
            <tr>
                <th>제목</th>
                <td> <input type="text" name="title" maxlength="80" class="col-sm-2 col-form-label" value="{{ old('title') }}"> </td>
            </tr>

            <tr>
                <th>작성자</th>
                <td> <input type="text" name="writer" maxlength="20" class="col-sm-2 col-form-label" value="" readonly> </td>
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

@endsection
