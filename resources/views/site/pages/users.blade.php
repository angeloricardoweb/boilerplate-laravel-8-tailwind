@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')

    <h1 class="mt-2">users</h1>

    @foreach ($users as $user)
        <h2>{{ $user->name }}</h2>
    @endforeach

@endsection
