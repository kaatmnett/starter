<!doctype html>
<html lang="en">

@include('theme.partials.head')

<body>
    <!-- Start Navbar Section -->
    @include('theme.partials.nav')
    <!-- End Navbar Section -->

    <!-- Start Hero Section -->
    @include('theme.partials.hero')
    <!-- End Hero Section -->

    <!-- Start Different Content Section -->
    @yield('content')
    <!-- End Different Content Section -->


    <!-- Start Footer Section -->
    @include('theme.partials.footer')
    <!-- Start Footer Section -->

    <!-- Start Script Section -->
    @include('theme.partials.script')
    <!-- Start Script Section -->



</body>

</html>
