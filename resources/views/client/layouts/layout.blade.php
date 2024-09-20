<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>CookBuddy</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="client/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="client/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="client/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="client/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="client/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="client/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <link href="client/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!--    Main Content-->

    <main class="main" id="top">
      @include('client.layouts.header')


      @yield('content')


      <!-- ============================================-->
      <!-- <section> begin ============================-->
    @include('client.layouts.footer')
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="client/vendors/@popperjs/popper.min.js"></script>
    <script src="client/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="client/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="client/vendors/fontawesome/all.min.js"></script>
    <script src="client/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>
