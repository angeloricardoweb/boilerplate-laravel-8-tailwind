@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')



    <h1 class="mt-2 text-md"> {{ $user->name }}</h1>
    <h2 class="mt-2"> {{ $user->email }}</h2>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Deletar</button>
    </form>



@endsection
