@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection
@section('content')
<div class="" style="background-image:url('/img/backgroundGif2.gif'); background-size:100%;  background-repeat: repeat-y; background-attachment: fixed;">

    <div class="container" style="height:800px; opacity: 0.6;">

        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Login
                    </h1>
                </div>
            </div>
        </section>

        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Login</p>
                    </header>

                    <div class="card-content">
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">E-Mail Address</label>
                                </div>

                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input class="input form-control" id="email" type="email" name="email"
                                                   value="{{ old('email') }}" required autofocus>
                                        </p>

                                        @if ($errors->has('email'))
                                            <p class="help is-danger">
                                                {{ $errors->first('email') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Password</label>
                                </div>

                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input class="input form-control" style="width:100%;" id="password" type="password" name="password" required>
                                        </p>

                                        @if ($errors->has('password'))
                                            <p class="help is-danger">
                                                {{ $errors->first('password') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label"></div>

                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <label class="checkbox">
                                                <input type="checkbox" class="checkbox-inline"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
<a href="{{ url('/redirect') }}" class="btn btn-primary">Login With Google</a>
                            <div class="field is-horizontal">
                                <div class="field-label"></div>

                                <div class="field-body">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="submit" class="button is-primary btn btn-danger">Login</button>
                                        </div>

                                        <div class="control">
                                            <a href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
