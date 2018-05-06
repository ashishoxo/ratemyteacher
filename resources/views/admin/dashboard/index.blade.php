@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                        <i class="mdi mdi-cube text-success icon-lg">
                        </i>
                    </div>
                    <div class="wrapper">
                        <p class="card-text mb-0">
                            Teachers
                        </p>
                        <div class="fluid-container">
                            <h3 class="card-title mb-0">
                                20
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                        <i class="mdi mdi-briefcase-check text-primary icon-lg">
                        </i>
                    </div>
                    <div class="wrapper">
                        <p class="card-text mb-0">
                            Schedules
                        </p>
                        <div class="fluid-container">
                            <h3 class="card-title mb-0">
                                1120
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                        <i class="mdi mdi-account-multiple text-danger icon-lg">
                        </i>
                    </div>
                    <div class="wrapper">
                        <p class="card-text mb-0">
                            Departments
                        </p>
                        <div class="fluid-container">
                            <h3 class="card-title mb-0">
                                12
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="highlight-icon bg-light mr-3">
                        <i class="mdi mdi-airballoon text-info icon-lg">
                        </i>
                    </div>
                    <div class="wrapper">
                        <p class="card-text mb-0">
                            Students
                        </p>
                        <div class="fluid-container">
                            <h3 class="card-title mb-0">
                                650
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Latest Schedules
                </h5>
                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                    <img src="images/brand-logo/4.png" alt="brand logo">
                    <div class="wrapper w-100 pl-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="badge badge-danger badge-lg mb-2">Title of schedule</span>
                            <span class="text-gray text-small">13:17 PM</span>
                        </div>
                        <p>
                            Descriptions
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                    <img src="images/brand-logo/3.png" alt="brand logo">
                    <div class="wrapper w-100 pl-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="badge badge-warning badge-lg mb-2">ADMIN-AIRBNB</span>
                            <span class="text-gray text-small">09:29 PM</span>
                        </div>
                        <p>
                            Verify your email address !
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                    <img src="images/brand-logo/1.png" alt="brand logo">
                    <div class="wrapper w-100 pl-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="badge badge-success badge-lg mb-2">ADMIN-AMAZON</span>
                            <span class="text-gray text-small">03:43 AM</span>
                        </div>
                        <p>
                            Support of theme
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start pt-1">
                    <img src="images/brand-logo/2.png" alt="brand logo">
                    <div class="wrapper w-100 pl-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="badge badge-info badge-lg mb-2">ADMIN-FACEBOOK</span>
                            <span class="text-gray text-small">10:14 AM</span>
                        </div>
                        <p>
                            New submission on website
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Top Ratted Teachers
                </h5>
                <div class="row border-bottom pb-3 mb-3">
                    <div class="col-12 py-4 my-3">
                        <canvas id="DashboardBarChart-1" style="height:100px">
                        </canvas>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-flex align-items-end">
                            <h1 class="display-4 font-weight-semibold mb-0">
                                8935
                            </h1>
                            <h5 class="ml-3 mb-2">
                                Ratings Today
                            </h5>
                        </div>
                        <p class="mt-0 mb-2">
                            Some quick example text to build
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="progress progress-md w-100 mr-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <p class="mb-0">
                                38%
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-end">
                            <h1 class="display-4 font-weight-semibold mb-0">
                                6843
                            </h1>
                            <h5 class="ml-3 mb-2">
                                Schedules Today
                            </h5>
                        </div>
                        <p class="mt-0 mb-2">
                            Proin eget tortor risus.
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="progress progress-md w-100 mr-3">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <p class="mb-0">
                                64%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="card-title mb-12">
                        Latest Reviews
                    </h5>
                    
                </div>
                <div class="new-accounts">
                    <ul class="chats">
                        <li class="chat-persons">
                            <a href="#">
                                <span class="pro-pic"><img src="images/faces/face1.jpg" alt="profile image"></span>
                                <div class="user">
                                    <p class="u-name">
                                        David
                                    </p>
                                    <p class="u-designation">
                                        Python Developer
                                    </p>
                                </div>
                                <p class="joined-date">
                                    30 Mins ago
                                </p>
                            </a>
                        </li>
                        <!-- list person -->
                        <li class="chat-persons">
                            <a href="#">
                                <span class="pro-pic"><img src="images/faces/face2.jpg" alt="profile image"></span>
                                <div class="user">
                                    <p class="u-name">
                                        Stella Johnson
                                    </p>
                                    <p class="u-designation">
                                        SEO Expert
                                    </p>
                                </div>
                                <p class="joined-date">
                                    2 Days ago
                                </p>
                            </a>
                        </li>
                        <!-- list person -->
                        <li class="chat-persons">
                            <a href="#">
                                <span class="pro-pic"><img src="images/faces/face23.jpg" alt="profile image"></span>
                                <div class="user">
                                    <p class="u-name">
                                        Marina Michel
                                    </p>
                                    <p class="u-designation">
                                        Business Development
                                    </p>
                                </div>
                                <p class="joined-date">
                                    4 Days ago
                                </p>
                            </a>
                        </li>
                        <!-- list person -->
                        <li class="chat-persons">
                            <a href="#">
                                <span class="pro-pic"><img src="images/faces/face4.jpg" alt="profile image"></span>
                                <div class="user">
                                    <p class="u-name">
                                        Edward Fletcher
                                    </p>
                                    <p class="u-designation">
                                        UI/UX Designer
                                    </p>
                                </div>
                                <p class="joined-date">
                                    5 Days ago
                                </p>
                            </a>
                        </li>
                        <!-- list person -->
                        <li class="chat-persons">
                            <a href="#">
                                <span class="pro-pic"><img src="images/faces/face14.jpg" alt="profile image"></span>
                                <div class="user">
                                    <p class="u-name">
                                        Allen Donald
                                    </p>
                                    <p class="u-designation">
                                        UI/UX Designer
                                    </p>
                                </div>
                                <p class="joined-date">
                                    5 Days ago
                                </p>
                            </a>
                        </li>
                        <!-- list person -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection