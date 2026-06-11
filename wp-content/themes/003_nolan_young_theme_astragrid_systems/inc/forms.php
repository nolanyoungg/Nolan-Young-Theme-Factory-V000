<?php
function astragrid_handle_contact_submission() {
  if ( empty( $_POST['astragrid_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['astragrid_contact_nonce'] ) ), 'astragrid_contact' ) ) { wp_die( esc_html__( 'Security check failed.', 'astragrid-systems' ) ); }
  $name = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
  $email = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
  $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );
  $body = "Name: {$name}
Email: {$email}

{$message}";
  wp_mail( get_option( 'admin_email' ), 'AstraGrid contact inquiry', $body );
  wp_safe_redirect( add_query_arg( 'sent', '1', wp_get_referer() ?: home_url( '/contact/' ) ) );
  exit;
}
function astragrid_handle_newsletter_submission() {
  if ( empty( $_POST['astragrid_newsletter_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['astragrid_newsletter_nonce'] ) ), 'astragrid_newsletter' ) ) { wp_die( esc_html__( 'Security check failed.', 'astragrid-systems' ) ); }
  $email = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
  wp_mail( get_option( 'admin_email' ), 'AstraGrid newsletter inquiry', 'Newsletter sign-up: ' . $email );
  wp_safe_redirect( add_query_arg( 'sent', '1', wp_get_referer() ?: home_url( '/' ) ) );
  exit;
}
add_action( 'admin_post_nopriv_astragrid_contact', 'astragrid_handle_contact_submission' );
add_action( 'admin_post_astragrid_contact', 'astragrid_handle_contact_submission' );
add_action( 'admin_post_nopriv_astragrid_newsletter', 'astragrid_handle_newsletter_submission' );
add_action( 'admin_post_astragrid_newsletter', 'astragrid_handle_newsletter_submission' );
