		<!--
			If you like showing off the fact that your server rocks,
			<h3><?php bb_timer_stop(1); ?> - <?php echo $bbdb->num_queries; ?> queries</h3>
		-->

<!-- I would appreciate it if you can leave the credit link intact. Thank you. -->


	<div id="footer"> 
		<p><?php printf(__('%1$s is proudly powered by <a href="%2$s">bbPress</a>'), bb_option('name'), "http://bbpress.org") ?> - <a href="http://www.bbpressthemes.net">bbPress Theme</a> designed by <a href="http://www.refueled.net">RFDN</a></p>
	</div>
	
		</div>
	</div>
	<?php do_action('bb_foot', ''); ?>

</body>
</html>
