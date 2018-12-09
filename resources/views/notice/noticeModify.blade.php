@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')

    <div class="container">
        <form class="" action="/modify/clear" method="post">
            @csrf
            <table class="table">
                <tr>
                    <td>title</td>
                    <td> <input type="text" class="form-control" name="title" value="{{$modify[0]->title}}"> </td>
                </tr>
                <tr>
                    <td>writer</td>
                    <td> <input type="text" class="form-control" name="" value="{{$modify[0]->writer}}" readonly> </td>
                </tr>
                <tr>
                    <td>contents</td>
                    <td>
                        <textarea name="contents">{{$modify[0]->contents}}</textarea>
                        <script type="text/javascript">
                             CKEDITOR.replace('contents',{
                                 'filebrowserUploadUrl' : "{{URL::to('/')}}/ckeditor/upload.php"
                             });
                        </script>
                    </td>
                </tr>
                <tr>
                    <td> <input type="hidden" name="id" value="{{$modify[0]->notice_id}}"> </td>
                    <td> <input type="submit" name="" class="btn btn-danger" value="수정"> </td>
                </tr>
            </table>
        </form>
    </div>

@endsection
