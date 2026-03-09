@extends('admin.layouts.admin')

@section('content')

<div class="p-6">

<h1 class="text-3xl font-bold mb-8">
Welcome {{ auth()->user()->name }}
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

<!-- Total Blogs -->
<a href="{{ route('admin.blogs.index') }}">
<div class="bg-white rounded-xl shadow p-6 border">
<h2 class="text-gray-500 text-sm">Total Blogs</h2>
<p class="text-3xl font-bold mt-2">{{ $totalBlogs }}</p>
</div>
</a>

<!-- Published Blogs -->
<a href="{{ route('admin.blogs.index') }}">
<div class="bg-green-50 rounded-xl shadow p-6 border border-green-200">
<h2 class="text-gray-500 text-sm">Published Blogs</h2>
<p class="text-3xl font-bold mt-2 text-green-600">{{ $publishedBlogs }}</p>
</div>
</a>

<!-- Draft Blogs -->
<a href="{{ route('admin.blogs.index') }}">
<div class="bg-yellow-50 rounded-xl shadow p-6 border border-yellow-200">
<h2 class="text-gray-500 text-sm">Draft Blogs</h2>
<p class="text-3xl font-bold mt-2 text-yellow-600">{{ $draftBlogs }}</p>
</div>
</a>

<!-- Contact Messages -->
<a href="{{ route('admin.messages') }}">
<div class="bg-blue-50 rounded-xl shadow p-6 border border-blue-200">
<h2 class="text-gray-500 text-sm">Contact Messages</h2>
<p class="text-3xl font-bold mt-2 text-blue-600">{{ $totalMessages }}</p>
</div>
</a>

</div>




</div>

@endsection