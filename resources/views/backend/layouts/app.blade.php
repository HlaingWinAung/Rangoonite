<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rangoon Teens Charity</title>

  @include('backend.layouts.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('backend.layouts.nav')


  <!-- Main Sidebar Container -->
  @include('backend.layouts.side-bar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          {{-- <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div> --}}
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
<<<<<<< HEAD
=======
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
>>>>>>> f6d5fcf (frontend customize)
            @yield('breadcrumb')

            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      @yield('content')
    </section>
  </div>

  {{-- footer --}}
  @include('backend.layouts.footer')


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

{{-- script --}}
@include('backend.layouts.script')

</body>
</html>
@yield('scripts')