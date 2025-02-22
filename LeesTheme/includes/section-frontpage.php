<?php if (have_posts()) : while (have_posts()): the_post(); ?>

		<div class="card d-flex border-0 text-dark">
			<div class="row no-gutters">
				<div class="col-12 col-md-4 d-flex align-items-center">
					<a href="index.php?page_id=1310">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url('blog-small'); ?>"
								alt="<?php the_title(); ?>"
								class="card-img px-3 px-md-0">
						<?php endif; ?>
					</a>
				</div>
				<div class="col-12 col-md-8">
					<div class="card-body">
						<div class="blog-content">
							<p>
								If we’ve shared a workspace, you will know me for my appreciation of New Order, World War II knowledge and biscuit generosity. I’m a writer/sub-editor with a 30-year career that includes full-time positions at <em>GQ</em>, <em>Motor Sport</em>, <em>Jack and</em> <em>Front</em>, and freelance stints at <em>Monocle</em>, <em>NME and</em> <em>The Guide</em> (<em>Guardian</em>). I’ve wangled interviews with many of my heroes and written articles on many niche subjects such as electricity pylons and concrete lamp-posts. I’ve just finished a novel – a ghost yarn titled <em>Brian Clough, Geoff Boycott, Peter O’Toole, Tony Wilson, Mark E Smith And Tim Healy In A Haunted House Near Carlisle, 1984</em>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endwhile;
	wp_reset_postdata();
endif; ?>
<!-- end first query here  -->

<!--/*The secondary query. */-->

<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'category__in' => array(5)

);

$my_query = new WP_Query($args);
if ($my_query->have_posts()): while ($my_query->have_posts()) :
		$my_query->the_post();
		$do_not_duplicate = $post->ID; ?>
		<div class="card d-flex border-0 text-dark">
			<div class="row no-gutters">
				<div class="col-12 col-md-4 d-flex align-items-center">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url('blog-small'); ?>"
								alt="<?php the_title(); ?>"
								class="card-img px-3 px-md-0">
						<?php endif; ?>
					</a>
				</div>
				<div class="col-12 col-md-8">
					<div class="card-body">
						<div class="blog-content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>

							<a class="text-secondary font-italic font-weight-bold" href="<?php the_permalink(); ?>">(Read more)</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endwhile;
	wp_reset_postdata();
endif; ?>

<!--/*The third query. */-->

<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'orderby' => 'post_date'

);

$my_query = new WP_Query($args);
if ($my_query->have_posts()): while ($my_query->have_posts()) :
		$my_query->the_post();
		$do_not_duplicate = $post->ID; ?>
		<div class="card d-flex border-0 text-dark">
			<div class="row no-gutters">
				<div class="col-12 col-md-4 d-flex align-items-center">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url('blog-small'); ?>"
								alt="<?php the_title(); ?>"
								class="card-img px-3 px-md-0">
						<?php endif; ?>
					</a>
				</div>
				<div class="col-12 col-md-8">
					<div class="card-body">
						<div class="blog-content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>

							<a class="text-secondary font-italic font-weight-bold" href="<?php the_permalink(); ?>">(Read more)</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endwhile;
	wp_reset_postdata();
endif; ?>