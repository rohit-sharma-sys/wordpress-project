<?php 
/* Template Name: hometemplate*/
get_header();
 ?>
 <style>
     .meta-information{
color: #fff !important;
     }
     .form a.text-white.btn {
    background: #2c6069;
}
.text.col-sm-12.col-md-6.col-lg-6.px-3 {
    position: sticky;
    top: 0%;
}
a.text-white.btn {
    background:  #2c6069;
}
.child .iconbox_row:nth-child(5){
    display: none !important;
}
 </style>
        <div class="container section1_banner ">
            <div class="row align-items-center">
                <div class="text col-sm-12 col-md-6 col-lg-6 px-3">
                    <p class="text-white sub_heading">Berry Family Law</p>
                    <h1 class="text-white heading"> How Can We Help ?</h1>
                    <p class="text-white ssub_heading"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
                        fugit, ex officiis expedita sunt sit?</p>
                    <a class="text-white btn" href=""> OUR TEAM</a>
                </div>
                <div class="form col-sm-12 col-md-6 col-lg-6 px-3 justify-content-end">
                    <div class="form">
                        <form>
                            <p class="form_heading">Make An Appointment</p>
                            <input class="my-3" type="text" id="name" placeholder=" Name"><br>
                            <input class="my-3" type="e-mail" id="mail" placeholder="E-Mail" required> <br>
                            <input class="my-3" type="text" id="phone" placeholder="Phone"><br>
                            <input class="my-3" type="text" name="messege" id="messege" placeholder="Message"><br>
                            <a class="text-white btn" href=""> SUBMIT NOW</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
/**Display Categories By**/
//  $service_categories = get_terms( array(
//     'taxonomy'   => 'categories', // Replace with your custom category taxonomy name if any
//     'hide_empty' => false, // Set to false to retrieve even empty categories
// ) );

// if ( ! empty( $service_categories ) && ! is_wp_error( $service_categories ) ) {
//     foreach ( $service_categories as $category ) {
//         echo '<h3>' . $category->name . '</h3>';
//         $services = new WP_Query( array(
//             'post_type'      => 'service', // Replace 'services' with your custom post type
//             'posts_per_page' => -1,
//             'tax_query'      => array(
//                 array(
//                     'taxonomy' => 'categories', // Replace with your custom category taxonomy name if any
//                     'field'    => 'slug',
//                     'terms'    => $category->slug,
//                 ),
//             ),
//         ) );

//         if ( $services->have_posts() ) {
//             echo'<div class= row>';
//             echo '<ul>';
//             while ( $services->have_posts() ) {
//                 $services->the_post();
//                 echo '<div class =column>';
//                 echo '<li class=products>';
//                 echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
//                 echo '<p>' . get_the_excerpt() . '</p>';
//                 if ( has_post_thumbnail() ) {
//                     echo '<div class="featured-image">';
//                     the_post_thumbnail( 'thumbnail' ); // Adjust thumbnail size as needed
//                     echo '</div>';
//                 }
//                 echo '</li>';
//                 echo '<div>';
//             }
//             echo '</ul>';
//             echo'</div>';
//             wp_reset_postdata();
//         } else {
//             echo 'No services found in this category.';
//         }
//     }
// } else {
//     echo 'No service categories found.';
// }
?> 


    <div class="container section_2">
        <div class="row py-5">
            <div class=" col-sm-12 col-md-6 col-lg-6 px-3 child">
                <p class="subheading">Who Are We ?</p>
                <p class="form_heading">About Our Office</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime numquam quis tempore! Nihil odit,
                    est
                    dicta repudiandae reprehenderit voluptates temporibus. Dolorem consectetur neque voluptates eius
                    nihil,
                    optio rerum sit corporis repudiandae a culpa doloribus ea odio sapiente impedit!</p>
                <div class="iconbox_row">
                    <div class="iconbox"><span><i class="fa-solid fa-gavel iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> Legal Support</p>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat ratione totam dignissimos
                            ex accusantium, natus labore?</p>
                    </div>
                </div>

                <div class="iconbox_row">
                    <div class="iconbox"><span><i class="fa-solid fa-lock iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> Administrative law</p>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat ratione totam dignissimos
                            ex accusantium, natus labore?</p>
                    </div>
                </div>

                <div class="iconbox_row">
                    <div class="iconbox"><span><i class="fa-regular fa-newspaper iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> Labor Law</p>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat ratione totam dignissimos
                            ex accusantium, natus labore?</p>
                    </div>
                </div>

            </div>
            <div class=" col-sm-12 col-md-6 col-lg-6 px-3">
                <img src="<?php echo bloginfo ('template_directory');?>/images/lady.jpg" alt="" class="section_2img">

            </div>
        </div>
    </div>

    <div class="container-fluid section_3 px-3 ">
        <div class="container ">
            <div class="heading_box">
                <h2 class="sub_heading_t">Committed to Helping</h2>
                <h2 class="sub_heading_t">Our Clint Succed</h2>
            </div>
            <p class="ptxtt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In deserunt ea sequi vitae, quam
                ex
                sunt unde debitis delectus sapiente dolorem aspernatur voluptatum qui ipsum iusto praesentium. Aliquam
                aliquid quisquam eos eligendi quo laboriosam itaque excepturi facilis doloribus? Consequuntur sit
                voluptatum
                itaque illum alias nesciunt explicabo atque non laborum, ipsam similique ipsa fugiat unde cum?</p>
            <div class="row justify-content-between">
                <div class=" col-sm-12 col-md-6 col-lg-3 text-center">
                    <h1 class="number">14 589</h1>
                    <p class="numtxt">Satisfide Customers</p>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3 text-center">
                    <h1 class="number">17 850</h1>
                    <p class="numtxt">Winning Process</p>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3 text-center">
                    <h1 class="number">9756</h1>
                    <p class="numtxt">Helpfull Advice</p>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3 text-center">
                    <h1 class="number">1224</h1>
                    <p class="numtxt">Awards Won</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container section1_banner_4 px-3">
        <div class="section_4txtbox">
            <p class="subheading servicez"> Our Services</p>
            <h1 class="form_heading"> We Advice And Represent</h1>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt debitis voluptas itaque, reiciendis alias
                maiores.</p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div><?php 
            $args = array(
                'post_type'=> 'service',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' =>   3 // this will retrive all the post that is published 
                );
    $result = new WP_Query( $args );?>
        <div class="row services-section">
            <?php
        if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result-> the_post();?>
            <div class="col-sm-12 col-md-6 col-lg-4 text-center ">
                <div class="icon_boxxx shadow p-3">
                     <img class="service_featured
                     -iamge"src="<?php echo  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>">
                    <p class="icon_heading text-center"><?php the_title()?></p>
                   <p class="card-text"><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                    <a class="continue_reading btn" href="<?php echo esc_url( get_permalink( $id ));?>">Continue reading</a>

                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div> 
    <div class="container-fluid section_5 px-3">
        <div class="container">
            <div class="row">
                <div class="section_5txt">
                    <p class="sub_heading_t servicez"> Do You Need A Counsultant</p>
                    <h1 class="sub_heading_t">Ask A Question To an Expert</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ipsam tenetur optio iste,
                        numquam
                        molestiae necessitatibus quam earum quaerat sit nesciunt ea odit animi? Corporis, laborum quas
                        placeat laudantium, accusantium iure architecto qui voluptate beatae cumque molestiae commodi
                        numquam voluptatibus id! Aperiam, dolor aliquam provident obcaecati recusandae et, officiis odio
                        blanditiis labore excepturi, fugiat tempora.</p>
                    <a class="text-white btn" href=""> CONTACT NOW</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-gray py-5 px-3">
        <div class="container">
            <P class="exp text-center servicez"> THE BEST EXPERTS</P>
            <h1 class="headingg text-center">Meet Our Professional Team</h1>
            <p class="believe text-center bft_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                blanditiis rerum
                eaque hic quod optio, repudiandae iste magnam!</p>
            <p class="believe text-center bft_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                blanditiis rerum
                eaque hic </p>
            <div class="row botm">
                <div class=" col-sm-12 col-md-6 col-lg-3">
                    <div class="texm_box">
                        <img class="team_image text-center " src="<?php echo bloginfo ('template_directory');?>/images/team1.jpg" alt="">
                        <h3 class="text-center texm_txt">Daniel Philipe</h3>
                        <p class="text-center txt4">Lawer</p>
                        <i class="fa-brands fa-twitter texm_box_icon m-0"></i>
                        <i class="fa-brands fa-facebook texm_box_icon m-0"></i>
                        <i class="fa-brands fa-instagram texm_box_icon m-0"></i>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3">
                    <div class="texm_box">
                        <img class="team_image text-center"src="<?php echo bloginfo ('template_directory');?>/images/team2.jpg" alt="">
                        <h3 class="text-center texm_txt">Robert Dawson</h3>
                        <p class="text-center txt4">Co-founder</p>
                        <i class="fa-brands fa-twitter texm_box_icon m-0"></i>
                        <i class="fa-brands fa-facebook texm_box_icon m-0"></i>
                        <i class="fa-brands fa-instagram texm_box_icon m-0"></i>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3">
                    <div class="texm_box">
                        <img class="team_image text-center " src="<?php echo bloginfo ('template_directory');?>/images/team4.jpg" alt="">
                        <h3 class="text-center texm_txt">Martha Somole</h3>
                        <p class="text-center txt4">Legal Counsel</p>
                        <i class="fa-brands fa-twitter texm_box_icon m-0"></i>
                        <i class="fa-brands fa-facebook texm_box_icon m-0"></i>
                        <i class="fa-brands fa-instagram texm_box_icon m-0"></i>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-3 ">
                    <div class="texm_box">
                        <img class="team_image text-center " src="<?php echo bloginfo ('template_directory');?>//images/team3.jpg" alt="">
                        <h3 class="text-center texm_txt">Michale Snowflake</h3>
                        <p class="text-center txt4">Notary</p>
                        <i class="fa-brands fa-twitter texm_box_icon m-0"></i>
                        <i class="fa-brands fa-facebook texm_box_icon m-0"></i>
                        <i class="fa-brands fa-instagram texm_box_icon m-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid crouser py-5 px-3">
        <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="rounded-circle shadow-1-strong mb-4"
                        src="<?php echo bloginfo ('template_directory');?>//images/team3.jpg" alt=""
                        style="width: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3 clr_white">Maria Kate</h5>
                            <p class="clr_white">Photographer</p>
                            <p class=" clr_white">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                doloremque.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="rounded-circle shadow-1-strong mb-4"
                        src="<?php echo bloginfo ('template_directory');?>//images/team3.jpg" alt=""
                        style="width: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">John Doe</h5>
                            <p>Web Developer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                nesciunt sint eligendi reprehenderit reiciendis.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="rounded-circle shadow-1-strong mb-4"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                        style="width: 150px;" />
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h5 class="mb-3">Anna Deynah</h5>
                            <p>UX Designer</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                doloremque.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <div class="container px-3 text-center paddingg">
        <p class="text-center blue servicez">Gallary</p>
        <h2 class="text-center blue">See How We Work</h2>
        <p class="text-center bft_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos animi
            soluta
            laudantium?</p>
        <p class="text-center bft_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga.</p>
        <div class="row">
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team2.jpg" alt=""></div>
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team1.jpg" alt=""></div>
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team3.jpg" alt=""></div>
        </div>

        <div class="row">
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team2.jpg" alt=""></div>
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team1.jpg" alt=""></div>
            <div class="imagess col-sm-12 col-md-6 col-lg-4"><img class="gallary_img shadow" src="<?php echo bloginfo ('template_directory');?>/images/team3.jpg" alt=""></div>
        </div>
        <a class="text-white btn text-center" href="">LOAD MORE</a>
    </div>

    <div class="container-fluid section_6 px-3 paddingg">
        <div class="container py-5 text-center ">
            <p class="text-center sub_heading_t servicez">Need A counsulation ?</p>
            <h1 class="text-center sub_heading_t">Call Us Today And Talk For Free</h1>
            <p class="text-center sub_heading_t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
                doloremque reprehenderit voluptas est dolore laudantium quod voluptate cupiditate?</p>
            <p class="text-center sub_heading_t">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos,
                repudiandae?</p>
            <h1 class="text-center number">(905)338-7941</h1>
            <a class="text-white btn text-center" href="">LOAD MORE</a>
        </div>
    </div>

    <div class="container-fluid bg-gray px-3 paddingg">
        <div class="container">
            <p class="text-center blue servicez">Price Table</p>
            <h1 class="text-center blue">The Best Price On The Market</h1>
            <p class="text-center bft_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse cumque iste
                quas,
                dolorem commodi quae illum molestiae natus consequatur?</p>
            <p class="text-center bft_text">Lorem ipsum, dolor sit amet consectetur adipisicing </p>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 py-3">

                    <div class="group shadow text-center">
                        <p class="text-center blue">Basic</p>
                        <h1 class="text-center blue">$99.9</h1>
                        <p class="text-center">per month</p>
                        <p class="text-center">Legal Advice</p>
                        <p class="text-center">Financial Consultancy</p>
                        <p class="text-center">Notery service </p>
                        <p class="text-center">labor low </p>
                        <p class="text-center">Prepration for the court hearing</p>
                        <a class="text-white btn text-center" href="">BUY NOW</a>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-4 py-3">

                    <div class="group shadow text-center">
                        <p class="text-center blue">Gold</p>
                        <h1 class="text-center blue">$159</h1>
                        <p class="text-center">per month</p>
                        <p class="text-center">Legal Advice</p>
                        <p class="text-center">Financial Consultancy</p>
                        <p class="text-center">Notery service </p>
                        <p class="text-center">labor low </p>
                        <p class="text-center">Prepration for the court hearing</p>
                        <a class="text-white btn text-center" href="">BUY NOW</a>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-4 py-3">

                    <div class="group shadow text-center">
                        <p class="text-center blue">Primum</p>
                        <h1 class="text-center blue">$200</h1>
                        <p class="text-center">per month</p>
                        <p class="text-center">Legal Advice</p>
                        <p class="text-center">Financial Consultancy</p>
                        <p class="text-center">Notery service </p>
                        <p class="text-center">labor low </p>
                        <p class="text-center">Prepration for the court hearing</p>
                        <a class="text-white btn text-center" href="">BUY NOW</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid section_7">
        <div class="container">
          <!--   <div class="images_logo">
                <div class="row justify-content-between">
                    <div class="col-sm-12 col-md-6 col-lg-2  py-3">
                        <img class="section_7_img" src="<?php// echo bloginfo ('template_directory');?>/images/brand_2.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2  py-3">
                        <img class="section_7_img" src="<?php// echo bloginfo ('template_directory');?>/images/brand_2.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2  py-3">
                        <img class="section_7_img" src="<?php// echo bloginfo ('template_directory');?>/images/brand_2.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2  py-3">
                        <img class="section_7_img" src="<?php// echo bloginfo ('template_directory');?>/images/brand_2.png" alt="">
                    </div>
                    <div class=" col-sm-12 col-md-6 col-lg-2  py-3">
                        <img class="section_7_img" src="<?php //echo bloginfo ('template_directory');?>/images/brand_2.png" alt="">
                    </div>
                </div>
            </div> -->
            <?php 
            $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
'posts_per_page' =>   3 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );?>
<div class="container">
    <h1 class="text-primary text-center mb-4 border p-1">Leatest Bloge</h1>
    <div class="row mb-2">
        <?php
        if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result-> the_post();?>
                <div class="col-4 blog_page_section position-relative">
                        <div class="col-auto d-none d-lg-block position-relative">
                            <div class="home_blog">
             <img class="bd-placeholder-img home_blog"src="<?php echo  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>">
          </div>
        </div>
<div class="col pt-4 d-flex flex-column">
    <h4 class="text-white"><?php the_title()?></h4>
    <!-- <div class="meta-information"><//?php the_meta();?></div> --> 
    <div class="meta-information"><?php echo get_post_meta(get_the_ID(), 'num', true); ?></div>

    <div class="text-white mb-3"><?php  echo get_the_time('Y-m-d', $post->ID);?></div>
    <!-- <p class="card-text"><?php// echo wp_trim_words( get_the_content(), 5, '...' );?></p> -->
    <a class="continue_reading btn reading" href="<?php echo esc_url( get_permalink( $id ));?>">Continue reading</a>
</div>
    </div>

<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
</div>

</div>


        </div>
    </div>

    <div class="container paddingg">
        <p class="text-center blue servicez">Questions ?</p>
        <h1 class="text-center blue"> Contact us now</h1>
        <p class="text-center bft_text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum fuga
            iste!</p>
        <p class="text-center bft_text"> Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

        <div class="row justify-content-between">
            <div class=" col-sm-12 col-md-12 col-lg-6 py-3">
                <form>
                    <input class="my-3 formname" type="text" placeholder=" Name">
                    <input class="my-3 formemail" type="e-mail" placeholder="E-Mail" required>
                    <input class="my-3 formphone" type="text" placeholder="Phone"><br>
                    <input class="my-3 formwebsite" type="text" name="messege" placeholder="Website Optional"><br>
                    <textarea class="my-3" name="messege" id="" rows="5" placeholder="Message"></textarea>
                    <a class="text-white btn btn_bft" href=""> SUBMIT NOW</a>
                </form>
            </div>
            <div class=" col-sm-12 col-md-12 col-lg-5 py-3">
                <div class="iconbox_row ">
                    <div class="iconbox"><span><i class="fa-solid fa-house-user iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> Our Office</p>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing </p>
                    </div>
                </div>
                <div class="iconbox_row">
                    <div class="iconbox"><span><i class="fa-regular fa-envelope iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> E-mail address</p>
                        <p> example@gmail.com </p>
                    </div>
                </div>                                                    
                <div class="iconbox_row">
                    <div class="iconbox"><span><i class="fa-solid fa-phone iconss"></i></span></div>
                    <div class="text_box">
                        <p class="text_box_txt"> Phone Numbers</p>
                        <p> 0123654789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php get_footer(); ?>