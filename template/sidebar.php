 <aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <span class="page-logo-text mr-1">Emonev Dashboard</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="dist/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        Dr. Codex Lantern
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">Super admin</span>
            </div>
            <img src="dist/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>


        <ul id="js-nav-menu" class="nav-menu">
            <li>
               <a href="admin.php" title="Dashboard" data-filter-tags="Dashboard">
                <i class="fal fa-home"></i>
                <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#" title="Manajemen user" data-filter-tags="Manajemen user">
                <i class="fal fa-user-alt"></i>
                <span class="nav-link-text" data-i18n="Manajemen user">Manajemen User</span>
            </a>
            <ul>
                <li>
                    <a href="daftar-user.php" title="daftar-user" data-filter-tags="daftar-user">
                        <span class="nav-link-text" data-i18n="daftar-user">Daftar user</span>
                    </a>
                </li>
                <li>
                    <a href="tambah-user.php" title="tambah-user" data-filter-tags="tambah-user-user">
                        <span class="nav-link-text" data-i18n="tambah-user">Tambah user</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" title="Manajemen user" data-filter-tags="Manajemen user">
                <i class="fal fa-archive"></i>
                <span class="nav-link-text" data-i18n="Manajemen user">Data Kegiatan</span>
            </a>
            <ul>
                <li>
                    <a href="daftar-kegiatan.php" title="daftar-user" data-filter-tags="daftar-user">
                        <span class="nav-link-text" data-i18n="daftar-user">Daftar kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="tambah-kegiatan.php" title="tambah-user" data-filter-tags="tambah-user-user">
                        <span class="nav-link-text" data-i18n="tambah-user">Tambah kegiatan</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" title="Manajemen user" data-filter-tags="Manajemen user">
                <i class="fal fa-file-alt"></i>
                <span class="nav-link-text" data-i18n="Manajemen user">Data Sub Kegiatan</span>
            </a>
            <ul>
                <li>
                    <a href="daftar-sub-kegiatan.php" title="daftar-user" data-filter-tags="daftar-user">
                        <span class="nav-link-text" data-i18n="daftar-user">Daftar sub kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="tambah-sub-kegiatan.php" title="tambah-user" data-filter-tags="tambah-user-user">
                        <span class="nav-link-text" data-i18n="tambah-user">Tambah sub kegiatan</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <div class="filter-message js-filter-message bg-success-600"></div>
</nav>
<!-- END PRIMARY NAVIGATION -->

</aside>