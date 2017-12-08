<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages/calendar_custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="{{asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/only_dashboard.css')}}" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="index-2.html" class="logo">
        {{--<img src="{{asset('assets/img/logo.png')}}" alt="Logo">--}}
        SMS
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons text-primary notify">email</i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages pull-right">
                        <li class="dropdown-title">4 New Messages</li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <img src="{{asset('assets/img/authors/avatar3.jpg')}}" width="45" height="45" class="img-responsive message-image" alt="icon">
                                <div class="message-body"> <strong>Riot Zeast</strong>
                                    <br> Hello, You there?
                                    <br>
                                    <small>8 minutes ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <img src="{{asset('assets/img/authors/avatar.jpg')}}" width="45" height="45" class="img-responsive message-image" alt="icon">
                                <div class="message-body"> <strong>John Kerry</strong>
                                    <br> Can we Meet ?
                                    <br> <small>45 minutes ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <img src="{{asset('assets/img/authors/avatar2.jpg')}}" width="45" height="45" class="img-responsive message-image" alt="icon">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br> Dont forgot to call...
                                    <br>
                                    <small>An hour ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message">
                                <img src="{{asset('assets/img/authors/avatar4.jpg')}}" width="45" height="45" class="img-responsive message-image" alt="icon">
                                <div class="message-body">
                                    <strong>Ronny</strong>
                                    <br> Hey! sup Dude?
                                    <br>
                                    <small>3 Hours ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons text-danger notify">notifications</i>
                        <span class="label label-warning">7</span>
                    </a>
                    <ul class=" notifications dropdown-menu">
                        <li class="dropdown-title">You have 7 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <i class="material-icons danger notifi_icons">alarm</i>
                                    <a href="#">after a long time</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        Just Now
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons success notifi_icons">card_giftcard</i>
                                    <a href="#">Jef's Birthday today</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        Few seconds ago
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons warning notifi_icons">dashboard</i>
                                    <a href="#">out of space</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        8 minutes ago
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons bg-aqua notifi_icons">person_add</i>
                                    <a href="#">New friend request</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        An hour ago
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons danger notifi_icons">add_shopping_cart</i>
                                    <a href="#">On sale 2 products</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        3 Hours ago
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons success notifi_icons">image</i>
                                    <a href="#">Lee Shared your photo</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        Yesterday
                                    </small>
                                </li>
                                <li>
                                    <i class="material-icons warning notifi_icons">thumb_up</i>
                                    <a href="#">David liked your photo</a>
                                    <small class="pull-right">
                                        <span class="material-icons paddingright_10">alarm</span>
                                        2 July 2014
                                    </small>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/img/authors/avatar3.jpg')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                        <div class="riot">
                            <div>
                                Riot
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="{{asset('assets/img/authors/avatar3.jpg')}}" width="90" height="90" class="img-responsive img-circle" alt="User Image">
                            <p class="topprofiletext">Riot Zeast</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="#">
                                <i class="material-icons">person</i> My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="#">
                                <i class="material-icons">settings</i> Account Settings
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html">
                                    <i class="material-icons">lock</i> Lock
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{URL('admin/logout')}}">
                                    <i class="material-icons">exit_to_app</i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar ">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="advanced_tables.html"> <i class="material-icons text-info fsize" title="Advanced Tables">view_module</i> </a>                             </li>                             <li>                                 <a href="tasks.html"> <i class="material-icons text-danger fsize" title="Tasks">view_list</i> </a>                             </li>                             <li>                                 <a href="gallery.html"> <i class="material-icons text-warning fsize" title="Gallery">photo_library</i> </a>                             </li>                             <li>                                 <a href="users.html"> <i class="material-icons text-success fsize" title="Users List">group</i> </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
                <ul id="menu" class="page-sidebar-menu">
                    <li class="active">
                        <a href="index-2.html">
                            <i class="material-icons text-primary leftsize">home</i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons text-info leftsize">assignment</i>
                            <span class="title">Branch Management</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{URL('admin/branch')}}">
                                    <i class="material-icons">keyboard_arrow_right</i>Add Branch
                                </a>
                            </li>
                            <li>
                                <a href="form_editor.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Editors
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li>                             <a href="#">                                 <i class="material-icons text-success leftsize">developer_board</i>                                 <span class="title">Builders</span>                                 <span class="fa arrow"></span>                             </a>                             <ul class="sub-menu">                                 <li>                                     <a href="form_builder.html">                                         <i class="material-icons">keyboard_arrow_right</i> Form Builder                                     </a>                                 </li>                                 <li>                                     <a href="form_builder2.html">                                         <i class="material-icons">keyboard_arrow_right</i> Form Builder 2                                     </a>                                 </li>                                 <li>                                     <a href="buttonbuilder.html">                                         <i class="material-icons">keyboard_arrow_right</i> Button Builder                                     </a>                                 </li>                                 <li>                                     <a href="page_builder.html">                                         <i class="material-icons">keyboard_arrow_right</i> Page Builder                                     </a>                                 </li>                             </ul>                         </li>-->
                    <li>
                        <a href="#">
                            <i class="material-icons text-info leftsize">assignment</i>
                            <span class="title">HR Management</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{URL('admin/roles')}}">
                                    <i class="material-icons">keyboard_arrow_right</i> Create Roles
                                </a>
                            </li>
                            <li>
                                <a href="form_editor.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="form_editor2.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Editors2
                                </a>
                            </li>
                            <li>
                                <a href="form_validation.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Validation
                                </a>
                            </li>
                            <li>
                                <a href="formelements.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="customform_elements.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Drop Downs
                                </a>
                            </li>
                            <li>
                                <a href="radio_check.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="ratings.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Ratings
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="formwizard.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Form Wizards
                                </a>
                            </li>
                            <li>
                                <a href="accordionformwizard.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Accordion Wizards
                                </a>
                            </li>
                            <li>
                                <a href="datepicker.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Date Pickers
                                </a>
                            </li>
                            <li>
                                <a href="advanced_datepickers.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Advanced Date Pickers
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-warning leftsize">brush</i>
                            <span class="title">UI Features</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <!--<li>                                     <a href="animatedicons.html">                                         <i class="material-icons">keyboard_arrow_right</i> Animated Icons                                     </a>                                 </li>-->
                            <li>
                                <a href="buttons.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Buttons
                                </a>
                            </li>
                            <li>
                                <a href="advanced_buttons.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Advanced Buttons
                                </a>
                            </li>
                            <li>
                                <a href="tabs_accordions.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Tabs and Accordions
                                </a>
                            </li>
                            <li>
                                <a href="panels.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Panels
                                </a>
                            </li>
                            <li>
                                <a href="icon.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Font Icons
                                </a>
                            </li>
                            <li>
                                <a href="color.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Color Picker Slider
                                </a>
                            </li>
                            <li>
                                <a href="grid.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Grid Layout
                                </a>
                            </li>
                            <li>
                                <a href="carousel.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Carousel
                                </a>
                            </li>
                            <li>                                 <a href="advanced_modals.html">                                     <i class="material-icons">keyboard_arrow_right</i> Advanced Modals                                 </a>                             </li>                             <li>                                 <a href="tagsinput.html">                                     <i class="material-icons">keyboard_arrow_right</i> Tags Input                                 </a>                             </li>
                            <li>
                                <a href="nestable_list.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Nestable List
                                </a>
                            </li>
                            <li>
                                <a href="sortable_list.html"> <i class="material-icons">keyboard_arrow_right</i> Sortable List </a>
                            </li>
                            <li>
                                <a href="treeview_jstree.html"> <i class="material-icons">keyboard_arrow_right</i> Treeview and jsTree </a>
                            </li>
                            <li>                                     <a href="toastr_notification.html">                                         <i class="material-icons">keyboard_arrow_right</i> Toastr Notifications                                     </a>                                 </li>                                 <li>                                     <a href="sweetalert.html">                                         <i class="material-icons">keyboard_arrow_right</i> Sweet Alert                                     </a>                                 </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="session_timeout.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Session Timeout
                                </a>
                            </li>
                            <li>
                                <a href="portlet_draggable.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Draggable Portlets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-danger leftsize">settings_input_component</i>
                            <span class="title">UI Components</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="general.html">
                                    <i class="material-icons">keyboard_arrow_right</i> General Components
                                </a>
                            </li>
                            <li>
                                <a href="pickers.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Pickers
                                </a>
                            </li>
                            <li>
                                <a href="x-editable.html">
                                    <i class="material-icons">keyboard_arrow_right</i> X-editable
                                </a>
                            </li>
                            <li>
                                <a href="timeline.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Timeline
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Transitions
                                </a>
                            </li>
                            <li>
                                <a href="sliders.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Sliders
                                </a>
                            </li>
                            <li>
                                <a href="knob.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Circles Sliders
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-primary leftsize">view_module</i>
                            <span class="title">Data Tables</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="simple_table.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Simple tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Advanced Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables2.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Advanced Data Tables2
                                </a>
                            </li>
                            <li>
                                <a href="editable_table.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Editable Datatables
                                </a>
                            </li>
                            <li>
                                <a href="responsive_tables.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Responsive Datatables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-success leftsize">insert_chart</i>
                            <span class="title">Charts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="piecharts.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Pie Charts
                                </a>
                            </li>
                            <li>
                                <a href="charts_animation.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Animated Charts
                                </a>
                            </li>
                            <li>
                                <a href="jscharts.html">
                                    <i class="material-icons">keyboard_arrow_right</i> JS Charts
                                </a>
                            </li>
                            <!--- <li>                                     <a href="sparklinecharts.html">                                         <i class="material-icons">keyboard_arrow_right</i>                                         Sparkline Charts                                     </a>                                 </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="material-icons text-warning leftsize">today</i>
                            <span class="badge badge-danger">7</span> Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-info leftsize">email</i>
                            <span class="title">Email</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="Inbox.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Inbox
                                </a>
                            </li>
                            <li>
                                <a href="compose.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Compose
                                </a>
                            </li>
                            <li>
                                <a href="view_mail.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Single Mail
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tasks.html">
                            <i class="material-icons text-danger leftsize">list</i>
                            <span class="badge badge-danger">10</span> Tasks
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-primary leftsize">photo_library</i>
                            <span class="title">Gallery</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="gallery.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Gallery
                                </a>
                            </li>
                            <li>
                                <a href="masonry_gallery.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Masonry Gallery
                                </a>
                            </li>
                            <li>
                                <a href="dropzone.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Dropzone
                                </a>
                            </li>
                            <li>
                                <a href="imagecropping.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Image Cropping
                                </a>
                            </li>
                            <li>
                                <a href="multiple_upload.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Multiple File Upload
                                </a>
                            </li>
                            <li>
                                <a href="imgmagnifier.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Image Magnifier
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-success leftsize">group</i>
                            <span class="title">Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users.html"> <i class="material-icons">keyboard_arrow_right</i> Users List </a>
                            </li>
                            <li>
                                <a href="adduser.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Add New User
                                </a>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="material-icons">keyboard_arrow_right</i> View Profile
                                </a>
                            </li>
                            <li>
                                <a href="deleted_users.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Deleted Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-info leftsize">map</i>
                            <span class="title">Maps</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="googlemaps.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="vectormaps.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Vector Maps
                                </a>
                            </li>
                            <li>
                                <a href="advancedmaps.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Advanced Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="material-icons text-warning leftsize">chat_bubble</i> <span class="title">Blog</span> <span class="fa arrow"></span> </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog_list.html"> <i class="material-icons">keyboard_arrow_right</i> Blog Category List </a>
                            </li>
                            <li>
                                <a href="blog_list2.html"> <i class="material-icons">keyboard_arrow_right</i> Blog List </a>
                            </li>
                            <li>
                                <a href="add_newblog.html"> <i class="material-icons">keyboard_arrow_right</i> Add New Blog </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-danger leftsize">open_with</i>
                            <span class="title">News</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="news.html">
                                    <i class="material-icons">keyboard_arrow_right</i> News
                                </a>
                            </li>
                            <li>
                                <a href="news_details.html">
                                    <i class="material-icons">keyboard_arrow_right</i> News Details
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-primary leftsize">flag</i>
                            <span class="title">Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="lockscreen.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Lockscreen
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Invoice
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Login
                                </a>
                            </li>
                            <li>
                                <a href="login2.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Login 2
                                </a>
                            </li>
                            <li>
                                <a href="login.html#toregister">
                                    <i class="material-icons">keyboard_arrow_right</i> Register
                                </a>
                            </li>
                            <li>
                                <a href="register2.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Register 2
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <i class="material-icons">keyboard_arrow_right</i> 404 Error
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="material-icons">keyboard_arrow_right</i> 500 Error
                                </a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="material-icons">keyboard_arrow_right</i> Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    @yield('content')

    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="material-icons fsize">flight_takeoff</i>
</a>
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- EASY PIE CHART JS -->
<script src="{{asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.js')}}"></script>
<script src="{{asset('assets/vendors/jqueryeasing/js/jquery.easing.min.js')}}"></script>
<!--for calendar-->
<script src="{{asset('assets/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')}}" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="{{asset('assets/vendors/sparklinecharts/jquery.sparkline.js')}}"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.js')}}"></script>
<!--   maps -->
<script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/vendors/chartjs/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<!--page level js-->
<script src="{{asset('assets/js/pages/todolist.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
</body>
</html>
