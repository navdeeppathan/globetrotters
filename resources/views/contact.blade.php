@extends('layouts.app')

@section('content')

<section class="bg-white py-20 md:py-28 px-6 md:px-10 relative overflow-hidden mt-10">

<!-- background glow -->
<div class="absolute w-[300px] md:w-[400px] h-[300px] md:h-[400px] bg-blue-600/10 blur-[120px] -top-40 -left-40"></div>
<div class="absolute w-[300px] md:w-[400px] h-[300px] md:h-[400px] bg-blue-500/10 blur-[120px] bottom-0 right-0"></div>

<div class="max-w-[1400px] mx-auto grid lg:grid-cols-2 gap-14 lg:gap-20 items-start relative z-10">

<!-- LEFT CONTACT INFO -->
<div class="text-black">

<h2 class="text-3xl md:text-4xl font-bold tracking-wide">
CONTACT US
</h2>

<div class="w-24 h-[3px] bg-blue-500 mt-6 mb-8 md:mb-10"></div>

<p class="text-gray-600 mb-10 md:mb-12 max-w-lg text-sm md:text-base">
Our logistics specialists are ready to assist you with global
transportation, freight forwarding and supply chain solutions.
Contact us today for reliable logistics support.
</p>

<div class="space-y-6 md:space-y-8">

<!-- phone -->
<div class="flex items-start gap-4 md:gap-5 group">
<div class="w-11 h-11 md:w-12 md:h-12 flex items-center justify-center rounded-lg bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] text-white group-hover:scale-110 transition">
<i class="fa-solid fa-phone"></i>
</div>

<div>
<p class="text-black text-xs md:text-sm">Phone</p>
<p class="text-black text-sm md:text-base">+44 (0) 20 8432 2983</p>
</div>
</div>

<!-- website -->
<div class="flex items-start gap-4 md:gap-5 group">
<div class="w-11 h-11 md:w-12 md:h-12 flex items-center justify-center rounded-lg bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] text-white group-hover:scale-110 transition">
<i class="fa-solid fa-globe"></i>
</div>

<div>
<p class="text-black text-xs md:text-sm">Website</p>
<a href="#" class="text-black hover:text-blue-400 transition text-sm md:text-base">
www.globetrottersltd.com
</a>
</div>
</div>

<!-- email -->
<div class="flex items-start gap-4 md:gap-5 group">
<div class="w-11 h-11 md:w-12 md:h-12 flex items-center justify-center rounded-lg bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] text-white group-hover:scale-110 transition">
<i class="fa-solid fa-envelope"></i>
</div>

<div>
<p class="text-black text-xs md:text-sm">Email</p>
<p class="text-black text-sm md:text-base">info@globetrottersltd.com</p>
</div>
</div>

<!-- address -->
<div class="flex items-start gap-4 md:gap-5 group">
<div class="w-11 h-11 md:w-12 md:h-12 flex items-center justify-center rounded-lg bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] text-white group-hover:scale-110 transition">
<i class="fa-solid fa-location-dot"></i>
</div>

<div>
<p class="text-black text-xs md:text-sm">Office Address</p>
<p class="text-black text-sm md:text-base leading-relaxed">
Vista Business Centre,<br>
50 Salisbury Road, Hounslow<br>
Middlesex TW4 6JQ, UK
</p>
</div>
</div>

</div>

</div>



<!-- RIGHT CONTACT FORM -->
<div class="bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] border border-[#1d2a3a] rounded-xl p-6 md:p-10 shadow-lg">

<h3 class="text-white text-xl md:text-2xl font-semibold mb-6 md:mb-8">
Send Us a Message
</h3>

<form method="POST" action="{{ route('contact.send') }}" class="space-y-5 md:space-y-6">
@csrf

<input
type="text"
name="name"
placeholder="Your Name"
class="w-full bg-white border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none"
/>

<input
type="email"
name="email"
placeholder="Email Address"
class="w-full bg-white border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none"
/>

<input
type="text"
name="subject"
placeholder="Subject"
class="w-full bg-white border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none"
/>

<textarea
rows="5"
name="message"
placeholder="Your Message"
class="w-full bg-white border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none"
></textarea>

<button
type="submit"
class="w-full md:w-auto bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 rounded-lg transition shadow-[0_10px_30px_rgba(59,130,246,0.25)]">
Send Message
</button>

@if ($errors->any())
<div class="bg-red-500 text-white p-3 rounded">
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
</div>
@endif

@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded">
{{ session('success') }}
</div>
@endif

</form>

</div>

</div>



<!-- GOOGLE MAP -->
<div class="max-w-[1400px] mx-auto px-6 md:px-10 mt-16 md:mt-24">

<div class="rounded-xl overflow-hidden border border-[#1d2a3a]">

<iframe
class="w-full h-[300px] md:h-[400px]"
src="https://maps.google.com/maps?q=Hounslow%20UK&t=&z=13&ie=UTF8&iwloc=&output=embed">
</iframe>

</div>

</div>



<!-- NETWORK PARTNERS -->
<div class="max-w-[1400px] bg-gray-50 py-12 mx-auto px-6 md:px-10 mt-16 md:mt-24">

<h3 class="text-black text-2xl md:text-3xl font-bold mb-6">
OUR NETWORK PARTNERS
</h3>

<div class="w-20 h-[3px] bg-blue-500 mb-10 md:mb-12"></div>

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 md:gap-16 items-center">

<img src="{{ asset('a7.jpg') }}" class="h-12 md:h-16 object-contain opacity-70 hover:opacity-100 transition mx-auto">

<img src="{{ asset('a8.jpg') }}" class="h-12 md:h-16 object-contain opacity-70 hover:opacity-100 transition mx-auto">

<img src="{{ asset('a9.jpg') }}" class="h-12 md:h-16 object-contain opacity-70 hover:opacity-100 transition mx-auto">

<img src="{{ asset('a10.jpg') }}" class="h-12 md:h-16 object-contain opacity-70 hover:opacity-100 transition mx-auto">

</div>

</div>


</section>

@endsection