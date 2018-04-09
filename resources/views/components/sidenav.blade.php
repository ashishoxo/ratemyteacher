<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
	<div class="dashboard-nav-inner">

		<ul data-submenu-title="Main">
			<li class="active"><a href="{{route('admin.dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
			
			<li><a><i class="sl sl-icon-envelope-open"></i> Teachers</a>
				<ul>
					<li><a href="{{route('teachers.list')}}">All Teachers </a></li>
					<li><a href="dashboard-my-listings.html">Add Teachers</a></li>
					
				</ul>	
			</li>
			<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Schedules</a></li>
			<li><a href="dashboard-bookings.html"><i class="sl sl-icon-layers"></i> Departments</a></li>
			<li><a href="dashboard-bookings.html"><i class="sl sl-icon-star"></i> Ratings</a></li>
			<li><a href="dashboard-bookings.html"><i class="fa fa-users"></i> users</a></li>
		</ul>
		
		
		
	</div>
</div>