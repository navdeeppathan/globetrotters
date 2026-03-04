@extends('layouts.app')

@section('content')

<!-- ABOUT US SECTION -->
<section class="relative bg-[#0b0f14] py-24 px-6 lg:px-16 overflow-hidden">

    <!-- background glow -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="absolute w-[500px] h-[500px] bg-blue-600/10 blur-[120px] -top-40 -left-40"></div>
        <div class="absolute w-[500px] h-[500px] bg-orange-500/10 blur-[120px] bottom-0 right-0"></div>
    </div>

    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 mt-10 relative z-10">

        <!-- LEFT IMAGE SECTION -->
        <div class="space-y-10 reveal">

            <!-- IMAGE 1 -->
            <div class="group overflow-hidden rounded-lg shadow-2xl border border-white/10">
                <img src="{{ asset('a1.jpg') }}"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700"
                    alt="Ship Logistics">
            </div>

            <!-- IMAGE 2 -->
            <div class="group overflow-hidden rounded-lg shadow-2xl border border-white/10">
                <img src="{{ asset('a2.jpg') }}"
                    class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700"
                    alt="Warehouse">
            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="text-white reveal">

            <!-- TITLE -->
            <h2 class="text-4xl md:text-5xl font-bold tracking-wide mb-4">
                ABOUT US
            </h2>

            <!-- animated underline -->
            <div class="relative w-28 h-[3px] bg-orange-400 mb-8 overflow-hidden">
                <div class="absolute inset-0 bg-orange-300 animate-pulse"></div>
            </div>

            <!-- paragraph -->
            <p class="text-gray-300 leading-relaxed mb-6 text-[15px] md:text-[16px]">
                Globetrotters (GB) Ltd is an Independent Freight Forwarding company based in London, 
                providing resources and expertise in Ocean & Air Exports and Imports, Customs Clearance, 
                Warehousing and distribution. Our customized portfolio of products and services provides 
                our customers with a unique service dimension worldwide.
            </p>

            <p class="text-gray-300 leading-relaxed text-[15px] md:text-[16px]">
                In today’s fast moving environment, Logistics has become an essential component of any 
                management strategy. Customer requirements for international movement / logistics have 
                tremendously advanced and diversified, and Globetrotters (GB) Ltd have committed itself 
                in continuous structuring and implementing in all kinds of logistics related systems.
                To meet the changing demands of the industry and offering best quality solutions to 
                clients Globetrotters has successfully networked itself globally so as to be able to 
                meet all kind of services.
            </p>

        </div>

    </div>

</section>


<section class="relative bg-[#0b0f14] overflow-hidden">

    <div class="flex items-stretch">

        <!-- LEFT CONTENT -->
        <div class="w-full lg:w-1/2">

            <div class="max-w-7xl ml-auto px-10 lg:px-32  py-24 text-white">

                <h2 class="text-[48px] font-bold tracking-wide mb-6">
                    OUR MISSION
                </h2>

                <div class="w-24 h-[4px] bg-[#f39c3d] mb-10"></div>

                <p class="text-gray-300 leading-relaxed mb-10 text-[17px] max-w-xl">
                    Our aim is to deliver a positive and reliable experience to each
                    and every client while offering exceptional values in the
                    marketplace and setting the standard for professionalism in the
                    logistics solution we offer.
                </p>

                <p class="text-gray-300 leading-relaxed text-[17px] max-w-xl">
                    In addition to operating our business profitably, we strive to
                    operate it responsibly both for our clients and our employees.
                </p>

            </div>

        </div>


        <!-- RIGHT IMAGE -->
        <div class="mission-right">

            <img src="{{ asset('a1.jpg') }}" class="mission-img">

            <div class="corner-accent"></div>

        </div>

    </div>

</section>

<section class="bg-[#0b0f14] py-24 relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                OUR VISION
            </h2>

            <div class="w-20 h-[3px] bg-orange-400 mx-auto mt-6"></div>

        </div>


        <!-- VISION ITEMS -->
        <div class="grid md:grid-cols-3 gap-16 mb-20">

            <!-- ITEM 1 -->
            <div class="flex items-start gap-6">

                <div class="vision-number">01</div>

                <div class="vision-text">
                    PROVIDING HIGH <br>
                    QUALITY OF SERVICES
                </div>

            </div>


            <!-- ITEM 2 -->
            <div class="flex items-start gap-6">

                <div class="vision-number">02</div>

                <div class="vision-text">
                    GLOBAL EXPERTISE IN <br>
                    LOGISTICS
                </div>

            </div>


            <!-- ITEM 3 -->
            <div class="flex items-start gap-6">

                <div class="vision-number">03</div>

                <div class="vision-text">
                    GOAL OF BECOMING <br>
                    THE INDUSTRY LEADER
                </div>

            </div>

        </div>

    </div>


    <!-- IMAGE ROW -->
    <div class="vision-images">

        <img src="{{ asset('a3.jpg') }}" class="vision-img">

        <img src="{{ asset('a4.jpg') }}" class="vision-img">

        <div class="vision-img-wrap">

            <img src="{{ asset('a5.jpg') }}" class="vision-img">

            <!-- orange corner -->
            <div class="corner-accent"></div>

        </div>

    </div>

</section>


<section class="bg-[#0b0f14] py-28">

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


<section class="bg-[#0b0f14] py-24">

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

<section class="bg-[#0b0f14] py-28">

    <div class="max-w-[1500px] mx-auto px-10">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                OUR PORTFOLIO
            </h2>

            <div class="w-24 h-[3px] bg-[#e19a49] mx-auto mt-6"></div>

        </div>


        <!-- PORTFOLIO GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">

            <!-- CARD -->
            <div class="portfolio-card">
                <h3>TRANSPORTATION MANAGEMENT</h3>
                <p>
                    We offer Full Truckload (FTL), Less-Than-Truckload (LTL), Flatbed,
                    Intermodal and Specialty freight shipping options to both domestic
                    and international clients.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>SUPPLY CHAIN ANALYSIS</h3>
                <p>
                    Our logistics experienced specialists estimate shipping timelines
                    and routes and develop a tailor-made logistics plan to meet your
                    special supply chain needs.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>FREIGHT FORWARDING</h3>
                <p>
                    Our highly trained transportation professionals can offer expedited
                    and standard ocean and air freight services for all your international
                    shipping needs.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>PROJECT SHIPMENTS</h3>
                <p>
                    Experienced Freight Forwarder with over 30+ project experience.
                    Our global network in 110 countries and full-service team of
                    ocean forwarding, airfreight, and expedited freight experts
                    are ready to help.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>SPECIAL EQUIPMENT</h3>
                <p>
                    We provide services of special equipment for both international
                    and domestic clients with our huge fleet of company-owned trailers.
                </p>
            </div>


            <div class="portfolio-card">
                <h3>WAREHOUSING & DISTRIBUTIONS</h3>
                <p>
                    Our chain of more than 70 warehousing locations across United
                    Kingdom provides more than 1 million square feet of commercial
                    storage space locally.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>CUSTOM CLEARANCE</h3>
                <p>
                    As a government licensed customs broker, Globetrotters Logistics
                    services all ports of entry across America and ensures clients
                    custom ‘clearing’ solutions.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>FINAL MILE</h3>
                <p>
                    Final Mile service specializes in home delivery of non-transferable
                    products with services ranging from drop-off to white glove deliveries.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>THIRD-PARTY LOGISTICS</h3>
                <p>
                    We provide third-party logistics (3PL) services to companies looking
                    to source cost-effective procurement and distribution services.
                </p>
            </div>

            <div class="portfolio-card">
                <h3>SPECIAL CARGO HANDLING</h3>
                <p>
                    We provide services in special cargo handling like DANGEROUS GOODS,
                    FRAGILE CARGO, & PERISHABLE CARGO.
                </p>
            </div>

        </div>

    </div>

</section>


<section class="bg-[#0b0f14] py-32">

    <div class="max-w-[1400px] mx-auto px-10">

        <!-- TITLE -->
        <div class="text-center mb-20">

            <h2 class="text-white text-4xl md:text-5xl font-bold tracking-wide">
                VALUE ADDED SERVICES
            </h2>

            <div class="w-24 h-[3px] bg-[#e19a49] mx-auto mt-6"></div>

        </div>


        <!-- CONTENT -->
        <div class="max-w-[850px] text-white text-[22px] leading-[2.2]">

            <p class="mb-12 font-semibold">
                Our comprehensive range of value added services includes:
            </p>

            <ul class="space-y-8 list-disc pl-8 text-[22px]">

                <li>Insurance of cargo</li>

                <li>Tag, bag, re-pricing and care labelling</li>

                <li>Re-pack and re-labelling</li>

                <li>Returns rectification and repair</li>

            </ul>

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

    /* slanted image container */
    .mission-right{
        width:50%;
        height:620px;
        position:relative;
        overflow:hidden;
    }

    /* angled image */
    .mission-img{
        width:100%;
        height:100%;
        object-fit:cover;

        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 15% 100%);
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

    /* number box */
.vision-number{
    background:#e59c47;
    width:60px;
    height:60px;

    display:flex;
    align-items:center;
    justify-content:center;

    font-weight:700;
    font-size:20px;
    color:white;
}

/* text */
.vision-text{
    color:white;
    font-size:20px;
    line-height:1.4;
    letter-spacing:0.5px;
}

/* image row */
.vision-images{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    
    margin:auto;
}

/* images */
.vision-img{
    width:100%;
    height:260px;
    object-fit:cover;
}

/* wrapper for last image */
.vision-img-wrap{
    position:relative;
}

/* orange corner */
.corner-accent{
    position:absolute;
    bottom:0;
    right:0;

    width:0;
    height:0;

    border-left:70px solid transparent;
    border-top:70px solid #e59c47;
}

.vision-img{
transition:0.4s;
}

.vision-img:hover{
transform:scale(1.05);
}

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


.portfolio-card{
background:#e19a49;
padding:30px 25px;
text-align:center;
color:white;
min-height:280px;
display:flex;
flex-direction:column;
justify-content:flex-start;
transition:0.3s;
}

.portfolio-card h3{
font-size:18px;
font-weight:700;
margin-bottom:16px;
text-decoration:underline;
letter-spacing:0.5px;
}

.portfolio-card p{
font-size:14px;
line-height:1.6;
}

.portfolio-card:hover{
transform:translateY(-6px);
box-shadow:0 10px 30px rgba(0,0,0,0.4);
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