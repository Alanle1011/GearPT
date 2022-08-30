<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard - GEARPT</title>
    <link rel="apple-touch-icon" href="img/Logo/2.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo/2.png">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"
                                data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text"
                                                    placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i
                                                        class="ft-x"> </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-vn"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <div class="arrow_box">
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i>
                                        English</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i>
                                        Русский</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i>
                                        Français</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i>
                                        Español</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label"
                                href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i
                                            class="ft-book"></i> Read Mail</a><a class="dropdown-item"
                                        href="#"><i class="ft-bookmark"></i> Read Later</a><a
                                        class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all
                                        Read </a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <span class="avatar avatar-online"><img
                                        src="img/GearPT/{{ Session::get('adminloginImage') }}"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <a class="dropdown-item" href="admin-dashboard"><span
                                            class="avatar avatar-online"><img
                                                src="img/GearPT/{{ Session::get('adminloginImage') }}"
                                                alt="avatar"><span
                                                class="user-name text-bold-700 ml-1">{{ Session::get('adminloginName') }}</span></span></a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ url('/') }}"><i class="ft-link"></i>
                                        Website</a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ url('admin-logout') }}"><i
                                            class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a href="{{ url('admin-dashboard') }}"><img class="logo"
                            alt="Chameleon admin logo" src="img/Logo/3.png" height="74" width="170" />
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <br><br>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active-toggle"><a href="{{ url('admin-dashboard') }}"><i class="la la-home"></i><span
                            class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="active-toggle"><a href="{{ url('barchart') }}"><i class="la la-bar-chart"></i><span
                            class="menu-title" data-i18n="">Bar Chart</span></a>
                </li>
                <li class="active-toggle"><a href="{{ url('piechart') }}"><i class="la la-pie-chart"></i><span
                            class="menu-title" data-i18n="">Pie Chart</span></a>
                </li>
                <li class="active-toggle" class="nav-item has-sub dropdown"><a href="#"><i
                            class="la la-list"></i><span class="menu-title" data-i18n="">Table List</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a href="{{ url('list-admin') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Admin</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-staff') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Staff</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-client') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Client</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-product') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Product</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-producttype') }}"><i
                                    class="ft-table"></i><span class="menu-title" data-i18n=""> Product
                                    type</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-producer') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Producer</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-order') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Order</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-orderdetail') }}"><i
                                    class="ft-table"></i><span class="menu-title" data-i18n=""> Order
                                    Detail</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{ url('list-feedback') }}"><i class="ft-table"></i><span
                                    class="menu-title" data-i18n=""> Feedback</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <br><br>
                    <h2>Feedback List</h2>
                    <br><br>

                    <div>
                        <a href="{{ url('add-feedback') }}" class="btn btn-dark"
                            style="float: right; margin-right: 20px;">Add</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Feedback ID</th>
                                <th>Client ID</th>
                                <th>Producer ID</th>
                                <th>Ranking</th>
                                <th>Comment</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $row->feedbackID }}</td>
                                    <td>{{ $row->clientID }}</td>
                                    <td>{{ $row->productID }}</td>
                                    <td>{{ $row->ranking }}</td>
                                    <td>{{ $row->comment }}</td>
                                    <td>
                                        <a href="{{ url('edit-feedback/' . $row->feedbackID) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ url('delete-feedback/' . $row->feedbackID) }}"
                                            class="btn btn-danger"
                                            onclick="return confirm('Are you sure to Delete this admin')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

            <!-- JavaScript-->
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="copyright">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                GearPT, Inc. All rights reserved.
            </span>
        </div>
    </footer>


    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>
