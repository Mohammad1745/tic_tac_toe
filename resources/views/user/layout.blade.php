<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tic Tac Toe')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            padding-left: 10vw;
            padding-right: 10vw;
        }
    </style>
    @yield('style')
</head>
<body class="antialiased">
 <div class="wrapper">
     @yield('content')
 </div>

 @yield('script')
</body>
</html>
