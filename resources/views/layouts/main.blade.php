<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Rate My Teacher | Rating Application
        </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('assets/css/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center  navbar-brand-wrapper d-flex align-items-top justify-content-center">
                    <div style="font-size: 24px;color: white;font-weight: 900;line-height: 2.4">
                        Rate My Teacher
                    </div>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Schedule <span class="badge badge-primary ml-1">25 Upcomming</span></a>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline">
                                </i>
                                <span class="count bg-success">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">
                                        You have 4 new notifications
                                    </p>
                                    <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-inverse-success">
                                            <i class="mdi mdi-alert-circle-outline mx-0">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">
                                            Application Error
                                        </h6>
                                        <p class="font-weight-light small-text mb-0">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-inverse-warning">
                                            <i class="mdi mdi-comment-text-outline mx-0">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">
                                            Settings
                                        </h6>
                                        <p class="font-weight-light small-text mb-0">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-inverse-info">
                                            <i class="mdi mdi-email-outline mx-0">
                                            </i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">
                                            New user registration
                                        </h6>
                                        <p class="font-weight-light small-text mb-0">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown d-none d-xl-inline-block">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <span class="mr-3">Hello, Rahul Kumar !</span><img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face1.jpg')}}" alt="Profile image">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <a class="dropdown-item">
                                    View Profile
                                </a>
                                <a class="dropdown-item">
                                    Edit Profile
                                </a>
                                <a class="dropdown-item">
                                    Change Password
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_sidebar.html -->
                @include('components.sidebar')
                
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                        
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 Rate My Teacher</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger">
                                </i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        
        
        <script src="{{asset('assets/js/vendor.bundle.base.js')}}"></script><!-- green color chart on dashboard -->
        <script src="{{asset('assets/js/vendor.bundle.addons.js')}}"></script><!-- green color chart on dashboard -->
        
        
        <script src="{{asset('assets/js/dashboard.js')}}"></script>
        
    </body>
</html>