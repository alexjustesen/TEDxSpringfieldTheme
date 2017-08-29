<?php $my_theme = wp_get_theme(); ?> 

<div class="black-bg spacing-top">
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-xs-6">
                    <p class="legal">
                    This independent TEDx event is operated under license from <a href="https://www.ted.com/" rel="noopener" target="_blank">TED</a>.<br>
                        Copyright © <?= get_theme_mod('event_name', 'TEDx') ?> <?= date("Y"); ?>. All Rights Reserved.</p>
                </div>
                <div class="col-xs-6">
                    <p class="text-right web-partners">
                        Developed by <a href="https://alexjustesen.com" rel="noopener" target="_blank">Alex Justesen</a>
                        <br/><?php printf( '%1$s is version %2$s', $my_theme->get( 'Name' ), $my_theme->get( 'Version' ) ); ?>
                        <br/><i class="fa fa-code-fork"></i> this WordPress Theme on <a href="https://github.com/alexjustesen/TEDxSpringfieldTheme" rel="noopener" target="_blank"><i class="fa fa-github"></i> GitHub</a>.
                    </p>
                </div>
                <div class="col-xs-12">
                    <p class="text-center"><a class="scrollup"><i class="fa fa-arrow-up fa-fw"></i> Scroll Up</a></p>
                </div>
            </div>

        </footer>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
