<?php
/**
 * index.php
 *
 */
get_header(); ?>

<div id="comicArticles" class="container row">

<section id="comicSection" class="span_16">

<?php
	if (have_posts()) :
		while (have_posts()) : the_post();
?>

	<article class="articleBox radiusBox">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<div class="postbody">
			<div class="subbody">
			<?php the_content('',FALSE,''); ?>
			</div>
		</div>
		<!-- /.postbody -->
		<footer>
			<div class="sns radiusBox">
				<div class="facebookbtn"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></div>
				<div><a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" class="twitter-share-button" data-count="vertical" data-via="vanboku" data-related="vanboku" data-text="<?php the_title(); ?>">Tweet</a></div>
				<div class="pocketbtn"><a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en" data-save-url="<?php the_permalink(); ?>"></a></div>
				<div><a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/linebutton_36x60.png" height="62" alt="LINEで送る" /></a></div>
			</div>
			<!-- /.sns -->
		</footer>
	</article>
	<!-- /.articleBox radiusBox -->

<?php
	wpb_set_post_views(get_the_ID());
	wpb_get_post_views(get_the_ID());
		endwhile;
	endif;
?>

	<div class="row gutters footContents">

	<?php get_template_part('sidecontents'); ?>
	<?php get_template_part('endcontents'); ?>

	</div>
	<!-- /#asideGroup -->

</section>
<!-- /#comicIndex_r -->

</div>
<!-- /#comicIndex -->

</div>
<!-- /#wrap -->
<?php get_footer(); ?>
</body>
</html>