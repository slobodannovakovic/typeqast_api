<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Swapi</title>
</head>
<body>

    <div class="container mx-auto p-4">

        <div id="app">
            @yield('content')
        </div>

    </div>
    
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>