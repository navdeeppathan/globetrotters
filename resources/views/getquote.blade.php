@extends('layouts.app')

@section('content')

   


<section class="bg-[#000000] py-28 px-10 relative overflow-hidden mt-10">

    <!-- background glow -->
    <div class="absolute w-[400px] h-[400px] bg-blue-600/10 blur-[120px] -top-40 -left-40"></div>
    <div class="absolute w-[400px] h-[400px] bg-blue-500/10 blur-[120px] bottom-0 right-0"></div>


    <div class="max-w-[1500px] mx-auto px-10 grid lg:grid-cols-2 gap-20 items-start relative z-10">

        <!-- LEFT CONTACT INFO -->
        <div class="text-white">

            <h2 class="text-4xl font-bold tracking-wide">
            CONTACT US
            </h2>

            <div class="w-24 h-[3px] bg-blue-500 mt-6 mb-10"></div>

            <p class="text-gray-400 mb-12 max-w-lg">
            Our logistics specialists are ready to assist you with global
            transportation, freight forwarding and supply chain solutions.
            Contact us today for reliable logistics support.
            </p>

            <div class="space-y-8">

                <!-- phone -->
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 group-hover:scale-110 transition">
                    <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>
                    <p class="text-gray-400 text-sm">Phone</p>
                    <p class="text-white">+44 (0) 20 8432 2983</p>
                    </div>
                </div>


                <!-- website -->
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 group-hover:scale-110 transition">
                    <i class="fa-solid fa-globe"></i>
                    </div>

                    <div>
                        <p class="text-gray-400 text-sm">Website</p>
                        <a href="#" class="text-white hover:text-blue-400 transition">
                        www.globetrottersltd.com
                        </a>
                    </div>
                </div>


                <!-- email -->
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 group-hover:scale-110 transition">
                    <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                    <p class="text-gray-400 text-sm">Email</p>
                    <p class="text-white">info@globetrottersltd.com</p>
                    </div>
                </div>


                <!-- address -->
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 group-hover:scale-110 transition">
                    <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <p class="text-gray-400 text-sm">Office Address</p>
                        <p class="text-white">
                        Vista Business Centre,<br>
                        50 Salisbury Road, Hounslow<br>
                        Middlesex TW4 6JQ, UK
                        </p>
                    </div>
                </div>

            </div>

        </div>



        <!-- RIGHT CONTACT FORM -->
        <div class="bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 shadow-lg">

            <h3 class="text-white text-2xl font-semibold mb-8">
            Send Us a Message
            </h3>

            <form class="space-y-6">

                <input type="text"
                placeholder="Your Name"
                class="w-full bg-[#000000] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none">

                <input type="email"
                placeholder="Email Address"
                class="w-full bg-[#000000] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none">

                <input type="text"
                placeholder="Subject"
                class="w-full bg-[#000000] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none">

                <textarea rows="5"
                placeholder="Your Message"
                class="w-full bg-[#000000] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none"></textarea>

                <button
                class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 rounded-lg transition shadow-[0_10px_30px_rgba(59,130,246,0.25)]">
                Send Message
                </button>

            </form>

        </div>

    </div>



    <!-- GOOGLE MAP -->
    <div class="max-w-[1500px] mx-auto px-10 mt-24">

        <div class="rounded-xl overflow-hidden border border-[#1d2a3a]">

            <iframe
            class="w-full h-[400px]"
            src="https://maps.google.com/maps?q=Hounslow%20UK&t=&z=13&ie=UTF8&iwloc=&output=embed">
            </iframe>

        </div>

    </div>



    <!-- NETWORK PARTNERS -->
    <div class="max-w-[1500px] mx-auto px-10 mt-24">

        <h3 class="text-white text-3xl font-bold mb-6">
        OUR NETWORK PARTNERS
        </h3>

        <div class="w-20 h-[3px] bg-blue-500 mb-12"></div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-16 items-center">

            <img src="{{ asset('a7.jpg') }}" class="h-16 object-contain opacity-70 hover:opacity-100 transition">

            <img src="{{ asset('a8.jpg') }}" class="h-16 object-contain opacity-70 hover:opacity-100 transition">

            <img src="{{ asset('a9.jpg') }}" class="h-16 object-contain opacity-70 hover:opacity-100 transition">

            <img src="{{ asset('a10.jpg') }}" class="h-16 object-contain opacity-70 hover:opacity-100 transition">

        </div>

    </div>


</section>


 <section class="bg-[#000000] py-28">

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

    </style>

@endsection