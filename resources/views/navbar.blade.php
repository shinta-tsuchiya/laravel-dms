<nav class="md-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">

  <a class="navbar-brand" href="/"><i class="fa fa-book mr-1" aria-hidden="true"></i>Document Management System</a>

  <ul class="navbar-nav ml-auto">

    <form class="form-inline my-1">


      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" method="GET" href="{{ route('register') }}">アカウント作成</a>
      </li>
      @endguest

      @auth
      <div class="md-form form-sm my-0">
        <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="キーワードで検索" aria-label="Search">
      </div>
      <button class="btn btn-outline-white btn-sm my-0" href="{{ route('register') }}" type="submit">検索</button>
    </form>

    <li class="nav-item">
      <a class="nav-link active" href="">新規作成</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="">お気に入り</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="fas fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button" onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">{{-- レイアウトを崩さない処理 --}}
      @csrf
    </form>
    <!-- Dropdown -->
    @endauth

  </ul>

</nav>