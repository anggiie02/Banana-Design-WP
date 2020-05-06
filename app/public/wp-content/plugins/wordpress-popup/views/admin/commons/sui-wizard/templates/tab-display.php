<div class="sui-box" <?php echo 'display' !== $section ? 'style="display: none;"' : '' ; ?> data-tab="display">

	<div class="sui-box-header">

		<h2 class="sui-box-title"><?php esc_html_e( 'Display Options', 'hustle' ); ?></h2>

	</div>

	<div id="hustle-wizard-display" class="sui-box-body">

		<?php
		// SETTING: Display Options.
		self::static_render(
			'admin/commons/sui-wizard/tab-display-options/display-options',
			array(
				'settings'     => $settings,
				'shortcode_id' => $shortcode_id,
			)
		);
		?>

	</div>

	<div class="sui-box-footer">

		<button class="sui-button wpmudev-button-navigation" data-direction="prev">
			<i class="sui-icon-arrow-left" aria-hidden="true"></i> <?php esc_html_e( 'Appearance', 'hustle' ); ?>
		</button>

		<div class="sui-actions-right">

			<button class="sui-button sui-button-icon-right wpmudev-button-navigation" data-direction="next">
				<?php esc_html_e( 'Visibility', 'hustle' ); ?> <i class="sui-icon-arrow-right" aria-hidden="true"></i>
			</button>

		</div>

	</div>

</div>
