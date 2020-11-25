<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Emonev Dashboard</title>
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
                            <i class='subheader-icon fal fa-chart-area'></i> Emonev <span class='fw-300'>Dashboard</span>
                            <small>
                            </small>
                        </h1>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xl-4">
                            <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        120
                                        <small class="m-0 l-h-n">Total kegiatan</small>
                                    </h3>
                                </div>
                                <i class="fal fa-clipboard-list position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-4">
                            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        150
                                        <small class="m-0 l-h-n">TOtal OPD</small>
                                    </h3>
                                </div>
                                <i class="fal fa-users position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-4">
                            <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        170
                                        <small class="m-0 l-h-n">Total realisasi</small>
                                    </h3>
                                </div>
                                <i class="fal fa-chart-bar position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                       Data realisasi bulan&nbsp;<b>Januari</b>
                                   </h2>
                               </div>
                               <div class="panel-container show">
                                <div class="panel-content bg-subtlelight-fade">
                                    <div id="js-checkbox-toggles" class="d-flex mb-3">
                                        <div class="custom-control custom-switch mr-2">
                                            <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0" checked="checked">
                                            <label class="custom-control-label" for="gra-0">Data realisasi</label>
                                        </div>
                                        <div class="custom-control custom-switch mr-2">
                                            <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1" checked="checked">
                                            <label class="custom-control-label" for="gra-1">Actual Profit</label>
                                        </div>
                                        <div class="custom-control custom-switch mr-2">
                                            <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2" checked="checked">
                                            <label class="custom-control-label" for="gra-2">User Signups</label>
                                        </div>
                                    </div>
                                    <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
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
            <script src="dist/js/set-chart.js"></script>
        </body>
        </html>
