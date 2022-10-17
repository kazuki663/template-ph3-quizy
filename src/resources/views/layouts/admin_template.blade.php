<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <script src="/js/admin.js" defer></script>
</head>
<body>
    <header>
        @yield('header')
    </header>
    <main>
        <h1 class="title">@yield('title')</h1>
        <div>
            @yield('contents')
        </div>
    </main>
</body>
</html>
