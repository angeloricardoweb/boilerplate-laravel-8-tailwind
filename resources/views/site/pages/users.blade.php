@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')


    <h1 class="mt-2">users</h1>

    <div class="flex flex-col gap-2">

        @foreach ($users as $user)
            <div>
                <a href="{{ route('users.show', $user->id) }}" class="p-2 bg-zinc-300 w-64">{{ $user->name }} ></a> <a
                    href="{{ route('users.edit', $user->id) }}"> Editar</a>
            </div>
        @endforeach
    </div>

@endsection
