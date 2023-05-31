<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>lksn DIGITAL</title>


<title>{{ config('app.name', 'Laravel') }}</title>

<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- Fonts -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])