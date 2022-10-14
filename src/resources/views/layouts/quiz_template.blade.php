<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>quizy</title>
  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <script src="/js/quiz.js" defer></script>
</head>

<body>
  <div class="container">
    <header>
      @yield('header')
    </header>
    <h4>@yield('title')</h4>
    <div class="kuizy_net">
        <img class= "k" src="https://pbs.twimg.com/profile_images/1352968042024562688/doQgizBj_400x400.jpg" alt="k">
    <a class= "kuizy" href="https://kuizy.net/user/kuizy_net">@kuizy_net</a>
    </div>
    <div class="quiz_container">
      @yield('contents')
    </div>
    <script src="/js/quiz.js"></script>
</body>

</html>
