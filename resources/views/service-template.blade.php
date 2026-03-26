@extends('layouts.app')

@section('content')

<section class="bg-white text-black">

<!-- HERO -->
<div class="py-28  border-b border-blue-900/30">

    <div class="max-w-6xl mx-auto px-6">

        <h1 class="text-5xl text-center font-bold mb-6" data-aos="fade-up">
            {{ $service['title'] }}
        </h1>

        <p class="text-gray-600 text-base items-start mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{ $service['description'] }}
        </p>

    </div>

</div>


<!-- SERVICE DETAILS -->
<div class="max-w-7xl mx-auto px-6 py-24 grid lg:grid-cols-2 gap-16 items-center">

    <img
        src="{{ asset($service['image']) }}"
        class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
        data-aos="fade-right"
    >

    <div data-aos="fade-left">

        <h2 class="text-3xl font-bold mb-6">
            Why Choose Our {{ $service['title'] }}?
        </h2>

        <h3 class="text-2xl font-semibold mb-6">{{ $service['heading'] }}</h3>
        <ul class="space-y-3 text-gray-600">

             @foreach($service['services'] as $item)
                <li class="flex gap-3">
                    <i class="fa-solid fa-check text-blue-400"></i>
                      {{ $item }}
                </li>

            @endforeach

        </ul>

    </div>

</div>

@if($slug === 'ocean-freight')
<section class="mt-10 pb-10 px-6">
    <div class="max-w-7xl mx-auto">

        

        <!-- Paragraphs -->
        <p class="text-gray-600 leading-relaxed mb-5">
            <strong>Globetrotters</strong> is a trusted global logistics partner and a licensed Ocean Transportation Intermediary (OTI), offering reliable and cost-effective ocean freight solutions worldwide. We specialize in freight forwarding and cargo consolidation, ensuring smooth and efficient shipping across international markets.
        </p>

        <p class="text-gray-600 leading-relaxed mb-5">
            Our ocean freight services include Full Container Load (FCL) and Less than Container Load (LCL), designed to suit shipments of all sizes. With a strong global carrier network, we ensure timely delivery, optimized routes, and competitive pricing.
        </p>

        <p class="text-gray-600 leading-relaxed mb-8">
            From documentation and customs clearance to shipment tracking and final delivery, our experienced team manages every step of the logistics process, giving you complete transparency and peace of mind.
        </p>

        <!-- Services List -->
        <div>
            <h3 class="text-xl md:text-2xl font-semibold text-[#2c5b63] mb-4">
                Our Ocean Freight Services Include:
            </h3>

            <ul class="grid sm:grid-cols-2 gap-4">
                <li class="flex items-start gap-3 text-[#2c5b63]">
                    <span class="text-teal-500 mt-1">✔</span>
                    Full Container Load (FCL)
                </li>

                <li class="flex items-start gap-3 text-[#2c5b63]">
                    <span class="text-teal-500 mt-1">✔</span>
                    Less than Container Load (LCL)
                </li>

                <li class="flex items-start gap-3 text-[#2c5b63]">
                    <span class="text-teal-500 mt-1">✔</span>
                    Cargo Consolidation
                </li>

                <li class="flex items-start gap-3 text-[#2c5b63]">
                    <span class="text-teal-500 mt-1">✔</span>
                    Customs Clearance & Documentation
                </li>

                <li class="flex items-start gap-3 text-[#2c5b63]">
                    <span class="text-teal-500 mt-1">✔</span>
                    End-to-End Logistics Management
                </li>
            </ul>
        </div>

    </div>
</section>
@endif



<div class="max-w-7xl mx-auto px-6 border border-gray-200 rounded-xl py-10 mt-10">

<ul class="grid md:grid-cols-2 gap-4 text-gray-600 text-lg leading-relaxed">

@foreach($service['description2'] as $point)

<li class="flex gap-3">
<i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
{{ $point }}
</li>

@endforeach

</ul>

</div>




</section>

@endsection