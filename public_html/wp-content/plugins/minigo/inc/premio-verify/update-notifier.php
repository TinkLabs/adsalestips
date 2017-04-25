<?php
define( 'PLUGIN_NAME', 'MiniGO - Uber Minimal Flat Coming Soon WP Plugin' ); // The theme name
define( 'XML_URL', 'http://premiothemes.com/updates/minigo-wp/updater.xml' ); // The remote notifier XML file containing the latest version of the theme and changelog
define( 'CACHE_INTERVAL', 10800 ); // The time interval for the remote XML cache in the database (10800 seconds = 3 hours)


// The notifier page
function notify_me() { 
	$xml = get_latest_theme_version(CACHE_INTERVAL); // Get the latest remote XML file on our server
	$theme_data = $GLOBALS['minigo_version']; // Read theme current version from the style.css

	if( $xml->latest > $theme_data ) {

	?>
		<div class="buyer-informer notice-blue">
			<p>There is a new version of the <?php echo PLUGIN_NAME; ?> plugin available.</p>
			<p><strong>You have version <?php echo $theme_data; ?> installed, update to version <?php echo $xml->latest; ?></strong></p>
		</div>
		<div class="buyer-informer">
		    <h3>Update Download and Instructions</h3>
		    <p>To update <strong><?php echo PLUGIN_NAME; ?></strong>, go to <a href="http://codecanyon.net/user/<?php echo $GLOBALS['buyer']; ?>/downloads/" target="blank">Codecanyon</a>, and re-download the plugin like you did when you bought it.</p>
		</div>
	    
	    <h3 class="title" style="padding-top: 20px;">Changelog</h3>
	<?php
    echo $xml->changelog;
	}
	else {
		echo '<div style="padding-top: 10px;">There are no updates for <strong>' . PLUGIN_NAME .'</strong>, you are running the latest version! Great!</div>';
	}

}
function get_latest_theme_version($interval) {
	$notifier_file_url = XML_URL;	
	$db_cache_field = 'notifier-cache';
	$db_cache_field_last_updated = 'notifier-cache-last-updated';
	$last = get_option( $db_cache_field_last_updated );
	$now = time();
	// check the cache
	if ( !$last || (( $now - $last ) > $interval) ) {
		// cache doesn't exist, or is old, so refresh it
		if( function_exists('curl_init') ) { // if cURL is available, use it...
			$ch = curl_init($notifier_file_url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			$cache = curl_exec($ch);
			curl_close($ch);
		} else {
			$cache = file_get_contents($notifier_file_url); // ...if not, use the common file_get_contents()
		}
		
		if ($cache) {			
			// we got good results	
			update_option( $db_cache_field, $cache );
			update_option( $db_cache_field_last_updated, time() );
		} 
		// read from the cache file
		$notifier_data = get_option( $db_cache_field );
	}
	else {
		// cache file is fresh enough, so read from it
		$notifier_data = get_option( $db_cache_field );
	}
	
	// Let's see if the $xml data was returned as we expected it to.
	// If it didn't, use the default 1.0 as the latest version so that we don't have problems when the remote server hosting the XML file is down
	if( strpos((string)$notifier_data, '<notifier>') === false ) {
		$notifier_data = '<?xml version="1.0" encoding="UTF-8"?><notifier><latest>1.0</latest><changelog></changelog></notifier>';
	}
	
	// Load the remote XML data into a variable and return it
	$xml = simplexml_load_string($notifier_data); 
	
	return $xml;
}