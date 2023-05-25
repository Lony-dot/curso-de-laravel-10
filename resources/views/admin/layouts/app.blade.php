<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <head>
        @yield('header')
    </head>
    <div class="content">
        @yield('content')

    </div>
    <footer>
        #default footer
    </footer>
</body>
</html>
