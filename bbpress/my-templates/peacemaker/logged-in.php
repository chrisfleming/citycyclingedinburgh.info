<p class="login">
	<?php printf(__('Welcome, %1$s!'), bb_get_current_user_info( 'name' ));?> <?php bb_profile_link(); ?>
	<small>(<?php bb_admin_link( 'after= | ' );?><?php bb_logout_link(); ?>)</small>
</p>
