<?php
get_header();
?>
<div class="container">
    <div class="page_titles">
   <?php the_title(); ?>
</div>
</div>

</div>
<div class="m-5 p-5">
    <div class="container">
        <div class="row" id="main-section">
            <div class="col-12">
               <!--   <h1 class="mt-3 mb-5 text-center"> <//?php the_title(); ?></h1> -->
                <div class="single-page-images">
            <?php the_post_thumbnail() ?>
            </div>
            <div class="mt-4">
                <?php the_content(); ?><p>Published: <?php echo get_the_date(); ?></p>
            </div>
        </div>
    </div>
    
</div>
<?php
get_footer();
?>
