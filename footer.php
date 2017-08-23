<?php $template_url = get_template_directory_uri(); ?>

<div class="black-bg spacing-top">
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 legal">
                    This independent TEDx event is operated under license from <a href="https://www.ted.com/" target="_blank">TED</a>.<br>
                    Copyright © <?= get_theme_mod('event_name', 'TEDx') ?> <?= date("Y"); ?>. All Rights Reserved.
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 web-partners text-right">
                    <div class="built-by gutter-right gutter-bottom">Developed by <a href="//alexjustesen.com">Alex Justesen</a></div>
                </div>
            </div>

        </footer>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
