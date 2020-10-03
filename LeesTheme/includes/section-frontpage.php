<?php if ( have_posts() ) : while( have_posts() ): the_post(); ?>

	<div class="card d-flex border-0 text-dark">
		<div class="row no-gutters">
			<div class="col-12 col-md-4 d-flex align-items-center">
			   <a href="index.php?page_id=8"> 
				<?php if( has_post_thumbnail() ):?>
					<img src="<?php the_post_thumbnail_url('blog-small');?>" 
						alt="<?php the_title(); ?>" 
						class="card-img px-3 px-md-0">
				<?php endif;?>
				</a>
			</div>
			<div class="col-12 col-md-8">	
				<div class="card-body">
					<div class="blog-content">
					    
						<?php the_excerpt();?>

						<a class="text-secondary font-italic font-weight-bold" href="index.php?page_id=8">(Read more)</a>
					</div>
				</div>
			</div>
		</div>
	</div>		
<?php endwhile; wp_reset_postdata(); 
endif; ?>                                                    
 
<!--/*The secondary query. */-->


<?php 
$args = array(
   'post_type' => 'post',
   'posts_per_page' => 3,
   'category__in'=> array(2,3,4)
   
   );

$my_query = new WP_Query($args);
if ( $my_query->have_posts() ): while ( $my_query->have_posts() ) : 
    $my_query->the_post();
    $do_not_duplicate = $post->ID; ?>
	<div class="card d-flex border-0 text-dark">
		<div class="row no-gutters">
			<div class="col-12 col-md-4 d-flex align-items-center">
			    <a href="<?php the_permalink(); ?>">
				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url('blog-small');?>" 
						alt="<?php the_title(); ?>" 
						class="card-img px-3 px-md-0">
				<?php endif;?>
			    </a>
			</div>
			<div class="col-12 col-md-8">	
				<div class="card-body">
					<div class="blog-content">
					    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						<?php the_excerpt();?>

						<a class="text-secondary font-italic font-weight-bold" href="<?php the_permalink(); ?>">(Read more)</a>
					</div>
				</div>
			</div>	
	    </div>
	</div>	
<?php endwhile; wp_reset_postdata(); 
endif; ?>

