				</div>
			</div>
			<div class="clear"></div>
			<div class="footer">
				<p><?php printf(__('%1$s is proudly powered by <a href="%2$s">bbPress</a>.'), bb_option('name'), "http://bbpress.org") ?><br /> Design: <a href="http://www.spyka.net">Free CSS Templates</a> - bbPress Port by <a href="http://www.awesomestyles.com/bbpress-themes">bbPress Themes</a>. 		<!-- If you like showing off the fact that your server rocks -->
		<!-- 
		<br />
		<?php
		global $bbdb;
		printf(
		__( 'This page generated in %s seconds, using %d queries.' ),
		bb_number_format_i18n( bb_timer_stop(), 2 ),
		bb_number_format_i18n( $bbdb->num_queries )
		);
		?>
		 --></p> 
			</div>	
		</div>
	</div>
<?php do_action('bb_foot'); ?>

</body>
</html>
