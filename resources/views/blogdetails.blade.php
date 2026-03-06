@extends('layouts.app')

@section('content')

<section class="bg-black text-white py-24 mt-10">

<div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-3 gap-16">

<!-- MAIN BLOG CONTENT -->
<div class="lg:col-span-2">

<!-- BLOG HEADER -->
<div class="mb-10">

<span class="text-blue-400 text-sm font-medium">
{{ $blog->category }}
</span>

<h1 class="text-4xl lg:text-5xl font-bold mt-4 leading-tight">
{{ $blog->title }}
</h1>

<div class="flex items-center gap-4 mt-6 text-gray-400 text-sm">

<span>By {{ $blog->author_name }}</span>
<span>•</span>
<span>{{ \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') }}</span>

</div>

</div>


<!-- FEATURE IMAGE -->
<div class="mb-10">

<img
src="{{ asset('blogs/'.$blog->image) }}"
class="rounded-xl shadow-lg w-full"
/>

</div>


<!-- BLOG CONTENT -->
<div class="space-y-6 text-gray-300 leading-relaxed">

<div class="space-y-6 text-gray-300 leading-relaxed">
{!! $blog->description !!}
</div>


<div class="text-gray-300">
{!! $blog->challanges !!}
</div>



<!-- QUOTE BLOCK -->
<div class="border-l-4 border-blue-500 pl-6 italic text-gray-400 my-10">
{!! $blog->quote !!}
</div>

<div class="text-gray-300">
{!! $blog->short_description !!}
</div>

</div>


<!-- TAGS -->
<div class="mt-10 flex flex-wrap gap-3">

<span class="px-3 py-1 bg-blue-600/20 text-blue-400 rounded-full text-sm">
{{ $blog->category }}
</span>


</div>


<!-- SHARE -->
<div class="mt-10 flex items-center gap-4">

<span class="text-gray-400">Share:</span>

<a href="{{ $blog->fb_link }}" target="_blank" class="text-blue-400 hover:text-blue-300">
<i class="fa-brands fa-facebook"></i>
</a>

<a href="{{ $blog->twitter }}" target="_blank" class="text-blue-400 hover:text-blue-300">
<i class="fa-brands fa-twitter"></i>
</a>

<a href="{{ $blog->linkedin }}" target="_blank" class="text-blue-400 hover:text-blue-300">
<i class="fa-brands fa-linkedin"></i>
</a>

</div>


<!-- AUTHOR CARD -->
<div class="mt-16 bg-[#0f1620] border border-[#1d2a3a] rounded-xl p-6 flex gap-6">

<img
src="https://i.pravatar.cc/80"
class="w-16 h-16 rounded-full"
/>

<div>

<h4 class="font-semibold text-white">{{ $blog->author_name }}</h4>

<p class="text-gray-400 text-sm mt-2">
{{ $blog->bio }}
</p>

</div>

</div>



<!-- RELATED POSTS -->
<div class="mt-20">

<h3 class="text-2xl font-bold mb-10">
Related Articles
</h3>

<div class="grid md:grid-cols-2 gap-8">

<div class="bg-[#0f1620] rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition">

<img
src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?auto=format&fit=crop&w=800&q=80"
class="h-48 w-full object-cover"
/>

<div class="p-6">

<h4 class="font-semibold mb-2">
The Future of Freight Transportation
</h4>

<p class="text-gray-400 text-sm">
Exploring how technology is transforming freight
and logistics industries worldwide.
</p>

</div>

</div>


<div class="bg-[#0f1620] rounded-xl overflow-hidden border border-[#1d2a3a] hover:border-blue-500 transition">

<img
src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80"
class="h-48 w-full object-cover"
/>

<div class="p-6">

<h4 class="font-semibold mb-2">
Warehouse Automation Trends
</h4>

<p class="text-gray-400 text-sm">
Automation technologies are revolutionizing
warehouse management systems.
</p>

</div>

</div>

</div>

</div>

</div>



<!-- SIDEBAR -->
<div class="space-y-12">

<!-- SEARCH -->
<div>

<input
type="text"
placeholder="Search blog..."
class="w-full bg-[#0f1620] border border-[#1d2a3a] px-4 py-3 rounded-lg text-white focus:border-blue-500 outline-none"
/>

</div>


<!-- RECENT POSTS -->
<div>

<h3 class="text-xl font-semibold mb-6">
Recent Posts
</h3>

<div class="space-y-6">

@foreach($allblogs as $item)

<div class="flex gap-4">

<img
src="{{ asset('blogs/'.$item->image) }}"
class="w-16 h-16 rounded object-cover"
/>

<div>

<a href="{{ route('blogs.show',$item->slug) }}" class="text-sm hover:text-blue-400">
{{ $item->title }}
</a>

<span class="text-gray-400 text-xs">
{{ \Carbon\Carbon::parse($item->published_at)->format('M d, Y') }}
</span>

</div>

</div>

@endforeach

</div>

</div>

</div>


<!-- CATEGORIES -->
<div>

<h3 class="text-xl font-semibold mb-6">
Categories
</h3>

<ul class="space-y-3 text-gray-400">

<li class="hover:text-blue-400 cursor-pointer">
Logistics
</li>

<li class="hover:text-blue-400 cursor-pointer">
Freight Forwarding
</li>

<li class="hover:text-blue-400 cursor-pointer">
Supply Chain
</li>

<li class="hover:text-blue-400 cursor-pointer">
Transportation
</li>

</ul>

</div>

</div>

</div>

</section>

@endsection