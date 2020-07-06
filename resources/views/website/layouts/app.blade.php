<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.layouts.meta')
    @yield('style')
</head>

<body>

@include('website.partials.nav')

<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('frontend/img/home-bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                   @yield('heading')
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    @yield('content')
</div>

<hr>

@include('website.partials.footer')

@include('website.layouts.scripts')
@yield('scripts')

</body>

</html>
