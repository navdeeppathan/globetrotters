@extends('layouts.app')

@section('content')

<!-- HERO -->

<section class="relative bg-white py-36 overflow-hidden mt-10">

<div class="absolute inset-0 ">
<img src="{{ asset('p4.png') }}" class="w-full h-full object-fill scale-110 animate-slowZoom">
</div>

<div class="absolute w-[500px] h-[500px] bg-blue-600/20 blur-[150px] -top-40 -left-40"></div>
<div class="absolute w-[500px] h-[500px] bg-blue-600/20 blur-[150px] bottom-0 right-0"></div>

<div class="relative z-10 text-center max-w-5xl mx-auto px-6">

<h1 class="text-white text-4xl md:text-6xl font-bold mb-6 reveal">
ABOUT GLOBETROTTERS
</h1>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mb-8 reveal"></div>

<p class="text-gray-300 text-lg max-w-3xl mx-auto reveal">
Professional global logistics solutions delivering efficient
transportation, reliable supply chain management, and
seamless cargo movement worldwide.
</p>

</div>

</section>



<!-- ABOUT SECTION -->

<section class="bg-white py-28 px-6 lg:px-16">

<div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">

<div class="relative reveal">

<img src="{{ asset('a1.jpg') }}" class="rounded-xl shadow-2xl">



</div>



<div class="text-black reveal">

<h2 class="text-4xl font-bold mb-6">
Who We Are
</h2>

<p class="text-gray-600 mb-6 leading-relaxed">
Globetrotters (GB) Ltd is an independent freight forwarding company
based in London delivering professional logistics services across
international markets including ocean freight, air freight,
customs clearance, warehousing and supply chain management.
</p>

<p class="text-gray-600 mb-6 leading-relaxed">
With strong global partnerships and years of experience we deliver
customized logistics solutions that help businesses move cargo
efficiently, securely and cost effectively.
</p>

<p class="text-gray-600 leading-relaxed">
Our experienced team manages the complete transportation process
from cargo planning and documentation to final delivery ensuring
smooth international trade operations.
</p>

</div>

</div>

</section>



<!-- STATS -->

<section class="bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] py-24">

<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 text-center">

<div class="stat-card reveal">
<h3 class="counter text-blue-500 text-5xl font-bold" data-target="110">0</h3>
<p class="text-gray-400 mt-3">Countries Covered</p>
</div>

<div class="stat-card reveal">
<h3 class="counter text-blue-500 text-5xl font-bold" data-target="30">0</h3>
<p class="text-gray-400 mt-3">Years Experience</p>
</div>

<div class="stat-card reveal">
<h3 class="counter text-blue-500 text-5xl font-bold" data-target="5000">0</h3>
<p class="text-gray-400 mt-3">Successful Shipments</p>
</div>

<div class="stat-card reveal">
<h3 class="counter text-blue-500 text-5xl font-bold" data-target="70">0</h3>
<p class="text-gray-400 mt-3">Warehousing Locations</p>
</div>

</div>

</section>



<!-- WHY CHOOSE US -->

<section class="bg-white py-28">

<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-20 reveal">

<h2 class="text-black text-4xl font-bold">
WHY CHOOSE US
</h2>

<div class="w-20 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-3 gap-10">

<div class="feature-card bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] reveal">

<h3 class="text-white text-xl mb-4 font-semibold">
Global Logistics Network
</h3>

<p class="text-gray-400">
Strong international partnerships ensure efficient transportation
across global trade routes.
</p>

</div>



<div class="feature-card bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] reveal">

<h3 class="text-white text-xl mb-4 font-semibold">
Reliable Supply Chain
</h3>

<p class="text-gray-400">
End-to-end logistics management ensuring safe
and timely cargo delivery.
</p>

</div>



<div class="feature-card bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] reveal">

<h3 class="text-white text-xl mb-4 font-semibold">
Advanced Technology
</h3>

<p class="text-gray-400">
Real-time tracking and modern logistics systems
increase transparency and efficiency.
</p>

</div>

</div>

</div>

</section>



<!-- SERVICES -->

<section class="bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] py-28">

<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-20 reveal">

<h2 class="text-white text-4xl font-bold">
VALUE ADDED SERVICES
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

<div class="service-card reveal">
<div class="icon">🚚</div>
<h3>Cargo Insurance</h3>
<p>Comprehensive protection for cargo shipments worldwide.</p>
</div>

<div class="service-card reveal">
<div class="icon">🏷️</div>
<h3>Tag & Labelling</h3>
<p>Professional tagging and product identification services.</p>
</div>

<div class="service-card reveal">
<div class="icon">📦</div>
<h3>Repack & Relabelling</h3>
<p>Efficient repackaging for global shipping compliance.</p>
</div>

<div class="service-card reveal">
<div class="icon">🔧</div>
<h3>Returns & Repairs</h3>
<p>Organized reverse logistics and repair services.</p>
</div>

</div>

</div>

</section>



<style>

/* slow hero zoom */

@keyframes slowZoom{
0%{transform:scale(1)}
100%{transform:scale(1.15)}
}

.animate-slowZoom{
animation:slowZoom 20s linear infinite alternate;
}


/* reveal animation */

.reveal{
opacity:0;
transform:translateY(60px);
transition:all 1s ease;
}

.reveal.active{
opacity:1;
transform:translateY(0);
}


/* stat cards */

.stat-card{
background:#0f1620;
border:1px solid #1d2a3a;
padding:40px;
border-radius:12px;
transition:0.4s;
}

.stat-card:hover{
border-color:#3b82f6;
transform:translateY(-8px);
box-shadow:0 10px 40px rgba(59,130,246,0.25);
}


/* feature */

.feature-card{

border:1px solid #1d2a3a;
padding:40px;
border-radius:12px;
transition:0.4s;
}

.feature-card:hover{
border-color:#3b82f6;
transform:translateY(-8px);
box-shadow:0 10px 40px rgba(59,130,246,0.25);
}


/* service */

.service-card{
background:#0f1620;
border:1px solid #1d2a3a;
padding:35px;
border-radius:12px;
text-align:center;
transition:0.4s;
}

.service-card:hover{
border-color:#3b82f6;
transform:translateY(-8px);
box-shadow:0 10px 40px rgba(59,130,246,0.25);
}

.service-card .icon{
font-size:35px;
margin-bottom:15px;
color:#3b82f6;
}

.service-card h3{
color:white;
font-size:18px;
margin-bottom:10px;
}

.service-card p{
color:#9ca3af;
font-size:14px;
}

</style>



<script>

/* scroll reveal */

const reveals = document.querySelectorAll(".reveal");

function revealOnScroll(){
reveals.forEach(el=>{
const windowHeight = window.innerHeight;
const revealTop = el.getBoundingClientRect().top;
if(revealTop < windowHeight - 120){
el.classList.add("active");
}
});
}

window.addEventListener("scroll", revealOnScroll);
revealOnScroll();


/* counter animation */

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

const update = () => {

const target = +counter.getAttribute('data-target');
const c = +counter.innerText;

const increment = target / 200;

if(c < target){
counter.innerText = Math.ceil(c + increment);
setTimeout(update,10);
}else{
counter.innerText = target;
}

};

update();

});

</script>


@endsection