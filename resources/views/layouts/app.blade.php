<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <title>{{ $title ?? 'Globetrotters Ltd' }}</title> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ═════════════════════════════════════
   GLOBAL SEO — GLOBETROTTERS LOGISTICS
═════════════════════════════════════ --}}

<title>@yield('title', 'Globetrotters Logistics — Global Freight & Supply Chain Experts')</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- PRIMARY SEO --}}
<meta name="description" content="@yield('meta_description', 'Global logistics solutions including ocean freight, air cargo, road transport, and supply chain management. Fast, reliable & worldwide coverage.')">
<meta name="keywords" content="logistics company, freight forwarding, ocean freight, air freight, supply chain, cargo shipping, global logistics">
<meta name="author" content="Globetrotters Logistics">
<meta name="robots" content="index, follow">

<link rel="canonical" href="{{ url()->current() }}">

{{-- OPEN GRAPH --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title', 'Globetrotters Logistics — Global Freight Experts')">
<meta property="og:description" content="@yield('meta_description', 'Global logistics & freight forwarding solutions with reliable delivery worldwide.')">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
<meta property="og:site_name" content="Globetrotters Logistics">

{{-- TWITTER --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('meta_description')">
<meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

{{-- ═════════════════════════════════════
   JSON-LD SCHEMA — GLOBETROTTERS
═════════════════════════════════════ --}}

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Globetrotters Logistics",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "Global logistics and freight forwarding company offering ocean, air, and road transport solutions worldwide.",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91-XXXXXXXXXX",
    "contactType": "customer service",
    "areaServed": "Worldwide",
    "availableLanguage": ["English"]
  }],
  "sameAs": [
    "https://www.facebook.com/",
    "https://www.linkedin.com/",
    "https://www.instagram.com/"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LogisticsBusiness",
  "name": "Globetrotters Logistics",
  "image": "{{ asset('images/og-image.jpg') }}",
  "url": "{{ url('/') }}",
  "telephone": "+91-XXXXXXXXXX",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Indore",
    "addressRegion": "MP",
    "addressCountry": "IN"
  },
  "areaServed": "Worldwide",
  "openingHours": "Mo-Sa 09:00-19:00"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Freight & Logistics Services",
  "provider": {
    "@type": "Organization",
    "name": "Globetrotters Logistics"
  },
  "serviceType": "Freight Forwarding",
  "areaServed": {
    "@type": "Place",
    "name": "Worldwide"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Logistics Services",
    "itemListElement": [
      { "@type": "Offer", "name": "Ocean Freight" },
      { "@type": "Offer", "name": "Air Freight" },
      { "@type": "Offer", "name": "Road Transport" },
      { "@type": "Offer", "name": "Custom Clearance" }
    ]
  }
}
</script>

<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement": [
  {
   "@type": "ListItem",
   "position": 1,
   "name": "Home",
   "item": "{{ url('/') }}"
  },
  {
   "@type": "ListItem",
   "position": 2,
   "name": "Services",
   "item": "{{ url('/services') }}"
  },
  {
   "@type": "ListItem",
   "position": 3,
   "name": "@yield('title')",
   "item": "{{ url()->current() }}"
  }
 ]
}
</script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link
    href="https://unpkg.com/aos@2.3.4/dist/aos.css"
    rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    @stack('styles')
</head>

<body class="">

    

    {{-- HEADER --}}
    @include('layouts.partials.header')



    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    <!-- Floating Buttons -->
    <div class="floating-contact">
        
        <!-- WhatsApp -->
        <a  href="https://wa.me/447950234842?text=Hello%20I%20want%20to%20enquire" target="_blank" class="whatsapp">
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



    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 900,
        once: true,
        offset: 120
    });
    </script>
    <section class="bg-white text-white">

        @if(session('success'))
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                confirmButtonColor: '#2563eb'
            });
        });
        </script>
        @endif

    @stack('scripts')

</body>
</html>