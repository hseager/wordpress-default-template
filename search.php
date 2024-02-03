<?php get_header(); ?>

<div id="main">

	<?php if (have_posts()): ?>

		<h1 class="page-title">Search Results for:
			<?php echo get_search_query(); ?>
		</h1>

		<?php while (have_posts()):
			the_post(); ?>

			<?php the_title(); ?>
			<?php the_content(); ?>

		<?php endwhile; ?>


	<?php else: ?>

		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title">
					<?php _e('Nothing Found', 'twentyeleven'); ?>
				</h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p>
					<?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven'); ?>
				</p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>

</div><!-- #Main -->

<?php get_footer(); ?>