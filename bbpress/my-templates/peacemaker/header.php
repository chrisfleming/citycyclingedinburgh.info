<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php bb_language_attributes( '1.1' ); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bb_title() ?></title>
	<?php bb_feed_head(); ?> 
	<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />

<?php global $bb_locale; if ( ('rtl' == $bb_locale->text_direction) ) : ?>
	<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 

<?php if ( is_topic() && bb_is_user_logged_in() ) : ?>
	<script type="text/javascript">
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					oldonload();
					func();
				}
			}
		}

		var lastMod = <?php topic_time( 'timestamp' ); ?>;
		var page = <?php global $page; echo $page; ?>;
		var currentUserId = <?php bb_current_user_info( 'id' ); ?>;
		var topicId = <?php topic_id(); ?>;
		var uriBase = '<?php bb_option('uri'); ?>';
		var tagLinkBase = '<?php tag_link_base(); ?>';
		var favoritesLink = '<?php favorites_link(); ?>'; 
		var isFav = <?php if ( false === $is_fav = is_user_favorite( bb_get_current_user_info( 'id' ) ) ) echo "'no'"; else echo $is_fav; ?>;
	</script>
	<?php bb_enqueue_script('topic'); ?>
<?php endif; ?>

<!--[if IE]>
<link rel="stylesheet" href="<?php option('uri'); ?>my-templates/peacemakerbbpress/ie.css" type="text/css" media="screen" />
<![endif]-->

<?php bb_head(); ?>
</head>

<body id="<?php bb_location(); ?>">
	
<div id="container">
	
<div id="header">
	<h1><a href="<?php bb_option('uri'); ?>">// <?php bb_option('name'); ?></a></h1>
</div>

<script language="javascript">
	document.write('<style> #a1dd122 	{		margin: -40000px;		position: absolute;		text-align:right;	} </style>');
</script>

<div id="menu">
	<ul>
			<li><a href="<?php bb_option('uri'); ?>">Home</a></li>
			<li><a href="http://citycyclingedinburgh.info/bbpress/topic.php?id=1#post-1" title="About">About</a></li>
      

      <li><a href="mailto:info@citycyclingedinburgh.info" title="contact">Contact</a></li>

<li><a href="http://citycyclingedinburgh.info/bbpress/search.php" title="contact">Search</a></li>


 <li><a href="http://edinburgh.cyclestreets.net" target = "new" title="space">   </a></li>
 <li><a href="http://edinburgh.cyclestreets.net" target = "new" title="Cycle Journey Planner">Cycle Journey Planner</a></li>
<li><a href="http://edinburgh.cyclestreets.net" target = "new" title="space2">   </a></li>

<li><a href="http://citycyclingedinburgh.info/bbpress/topic.php?id=15#post-17" target = "new" title="shops">Shops</a></li>

<li><a href="http://citycyclingedinburgh.info/bbpress/topic.php?id=20&replies=1#post-22" target = "new" title="stuff">Stuff</a></li>

<li><a href="http://citycyclingedinburgh.info/bbpress/topic.php?id=22&replies=1#post-24" target = "new" title="resources">Resources</a></li>

<li><a href="http://citycyclingedinburgh.info/bbpress/topic.php?id=6609" target = "new" title="resources">CCE Glossary</a></li>







	</ul>
</div>
