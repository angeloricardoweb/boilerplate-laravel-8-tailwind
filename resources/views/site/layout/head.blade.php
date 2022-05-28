<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Bredi - http://www.bredi.com.br">

<title>@yield('title')</title>

{{-- SEO --}}
@component('site.layout.seo')
@endcomponent


{{-- Site theme (PWA) --}}
<meta name="msapplication-navbutton-color" content="#FFFFFF" />
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
<meta name="theme-color" content="#FFFFFF">

{{-- Favicon --}}
{{-- Use a ferramenta https://favicon.io/ para gerar os ícones do site. --}}

<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
