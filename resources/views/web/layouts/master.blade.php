<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MH Apparel | Fabric & Apparel Manufacturers</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/web/images/favicon.ico') }}">

    @include('web.inc.styles')
</head>
<body>

<!-- start loading -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div>
<!-- end loading -->

@include('web.inc.header')

<main>
    @yield('content')
</main>

@include('web.inc.footer')

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

@include('web.inc.scripts')

</body>
</html>
