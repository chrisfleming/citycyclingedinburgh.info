<?php bb_get_header(); ?>

<?php include 'left-sidebar.php'; ?>

<div id="main">

<?php if ( is_bb_profile() ) profile_menu(); ?>
<?php login_form(); ?>

<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Edit Profile'); ?></h3>
<h2 id="userlogin"><?php echo get_user_name( $user->ID ); ?></h2>
<div class="editpro">
<form method="post" action="<?php profile_tab_link($user->ID, 'edit');  ?>">
<fieldset>
<legend><?php _e('Profile Info'); ?></legend>
<?php bb_profile_data_form(); ?>
</fieldset>

<?php if ( bb_current_user_can( 'edit_users' ) ) : ?>
<fieldset>
<legend><?php _e('Administration'); ?></legend>
<?php bb_profile_admin_form(); ?>
</fieldset>
<?php endif; ?>

<?php if ( bb_get_current_user_info( 'id' ) == $user->ID && bb_current_user_can( 'change_password' ) ) : ?>
<fieldset>
<legend><?php _e('Password'); ?></legend>
<p><?php _e('If you wish to update your password, you may enter a new password twice below: NOTE There must be some content in BOTH name boxes for any changes to this profile to be saved.'); ?></p>
<table>
<tr>
  <th scope="row"><?php _e('New password:'); ?></th>
  <td><input name="pass1" type="password" id="pass1" size="15" maxlength="100" /></td>
</tr>
<tr>
  <th></th>
  <td><input name="pass2" type="password" id="pass2" size="15" maxlength="100" /></td>
</tr>
</table>
</fieldset>
<?php endif; ?>
<p class="submit right">
  <input type="submit" name="Submit" value="<?php echo attribute_escape( __('Update Profile &raquo;') ); ?>" />
</p>
</form>
<form method="post" action="<?php profile_tab_link($user->ID, 'edit');  ?>">
<p class="submit left">
<?php bb_nonce_field( 'edit-profile_' . $user->ID ); ?>
<?php user_delete_button(); ?>
</p>
</form>

</div>
</div>
<?php include 'right-sidebar.php'; ?>

<?php bb_get_footer(); ?>
