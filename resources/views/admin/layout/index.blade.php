<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="{{url('admin')}}/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{url('admin')}}/assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('admin')}}/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('admin')}}/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
  @include('admin.layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include("admin.layout.sidebar")
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         @yield("content")
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include("admin.layout.footer")
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{url('admin')}}/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('admin')}}/assets/vendors/chart.js/chart.umd.js"></script>
  <script src="{{url('admin')}}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <!-- <script src="{{url('admin')}}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
  <script src="{{url('admin')}}/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="{{url('admin')}}/assets/js/dataTables.select.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('admin')}}/assets/js/off-canvas.js"></script>
  <script src="{{url('admin')}}/assets/js/template.js"></script>
  <script src="{{url('admin')}}/assets/js/settings.js"></script>
  <script src="{{url('admin')}}/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('admin')}}/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="{{url('admin')}}/assets/js/dashboard.js"></script>
  <!-- <script src="{{url('admin')}}/assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>