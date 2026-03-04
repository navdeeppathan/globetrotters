@extends('layouts.app')

@section('content')

<section class="bg-[#0b0f14] py-28 mt-10">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <!-- TITLE -->
        <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
            INDUSTRIES WE SERVE
        </h2>

        <div class="w-20 h-[3px] bg-orange-400 mx-auto mt-6 mb-20"></div>


        <!-- INDUSTRY GRID -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-20 gap-y-16 justify-items-center">

            <div class="industry-box">RETAIL</div>
            <div class="industry-box">MANUFACTURING</div>
            <div class="industry-box">FOOD & BEVERAGE</div>
            <div class="industry-box">AUTOMOTIVE</div>

            <div class="industry-box">HEALTHCARE</div>
            <div class="industry-box">FASHION</div>
            <div class="industry-box">OIL & ENERGY</div>
            <div class="industry-box">TECHNOLOGY</div>

        </div>


        <!-- LAST CENTER BOX -->
        <div class="flex justify-center mt-20">

            <div class="industry-box w-[380px]">
                AVIATION & AEROSPACE
            </div>

        </div>

    </div>

</section>

<style>
    .industry-box{
    background:#e19a49;
    color:white;

    font-weight:600;
    letter-spacing:1px;

    padding:22px 30px;

    width:260px;
    text-align:center;

    transition:0.3s;
}

/* hover effect like modern logistics sites */
.industry-box:hover{
    background:#f0a95b;
    transform:translateY(-4px);
}

.industry-box{
opacity:0;
transform:translateY(40px);
animation:fadeUp 0.8s forwards;
}

@keyframes fadeUp{
to{
opacity:1;
transform:translateY(0);
}
}

</style>

@endsection