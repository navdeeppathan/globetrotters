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

<label for="title" class="block text-sm font-medium leading-6 ">Blog Title</label>

<input type="text"
name="title"
value="{{ $blog->title }}"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">

<label for="description" class="block text-sm font-medium leading-6 ">Description</label>

<textarea name="description"
id="description"
rows="6"
class="w-full  p-3 rounded text-white">{{ $blog->description }}</textarea>


<input type="file"
name="image"
class="">


<input type="date"
name="published_at"
value="{{ \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') }}"
class="bg-white border border-gray-300 p-3 rounded text-black">



<label for="short_description" class="block text-sm font-medium leading-6 ">Short Description</label>
<textarea name="short_description"
id="short_description"
rows="3"
placeholder="Short Description"
class="w-full  p-3 rounded text-white">{{ $blog->short_description }}</textarea>


<label for="challanges" class="block text-sm font-medium leading-6 ">Challanges</label>
<textarea 
name="challanges"
id="challanges"
placeholder="Enter Challanges"
rows="6"
class="w-full  p-3 rounded text-white">
{{ $blog->challanges }}
</textarea>

<label for="quote" class="block text-sm font-medium leading-6 ">Quote</label>
<textarea name="quote"
rows="3"
placeholder="Quote"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">{{ $blog->quote }}</textarea>


<label for="author_name" class="block text-sm font-medium leading-6 ">Author Name</label>
<input type="text"
name="author_name"
value = "{{ $blog->author_name }}"
placeholder="Author Name"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">

<label for="category" class="block text-sm font-medium leading-6 ">Category</label>
<select 
name="category"
value = "{{ $blog->category }}"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">

<option value="">Select Category</option>

<option value="Logistics" {{ old('category',$blog->category ?? '') == 'Logistics' ? 'selected' : '' }}>Logistics</option>

<option value="Freight Forwarding" {{ old('category',$blog->category ?? '') == 'Freight Forwarding' ? 'selected' : '' }}>Freight Forwarding</option>

<option value="Supply Chain" {{ old('category',$blog->category ?? '') == 'Supply Chain' ? 'selected' : '' }}>Supply Chain</option>

<option value="Transportation" {{ old('category',$blog->category ?? '') == 'Transportation' ? 'selected' : '' }}>Transportation</option>

</select>

<label for="bio" class="block text-sm font-medium leading-6 ">Author Bio</label>
<textarea name="bio"
rows="3"
placeholder="Author Bio"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">{{ $blog->bio }}</textarea>

<label for="fb_link" class="block text-sm font-medium leading-6 ">Facebook Link</label>
<input type="text"
name="fb_link"
value = "{{ $blog->fb_link }}"
placeholder="Facebook Link"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">

<label for="twitter" class="block text-sm font-medium leading-6 ">Twitter Link</label>
<input type="text"
name="twitter"
value = "{{ $blog->twitter }}"
placeholder="Twitter Link"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">

<label for="linkedin" class="block text-sm font-medium leading-6 ">LinkedIn Link</label>
<input type="text"
name="linkedin"
value = "{{ $blog->linkedin }}"
placeholder="LinkedIn Link"
class="w-full bg-white border border-gray-300 p-3 rounded text-black">



<button class="bg-blue-600 px-6 py-3 rounded text-white">
Update Blog
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