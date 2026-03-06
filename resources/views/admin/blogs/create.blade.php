@extends('admin.layouts.admin')

@section('content')

<div class="max-w-3xl mx-auto py-16">

<h1 class="text-3xl  font-bold mb-8">
Create Blog
</h1>

<form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data" class="space-y-6">

@csrf

<label for="title" class="block text-sm font-medium leading-6 text-gray-900">Blog Title</label>
<input type="text"
name="title"
placeholder="Blog Title"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">

<label for="description" class="block text-sm font-medium leading-6 text-gray-900">Blog Description</label>
<textarea name="description"
id="description"
rows="6"
placeholder="Blog Description"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white"></textarea>


<input type="file"
name="image"
class="">


<input type="date"
name="published_at"
class="bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">


<label for="short_description" class="block text-sm font-medium leading-6 text-gray-900">Short Description</label>
<textarea name="short_description"
id="short_description"
rows="3"
placeholder="Short Description"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white"></textarea>


<label for="challanges" class="block text-sm font-medium leading-6 text-gray-900">Challanges</label>
<textarea 
name="challanges"
id="challanges"
placeholder="Enter Challanges"
rows="6"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">
</textarea>

<label for="quote" class="block text-sm font-medium leading-6 text-gray-900">Quote</label>
<textarea name="quote"
rows="3"
placeholder="Quote"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white"></textarea>


<label for="author_name" class="block text-sm font-medium leading-6 text-gray-900">Author Name</label>
<input type="text"
name="author_name"
placeholder="Author Name"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">

<label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
<select 
name="category"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">

<option value="">Select Category</option>

<option value="Logistics" {{ old('category',$blog->category ?? '') == 'Logistics' ? 'selected' : '' }}>Logistics</option>

<option value="Freight Forwarding" {{ old('category',$blog->category ?? '') == 'Freight Forwarding' ? 'selected' : '' }}>Freight Forwarding</option>

<option value="Supply Chain" {{ old('category',$blog->category ?? '') == 'Supply Chain' ? 'selected' : '' }}>Supply Chain</option>

<option value="Transportation" {{ old('category',$blog->category ?? '') == 'Transportation' ? 'selected' : '' }}>Transportation</option>

</select>

<label for="bio" class="block text-sm font-medium leading-6 text-gray-900">Author Bio</label>
<textarea name="bio"
rows="3"
placeholder="Author Bio"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white"></textarea>

<label for="fb_link" class="block text-sm font-medium leading-6 text-gray-900">Facebook Link</label>
<input type="text"
name="fb_link"
placeholder="Facebook Link"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">

<label for="twitter" class="block text-sm font-medium leading-6 text-gray-900">Twitter Link</label>
<input type="text"
name="twitter"
placeholder="Twitter Link"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">

<label for="linkedin" class="block text-sm font-medium leading-6 text-gray-900">LinkedIn Link</label>
<input type="text"
name="linkedin"
placeholder="LinkedIn Link"
class="w-full bg-[#0f1620] border border-[#1d2a3a] p-3 rounded text-white">


<button class="bg-blue-600 px-6 py-3 rounded text-white">
Create Blog
</button>

</form>

</div>


<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('challanges');
    CKEDITOR.replace('description');
    CKEDITOR.replace('short_description');
</script>
@endsection