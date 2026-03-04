@extends('layouts.app')

@section('content')

<section class="bg-[#0b0f14] py-28 relative overflow-hidden mt-10">

    <div class="max-w-[1500px] mx-auto px-10 grid lg:grid-cols-2 gap-20 items-center">

        <!-- LEFT IMAGE AREA -->
        <div class="relative flex justify-center">

            <!-- orange background shape -->
            <div class="absolute top-0 left-1/3 w-[180px] h-[380px] bg-[#e19a49]"></div>

            <!-- monitor image -->
            <img src="{{ asset('a6.jpg') }}"
                class="relative z-10 w-[520px]">

        </div>


        <!-- RIGHT CONTACT -->
        <div class="text-white">

            <h2 class="text-4xl font-bold tracking-wide">
                CONTACT US
            </h2>

            <div class="w-24 h-[3px] bg-[#e19a49] mt-6 mb-10"></div>


            <div class="space-y-8 text-[16px]">

                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-phone text-[#e19a49] text-lg"></i>
                    <span>+44 (0) 20 8432 2983</span>
                </div>

                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-globe text-[#e19a49] text-lg"></i>
                    <a href="#" class="underline">www.globetrottersltd.com</a>
                </div>

                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-envelope text-[#e19a49] text-lg"></i>
                    <span>info@globetrottersltd.com</span>
                </div>

                <div class="flex items-start gap-4">
                    <i class="fa-solid fa-location-dot text-[#e19a49] text-lg mt-1"></i>
                    <span>
                        Vista Business Centre,<br>
                        50 Salisbury Road, Hounslow<br>
                        Middlesex TW4 6JQ, UK
                    </span>
                </div>

            </div>

        </div>

    </div>


    <!-- NETWORK PARTNERS -->
    <div class="max-w-[1500px] mx-auto px-10 mt-24">

        <h3 class="text-white text-3xl font-bold mb-10">
            OUR NETWORK PARTNERS
        </h3>

        <div class="w-20 h-[3px] bg-[#e19a49] mb-12"></div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-16 items-center">

            <img src="{{ asset('a7.jpg') }}" class="h-16 object-contain">

            <img src="{{ asset('a8.jpg') }}" class="h-16 object-contain">

            <img src="{{ asset('a9.jpg') }}" class="h-16 object-contain">

            <img src="{{ asset('a10.jpg') }}" class="h-16 object-contain">

        </div>

    </div>


    {{-- <!-- orange corner -->
    <div class="absolute bottom-0 right-0 w-0 h-0
    border-l-[120px] border-l-transparent
    border-t-[120px] border-t-[#e19a49]">
    </div> --}}

</section>

@endsection