<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Daftar laporan realisasi - Emonev Dashboard</title>
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
  <link rel="stylesheet" media="screen, print" href="dist/css/datagrid/datatables/datatables.bundle.css">
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
              <i class='subheader-icon fal fa-folder'></i> Daftar laporan realisasi
            </h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card border mb-g">
                <div class="card-header bg-fusion-500 pr-3 d-flex align-items-center flex-wrap">
                  <div class="card-title">Informasi</div>
                </div>
                
                <div class="card-body">
                  <table class="table m-0">

                    <tbody>
                      <tr>
                        <td>IKU</td>
                        <td>:</td>
                        <td>jumlah IKU</td>
                      </tr>
                      <tr>
                        <td>Program</td>
                        <td>:</td>
                        <td>jumlah program</td>
                      </tr>
                      <tr>
                        <td>Kegiatan</td>
                        <td>:</td>
                        <td>Jumlah kegiatan</td>
                      </tr>
                      <tr>
                        <td>Sub kegiatan</td>
                        <td>:</td>
                        <td>Jumlah sub kegiatan</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div id="panel-4" class="panel">
                <div class="panel-hdr">
                  <h2>Daftar laporan realisasi</h2>
                </div>
                <div class="panel-container show">
                  <div class="panel-content">
                    <p align="right">
                      <a href="cetak-laporan-akhir.php" target="blank" class="btn btn-success waves-effect waves-themed">
                        <span class="fal fa-print mr-1"></span>
                        Cetak Laporan
                      </a>
                    </p>
                    <table cellspacing="0" border="0" class="table-view-print w-100">
                      <colgroup span="24" width="64"></colgroup>
                      <tr>
                        <td class="view-print" colspan=12 height="20" align="center" valign=middle>
                        Realisasi Kinerja Pada Triwulan ...</td>
                        <td class="view-print" colspan=3 rowspan=2 align="center" valign=middle>Realisasi Capaian Kinerja dan Anggaran Renja SKPD Tahun 2020</td>
                        <td class="view-print" colspan=2 rowspan=2 align="center" valign=middle>Tingkat Capaian Kinerja dan Realisasi Anggaran Renja SKPD Tahun 2020 (%)</td>
                        <td class="view-print" colspan=3 rowspan=2 align="center" valign=middle>Realisasi Kinerja dan Anggaran Renstra SKPD s/d Akhir Tahun 2020</td>
                        <td class="view-print" colspan=2 rowspan=2 align="center" valign=middle>Tingkat Capaian Kinerja dan Realisasi Anggaran Renstra SKPD s/d Tahun 2021 (%)</td>
                        <td class="view-print" rowspan=3 align="center" valign=middle>Unit SKPD Penang-gung Jawab</td>
                        <td class="view-print" rowspan=3 align="center" valign=middle>Ket </td>
                      </tr>
                      <tr>
                        <td class="view-print" colspan=3 height="20" align="center" valign=middle>I</td>
                        <td class="view-print" colspan=3 align="center" valign=middle>II</td>
                        <td class="view-print" colspan=3 align="center" valign=middle>III</td>
                        <td class="view-print" colspan=3 align="center" valign=middle>IV</td>
                      </tr>
                      <tr>
                        <td class="view-print" colspan=2 height="20" align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle > Rp. (000) </td>
                        <td class="view-print" colspan=2 align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle > Rp. (000) </td>
                        <td class="view-print" colspan=2 align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle>Rp. (000)</td>
                        <td class="view-print" colspan=2 align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle>Rp. (000)</td>
                        <td class="view-print" colspan=2 align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle > Rp. (000) </td>
                        <td class="view-print" align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle > Rp. </td>
                        <td class="view-print" colspan=2 align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle > Rp. (000) </td>
                        <td class="view-print" align="center" valign=middle>K</td>
                        <td class="view-print" align="center" valign=middle>Rp.</td>
                      </tr>
                      <tr>
                        <td class="view-print" colspan=3 height="20" align="center" valign=middle sdval="8">8</td>
                        <td class="view-print" colspan=3 align="center" valign=middle sdval="9" >9</td>
                        <td class="view-print" colspan=3 align="center" valign=middle sdval="10" >10</td>
                        <td class="view-print" colspan=3 align="center" valign=middle sdval="11" >11</td>
                        <td class="view-print" colspan=3 align="center" valign=middle>12 = 8+9+10+11</td>
                        <td class="view-print" colspan=2 align="center" valign=middle>13 = 12/7*100</td>
                        <td class="view-print" colspan=3 align="center" valign=middle>14 = 6 + 12</td>
                        <td class="view-print" colspan=2 align="center" valign=middle>15 = 14/5*100</td>
                        <td class="view-print" align="center" valign=middle sdval="16" >16</td>
                        <td class="view-print" align="center" valign=middle sdval="17" >17</td>
                      </tr>
                      <tr>
                        <td class="view-print" height="20" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top ><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="right" valign=top ><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top ><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top ><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top ><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                        <td class="view-print" align="left" valign=top><br></td>
                      </tr>
                      <tr>
                        <td class="view-print" height="20" align="center" valign=top sdval="0"><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b> - </b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b> - </b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b> - </b></td>
                        <td class="view-print" align="right" valign=top><b><br></b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b> - </b></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b> - </b></td>
                        <td class="view-print" align="center" valign=top sdval="0"><b>text</b></td>
                        <td class="view-print" align="center" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="left" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="center" valign=top sdval="0"><b>text</b></td>
                        <td class="view-print" align="left" valign=middle><b><br></b></td>
                        <td class="view-print" align="center" valign=middle><b><br></b></td>
                      </tr>
                      <tr>
                        <td class="view-print" height="20" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="right" valign=top><b><br></b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="center" valign=top sdval="0"><b>text</b></td>
                        <td class="view-print" align="center" valign=middle ><b><br></b></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="left" valign=top><b>%</b></td>
                        <td class="view-print" align="center" valign=middle ><br></td>
                        <td class="view-print" align="right" valign=top sdval="0" ><b>text</b></td>
                        <td class="view-print" align="center" valign=middle><b><br></b></td>
                        <td class="view-print" align="left" valign=middle><b><br></b></td>
                        <td class="view-print" align="center" valign=middle><b><br></b></td>
                      </tr>
                    </table>
                    <!-- ************************************************************************** -->

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
          <script src="dist/js/datagrid/datatables/datatables.bundle.js"></script>
          <script src="dist/js/set-datatable-lap.js"></script>
          <script src="dist/js/notifications/sweetalert2/sweetalert2.bundle.js"></script>
          <script src="dist/js/set-sweetalert2.js"></script>
        </body>
        </html>