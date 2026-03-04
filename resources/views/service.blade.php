@extends('layouts.app')

@section('content')

<section class="bg-[#0b0f14] py-24 mt-10">

    <div class="max-w-[1400px] mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                OUR SERVICE
            </h2>

            <div class="w-20 h-[3px] bg-[#e19a49] mx-auto mt-6"></div>

        </div>


        <!-- SERVICE LABELS -->
        <div class="grid md:grid-cols-4 gap-10 mb-6">

            <div class="service-box">OCEAN</div>
            <div class="service-box">AIR</div>
            <div class="service-box">ROAD</div>
            <div class="service-box">RAIL</div>

        </div>


        <!-- SERVICE IMAGES -->
        <div class="grid md:grid-cols-4 gap-6">

            <img src="{{ asset('a1.jpg') }}" class="service-img">

            <img src="{{ asset('a2.jpg') }}" class="service-img">

            <img src="{{ asset('a3.jpg') }}" class="service-img">

            <img src="{{ asset('a4.jpg') }}" class="service-img">

        </div>

    </div>

</section>

<style>
    .service-box{
    background:#e19a49;
    color:white;

    text-align:center;

    padding:22px 0;

    font-weight:600;
    letter-spacing:1px;

    font-size:18px;
}

.service-img{
    width:100%;
    height:260px;

    object-fit:cover;

    transition:0.4s;
}

/* hover effect */
.service-img:hover{
    transform:scale(1.05);
}

.service-img:hover{
filter:brightness(80%);
}

</style>

@endsection