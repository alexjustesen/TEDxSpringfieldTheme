<?php $template_url = get_template_directory_uri(); ?>

<div class="black-bg spacing-top">
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-md-4 col-sm-12 legal">
                    This TEDx event is independently organized.<br>
                    Copyright © <?= get_theme_mod('event_name', 'TEDx') ?> <?= date("Y"); ?>. All Rights Reserved. <a href="/legal-and-privacy/">Legal &amp; Privacy</a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <?= get_theme_mod('twitter_follow_button'); ?>
                </div>
                <div class="col-md-5 col-sm-12 web-partners text-right">
                    <div class="built-by gutter-right gutter-bottom">Built by <a href="//alexjustesen.com">Alex Justesen</a></div>
                </div>
            </div>

        </footer>
    </div>
</div>

<?php wp_footer(); ?>

<!-- Live Reload -->
<?php define('WP_ENV', 'development'); ?>
<?php if (defined('WP_ENV') && WP_ENV !== 'production'): ?>
  <script src="http://0.0.0.0:35729/livereload.js?snipver=1"></script>
<?php endif; ?>

<!-- 3rd Party Embeds -->
<script>!function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + '://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js, fjs);
    }
  }(document, 'script', 'twitter-wjs');</script>
</body>
</html>
