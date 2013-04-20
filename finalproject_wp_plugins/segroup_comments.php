<?php
/*
Plugin Name: segroup_comments
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: "segroup_comments" Database Manager
Version: 1.0
Author: Yshuan
Author URI: 
*/

global $segroup_db_version;
$segroup_db_version = "1.0";

function segroup_install() {
   global $wpdb;
   global $segroup_db_version;

   $table_name = $wpdb->prefix . "segroup_comments";
      
   $sql = "CREATE TABLE $table_name (
  id bigint(20) UNSIGNED AUTO_INCREMENT,
  keyword text default NULL,
  post_id bigint(20) UNSIGNED,
  comment_id bigint(20) UNSIGNED,
  UNIQUE KEY id (id)
    )CHARSET=utf8 COLLATE=utf8_unicode_ci;";

   require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   dbDelta($sql);
 
   add_option("segroup_db_version", $segroup_db_version);
}


register_activation_hook(__FILE__,'segroup_install');
function segroup_update_db_check() {
    global $segroup_db_version;
    if (get_site_option('segroup_db_version') != $segroup_db_version) {
        segroup_install();
    }
}
add_action('plugins_loaded', 'segroup_update_db_check');


function segroup_comment_post($cid = '') {

	global $wpdb;

	$table_name = $wpdb->prefix .  "segroup_comments";
	$keyword = $_COOKIE["commen_keyword"];
	$pid = $wpdb->get_var( $wpdb->prepare(
	"
	SELECT comment_post_ID 
	FROM $wpdb->comments
	WHERE comment_ID = %s"
	, $cid ) 
	);

	$rows_affected = $wpdb->insert( $table_name, array( 'keyword' => $keyword, 'post_id' => $pid, 'comment_id' => $cid ) );

   
	setCookie("foo_test", $keyword);
}
add_action('comment_post', 'segroup_comment_post');


?>