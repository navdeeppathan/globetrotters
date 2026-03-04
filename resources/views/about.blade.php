@extends('layouts.app')

@section('content')

<section class="relative bg-[#000000] py-28 px-6 lg:px-16 overflow-hidden mt-10">

<!-- blue glow background -->
    <div class="absolute w-[500px] h-[500px] bg-blue-600/10 blur-[120px] -top-40 -left-40"></div>
    <div class="absolute w-[400px] h-[400px] bg-blue-500/10 blur-[120px] bottom-0 right-0"></div>

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16  relative z-10">

    <!-- IMAGES -->
    <div class="space-y-10">

        <div class="overflow-hidden rounded-xl border border-[#1d2a3a] shadow-xl group">
            <img src="{{ asset('a1.jpg') }}" class="w-full transform group-hover:scale-110 transition duration-700">
        </div>

        <div class="overflow-hidden rounded-xl border border-[#1d2a3a] shadow-xl group">
            <img src="{{ asset('a2.jpg') }}" class="w-full transform group-hover:scale-110 transition duration-700">
        </div>

    </div>


    <!-- CONTENT -->
    <div class="text-white">

        <h2 class="text-4xl md:text-5xl font-bold mb-4">
        ABOUT GLOBETROTTERS
        </h2>

        <div class="w-24 h-[3px] bg-blue-500 mb-8"></div>

            <p class="text-gray-400 leading-relaxed mb-6">
            Globetrotters (GB) Ltd is an independent freight forwarding company
            based in London delivering professional logistics services across
            international markets. Our company specializes in Ocean Freight,
            Air Freight, Customs Clearance, Warehousing and global supply chain
            management.
            </p>

            <p class="text-gray-400 leading-relaxed">
            With years of experience and strong global partnerships we provide
            customized logistics solutions that help businesses move goods
            efficiently, securely and cost effectively.
            </p>

        </div>

    </div>

</section>

<section class="bg-[#000000] py-24">

<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 text-center">

<div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 hover:border-blue-500 transition hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]">
<h3 class="text-blue-500 text-4xl font-bold mb-2">110+</h3>
<p class="text-gray-400">Countries Covered</p>
</div>

<div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 hover:border-blue-500 transition hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]">
<h3 class="text-blue-500 text-4xl font-bold mb-2">30+</h3>
<p class="text-gray-400">Years Experience</p>
</div>

<div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 hover:border-blue-500 transition hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]">
<h3 class="text-blue-500 text-4xl font-bold mb-2">5000+</h3>
<p class="text-gray-400">Successful Shipments</p>
</div>

<div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 hover:border-blue-500 transition hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]">
<h3 class="text-blue-500 text-4xl font-bold mb-2">70+</h3>
<p class="text-gray-400">Warehousing Locations</p>
</div>

</div>

</section>


<section class="bg-[#000000] py-28">

<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-20">

<h2 class="text-white text-4xl font-bold">
WHY CHOOSE US
</h2>

<div class="w-20 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-3 gap-10">

<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl hover:border-blue-500 transition hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

<h3 class="text-white text-xl font-semibold mb-4">
Global Logistics Network
</h3>

<p class="text-gray-400">
Our international partnerships allow us to deliver efficient
transportation services across global trade routes.
</p>

</div>


<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl hover:border-blue-500 transition hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

<h3 class="text-white text-xl font-semibold mb-4">
Reliable Supply Chain
</h3>

<p class="text-gray-400">
We provide end-to-end supply chain management ensuring
safe and timely cargo delivery.
</p>

</div>


<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl hover:border-blue-500 transition hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

<h3 class="text-white text-xl font-semibold mb-4">
Advanced Logistics Technology
</h3>

<p class="text-gray-400">
We use modern tracking systems and logistics technologies
to improve transparency and operational efficiency.
</p>

</div>

</div>

</div>

</section>




<section class="bg-[#000000] py-32">

<div class="max-w-[1400px] mx-auto px-10">

    <!-- TITLE -->
    <div class="text-center mb-20">

        <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
            VALUE ADDED SERVICES
        </h2>

        <div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

        <p class="text-gray-400 mt-6 max-w-2xl mx-auto">
            Our logistics expertise goes beyond transportation by providing
            additional services that enhance efficiency and protect your cargo.
        </p>

    </div>


    <!-- SERVICES GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">


        <!-- CARD -->
        <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

            <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 text-2xl mb-6 group-hover:scale-110 transition">
                🚚
            </div>

            <h3 class="text-white text-lg font-semibold mb-3">
                Cargo Insurance
            </h3>

            <p class="text-gray-400 text-sm leading-relaxed">
                Comprehensive insurance coverage that protects shipments
                from potential risks during global transportation.
            </p>

        </div>



        <!-- CARD -->
        <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

            <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 text-2xl mb-6 group-hover:scale-110 transition">
                🏷️
            </div>

            <h3 class="text-white text-lg font-semibold mb-3">
                Tag & Labelling
            </h3>

            <p class="text-gray-400 text-sm leading-relaxed">
                Professional tagging, bagging, re-pricing and care
                labelling services for accurate product identification.
            </p>

        </div>



        <!-- CARD -->
        <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

            <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 text-2xl mb-6 group-hover:scale-110 transition">
                📦
            </div>

            <h3 class="text-white text-lg font-semibold mb-3">
                Repack & Relabelling
            </h3>

            <p class="text-gray-400 text-sm leading-relaxed">
                Efficient repackaging and relabelling to meet
                international shipping and compliance standards.
            </p>

        </div>



        <!-- CARD -->
        <div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-[0_10px_35px_rgba(59,130,246,0.25)]">

            <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400 text-2xl mb-6 group-hover:scale-110 transition">
                🔧
            </div>

            <h3 class="text-white text-lg font-semibold mb-3">
                Returns & Repairs
            </h3>

            <p class="text-gray-400 text-sm leading-relaxed">
                Organized reverse logistics handling product
                returns, rectification and repair services.
            </p>

        </div>


    </div>

</div>

</section>

<style>
    
    .reveal{
        opacity:0;
        transform: translateY(60px);
        transition: all 1s ease;
    }

    .reveal.active{
        opacity:1;
        transform: translateY(0);
    }

    

    /* orange corner */
    .corner-accent{
        position:absolute;
        bottom:0;
        right:0;

        width:0;
        height:0;

        border-left:90px solid transparent;
        border-top:90px solid #e59c47;
    }









ul li{
transition:0.3s;
}

ul li:hover{
color:#e19a49;
transform:translateX(6px);
}
</style>

<script>
const reveals = document.querySelectorAll(".reveal");

function revealOnScroll(){
    reveals.forEach(el=>{
        const windowHeight = window.innerHeight;
        const revealTop = el.getBoundingClientRect().top;
        const revealPoint = 120;

        if(revealTop < windowHeight - revealPoint){
            el.classList.add("active");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);
revealOnScroll();
</script>


@endsection