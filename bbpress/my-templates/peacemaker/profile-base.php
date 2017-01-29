<?php bb_get_header(); ?>

<?php include 'left-sidebar.php'; ?>

<div id="main">

<?php if ( is_bb_profile() ) profile_menu(); ?>
<?php login_form(); ?>

<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php echo $profile_page_title; ?></h3>
<h2><?php echo get_user_name( $user->ID ); ?></h2>

<?php bb_profile_base_content(); ?>

</div>
<?php include 'right-sidebar.php'; ?>

<?php bb_get_footer(); ?>
