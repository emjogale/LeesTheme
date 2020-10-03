<?php if(have_posts() ) : while(have_posts()): the_post(); ?>
  <div class="card d-flex border-0 text-dark">
    <div class="row no-gutters">
      <div class="col-12 col-md-4 d-flex align-items-center">
        <a href="<?php the_permalink(); ?>">
				<?php if(has_post_thumbnail() ) :?>
					<img src="<?php the_post_thumbnail_url('blog-small');?>" 
						alt="<?php the_title(); ?>" 
						class="card-img px-3 px-md-0">
				<?php endif;?></a>
			</div>
			<div class="col-12 col-md-8">	
				<div class="card-body">
					<div class="blog-content">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
						<?php the_excerpt();?>

						<a class="text-secondary font-italic font-weight-bold"
						 href="<?php the_permalink(); ?>">(Read more)</a>
					</div>
				</div>
			</div>

			

		</div>		
	</div>

<?php endwhile; else: endif; ?>

           