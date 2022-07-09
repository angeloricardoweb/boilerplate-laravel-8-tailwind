@extends('templates.site')
@section('title', 'Laravel 8 - Tailwind')
@section('content')

    <h1 class="mt-2">user {{ $id }}</h1>



@endsection


<script>
    console.log(typeof {{ $id }})
</script>
