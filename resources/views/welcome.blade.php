@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1 class="text-3xl font-semibold text-slate-950">
        @if (isset($name))
            Hello, {{ $name }}
        @else
            Welcome to About Page
        @endif
    </h1>
@endsection