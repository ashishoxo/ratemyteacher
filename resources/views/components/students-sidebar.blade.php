<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-nav">
	<div class="dashboard-nav-inner">

		<ul data-submenu-title="Main">
			<li class="active"><a href="{{route('admin.dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
			
			<li><a><i class="sl sl-icon-envelope-open"></i> My Profile</a>
				<ul>
					<li><a href="{{route('profile.view')}}">View Profile</a></li>
					<li><a href="{{route('profile.edit')}}">Edit Profile</a></li>
					<li><a href="{{route('change.password')}}">Change Password</a></li>
					
				</ul>	
			</li>
			<li class="active"><a><i class="sl sl-icon-layers"></i>Classes</a>
				<ul>
					<li><a href="dashboard-my-listings.html">Lectures <span class="nav-tag green">6</span></a></li>
					<li><a href="dashboard-my-listings.html">Guest Lectures <span class="nav-tag yellow">1</span></a></li>
					<li><a href="dashboard-my-listings.html">Workshops <span class="nav-tag red">2</span></a></li>
				</ul>	
			</li>
			
		</ul>
		
		
		
	</div>
</div>