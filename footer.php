<?php $template_url = get_template_directory_uri(); ?>

<div class="black-bg spacing-top">
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-md-4 col-sm-12 legal">
                    This independent TEDx event is operated under license from TED.<br>
                    Copyright © <?= get_theme_mod('event_name', 'TEDx') ?> <?= date("Y"); ?>. All Rights Reserved.
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
