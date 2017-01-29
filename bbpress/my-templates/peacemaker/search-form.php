<form id="searchform" action="<?php bb_option('uri'); ?>search.php" method="get">
	<input id="s" name="q" type="text" value="<?php echo attribute_escape( $q ); ?>" />
	<?php if( empty($q) ) : ?>
	<input id="searchsubmit" name="searchsubmit" type="submit" value="search" />
	<?php else : ?>
	<input id="searchsubmit" name="searchsubmit" type="submit" value="search" />
	<?php endif; ?>
</form>

