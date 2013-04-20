<?php if($_COOKIE['recall']!='y') { ?>
<?php get_header(); ?>

<?php get_template_part( 'loop', 'index' );?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php } else { get_template_part('loop','recall');  } ?>