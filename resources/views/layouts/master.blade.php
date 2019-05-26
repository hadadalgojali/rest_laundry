<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ $title }}</title>
  <!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=ruby&amp;skin=sunburst"></script> -->
  <script src="{{URL::to('/')}}/js/run_prettify.js?skin=sunburst"></script>
  <!--
  SKIN CODE PRETTIFY
    Default
    Desert
    sunburst
    sons-of-obsidian
  -->
  <!-- Bootstrap core CSS -->
  <link href="{{URL::to('/')}}/template-bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Toast CSS -->
  <link href="{{URL::to('/')}}/toast/build/toastr.css" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="{{URL::to('/')}}/template-bootstrap/css/simple-sidebar.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="/">Restful - Laundry</a>
      </div>
      @include('layouts/partials/sidebar')
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div> -->
      </nav>

      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <!-- core JQuery -->
  <script src="{{URL::to('/')}}/jquery/external/jquery/jquery.js"></script>
  <script src="{{URL::to('/')}}/jquery/jquery-ui.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::to('/')}}/toast/toastr.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::to('/')}}/template-bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="{{URL::to('/')}}/template-bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- JS App -->
  <script src="{{URL::to('/')}}/js/general.js"></script>

</body>
</html>
