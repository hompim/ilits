<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Ini Lho ITS 2020 adalah sebuah event yang membantu calon mahasiswa baru ITS menemukan jurusan yang sesuai minat & bakat yang dimiliki nya. Inilho ITS Memiliki serangkaian event yang terdiri dari: talkshow inspiratif, open campus, welcome, dan lainnya!">
    <meta name="keywords"
        content="ITS, Institut Teknologi Sepuluh Nopember, ILITS, Ini Lho ITS!, ILITS 2022, Ini Lho ITS! 2022">

    @yield('title')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('ilits22.ico') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @yield('style')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    <!-- Header -->
    <header>
        @include('components.header')
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>

    @stack('modals')

    @stack('scripts')
</body>

</html>