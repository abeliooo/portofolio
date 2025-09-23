<!DOCTYPE html>
<html lang="en" class="scroll-smooth"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abell's Portfolio</title>
    {{-- Tailwind CSS & Google Fonts --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    {{-- HAPUS SKRIP INISIALISASI & KONFIGURASI DARK MODE --}}

    {{-- Link to external CSS file --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
{{-- Kembalikan body ke versi light mode saja --}}
<body class="antialiased bg-gray-100">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.modal')

    {{-- Indikator Scroll Sisi Kanan --}}
    <nav id="scroll-spy-nav" class="fixed right-6 top-1/2 -translate-y-1/2 hidden md:block z-40">
        <ul class="space-y-4">
            <li><a href="#hero" class="scroll-spy-link active" aria-label="Go to Hero section"></a></li>
            <li><a href="#about" class="scroll-spy-link" aria-label="Go to About section"></a></li>
            <li><a href="#projects" class="scroll-spy-link" aria-label="Go to Projects section"></a></li>
            <li><a href="#contact" class="scroll-spy-link" aria-label="Go to Contact section"></a></li>
        </ul>
    </nav>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>