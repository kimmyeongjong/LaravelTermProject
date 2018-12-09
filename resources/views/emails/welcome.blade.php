
@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection

@section('mainSection')
<h1>{{ $title }} {{ $user->name }}</h1>
<hr/>
<p>{{ $body }}</p>
<hr/>
<footer>Mail from {{ config('app.url') }}</footer>

@endsection
