<?php get_header(); ?>


<div id="comicArticles" class="container row">

<section id="comicSection" class="span_16">

	<article class="articleBox radiusBox">
		<header>
			<h1>ページが見つかりませんでした。</h1>
		</header>
		<div class="postbody">
			<div class="subbody" style="border:none;">
			<div style="margin: -20% 0 -10%;overflow:hidden;"><img src="<?php echo get_template_directory_uri(); ?>/img/404.gif" alt="ページが見つからねぇぞぉゴラァ！！！"></div>
			<p style="text-align:center;">大変申し訳ありませんが、<a href="/">トップページへ</a>お戻りください。</p>
			</div>
		</div>
		<!-- /.postbody -->
	</article>
	<!-- /.articleBox radiusBox -->

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