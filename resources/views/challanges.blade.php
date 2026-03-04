@extends('layouts.app')

@section('content')

<section class="bg-[#000000] py-32 text-center relative overflow-hidden mt-10 reveal">

<div class="absolute w-[400px] h-[400px] bg-blue-600/10 blur-[120px] -top-40 -left-40"></div>
<div class="absolute w-[400px] h-[400px] bg-blue-600/10 blur-[120px] bottom-0 right-0"></div>

<div class="max-w-5xl mx-auto px-6 relative z-10">

<h1 class="text-white text-5xl font-bold mb-6 animate-fadeUp">
LOGISTICS CHALLENGES
</h1>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mb-8 animate-grow"></div>

<p class="text-gray-400 text-lg animate-fadeUp delay-200">
Modern global supply chains face complex logistics challenges.
Our expertise helps businesses overcome operational barriers
and deliver cargo efficiently worldwide.
</p>

</div>

</section>



<section class="bg-[#000000] py-4">

<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">

<h3 class="text-white text-xl mb-4 font-semibold">
Global Shipping Delays
</h3>

<p class="text-gray-400">
Unpredictable shipping schedules and port congestion can disrupt
supply chains and delay deliveries worldwide.
</p>

</div>


<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white text-xl mb-4 font-semibold">
Rising Transportation Costs
</h3>

<p class="text-gray-400">
Increasing fuel costs and global demand create pressure
on logistics budgets and shipping expenses.
</p>

</div>


<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white text-xl mb-4 font-semibold">
Supply Chain Complexity
</h3>

<p class="text-gray-400">
Managing international logistics networks requires
advanced coordination and real-time tracking.
</p>

</div>

</div>

</section>



<section class="bg-[#000000] py-28">

<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-20">

<h2 class="text-white text-4xl font-bold">
KEY INDUSTRY CHALLENGES
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white mb-3">Port Congestion</h3>
<p class="text-gray-400 text-sm">
Busy ports can cause delays and increase shipping costs.
</p>

</div>

<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white mb-3">Customs Regulations</h3>
<p class="text-gray-400 text-sm">
Complex customs requirements slow down international trade.
</p>

</div>
<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white mb-3">Cargo Security</h3>
<p class="text-gray-400 text-sm">
High value cargo requires strong safety and monitoring systems.
</p>

</div>
<div class="bg-[#0f1620] border border-[#1d2a3a] p-8 rounded-xl 
hover:border-blue-500 transition duration-500
hover:-translate-y-3
hover:shadow-[0_10px_40px_rgba(59,130,246,0.25)]
reveal">
<h3 class="text-white mb-3">Last Mile Delivery</h3>
<p class="text-gray-400 text-sm">
Urban deliveries require flexible and fast transportation solutions.
</p>

</div>

</div>

</div>

</section>


<section class="bg-[#000000] py-28">

<div class="max-w-6xl mx-auto px-6">

<div class="text-center mb-20">

<h2 class="text-white text-4xl font-bold">
OUR SOLUTIONS
</h2>

<div class="w-24 h-[3px] bg-blue-500 mx-auto mt-6"></div>

</div>

<div class="grid md:grid-cols-3 gap-10">

<div class="text-center">

<div class="text-blue-500 text-5xl font-bold mb-4 animate-pulse">01</div>

<h3 class="text-white mb-3">Advanced Planning</h3>

<p class="text-gray-400">
Strategic route planning and shipment optimization.
</p>

</div>


<div class="text-center">

<div class="text-blue-500 text-5xl font-bold mb-4 animate-pulse">02</div>

<h3 class="text-white mb-3">Real-Time Tracking</h3>

<p class="text-gray-400">
Modern tracking systems keep cargo visibility high.
</p>

</div>


<div class="text-center">

<div class="text-blue-500 text-5xl font-bold mb-4 animate-pulse">03</div>

<h3 class="text-white mb-3">Global Partnerships</h3>

<p class="text-gray-400">
Strong international logistics network ensures efficiency.
</p>

</div>

</div>

</div>

</section>


<style>
    .reveal{
opacity:0;
transform:translateY(40px);
transition:all .8s ease;
}

.reveal.active{
opacity:1;
transform:translateY(0);
}


/* fade up animation */

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(40px);
}
to{
opacity:1;
transform:translateY(0);
}
}

.animate-fadeUp{
animation:fadeUp .9s ease forwards;
}

.delay-200{
animation-delay:.2s;
}


/* line animation */

@keyframes grow{
from{
width:0;
}
to{
width:96px;
}
}

.animate-grow{
animation:grow 1s ease forwards;
}

</style>

<script>

const reveals = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver(entries => {

entries.forEach(entry => {

if(entry.isIntersecting){
entry.target.classList.add("active");
}

});

});

reveals.forEach(el => observer.observe(el));

</script>
@endsection

