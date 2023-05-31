<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.header')
</head>

<body>
    <div id="app">

        @include('user.navbar')

        <main>
            @yield('content')
        </main>
        <footer>
            @include('user.footer')
        </footer>
    </div>
    @include('user.script')
</body>

</html>