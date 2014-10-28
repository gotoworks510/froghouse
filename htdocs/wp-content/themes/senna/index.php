<?php
/**
 * index.php
 *
 */
get_header(); ?>

<div id="mainimage">
	<img
             src="<?php echo get_template_directory_uri(); ?>/img/mainimage1.jpg"
             data-slideshow='<?php echo get_template_directory_uri(); ?>/img/mainimage2.jpg|<?php echo get_template_directory_uri(); ?>/img/mainimage3.jpg'>
</div>
<!-- /#mainimage -->

<div class="container row">
	<div id="maincontents" class="span_9 col">
		<section id="about">
			<h1>FROG HOUSE</h1>
			<p>私達はバンクーバーにあるクリエイター専用のシェアハウスです。皆の目標はただひとつ、世界に通用するクリエイターになること。私達はその登竜門としてバンクーバーを選びました。そのために必要な知識のほとんどはこのシェアハウスで共有することができます。</p>
			<p>カナダでは当たり前の文化であるシェアハウスと、コワーキングスペースなどの共同作業場のアイデアを融合させたシェアハウスで、クリエイターがこの土地で活動するためのゲートウェイに出来ればと思い作りました。</p>
		</section>
		<section id="working">
			<h1>PROJECTS</h1>
			<p>私達がシェアハウスで日々行っていることの一例をご紹介します。多くのクリエイターは日々の業務や勉学に勤しんでいますが、その傍らで多くの知識や経験の共有を行っています。</p>
			<div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/w1.jpg" alt="">
				<h2>ENGLISH SESSION</h2>
				<p>4コマ漫画のリアルな英語フレーズ集を日本で出版したQ先生による英語レッスン</p>
			</div>
			<div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/w2.jpg" alt="">
				<h2>WORKSHOP</h2>
				<p>多くのクリエイターが集まるシェアハウスならでわの多彩なワークショップ</p>
			</div>
			<div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/w3.jpg" alt="">
				<h2>CO-PRODUCING</h2>
				<p>様々なスキルを持つ入居者によって共にプロジェクトを発足</p>
			</div>
			<div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/w4.jpg" alt="">
				<h2>COUNSELLING</h2>
				<p>バンクーバーで必要なビザや学校、仕事などに関する情報シェア</p>
			</div>
		</section>
	</div>
	<!-- /#maincontents.span_10 -->
	<div id="sidecontents" class="span_6 colr">
		<section id="houselist">
			<h1>HOUSES</h1>
			<div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fh1.jpg" alt="">
				<h2>FROG HOUSE - Gama</h2>
				<p>私達Frog Houseのスタートとなったシェアハウスです。</p>
			</div>
			<!-- div class="box">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fh1.jpg" alt="">
				<h2>FROG HOUSE - Hyla</h2>
				<p>クリエイター増加により増設したシェアハウスです。FROG HOUSE - GAMAの近辺にあります。</p>
			</div -->
			<div class="sns">
				<a href="https://www.facebook.com/froghousevancouver?ref=bookmarks" target="_blank"><svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve">
				<path id="Facebook__x28_alt_x29__3_" fill="#4D4D4D" d="M90,15c0-7.9-7.1-15-15-15H15C7.1,0,0,7.1,0,15v60c0,7.9,7.1,15,15,15h30V56
					H34V41h11v-5.8C45,25.1,52.6,16,61.9,16H74v15H61.9c-1.3,0-2.9,1.6-2.9,4v6h15v15H59v34h16c7.9,0,15-7.1,15-15V15z"/>
				</svg></a>
				<span>空室情報はFacebookページよりお伝えしております。
詳しくいご相談をご希望の方は、ページ下記のお問い合わせフォームよりご連絡ください。</span>
			</div>
		</section>
	</div>
	<!-- /#sidecontents.span_6 -->
</div>
<!-- /.container -->

<div class="container row sub">
	<div class="span_16">
		<section id="member">
			<h1>TENANTS</h1>
			<p>Frog Houseへの入居者の皆様と、管理者のご紹介をさせて頂きます。皆様々な経緯を経てバンクーバーへたどり着き、挑戦し続けるメンバーばかりです。私達と共にクリエイターとして世界を目指す方からのご連絡をお待ちしております。</p>
			<div class="admin">
			<?php
				$loop = new WP_Query(array('tax_query' => array( 
				array(
					'taxonomy' => 'category', //タクソノミーを指定
					'field' => 'slug', //ターム名をスラッグで指定する
					'terms' => array( 'manager' ) //表示したいタームをスラッグで指定
				),
				),"post_type" => "member"));
				if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
			?>
				<div class="thum">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<span><?php the_category(', ') ?></span>
					<h3><?php the_title(); ?></h3>
				</div>
			<?php
					endwhile;
				endif;
			?>
			</div>
			<div class="res">
			<?php
				$loop = new WP_Query(array('tax_query' => array( 
				array(
					'taxonomy' => 'category', //タクソノミーを指定
					'field' => 'slug', //ターム名をスラッグで指定する
					'terms' => array( 'tenants' ) //表示したいタームをスラッグで指定
				),
				),"post_type" => "member"));
				if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
			?>
				<div class="thum">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<span><?php the_category(', ') ?></span>
					<h3><?php the_title(); ?></h3>
				</div>
			<?php
					endwhile;
				endif;
			?>
			</div>
		</section>
		<section id="rent">
			<h1>OCCUPANCY</h1>
			<p>月々の家賃については以下のように設定させて頂いております。</p>
			<table>
				<tr>
					<th colspan="2" class="ttl">ベースメント（キッチン／トイレ）</th>
				</tr>
				<tr>
					<th>Room #1 - Occupied</th>
					<td>$750/月</td>
				</tr>
				<tr>
					<th>Room #2 - Occupied</th>
					<td>$750/月</td>
				</tr>
				<tr>
					<th>Room #3 - Occupied</th>
					<td>$750/月</td>
				</tr>
				<tr>
					<th colspan="2" class="ttl">メインフロア（キッチン／トイレ）</th>
				</tr>
				<tr>
					<th>Room #1 - Occupied</th>
					<td>$650/月</td>
				</tr>
				<tr>
					<th>Room #2 - Occupied</th>
					<td>$850/月</td>
				</tr>
				<tr>
					<th colspan="2" class="ttl">二階</th>
				</tr>
				<tr>
					<th>Room #1 - Occupied</th>
					<td>$850/月</td>
				</tr>
				<tr>
					<th>Room #2 - Occupied</th>
					<td>$825/月</td>
				</tr>
			</table>
		</section>
		<section id="access">
			<h1>LOCATION</h1>
			<p>FROG HOUSE - Gama</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10419.64232738925!2d-123.0382018!3d49.2401845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867695de8ca32f%3A0x7038f240c87931fe!2s+Rupert+St%2C+Vancouver%2C+BC+V5R+2J8!5e0!3m2!1sja!2sca!4v1412078163489" width="100%" height="450" frameborder="0" style="border:0"></iframe>
			<!-- p>Frog House - GAMA</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10419.64232738925!2d-123.0382018!3d49.2401845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867695de8ca32f%3A0x7038f240c87931fe!2s4904+Rupert+St%2C+Vancouver%2C+BC+V5R+2J8!5e0!3m2!1sja!2sca!4v1412078163489" width="100%" height="450" frameborder="0" style="border:0"></iframe -->
		</section>
		<section id="inquiry">
			<h1>ENTRY</h1>
			<div id="wufoo-qileu7x1tdk0s9">
			Fill out my <a href="https://gotoworks510.wufoo.com/forms/qileu7x1tdk0s9">online form</a>.
			</div>
			<div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">The easy to use <a href="http://www.wufoo.com/form-builder/">Wufoo form builder</a> helps you make forms easy, fast, and fun.</div>
			<script type="text/javascript">var qileu7x1tdk0s9;(function(d, t) {
			var s = d.createElement(t), options = {
			'userName':'gotoworks510',
			'formHash':'qileu7x1tdk0s9',
			'autoResize':true,
			'height':'897',
			'async':true,
			'host':'wufoo.com',
			'header':'show',
			'ssl':true};
			s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
			s.onload = s.onreadystatechange = function() {
			var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
			try { qileu7x1tdk0s9 = new WufooForm();qileu7x1tdk0s9.initialize(options);qileu7x1tdk0s9.display(); } catch (e) {}};
			var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
			})(document, 'script');</script>
		</section>
	</div>
</div>
<!-- /.container -->

<?php get_footer(); ?>
</body>
</html>