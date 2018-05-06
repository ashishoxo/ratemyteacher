<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
	<div class="dashboard-nav-inner">

		<ul data-submenu-title="Main">
			<li class="active"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
			
			<li><a><i class="sl sl-icon-envelope-open"></i> Teachers</a>
				<ul>
					<li><a href="<?php echo e(route('teachers.list')); ?>">All Teachers </a></li>
					<li><a href="<?php echo e(route('teacher.add')); ?>">Add Teachers</a></li>
					
				</ul>	
			</li>
			<li><a><i class="fa fa-calendar-check-o"></i> Schedules</a>
				<ul>
					<li><a href="<?php echo e(route('schedules.list')); ?>">All Schedules </a></li>
					<li><a href="<?php echo e(route('schedule.add')); ?>">Add Schedule</a></li>
					
				</ul>
			</li>
			<li><a ><i class="sl sl-icon-layers"></i> Departments</a>
				<ul>
					<li><a href="<?php echo e(route('departments.list')); ?>">All Departments </a></li>
					<li><a href="<?php echo e(route('department.add')); ?>">Add Department</a></li>
					
				</ul>
			</li>
			<li><a href="dashboard-bookings.html"><i class="sl sl-icon-star"></i> Ratings</a></li>
			<li><a ><i class="fa fa-users"></i> users</a>
				<ul>
					<li><a href="<?php echo e(route('users.list')); ?>">All Users </a></li>
					<li><a href="<?php echo e(route('user.add')); ?>">Add User</a></li>
				</ul>
			</li>
		</ul>
		
		
		
	</div>
</div>