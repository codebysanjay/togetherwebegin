<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Wizard | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="http://localhost/placement/assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!--  -->

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!--  -->

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/navbar.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top"><span class="logo-text">together we begin</span>
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top"><span class="logo-text">together we begin</span>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index">Home</a></li>
                        <li class="active"><a href="services">Services</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="statistics">Statistics</a></li>
                        <li><a href="login">Login</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
          </div>
          <div class="span8 hidden">
            <div style="padding-top: 40px;" class="navbar navbar-static-top">
              <div style="margin-top: -20px;margin-bottom: 20px;" class="navigation">
                <nav>
                  <ul style="display: flex;" class="nav topnav">
                    <li class="active">
                      <a href="index">Home</a>
                    </li>
                    <li>
                      <a href="services">Services</a>
                    </li>
                    <li>
                      <a href="contact">Contact Us</a>
                    </li>
                    <li>
                      <a href="statistics">Statistics</a>
                    </li>
                    <li>
                      <a href="login">Login</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
</div>


    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar hidden">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search hidden">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar hidden">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar hidden">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../../pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="../../pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="../../pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="../../pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="../../pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="../../pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="../../pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../../pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="../../pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="active">
                                <a href="../../pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="../../pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="../../pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.4
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar hidden">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>


<link href="<?php echo base_url(); ?>assets/formbsb/external/profile/profile.css" rel="stylesheet">

    <section class="content" style="margin: 50px;">

            
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Offer a Service | Spread Smile :)</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3><span class="hidden-xs">Company</span><span class="hidden-xs"> Details</span></h3>
                                <fieldset class="organization" style="padding-top: 30px;">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="fname" required>
                                                    <label class="form-label">First Name*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="lname" required>
                                                    <label class="form-label">Last Name*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="company" required>
                                                    <label class="form-label">Organization Name*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <input type="text" class="form-control" name="mobnum" required>
                                                    <label class="form-label">Contact Number*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select name="district" class="form-control show-tick" required="true">
                                                        <option selected disabled>District</option>
                                                        <option>Thiruvananthapuram</option>
                                                        <option>Kollam</option>
                                                        <option>Pathanamthitta</option>
                                                        <option>Alappuzha</option>
                                                        <option>Kottayam</option>
                                                        <option>Idukki</option>
                                                        <option>Ernakulam</option>
                                                        <option>Thrissur</option>
                                                        <option>Palakkad</option>
                                                        <option>Malappuram</option>
                                                        <option>Kozhikode</option>
                                                        <option>Wayanad</option>
                                                        <option>Kannur</option>
                                                        <option>Kasaragod</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <textarea name="permaddr" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                                    <label class="form-label">Address*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>

                                <h3><span class="hidden-xs">Service</span><span class="hidden-xs"> Details</span></h3>
                                <fieldset class="service" style="padding-top: 30px;">
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="district form-control show-tick" multiple data-live-search="true" data-selected-text-format="count" data-actions-box="true" name="district[]">
                                                        <option selected disabled>District/s of operation</option>
                                                        <option>Thiruvananthapuram</option>
                                                        <option>Kollam</option>
                                                        <option>Pathanamthitta</option>
                                                        <option>Alappuzha</option>
                                                        <option>Kottayam</option>
                                                        <option>Idukki</option>
                                                        <option>Ernakulam</option>
                                                        <option>Thrissur</option>
                                                        <option>Palakkad</option>
                                                        <option>Malappuram</option>
                                                        <option>Kozhikode</option>
                                                        <option>Wayanad</option>
                                                        <option>Kannur</option>
                                                        <option>Kasaragod</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="taluk form-control show-tick" multiple data-live-search="true" data-selected-text-format="count" data-actions-box="true" name="taluk[]">
                                                        <option selected disabled>Taluk/s of operation</option>
                                                        <!-- <optgroup class="thiruvananthapuram" label="Thiruvananthapuram">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Thiruvananthapuram</option>
                                                            <option>Neyyattinkara</option>
                                                            <option>Kattakkada</option>
                                                            <option>Nedumangadu</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Chirayinkeezhu</option>
                                                            <option>Varkala</option>
                                                        </optgroup>
                                                        <optgroup class="kollam"label="Kollam">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kollam</option>
                                                            <option>Kollam</option>
                                                            <option>Kunnathoor</option>
                                                            <option>Karunagappally</option>
                                                            <option>Kottarakkara</option>
                                                            <option>Punalur</option>
                                                            <option>Pathanapuram</option>
                                                        </optgroup>
                                                        <optgroup class="pathanamthitta" label="Pathanamthitta">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Pathanamthitta</option>
                                                            <option>Adoor</option>
                                                            <option>Konni</option>
                                                            <option>Kozhencherry</option>
                                                            <option>Ranni</option>
                                                            <option>Mallappally</option>
                                                            <option>Thiruvalla</option>
                                                        </optgroup>
                                                        <optgroup class="alappuzha" label="Alappuzha">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Alappuzha</option>
                                                            <option>Chengannur</option>
                                                            <option>Mavelikkara</option>
                                                            <option>Karthikappally</option>
                                                            <option>Kuttanadu</option>
                                                            <option>Ambalappuzha</option>
                                                            <option>Cherthala</option>
                                                        </optgroup>
                                                        <optgroup class="kottayam" label="Kottayam">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kottayam</option>
                                                            <option>Changanasserry</option>
                                                            <option>Kottayam</option>
                                                            <option>Vaikkom</option>
                                                            <option>Meenachil</option>
                                                            <option>Kanjirappally</option>
                                                        </optgroup>
                                                        <optgroup class="idukki" label="Idukki">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Idukki</option>
                                                            <option>Peerumedu</option>
                                                            <option>Udumbanchola</option>
                                                            <option>Idukki</option>
                                                            <option>Thodupuzha</option>
                                                            <option>Devikulam</option>
                                                        </optgroup>
                                                        <optgroup class="ernakulam" label="Ernakulam">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Ernakulam</option>
                                                            <option>Kothamangalam</option>
                                                            <option>Kunnathunad</option>
                                                            <option>Kanayannur</option>
                                                            <option>Kochi</option>
                                                            <option>North Paravoor</option>
                                                            <option>Aluva</option>
                                                        </optgroup>
                                                        <optgroup class="thrissur" label="Thrissur">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Thrissur</option>
                                                            <option>Chalakudy</option>
                                                            <option>Mukundapuram</option>
                                                            <option>Kodungallur</option>
                                                            <option>Thrissur</option>
                                                            <option>Chavakkad</option>
                                                            <option>Kunnamkulam</option>
                                                            <option>Thalapilly</option>
                                                        </optgroup>
                                                        <optgroup class="palakkad" label="Palakkad">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Palakkad</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="malappuram" label="Malappuram">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Malappuram</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="kozhikkode<" label="Kozhikkode<">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kozhikkode</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="wayanad" label="Wayanad">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Wayanad</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="kannur" label="Kannur">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kannur</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup>
                                                        <optgroup class="kasargod" label="Kasargod">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kasargod</option>
                                                            <option>Alathoor</option>
                                                            <option>Chittur</option>
                                                            <option>Palakkad</option>
                                                            <option>Pattambi</option>
                                                            <option>Ottappalam</option>
                                                            <option>Mannarkkadu</option>
                                                        </optgroup> -->
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="form-control show-tick" data-live-search="true" name="category">
                                                        <option selected disabled>Category/ies of operation</option>
                                                        <option>Thiruvananthapuram</option>
                                                        <option>Kollam</option>
                                                        <option>Pathanamthitta</option>
                                                        <option>Alappuzha</option>
                                                        <option>Kottayam</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <select class="form-control show-tick" multiple data-live-search="true" data-selected-text-format="count" data-actions-box="true" name="subcategory[]">
                                                        <option selected disabled>Select Sub-category/ies</option>
                                                        <optgroup label="Thiruvananthapuram">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Thiruvananthapuram</option>
                                                            <option>Neyyattinkara</option>
                                                            <option>Kattakkada</option>
                                                            <option>Nedumangadu</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Chirayinkeezhu</option>
                                                            <option>Varkala</option>
                                                        </optgroup>
                                                        <optgroup label="Kollam">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Kollam</option>
                                                            <option>Kollam</option>
                                                            <option>Kunnathoor</option>
                                                            <option>Karunagappally</option>
                                                            <option>Kottarakkara</option>
                                                            <option>Punalur</option>
                                                            <option>Pathanapuram</option>
                                                        </optgroup>
                                                        <optgroup label="Pathanamthitta">
                                                            <option style="background: #5cb85c; color: #fff;" data-subtext="(all taluks)">Pathanamthitta</option>
                                                            <option>Adoor</option>
                                                            <option>Konni</option>
                                                            <option>Kozhencherry</option>
                                                            <option>Ranni</option>
                                                            <option>Mallappally</option>
                                                            <option>Thiruvalla</option>
                                                        </optgroup>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="input-field form-line">
                                                    <textarea name="remarks" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                                    <label class="form-label">Remarks*</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                                

                                <h3><span class="hidden-xs">Finish</span></h3>
                                <fieldset style="padding-top: 30px;">
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

        
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/demo.js"></script>


    <script>

        // js to be applied after document.ready
        $(document).ready(function(){
            // Border bottom for bootstrap-select
            $('.bootstrap-select').parent().addClass('grey-border');

            $('.bootstrap-select').on('change', function() {
                $(this).parent().removeClass('grey-border');
                $(this).parent().addClass('blue-border');
            });

            // Ajax on clicking next | added on form-wizard.js
            // function add_sp() {
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php echo base_url(); ?>add_sp",
            //         data: $('.organization').serialize(),
            //         success: function(response)
            //         {
            //             alert("success in");
            //         },
            //         error: function(){
            //             alert("failed in");
            //         },
            //     });
            // }
            // function add_service() {
            //     add_sp(),
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php echo base_url(); ?>add_service",
            //         data: $('.service').serialize(),
            //         success: function(response)
            //         {
            //             alert("success in");
            //         },
            //         error: function(){
            //             alert("failed in");
            //         },
            //     });
            // }
            // $(document).find('[href="#finish"]').on('click', add_service());
        });

        
        

        // Toggle popovers
        // $('.info-icon').on('click', function() {
        //     if ($(this).hasClass("pop-over")) {
        //         $(this).popover('hide');
        //     } else {
        //         $(this).addClass("pop-over")
        //         $(this).popover('show');
        //     }
        // });


        var selectedValues = [];    
        $(".district :selected").each(function(){
            selectedValues.push($(this).val()); 
        });
        console.log(selectedValues);

        for (var i=0; selectedValues[i]; i++) {
            console.log(selectedValues[i]);
        }

    </script>



    <!-- tooltips and popovers -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Profile Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/profile.js"></script>

    <!-- icon inside input field -->
    <style>
        .input-field {
            display: flex !important;
        }
        .info-help {
            margin-left: -5%;
        }
/*        .info-help-select {
            position: absolute;
            margin-top: 1.4%;
            margin-left: -90%;
            margin-top: 2%;
        }*/
    </style>

    <!-- bootstrap-select styling -->
    <style>
        .bootstrap-select {
            border-bottom: none !important;
        }
        .grey-border::after {
            border-bottom:  1px solid #ddd !important;
        }
        .blue-border {
            border-bottom: 2px solid #1f91f3 !important;
        }
    </style>



</body>
</html>