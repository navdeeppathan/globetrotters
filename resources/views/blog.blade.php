@extends('layouts.app')
@section('content')


<section class="bg-gray-50 py-28 mt-10">

<div class="max-w-7xl mx-auto px-6">

<!-- TITLE -->
<div class="text-center mb-20">

<h2 class="text-black text-4xl md:text-5xl font-bold">
LATEST BLOG
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

<p class="text-gray-400 mt-6 max-w-2xl mx-auto">
Insights and updates from the world of logistics, transportation
and global supply chain management.
</p>

</div>



<!-- BLOG GRID -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

    

    @foreach($blogs as $blog)
<a href="{{ route('blogs.show', $blog->slug) }}">
    <div class="group bg-gray-100 border border-gray-300 rounded-xl overflow-hidden
    transition duration-500 hover:-translate-y-3
    hover:border-blue-500
    hover:shadow-[0_15px_40px_rgba(59,130,246,0.25)]">

    <!-- IMAGE -->
    <div class="overflow-hidden">
    <img src="{{ asset('blogs/'.$blog->image) }}"
    class="w-full h-[220px] object-cover transition duration-700 group-hover:scale-110">
    </div>

    <!-- CONTENT -->
    <div class="p-6">

    <p class="text-blue-500 text-sm mb-2">
    {{ \Carbon\Carbon::parse($blog->published_at)->format('d F Y') }}
    </p>

    <h3 class="text-black text-xl font-semibold mb-3">
    {{ $blog->title }}
    </h3>

    <p class=" text-sm line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
    {!! $blog->short_description !!}
    </p>

    </div>

    </div>
    </a>

    @endforeach


    <!-- BLOG CARD -->
    {{-- <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl overflow-hidden
        transition duration-500 hover:-translate-y-3
        hover:border-blue-500
        hover:shadow-[0_15px_40px_rgba(59,130,246,0.25)]">

        <!-- IMAGE -->
        <div class="overflow-hidden">
            <img src="{{ asset('a1.jpg') }}" class="w-full h-[220px] object-cover transition duration-700 group-hover:scale-110">
        </div>


        <!-- CONTENT -->
        <div class="p-6">

            <p class="text-blue-400 text-sm mb-2">
            12 March 2026
            </p>

            <h3 class="text-white text-xl font-semibold mb-3">
            How Technology is Transforming Logistics
            </h3>

            <p class="text-gray-400 text-sm line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
            Technology is playing a major role in transforming global logistics.
            From AI-driven route planning to automated warehouses and smart
            tracking systems, modern logistics companies are improving
            efficiency, transparency and delivery speed like never before.
            </p>

        </div>

    </div> --}}



    <!-- BLOG CARD -->
    {{-- <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl overflow-hidden
    transition duration-500 hover:-translate-y-3
    hover:border-blue-500
    hover:shadow-[0_15px_40px_rgba(59,130,246,0.25)]">

    <div class="overflow-hidden">
    <img src="{{ asset('a2.jpg') }}"
    class="w-full h-[220px] object-cover transition duration-700 group-hover:scale-110">
    </div>

    <div class="p-6">

    <p class="text-blue-400 text-sm mb-2">
    05 March 2026
    </p>

    <h3 class="text-white text-xl font-semibold mb-3">
    Managing Global Supply Chain Risks
    </h3>

    <p class="text-gray-400 text-sm line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
    Global supply chains are facing increasing challenges due to
    market volatility, rising fuel costs and regulatory complexities.
    Effective planning and strong logistics networks help businesses
    maintain stability and reduce operational risks.
    </p>

    </div>

    </div> --}}



    <!-- BLOG CARD -->
    {{-- <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl overflow-hidden
    transition duration-500 hover:-translate-y-3
    hover:border-blue-500
    hover:shadow-[0_15px_40px_rgba(59,130,246,0.25)]">

    <div class="overflow-hidden">
    <img src="{{ asset('a3.jpg') }}"
    class="w-full h-[220px] object-cover transition duration-700 group-hover:scale-110">
    </div>

    <div class="p-6">

    <p class="text-blue-400 text-sm mb-2">
    20 February 2026
    </p>

    <h3 class="text-white text-xl font-semibold mb-3">
    Future of Sustainable Logistics
    </h3>

    <p class="text-gray-400 text-sm line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
    Sustainable logistics is becoming a key focus for global businesses.
    Companies are investing in green transportation, electric fleets and
    optimized shipping routes to reduce carbon emissions while maintaining
    efficient logistics operations.
    </p>

    </div>

    </div> --}}

</div>

</div>

</section>
@endsection