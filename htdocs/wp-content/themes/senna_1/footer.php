
<small id="copy">Copyright &copy; FROG CREATOR PRODUCTION INC. All Rights Reserved.</small>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.hammer-full.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slideshow.js"></script>
<script>
	(function ($) {
        $('div, img').slideShow({
            timeOut: 5000,
            showNavigation: false,
            pauseOnHover: false,
            swipeNavigation: false
        });
}(jQuery));
</script>
<!-- hatena -->
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<!-- pokect -->
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>

<!-- twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- google+ -->
<script type="text/javascript">
window.___gcfg = {lang: 'ja'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- bug fixed contact form 7 -->
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.40.0-2013.08.13'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.5.2'></script>

<?php wp_footer();?>