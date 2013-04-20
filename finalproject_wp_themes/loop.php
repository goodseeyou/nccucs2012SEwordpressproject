<div id="container">
	<?php $s = 1;?>
	<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
		<div class="box">
			<div id = "text<?php echo $s?>">
			<div class ="picture">
				<a href="<?php the_permalink();?>">
					<?php
						// Set the post content to a variable
						$szPostContent = $post->post_content;
						// Define the pattern to search
						$szSearchPattern = '~<img [^\>]*\ />~';
						// Run preg_match_all to grab all the images and save the results in $aPics
						preg_match_all( $szSearchPattern, $szPostContent, $aPics );
						// Count the results
						$iNumberOfPics = count($aPics[0]);
						
						
						// Check to see if we have at least 1 image
						if ( $iNumberOfPics > 0 )
						{
							// Now here you would do whatever you need to do with the images
							// For this example I'm just going to echo them
							echo $aPics[0][0];
							/*for ( $i=0; $i < $iNumberOfPics ; $i++ )
							{
								echo $aPics[0][$i];
							};*/
						}
						else
						{
							echo ' <img src="/wordpress/wp-content/themes/finalproject_wp_git/finalproject_wp_themes/dw01765.jpg" height="175" width="300"> ' ;
						}
						// ...finish the loop, etc
					?>
				</a>
			</div>
			<div class= "title">
				<a href="<?php the_permalink();?>"><br><?php the_title();?></br></a>
			</div>
			<div class = "snip">
				<a href="<?php the_permalink();?>">
					<?php the_excerpt();?>
				</a>
			</div>
		</div>
		</div>
		<?php $s = $s+1;?>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>