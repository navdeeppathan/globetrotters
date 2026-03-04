<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Globetrotters Logistics</title>



<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-[#0b0f14] min-h-screen flex items-center justify-center relative overflow-hidden">


<!-- BACKGROUND GLOW -->
<div class="absolute w-[500px] h-[500px] bg-blue-600/10 blur-[150px] -top-40 -left-40"></div>
<div class="absolute w-[400px] h-[400px] bg-blue-500/10 blur-[120px] bottom-0 right-0"></div>



<!-- LOGIN CARD -->
<div class="relative z-10 w-full max-w-md bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-10 shadow-xl">


<!-- LOGO / TITLE -->
<div class="text-center mb-10">

<h2 class="text-white text-3xl font-bold mb-3">
Welcome Back
</h2>

<p class="text-gray-400 text-sm">
Login to manage your logistics dashboard
</p>

<div class="w-20 h-[3px] bg-blue-500 mx-auto mt-4"></div>

</div>



<form method="POST" action="{{ route('login') }}" class="space-y-6">

@csrf


<!-- EMAIL -->
<div>

<label class="text-gray-300 text-sm">
Email Address
</label>

<div class="relative mt-2">

<input type="email"
name="email"
required
class="w-full bg-[#0b0f14] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">

<i class="fa-solid fa-envelope absolute right-4 top-4 text-gray-500"></i>

</div>

</div>



<!-- PASSWORD -->
<div>

<label class="text-gray-300 text-sm">
Password
</label>

<div class="relative mt-2">

<input type="password"
name="password"
required
class="w-full bg-[#0b0f14] border border-[#1d2a3a] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">

<i class="fa-solid fa-lock absolute right-4 top-4 text-gray-500"></i>

</div>

</div>



<!-- OPTIONS -->
<div class="flex items-center justify-between text-sm">

<label class="flex items-center gap-2 text-gray-400">

<input type="checkbox"
name="remember"
class="accent-blue-500">

Remember me

</label>



</div>



<!-- LOGIN BUTTON -->
<button type="submit"
class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-lg transition shadow-[0_10px_30px_rgba(59,130,246,0.3)]">

Login

</button>


@if ($errors->any())

<div class="bg-red-500/20 border border-red-500 text-red-300 p-3 rounded mb-4 text-sm">

@foreach ($errors->all() as $error)

<div>{{ $error }}</div>

@endforeach

</div>

@endif

<!-- REGISTER LINK -->
<div class="text-center text-sm text-gray-400 mt-6">

Don't have an account?

<a href="{{ route('register') }}"
class="text-blue-400 hover:text-blue-300 transition">

Register

</a>

</div>


</form>

</div>



</body>
</html>