<header class="page-header" role="banner">
    <!-- we need this logo when user switches to nav-function-top -->
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <span class="page-logo-text mr-1">Emonev Dashboard</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- DOC: nav menu layout change shortcut -->
    <div class="hidden-md-down dropdown-icon-menu position-relative">
        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
            <i class="ni ni-menu"></i>
        </a>
        <ul>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                    <i class="ni ni-minify-nav"></i>
                </a>
            </li>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                    <i class="ni ni-lock-nav"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- DOC: mobile button appears during mobile width -->
    <div class="hidden-lg-up">
        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
            <i class="ni ni-menu"></i>
        </a>
    </div>
    <div class="search">
        <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
            <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                <i class="fal fa-times"></i>
            </a>
        </form>
    </div>
    <div class="ml-auto d-flex">
        <!-- activate app search icon (mobile) -->
        <div class="hidden-sm-up">
            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                <i class="fal fa-search"></i>
            </a>
        </div>
        <!-- app settings -->
        <div class="hidden-md-down">
            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                <i class="fal fa-cog"></i>
            </a>
        </div>

        <div>
            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                <img src="dist/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="dist/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-reset">
                                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                    </a>
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Settings</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                        <div class="dropdown-item">
                                            Language
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                                            <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                            <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                                            <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                                            <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                                            <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fw-500 pt-3 pb-3" href="page_login-alt.html">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n">&commat;codexlantern</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>


                    <!--  -->
                    <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-right modal-md">
                            <div class="modal-content">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                                    <h4 class="m-0 text-center color-white">
                                        Layout Settings
                                        <small class="mb-0 opacity-80">User Interface Settings</small>
                                    </h4>
                                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="settings-panel">
                                        <div class="mt-4 d-table w-100 px-5">
                                            <div class="d-table-cell align-middle">
                                                <h5 class="p-0">
                                                    App Layout
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="list" id="fh">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                                            <span class="onoffswitch-title">Fixed Header</span>
                                            <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                                        </div>
                                        <div class="list" id="nff">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                                            <span class="onoffswitch-title">Fixed Navigation</span>
                                            <span class="onoffswitch-title-desc">left panel is fixed</span>
                                        </div>
                                        <div class="list" id="nfm">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                                            <span class="onoffswitch-title">Minify Navigation</span>
                                            <span class="onoffswitch-title-desc">Skew nav to maximize space</span>
                                        </div>
                                        <div class="list" id="nfh">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                                            <span class="onoffswitch-title">Hide Navigation</span>
                                            <span class="onoffswitch-title-desc">roll mouse on edge to reveal</span>
                                        </div>
                                        <div class="list" id="nft">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                                            <span class="onoffswitch-title">Top Navigation</span>
                                            <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                                        </div>
                                        <div class="list" id="mmb">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                                            <span class="onoffswitch-title">Boxed Layout</span>
                                            <span class="onoffswitch-title-desc">Encapsulates to a container</span>
                                        </div>
                                        <div class="expanded">
                                            <ul class="">
                                                <li>
                                                    <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                                </li>
                                                <li>
                                                    <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                                </li>
                                                <li>
                                                    <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                                </li>
                                                <li>
                                                    <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                                </li>
                                            </ul>
                                            <div class="list" id="mbgf">
                                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                                <span class="onoffswitch-title">Fixed Background</span>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-table w-100 px-5">
                                            <div class="d-table-cell align-middle">
                                                <h5 class="p-0">
                                                    Mobile Menu
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="list" id="nmp">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                                            <span class="onoffswitch-title">Push Content</span>
                                            <span class="onoffswitch-title-desc">Content pushed on menu reveal</span>
                                        </div>
                                        <div class="list" id="nmno">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                                            <span class="onoffswitch-title">No Overlay</span>
                                            <span class="onoffswitch-title-desc">Removes mesh on menu reveal</span>
                                        </div>
                                        <div class="list" id="sldo">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                                            <span class="onoffswitch-title">Off-Canvas <sup>(beta)</sup></span>
                                            <span class="onoffswitch-title-desc">Content overlaps menu</span>
                                        </div>
                                        <div class="mt-4 d-table w-100 px-5">
                                            <div class="d-table-cell align-middle">
                                                <h5 class="p-0">
                                                    Accessibility
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="list" id="mbf">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                                            <span class="onoffswitch-title">Bigger Content Font</span>
                                            <span class="onoffswitch-title-desc">content fonts are bigger for readability</span>
                                        </div>
                                        <div class="list" id="mhc">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                                            <span class="onoffswitch-title">High Contrast Text (WCAG 2 AA)</span>
                                            <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                                        </div>
                                        <div class="list" id="mcb">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                                            <span class="onoffswitch-title">Daltonism <sup>(beta)</sup> </span>
                                            <span class="onoffswitch-title-desc">color vision deficiency</span>
                                        </div>
                                        <div class="list" id="mpc">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                                            <span class="onoffswitch-title">Preloader Inside</span>
                                            <span class="onoffswitch-title-desc">preloader will be inside content</span>
                                        </div>
                                        <div class="mt-4 d-table w-100 px-5">
                                            <div class="d-table-cell align-middle">
                                                <h5 class="p-0">
                                                    Global Modifications
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="list" id="mcbg">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                                            <span class="onoffswitch-title">Clean Page Background</span>
                                            <span class="onoffswitch-title-desc">adds more whitespace</span>
                                        </div>
                                        <div class="list" id="mhni">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                            <span class="onoffswitch-title">Hide Navigation Icons</span>
                                            <span class="onoffswitch-title-desc">invisible navigation icons</span>
                                        </div>
                                        <div class="list" id="dan">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                                            <span class="onoffswitch-title">Disable CSS Animation</span>
                                            <span class="onoffswitch-title-desc">Disables CSS based animations</span>
                                        </div>
                                        <div class="list" id="mhic">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                            <span class="onoffswitch-title">Hide Info Card</span>
                                            <span class="onoffswitch-title-desc">Hides info card from left panel</span>
                                        </div>
                                        <div class="list" id="mlph">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                                            <span class="onoffswitch-title">Lean Subheader</span>
                                            <span class="onoffswitch-title-desc">distinguished page header</span>
                                        </div>
                                        <div class="list" id="mnl">
                                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                                            <span class="onoffswitch-title">Hierarchical Navigation</span>
                                            <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                                        </div>
                                        <div class="list mt-1">
                                            <span class="onoffswitch-title">Global Font Size <small>(RESETS ON REFRESH)</small> </span>
                                            <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                                    <input type="radio" name="changeFrontSize"> SM
                                                </label>
                                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                                    <input type="radio" name="changeFrontSize" checked=""> MD
                                                </label>
                                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                                    <input type="radio" name="changeFrontSize"> LG
                                                </label>
                                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                                    <input type="radio" name="changeFrontSize"> XL
                                                </label>
                                            </div>
                                            <span class="onoffswitch-title-desc d-block mb-g">Change <strong>root</strong> font size to effect rem values</span>
                                        </div>
                                        <div class="mt-2 d-table w-100 pl-5 pr-3">
                                            <div class="d-table-cell align-middle">
                                                <h5 class="p-0">
                                                    Theme colors <small>(overlays base css)</small>
                                                </h5>
                                                <div class="fs-xs text-muted p-2 alert alert-warning mt-3 mb-0">
                                                    <i class="fal fa-exclamation-triangle text-warning mr-2"></i>Due to network latency and CPU utilization, you may experience a brief flickering effect on page load which may show the intial applied theme for a split second. Setting the prefered style/theme in the header will prevent this from happening.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expanded theme-colors pl-5 pr-3">
                                            <ul class="m-0">
                                                <li><a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a></li>
                                                <li><a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a></li>
                                                <li><a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a></li>
                                                <li><a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a></li>
                                                <li><a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a></li>
                                                <li><a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a></li>
                                                <li><a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a></li>
                                                <li><a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a></li>
                                                <li><a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a></li>
                                                <li><a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a></li>
                                                <li><a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a></li>
                                                <li><a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a></li>
                                                <li><a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a></li>
                                                <li><a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="dist/css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a></li>
                                            </ul>
                                        </div>
                                        <hr class="mb-0 mt-4">
                                        <div class="pl-5 pr-3 py-3 bg-faded">
                                            <div class="row no-gutters">
                                                <div class="col-6 pr-1">
                                                    <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                                </div>
                                                <div class="col-6 pl-1">
                                                    <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="saving"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->