<?php
/**
 * single-member.php
 *
 */
get_header(); ?>

<div class="container row">
	<div id="maincontents" class="span_5 col">
		<section id="tenants">
			<div class="profile">
				<?php the_post_thumbnail(); ?>
				<h1><?php the_title(); ?></h1>
				<ul>
					<li>
						<h3>Role:</h3>
						<span class="role"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
					</li>
					<li>
						<h3>Living:</h3>
						<span class="livein">FROG HOUSE - <?php echo get_the_term_list( $post->ID,'house_category',' ' ); ?></span>
					</li>
				</ul>
			</div>
		</section>
		<!-- /#tenants -->
	</div>
	<!-- /#maincontents.span_10 -->
	<div id="sidecontents" class="span_10 colr">
		<section id="tenantsDetails">
			<h1>A FEW WORDS ABOUT ME</h1>
			<p>日本でWEB制作者として都内で就職したのち、バンクーバーへ渡加。その後、就職、フリーランス、独立、シェアハウス運営と、幅広くその活動の範囲を広げる。</p>
			<p>ブログ『バンクーバーのうぇぶ屋』を運営し、バンクーバーに興味のあるWEB制作者に向けた情報発信を行う傍ら留学相談を行い、2014年にはカナダへのIT留学をサポートするFrog Creator Production Inc.を設立。</p>
		</section>
		<!-- /#tenantsDetails -->
	</div>
	<!-- /#sidecontents.span_6 -->
</div>
<!-- /.container -->

<?php get_footer(); ?>
</body>
</html>