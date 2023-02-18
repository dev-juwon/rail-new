<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Affiliate') }}</title>
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/product-page.css') }}">

 <link rel="shortcut icon" href="/images/IMG-20221209-WA0000.jpg" type="image/x-icon">
    <title>Affliate</title>
</head>

<body>
    @include('layouts._header')

    @include('layouts._navigation')

    @include('session')
    {{ $slot }}


    @include('layouts._footer')


<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>