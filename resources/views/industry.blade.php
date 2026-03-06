@extends('layouts.app')

@section('content')


<!-- HERO -->
<div class="py-28 border-b border-blue-900/30 text-center">

  <div class="max-w-7xl mx-auto px-6">

    <h1
      data-aos="fade-up"
      class="text-5xl font-bold mb-6"
    >
      Industries We Serve
    </h1>

    <p
      data-aos="fade-up"
      data-aos-delay="200"
      class="text-gray-400 max-w-2xl mx-auto"
    >
      Our logistics specialists understand the challenges
      of every industry and deliver reliable solutions.
    </p>

  </div>

</div>



<!-- INDUSTRY SECTION -->
<div class="max-w-7xl mx-auto px-6 py-24 space-y-28">

<!-- RETAIL -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <img
    data-aos="fade-right"
    src="{{ asset('b1.webp') }}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

  <div data-aos="fade-left">

    <h2 class="text-3xl font-bold mb-4">
      Retail Logistics
    </h2>

    <p class="text-gray-400 mb-6">
      We support global retailers with efficient supply chains
      and smart logistics solutions.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Inventory optimization</li>
      <li>Retail warehouse distribution</li>
      <li>Fast store replenishment</li>
    </ul>

  </div>

</div>



<!-- MANUFACTURING -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <div data-aos="fade-right">

    <h2 class="text-3xl font-bold mb-4">
      Manufacturing Logistics
    </h2>

    <p class="text-gray-400 mb-6">
      Industrial logistics solutions designed
      to support manufacturing supply chains.
    </p>

  </div>

  <img
    data-aos="fade-left"
    src="{{asset('b2.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

</div>



<!-- FOOD -->
<div class="bg-[#06121e] py-24 text-center">

  <h2
    data-aos="zoom-in"
    class="text-4xl font-bold mb-6"
  >
    Need Logistics For Your Industry?
  </h2>

  <p
    data-aos="fade-up"
    data-aos-delay="200"
    class="text-gray-400 mb-8 max-w-xl mx-auto"
  >
    Contact our logistics specialists to get customized
    solutions tailored for your business.
  </p>

  <a
    data-aos="fade-up"
    data-aos-delay="400"
    href="#"
    class="px-8 py-3 rounded-lg
    bg-gradient-to-r from-blue-600 to-cyan-500
    hover:opacity-90 transition"
  >
    Request Transport Quote
  </a>

</div>



<!-- AUTOMOTIVE -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <div data-aos="fade-right">
    <h2 class="text-3xl font-bold mb-4">Automotive Industry</h2>

    <p class="text-gray-400 mb-6">
      Logistics services designed for automotive manufacturers,
      spare parts distribution and global vehicle shipping.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Vehicle transport</li>
      <li>Automotive spare parts logistics</li>
      <li>Manufacturing supply chain</li>
    </ul>
  </div>

  <img
    data-aos="fade-left"
    src="{{asset('b4.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

</div>



<!-- HEALTHCARE -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <img
    data-aos="fade-right"
    src="{{asset('b5.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

  <div data-aos="fade-left">
    <h2 class="text-3xl font-bold mb-4">Healthcare Logistics</h2>

    <p class="text-gray-400 mb-6">
      Our healthcare supply chain solutions support medical
      manufacturers and hospitals worldwide.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Medical device shipping</li>
      <li>Pharmaceutical logistics</li>
      <li>Healthcare warehousing</li>
    </ul>
  </div>

</div>



<!-- FASHION -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <div data-aos="fade-right">
    <h2 class="text-3xl font-bold mb-4">Fashion Industry</h2>

    <p class="text-gray-400 mb-6">
      Our global logistics network helps fashion brands
      move products quickly from factory to retail stores.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Luxury apparel logistics</li>
      <li>Global fashion distribution</li>
      <li>Retail inventory movement</li>
    </ul>
  </div>

  <img
    data-aos="fade-left"
    src="{{asset('b6.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

</div>



<!-- ENERGY -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <img
    data-aos="fade-right"
    src="{{asset('b7.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

  <div data-aos="fade-left">
    <h2 class="text-3xl font-bold mb-4">Oil & Energy</h2>

    <p class="text-gray-400 mb-6">
      Specialized logistics services for the energy industry,
      including oversized equipment transportation.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Wind turbine transport</li>
      <li>Energy infrastructure logistics</li>
      <li>Heavy cargo handling</li>
    </ul>
  </div>

</div>



<!-- TECHNOLOGY -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <div data-aos="fade-right">
    <h2 class="text-3xl font-bold mb-4">Technology</h2>

    <p class="text-gray-400 mb-6">
      High-value electronics require secure and fast transportation
      solutions that our logistics specialists provide.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Electronics distribution</li>
      <li>Secure high-value transport</li>
      <li>Tech supply chain management</li>
    </ul>
  </div>

  <img
    data-aos="fade-left"
    src="{{asset('b8.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

</div>



<!-- AVIATION -->
<div class="grid lg:grid-cols-2 gap-16 items-center">

  <img
    data-aos="fade-right"
    src="{{asset('b9.webp')}}"
    class="rounded-xl shadow-xl hover:scale-105 transition duration-500"
  />

  <div data-aos="fade-left">
    <h2 class="text-3xl font-bold mb-4">Aviation & Aerospace</h2>

    <p class="text-gray-400 mb-6">
      Logistics for aircraft parts, maintenance equipment,
      and aerospace supply chains.
    </p>

    <ul class="space-y-2 text-gray-300">
      <li>Aircraft parts transportation</li>
      <li>Aircraft-on-ground support</li>
      <li>Aerospace supply chains</li>
    </ul>
  </div>

</div>

</div>





</section>

@endsection