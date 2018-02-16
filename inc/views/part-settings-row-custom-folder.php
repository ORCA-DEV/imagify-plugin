<?php
defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' );
?>
<p class="imagify-custom-folder-line" data-path="<?php echo '{{ABSPATH}}/' === $data['value'] ? '/' : esc_attr( $data['label'] ); ?>">
	<input type="hidden" name="imagify_settings[custom_folders][]" value="<?php echo esc_attr( $data['value'] ); ?>" />
	<?php echo esc_html( $data['label'] ); ?>
	<button type="button" class="imagify-custom-folders-remove"><span class="imagify-custom-folders-remove-text"><?php _e( 'Remove', 'imagify' ); ?></span><i class="dashicons dashicons-no-alt" aria-hidden="true"></i></button>
</p>