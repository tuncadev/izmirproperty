<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current_user = wp_get_current_user();
?>
<div class="houzez-admin-wrapper">
	<?php get_template_part('framework/admin/header'); ?>

	<?php get_template_part('framework/admin/tabs'); ?>

	<div class="admin-houzez-content">
		<h2><?php esc_html_e('Feedback', 'houzez-child'); ?></h2>
		<div class="admin-houzez-row">
			
			<div class="admin-houzez-box-wrap">
				
				<div class="admin-houzez-box">
					<div class="admin-houzez-box-header">
						<div class="dashicons-before dashicons-megaphone"></div><h3><?php esc_html_e('Send your feedback', 'houzez-child'); ?></h3>
					</div><!-- admin-houzez-box-header -->
					<div class="admin-houzez-box-content">
						
						<p><?php esc_html_e('Your feedback and comments have played a major role in determining the features incorporated into Houzez. We’d like to hear your thoughts and ideas on what we should be considering for the next or future updates.', 'houzez-child'); ?></p>

						<form id="admin-houzez-form" class="admin-houzez-form">
							<input type="hidden" name="action" value="houzez_feedback">
							<?php wp_nonce_field( 'houzez_feedback_security', 'houzez_feedback_nonce' ); ?>

							<div class="form-field">
								<label><?php esc_html_e('Email', 'houzez-child'); ?> *</label>
								<input type="email" id="houzez_feedback_email" value="<?php echo esc_attr( $current_user->user_email ); ?>" placeholder="<?php esc_html_e('Enter your email', 'houzez-child'); ?>">
							</div>
							
							<div class="form-field">
								<label><?php esc_html_e('Subject', 'houzez-child'); ?> *</label>
								<select id="houzez_feedback_subject" class="">
									<option value=""><?php esc_html_e('Select', 'houzez-child'); ?></option>
									<option value="Feature Request"><?php esc_html_e('Feature Request', 'houzez-child'); ?></option>
									<option value="Demo Request"><?php esc_html_e('Demo Request', 'houzez-child'); ?></option>
									<option value="Business Inquiry"><?php esc_html_e('Business Inquiry', 'houzez-child'); ?></option>
									<option value="Suggestions"><?php esc_html_e('Suggestions', 'houzez-child'); ?></option>
									<option value="Other"><?php esc_html_e('Other', 'houzez-child'); ?></option>
								</select>
							</div>

							<div class="form-field">
								<label><?php esc_html_e('Message', 'houzez-child'); ?> *</label>
								<textarea rows="6" id="houzez_feedback_message" placeholder="<?php esc_html_e('Enter your message', 'houzez-child'); ?>"></textarea>
							</div>

							<div>
								<?php esc_html_e('Any data submitted through this form is not stored on our servers but just sent to our support email address, so that we are able to process your request.', 'houzez-child'); ?>
							</div>

							<div class="submit">
								<button id="houzez-feedback-submit" type="submit" class="button button-primary"><?php esc_html_e('Send Feedback', 'houzez-child'); ?></button>
							</div>

							<div class="form-field" id="form-messages"></div>
						</form>
					</div><!-- admin-houzez-box-content -->
					
				</div><!-- admin-houzez-box -->

			</div><!-- admin-houzez-box-wrap -->

		</div><!-- admin-houzez-row -->
	</div>
</div>