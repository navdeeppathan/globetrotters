@extends('admin.layouts.admin')

@section('content')

<div class="max-w-3xl mx-auto py-16">

<h1 class="text-3xl font-bold mb-8">
Edit Blog
</h1>

<form method="POST"
action="{{ route('admin.blogs.update',$blog->id) }}"
enctype="multipart/form-data"
class="space-y-6">

@csrf
@method('PUT')


<input type="text"
name="title"
value="{{ $blog->title }}"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">


<textarea name="description"
rows="6"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">{{ $blog->description }}</textarea>


<input type="file"
name="image"
class="">


<input type="date"
name="published_at"
value="{{ $blog->published_at }}"
class="bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">


<button class="bg-blue-600 px-6 py-3 rounded text-white">
Update Blog
</button>

</form>

</div>

@endsection