<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{ env('APP_NAME') }} | @yield('title') </title>

    {{-- cdn --}}
    @yield('cdns')
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-center">I migliori film dei migliori film</h1>
        </header>


        <main class="mt-3">
            @yield('main')
        </main>

        {{-- scripts JS --}}
        @yield('script')
    </div>
</body>

</html>
