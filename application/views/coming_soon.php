<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Labotarium GOODTEST</title>

    <meta name="description" content="Goodtest">
    <meta name="author" content="goodtest">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Goodtest">
    <meta property="og:site_name" content="goodtest">
    <meta property="og:description" content="Goodtest ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= base_url('assets/admin/') ?>media/favicons/icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/admin/') ?>media/favicons/icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/admin/') ?>media/favicons/icon.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>js/plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>js/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>js/plugins/simplemde/simplemde.min.css">

    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/admin/') ?>css/oneui.min.css">


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('<?= base_url('assets/admin') ?>/media/hero-bg.jpg');">
                <div class="hero bg-primary-dark-op">
                    <div class="hero-inner">
                        <div class="content content-full bg-black-50">
                            <div class="row justify-content-center">
                                <div class="col-md-6 py-3 text-center">
                                    <div class="push">
                                        <a class="link-fx font-w700 font-size-h1" href="<?= base_url() ?>">
                                            <span class="text-white">COOMING SOON</span>
                                        </a>
                                        <p class="font-size-sm text-white-75">Tetap disini! Kami sedang mengerjakannya dan akan segera hadir!</p>
                                    </div>
                                    <a class="btn btn-sm btn-light" href="<?= base_url() ?>">
                                        <i class="fa fa-arrow-left mr-1"></i> Kembali Ke Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="<?= base_url('assets/admin') ?>/js/oneui.core.min.js"></script>

    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?= base_url('assets/admin') ?>/js/oneui.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?= base_url('assets/admin') ?>/js/plugins/jquery-countdown/jquery.countdown.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?= base_url('assets/admin') ?>/js/pages/op_coming_soon.min.js"></script>
</body>

</html>