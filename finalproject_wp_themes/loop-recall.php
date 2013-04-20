
<?php
/*
Plugin Name: readComment
Plugin URI: 
Description: 在滑鼠hover產生的視窗中印出comment
Version: 0.1
Author: chihyu
Author URI: s900079@hotmail.com
*/
$keyword=urldecode($_COOKIE['key']);
global $wpdb;
$keywordtable=$wpdb->prefix . "segroup_comments";
$commentID=$wpdb->get_results("SELECT comment_id FROM $keywordtable where keyword='$keyword'");
$commentcon=0;
//print_r($commentID[0]->comment_id);
//ex:把所有keyword 的 comment_ID 存在$commentID[]->comment_id 的陣列裡面
echo "<html>";
//localhost/wordpress/wp-content/themes/finalproject_wp_themes6.13/style.css" type="text/css" media="screen" />";


while($commentID[$commentcon])
{
//$commentID[$commentcon]->comment_id;
//echo $commentID[$commentcon]->comment_id;
$commentIDnum=$commentID[$commentcon]->comment_id;
//echo $commentIDnum;

$table=$wpdb->prefix . "comments";

//echo $table;

$readcomment=$wpdb->get_results("SELECT comment_content FROM $table where comment_ID='$commentIDnum'");
//$commentline=0;
$commentauthor=$wpdb->get_results("SELECT comment_author FROM $table where comment_ID='$commentIDnum'");

echo "<span id='comment_author'>".$commentauthor[0]->comment_author.": "."</span>";

echo "<span id='comment_content'>".$readcomment[0]->comment_content."</span>";

echo "<div></div>";
 
$commentcon++;

}
echo "</html>";

setcookie("recall","");
setcookie("key","");
?>