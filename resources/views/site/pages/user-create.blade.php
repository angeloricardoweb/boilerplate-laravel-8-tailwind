@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')


    <h1 class="mt-2 mb-4">Criar novo usuário</h1>

    <form action="{{ route('users.store') }}" class="flex flex-col gap-2 w-64" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name" class="ring-2 p-2 " value="{{ old('name') }}">
        <input type="email" placeholder="email" name="email" class="ring-2 p-2 " value="{{ old('email') }}">
        <input type="password" placeholder="password" name="password" class="ring-2 p-2 " value="{{ old('password') }}">
        <button type="submit" class="p-2 ring bg-zinc-600 text-white">Criar</button>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>


@endsection
