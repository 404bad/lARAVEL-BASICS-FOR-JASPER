@extends('layouts.app')

@section('title', 'Users')

@section('content')
	<h1 class="text-3xl font-semibold text-slate-950">
		@isset($name)
			Welcome, {{ $name }}! this is user controller
		@else
			Users
		@endisset
	</h1>
@endsection