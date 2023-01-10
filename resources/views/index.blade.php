<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/index.css"/>
        <title>ログイン画面</title>
    </head>
    <body>
        <div class="main-visual">
        <h1>ログイン</h1>
        <form action="/login" method="post">
            @csrf
            ログインID:<input name="id" value="{{ old('id') }}"><br>
            パスワード:<input name="password" type="password"><br>
            <button>ログインする</button><br>
        </form>
        <a href="/user/register">初めての方はこちらから会員登録してください</a><br>
        </div>
    </body>
</html>