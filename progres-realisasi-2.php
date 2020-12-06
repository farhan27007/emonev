<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Progres Realisasi - Emonev Dashboard</title>
  <meta name="description" content="Marketing Dashboard">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
  <!-- Call App Mode on ios devices -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Remove Tap Highlight on Windows Phone IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <!-- base css -->
  <link rel="stylesheet" media="screen, print" href="dist/css/vendors.bundle.css">
  <link rel="stylesheet" media="screen, print" href="dist/css/app.bundle.css">
  <link rel="stylesheet" media="screen, print" href="dist/css/notifications/sweetalert2/sweetalert2.bundle.css">
  <!-- Place favicon.ico in the root directory -->
</head>
<body class="mod-bg-1 ">
  <script src="dist/js/set-dash.js"></script>
  <!-- BEGIN Page Wrapper -->
  <div class="page-wrapper">
    <div class="page-inner">
      <!-- include sidebar -->
      <?php include 'template/sidebar.php'; ?>
      <!-- include sidebar -->
      <div class="page-content-wrapper">
        <!-- include Page Header -->
        <?php include 'template/top-bar.php'; ?>
        <!-- include Page Header -->
        <!-- BEGIN Page Content -->
        <!-- the #js-page-content id is needed for some plugins to initialize -->
        <main id="js-page-content" role="main" class="page-content">
          <ol class="breadcrumb page-breadcrumb pb-3 mt-2">
            <li class="position-absolute pos-top  d-none d-sm-block">
              <span class="js-get-date"></span>
            </li>
          </ol>
          <div class="subheader">
            <h1 class="subheader-title">
              <i class='subheader-icon fal fa-building'></i>OPD Terpilih : Dinas Perhubungan
            </h1>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="panel-4" class="panel">
                <div class="panel-hdr">
                  <h2>Dinas Perhubungan</h2>
                </div>
                <div class="panel-container show">
                  <div class="panel-content">
                    <div class="row">

                      <div class="col-12 mb-4">
                        <a href="#" class="btn btn-block btn-lg btn-success waves-effect waves-themed">
                          <span class="fal fa-chart-line mr-2"></span>
                          Progress Program
                        </a>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                        <a href="#" class="btn btn-block btn-lg btn-danger waves-effect waves-themed">
                          <span class="fal fa-chart-line mr-2"></span>
                          Progress Sub Kegiatan
                        </a>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                        <a href="#" class="btn btn-block btn-lg btn-info waves-effect waves-themed">
                          <span class="fal fa-chart-line mr-2"></span>
                          Progress Kegiatan
                        </a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </main>
          <!-- this overlay is activated only when mobile menu is triggered -->
          <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
          <!-- BEGIN Page Footer -->
          <?php include 'template/footer.php'; ?>
          <!-- END Page Footer -->
          <?php include 'template/shortcut.php'; ?>

          <script src="dist/js/vendors.bundle.js"></script>
          <script src="dist/js/app.bundle.js"></script>
          <script type="text/javascript">
            /* Activate smart panels */
            $('#js-page-content').smartPanel();

          </script>
          <script src="dist/js/statistics/peity/peity.bundle.js"></script>
          <script src="dist/js/statistics/flot/flot.bundle.js"></script>
          <script src="dist/js/statistics/easypiechart/easypiechart.bundle.js"></script>
          <script src="dist/js/notifications/sweetalert2/sweetalert2.bundle.js"></script>
          <script src="dist/js/set-sweetalert2.js"></script>
        </body>
        </html>
