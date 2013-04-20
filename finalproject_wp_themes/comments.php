

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'segroup' ); ?></p>
			</div><!-- #comments -->
<?php
		return;
	endif;
?>

<?php if ( 0 /*have_comments()*/ ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'segroup' ),
				number_format_i18n( get_comments_number() )
			);
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'segroup' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'segroup' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; ?>


			<ol class="commentlist">
				<?php //wp_list_comments( array( 'callback' => 'segroup_comment' ) ); ?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'segroup' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'segroup' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; ?>

<?php else :
	if ( ! comments_open() ) :
?>
<?php endif; ?>

<?php endif; ?>

<?php //comment_form(array('comment_notes_after' => '', 'comment_notes_before' => '')); ?>

</div><!-- #comments -->


<div id="fordisplay" style="display:none">
	<div id="close" align="right"><!-- close為關掉視窗的偵測區域 -->
		<table><tr><td>
		click here to close
		</td></tr></table>
	</div>
	
	<?php comment_form(array(
        'comment_notes_after' => '', 'comment_notes_before' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>')); ?>
	
	<form id ="keyword" name="blockform">
		<input id ="keyword" type="text" name="select_value"/>
	</form>
</div>


