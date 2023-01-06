<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.include.head')

<body>
    <div id="root">
        @include('layouts.include.header')
        @include('layouts.include.preloader')

        @yield('content')

        @include('layouts.include.footer')

        @include('layouts.include.modals')
    </div>
</body>

</html>
