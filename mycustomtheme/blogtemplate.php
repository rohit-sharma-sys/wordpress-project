<?php 
/* Template Name: Blogtemplate*/
?>
<?php 
get_header();
 ?>
<div class="page_titles">
    <?php the_title(); ?>
</div>
</div>
<div>
  <?php the_post_thumbnail('large') ?>
  </div>
<?php 
$args = array(
  'post_type'=> 'post',
  'orderby'    => 'ID',
  'post_status' => 'publish',
  'order'    => 'DESC',
'posts_per_page' =>   -1 
);
$result = new WP_Query( $args );?>
<div class="container p-5">
  <h1 class="our_post">Our Posts</h1>
    <div class="row">
    <div class="col-9">
      <div class="row">
        <?php
             if ( $result-> have_posts() ) : ?>
        <?php while ( $result->have_posts() ) : $result-> the_post();?>
        <div class="col-4 blog_page_sections">
          <div class="blog_page">
              <img class="bd-placeholder-img" width="100%" src="<?php echo  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>">
          </div>
          <div class="blog-content">
            <h4 class=""><?php the_title()?></h4>
           <div><?php the_meta();?></div>
           <p class="card-text"><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
              <a href="<?php echo esc_url( get_permalink());?>">Continue reading</a>
          </div>
        </div>
        <?php endwhile;?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="col-3 bg-light">
        <div class="sidebar">
          <h1 class="sidebarr">Side Bar</h1>
            <?php dynamic_sidebar('Custom Sidebar'); ?>
        </div>
    </div>
  </div>  
</div>    
<?php get_footer(); 
?>