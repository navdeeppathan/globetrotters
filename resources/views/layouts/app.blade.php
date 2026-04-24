<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <title>{{ $title ?? 'Globetrotters Ltd' }}</title> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
 
  {{-- ═══ PRIMARY META TAGS ═══ --}}
  <title>@yield('title', 'Globetrotters Ocean Freight — Global Shipping & Logistics Experts')</title>
  <meta name="description"   content="@yield('meta_description', 'Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage. FCL & LCL shipping available.')"/>
  <meta name="keywords"      content="@yield('meta_keywords',    'ocean freight services, air freight logistics, shipping company, freight forwarding, international cargo services, FCL shipping, LCL shipping, globetrotters logistics, global freight')"/>
  <meta name="author"        content="Globetrotters Ocean Freight Services"/>
  <meta name="robots"        content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
  <meta name="theme-color"   content="#0f2f7a"/>
  <meta name="language"      content="English"/>
  <meta name="revisit-after" content="7 days"/>
 
  {{-- ═══ GEO META ═══ --}}
  <meta name="geo.region"    content="GB-ENG"/>
  <meta name="geo.placename" content="London, United Kingdom"/>
  <meta name="geo.position"  content="51.5074;-0.1278"/>
  <meta name="ICBM"          content="51.5074, -0.1278"/>
 
  {{-- ═══ CANONICAL & HREFLANG ═══ --}}
  <link rel="canonical"  href="{{ url()->current() }}"/>
  <link rel="alternate"  hreflang="en-gb"    href="{{ url()->current() }}"/>
  <link rel="alternate"  hreflang="x-default" href="{{ url()->current() }}"/>
 
  {{-- ═══ OPEN GRAPH (Facebook / LinkedIn / WhatsApp) ═══ --}}
  <meta property="og:type"        content="website"/>
  <meta property="og:url"         content="{{ url()->current() }}"/>
  <meta property="og:site_name"   content="Globetrotters Ocean Freight Services"/>
  <meta property="og:locale"      content="en_GB"/>
  <meta property="og:title"       content="@yield('og_title', 'Globetrotters Ocean Freight — Global Shipping & Logistics Experts')"/>
  <meta property="og:description" content="@yield('og_description', 'Reliable ocean freight, air cargo and logistics solutions worldwide. Fast, secure and cost-effective international shipping. FCL & LCL available.')"/>
  <meta property="og:image"       content="@yield('og_image', asset('images/og-image.jpg'))"/>
  <meta property="og:image:width"  content="1200"/>
  <meta property="og:image:height" content="630"/>
  <meta property="og:image:alt"   content="@yield('og_image_alt', 'Globetrotters Ocean Freight Services — Global Shipping & Logistics')"/>
 
  {{-- ═══ TWITTER / X CARDS ═══ --}}
  <meta name="twitter:card"        content="summary_large_image"/>
  <meta name="twitter:site"        content="@globetrottersfreight"/>
  <meta name="twitter:creator"     content="@globetrottersfreight"/>
  <meta name="twitter:title"       content="@yield('twitter_title', 'Globetrotters Ocean Freight — Global Shipping & Logistics Experts')"/>
  <meta name="twitter:description" content="@yield('twitter_description', 'Reliable ocean freight, air cargo and logistics worldwide. FCL & LCL shipping. Fast, secure and cost-effective. Get a quote today.')"/>
  <meta name="twitter:image"       content="@yield('og_image', asset('images/og-image.jpg'))"/>
  <meta name="twitter:image:alt"   content="Globetrotters Ocean Freight Services"/>
 
  {{-- ═══ FAVICON ═══ --}}
  <link rel="icon"             type="image/x-icon"  href="{{ asset('favicon.ico') }}"/>
  <link rel="icon"             type="image/png"     sizes="32x32" href="{{ asset('favicon-32x32.png') }}"/>
  <link rel="icon"             type="image/png"     sizes="16x16" href="{{ asset('favicon-16x16.png') }}"/>
  <link rel="apple-touch-icon" sizes="180x180"      href="{{ asset('apple-touch-icon.png') }}"/>
  <link rel="manifest"         href="{{ asset('site.webmanifest') }}"/>
 
  {{-- ═══ FONTS ═══ --}}
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Jost:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
 
  {{-- ═══ CSS / VITE ═══ --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- Or if not using Vite:
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
  --}}
 
  {{-- ═══ JSON-LD — ORGANIZATION (Global — every page) ═══ --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://globetrottersfreight.com/#organization",
    "name": "Globetrotters Ocean Freight Services",
    "legalName": "Globetrotters Ocean Freight Services Ltd",
    "url": "https://globetrottersfreight.com",
    "logo": {
      "@type": "ImageObject",
      "url": "https://globetrottersfreight.com/images/logo.png",
      "width": 200,
      "height": 100
    },
    "image": "https://globetrottersfreight.com/images/og-image.jpg",
    "description": "Reliable ocean freight, air cargo, and logistics solutions worldwide. Fast, secure and cost-effective international shipping with global coverage.",
    "areaServed": ["GB", "Worldwide"],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "London",
      "addressRegion": "England",
      "addressCountry": "GB"
    },
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+44-XXXX-XXXXXX",
      "contactType": "customer service",
      "areaServed": "GB",
      "availableLanguage": "English",
      "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "09:00",
        "closes": "18:00"
      }
    }],
    "sameAs": [
      "https://www.facebook.com/globetrottersfreight",
      "https://www.linkedin.com/company/globetrottersfreight",
      "https://www.instagram.com/globetrottersfreight"
    ]
  }
  </script>
 
  {{-- ═══ JSON-LD — LOCAL BUSINESS (Global — every page) ═══ --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "MovingCompany"],
    "@id": "https://globetrottersfreight.com/#localbusiness",
    "name": "Globetrotters Ocean Freight Services",
    "image": "https://globetrottersfreight.com/images/og-image.jpg",
    "url": "https://globetrottersfreight.com",
    "telephone": "+44-XXXX-XXXXXX",
    "priceRange": "££",
    "currenciesAccepted": "GBP, USD",
    "paymentAccepted": "Bank Transfer, Card",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "YOUR STREET ADDRESS",
      "addressLocality": "London",
      "addressRegion": "England",
      "postalCode": "YOUR POSTCODE",
      "addressCountry": "GB"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 51.5074,
      "longitude": -0.1278
    },
    "openingHoursSpecification": [{
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "09:00",
      "closes": "18:00"
    }],
    "hasMap": "https://maps.google.com/?q=Globetrotters+Ocean+Freight+London"
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