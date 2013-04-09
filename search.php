<!-- search.php -->


<?php get_header(); ?>

<div id="container">
<!-- #contents -->
	<div id="contents">
		<section>

			<div id="searchWrap">
			<?php if(have_posts()): ?>
			<h2>Search Result：「<?php the_search_query(); ?>」</h2>
				<ul>
				<?php while(have_posts()): the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>[<?php the_time('Y/m/d'); ?>]</span></li>
					<?php endwhile; ?>
				</ul>
				<?php else: ?>
				<h2>「<span><?php the_search_query(); ?></span>」not find results.</h2>
				<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
			<!-- /#searchWrap -->

		</section>
	</div>
	<!-- /#contents -->

<?php get_sidebar(); ?>
<!-- /#sidebar -->

</div>
<!-- /#container -->

<?php get_footer(); ?>