<!DOCTYPE html>
<html lang="en">
<head>


    @yield('styles')

</head>

<body>

{{-- header --}}

@include('includes.header')

{{-- content --}}

@yield('content')

<div class="clearfix"></div>

{{-- footer --}}

@include('includes.footer')

{{-- scripts --}}

@yield('scripts')

</body>
</html>
