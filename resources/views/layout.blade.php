<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>

        body, html {
            padding: 0;
            margin: 0;
            color: #5e5e5e;
            font-family: "Open Sans", sans-serif;
        }
        body {
            font-family: 'Nunito';
        }
        header {
            position: relative;
            width: 100%;
            height: 70px;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background-size: 100%;
            background-color: #cbd5e0;
        }
        #headerInside {
            width: 1100px;
            margin: 0 auto;
        }
        #navWrap {
            height: 50px;
            float: right;
            display: flex;
            align-items: center;
            flex-direction: row;
        }
         a {
            display: inline-block;
            color: dimgrey;
            text-decoration: none;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0 20px;
            height: 70px;
            line-height: 70px;
        }

         a:hover {
            background: #cbd5e0;
        }

         a:last-child {
            border-left: none;
        }
    </style>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="navWrap ">

            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
            <a href="{{ url('/news') }}" class="text-sm text-gray-700 underline">news</a>
            <a href="#" class="text-sm text-gray-700 underline">Login</a>
            <a href="#" class=" text-sm text-gray-700 underline">Register</a>

        </div>
    </div>
</header>
@yield('content')
@yield('news')
</body>
</html>
