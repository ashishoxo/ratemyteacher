<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="<?php echo e(asset('assets/images/faces/face1.jpg')); ?>" alt="image"/>
                    <span class="online-status online"></span>
                </div>
                <div class="profile-name">
                    <p class="name">
                        <?php echo e(Auth::user()->name); ?> | Student
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
            <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"> <img class="menu-icon" src="<?php echo e(asset('assets/images/menu_icons/01.png')); ?>" alt="menu icon"> <span class="menu-title">Dashboard</span></a>
        </li>
        
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables"> <img class="menu-icon" src="<?php echo e(asset('assets/images/menu_icons/06.png')); ?>" alt="menu icon"> <span class="menu-title">My Profile</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profile.view')); ?>">View Profile</a>
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
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced"> <img class="menu-icon" src="<?php echo e(asset('assets/images/menu_icons/07.png')); ?>" alt="menu icon"> <span class="menu-title">Classes</span><i class="menu-arrow">
                </i></a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('lectures.list')); ?>">Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('guestlectures.list')); ?>">Guest Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('workshops.list')); ?>">Workshops</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('my.teachers')); ?>"> <img class="menu-icon" src="<?php echo e(asset('assets/images/menu_icons/01.png')); ?>" alt="menu icon"> <span class="menu-title">My Teachers</span></a>
        </li>
       
        
    </ul>
</nav>