<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>ログイン画面</h1>
<p>{{$msg}}</p>
<form action="/admin/login" method="post">
    <table>
        @csrf
        <tr><th>user_id: </th><th><input type="email" name="email"></th></tr>
        <tr><th>password: </th><th><input type="password" name="password"></th></tr>
        <tr><th></th><th><input type="submit" value="login"></th></tr>
    </table>
</form>
</body>
</html>
