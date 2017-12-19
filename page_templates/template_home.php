<?php
/*
Template Name: Homepage
*/

get_header();
?>

<div class="container contents">
  <div class="row">
    <div class="col-md-9">
      <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </section>

      <section>
        <div class="page-header">
          <p><strong>Latest From the Blog</strong></p>
        </div>
        <?php
        $query = new TEDxQuery();
        $sticky_posts = $query->sticky_posts(3);
        ?>

        <?php if (count($sticky_posts) > 0): ?>
          <div class="row">
            <?php foreach ($sticky_posts as $key => $post): setup_postdata($post); ?>
              <?php if ($key <= 2): //WordPress is garbage
                ?>
                <div class="col-md-4">
                  <?php WP_Render::partial('partials/blog/_post_excerpt.php', ['post' => $post, 'feature_image' => 'post-unsticky', 'hide_excerpt' => true, 'hide_comment' => true, 'append_class' => 'grouped']); ?>
                </div><!-- .col-md-6 -->
              <?php endif; ?>
            <?php endforeach; ?>

          </div>
          <!-- .row -->
        <?php endif; ?>
      </section>

    </div>
    <div class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div><!-- .container contents -->
<?php get_footer(); ?>
