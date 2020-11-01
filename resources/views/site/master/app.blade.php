<!DOCTYPE HTML>
<html lang="fa">
<head>
    @include('site.master.styles')
</head>
<body>
    <!-- menu area  -->
    @include('site.master.menu')
    <!-- END MENU AREA  -->

    <!-- MOBILE MENU -->
    @include('site.master.mobile-menu')
    <!-- END MOBILE MENU AREA  -->

    @yield('content')


    <!-- FOOTER MIDDLE AREA -->
    @include('site.master.footer')
    <!-- END FOOTER MIDDLE AREA -->

    @include('site.master.script')
</body>
</html>
