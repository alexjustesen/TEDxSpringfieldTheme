<ul class="list-unstyled">
    <?php
        if ( is_page_template( 'page_templates/template_home.php' ) ) {
          dynamic_sidebar('sidebar-home');
        }
        elseif ( is_page() ) {
          dynamic_sidebar('sidebar-page');
        }
        else {
          dynamic_sidebar('sidebar-blog');
        }
    ?>
</ul>
