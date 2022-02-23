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
       <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
           <!-- Sidebar -->
           <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
           <nav id="sidebar" aria-label="Main Navigation">
               <!-- Side Header -->
               <div class="content-header bg-white-5">
                   <!-- Logo -->
                   <a class="font-w600 text-dual" href="<?= base_url() ?>petugas/index">
                       <i class="fa fa-stethoscope text-primary"></i>
                       <span class="smini-hide">
                           <span class="font-w700 font-size-h5">GOODTEST</span>
                       </span>
                   </a>
                   <!-- END Logo -->

                   <!-- Options -->
                   <div>

                       <!-- Close Sidebar, Visible only on mobile screens -->
                       <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                       <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                           <i class="fa fa-times"></i>
                       </a>
                       <!-- END Close Sidebar -->
                   </div>
                   <!-- END Options -->
               </div>
               <!-- END Side Header -->

               <!-- Side Navigation -->
               <div class="content-side content-side-full">
                   <ul class="nav-main">
                       <li class="nav-main-item">
                           <a class="nav-main-link <?php if ($this->uri->segment('2') == 'index') {
                                                        echo 'active';
                                                    }
                                                    ?>" href="<?= base_url() ?>petugas/index">
                               <i class="nav-main-link-icon si si-speedometer"></i>
                               <span class="nav-main-link-name">Dashboard</span>
                           </a>
                       </li>
                       <li class="nav-main-heading">User Interface</li>
                       <li class="nav-main-item">
                           <a class="nav-main-link <?php if ($this->uri->segment('2') == 'janji_labo') {
                                                        echo 'active';
                                                    }
                                                    ?>" href="<?= base_url() ?>petugas/janji_labo">
                               <i class="nav-main-link-icon si si-paper-clip"></i>
                               <span class="nav-main-link-name">Janji Test</span>
                           </a>
                       </li>
                       <li class="nav-main-item">
                           <a class="nav-main-link <?php if ($this->uri->segment('2') == 'u_password') {
                                                        echo 'active';
                                                    }
                                                    ?>" href="<?= base_url() ?>petugas/u_password">
                               <i class="nav-main-link-icon fas fa-key"></i>
                               <span class="nav-main-link-name">Ubah Password</span>
                           </a>
                       </li>
                   </ul>
               </div>
               <!-- END Side Navigation -->
           </nav>
           <!-- END Sidebar -->

           <!-- Header -->
           <header id="page-header">
               <!-- Header Content -->
               <div class="content-header">
                   <!-- Left Section -->
                   <div class="d-flex align-items-center">
                       <!-- Toggle Sidebar -->
                       <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                       <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                           <i class="fa fa-fw fa-bars"></i>
                       </button>
                       <!-- END Toggle Sidebar -->

                       <!-- Toggle Mini Sidebar -->
                       <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                       <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                           <i class="fa fa-fw fa-ellipsis-v"></i>
                       </button>
                       <!-- END Toggle Mini Sidebar -->
                       <!-- Open Search Section (visible on smaller screens) -->
                   </div>
                   <!-- END Left Section -->

                   <!-- Right Section -->
                   <div class="d-flex align-items-center">
                       <!-- User Dropdown -->
                       <div class="dropdown d-inline-block ml-2">
                           <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img class="rounded" src="<?= base_url('assets/admin/') ?>media/favicons/icon.png" alt="Header Avatar" style="width: 18px;">
                               <span class="d-none d-sm-inline-block ml-1"><?= $this->session->userdata('nama'); ?></span>
                               <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                           </button>
                           <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                               <div class="p-3 text-center bg-primary">
                                   <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url('assets/admin/') ?>media/favicons/icon.png" alt="">
                               </div>
                               <div class="p-2">
                                   <div role="separator" class="dropdown-divider"></div>
                                   <h5 class="dropdown-header text-uppercase">Actions</h5>
                                   <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= base_url() ?>auth/logout">
                                       <span>Log Out</span>
                                       <i class="si si-logout ml-1"></i>
                                   </a>
                               </div>
                           </div>
                       </div>
                       <!-- END User Dropdown -->
                       <!-- END Toggle Side Overlay -->
                   </div>
                   <!-- END Right Section -->
               </div>
               <!-- END Header Content -->

               <!-- Header Loader -->
               <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
               <div id="page-header-loader" class="overlay-header bg-white">
                   <div class="content-header">
                       <div class="w-100 text-center">
                           <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                       </div>
                   </div>
               </div>
               <!-- END Header Loader -->
           </header>
           <!-- END Header -->