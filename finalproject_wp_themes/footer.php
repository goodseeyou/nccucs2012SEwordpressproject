
<br>
<!--
<?php if(have_posts()):?>
	<?php $recomment=6;?>
		<?php while(have_posts()):the_post();?>
			<a href="<?php the_permalink();?>">
				<?php
				//parse出文章的圖片 在對應的地方貼上
				// Set the post content to a variable
				$szPostContent = $post->post_content;
				// Define the pattern to search
				$szSearchPattern = '~<img [^\>]*\ />~';
				// Run preg_match_all to grab all the images and save the results in $aPics
				preg_match_all( $szSearchPattern, $szPostContent, $aPics );
				// Count the results
				 $iNumberOfPics = count($aPics[0]);
				// Check to see if we have at least 1 image
				//previous_post();
				if ( $iNumberOfPics > 0 )
				{
					 // Now here you would do whatever you need to do with the images
					 // For this example I'm just going to echo them
					 
				   /*for ( $i=0; $i < $iNumberOfPics ; $i++ )//print出一個post的所有圖片
					 {
						  echo $aPics[0][$i];					//[0][0]代表post的第一張
					 };
					 */
					 echo $aPics[0][0];					//[0][0]代表post的第一張
					 
				}
				else{
					
					echo ' <img src="/wordpress/wp-content/themes/finalproject_wp_themes/dw01765.jpg" height="175" width="300"> ' ;
					//echo '<img src="http://www.blogcdn.com/www.joystiq.com/media/2006/07/diablo-art.jpg" border=0>'; 
				//	echo $aPics[0][0];	
					// the_excerpt();
					}
					//next_post('%','Next &raquo;', 'no');
					//next_post_link('<strong>%link</strong>');
					 
					//next_post();
			//$recomment--; 
			//貼圖結束
			?>
			
		</a>
	<?php endwhile; ?>
	<?php endif; ?>
	-->
	</br>
<?php wp_footer(); ?>
</body>
</html>
