<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/images/logo.ico" type="image/x-icon">
    <title>على خطاه</title>
    {{-- <link rel="stylesheet" href="assets/css/main.css"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}" /> --}}
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="assets/css/join-request.css" rel="stylesheet" />


    {{-- <link href="{{ asset('public/assets/css/main.css) }}" rel="stylesheet" /> --}}
</head>
 
<body>
    @include('partials.header')

    <main class="relative w-100">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="assets/js/script.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/navlinks.js"></script>
    <script src="assets/js/join-form.js"></script>

</body>

</html>