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

    @yield('content')

    <footer>
        @component('site.components.footer')
        @endcomponent
    </footer>

    @component('site.layout.scripts')
    @endcomponent


</body>

</html>
