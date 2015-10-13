<h1><?php _e( 'WP Professionalize', 'wp_admin_style' ); ?></h1>



<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2><?php esc_attr_e( 'Give your site that professional touch!', 'wp_admin_style' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h2><span><?php esc_attr_e( 'Remove or Replace Howdy', 'wp_admin_style' ); ?></span></h2>

						<div class="inside">
							
							<form name="wp_professionalize_settings_form" method="post" action="">
							<input type="hidden" name="wp_professionalize_settings_form_submitted" value="Y"
							<table class="form-table">

								<!-- Remove or Replace Howdy
								Need to add option to revert to default -->

								<formgroup>
								<fieldset>
								<tr valign="top">
									<td scope="row" style="text-align:center">
										<legend class="screen-reader-text">
											<span>Remove or Replace Howdy</span>
										</legend>
										<label title='Remove Howdy from Admin Bar'>
											<input type="radio" name="howdy" value="remove" />
											<span><?php esc_attr_e( 'Remove Howdy', 'wp_admin_style' ); ?></span>
										</label>
									</td>
									<td style="text-align:center">
										<label title='Replace Howdy in the Admin Bar with something else'>
										<input type="radio" name="howdy" value="replace" />
										<span><?php esc_attr_e( 'Replace Howdy', 'wp_admin_style' ); ?></span>
										</label>
									</td>
								</tr>
								<span id="replaceWithWrap">
								<tr valign="top">
									<td scope="row">
										<label for="replaceWith">
										<span><?php esc_attr_e( 'Replace Howdy with:', 'wp_admin_style' ); ?></span>
									</label>
									</td>
									<td><input type="text" value="Welcome" id="replaceWith" class="regular-text" name="replaceWith" /><br></td>
								</tr>
								</span>
								</fieldset>
								</formgroup>
							</table>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

					<div class="postbox">

						<h2><span><?php esc_attr_e( 'Manage Widgets on Dashboard', 'wp_admin_style' ); ?></span></h2>
						<h4><span><?php esc_attr_e( 'Checked Widgets will appear on Dashboard', 'wp_admin_style' ); ?></span></h4>

						<div class="inside">
							
							<formgroup><fieldset><tr>
								
							<legend class="screen-reader-text"><span></span></legend>
							<label for="incoming_links">
								<input name="" type="checkbox" id="users_can_register" value="1" checked/>
								<span><?php esc_attr_e( 'Incoming Links', 'wp_admin_style' ); ?></span>
							</label>

							<label for="plugins">
								<input name="" type="checkbox" id="users_can_register" value="2" checked/>
								<span><?php esc_attr_e( 'Plugins', 'wp_admin_style' ); ?></span>
							</label>
<p>
							<label for="primary">
								<input name="" type="checkbox" id="users_can_register" value="3" checked/>
								<span><?php esc_attr_e( 'Primary', 'wp_admin_style' ); ?></span>
							</label>

							<label for="secondary">
								<input name="" type="checkbox" id="users_can_register" value="4" checked/>
								<span><?php esc_attr_e( 'Secondary', 'wp_admin_style' ); ?></span>
							</label>
<p>
							<label for="quick_press">
								<input name="" type="checkbox" id="users_can_register" value="5" checked/>
								<span><?php esc_attr_e( 'Quick Press', 'wp_admin_style' ); ?></span>
							</label>

							<label for="recent_drafts">
								<input name="" type="checkbox" id="users_can_register" value="6" checked/>
								<span><?php esc_attr_e( 'Recent Drafts', 'wp_admin_style' ); ?></span>
							</label>
<p>
							<label for="recent_comments">
								<input name="" type="checkbox" id="users_can_register" value="7" checked/>
								<span><?php esc_attr_e( 'Recent Comments', 'wp_admin_style' ); ?></span>
							</label>

							<label for="right now">
								<input name="" type="checkbox" id="users_can_register" value="8" checked/>
								<span><?php esc_attr_e( 'Right Now', 'wp_admin_style' ); ?></span>
							</label>
<p>
							<label for="activity">
								<input name="" type="checkbox" id="users_can_register" value="9" checked/>
								<span><?php esc_attr_e( 'Activity', 'wp_admin_style' ); ?></span>
							</label>

							</tr></fieldset></formgroup>

						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

			</div>
			<!-- post-body-content -->

						<br>
						<p><input class="button-primary" type="submit" name="wp_professionalize_settings_form_submit" value="<?php esc_attr_e( 'Save' ); ?>" /></p>

						</form>

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h3><span><?php esc_attr_e(
									'Instructions', 'wp_admin_style'
								); ?></span></h3>

						<div class="inside">
							<p><?php esc_attr_e(
									'Check the box next to the setting you want to activate.',
									'wp_admin_style'
								); ?></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->