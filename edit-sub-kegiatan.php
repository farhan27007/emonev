    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Edit sub kegiatan - Emonev Dashboard</title>
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
        <link rel="stylesheet" media="screen, print" href="dist/css/formplugins/select2/select2.bundle.css">
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
                                <i class='subheader-icon fal fa-pencil'></i> Edit sub kegiatan
                            </h1>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div id="panel-4" class="panel">
                                <div class="panel-hdr">
                                    <h2>Edit sub kegiatan</h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">

                                        <!-- form start -->

                                        <div class="row">

                                            <div class="col-12 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Kode sub kegiatan</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Kode sub kegiatan...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Nama sub kegiatan</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Nama sub kegiatan...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Kode kegiatan
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-kegiatan">
                                                        <option value="AK">KG001</option>
                                                        <option value="HI">KG002</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Kode OPD
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default">
                                                        <option value="AK">OPD01</option>
                                                        <option value="HI">OPD02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Sub OPD
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-1">
                                                        <option value="AK">SUB 01</option>
                                                        <option value="HI">SUB 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Urusan 
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-2">
                                                        <option value="AK">Urusan 01</option>
                                                        <option value="HI">Urusan 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Bidang
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-3">
                                                        <option value="AK">Bidang 01</option>
                                                        <option value="HI">Bidang 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Unit 
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-4">
                                                        <option value="AK">Unit 01</option>
                                                        <option value="HI">Unit 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Sub unit 
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-5">
                                                        <option value="AK">Sub unit 01</option>
                                                        <option value="HI">Sub unit 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="single-default">
                                                        Program
                                                    </label>
                                                    <select class="select2 form-control w-100" id="single-default-6">
                                                        <option value="AK">Program 01</option>
                                                        <option value="HI">Program 02</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Pagu</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Pagu...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Pagu akumulatif</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Pagu akumulatif...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Indikator</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan indikator...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Target angka</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Target angka...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Target satuan</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Target satuan...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Lokasi</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Lokasi...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Pagu renstra</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Pagu renstra...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Pagu NT 1</label>
                                                    <input type="number" class="form-control" placeholder="Masukkan Pagu NT 1...">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-3 mt-3">
                                                <div class="form-group">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Keterangan...">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="button" class="btn btn-success waves-effect waves-themed float-right mt-3 mb-3">
                                                    <span class="fal fa-save mr-1"></span>
                                                    Simpan
                                                </button>
                                            </div>

                                        </div>
                                        <!-- form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>

                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> 
                    <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                    <?php include 'template/footer.php'; ?>
                    <!-- END Page Footer -->
                    <?php include 'template/shortcut.php'; ?>
                </div>
            </div>
            <script src="dist/js/vendors.bundle.js"></script>
            <script src="dist/js/app.bundle.js"></script>
            <script src="dist/js/formplugins/select2/select2.bundle.js"></script>
            <script type="text/javascript">
                /* Activate smart panels */
                $('#js-page-content').smartPanel();
            </script>
            <script src="dist/js/set-select2.js"></script>
            <script src="dist/js/statistics/peity/peity.bundle.js"></script>
            <script src="dist/js/statistics/flot/flot.bundle.js"></script>
            <script src="dist/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        </body>
        </html>