@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザ登録</h1>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/user/register" method="post">
            @csrf
            ログインID:<input name="login_id" value="{{ old('login_id') }}"><br>
            パスワード:<input name="password" type="password"><br>
            <button>登録する</button><br>
        </form>
@endsection