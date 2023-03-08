<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Farmtrics</title>
</head>
<body class="min-h-full">
    <div class="h-full">
        @extends('layouts.navbar')
        <main>
            @yield('content')
        </main>
        @extends('layouts.footer')
    </div>
    
</body>
</html>