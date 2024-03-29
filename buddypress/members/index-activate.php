<?php get_header( 'buddypress' ); ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_activation_page' ); ?>

		<div
      id="activate-page"
      class="page ncs4-site-margin ncs4-site-margin__size-small"
      style="margin-top:3rem;margin-bottom:5rem;"
    >
			<h3><?php if ( bp_account_was_activated() ) :
				_e( 'Account Activated', 'buddypress' );
			else :
				_e( 'Activate your Account', 'buddypress' );
			endif; ?></h3>

			<?php do_action( 'template_notices' ); ?>

			<?php do_action( 'bp_before_activate_content' ); ?>

			<?php if ( bp_account_was_activated() ) : ?>

				<?php if ( isset( $_GET['e'] ) ) : ?>
					<p><?php _e( 'Your account was activated successfully! Your account details have been sent to you in a separate email.', 'buddypress' ); ?></p>
				<?php else : ?>
					<p><?php printf( __( 'Congratulations! Your account was activated successfully, and now you can register for NCS⁴ Connect membership. You should have received an email titled <strong>Success! NCS<sup>4</sup> Account Activated</strong>. Please follow the instructions on the email to register and pay for membership.</br><strong>Important: You will not have membership access to NCS<sup>4</sup> Connect until payment is received and registration is confirmed.</strong>', 'buddypress' ), "/login" ); ?></p>
				<?php endif; ?>

			<?php else : ?>

				<p><?php _e( 'Please provide a valid activation key.', 'buddypress' ); ?></p>

				<form action="" method="post" class="standard-form" id="activation-form">

					<label for="key"><?php _e( 'Activation Key:', 'buddypress' ); ?></label>
					<input type="text" name="key" id="key" value="<?php echo esc_attr( bp_get_current_activation_key() ); ?>" />

					<p class="submit">
						<input class="ncs4-button ncs4-button__blue" type="submit" name="submit" value="<?php esc_attr_e( 'Activate', 'buddypress' ); ?>" />
					</p>

				</form>

			<?php endif; ?>

			<?php do_action( 'bp_after_activate_content' ); ?>

		</div><!-- .page -->

		<?php do_action( 'bp_after_activation_page' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

<?php get_footer( 'buddypress' ); ?>
