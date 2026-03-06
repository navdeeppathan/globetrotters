@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}

<section class="relative bg-black py-32 overflow-hidden mt-10">

<div class="absolute inset-0 ">
<img src="{{ asset('c8.png') }}" class="w-full h-full object-fill">
</div>

<div class="absolute w-[500px] h-[500px] bg-blue-600/20 blur-[150px] -top-40 -left-40"></div>
<div class="absolute w-[500px] h-[500px] bg-blue-600/20 blur-[150px] bottom-0 right-0"></div>

<div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

<h1 class="text-white text-5xl md:text-6xl font-bold mb-6">
LOGISTICS CHALLENGES
</h1>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mb-8"></div>

<p class="text-gray-300 text-lg max-w-3xl mx-auto">
Modern global supply chains face complex logistics challenges.
Our expertise helps businesses overcome operational barriers,
reduce delays, and deliver cargo efficiently across international markets.
</p>

</div>

</section>



{{-- CHALLENGE CARDS --}}

<section class="bg-black py-20">

<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

{{-- CARD 1 --}}

<div class="bg-[#0f1620] rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500 group">

<img src="{{ asset('s2.png') }}" class="h-56 w-full object-cover group-hover:scale-110 transition duration-500">

<div class="p-8">

<h3 class="text-white text-xl font-semibold mb-3">
Global Shipping Delays
</h3>

<p class="text-gray-400">
Unpredictable shipping schedules and port congestion can disrupt
supply chains and delay deliveries worldwide.
</p>

</div>

</div>



{{-- CARD 2 --}}

<div class="bg-[#0f1620] rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500 group">

<img src="{{ asset('c9.png') }}" class="h-56 w-full object-cover group-hover:scale-110 transition duration-500">

<div class="p-8">

<h3 class="text-white text-xl font-semibold mb-3">
Rising Transportation Costs
</h3>

<p class="text-gray-400">
Increasing fuel costs and global demand create pressure
on logistics budgets and shipping expenses.
</p>

</div>

</div>



{{-- CARD 3 --}}

<div class="bg-[#0f1620] rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition duration-500 group">

<img src="{{ asset('c10.png') }}" class="h-56 w-full object-cover group-hover:scale-110 transition duration-500">

<div class="p-8">

<h3 class="text-white text-xl font-semibold mb-3">
Supply Chain Complexity
</h3>

<p class="text-gray-400">
Managing international logistics networks requires
advanced coordination and real-time tracking.
</p>

</div>

</div>

</div>

</section>




{{-- INDUSTRY CHALLENGES GRID --}}

<section class="bg-[#050505] py-28">

<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-20">

<h2 class="text-white text-4xl font-bold">
KEY INDUSTRY CHALLENGES
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

{{-- ITEM --}}

<div class="bg-[#0f1620] p-8 rounded-xl border border-[#1d2a3a] hover:border-blue-500 hover:-translate-y-2 transition duration-500">



<h3 class="text-white mb-3 font-semibold">Port Congestion</h3>

<p class="text-gray-400 text-sm">
Busy ports can cause delays and increase shipping costs across global supply chains.
</p>

</div>



<div class="bg-[#0f1620] p-8 rounded-xl border border-[#1d2a3a] hover:border-blue-500 hover:-translate-y-2 transition duration-500">



<h3 class="text-white mb-3 font-semibold">Customs Regulations</h3>

<p class="text-gray-400 text-sm">
Complex customs requirements slow down international trade and documentation processing.
</p>

</div>



<div class="bg-[#0f1620] p-8 rounded-xl border border-[#1d2a3a] hover:border-blue-500 hover:-translate-y-2 transition duration-500">



<h3 class="text-white mb-3 font-semibold">Cargo Security</h3>

<p class="text-gray-400 text-sm">
High value cargo requires strong safety protocols and advanced monitoring systems.
</p>

</div>



<div class="bg-[#0f1620] p-8 rounded-xl border border-[#1d2a3a] hover:border-blue-500 hover:-translate-y-2 transition duration-500">



<h3 class="text-white mb-3 font-semibold">Last Mile Delivery</h3>

<p class="text-gray-400 text-sm">
Urban deliveries require flexible and fast transportation strategies.
</p>

</div>

</div>

</div>

</section>




{{-- SOLUTIONS SECTION --}}

<section class="bg-black py-28">

<div class="max-w-6xl mx-auto px-6">

<div class="text-center mb-20">

<h2 class="text-white text-4xl font-bold">
OUR SOLUTIONS
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-3 gap-14 text-center">

{{-- ITEM --}}

<div class="space-y-4">

<img src="{{ asset('icons/planning.png') }}" class="w-16 mx-auto">

<div class="text-blue-500 text-5xl font-bold">01</div>

<h3 class="text-white text-xl font-semibold">
Advanced Planning
</h3>

<p class="text-gray-400">
Strategic route planning and shipment optimization reduce
delays and improve logistics efficiency.
</p>

</div>


<div class="space-y-4">

<img src="{{ asset('icons/tracking.png') }}" class="w-16 mx-auto">

<div class="text-blue-500 text-5xl font-bold">02</div>

<h3 class="text-white text-xl font-semibold">
Real-Time Tracking
</h3>

<p class="text-gray-400">
Modern tracking systems allow businesses to monitor shipments
and maintain visibility throughout the supply chain.
</p>

</div>


<div class="space-y-4">

<img src="{{ asset('icons/network.png') }}" class="w-16 mx-auto">

<div class="text-blue-500 text-5xl font-bold">03</div>

<h3 class="text-white text-xl font-semibold">
Global Partnerships
</h3>

<p class="text-gray-400">
Our strong international logistics network ensures faster
and more reliable cargo transportation.
</p>

</div>

</div>

</div>

</section>



{{-- CTA SECTION --}}

<section class="bg-gradient-to-r from-blue-600 to-blue-800 py-20">

<div class="max-w-5xl mx-auto text-center px-6">

<h2 class="text-white text-4xl font-bold mb-6">
Need Help Solving Your Logistics Challenges?
</h2>

<p class="text-blue-100 mb-8">
Our global logistics experts help businesses optimize supply chains,
reduce delays, and improve delivery performance.
</p>

<a href="/contact"
class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition">
Contact Our Experts
</a>

</div>

</section>

@endsection