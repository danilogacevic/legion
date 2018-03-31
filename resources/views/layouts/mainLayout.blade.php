<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="corporate html template - agency theme - business html template - creative theme - portfolio html template - gallery theme - restaurant theme - ecommerce template - app template - landing page - real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency, corporate, business, app and creative portfolio, it is suitable for any kind of websites, like ecommerce, restaurant, photography, gallery and retail website.">
    <meta name="author" content="encodeslife">
    <link rel="icon" href="img/favicon.png">

    <title>Ecada - Responsive Multipurpose Template</title>

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
