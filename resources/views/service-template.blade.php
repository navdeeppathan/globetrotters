@extends('layouts.app')

@section('content')

<section class="bg-black text-white">

<!-- HERO -->
<div class="py-28 text-center border-b border-blue-900/30">

    <div class="max-w-6xl mx-auto px-6">

        <h1 class="text-5xl font-bold mb-6" data-aos="fade-up">
            {{ $service['title'] }}
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
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
        <ul class="space-y-3 text-gray-300">

             @foreach($service['services'] as $item)
                <li class="flex gap-3">
                    <i class="fa-solid fa-check text-blue-400"></i>
                      {{ $item }}
                </li>

            @endforeach

        </ul>

    </div>

</div>




</section>

@endsection