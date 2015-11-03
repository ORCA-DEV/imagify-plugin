<?php 
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

/*
 * Get the backup path of a specific attachement.
 *
 * @since 1.0
 *
 * @param  int    $file_path    The attachment path.
 * @return string $backup_path  The backup path.
 */
function get_imagify_attachment_backup_path( $file_path ) {
	$upload_dir       = wp_upload_dir();
	$upload_basedir   = trailingslashit( $upload_dir['basedir'] );
	$backup_dir 	  = $upload_basedir . 'backup/';
	
	/**
	 * Filter the backup directory path
	 *
	 * @since 1.0
	 *
	 * @param string $backup_dir The backup directory path
	*/
	$backup_dir  = apply_filters( 'imagify_backup_directory', $backup_dir );	
	$backup_dir  = trailingslashit( $backup_dir );
	
	$backup_path = str_replace( $upload_basedir, $backup_dir, $file_path );
	return $backup_path;
}