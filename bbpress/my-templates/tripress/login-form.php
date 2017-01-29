<form class="login" method="post" action="<?php bb_uri( 'bb-login.php', null, BB_URI_CONTEXT_FORM_ACTION + BB_URI_CONTEXT_BB_USER_FORMS ); ?>">
	<div class="loginformtop">
		<div class="usernamelogin">
			<label>
				<?php _e('Username'); ?><br />
				<input name="user_login" type="text" id="quick_user_login" size="13" maxlength="40" value="<?php if (!is_bool($user_login)) echo $user_login; ?>" tabindex="1" />
			</label>
		</div>
		<div class="passwordlogin">
			<label>
				<?php _e('Password'); ?><br />
				<input name="password" type="password" id="quick_password" size="13" maxlength="40" tabindex="2" />
			</label>

		</div>	
		<input name="re" type="hidden" value="<?php echo $re; ?>" />
		<?php wp_referer_field(); ?>
					<label class="rememberme">
				<?php _e('Remember me'); ?>
				<input name="remember" type="checkbox" id="quick_remember" value="1" tabindex="3"<?php echo $remember_checked; ?> />
			</label>
			<br />
		<input type="submit" name="Submit" class="submit" value="<?php echo esc_attr__( 'Log in &raquo;' ); ?>" tabindex="4" />
		<p class="loginmeta">
			
			<?php
			printf(
				__( '<a href="%1$s">Register</a> - <a href="%2$s">lost password?</a>' ),
				bb_get_uri( 'register.php', null, BB_URI_CONTEXT_A_HREF + BB_URI_CONTEXT_BB_USER_FORMS ),
				bb_get_uri( 'bb-login.php', null, BB_URI_CONTEXT_FORM_ACTION + BB_URI_CONTEXT_BB_USER_FORMS )
			);
			?>
		</p>
	</div>
</form>