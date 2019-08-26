
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-2.1.1.js"></script>


    <title>Arseen App</title>
</head>

<body>
<div class="header_logo"><a href="{{ url('/') }}" ><img src="/../img/Arseen-with-logo.png" ></a>
    @if(Auth::check())
        <a class="logout_btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a>
        <a href="#" class="profile_header" ><img src="/img/user.png"> <strong>{{ Auth::user()->name }} </strong></a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <a href="{{ route('login') }}" class="login_a">ورود</a> <a href="{{ route('register') }}" class="register_a">ثبت نام</a>
    @endif
</div>


<div class="loading-fa" >
    <div class="pop-loading"> <span>
    <div class="bounce_1"></div>
    <div class="bounce_2"></div>
    <div class="bounce_3"></div>
    </span></div>
</div>





        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>
