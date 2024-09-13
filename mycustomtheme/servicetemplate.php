<?php /*Template Name: Servicetemplate*/
get_header();
?>
<div class="page_titles container">
    <?php the_title(); ?>
</div>
<div>
  <?php the_post_thumbnail('large') ?>
  </div></div>
  <?php 
$args = array(
  'post_type'=> 'service',
  'orderby'    => 'ID',
  'post_status' => 'publish',
  'order'    => 'DESC',
'posts_per_page' =>   -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );?>
<div class="container">
    <div class="row">
    <div class="col-12 mt-5 mb-5">
      <div class="row mb-5">
        <?php
             if ( $result-> have_posts() ) : ?>
        <?php while ( $result->have_posts() ) : $result-> the_post();?>
        <div class="col-4 service_page_sections ">
          <div class="service_page">
              <img class="bd-placeholder-img" width="100%" src="<?php echo  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>">
          </div>
          <div class="service-content">
            <h4 class=""><?php the_title()?></h4>
           <div><?php the_meta();?></div>
           <p class="card-text"><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
              <a href="<?php echo esc_url( get_permalink());?>">Continue reading</a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>  
</div>
<?php get_footer();?>