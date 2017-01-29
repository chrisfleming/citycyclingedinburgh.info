<h2><?php _e('Profile') ?></h2>
<ul>
	<li><?php printf(__('Welcome, %1$s'), bb_get_profile_link(bb_get_current_user_info( 'name' )));?></li>
	<?php bb_admin_link( 'before=<li>&after=</li>' );?>
	<li><?php bb_logout_link(); ?></li>
</ul>

