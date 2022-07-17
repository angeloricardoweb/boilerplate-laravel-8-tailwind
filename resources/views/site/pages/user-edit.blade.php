@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')


    <h1 class="mt-2 mb-4">Editar o usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" class="flex flex-col gap-2 w-64" method="POST">
        @method('PUT')
        @csrf
        <input type="text" placeholder="name" name="name" class="ring-2 p-2 " value="{{ $user->name }}">
        <input type="email" placeholder="email" name="email" class="ring-2 p-2 " value="{{ $user->email }}">
        <input type="password" placeholder="password" name="password" class="ring-2 p-2 " value="{{ old('password') }}">
        <button type="submit" class="p-2 ring bg-zinc-600 text-white">Editar</button>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>


@endsection
