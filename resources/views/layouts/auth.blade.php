<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.include.head')

<body>
    <div>
        @include('layouts.include.preloader')
        @if (session()->has('message'))
            {{ session('message') }}
        @endif
        @yield('content')
    </div>
</body>

</html>
