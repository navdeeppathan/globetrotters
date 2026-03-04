<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Globetrotters Ltd' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    @stack('styles')
</head>

<body class="bg-slate-950 text-white">

    {{-- HEADER --}}
    @include('layouts.partials.header')



    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    <!-- Floating Buttons -->
    <div class="floating-contact">
        
        <!-- WhatsApp -->
        <a href="https://wa.me/+44(0)2084322983" target="_blank" class="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <!-- Phone -->
        {{-- <a href="tel:+44(0)2084322983" class="phone">
            <i class="fa fa-phone"></i>
        </a> --}}

    </div>

    <style>
    .floating-contact {
            position: fixed;
            right: 20px;
            bottom: 80px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 9999;
        }

        .floating-contact a {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 26px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            transition: 0.3s;
        }

        .floating-contact a:hover {
            transform: scale(1.1);
        }

        .whatsapp {
            background: #25D366;
        }

        .phone {
            background: #007bff;
        }
    </style>

    {{-- FOOTER --}}
    @include('layouts.partials.footer')




    @stack('scripts')

</body>
</html>