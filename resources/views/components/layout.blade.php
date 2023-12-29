<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <div>
        <img src="{{asset('/images/je-logo.svg')}}" alt="JonneyJE logo. ">
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>
