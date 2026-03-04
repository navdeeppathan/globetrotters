@extends('admin.layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

<div class="flex justify-between items-center mb-8">

<h1 class="text-3xl font-bold">
Blogs
</h1>

<a href="{{ route('admin.blogs.create') }}"
class="bg-blue-600 px-5 py-2 rounded  hover:bg-blue-500">
Create Blog
</a>

</div>


<div class="grid md:grid-cols-3 gap-8">

@foreach($blogs as $blog)

<div class="group bg-[#0f1620] border border-[#1d2a3a] rounded-xl overflow-hidden">

<img src="{{ asset('blogs/'.$blog->image) }}"
class="w-full h-[200px] object-cover group-hover:scale-110 transition duration-500">


<div class="p-6">

<p class="text-blue-400 text-sm mb-2">
{{ $blog->published_at }}
</p>

<h3 class="text-white text-xl font-semibold mb-3">
{{ $blog->title }}
</h3>

<p class="text-gray-400 text-sm mb-5">
{{ Str::limit($blog->description,120) }}
</p>


<div class="flex gap-4">

<a href="{{ route('admin.blogs.edit',$blog->id) }}"
class="text-blue-400 hover:text-blue-300">
Edit
</a>

<form method="POST"
action="{{ route('admin.blogs.destroy',$blog->id) }}">

@csrf
@method('DELETE')

<button class="text-red-400 hover:text-red-300">
Delete
</button>

</form>

</div>

</div>

</div>

@endforeach

</div>

</div>

@endsection