<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Rebuild Kerala" />
    <meta name="author" content="Sreenath B S" />
    <title>Services | Together We Begin!</title>

    <!-- Favicon-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/ico/favicon.png" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!-- Bootstrap Core Css -->
    <!-- <link href="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/formbsb/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/home/css/navbar.css" rel="stylesheet">
    <!--Filter Css-->
    <link href="<?php echo base_url(); ?>assets/formbsb/external/filter/filter.css" rel="stylesheet" />


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
                <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top"><span class="logo-text">together we begin</span></a>
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/home/img/together.png" class="logo-top"><span class="logo-text">together we begin</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index">Home</a></li>
                        <li class="active"><a href="services">Services</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="statistics">Statistics</a></li>
                        <li><?php 
                      if (is_null($this->session->userdata('user_id'))) { 
                        echo '<a href="'.base_url().'login">Login</a>';
                      } else {
                        echo '<a href="'.base_url().'logout">Logout</a>';
                      }
                      ?></li>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-xs-10 col-sm-3">
                    <div class='filter'>
                        <form method="POST" action="">
                  <p class='title filt'>Filters</p>
                  <div class="filter-btns hidden">
                  <p class='title_items filter-btn'>District</p>
                  <ul style="text-align: initial;">
                    <li>
                      <input id='all' name='district' value='Thiruvananthapuram' type='radio'>
                      <label for='all'>Thiruvananthapuram</label>
                    </li>
                    <li>
                      <input id='website' name='district' value='Kollam' type='radio'>
                      <label for='website'>Kollam</label>
                    </li>
                    <li>
                      <input id='icon' name='district' value='Pathanamthitta' type='radio'>
                      <label for='icon'>Pathanamthitta</label>
                    </li>
                    <li>
                      <input id='mobile' name='district' value='Alappuzha' type='radio'>
                      <label for='mobile'>Alappuzha</label>
                    </li>
                    <li>
                      <input id='logo' name='district' value='Kottayam' type='radio'>
                      <label for='logo'>Kottayam</label>
                    </li>
                    <li>
                      <input id='ui' name='district' value='Idukki' type='radio'>
                      <label for='ui'>Idukki</label>
                    </li>
                    <li>
                      <input id='illustration' name='district' value='Ernakulam' type='radio'>
                      <label for='illustration'>Ernakulam</label>
                    </li>
                    <li>
                      <input id='all' name='district' value='Thrissur' type='radio'>
                      <label for='all'>Thrissur</label>
                    </li>
                    <li>
                      <input id='website' name='district' value='Palakkad' type='radio'>
                      <label for='website'>Palakkad</label>
                    </li>
                    <li>
                      <input id='icon' name='district' value='Malappuram' type='radio'>
                      <label for='icon'>Malappuram</label>
                    </li>
                    <li>
                      <input id='mobile' name='district' value='Kozhikode' type='radio'>
                      <label for='mobile'>Kozhikode</label>
                    </li>
                    <li>
                      <input id='logo' name='district' value='Wayanad' type='radio'>
                      <label for='logo'>Wayanad</label>
                    </li>
                    <li>
                      <input id='ui' name='district' value='Kannur' type='radio'>
                      <label for='ui'>Kannur</label>
                    </li>
                    <li>
                      <input id='illustration' name='district' value='Kasargod' type='radio'>
                      <label for='illustration'>Kasargod</label>
                    </li>
                  </ul>
                  <p class='title_items filter-btn'>Taluk</p>
                  <ul style="text-align: initial;">
<li><input id='Neyyattinkara' name='taluk' value='Neyyattinkara' type='radio'><label for='Neyyattinkara'>Neyyattinkara</label></li>
<li><input id='Kattakkada' name='taluk' value='Kattakkada' type='radio'><label for='Kattakkada'>Kattakkada</label></li>
<li><input id='Nedumangadu' name='taluk' value='Nedumangadu' type='radio'><label for='Nedumangadu'>Nedumangadu</label></li>
<li><input id='Thiruvananthapuram' name='taluk' value='Thiruvananthapuram' type='radio'><label for='Thiruvananthapuram'>Thiruvananthapuram</label></li>
<li><input id='Chirayinkeezhu' name='taluk' value='Chirayinkeezhu' type='radio'><label for='Chirayinkeezhu'>Chirayinkeezhu</label></li>
<li><input id='Varkala' name='taluk' value='Varkala' type='radio'><label for='Varkala'>Varkala</label></li>
<li><input id='Kollam' name='taluk' value='Kollam' type='radio'><label for='Kollam'>Kollam</label></li>
<li><input id='Kunnathoor' name='taluk' value='Kunnathoor' type='radio'><label for='Kunnathoor'>Kunnathoor</label></li>
<li><input id='Karunagappally' name='taluk' value='Karunagappally' type='radio'><label for='Karunagappally'>Karunagappally</label></li>
<li><input id='Kottarakkara' name='taluk' value='Kottarakkara' type='radio'><label for='Kottarakkara'>Kottarakkara</label></li>
<li><input id='Punalur' name='taluk' value='Punalur' type='radio'><label for='Punalur'>Punalur</label></li>
<li><input id='Pathanapuram' name='taluk' value='Pathanapuram' type='radio'><label for='Pathanapuram'>Pathanapuram</label></li>
<li><input id='Adoor' name='taluk' value='Adoor' type='radio'><label for='Adoor'>Adoor</label></li>
<li><input id='Konni' name='taluk' value='Konni' type='radio'><label for='Konni'>Konni</label></li>
<li><input id='Kozhencherry' name='taluk' value='Kozhencherry' type='radio'><label for='Kozhencherry'>Kozhencherry</label></li>
<li><input id='Ranni' name='taluk' value='Ranni' type='radio'><label for='Ranni'>Ranni</label></li>
<li><input id='Mallappally' name='taluk' value='Mallappally' type='radio'><label for='Mallappally'>Mallappally</label></li>
<li><input id='Thiruvalla' name='taluk' value='Thiruvalla' type='radio'><label for='Thiruvalla'>Thiruvalla</label></li>
<li><input id='Chengannur' name='taluk' value='Chengannur' type='radio'><label for='Chengannur'>Chengannur</label></li>
<li><input id='Mavelikkara' name='taluk' value='Mavelikkara' type='radio'><label for='Mavelikkara'>Mavelikkara</label></li>
<li><input id='Karthikappally' name='taluk' value='Karthikappally' type='radio'><label for='Karthikappally'>Karthikappally</label></li>
<li><input id='Kuttanadu' name='taluk' value='Kuttanadu' type='radio'><label for='Kuttanadu'>Kuttanadu</label></li>
<li><input id='Ambalappuzha' name='taluk' value='Ambalappuzha' type='radio'><label for='Ambalappuzha'>Ambalappuzha</label></li>
<li><input id='Cherthala' name='taluk' value='Cherthala' type='radio'><label for='Cherthala'>Cherthala</label></li>
<li><input id='Changanasserry' name='taluk' value='Changanasserry' type='radio'><label for='Changanasserry'>Changanasserry</label></li>
<li><input id='Kottayam' name='taluk' value='Kottayam' type='radio'><label for='Kottayam'>Kottayam</label></li>
<li><input id='Vaikkom' name='taluk' value='Vaikkom' type='radio'><label for='Vaikkom'>Vaikkom</label></li>
<li><input id='Meenachil' name='taluk' value='Meenachil' type='radio'><label for='Meenachil'>Meenachil</label></li>
<li><input id='Kanjirappally' name='taluk' value='Kanjirappally' type='radio'><label for='Kanjirappally'>Kanjirappally</label></li>
<li><input id='Peerumedu' name='taluk' value='Peerumedu' type='radio'><label for='Peerumedu'>Peerumedu</label></li>
<li><input id='Udumbanchola' name='taluk' value='Udumbanchola' type='radio'><label for='Udumbanchola'>Udumbanchola</label></li>
<li><input id='Idukki' name='taluk' value='Idukki' type='radio'><label for='Idukki'>Idukki</label></li>
<li><input id='Thodupuzha' name='taluk' value='Thodupuzha' type='radio'><label for='Thodupuzha'>Thodupuzha</label></li>
<li><input id='Devikulam' name='taluk' value='Devikulam' type='radio'><label for='Devikulam'>Devikulam</label></li>
<li><input id='Kothamangalam' name='taluk' value='Kothamangalam' type='radio'><label for='Kothamangalam'>Kothamangalam</label></li>
<li><input id='Kunnathunad' name='taluk' value='Kunnathunad' type='radio'><label for='Kunnathunad'>Kunnathunad</label></li>
<li><input id='Kanayannur' name='taluk' value='Kanayannur' type='radio'><label for='Kanayannur'>Kanayannur</label></li>
<li><input id='Kochi' name='taluk' value='Kochi' type='radio'><label for='Kochi'>Kochi</label></li>
<li><input id='North Paravoor' name='taluk' value='North Paravoor' type='radio'><label for='North Paravoor'>North Paravoor</label></li>
<li><input id='Aluva' name='taluk' value='Aluva' type='radio'><label for='Aluva'>Aluva</label></li>
<li><input id='Chalakudy' name='taluk' value='Chalakudy' type='radio'><label for='Chalakudy'>Chalakudy</label></li>
<li><input id='Mukundapuram' name='taluk' value='Mukundapuram' type='radio'><label for='Mukundapuram'>Mukundapuram</label></li>
<li><input id='Kodungallur' name='taluk' value='Kodungallur' type='radio'><label for='Kodungallur'>Kodungallur</label></li>
<li><input id='Thrissur' name='taluk' value='Thrissur' type='radio'><label for='Thrissur'>Thrissur</label></li>
<li><input id='Chavakkad' name='taluk' value='Chavakkad' type='radio'><label for='Chavakkad'>Chavakkad</label></li>
<li><input id='Kunnamkulam' name='taluk' value='Kunnamkulam' type='radio'><label for='Kunnamkulam'>Kunnamkulam</label></li>
<li><input id='Thalapilly' name='taluk' value='Thalapilly' type='radio'><label for='Thalapilly'>Thalapilly</label></li>
<li><input id='Alathoor' name='taluk' value='Alathoor' type='radio'><label for='Alathoor'>Alathoor</label></li>
<li><input id='Chittur' name='taluk' value='Chittur' type='radio'><label for='Chittur'>Chittur</label></li>
<li><input id='Palakkad' name='taluk' value='Palakkad' type='radio'><label for='Palakkad'>Palakkad</label></li>
<li><input id='Pattambi' name='taluk' value='Pattambi' type='radio'><label for='Pattambi'>Pattambi</label></li>
<li><input id='Ottappalam' name='taluk' value='Ottappalam' type='radio'><label for='Ottappalam'>Ottappalam</label></li>
<li><input id='Mannarkkadu' name='taluk' value='Mannarkkadu' type='radio'><label for='Mannarkkadu'>Mannarkkadu</label></li>
<li><input id='Perinthalmanna' name='taluk' value='Perinthalmanna' type='radio'><label for='Perinthalmanna'>Perinthalmanna</label></li>
<li><input id='Nilambur' name='taluk' value='Nilambur' type='radio'><label for='Nilambur'>Nilambur</label></li>
<li><input id='Eranad' name='taluk' value='Eranad' type='radio'><label for='Eranad'>Eranad</label></li>
<li><input id='Kondotty' name='taluk' value='Kondotty' type='radio'><label for='Kondotty'>Kondotty</label></li>
<li><input id='Ponnani' name='taluk' value='Ponnani' type='radio'><label for='Ponnani'>Ponnani</label></li>
<li><input id='Tirur' name='taluk' value='Tirur' type='radio'><label for='Tirur'>Tirur</label></li>
<li><input id='Thiroorangadi' name='taluk' value='Thiroorangadi' type='radio'><label for='Thiroorangadi'>Thiroorangadi</label></li>
<li><input id='Kozhikode' name='taluk' value='Kozhikode' type='radio'><label for='Kozhikode'>Kozhikode</label></li>
<li><input id='Thamarassery' name='taluk' value='Thamarassery' type='radio'><label for='Thamarassery'>Thamarassery</label></li>
<li><input id='Koyilandy' name='taluk' value='Koyilandy' type='radio'><label for='Koyilandy'>Koyilandy</label></li>
<li><input id='Vatakara' name='taluk' value='Vatakara' type='radio'><label for='Vatakara'>Vatakara</label></li>
<li><input id='Vythiri' name='taluk' value='Vythiri' type='radio'><label for='Vythiri'>Vythiri</label></li>
<li><input id='Sulthan Bathery' name='taluk' value='Sulthan Bathery' type='radio'><label for='Sulthan Bathery'>Sulthan Bathery</label></li>
<li><input id='Mananthavady' name='taluk' value='Mananthavady' type='radio'><label for='Mananthavady'>Mananthavady</label></li>
<li><input id='Thalassery' name='taluk' value='Thalassery' type='radio'><label for='Thalassery'>Thalassery</label></li>
<li><input id='Iritty' name='taluk' value='Iritty' type='radio'><label for='Iritty'>Iritty</label></li>
<li><input id='Kannur' name='taluk' value='Kannur' type='radio'><label for='Kannur'>Kannur</label></li>
<li><input id='Payyannur' name='taluk' value='Payyannur' type='radio'><label for='Payyannur'>Payyannur</label></li>
<li><input id='Taliparamba' name='taluk' value='Taliparamba' type='radio'><label for='Taliparamba'>Taliparamba</label></li>
<li><input id='Hosdurg' name='taluk' value='Hosdurg' type='radio'><label for='Hosdurg'>Hosdurg</label></li>
<li><input id='Vellarikundu' name='taluk' value='Vellarikundu' type='radio'><label for='Vellarikundu'>Vellarikundu</label></li>
<li><input id='Kasaragod' name='taluk' value='Kasaragod' type='radio'><label for='Kasaragod'>Kasaragod</label></li>
<li><input id='Manjeswaram' name='taluk' value='Manjeswaram' type='radio'><label for='Manjeswaram'>Manjeswaram</label></li>
                  </ul>
                  <p class='title_items filter-btn'>Category</p>
                  <ul style="text-align: initial;">
                    <li><input id='Carpentry' name='category' value='Carpentry' type='radio'><label for='Carpentry'>Carpentry</label>                    </li>
<li><input id='Civil' name='category' value='Civil' type='radio'><label for='Civil'>Civil</label>                    </li>
<li><input id='Cleaning' name='category' value='Cleaning' type='radio'><label for='Cleaning'>Cleaning</label>                    </li>
<li><input id='Electrical' name='category' value='Electrical' type='radio'><label for='Electrical'>Electrical</label>                    </li>
<li><input id='Electronics' name='category' value='Electronics' type='radio'><label for='Electronics'>Electronics</label>                    </li>
<li><input id='Mechanical' name='category' value='Mechanical' type='radio'><label for='Mechanical'>Mechanical</label>                    </li>
<li><input id='Others' name='category' value='Others' type='radio'><label for='Others'>Others</label>                    </li>
<li><input id='Painting' name='category' value='Painting' type='radio'><label for='Painting'>Painting</label>                    </li>
<li><input id='Transportation' name='category' value='Transportation' type='radio'><label for='Transportation'>Transportation</label>                    </li>
                  </ul>
                  
                  <input type="submit" class='title search-btn' value="submit">
              </div>
                </div>
            </div>

                <div class="service-list col-xs-12 col-sm-offset-1 col-sm-6">
                
                <?php
                $x = 0;
                foreach($service as $service_item) {
                    $x += 1;
                echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-cyan">
                                <h2>
                                    '.$service_item['name'].'<small>'.$service_item['company'].'</small>
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="body" style="color: black;">
                                <div style="color: rgb(51, 122, 183);" class="row">
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">location_on</i>
                                            <span class="icon-name">'.$service_item['district'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">monetization_on</i>
                                            <span class="icon-name">Volunteering</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">group</i>
                                            <span class="icon-name">'.$service_item['service_count'].'</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3" id="location">
                                        <div class="demo-google-material-icon">
                                            <i class="material-icons">access_time</i>
                                            <span class="icon-name">'.$service_item['created_on'].'</span>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    <footer class="blockquote">#Remark<br><br> : '.$service_item['remark'].'</footer>
                                </blockquote>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
                                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                    <button type="button" class="btn bg-blue apply-btn btn-block btn-lg waves-effect m-r-20" data="1">'.$service_item['phone'].'</button>
                                    <!-- <button type="button" class="btn bg-blue btn-lg waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Apply Now</button> -->
                                </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>';}
                    echo $x;
                    if ($x == 0) {
                        echo "No Results";
                    }?>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <!-- <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core Js -->
    <!-- <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap/js/bootstrap.js"></script> -->

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/js/demo.js"></script>

    <!-- Filter Js -->
    <script src="<?php echo base_url(); ?>assets/formbsb/external/filter/filter.js"></script>
</body>

</html>