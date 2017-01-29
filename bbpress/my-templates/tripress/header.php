<?php
$_head_profile_attr = '';
if ( bb_is_profile() ) {
	global $self;
	if ( !$self ) {
		$_head_profile_attr = ' profile="http://www.w3.org/2006/03/hcard"';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php bb_language_attributes( '1.1' ); ?>>
<head<?php echo $_head_profile_attr; ?>>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bb_title() ?></title>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
	<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?>
<!--[if lte IE 6]>
<style type="text/css">
div#left-sidebar { margin-right:2%; }
div#right-sidebar { margin-left:2%; }
</style>
<![endif]-->
<!--[if lte IE 7]>
<style type="text/css">
label.rememberme input {
	background-color:transparent;
	padding:0;
}
p.loginmeta {
	top:-20px;
	margin-bottom:-35px;
}
</style>
<![endif]-->
<!--[if IE 7]>
<style type="text/css">
div#left-sidebar { margin-right:2.4%; }
div#right-sidebar { margin-left:2.4%; }
</style>
<![endif]-->

<!--[if lte IE 8]>
<style type="text/css">
#login-page fieldset, #register-page fieldset, #profile-page fieldset {
	position:relative;
}
#login-page legend, #register-page legend, #profile-page legend {
	position: absolute;
	top: -10px;
	left: 1em;
	margin-bottom:35px;
}
#profile-menu li a {
	padding:9px 10px;
}
</style>
<![endif]-->
<?php bb_feed_head(); ?>

<?php bb_head(); ?>

</head>
<body id="<?php bb_location(); ?>">
<div id="wrapper">
	<div id="header" class="clear">
		<div class="header-left"></div>
		<div class="header-text">
			<!-- TITLE -->
			<h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
			<?php if ( bb_get_option('description') ) : ?><h2><?php bb_option('description'); ?></h2><?php endif; ?>
			<!-- END TITLE -->
		</div>
		<div class="header-right"></div>
	</div>
	
	<div id="innerwrapper">
		<div id="left-sidebar">
			<div class="core-box">
				<h2><?php _e('Hot Tags'); ?></h2>
				<p class="sidebarheatmap"><?php bb_tag_heat_map(); ?></p>
			</div>
		</div>
		<div id="right-sidebar">
			<div class="core-box">
		
				<div class="loginbox"><?php if ( !in_array( bb_get_location(), array( 'login-page', 'register-page' ) ) ) login_form(); ?></div>
			
				<div class="searchbox">
					<?php search_form(); ?>
				</div>
			</div>
		</div>
		<div id="center-column">
			<div class="core-box">
	
	
			<?php if ( bb_is_profile() ) profile_menu(); ?>
