<!DOCTYPE html>
<html lang="en">


<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title')</title>
  @include('layouts.master_partials.header')

</head>

<body class="ms-body ms-aside-left-open ms-dark-theme ms-has-quickbar">



  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  {{-- <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div> --}}

  <!-- Sidebar Navigation Left -->
  @include('layouts.master_partials.sidebar')



  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    @include('layouts.master_partials.navbar')


    <!-- Body Content Wrapper -->
    @yield('content')

</main>

  {{-- @include('layouts.master_partials.tasklist') --}}

  <!-- SCRIPTS -->
 @include('layouts.master_partials.footer')

</body>


</html>
