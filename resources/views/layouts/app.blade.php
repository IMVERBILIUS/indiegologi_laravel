<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'title')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- SwiperJS CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Google Fonts & Bootstrap Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom Global CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Custom Styles --}}
    <style>
        .swiper-slide { height: auto; }
        .card { display: flex; flex-direction: column; height: 100%; }
        .card-body { flex-grow: 1; }
        .swiper-button-next, .swiper-button-prev { color: #0d6efd; }
    </style>

    @stack('styles')
</head>
<body class="bg-light">

    <div class="main-wrapper d-flex flex-column min-vh-100">
        {{-- Navbar --}}
        @include('layouts.master_nav')

        {{-- Main Content --}}
        <main class="flex-grow-1 container">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>

    {{-- Bootstrap JS & SwiperJS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Font Awesome JS (satu kali saja) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    @stack('scripts')
</body>
</html>
