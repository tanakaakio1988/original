<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orginal Application</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>

<body>
  <header class="header">
    <div class="header__bar row">
      
      @if (Auth::check())
       <div class="user_nav grid-6">

        <span>
          {{ Auth::user()->name }}
          <ul class="user__info">
            <li>
              <a href="/users/{{ Auth::user()->id }}">マイページ</a>
              {{ Form::open(['url' => '/logout', 'method' => 'post', 'id' => 'logout'])}}
              <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout').submit();">ログアウト</a>
              {{ Form::close() }}
            </li>
          </ul>
        </span>
        
        <a class="post" href="/original/create">投稿</a>
       </div>
      @else
       <div class="grid-6">
        <a href="/register" class="post">新規登録</a>
        <a href="/login" class="post">ログイン</a>
       </div>
      @endif
    </div>
  </header>

  @yield('content')
  <footer>
  <input type="button" onclick="location.href='/'"value="タイムライン">
  </footer>
</body>
</html>