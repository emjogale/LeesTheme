<?php if(have_posts()) : while(have_posts()): the_post(); ?>


<?php if(has_post_thumbnail()) :?> 
    	<img src="<?php the_post_thumbnail_url('blog-large');?>" 
    	      alt="<?php the_title(); ?>" 
    	      class="img-fluid  img-thumbnail mr-3">
			  <p>
		 <?php endif;?>
		 

	<?php the_content();?>

<?php endwhile; else: endif;?>