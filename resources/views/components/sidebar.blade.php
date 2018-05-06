<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image"/>
                    <span class="online-status online"></span>
                </div>
                <div class="profile-name">
                    <p class="name">
                        Rahul Kumar | Admin
                    </p>
                </div>
                <div class="notification-panel mt-4">
                    <span><i class="mdi mdi-settings">
                        </i></span>
                    <span class="count-wrapper"><i class="mdi mdi-bell">
                        </i><span class="count top-right bg-warning">4</span></span>
                    <span><i class="mdi mdi-email">
                        </i></span>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/01.png')}}" alt="menu icon"> <span class="menu-title">Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/02.png')}}" alt="menu icon"> <span class="menu-title">Teachers</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teachers.list')}}">All Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.add')}}">Add Teacher</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/09.png')}}" alt="menu icon"> <span class="menu-title">Schedules</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="apps-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('schedules.list')}}">All Schedules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('schedule.add')}}">Add Schedule</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/04.png')}}" alt="menu icon"> <span class="menu-title">Departments</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('departments.list')}}">All Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('department.add')}}">Add Department</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Ratings</span> </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/17.png')}}" alt="menu icon"> <span class="menu-title">Students</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.list')}}">All Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.add')}}">Add Student</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/06.png')}}" alt="menu icon"> <span class="menu-title">My Profile</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">View Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/data-table.html">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/js-grid.html">Change Password</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/07.png')}}" alt="menu icon"> <span class="menu-title">Classes</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dragula.html">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/clipboard.html">Guest Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/context-menu.html">Workshops</a>
                    </li>
                </ul>
            </div>
        </li>--}}
        <li class="nav-item">
            <a class="nav-link" href="index.html"> <img class="menu-icon" src="{{asset('assets/images/menu_icons/01.png')}}" alt="menu icon"> <span class="menu-title">Mobile Application</span></a>
        </li> 
        
    </ul>
</nav>