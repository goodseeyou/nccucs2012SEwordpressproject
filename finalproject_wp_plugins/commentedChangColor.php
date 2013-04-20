<?php
/*
Plugin Name: CommentedChangeColor
Plugin URI: 
Description: comment文字變色
Version: 0.1
Author: chihyu
Author URI: s900079@hotmail.com
*/

function main_plugin_do($havechanged)
{
global $wpdb;
$postid=get_the_ID();
$keywordtable=$wpdb->prefix . "segroup_comments";
$mylink=$wpdb->get_results("SELECT distinct keyword,post_id FROM $keywordtable where post_id=$postid");
//$commentPostID=$wpdb->get_results("SELECT post_id FROM $keywordtable");
$n=0;


//$thePostID = $wpdb->post->ID;
//echo $postid;
//print_r($mylink[0]->post_id);
	while($mylink[$n])
	{
	//	print_r($thePostID);
		//if($mylink[$n]->post_id==$postid)
		//{
		//echo "true";
		//the_ID();
	 $changeColor='<span style="background-color: #c4c4c4;"><label>'.$mylink[$n]->keyword.'</label></span>';
	 $havechanged = str_replace($mylink[$n]->keyword,$changeColor,$havechanged);
	 $n++;
	 
	}
return $havechanged;	
}
//$thePostID = $wp_query->post->ID;

add_filter('the_content','main_plugin_do');
//add_filter('the_title','main_plugin_do');



?>