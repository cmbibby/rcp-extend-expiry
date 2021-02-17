<?php
/**
 * Plugin Name:     Rcp Extend Expiry
 * Plugin URI:      https://reelear.com
 * Description:     Extend RCP expiry grace period to 21 days
 * Author:          Chris Bibby
 * Text Domain:     rcp-extend-expiry
 * Domain Path:     /languages
 * Version:         0.1.0
 * GitHub Plugin URI: cmbibby/rcp-extend-expiry
 *
 * @package         Rcp_Extend_Expiry
 */

// Your code starts here.
function ag_rcp_add_expiration_cron_grace_period( $query_args ) {

	$query_args['expiration_date_query']['before'] = date( 'Y-m-d H:i:s', strtotime( '-21 days', current_time( 'timestamp' ) ) );

	return $query_args;

}
add_filter( 'rcp_check_for_expired_memberships_query_args', 'ag_rcp_add_expiration_cron_grace_period' );
