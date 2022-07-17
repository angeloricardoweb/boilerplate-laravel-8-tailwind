<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @component('site.layout.head')
    @endcomponent
</head>

<body>
    <header>
        @component('site.components.header')
        @endcomponent
    </header>
    <main class="container mx-auto px-2">

        @yield('content')
    </main>

    <footer>
        @component('site.components.footer')
        @endcomponent
    </footer>

    @component('site.layout.scripts')
    @endcomponent


</body>

</html>
