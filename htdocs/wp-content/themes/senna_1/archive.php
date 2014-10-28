<?php
/**
 * index.php
 *
 */
get_header(); ?>

<div id="comicIndexListing" class="container row">

<h2 class="outttl">
<?php _e(""); ?><?php single_cat_title(); ?>の一覧
</h2>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<article class="articleBox radiusBox">
		<header>
			<time datetime="<?php the_time(__('Y-m-d')); ?>" pubdate="pubdate"><?php the_time(__('Y/m/d')); ?></time>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="mate">
					<?php if ($terms = get_the_terms($post->ID, 'character')) { ?>
					<?php
					echo '<p class="ca"><span>登場人物：</span>';
					foreach($terms as $term){
					$term_slug = $term -> slug;
					?>
					<a href="/?character=<?php echo esc_html($term_slug); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo esc_html($term_slug); ?>_r.png" alt=""></a>
					<?php }} ?>
				</p>
				<p class="cate"><span>カテゴリ：</span><?php the_category(' ') ?></p>
			</div>
		</header>
		<div class="listingbody">
			<a href="<?php the_permalink(); ?>"><?php
if(has_post_thumbnail()){
the_post_thumbnail();
}else{
echo '<img src="';
echo get_template_directory_uri();
echo '/img/sample_eye.jpg" alt="No image" />';
}
?></a>
			<div><?php the_excerpt(); ?></div>
		</div>
		<!-- /.postbody -->
	</article>
	<!-- /.articleBox -->

<?php
		endwhile;
	endif;
?>

<?php wp_pagenavi(); ?>

</section>
<!-- /#comicIndex_r -->

</div>
<!-- /#comicIndex -->

</div>
<!-- /#wrap -->
<?php get_footer(); ?>
</body>
</html>