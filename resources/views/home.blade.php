<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Globetrotters Ltd</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN -->
    <!-- Serif for headings -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Sans for body & nav -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
       
    

        .parallelogram-bar {
            transform: skewX(-8deg);
            background: #06121e;
            border-bottom: 1px solid rgba(59,130,246,0.35);
            border-radius: 6px;
            box-shadow: 0 0 40px rgba(59,130,246,0.18), inset 0 1px 0 rgba(255,255,255,0.05);
            overflow: hidden;
        }

        .parallelogram-bar::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0%;
            width: 94%;
            height: 4px;
            background: linear-gradient(
                to right,
                transparent,
                #3b82f6,
                #0ea5e9,
                #3b82f6,
                transparent
            );
            border-radius: 50px;
            filter: blur(3px);
            opacity: 0.9;
        }

        .parallelogram-bar > .inner {
            transform: skewX(8deg);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .divider {
            position: absolute;
            right: 0;
            top: 16px;
            bottom: 16px;
            width: 1px;
            background: rgba(255,255,255,0.1);
        }

        .icon-circle {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(37, 99, 235, 0.18);
            border: 1px solid rgba(59,130,246,0.45);
            box-shadow: 0 0 18px rgba(59,130,246,0.4);
        }

        .item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 20px 24px;
            position: relative;
            cursor: pointer;
        }

        .item:hover .arrow { color: #60a5fa; margin-left: 6px; }
        .arrow { transition: all 0.2s; color: #9ca3af; font-size: 12px; margin-left: 4px; }

        .subtitle-orange { color: #fb923c; font-size: 12px; font-weight: 500; }
        .subtitle-gray   { color: #9ca3af; font-size: 12px; }
        .title           { color: #fff; font-weight: 600; font-size: 14px; margin-bottom: 3px; }
    </style>
    <style>
        .wrapper {
    
            margin: 0 auto;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 320px;
            gap: 16px;
            align-items: stretch;
        }

        /* ── SHARED CARD ── */
        .card {
            background: #000000;
            border: 1px solid rgba(59,130,246,0.3);
            border-radius: 12px;
            padding: 22px;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            box-shadow: inset 0 0 30px rgba(59,130,246,0.07);
            pointer-events: none;
        }

        .card-title {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        /* ── CARD 1: TRANSPORT REQUEST ── */
        .tabs {
            display: flex;
            gap: 0;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 14px;
        }
        .tab {
            flex: 1;
            padding: 8px 10px;
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
            cursor: pointer;
            background: transparent;
            border: none;
            transition: all 0.2s;
        }
        .tab.active {
            background: #fff;
            color: #000;
            font-weight: 600;
            border-radius: 6px;
        }
        .tab:hover:not(.active) { color: #fff; }

        .input-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 10px;
        }
        .input-field {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 10px 12px;
            color: #9ca3af;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }
        .input-field i { color: #60a5fa; font-size: 12px; }
        .input-field span { color: #6b7280; }

        .select-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 14px;
        }
        .select-field {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 10px 12px;
            color: #6b7280;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        .select-field i { color: #6b7280; font-size: 11px; }

        .btn-quote {
            width: 100%;
            padding: 13px;
            background: linear-gradient(90deg, #1d4ed8, #3b82f6);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: 0.3px;
            transition: opacity 0.2s;
        }
        .btn-quote:hover { opacity: 0.9; }

        /* ── CARD 2: SHIPMENT TRACKING ── */
        .track-input-wrap {
            display: flex;
            gap: 0;
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .track-input {
            flex: 1;
            background: rgba(255,255,255,0.04);
            border: none;
            padding: 11px 14px;
            color: #9ca3af;
            font-size: 13px;
            outline: none;
        }
        .track-input::placeholder { color: #6b7280; }
        .btn-track {
            background: linear-gradient(90deg, #1d4ed8, #3b82f6);
            border: none;
            padding: 11px 20px;
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
        }

        /* Progress bar */
        .progress-wrap {
            margin-bottom: 8px;
            position: relative;
        }
        .progress-line {
            height: 3px;
            background: rgba(255,255,255,0.1);
            border-radius: 2px;
            position: relative;
            margin: 0 12px;
        }
        .progress-fill {
            height: 100%;
            width: 40%;
            background: linear-gradient(90deg, #22c55e, #3b82f6);
            border-radius: 2px;
        }
        .progress-dots {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            left: 0; right: 0;
            transform: translateY(-50%);
        }
        .dot {
            width: 12px; height: 12px;
            border-radius: 50%;
            border: 2px solid #3b82f6;
            background: #05101e;
        }
        .dot.active { background: #22c55e; border-color: #22c55e; }
        .dot.current { background: #3b82f6; border-color: #3b82f6; box-shadow: 0 0 8px rgba(59,130,246,0.6); }

        .progress-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
            padding: 0 6px;
        }
        .progress-labels span {
            font-size: 11px;
            color: #6b7280;
        }
        .progress-labels span.active-lbl { color: #fff; }

        /* Ship image area */
        .ship-visual {
            margin-top: 14px;
            border-radius: 8px;
            overflow: hidden;
            height: 110px;
            background: radial-gradient(ellipse at center, #0d2a4a 0%, #05101e 70%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .ship-visual .globe-glow {
            width: 140px; height: 90px;
            background: radial-gradient(ellipse, rgba(59,130,246,0.15) 0%, transparent 70%);
            border-radius: 50%;
            position: absolute;
        }
        .ship-visual i {
            font-size: 40px;
            color: rgba(59,130,246,0.5);
            z-index: 1;
        }

        /* ── CARD 3: NEWS ── */
        .news-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }
        .news-header .view-all {
            font-size: 12px;
            color: #3b82f6;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            text-decoration: none;
        }

        .news-item {
            display: flex;
            gap: 10px;
            margin-bottom: 14px;
            align-items: flex-start;
        }
        .news-item:last-child { margin-bottom: 0; }

        .news-thumb {
            width: 64px;
            height: 48px;
            border-radius: 6px;
            overflow: hidden;
            flex-shrink: 0;
            background: linear-gradient(135deg, #1e3a5f, #0d2a4a);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .news-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Fallback icon for news thumbs */
        .news-thumb i { color: rgba(59,130,246,0.5); font-size: 18px; }

        .news-text {}
        .news-title {
            color: #e2e8f0;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 3px;
        }
        .news-date {
            color: #6b7280;
            font-size: 11px;
        }

        /* News divider */
        .news-divider {
            height: 1px;
            background: rgba(255,255,255,0.07);
            margin: 10px 0;
        }

        /* ========================= */
        /* 📱 MOBILE RESPONSIVE FIX  */
        /* ========================= */

        @media (max-width: 1024px) {
            .wrapper {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {

            /* Section Padding */
            section {
                padding-top: 60px !important;
                padding-bottom: 60px !important;
            }

            /* Cards */
            .card,
            .send-card {
                padding: 18px;
            }

            /* Tabs wrap properly */
            .send-tabs {
                flex-wrap: wrap;
                gap: 6px;
            }

            .send-tab {
                flex: 1 1 48%;
                font-size: 12px;
            }

            /* Input rows stack */
            .send-input-row,
            .send-select-row,
            .input-row,
            .select-row {
                grid-template-columns: 1fr !important;
                display: grid !important;
            }

            /* Tracking input stack */
            .track-input-wrap {
                flex-direction: column;
            }

            .track-input {
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }

            .btn-track {
                width: 100%;
                border-radius: 0;
            }

            /* Progress labels smaller */
            .progress-labels span {
                font-size: 10px;
            }

            /* Ship visual height */
            .ship-visual {
                height: 90px;
            }

            /* News layout */
            .news-thumb {
                width: 56px;
                height: 44px;
            }

            .news-title {
                font-size: 11px;
            }
        }
    </style>
</head>
<body class="bg-slate-950 text-white">

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col">

            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('images/logistics-bg.jpg') }}" 
                    class="w-full h-full object-cover" 
                    alt="Logistics Background">
                <div class="absolute inset-0 bg-gradient-to-r from-[#06121e] via-[#071a2c]/90 to-[#071a2c]/60"></div>
            </div>

        <!-- HEADER -->
        <header class="fixed top-0 left-0 w-full z-50
            bg-gradient-to-r 
            from-[#000000] 
            via-[#000000] 
            to-[#0d3c63]
            border-b border-white/5 backdrop-blur-md">

            <div class="mx-auto px-6 lg:px-8">

                <div class="flex items-center justify-between h-20">

                    <!-- LEFT LOGO -->
                    <div class="flex items-center space-x-3">
                        <img src="{{asset("logo.jpg")}}" alt="" class="w-auto h-10">
                    </div>

                    <!-- CENTER NAVIGATION -->
                    <nav class="hidden lg:flex items-center space-x-8 text-[14px] font-medium text-gray-300">

                        <a href="#" class="relative text-[#1ecbff] pb-1">
                            Home
                            <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                            bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        </a>

                        <div class="relative group">

                            <!-- Main Link -->
                            <button class="flex items-center gap-1 hover:text-blue-400 transition duration-300">
                                Services
                                <i class="fa-solid fa-chevron-down text-[10px] mt-[2px] transition-transform duration-300 group-hover:rotate-180"></i>
                            </button>

                            <!-- Dropdown -->
                            <div class="absolute left-0 mt-4 w-56 
                                bg-[#0b2238] border border-white/10 
                                rounded-md shadow-xl 
                                opacity-0 invisible 
                                group-hover:opacity-100 group-hover:visible
                                transition-all duration-300">

                                <ul class="py-3 text-sm text-gray-300">

                                    <li>
                                        <a href="#" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Air Freight
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Ocean Freight
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Road Transport
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Warehousing
                                        </a>
                                    </li>

                                </ul>

                            </div>

                        </div>
                        <a href="#" class="hover:text-blue-400 transition duration-300">Request Transport</a>
                        <a href="#" class="hover:text-blue-400 transition duration-300">Track Shipment</a>
                        <a href="#" class="hover:text-blue-400 transition duration-300">News & Insights</a>
                        <a href="#" class="hover:text-blue-400 transition duration-300">Challenges</a>
                        <a href="#" class="hover:text-blue-400 transition duration-300">About Us</a>
                        <a href="#" class="hover:text-blue-400 transition duration-300">Contact</a>

                    </nav>

                    <!-- RIGHT SIDE -->
                <!-- RIGHT SIDE -->
                    <div class="hidden lg:flex items-center space-x-5">

                        <!-- Customer Support Icon -->
                        <div class="w-9 h-9 flex items-center justify-center 
                            bg-white/5 border border-white/10 rounded-md
                            text-gray-300 hover:text-blue-400 
                            hover:bg-blue-600/20 transition cursor-pointer">
                            <i class="fa-solid fa-headset text-sm"></i>
                        </div>

                        <!-- Get Quote -->
                        <a href="#"
                        class="bg-gradient-to-r from-blue-600 to-blue-500
                        hover:from-blue-500 hover:to-blue-600
                        transition px-5 py-2 rounded-md text-sm font-semibold
                        shadow-lg shadow-blue-600/30">
                            Get Quote
                        </a>

                    </div>

                    <!-- MOBILE MENU BUTTON -->
                    <button id="menuBtn" class="lg:hidden text-white text-2xl">
                        ☰
                    </button>

                </div>

                <!-- RIGHT LOWER ROW (Language + Icons) -->
                <div class="flex items-center justify-end gap-6 pb-3">

                    <!-- Language -->
                    <div class="flex items-center space-x-2 text-sm text-gray-300 
                            border border-white/10 px-3 py-1.5 rounded-md 
                            bg-white/5 hover:bg-white/10 transition cursor-pointer">
                        <i class="fa-solid fa-globe text-blue-400"></i>
                        <span>EN</span>
                    </div>

                    <!-- Icons -->
                    <div class="flex items-center space-x-5 text-gray-300 text-[15px]">
                        <i class="fa-regular fa-bell hover:text-blue-400 cursor-pointer transition"></i>
                        <i class="fa-solid fa-cart-shopping hover:text-blue-400 cursor-pointer transition"></i>
                    </div>

                </div>

            </div>

        </header>
        <script>
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');

            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>

            <!-- HERO CONTENT -->
            <!-- HERO SECTION -->
            <section class="relative  overflow-hidden">

                <!-- Background Overlay Glow -->
                <div class="absolute inset-0 bg-gradient-to-r 
                    from-[#000000] via-[#000000] to-[#000000]/70 z-10">
                </div>

                <div class="relative z-20 mt-10  pl-6 pr-6 md:pr-0 lg:pl-16">

                    <div class="grid lg:grid-cols-2 items-center min-h-[90vh]">

                        <!-- LEFT SECTION -->
                        <div class="py-20 ">

                            <h2 style="font-family: 'Playfair Display', serif;" class="text-[28px] md:text-[40px] lg:text-[56px] 
                                    font-medium leading-[1.1] tracking-tight text-white">
                                Global Logistics Solutions <br>
                                Delivered with 
                                <span class="text-[#1ecbff]">Excellence</span>
                            </h2>

                            <p class="mt-6 text-gray-300 text-lg md:text-xl font-light max-w-xl">
                                Cross-Border Transport, Container Shipping & Supply Chain Simplified
                            </p>

                            <!-- Stats -->
                            <div class="mt-10 flex flex-col md:flex-row items-center gap-10">

                                <div>
                                    <h3 class="text-2xl font-semibold text-blue-500">150+</h3>
                                    <p class="text-gray-400 text-sm mt-1">Global Destinations</p>
                                </div>

                                <div class="h-10 w-px bg-white/20"></div>

                                <div>
                                    <h3 class="text-2xl font-semibold text-white">24/7</h3>
                                    <p class="text-gray-400 text-sm mt-1">Tracking & Support</p>
                                </div>

                                <div class="h-10 w-px bg-white/20"></div>

                                <div>
                                    <h3 class="text-2xl font-semibold text-yellow-400">10+</h3>
                                    <p class="text-gray-400 text-sm mt-1">Years Experience</p>
                                </div>

                            </div>

                            <!-- Buttons -->
                            <div class="mt-12 flex flex-col sm:flex-row gap-5">

                                <a href="#"
                                class="bg-gradient-to-r 
                                p-4 rounded-md text-white text-sm font-semibold
                                from-[#1d4ed8] via-[#2563eb] to-[#0ea5e9]
                                shadow-[inset_0_1px_0_rgba(255,255,255,0.2),0_0_20px_rgba(37,99,235,0.45)]"
                                >
                                    Request Container Transport
                                </a>

                                <a href="#"
                                class="flex items-center gap-3 
                                        px-7 py-3 rounded-md 
                                        border border-white/20 
                                        text-white text-sm font-medium 
                                        hover:bg-white/5 transition">

                                    <span class="w-7 h-7 flex items-center justify-center 
                                                bg-yellow-500 rounded-full text-black text-xs">
                                        <i class="fa-solid fa-play"></i>
                                    </span>

                                    Watch Company Video
                                </a>

                            </div>

                        </div>


                        <!-- RIGHT SECTION -->
                        <div class="relative flex justify-end">

                            <img src="{{ asset('/banner.jpg') }}" 
                                alt="Logistics"
                                class="w-full max-w-[750px] h-[500px] object-fill">

                                 <!-- Fade Overlay (Hides Left Border of Image) -->
                            <div class="absolute inset-0 z-20
                                bg-gradient-to-r
                                from-[#000000]/80
                                via-transparent
                                to-transparent">
                            </div>

                        </div>

                    </div>

                </div>

            </section>

    </section>

    <!-- FEATURE BAR SECTION -->
    <section class="relative bg-[#000000] -mt-20 z-30 mx-auto px-6 lg:px-16">

        <div style=" margin:0 auto; width:100%; box-sizing:border-box;">

        <div class="parallelogram-bar">
            <div class="inner">

                <!-- ITEM 1 -->
                <div class="item">
                    <div class="icon-circle">
                    <i class="fa-solid fa-file-signature" style="color:#60a5fa; font-size:18px;"></i>
                    </div>
                    <div>
                    <div class="title">Request Transport</div>
                    <div>
                        <span class="subtitle-orange">Get Instant Quote</span>
                        <span class="arrow">→</span>
                    </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <!-- ITEM 2 -->
                <div class="item">
                    <div class="icon-circle">
                    <i class="fa-solid fa-location-dot" style="color:#60a5fa; font-size:18px;"></i>
                    </div>
                    <div>
                    <div class="title">Track Shipment</div>
                    <div>
                        <span class="subtitle-gray">Real-Time Tracking</span>
                        <span class="arrow">→</span>
                    </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <!-- ITEM 3 -->
                <div class="item">
                    <div class="icon-circle">
                    <i class="fa-solid fa-globe" style="color:#60a5fa; font-size:18px;"></i>
                    </div>
                    <div>
                    <div class="title">Global Network</div>
                    <div>
                        <span class="subtitle-orange">150+ Countries</span>
                        <span class="arrow">→</span>
                    </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <!-- ITEM 4 -->
                <div class="item">
                    <div class="icon-circle">
                    <i class="fa-solid fa-file-lines" style="color:#60a5fa; font-size:18px;"></i>
                    </div>
                    <div>
                    <div class="title">Customs & Compliance</div>
                    <div>
                        <span class="subtitle-gray">Cross-Border Experts</span>
                        <span class="arrow">→</span>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative py-20 bg-[#000000] mx-auto px-6 lg:px-16">

        <div class="wrapper">

            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <div class="send-card">

                <div class="send-title">Send Transport Request</div>

                <div class="send-tabs">
                    <button class="send-tab send-active">Container</button>
                    <button class="send-tab">Freight</button>
                    <button class="send-tab">Bulk Cargo</button>
                    <button class="send-tab">Express</button>
                </div>

                <div class="send-input-row">
                    <div class="send-input">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>From (Country/Port)</span>
                    </div>

                    <div class="send-input">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>To (Country/Port)</span>
                    </div>
                </div>

                <div class="send-select-row">
                    <div class="send-select">
                        <span>Container Type</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>

                    <div class="send-select">
                        <span>Pickup Date</span>
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>

                <button class="send-btn">Get Quote</button>

            </div>
            <style>
                /* === MAIN CARD === */
                .send-card {
                    background: #000000;
                    border: 1px solid rgba(59,130,246,0.3);
                    border-radius: 14px;
                    padding: 28px;
                    box-shadow: 0 0 40px rgba(59,130,246,0.2);
                    backdrop-filter: blur(12px);
                    color: white;
                }

                /* Bottom Neon Border Glow */
                .send-card::after {
                    content: "";
                    position: absolute;
                    bottom: 0;
                    left: 0%;
                    width: 94%;
                    height: 4px;
                    background: linear-gradient(
                        to right,
                        transparent,
                        #3b82f6,
                        #0ea5e9,
                        #3b82f6,
                        transparent
                    );
                    border-radius: 50px;
                    filter: blur(3px);
                    opacity: 0.9;
                }

                /* === TITLE === */
                .send-title {
                    font-size: 18px;
                    font-weight: 600;
                    margin-bottom: 22px;
                }

                /* === TABS === */
                .send-tabs {
                    display: flex;
                    background: #0b2238;
                    border-radius: 10px;
                    padding: 4px;
                    margin-bottom: 20px;
                }

                .send-tab {
                    flex: 1;
                    padding: 8px 0;
                    border: none;
                    background: transparent;
                    color: #9ca3af;
                    font-size: 13px;
                    border-radius: 8px;
                    cursor: pointer;
                    transition: 0.3s ease;
                }

                .send-tab:hover {
                    color: white;
                }

                .send-active {
                    background: linear-gradient(to right, #2563eb, #0ea5e9);
                    color: white;
                }

                /* === INPUT ROW === */
                .send-input-row {
                    display: flex;
                    gap: 12px;
                    margin-bottom: 16px;
                }

                .send-input {
                    flex: 1;
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    background: #0b2238;
                    border: 1px solid rgba(255,255,255,0.08);
                    border-radius: 10px;
                    padding: 12px 14px;
                    font-size: 13px;
                    color: #9ca3af;
                    transition: 0.3s ease;
                }

                .send-input:hover {
                    border-color: #3b82f6;
                }

                /* === SELECT ROW === */
                .send-select-row {
                    display: flex;
                    gap: 12px;
                    margin-bottom: 22px;
                }

                .send-select {
                    flex: 1;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    background: #0b2238;
                    border: 1px solid rgba(255,255,255,0.08);
                    border-radius: 10px;
                    padding: 12px 14px;
                    font-size: 13px;
                    color: #9ca3af;
                    transition: 0.3s ease;
                }

                .send-select:hover {
                    border-color: #3b82f6;
                }

                /* === BUTTON === */
                .send-btn {
                    width: 100%;
                    padding: 14px 0;
                    border-radius: 10px;
                    border: none;
                    font-weight: 600;
                    font-size: 14px;
                    color: white;
                    background: linear-gradient(to right, #2563eb, #0ea5e9);
                    box-shadow: 0 0 20px rgba(59,130,246,0.4);
                    cursor: pointer;
                    transition: 0.3s ease;
                }

                .send-btn:hover {
                    opacity: 0.9;
                }
            </style>


            <!-- ═══ CARD 2: SHIPMENT TRACKING ═══ -->
            <div class="card">
                <div class="card-title">Shipment Tracking</div>

                <div class="track-input-wrap">
                <input class="track-input" type="text" placeholder="Enter Tracking ID">
                <button class="btn-track">Track Now</button>
                </div>

                <!-- Progress -->
                <div class="progress-wrap">
                <div class="progress-line">
                    <div class="progress-fill"></div>
                    <div class="progress-dots">
                    <div class="dot active"></div>
                    <div class="dot current"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    </div>
                </div>
                </div>
                <div class="progress-labels">
                <span class="active-lbl">Booked</span>
                <span class="active-lbl">In Transit</span>
                <span>At Port</span>
                <span>Delivered</span>
                </div>

                <!-- Ship visual -->
                <div class="ship-visual">
                <div class="globe-glow"></div>
                <i class="fa-solid fa-ship"></i>
                </div>
            </div>


            <!-- ═══ CARD 3: LATEST NEWS ═══ -->
            <div class="card">
                <div class="news-header">
                <div class="card-title" style="margin-bottom:0">Latest News &amp; Updates</div>
                <a href="#" class="view-all">View All <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i></a>
                </div>

                <!-- News Item 1 -->
                <div class="news-item">
                <div class="news-thumb" style="background: linear-gradient(135deg, #1e4060, #0d3050);">
                    <i class="fa-solid fa-route"></i>
                </div>
                <div class="news-text">
                    <div class="news-title">New Cross-Border Route: UK ← EU</div>
                    <div class="news-date">Apr 20, 2024</div>
                </div>
                </div>
                <div class="news-divider"></div>

                <!-- News Item 2 -->
                <div class="news-item">
                <div class="news-thumb" style="background: linear-gradient(135deg, #3d2a10, #5a3a18);">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>
                <div class="news-text">
                    <div class="news-title">Supply Chain Challenges in 2024</div>
                    <div class="news-date">Apr 15, 2024</div>
                </div>
                </div>
                <div class="news-divider"></div>

                <!-- News Item 3 -->
                <div class="news-item">
                <div class="news-thumb" style="background: linear-gradient(135deg, #0d3828, #1a5a3a);">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div class="news-text">
                    <div class="news-title">Carbon-Neutral Logistics Initiative</div>
                    <div class="news-date">Apr 10, 2024</div>
                </div>
                </div>

            </div>

        </div>

    </section>

    <section class="mx-auto px-6 bg-[#000000] mb-4 lg:px-16">
        <div class="section">
        <div class="trap-wrap">

            <!-- SVG Trapezoid: top angled in on both sides, bottom full width -->
            <svg class="trap-svg" viewBox="0 0 1200 130" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <!-- Gradient for top border line -->
                <linearGradient id="topGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%"   stop-color="rgba(59,130,246,0.0)"/>
                <stop offset="15%"  stop-color="rgba(59,130,246,0.8)"/>
                <stop offset="85%"  stop-color="rgba(59,130,246,0.8)"/>
                <stop offset="100%" stop-color="rgba(59,130,246,0.0)"/>
                </linearGradient>
                <!-- Gradient for bottom border -->
                <linearGradient id="botGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%"   stop-color="rgba(59,130,246,0.0)"/>
                <stop offset="10%"  stop-color="rgba(59,130,246,0.6)"/>
                <stop offset="90%"  stop-color="rgba(59,130,246,0.6)"/>
                <stop offset="100%" stop-color="rgba(59,130,246,0.0)"/>
                </linearGradient>
                <linearGradient id="bgGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%"   stop-color="#0b1f35"/>
                <stop offset="100%" stop-color="#071525"/>
                </linearGradient>
            </defs>

            <!-- Trapezoid fill: top corners angled inward -->
            <!-- top-left: (55,0), top-right: (1145,0), bottom-right: (1200,130), bottom-left: (0,130) -->
            <polygon
                points="55,0 1145,0 1200,130 0,130"
                fill="url(#bgGrad)"
            />

            <!-- Top border line -->
            <line x1="55" y1="0" x2="1145" y2="0" stroke="url(#topGrad)" stroke-width="1.5" vector-effect="non-scaling-stroke"/>

            <!-- Bottom border line -->
            <line x1="0" y1="130" x2="1200" y2="130" stroke="url(#botGrad)" stroke-width="1.5" vector-effect="non-scaling-stroke"/>

            <!-- Left angled side -->
            <line x1="55" y1="0" x2="0" y2="130" stroke="rgba(59,130,246,0.5)" stroke-width="1.5" vector-effect="non-scaling-stroke"/>

            <!-- Right angled side -->
            <line x1="1145" y1="0" x2="1200" y2="130" stroke="rgba(59,130,246,0.5)" stroke-width="1.5" vector-effect="non-scaling-stroke"/>
            </svg>

            <!-- CONTENT -->
            <div class="trap-content">

            <!-- TITLE sits on the top border line -->
            <div class="top-label">
                <span class="top-label-text">
                Our <span class="highlight">Global Partners</span> &amp; Networks
                </span>
            </div>

            <!-- LOGOS ROW -->
            <div class="logos-row">
                <div class="nav-btn"><i class="fa-solid fa-chevron-left"></i></div>

                <div class="logos-list">
                <div class="logo-item">
                    <div class="brand maersk">
                    <div class="star-box"><i class="fa-solid fa-star"></i></div>
                    MAERSK
                    </div>
                </div>
                <div class="logo-item">
                    <div class="msc-wrap">
                    <span class="msc-m">m</span>
                    <span class="msc-sc">sc</span>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="brand dpworld">
                    <i class="fa-solid fa-recycle dp-icon"></i>
                    DP WORLD
                    </div>
                </div>
                <div class="logo-item">
                    <div class="brand cmacgm">CMA CGM</div>
                </div>
                <div class="logo-item">
                    <span class="dhl">DHL</span>
                </div>
                <div class="logo-item">
                    <span class="fedex"><span class="fed">Fed</span><span class="ex">Ex</span></span>
                </div>
                <div class="logo-item">
                    <div class="cosco-circle">COSCO<br>SHIPPING</div>
                </div>
                </div>

                <div class="nav-btn"><i class="fa-solid fa-chevron-right"></i></div>
            </div>

            <!-- FEATURES sit on the bottom border line -->
            <div class="bottom-label">
                <div class="bottom-label-inner">
                <div class="feat-dot"></div>
                <div class="feature"><i class="fa-solid fa-truck-fast"></i> Fast &amp; Secure Delivery</div>
                <div class="feature"><i class="fa-solid fa-location-dot"></i> Real-Time Tracking</div>
                <div class="feature"><i class="fa-solid fa-people-group"></i> Expert Logistics Team</div>
                <div class="feature"><i class="fa-solid fa-headset"></i> 24/7 Customer Support</div>
                <div class="feat-dot"></div>
                </div>
            </div>

            </div>
        </div>
        </div>
    </section>
    <style>
        

        /* ─── TRAPEZOID CONTAINER ───
            Trapezoid shape: top-left angled in, top-right angled in more sharply
            Bottom is full width
        */
        .trap-wrap {
            position: relative;
            width: 100%;
            background: #000000;
        }

        /* The SVG draws the full trapezoid shape as background + border */
        .trap-svg {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            overflow: visible;
            pointer-events: none;
            z-index: 0;
        }

        /* Content sits on top of SVG */
        .trap-content {
            position: relative;
            z-index: 2;
            padding: 0 50px;

        }

        /* ─── TITLE ON TOP BORDER ─── */
        .top-label {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 0;
            position: relative;
            /* Push text to sit on the top border line */
        bottom: -10px;
        }

        .top-label-text {
            background: transparent;
            padding: 0 18px;
            color: #cbd5e1;
            font-size: 14px;
            font-weight: 500;
            white-space: nowrap;
            position: relative;
            top: -10px; /* half the text height, so it straddles the line */
        }
        .top-label-text .highlight { color: #3b82f6; font-weight: 700; }

        /* ─── LOGOS ROW ─── */
        .logos-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 0 18px;
        }

        .nav-btn {
            width: 26px; height: 26px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.05);
            color: #9ca3af;
            font-size: 10px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; flex-shrink: 0;
            transition: all 0.2s;
        }
        .nav-btn:hover { border-color: #3b82f6; color: #3b82f6; }

        .logos-list {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: space-around;
            padding: 0 10px;
        }

        .logo-item {
            display: flex; align-items: center; justify-content: center;
            padding: 4px 16px;
            border-right: 1px solid rgba(255,255,255,0.08);
            cursor: pointer;
            transition: opacity 0.2s;
        }
        .logo-item:last-child { border-right: none; }
        .logo-item:hover { opacity: 0.7; }

        .brand { display: flex; align-items: center; gap: 7px; font-weight: 800; white-space: nowrap; }

        /* MAERSK */
        .maersk { color: #fff; font-size: 14px; letter-spacing: 1.5px; }
        .star-box {
            background: #1a56db; width: 26px; height: 26px; border-radius: 4px;
            display: flex; align-items: center; justify-content: center; font-size: 11px; color: #fff; flex-shrink: 0;
        }

        /* MSC */
        .msc-wrap { display: flex; flex-direction: column; align-items: center; line-height: 1; }
        .msc-m { font-size: 20px; font-weight: 900; color: #fff; }
        .msc-sc { font-size: 10px; font-weight: 800; color: #fff; letter-spacing: 2.5px; }

        /* DP WORLD */
        .dpworld { color: #fff; font-size: 13px; letter-spacing: 0.5px; }
        .dp-icon { color: #22c55e; font-size: 14px; }

        /* CMA CGM */
        .cmacgm { color: #fff; font-size: 12px; font-weight: 900; letter-spacing: 1px; }

        /* DHL */
        .dhl { color: #f5c518; font-size: 22px; font-weight: 900; font-style: italic; letter-spacing: -1px; }

        /* FedEx */
        .fedex { font-size: 20px; font-weight: 900; }
        .fed { color: #fff; }
        .ex  { color: #f97316; }

        /* COSCO */
        .cosco-circle {
            width: 38px; height: 38px; border-radius: 50%;
            border: 2px solid #dc2626;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            font-size: 6px; font-weight: 900; color: #fff; line-height: 1.3; text-align: center;
        }

        /* ─── BOTTOM FEATURES ON BORDER LINE ─── */
        .bottom-label {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 0;
            position: relative;
        }

        .bottom-label-inner {
            background: transparent;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 0;
            justify-content: space-around;
            width: 92%;
            position: relative;
            
        }

        .feature {
            display: flex; align-items: center; gap: 7px;
            color: #94a3b8; font-size: 12px; font-weight: 500; white-space: nowrap;
            padding: 0 20px;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        .feature:last-child { border-right: none; }
        .feature i { color: #3b82f6; font-size: 13px; }

        .feat-dot {
            width: 5px; height: 5px; border-radius: 50%;
            background: rgba(100,150,255,0.5);
            flex-shrink: 0;
        }

        /* ============================== */
        /* 📱 RESPONSIVE FIXES */
        /* ============================== */

        @media (max-width: 1024px) {

            /* Reduce side padding */
            .trap-content {
                padding: 0 20px;
            }

            /* Logos wrap instead of squeeze */
            .logos-list {
                flex-wrap: wrap;
                gap: 14px;
                justify-content: center;
            }

            .logo-item {
                border-right: none;
                padding: 6px 10px;
            }

            /* Hide nav arrows on tablet/mobile */
            .nav-btn {
                display: none;
            }

            /* Bottom features wrap */
            .bottom-label-inner {
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
            }

            .feature {
                border-right: none;
                padding: 0 10px;
                font-size: 11px;
            }
        }

        @media (max-width: 768px) {

            /* Increase trapezoid height */
            .trap-wrap {
                padding-top: 30px;
                padding-bottom: 30px;
            }

            /* Make title normal positioned */
            .top-label {
                position: static;
                height: auto;
                margin-bottom: 18px;
            }

            .top-label-text {
                position: static;
                top: 0;
                font-size: 13px;
                text-align: center;
                white-space: normal;
            }

            /* Logos stacked grid style */
            .logos-list {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 18px;
                padding: 0;
            }

            .logo-item {
                justify-content: center;
                border: none;
            }

            /* Make logo sizes slightly smaller */
            .dhl { font-size: 18px; }
            .fedex { font-size: 16px; }

            /* Bottom features stacked */
            .bottom-label {
                position: static;
                height: auto;
                margin-top: 20px;
            }

            .bottom-label-inner {
                width: 100%;
                flex-direction: column;
                gap: 12px;
            }

            .feature {
                font-size: 12px;
                padding: 0;
            }

            .feat-dot {
                display: none;
            }
        }
    </style>

    <!-- ================= FOOTER ================= -->
    <footer class="relative bg-[#000000] border-t border-white/10 mt-20">

        <!-- Top CTA Strip -->
        <div class="bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] border-b border-white/10">
            <div class=" mx-auto px-6 lg:px-16 py-10 flex flex-col md:flex-row items-center justify-between gap-6">
                
                <div>
                    <h3 class="text-xl md:text-2xl font-semibold text-white">
                        Ready to Ship Your Cargo Worldwide?
                    </h3>
                    <p class="text-gray-400 mt-2 text-sm">
                        Get fast, secure and reliable logistics solutions today.
                    </p>
                </div>

                <a href="#"
                class="bg-gradient-to-r 
                py-3 px-6 rounded-md text-white text-sm font-semibold
                from-[#1d4ed8] via-[#2563eb] to-[#0ea5e9]
                shadow-[inset_0_1px_0_rgba(255,255,255,0.2),0_0_20px_rgba(37,99,235,0.45)]
                hover:opacity-90 transition">
                    Request a Quote
                </a>

            </div>
        </div>

        <!-- Main Footer -->
        <div class=" mx-auto px-6 lg:px-16 py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Logo + About -->
            <div>
                <img src="{{ asset('logo.jpg') }}" 
                    alt="Globetrotters Logo" 
                    class="h-12 w-auto mb-6">

                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Globetrotters Ltd delivers secure and scalable global logistics
                    solutions across 150+ destinations worldwide.
                    Your trusted partner in international shipping.
                </p>

                <!-- Social Icons -->
                <div class="flex items-center gap-4">
                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/5 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/5 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/5 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/5 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-white font-semibold mb-5">Company</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-blue-400 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Our Services</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Global Network</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Careers</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-white font-semibold mb-5">Services</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-blue-400 transition">Air Freight</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Ocean Freight</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Road Transport</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Warehousing</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Custom Clearance</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-5">Contact Us</h4>
                <div class="space-y-4 text-sm text-gray-400">

                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-blue-400 mt-1"></i>
                        <span>
                            123 Global Trade Avenue<br>
                            London, United Kingdom
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-blue-400"></i>
                        <span>+44 20 1234 5678</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-blue-400"></i>
                        <span>support@globetrotters.com</span>
                    </div>

                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-6 lg:px-16 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">

                <div>
                    © 2024 Globetrotters Ltd. All rights reserved.
                </div>

                <div class="flex gap-6">
                    <a href="#" class="hover:text-blue-400 transition">Privacy</a>
                    <a href="#" class="hover:text-blue-400 transition">Terms</a>
                    <a href="#" class="hover:text-blue-400 transition">Cookies</a>
                </div>

            </div>
        </div>

    </footer>
    <!-- ================= END FOOTER ================= -->

</body>
</html>