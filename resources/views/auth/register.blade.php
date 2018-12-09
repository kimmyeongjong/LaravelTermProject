@extends('layouts.basicFrame')
@section('menubar')
@include('partials.menubar')
@endsection
@section('section')

<div class="container">
    <table class="table" style="background-color:#F2F2F2; height:400px;">
        <tr>
            <th colspan="2" style="text-align:center"> <h1>회원가입</h1> </th>
        </tr>
        <form class="register-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <label class="label">Name</label>
            <tr>
                <td>Name</td>
                <td style="width:70%"><input class="form-control" id="name" type="name" name="name" value="{{ old('name') }}"required autofocus></td>
            </tr>
            @if ($errors->has('name'))
            <p class="help is-danger">
                {{ $errors->first('name') }}
            </p>
            @endif
            <label class="label">E-mail Address</label>
            <p class="control">
                <tr>
                    <td>E-Mail</td>
                    <td><input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus></td>
                </tr>
            </p>

            @if ($errors->has('email'))
            <p class="help is-danger">
                {{ $errors->first('email') }}
            </p>
            @endif

            <label class="label">Password</label>

            <p class="control">
                <tr>
                    <td>Password</td>
                    <td><input class="form-control" id="password" type="password" name="password" required></td>
                </tr>
            </p>

            @if ($errors->has('password'))
            <p class="help is-danger">
                {{ $errors->first('password') }}
            </p>
            @endif
            <label class="label">Confirm Password</label>

            <p class="control">
                <tr>
                    <td>Password Confirm</td>
                    <td><input class="form-control" id="password-confirm" type="password" name="password_confirmation" required></td>
                </tr>
            </p>
            <tr>
                <th>推しメン</th>
                <td>
                    <select onchange="categoryChange(this)" class="form-control" name="push">
                        <option>오시멤을 골라주세요</option>
                        <option value="nogizaka46">乃木坂46</option>
                        <option value="keyakizaka46">欅坂46</option>
                        <option value="AKB48">AKB48</option>
                        <option value="NMB48">NMB48</option>
                        <option value="HKT48">HKT48</option>
                        <option value="SKE48">SKE48</option>
                        <option value="NGT48">NGT48</option>
                    </select>
                    @if ($errors->has('push'))
                    <p class="help is-danger">
                        {{ $errors->first('push') }}
                    </p>
                    @endif
                    <select id="good" class="form-control" name="test">
                        <option>좋아하는 멤버를 선택해주세요</option>
                    </select>
                    @if ($errors->has('test'))
                    <p class="help is-danger">
                        {{ $errors->first('test') }}
                    </p>
                    @endif
                </td>
            </tr>
            <tr>
                <td> <button type="submit" name="button" class="btn btn-primary">Regist</button> </td>
                <td></td>
            </tr>
        </form>
    </table>
</div>

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
