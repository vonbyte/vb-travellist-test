<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{isset($pageTitle) ? $pageTitle . ' | ' : ''}}{{__('admin.title')}}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>
<body>
<div>
    <nav>
        @include('layouts.navigation')
    </nav>

    <!-- Page Heading -->
    @if (isset($header))
        <header>
            <div>
                {{ $header }}
            </div>
        </header>
    @endif
    <main>
        {{ $slot }}
    </main>
    <footer></footer>
</div>
</body>
</html>

