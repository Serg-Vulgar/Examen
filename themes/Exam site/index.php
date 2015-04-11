
<?php get_header(); ?>
	<div class="container">
		<div class="wrapper">

				<div class="main">
						<li class="citate">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, nam.<p>
						</li>
					<ul class="posts">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
						<li class="post" id="post-<?php the_ID(); ?>">
							<div class="thumbhail">
									<img src="images/4-Skokov-Blog_r2_c2.jpg">
							</div>
							<div class="entry">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
									<?php the_content(); ?>
								<div class="metadata"><?php _e('by'); ?><?php the_author(); ?>&#47;<?php comments_popup_link('NoComments', '1 Comment', '% Comments'); ?>
								</div>
							</div>
						</li>
						<?php endwhile; ?>

						<div class="post-nav">
							<?php posts_nav_link(); ?>
						</div>
						<?php else : ?>
							<li class="post">
								<h3><?php _e('Not Found'); ?></h3>
							</li>
					<?php endif; ?>

					</ul>
				</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>