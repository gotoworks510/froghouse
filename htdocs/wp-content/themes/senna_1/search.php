
<?php
/**
 * index.php
 *
 */
get_header(); ?>

		<div id="contentsArea" class="row">
			<div id="maincontents" class="col span_11">
				<section id="blogposts">
				<h2 class="archive_title h2">
					<span class="icon-8"><?php echo esc_attr(get_search_query()); ?></span>の検索結果
				</h2>
<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
?>
					<article>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<ul class="postmeta">
							<li class="postdate icon-6"><time datetime="<?php the_time(__('Y-m-d')); ?>" pubdate="pubdate"><?php the_time(__('Y/m/d')); ?></time></li>
							<li class="postcate icon-7"><?php the_category(' | ') ?></li>
						</ul>
						<!-- /.meta -->
						<div class="postbody">
<?php the_content('',FALSE,''); ?>
						</div>
						<!-- /.postbody -->
						<footer class="articleFooter">
							<a href="<?php the_permalink() ?>" class="readmore icon-1">続きを読む</a>
						</footer>
					</article>
<?php
		endwhile;
	endif;
?>
<div style="margin: auto; text-align: center;">
	<?php wp_pagenavi(); ?>
</div>
				</section>
				<!-- /#blogposts -->
			</div>
			<!-- /#maincontents.span_10 -->
<?php get_sidebar();?>
		</div>
		<!-- /#contentsArea.row -->
<?php get_footer(); ?>
</body>
</html>