@extends('admin.layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

<h1 class="text-3xl font-bold  mb-8">
Contact Messages
</h1>

<div class="bg-[#0f1620] border border-[#1d2a3a] rounded-xl overflow-hidden">

<table class="w-full text-left">

<thead class="bg-[#0b0f14] text-gray-300">

<tr>

<th class="p-4">Name</th>
<th class="p-4">Email</th>
<th class="p-4">Subject</th>
<th class="p-4">Message</th>
<th class="p-4">Action</th>

</tr>

</thead>

<tbody>

@foreach($messages as $msg)

<tr class="border-t border-[#1d2a3a]">

<td class="p-4 text-white">{{ $msg->name }}</td>

<td class="p-4 text-gray-400">{{ $msg->email }}</td>

<td class="p-4 text-gray-400">{{ $msg->subject }}</td>

<td class="p-4 text-gray-400">{{ $msg->message }}</td>

<td class="p-4">

<form method="POST"
action="{{ route('admin.messages.delete',$msg->id) }}">

@csrf
@method('DELETE')

<button class="text-red-400 hover:text-red-300">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection