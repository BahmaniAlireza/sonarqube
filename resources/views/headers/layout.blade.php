
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
@include('headers.header')

<div class="content">

    @yield('content')
</div>

@include('headers.footer')


</body>
</html>
