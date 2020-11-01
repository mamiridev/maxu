<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:36:49 GMT -->
<head>
    <!-- VENDOR CSS -->
  @include('admin.layout.styles');

</head>
<body class="theme-orange">

<!-- Page Loader -->

<!-- Theme Setting -->
@include('admin.layout.themesetting');

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    @include('admin.layout.navbar');

    @include('admin.layout.megamenu');
    @include('admin.layout.rightbar');

    @include('admin.layout.left-sidebar');
    @yield('layouts')

</div>

<!-- Javascript -->
    @include('admin.layout.script');
</body>


<!-- Mirrored from paradigm-shift.ir/Brego/brego/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:37:15 GMT -->
</html>
