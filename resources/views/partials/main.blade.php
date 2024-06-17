<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Habib Ahmad | Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="https://cdn.pixabay.com/photo/2013/07/13/10/12/sketchbook-156775_640.png" type="image/png">
    {{-- CDN Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    @include('partials.navbar')

    <div class="atas" style="padding-top: 80px"></div>
    <div class="container">
        @yield('content')
    </div>
    <div class="bawah" style="padding-bottom: 200px"></div>

    @include('partials.footer')
    
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>