@extends('admin.layouts.admin')
@section('content')

<div class="text-center">

<h1 class="text-4xl font-bold mb-6">
Welcome {{ auth()->user()->name }}
</h1>

<form method="POST" action="{{ route('logout') }}">
@csrf

<button class="bg-red-500 px-6 py-3 rounded">
Logout
</button>

</form>

</div>

@endsection