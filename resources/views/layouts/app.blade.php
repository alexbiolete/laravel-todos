<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel To-Do List</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            margin: 1rem;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 24px;
        }

        .element {
            font-size: 18px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    @include('modules.alert')
    <div class="flex-center position-ref">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
