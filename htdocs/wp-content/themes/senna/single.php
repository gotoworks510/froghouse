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
			<time datetime="<?php the_time(__('Y-m-d')); ?>" pubdate="pubdate"><?php the_time(__('Y/m/d')); ?></time>
			<h1><?php the_title(); ?></h1>
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
		<div class="postbody">
			<div class="subbody">
			<div class="manga"><img src="<?php the_field('manga'); ?>" alt=""></div>
			<?php the_content('',FALSE,''); ?>
			</div>
		</div>
		<!-- /.postbody -->
		<footer>
			<div style="text-align:center;margin:3% 0;"><a href="/winter2014"><img src="/adsbanner/winter2014.jpg" width="400" alt="留学相談会 in 東京"></a></div>
			<?php get_template_part('character'); ?>
			<div class="sns radiusBox">
				<div class="facebookbtn"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></div>
				<div><a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" class="twitter-share-button" data-count="vertical" data-via="vanboku" data-related="vanboku" data-text="<?php the_title(); ?>">Tweet</a></div>
				<div class="hatenabtn"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="en" title="<?php the_title(); ?>"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></div>
				<div class="pocketbtn"><a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en" data-save-url="<?php the_permalink(); ?>"></a></div>
				<div><a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/linebutton_36x60.png" height="62" alt="LINEで送る" /></a></div>
			</div>
			<!-- /.sns -->
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'bokura'; // required: replace example with your forum shortname

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

		</footer>
		<div id="pageTopBox">
		<div class="pageTop radiusBox">
			<ul>
				<li class="previous"><?php if(get_adjacent_post(false, '', true)) {?>
				<?php previous_post_link('%link ', '前の話', false); ?>
				<?php }else{  ?>
				    <span>前の話</span>
				<?php } ?></li>
				<li class="next"><?php if(get_adjacent_post(false, '', false)) {?>
				<?php next_post_link('%link ', '次の話', false); ?>
				<?php }else{  ?>
				    <span>次の話</span>
				<?php } ?></li>
			</ul>
			<a href="#header" class="pagetopLink iconfont">ページのトップへ</a>
		</div>
		</div>
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