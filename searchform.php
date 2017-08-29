<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'tedx' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
        <span class="input-group-btn">
            <button class="btn btn-danger" type="submit"><i class="fa fa-search fa-fw"></i></button>
        </span>
    </div>
</form>
