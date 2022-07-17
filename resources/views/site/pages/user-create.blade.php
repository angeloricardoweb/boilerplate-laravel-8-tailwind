@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')


    <h1 class="mt-2 mb-4">Criar novo usuário</h1>

    <form action="{{ route('users.store') }}" class="flex flex-col gap-2 w-64" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name" class="ring-2 p-2 ">
        <input type="email" placeholder="email" name="email" class="ring-2 p-2 ">
        <input type="password" placeholder="password" name="password" class="ring-2 p-2 ">
        <button type="submit" class="p-2 ring bg-zinc-600 text-white">Criar</button>
    </form>


@endsection
