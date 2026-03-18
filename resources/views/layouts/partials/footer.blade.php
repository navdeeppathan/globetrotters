   <!-- ================= FOOTER ================= -->
    <footer class="relative bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] border-t  border-white/10 mt-20">

        <!-- Top CTA Strip -->
        <div class="bg-gradient-to-r from-[#0d2a4a] via-[#0b2238] to-[#0d2a4a] border-b border-white/10">
            <div class=" mx-auto px-6 lg:px-16 py-10 flex flex-col md:flex-row items-center justify-between gap-6">
                
                <div>
                    <h3 class="text-xl md:text-2xl font-semibold text-white">
                        Ready to Ship Your Cargo Worldwide?
                    </h3>
                    <p class="text-gray-100 mt-2 text-sm">
                        Get fast, secure and reliable logistics solutions today.
                    </p>
                </div>

                <a href="/contact"
                class="bg-gradient-to-r 
                py-3 px-6 rounded-md text-white text-sm font-semibold
                from-[#1d4ed8] via-[#2563eb] to-[#0ea5e9]
                shadow-[inset_0_1px_0_rgba(255,255,255,0.2),0_0_20px_rgba(37,99,235,0.45)]
                hover:opacity-90 transition">
                    Request a Quote
                </a>

            </div>
        </div>

        <!-- Main Footer -->
        <div class=" mx-auto px-6 lg:px-16 py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Logo + About -->
            <div>
                <img src="{{ asset('logo.png') }}" 
                    alt="Globetrotters Logo" 
                    class="h-12 w-auto mb-6">

                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Globetrotters Ltd delivers secure and scalable global logistics
                    solutions across 150+ destinations worldwide.
                    Your trusted partner in international shipping.
                </p>

                <!-- Social Icons -->
                <div class="flex items-center gap-4">
                    {{-- <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/50 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a> --}}

                    <a href="https://www.linkedin.com/company/globetrotters-gb-ltd/linkedin" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/50 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    {{-- <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/50 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-md 
                        bg-white/50 border border-white/10
                        hover:bg-blue-600/20 hover:text-blue-400 transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a> --}}
                </div>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-white font-semibold mb-5">Company</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="/about" class="hover:text-blue-400 transition">About Us</a></li>
                    <li><a href="/services/air-freight" class="hover:text-blue-400 transition">Our Services</a></li>
                    <li><a href="/global" class="hover:text-blue-400 transition">Global Network</a></li>
                    {{-- <li>
                        <a href="{{ asset('terms.pdf') }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-blue-400 transition">
                        Terms & Conditions
                        </a>
                    </li> --}}
                    {{-- <li><a href="/privacy-policy" class="hover:text-blue-400 transition">Privacy Policy</a></li> --}}
                    <li><a href="/contact" class="hover:text-blue-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-white font-semibold mb-5">Services</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="/services/air-freight" class="hover:text-blue-400 transition">Air Freight</a></li>
                    <li><a href="/services/ocean-freight" class="hover:text-blue-400 transition">Ocean Freight</a></li>
                    <li><a href="/services/road-freight" class="hover:text-blue-400 transition">Road Transport</a></li>
                    <li><a href="/services/rail-freight" class="hover:text-blue-400 transition">Rail Transport</a></li>
                    
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-5">Contact Us</h4>
                <div class="space-y-4 text-sm text-gray-400">

                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-blue-400 mt-1"></i>
                        <span>
                            Vista Business Centre,<br>
                            50 Salisbury Road, Hounslow<br>
                            Middlesex TW4 6JQ, UK
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-blue-400"></i>
                        <span>+44 (0) 20 8432 2983</span>
                    </div>


                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-blue-400"></i>
                        <span>info@globetrottersltd.com</span>
                    </div>

                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-6 lg:px-16 py-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">

                <div>
                    © 2024 Globetrotters Ltd. All rights reserved.
                </div>

                <div class="flex gap-6">
                    <a href="/privacy-policy" class="hover:text-blue-400 transition">Privacy Policy</a>
                    <a href="{{ asset('terms.pdf') }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-blue-400 transition">
                        Terms & Conditions
                    </a>
                    {{-- <a href="#" class="hover:text-blue-400 transition">Cookies</a> --}}
                </div>

            </div>
        </div>

    </footer>
    <!-- ================= END FOOTER ================= -->