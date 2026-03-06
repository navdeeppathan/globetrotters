@extends('layouts.app')

@section('content')

<section class="relative bg-gradient-to-r from-black via-[#06122b] to-[#0a2a55] overflow-hidden">

  <div class="max-w-7xl mx-auto px-6 py-28 grid lg:grid-cols-2 gap-16 items-center">

    <!-- LEFT CONTENT -->
    <div data-aos="fade-right">

      <h1 class="text-5xl lg:text-6xl font-bold leading-tight text-white mb-6">
        Empowering Global Ventures
        <span class="text-blue-400">
          Connecting Businesses,
        </span>
        Building Success
      </h1>

      <p class="text-gray-300 max-w-xl mb-8 text-lg">
        Delivering seamless logistics solutions across continents.
        We help businesses move cargo faster, safer and smarter.
      </p>

      <div class="flex gap-4">

        <a href="/services"
          class="px-7 py-3 rounded-lg
          bg-gradient-to-r from-blue-600 to-cyan-500
          hover:opacity-90 transition text-white font-medium">

          Explore Services
        </a>

        <a href="/contact"
          class="px-7 py-3 rounded-lg border border-blue-400
          text-blue-400 hover:bg-blue-500/10 transition">

          Get Quote
        </a>

      </div>

    </div>


    <!-- RIGHT IMAGE -->
    <div class="relative flex justify-center" data-aos="fade-left">

      <!-- glowing circle -->
      <div class="absolute w-80 h-80 bg-blue-500/20 blur-3xl rounded-full"></div>

      <img
        src="https://images.unsplash.com/photo-1569154941061-e231b4725ef1"
        class="relative w-[420px] rounded-xl shadow-[0_0_60px_rgba(59,130,246,0.4)]
        hover:scale-105 transition duration-500"
      />

    </div>

  </div>

</section>

<section class="bg-black py-28 text-white overflow-hidden">

  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

    <!-- LEFT IMAGE CLUSTER -->
    <div class="relative flex justify-center" data-aos="fade-right">

      <!-- Main Image -->
      <img
        src="https://images.unsplash.com/photo-1553413077-190dd305871c"
        class="w-[320px] rounded-xl shadow-xl relative z-10"
      >

      <!-- Floating images -->
      <img
        src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d"
        class="absolute -top-10 -left-12 w-20 rounded-lg shadow-lg"
      >

      <img
        src="https://images.unsplash.com/photo-1601582589907-f92af5ed9db8"
        class="absolute top-10 -right-14 w-20 rounded-lg shadow-lg"
      >

      <img
        src="https://images.unsplash.com/photo-1581093458791-9d42c2e9f2f4"
        class="absolute bottom-0 -left-14 w-20 rounded-lg shadow-lg"
      >

      <img
        src="https://images.unsplash.com/photo-1606788075761-0f2c7a5b38d3"
        class="absolute bottom-12 -right-12 w-20 rounded-lg shadow-lg"
      >

      <!-- blue glow -->
      <div class="absolute w-72 h-72 bg-blue-500/20 blur-3xl rounded-full"></div>

    </div>



    <!-- RIGHT CONTENT -->
    <div data-aos="fade-left">

      <h2 class="text-3xl font-bold mb-6">
        About Global Logistics Network
      </h2>

      <p class="text-gray-400 mb-8 leading-relaxed">
        We deliver efficient and reliable logistics services across
        global markets. Our experienced team provides customized
        supply chain solutions for businesses worldwide.
      </p>



      <!-- FEATURE CARDS -->

      <div class="space-y-4">

        <div class="flex items-start gap-4 bg-[#06121e] border border-blue-500/20 rounded-lg p-4">

          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-500/20 text-blue-400">
            <i class="fa-solid fa-ship"></i>
          </div>

          <div>
            <h4 class="font-semibold">Global Network</h4>
            <p class="text-gray-400 text-sm">
              Connecting international markets with seamless logistics.
            </p>
          </div>

        </div>



        <div class="flex items-start gap-4 bg-[#06121e] border border-blue-500/20 rounded-lg p-4">

          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-500/20 text-blue-400">
            <i class="fa-solid fa-truck"></i>
          </div>

          <div>
            <h4 class="font-semibold">Advanced Transport</h4>
            <p class="text-gray-400 text-sm">
              Efficient road, air and ocean transportation solutions.
            </p>
          </div>

        </div>



        <div class="flex items-start gap-4 bg-[#06121e] border border-blue-500/20 rounded-lg p-4">

          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-500/20 text-blue-400">
            <i class="fa-solid fa-box"></i>
          </div>

          <div>
            <h4 class="font-semibold">Secure Warehousing</h4>
            <p class="text-gray-400 text-sm">
              Safe storage facilities with modern logistics management.
            </p>
          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="bg-black py-28 text-white">

  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- TITLE -->
    <h2
      class="text-4xl font-bold mb-16"
      data-aos="fade-up"
    >
      Trusted by Industry Leaders Worldwide
    </h2>


    <!-- TESTIMONIAL GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD 1 -->
      <div
        class="bg-[#06121e] border border-blue-500/20 rounded-xl p-8
        hover:border-blue-400 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)]
        transition"
        data-aos="zoom-in"
      >

        <div class="flex justify-center mb-4">
          <img
            src="https://randomuser.me/api/portraits/men/32.jpg"
            class="w-14 h-14 rounded-full border-2 border-blue-400"
          >
        </div>

        <p class="text-gray-400 text-sm mb-5">
          “Outstanding logistics services. Our shipments arrive safely
          and on time every time.”
        </p>

        <h4 class="font-semibold">Michael Carter</h4>

        <span class="text-gray-500 text-sm">
          Logistics Director
        </span>

      </div>



      <!-- CARD 2 -->
      <div
        class="bg-[#06121e] border border-blue-500/20 rounded-xl p-8
        hover:border-blue-400 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)]
        transition"
        data-aos="zoom-in"
        data-aos-delay="200"
      >

        <div class="flex justify-center mb-4">
          <img
            src="https://randomuser.me/api/portraits/women/44.jpg"
            class="w-14 h-14 rounded-full border-2 border-blue-400"
          >
        </div>

        <p class="text-gray-400 text-sm mb-5">
          “Reliable supply chain partner. Their team provides
          exceptional service and communication.”
        </p>

        <h4 class="font-semibold">Sophia Williams</h4>

        <span class="text-gray-500 text-sm">
          Operations Manager
        </span>

      </div>



      <!-- CARD 3 -->
      <div
        class="bg-[#06121e] border border-blue-500/20 rounded-xl p-8
        hover:border-blue-400 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)]
        transition"
        data-aos="zoom-in"
        data-aos-delay="400"
      >

        <div class="flex justify-center mb-4">
          <img
            src="https://randomuser.me/api/portraits/men/67.jpg"
            class="w-14 h-14 rounded-full border-2 border-blue-400"
          >
        </div>

        <p class="text-gray-400 text-sm mb-5">
          “Their global logistics network helped us expand our
          international shipping operations.”
        </p>

        <h4 class="font-semibold">David Thompson</h4>

        <span class="text-gray-500 text-sm">
          Supply Chain Manager
        </span>

      </div>

    </div>

  </div>

</section>

@endsection