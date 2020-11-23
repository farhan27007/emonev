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
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2019 © Developed by&nbsp;<a href='#' class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>Blondev team</a></span>
                </div>
            </footer>
            <!-- END Page Footer -->
            <!-- BEGIN Shortcuts -->
            <!-- modal shortcut -->
            <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="app-list w-auto h-auto p-0 text-left">
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                            <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Inbox
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Add More
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- END Shortcuts -->
        </div>
    </div>
</div>
<!-- END Page Wrapper -->
<!-- BEGIN Quick Menu -->
<!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
<nav class="shortcut-menu d-none d-sm-block">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
        <i class="fal fa-arrow-up"></i>
    </a>
    <a href="page_login-alt.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
        <i class="fal fa-sign-out"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
        <i class="fal fa-expand"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
        <i class="fal fa-print"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
        <i class="fal fa-microphone"></i>
    </a>
</nav>
<!-- END Quick Menu -->

<!-- BEGIN Page Settings -->

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
