@extends('layouts.app')

@section('content')
    <style>
       .feature-bar {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid rgba(37, 99, 235, 0.25);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.08);
            overflow: hidden;
            position: relative;
        }

        .inner {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        }

        .item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 22px 24px;
        position: relative;
        cursor: pointer;

        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 0.8s ease forwards;
        }

        /* Stagger animation delay */

        .item:nth-child(1) {
        animation-delay: 0.1s;
        }

        .item:nth-child(2) {
        animation-delay: 0.25s;
        }

        .item:nth-child(3) {
        animation-delay: 0.4s;
        }

        .item:nth-child(4) {
        animation-delay: 0.55s;
        }

        .divider {
        position: absolute;
        right: 0;
        top: 18px;
        bottom: 18px;
        width: 1px;
        background: rgba(255, 255, 255, 0.08);
        }

        .icon-circle {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(37, 99, 235, 0.18);
        border: 1px solid rgba(59, 130, 246, 0.45);
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.35);
        color: #000000;
        font-size: 18px;

        transition: all 0.3s ease;
        }

        .item:hover .icon-circle {
        transform: scale(1.12);
        box-shadow: 0 0 25px rgba(59, 130, 246, 0.7);
        }

        .title {
        color: #000;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 3px;
        }

        .subtitle-orange {
        color: #fb923c;
        font-size: 12px;
        font-weight: 500;
        }

        .subtitle-gray {
        color: #9ca3af;
        font-size: 12px;
        }

        .arrow {
        transition: all 0.2s;
        color: #9ca3af;
        font-size: 12px;
        margin-left: 4px;
        }

        .item:hover .arrow {
        color: #60a5fa;
        margin-left: 6px;
        }

        /* Entrance Animation */

        @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(35px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
        }

        @media (max-width: 768px) {
        .inner {
            grid-template-columns: repeat(1, 1fr);
        }
        }

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
           background: #f8fafc;
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
            color: #000;
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
            color: #000000;
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
                flex-direction: column;

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

    <style>
        .video-modal {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        }

        .video-content {
        background: #ffffff;
        width: 700px;
        max-width: 90%;
        border-radius: 6px;
        padding: 20px;
        position: relative;
        text-align: center;
        

        animation: popupScale 0.35s ease;
        }

        .video-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
        color: #000;
        }

        .video-wrapper {
        width: 100%;
        height: 400px;
        }

        .video-wrapper iframe {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        }

        .close-video {
        position: absolute;
        right: 15px;
        top: 10px;
        font-size: 22px;
        cursor: pointer;
        color: #666;
        }

        .skip-video {
        margin-top: 10px;
        font-size: 13px;
        color: #666;
        cursor: pointer;
        }

        /* animation */

        @keyframes popupScale {
        from {
            opacity: 0;
            transform: scale(0.85);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
        }

    </style>


    <!-- HERO SECTION -->
    <section class="relative bg-white min-h-screen flex flex-col">

            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('images/logistics-bg.jpg') }}" 
                    class="w-full h-full object-cover" 
                    alt="Logistics Background">
                {{-- <div class="absolute inset-0 bg-gradient-to-r from-[#06121e] via-[#071a2c]/90 to-[#071a2c]/60"></div> --}}
            </div>

        

            <!-- HERO CONTENT -->
            <!-- HERO SECTION -->
            <section class="relative overflow-hidden bg-[#f8fafc]">

                <!-- Background Gradient -->
                <div class="absolute inset-0 bg-gradient-to-r 
                    from-white via-[#f1f5f9] to-white z-10">
                </div>

                <div class="relative z-20 pl-6 pr-6 md:pr-0 lg:pl-16">

                    <div class="grid lg:grid-cols-2 items-center min-h-[90vh]">

                        <!-- LEFT -->
                        <div class="py-20">

                            <h2 style="font-family: 'Playfair Display', serif;"
                                class="text-[28px] md:text-[40px] lg:text-[56px]
                                font-medium leading-[1.1] tracking-tight text-[#0f172a]">

                                Global Logistics Solutions <br>
                                Delivered with 
                                <span class="text-[#2563eb]">Excellence</span>

                            </h2>

                            <p class="mt-6 text-[#64748b] text-lg md:text-xl font-light max-w-xl">
                                Cross-Border Transport, Container Shipping & Supply Chain Simplified
                            </p>

                            <!-- Stats -->
                            {{-- <div class="mt-10 flex flex-col md:flex-row items-center gap-10">

                                <div>
                                    <h3 class="text-2xl font-semibold text-[#2563eb]">150+</h3>
                                    <p class="text-gray-500 text-sm mt-1">Global Destinations</p>
                                </div>

                                <div class="h-10 w-px bg-gray-300"></div>

                                <div>
                                    <h3 class="text-2xl font-semibold text-[#0f172a]">24/7</h3>
                                    <p class="text-gray-500 text-sm mt-1">Tracking & Support</p>
                                </div>

                                <div class="h-10 w-px bg-gray-300"></div>

                                <div>
                                    <h3 class="text-2xl font-semibold text-[#0f172a]">10+</h3>
                                    <p class="text-gray-500 text-sm mt-1">Years Experience</p>
                                </div>

                            </div> --}}
                            <!-- Stats -->
                            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:flex md:flex-row items-center gap-6 md:gap-10">

                                <!-- Box 1 -->
                                <div class="text-center md:text-left bg-gray-50 md:bg-transparent p-5 md:p-0 rounded-xl md:rounded-none shadow-sm md:shadow-none border md:border-0 border-gray-200">
                                    <h3 class="text-2xl font-semibold text-[#2563eb]">150+</h3>
                                    <p class="text-gray-500 text-sm mt-1">Global Destinations</p>
                                </div>

                                <!-- Divider desktop only -->
                                <div class="hidden md:block h-10 w-px bg-gray-300"></div>

                                <!-- Box 2 -->
                                <div class="text-center md:text-left bg-gray-50 md:bg-transparent p-5 md:p-0 rounded-xl md:rounded-none shadow-sm md:shadow-none border md:border-0 border-gray-200">
                                    <h3 class="text-2xl font-semibold text-[#0f172a]">24/7</h3>
                                    <p class="text-gray-500 text-sm mt-1">Tracking & Support</p>
                                </div>

                                <!-- Divider desktop only -->
                                <div class="hidden md:block h-10 w-px bg-gray-300"></div>

                                <!-- Box 3 -->
                                <div class="text-center md:text-left bg-gray-50 md:bg-transparent p-5 md:p-0 rounded-xl md:rounded-none shadow-sm md:shadow-none border md:border-0 border-gray-200">
                                    <h3 class="text-2xl font-semibold text-[#0f172a]">20+</h3>
                                    <p class="text-gray-500 text-sm mt-1">Years Experience</p>
                                </div>

                            </div>

                            <!-- Buttons -->
                            <div class="mt-12 flex flex-col sm:flex-row gap-5">

                                <!-- Primary -->
                                <a href="/contact" class="bg-gradient-to-r p-4 rounded-md text-white text-sm font-semibold from-[#1d4ed8] via-[#2563eb] to-[#0ea5e9] shadow-[inset_0_1px_0_rgba(255,255,255,0.2),0_0_20px_rgba(37,99,235,0.45)]" > Request a Quote </a>

                                <!-- Secondary -->
                                <!-- WATCH VIDEO BUTTON --> 
                                 

                                 <a
                                    href="#"
                                    id="openVideo"
                                    class="flex items-center gap-3 
                                    px-7 py-3 rounded-md 
                                    border border-gray-300 
                                    text-gray-700 text-sm font-medium 
                                    hover:bg-gray-100 transition"
                                >

                                    <span
                                        class="w-7 h-7 flex items-center justify-center
                                        bg-blue-600 rounded-full text-white text-xs">
                                        <i class="fa-solid fa-play"></i>
                                    </span>

                                    Watch Company Video

                                </a>
                                <!-- VIDEO MODAL --> 
                                <div id="videoModal" class="video-modal"> 
                                    <div class="video-content"> 
                                        <span class="close-video">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span> 
                                        <h2 class="video-title">Meet Our Company</h2> 
                                        <div class="video-wrapper"> 
                                            <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen >
                                            </iframe> 
                                        </div> 
                                        <div class="skip-video">Close Video</div>
                                     </div> 
                                    </div> 
                                     <script> const openBtn = document.getElementById("openVideo"); const modal = document.getElementById("videoModal"); const closeBtn = document.querySelector(".close-video"); const skipBtn = document.querySelector(".skip-video"); const frame = document.getElementById("videoFrame"); const videoURL = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1"; openBtn.addEventListener("click", function (e) { e.preventDefault(); modal.style.display = "flex"; frame.src = videoURL; }); function closeVideo() { modal.style.display = "none"; frame.src = ""; } closeBtn.addEventListener("click", closeVideo); skipBtn.addEventListener("click", closeVideo); window.addEventListener("click", function (e) { if (e.target === modal) { closeVideo(); } }); </script>

                            </div>

                        </div>

                        <!-- RIGHT IMAGE -->
                        <div class="relative flex justify-end hidden md:block">

                            <img src="{{ asset('/banner.jpg') }}"
                                alt="Logistics"
                                class="w-full max-w-[750px] h-[500px] object-cover  shadow-xl">

                            <div class="absolute inset-0 z-20
                                bg-gradient-to-r
                                from-[#f8fafc]
                                via-transparent
                                to-transparent">
                            </div>

                        </div>

                    </div>

                </div>

            </section>

    </section>

    <!-- FEATURE BAR SECTION -->
   <!-- FEATURE BAR SECTION -->
    <section class=" bg-white mx-auto px-6 lg:px-16">
        <div style="margin: 0 auto; width: 100%; box-sizing: border-box">
            <div class="feature-bar">
                <div class="inner">
                    <!-- ITEM 1 -->
                    <div class="item">
                        <div class="icon-circle">
                            <i class="fa-solid fa-file-signature"></i>
                        </div>

                        <a href="/contact">
                            <div class="title">
                                
                                Request Transport
                                
                            </div>
                            <div>
                            <span class="subtitle-orange">Get Instant Quote</span>
                            <span class="arrow">→</span>
                            </div>
                        </a>

                    <div class="divider"></div>
                    </div>

                    <!-- ITEM 2 -->
                    <div class="item">
                    <div class="icon-circle">
                        <i class="fa-solid fa-location-dot"></i>
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
                        <i class="fa-solid fa-globe"></i>
                    </div>

                    <a href="/global">

                        <div class="title">Global Network</div>
                        <div>
                        <span class="subtitle-orange">150+ Countries</span>
                        <span class="arrow">→</span>
                        </div>
                    </a>

                    <div class="divider"></div>
                    </div>

                    <!-- ITEM 4 -->
                    <div class="item">
                    <div class="icon-circle">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>

                    <a href="/global">

                        <div class="title">Customs & Compliance</div>
                        <div>
                        <span class="subtitle-gray">Cross-Border Experts</span>
                        <span class="arrow">→</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 bg-white mx-auto px-6 lg:px-16">

        <div class="wrapper">

            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <!-- ═══ CARD 1: SEND TRANSPORT REQUEST ═══ -->
            <div class="send-card">
            <div class="send-title">Send Transport Request</div>

            <!-- TABS -->
            <div class="send-tabs">
                <button class="send-tab send-active" data-tab="container">Container</button>
                <button class="send-tab" data-tab="freight">Freight</button>
                <button class="send-tab" data-tab="bulk">Bulk Cargo</button>
                <button class="send-tab" data-tab="express">Express</button>
            </div>

            <!-- FORM -->
            <form id="quoteForm">

                <!-- CONTAINER -->
                <div class="tab-content active" id="container">
                <div class="send-input-row">
                    <input class="send-input-field" placeholder="From (Country/Port)" />
                    <input class="send-input-field" placeholder="To (Country/Port)" />
                </div>

                <div class="send-select-row">
                    <input class="send-input-field" placeholder="Container Type" />
                    <input class="send-input-field" type="date" />
                </div>
                </div>

                <!-- FREIGHT -->
                <div class="tab-content" id="freight">
                <div class="send-input-row">
                    <input class="send-input-field" placeholder="Origin Country" />
                    <input class="send-input-field" placeholder="Destination Country" />
                </div>

                <div class="send-select-row">
                    <input class="send-input-field" placeholder="Weight (KG)" />
                    <input class="send-input-field" type="date" />
                </div>
                </div>

                <!-- BULK -->
                <div class="tab-content" id="bulk">
                <div class="send-input-row">
                    <input class="send-input-field" placeholder="Cargo Type" />
                    <input class="send-input-field" placeholder="Quantity (Tons)" />
                </div>

                <div class="send-select-row">
                    <input class="send-input-field" placeholder="Loading Port" />
                    <input class="send-input-field" type="date" />
                </div>
                </div>

                <!-- EXPRESS -->
                <div class="tab-content" id="express">
                <div class="send-input-row">
                    <input class="send-input-field" placeholder="Pickup Address" />
                    <input class="send-input-field" placeholder="Delivery Address" />
                </div>

                <div class="send-select-row">
                    <input class="send-input-field" placeholder="Package Weight" />
                    <input class="send-input-field" type="date" />
                </div>
                </div>

                <button type="button" id="openQuotePopup" class="send-btn">
                Get Quote
                </button>
            </form>
            </div>

            <div id="quotePopup" class="quote-modal">
            <div class="quote-modal-content">

                <span class="close-popup">&times;</span>

                <h3 style="color: #000;">Request Quote</h3>

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                @csrf

                <input type="text" name="name" placeholder="Your Name" required />
                <input type="email" name="email" placeholder="Your Email" required />
                <input type="tel" name="phone" placeholder="Contact Number" required />
                <input type="text" name="subject" placeholder="Subject" required />
                <textarea name="message" placeholder="Message" rows="4"></textarea>

                <button type="submit" class="send-btn">
                    Submit Request
                </button>
                </form>

            </div>
            </div>
            <style>
                
                /* === MAIN CARD === */
                .send-card {
                    background: #f8fafc;
                    border: 1px solid rgba(59,130,246,0.3);
                    border-radius: 14px;
                    padding: 28px;
                    box-shadow: 0 0 40px rgba(59,130,246,0.2);
                    backdrop-filter: blur(12px);
                    color: #000;
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

                .send-input-field {
                flex: 1;
                background: #0b2238;
                border: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 10px;
                padding: 12px 14px;
                color: #fff;
                font-size: 13px;
                }

                .tab-content {
                display: none;
                }

                .tab-content.active {
                display: block;
                }

                /* Popup */

                .quote-modal{
                    position: fixed;
                    inset: 0;
                    background: rgba(0,0,0,0.7);
                    display: none;
                    align-items: center;
                    justify-content: center;
                    z-index: 9999;
                    overflow-y: auto;
                }

                .quote-modal-content {
                background: #0b2238;
                padding: 30px;
                border-radius: 12px;
                width: 400px;
                max-width: 90%;
                color: white;
                }

                .quote-modal-content input,
                .quote-modal-content textarea {
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                border: 1px solid rgba(255,255,255,0.1);
                background: #06121e;
                color: white;
                }

                .close-popup {
                position: absolute;
                right: 20px;
                top: 15px;
                cursor: pointer;
                font-size: 20px;
                }

                .send-tab:hover {
                    color: white;
                }

                .send-active {
                    background: linear-gradient(to right, #2563eb, #0ea5e9);
                    color: white;
                }

                .send-card {
                    position: relative;
                }

                .quote-modal-content {
                    position: relative;
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

                /* =========================
                MOBILE RESPONSIVE
                ========================= */
                @media (max-width:768px){

                .quote-modal{
                    align-items:flex-start;
                    padding-top:40px;
                    overflow-y:auto;
                }

                .quote-modal-content{
                    width:95%;
                    max-height:80vh;
                    overflow-y:auto;
                    padding:20px;
                    -webkit-overflow-scrolling:touch;
                }

                }

                
            </style>

            <script>
                document.addEventListener("DOMContentLoaded", function () {

                const tabs = document.querySelectorAll(".send-tab");
                const contents = document.querySelectorAll(".tab-content");

                tabs.forEach(tab => {
                    tab.addEventListener("click", function () {

                    tabs.forEach(t => t.classList.remove("send-active"));
                    this.classList.add("send-active");

                    const id = this.getAttribute("data-tab");

                    contents.forEach(c => {
                        c.classList.remove("active");
                    });

                    const activeContent = document.getElementById(id);
                    if (activeContent) {
                        activeContent.classList.add("active");
                    }

                    });
                });

                const popup = document.getElementById("quotePopup");
                const openBtn = document.getElementById("openQuotePopup");
                const closeBtn = document.querySelector(".close-popup");

                if (openBtn) {
                    openBtn.addEventListener("click", function () {
                    popup.style.display = "flex";
                    });
                }

                if (closeBtn) {
                    closeBtn.addEventListener("click", function () {
                    popup.style.display = "none";
                    });
                }

                window.addEventListener("click", function (e) {
                    if (e.target === popup) {
                    popup.style.display = "none";
                    }
                });

                });
            </script>


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
            <!-- ═══ CARD: LATEST NEWS ═══ -->
           <!-- ═══ CARD: LATEST NEWS ═══ -->
            <div class="card news-card">

                <div class="news-header">
                    <div class="card-title" style="margin-bottom:0">
                        Latest News & Updates
                    </div>

                    <a href="{{ url('/blog') }}" class="view-all">
                        View All
                        <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
                    </a>
                </div>

                @foreach($blogs->take(3) as $blog)

                    <div class="news-item">

                        <div class="news-thumb">
                            <img
                                src="{{ asset('blogs/'.$blog->image) }}"
                                alt="{{ $blog->title }}"
                            >
                        </div>

                        <div class="news-text">

                            <div class="news-title">
                                {{ $blog->title }}
                            </div>

                            <div class="news-date">
                                {{ \Carbon\Carbon::parse($blog->published_at)->format('d F Y') }}
                            </div>

                        </div>

                    </div>

                    @if(!$loop->last)
                        <div class="news-divider"></div>
                    @endif

                @endforeach

            </div>
            <style>
                .news-card .news-item {
                display: flex;
                gap: 14px;
                align-items: center;
                padding: 12px 0;

                opacity: 0;
                transform: translateY(20px);
                animation: newsFadeUp 0.7s ease forwards;
                }

                /* Stagger animation */

                .news-card .news-item:nth-child(2) {
                animation-delay: 0.15s;
                }

                .news-card .news-item:nth-child(4) {
                animation-delay: 0.3s;
                }

                .news-card .news-item:nth-child(6) {
                animation-delay: 0.45s;
                }

                .news-thumb {
                width: 60px;
                height: 60px;
                border-radius: 6px;
                overflow: hidden;
                flex-shrink: 0;
                }

                .news-thumb img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.4s ease;
                }

                /* Image zoom hover */

                .news-item:hover .news-thumb img {
                transform: scale(1.1);
                }

                .news-title {
                font-size: 14px;
                font-weight: 600;
                color: #000;
                transition: color 0.3s;
                }

                .news-item:hover .news-title {
                color: #60a5fa;
                }

                .news-date {
                font-size: 12px;
                color: #9ca3af;
                }

                .news-divider {
                height: 1px;
                background: rgba(255, 255, 255, 0.08);
                margin: 8px 0;
                }

                /* Animation */

                @keyframes newsFadeUp {
                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
                }
            </style>

        </div>

    </section>

    

    <section class="bg-gradient-to-r from-black via-[#06122b] to-[#0a2a55] overflow-hidden">

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 items-center gap-12 px-8 lg:px-16 py-24">

            <!-- LEFT CONTENT -->
            <div class="text-white space-y-6">

                <h2 class="text-5xl font-bold tracking-wide">
                    OUR MISSION
                </h2>

                <div class="w-20 h-[3px] bg-blue-500 mt-6"></div>

                <p class="text-gray-400 leading-relaxed text-lg max-w-xl">
                    Our aim is to deliver a positive and reliable experience to each
                    and every client while offering exceptional values in the
                    marketplace and setting the standard for professionalism in the
                    logistics solution we offer.
                </p>

                <p class="text-gray-400 leading-relaxed text-lg max-w-xl">
                    In addition to operating our business profitably, we strive to
                    operate it responsibly both for our clients and our employees.
                </p>

            </div>


            <!-- RIGHT IMAGE -->
            <div class="relative group">

                <!-- glowing background -->
                <div class="absolute inset-0 bg-blue-500/10 blur-3xl opacity-40 group-hover:opacity-70 transition duration-500"></div>

                <img 
                src="{{ asset('a1.jpg') }}"
                class="relative rounded-xl shadow-2xl transform transition duration-700 group-hover:scale-105 group-hover:-translate-y-2"
                >

            </div>

        </div>

    </section>

    <section class="bg-white py-28 relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <!-- TITLE -->
            <div class="text-center mb-20">

                <h2 class="text-black text-4xl md:text-5xl font-bold tracking-wide">
                    OUR VISION
                </h2>

                <div class="w-20 h-[3px] bg-blue-500 mx-auto mt-6"></div>

                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                    Delivering world-class logistics solutions through innovation,
                    reliability and global expertise.
                </p>

            </div>


            <!-- VISION ITEMS -->
            <div class="grid md:grid-cols-3 gap-12 mb-20">

                <!-- ITEM -->
                <a href="/industy">
                <div class="group flex items-start gap-6 p-6 rounded-xl bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a]  border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                    <div class="text-5xl font-bold text-blue-500 group-hover:scale-110 transition">
                        01
                    </div>

                    <div class="text-gray-300 font-semibold leading-relaxed">
                        PROVIDING HIGH <br>
                        QUALITY OF SERVICES
                    </div>

                </div>
                </a>


                <!-- ITEM -->
                <a href="/global">

                <div class="group flex items-start gap-6 p-6 rounded-xl bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a]  border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                    <div class="text-5xl font-bold text-blue-500 group-hover:scale-110 transition">
                        02
                    </div>

                    <div class="text-gray-300 font-semibold leading-relaxed">
                        GLOBAL EXPERTISE IN <br>
                        LOGISTICS
                    </div>

                </div>
                </a>


                <!-- ITEM -->
                <a href="/global">

                <div class="group flex items-start gap-6 p-6 rounded-xl bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a]  border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                    <div class="text-5xl font-bold text-blue-500 group-hover:scale-110 transition">
                        03
                    </div>

                    <div class="text-gray-300 font-semibold leading-relaxed">
                        GOAL OF BECOMING <br>
                        THE INDUSTRY LEADER
                    </div>

                </div>
                </a>

            </div>

        </div>


        <!-- IMAGE GRID -->
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-3 gap-8">

                <!-- IMAGE -->
                <div class="relative group overflow-hidden rounded-xl">

                    <img src="{{ asset('s3.png') }}"
                    class="w-full h-[260px] object-fit transform group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                </div>


                <!-- IMAGE -->
                <div class="relative group overflow-hidden rounded-xl">

                    <img src="{{ asset('s2.png') }}"
                    class="w-full h-[260px] object-fit transform group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                </div>


                <!-- IMAGE -->
                <div class="relative group overflow-hidden rounded-xl">

                    <img src="{{ asset('s1.png') }}"
                    class="w-full h-[260px] object-fit transform group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                </div>

            </div>

        </div>

    </section>

    {{-- <section class="bg-white py-28">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <!-- TITLE -->
            <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                INDUSTRIES WE SERVE
            </h2>

            <div class="w-20 h-[3px] bg-blue-500 mx-auto mt-6 mb-20"></div>


            <!-- GRID -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">

                <!-- CARD -->
                <div class="industry-card group">

                    <div class="industry-title">
                        RETAIL
                    </div>

                    <div class="industry-popup">
                        End-to-end retail logistics including warehousing,
                        distribution and inventory management.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        MANUFACTURING
                    </div>

                    <div class="industry-popup">
                        Optimized supply chain operations for factories
                        and industrial production logistics.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        FOOD & BEVERAGE
                    </div>

                    <div class="industry-popup">
                        Temperature-controlled logistics and global
                        distribution for perishable goods.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        AUTOMOTIVE
                    </div>

                    <div class="industry-popup">
                        Global automotive supply chain solutions,
                        parts distribution and freight transport.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        HEALTHCARE
                    </div>

                    <div class="industry-popup">
                        Secure and compliant transportation for
                        medical equipment and pharmaceuticals.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        FASHION
                    </div>

                    <div class="industry-popup">
                        Fast global delivery solutions for apparel
                        brands and fashion retailers.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        OIL & ENERGY
                    </div>

                    <div class="industry-popup">
                        Specialized logistics support for heavy
                        equipment and energy infrastructure.
                    </div>

                </div>


                <div class="industry-card group">

                    <div class="industry-title">
                        TECHNOLOGY
                    </div>

                    <div class="industry-popup">
                        Secure shipping for high-value electronics
                        and global tech supply chains.
                    </div>

                </div>

            </div>


            <!-- LAST CARD -->
            <div class="flex justify-center mt-20">

                <div class="industry-card w-[380px] group">

                    <div class="industry-title">
                        AVIATION & AEROSPACE
                    </div>

                    <div class="industry-popup">
                        Precision logistics solutions for aircraft
                        parts, aerospace cargo and global transport.
                    </div>

                </div>

            </div>

        </div>

    </section>

<style>
    .industry-card{
        position:relative;
        background:#0f1620;
        border:1px solid #1d2a3a;
        padding:40px 25px;
        border-radius:12px;
        cursor:pointer;
        overflow:hidden;

        transition:all .35s ease;
    }

    .industry-card:hover{
        border-color:#3b82f6;
        transform:translateY(-6px);
        box-shadow:0 15px 40px rgba(59,130,246,.15);
    }

    .industry-title{
        color:white;
        font-weight:600;
        letter-spacing:.05em;
    }

    /* popup */

    .industry-popup{
        position:absolute;
        bottom:0;
        left:0;
        width:100%;
        padding:20px;

        background:linear-gradient(to top,#0b0f14,#0b0f14cc);

        color:#cbd5e1;
        font-size:14px;
        line-height:1.6;

        transform:translateY(100%);
        transition:.4s ease;
    }

    .industry-card:hover .industry-popup{
        transform:translateY(0);
    }

</style> --}}


<section class="bg-gray-50 py-28">

    <div class="max-w-[1400px] mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-black text-4xl md:text-5xl font-bold tracking-wide">
                OUR SERVICES
            </h2>

            <div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                We deliver reliable logistics solutions across the globe with
                advanced transportation networks and supply chain expertise.
            </p>

        </div>


        <!-- SERVICES GRID -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- SERVICE -->
            <a href="/services/ocean-freight">
            <div class="group relative rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                <img src="{{ asset('c1.webp') }}"
                class="w-full h-[260px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6">

                    <h3 class="text-white text-xl font-semibold mb-2">
                        Ocean Freight
                    </h3>

                    <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500">
                        Reliable global ocean shipping solutions with secure
                        cargo handling and optimized transit routes.
                    </p>

                </div>

            </div>
            </a>


            <!-- SERVICE -->
            <a href="/services/air-freight">
            <div class="group relative rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                <img src="{{ asset('c2.webp') }}"
                class="w-full h-[260px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6">

                    <h3 class="text-white text-xl font-semibold mb-2">
                        Air Freight
                    </h3>

                    <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500">
                        Fast and secure air transportation services ensuring
                        timely delivery across international destinations.
                    </p>

                </div>

            </div>
            </a>


            <!-- SERVICE -->
            <a href="/services/road-freight">
            <div class="group relative rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                <img src="{{ asset('c3.webp') }}"
                class="w-full h-[260px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6">

                    <h3 class="text-white text-xl font-semibold mb-2">
                        Road Transport
                    </h3>

                    <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500">
                        Efficient road logistics solutions providing flexible
                        and cost-effective transportation services.
                    </p>

                </div>

            </div>
            </a>


            <!-- SERVICE -->
            <a href="/services/rail-freight">
            <div class="group relative rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500">

                <img src="{{ asset('c5.webp') }}"
                class="w-full h-[260px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6">

                    <h3 class="text-white text-xl font-semibold mb-2">
                        Rail Freight
                    </h3>

                    <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500">
                        Sustainable and high-capacity rail freight solutions
                        connecting major industrial hubs.
                    </p>

                </div>

            </div>
            </a>

        </div>

    </div>

</section>

<section class="bg-white py-28">

    <div class="max-w-[1500px] mx-auto px-10">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-black  text-4xl md:text-5xl font-bold tracking-wide">
                OUR PORTFOLIO
            </h2>

            <div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

            <p class="text-gray-600 mt-6 max-w-2xl mx-auto">
                Our logistics portfolio reflects years of experience delivering
                reliable transportation, supply chain optimization and global freight solutions.
            </p>

        </div>


        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">

            <!-- CARD -->
            <div class="portfolio-card group">
                <img src="{{ asset('p1.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Transportation Management</h3>
                    <p>FTL, LTL, Intermodal and specialty freight shipping worldwide.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('a3.jpg') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Supply Chain Analysis</h3>
                    <p>Strategic logistics planning and route optimization.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p2.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Freight Forwarding</h3>
                    <p>Efficient air and ocean freight services globally.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p3.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Project Shipments</h3>
                    <p>Large scale cargo logistics handled by experts.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p4.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Special Equipment</h3>
                    <p>Transport solutions for heavy machinery and equipment.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p5.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Warehousing & Distribution</h3>
                    <p>1M+ sq.ft of commercial storage facilities.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('a2.jpg') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Custom Clearance</h3>
                    <p>Government licensed customs brokerage services.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p6.png') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Final Mile</h3>
                    <p>Last mile delivery including white glove services.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('p7.jpg') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Third Party Logistics</h3>
                    <p>Complete 3PL procurement and distribution solutions.</p>
                </div>
            </div>


            <div class="portfolio-card group">
                <img src="{{ asset('a5.jpg') }}" class="portfolio-img">

                <div class="portfolio-overlay">
                    <h3>Special Cargo Handling</h3>
                    <p>Handling fragile, dangerous and perishable cargo.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<style>
   .portfolio-card{
        position:relative;
        overflow:hidden;
        border-radius:12px;
        border:1px solid #1d2a3a;
        transition:all .4s ease;
    }

    .portfolio-card:hover{
        border-color:#3b82f6;

        box-shadow:
            0 10px 30px rgba(59,130,246,0.25),
            0 0 20px rgba(59,130,246,0.2);
    }

    .portfolio-img{
        width:100%;
        height:260px;
        object-fit:cover;
        transition:transform .6s ease;
    }

    .portfolio-card:hover .portfolio-img{
        transform:scale(1.1);
    }

    .portfolio-overlay{
        position:absolute;
        inset:0;

        background:linear-gradient(
            to top,
            #0b0f14 0%,
            rgba(11,15,20,0.85) 40%,
            transparent 100%
        );

        padding:25px;
        display:flex;
        flex-direction:column;
        justify-content:flex-end;

        transform:translateY(60%);
        transition:.5s ease;
    }

    .portfolio-card:hover .portfolio-overlay{
        transform:translateY(0);
    }

    .portfolio-overlay h3{
        color:white;
        font-size:18px;
        font-weight:600;
    }

    .portfolio-overlay p{
        color:#cbd5e1;
        font-size:14px;
        margin-top:6px;
    }
</style>

   <section class="mx-auto px-4 sm:px-6 lg:px-16 mb-14">

<div class="relative bg-gradient-to-r from-[#eef6ff] via-[#dbeafe] to-[#eef6ff] rounded-xl shadow-xl border border-blue-500/30 py-12 sm:py-14">

    <!-- TOP TITLE -->
    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-blue-500 rounded-full px-4 py-1">
        <h3 class="text-xs sm:text-sm text-slate-200 font-medium whitespace-nowrap">
        <span class="text-white font-semibold">Our Global Partners & Networks</span>
        </h3>
    </div>

    <!-- SLIDER AREA -->
    <!-- SLIDER AREA -->
    <div class="flex items-center justify-between px-2 sm:px-6 lg:px-10">

        <!-- LEFT BUTTON -->
        <button id="slideLeft" class="hidden sm:flex w-8 h-8 rounded-full border-2 border-[#0d2a4a] hover:shadow items-center justify-center text-[#0d2a4a] hover:text-blue-400">
        <i class="fa-solid fa-chevron-left text-xs"></i>
        </button>

        <!-- LOGOS -->
        <div id="logoSlider" class="flex items-center flex-1 px-2 sm:px-6 gap-8 overflow-x-auto scroll-smooth no-scrollbar">

            <div class="min-w-[120px] flex justify-center">
            <img src="https://www.wcaworld.com/Assets/images/logo_wcaworld.png" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="{{asset('jc.png')}}" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://freightmidpoint.com/public/img/logo/FreightMidpoint(FM)_logo.webp" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://www.glafamily.com/images/logo.webp" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://mgln.net/_next/static/media/logo.371c7488.png" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://framerusercontent.com/images/q0vfMRT0gvqIXSAMlXaHrxtahg.png" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://s29.q4cdn.com/562286712/files/design/logo/Largo-Logo-RGB-Reverse.png" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://www.interconnex.world/images/logo.svg" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://bifa.org/wp-content/uploads/2023/03/BIFA-Logo-1.svg" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://res.cloudinary.com/lcci/image/upload/c_fill,g_auto,w_256/f_auto/q_auto/dpr_1.5/v1/placeholder-2/header-logo?_a=ATO2BAA0" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://i.abcc.com/i/0e/0e14bd4969ab305db5b514a64b74d185.svg%2Bxml" class="h-8 w-auto">
            </div>

            <div class="min-w-[120px] flex justify-center">
            <img src="https://b2838811.smushcdn.com/2838811/wp-content/uploads/2022/11/wllc-logo-300x120.jpg?lossy=1&strip=1&webp=1" class="h-8 w-auto">
            </div>

        </div>

        <!-- RIGHT BUTTON -->
        <button id="slideRight" class="hidden sm:flex w-8 h-8 rounded-full border-2 border-[#0d2a4a] hover:shadow items-center justify-center text-[#0d2a4a] hover:text-blue-400">
        <i class="fa-solid fa-chevron-right text-xs"></i>
        </button>

    </div>
    <style>
        .no-scrollbar::-webkit-scrollbar {
        display: none;
        }
        .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
        }
    </style>
    <script>

        const slider = document.getElementById('logoSlider');
        const leftBtn = document.getElementById('slideLeft');
        const rightBtn = document.getElementById('slideRight');

        const scrollAmount = 300;

        rightBtn.addEventListener('click', () => {
        slider.scrollBy({
        left: scrollAmount,
        behavior: "smooth"
        });
        });

        leftBtn.addEventListener('click', () => {
        slider.scrollBy({
        left: -scrollAmount,
        behavior: "smooth"
        });
        });

    </script>


    <!-- BOTTOM FEATURES -->
    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] rounded-full px-4 sm:px-6 py-2 max-w-[95%] overflow-x-auto">

        <div class="flex items-center gap-5 sm:gap-8 text-[10px] sm:text-xs text-white whitespace-nowrap">

            <div class="flex items-center gap-2">
            <i class="fa-solid fa-truck-fast text-blue-500"></i>
            Fast & Secure Delivery
            </div>

            <div class="flex items-center gap-2">
            <i class="fa-solid fa-location-dot text-blue-500"></i>
            Real-Time Tracking
            </div>

            <div class="flex items-center gap-2">
            <i class="fa-solid fa-people-group text-blue-500"></i>
            Expert Logistics Team
            </div>

            <div class="flex items-center gap-2">
            <i class="fa-solid fa-headset text-blue-500"></i>
            24/7 Customer Support
            </div>

        </div>

    </div>

</div>

</section>

<!-- AUTO OPEN REQUEST POPUP -->
<div id="autoPopup" class="quote-modal">
    <div class="quote-modal-overlay"></div>
    <div class="quote-modal-content">

        <button class="close-popup" id="closeAutoPopup" aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>

        <div class="modal-header">
            <div class="modal-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                    <polyline points="9,22 9,12 15,12 15,22"/>
                </svg>
            </div>
            <div>
                <h3 class="modal-title">Request For Call Back</h3>
                <p class="modal-subtitle">Fill in your details and we'll get back to you shortly</p>
            </div>
        </div>

        <form method="POST" action="{{ route('contact.send.mail') }}" class="booking-form">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label>Full Name</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                        <input type="text" name="name" placeholder="John Doe" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <input type="email" name="email" placeholder="john@example.com" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <div class="input-wrapper">
                    <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    <input type="tel" name="phone" placeholder="+1 (555) 000-0000" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Source Location</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                        </svg>
                        <input type="text" name="source" placeholder="City, Country" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Destination</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                        <input type="text" name="destination" placeholder="City, Country" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Message <span class="optional">(Optional)</span></label>
                <div class="input-wrapper">
                    <svg class="input-icon textarea-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                    </svg>
                    <textarea name="message" rows="3" placeholder="Any special requirements or notes..."></textarea>
                </div>
            </div>

            <button type="submit" class="send-btn">
                <span>Submit Booking Request</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22,2 15,22 11,13 2,9"/>
                </svg>
            </button>
        </form>

    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap');

    .quote-modal {
        position: fixed;
        inset: 0;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99999;
        font-family: 'Sora', sans-serif;
        padding: 16px;
    }

    .quote-modal.active {
        display: flex;
    }

    .quote-modal-overlay {
        position: absolute;
        inset: 0;
        background: rgba(7, 25, 55, 0.75);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
    }

    .quote-modal-content {
        background: #ffffff;
        border-radius: 20px;
        width: 580px;
        max-width: 100%;
        position: relative;
        z-index: 1;
        box-shadow:
            0 0 0 1px rgba(30, 90, 200, 0.08),
            0 24px 60px rgba(7, 25, 55, 0.22),
            0 8px 24px rgba(7, 25, 55, 0.12);
        
        animation: modalSlideIn 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes modalSlideIn {
        from { opacity: 0; transform: translateY(24px) scale(0.96); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* Header */
    .modal-header {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 28px 30px 24px;
        border-radius: 10px;
        background: linear-gradient(135deg, #0f3877 0%, #1a5dbe 60%, #2176d9 100%);
        position: relative;
        overflow: hidden;
    }

    .modal-header::before {
        content: '';
        position: absolute;
        top: -40px; right: -40px;
        width: 160px; height: 160px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
    }

    .modal-header::after {
        content: '';
        position: absolute;
        bottom: -60px; left: 30%;
        width: 200px; height: 200px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
    }

    .modal-icon {
        width: 48px; height: 48px;
        border-radius: 12px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
        backdrop-filter: blur(4px);
    }

    .modal-title {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 3px;
        letter-spacing: -0.3px;
    }

    .modal-subtitle {
        font-size: 13px;
        color: rgba(255,255,255,0.72);
        margin: 0;
        font-weight: 400;
    }

    /* Close button */
    .close-popup {
        position: absolute;
        top: 18px; right: 18px;
        width: 32px; height: 32px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.2);
        background: rgba(255, 255, 255, 0.12);
        color: rgba(11, 10, 10, 0.85);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: all 0.2s ease;
        backdrop-filter: blur(4px);
    }

    .close-popup:hover {
        background: rgba(255,255,255,0.25);
        color: white;
        transform: scale(1.05);
    }

    /* Form body */
    .booking-form {
        padding: 26px 30px 28px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        font-size: 12.5px;
        font-weight: 600;
        color: #1e3a5f;
        margin-bottom: 7px;
        letter-spacing: 0.2px;
        text-transform: uppercase;
    }

    .optional {
        font-weight: 400;
        color: #94a3b8;
        text-transform: none;
        font-size: 11px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #3b82f6;
        pointer-events: none;
        z-index: 1;
    }

    .textarea-icon {
        top: 14px;
        transform: none;
    }

    .booking-form input,
    .booking-form textarea {
        width: 100%;
        padding: 11px 14px 11px 40px;
        border-radius: 10px;
        border: 1.5px solid #e2eaf4;
        background: #f7faff;
        color: #1e3a5f;
        font-family: 'Sora', sans-serif;
        font-size: 14px;
        font-weight: 400;
        transition: all 0.2s ease;
        box-sizing: border-box;
        outline: none;
    }

    .booking-form input::placeholder,
    .booking-form textarea::placeholder {
        color: #9db3cc;
        font-weight: 300;
    }

    .booking-form input:focus,
    .booking-form textarea:focus {
        border-color: #2176d9;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(33, 118, 217, 0.1);
    }

    .booking-form textarea {
        resize: none;
        min-height: 88px;
    }

    /* Submit button */
    .send-btn {
        width: 100%;
        padding: 14px 24px;
        border-radius: 12px;
        border: none;
        background: linear-gradient(135deg, #0f3877 0%, #1a5dbe 50%, #2176d9 100%);
        color: white;
        font-family: 'Sora', sans-serif;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        letter-spacing: 0.1px;
        transition: all 0.25s ease;
        margin-top: 4px;
        position: relative;
        overflow: hidden;
    }

    .send-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0));
        opacity: 0;
        transition: opacity 0.25s ease;
    }

    .send-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(21, 78, 193, 0.4);
    }

    .send-btn:hover::before {
        opacity: 1;
    }

    .send-btn:active {
        transform: translateY(0);
        box-shadow: 0 4px 12px rgba(21, 78, 193, 0.3);
    }

    /* Responsive */
    @media (max-width: 500px) {
        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .modal-header {
            padding: 22px 20px 20px;
        }

        .booking-form {
            padding: 20px 20px 24px;
        }
    }
</style>

<a
 href="https://wa.me/447950234842?text=Hello%20I%20want%20to%20enquire"

  target="_blank"
  class="whatsapp-float"
>
  <i class="fab fa-whatsapp"></i>
</a>

<style>
    <style>
  .whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    z-index: 1000;
    transition: 0.3s ease;
  }

  .whatsapp-float:hover {
    background-color: #20ba5a;
    transform: scale(1.1);
  }
</style>
</style>

<script>

document.addEventListener("DOMContentLoaded", function(){

    const popup = document.getElementById("autoPopup");
    const closeBtn = document.getElementById("closeAutoPopup");

    // show popup after page load
    setTimeout(function(){
        popup.style.display = "flex";
    }, 1000);

    // close button
    closeBtn.addEventListener("click", function(){
        popup.style.display = "none";
    });

    // close outside click
    window.addEventListener("click", function(e){
        if(e.target === popup){
            popup.style.display = "none";
        }
    });

});

</script>

@endsection