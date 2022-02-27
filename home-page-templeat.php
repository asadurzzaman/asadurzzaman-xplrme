<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header();
?>
    <section class="course_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-start">
                        <h2><?php echo get_theme_mod( 'courses_title_cb' ,'Browse Courses by Sections') ;  ?></h2>
                    </div>
                    <div class="tab_filter">
                        <ul class="nav">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" >Recommended</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile">Live</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact">Self-Paced</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="contact-tab" data-bs-toggle="tab" data-bs-target="#all">All</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="slick-area">
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                            <div class="single_course tab-pane fade show active" role="tabpanel">
                                <div class="course_img">
                                    <img src="<?php echo get_template_directory_uri();
                                    ?>/assets/img/course.png" alt="">
                                </div>
                                <div class="course_text">
                                    <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                    <ul class="course_cat">
                                        <li><a href="#">Group</a></li>
                                        <li><a href="#">Available</a></li>
                                    </ul>
                                </div>
                                <div class="course_bottom">
                                    <p class="price">$ 35.73</p>
                                    <a href="#"><i class="fas fa-angle-right    "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_course tab-pane fade show active" role="tabpanel">
                                    <div class="course_img">
                                        <img src="<?php echo get_template_directory_uri();
                                        ?>/assets/img/course.png" alt="">
                                    </div>
                                    <div class="course_text">
                                        <h3>Course Title Goes Here with Shorter texts & with Longer Texts</h3>
                                        <ul class="course_cat">
                                            <li><a href="#">Group</a></li>
                                            <li><a href="#">Available</a></li>
                                        </ul>
                                    </div>
                                    <div class="course_bottom">
                                        <p class="price">$ 35.73</p>
                                        <a href="#"><i class="fas fa-angle-right    "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="explore_button text-center">
                        <a href="#">Explore More <i class="fas fa-arrow-right    "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="below_course_section">
        <div class="tab_desc">

            <div class="choose_tab full">
                <ul class="nav">
                    <li>
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-home">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-profile">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#pills-contact">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-home" >
                    <h3>Why You Should Chooss</h3>
                    <h2>XPLRME</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile">
                    <h3>Why You Should Chooss</h3>
                    <h2>XPLRME</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="tab-pane fade" id="pills-contact">
                    <h3>Why You Should Chooss</h3>
                    <h2>XPLRME</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>

            <div class="choose_tab tab_mobile">
                <ul class="nav">
                    <li>
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-home">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-profile">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                    <li>
                        <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#pills-contact">
                            <i class="fas fa-gear    "></i>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="review_title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_header text-center">
                        <h2><?php echo get_theme_mod( 'review_title_cb' ,'What Our Explorers Think') ;  ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="review_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carousel_area autoplay">
                        <?php

                            $args = array(
                            'post_type' => 'review',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                        );

                        $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                    global $post;

                    ?>
                        <div class="singe-item">
                            <div class="single_review text-center">
                                <?php
                                    $id = get_the_ID();
                                    $banner_img = get_post_meta($id, 'post_banner_img', true);
                                    $banner_img = explode(',', $banner_img);
                                    if(!empty($banner_img)) {
                                        ?>
                                    <?php  foreach ($banner_img as $attachment_id) { ?>
                                            <img src="<?php echo wp_get_attachment_url( $attachment_id );?>">
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="carousel-text">
                                <?php the_content(); ?>
                                <div class="author text-center">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    <?php endif; ?>

                                    <h4><?php the_title(); ?></h4>
                                    <h6><?php
                                        $categories = get_the_terms( $post->ID, 'country' );
                                        foreach( $categories as $category ) {
                                            echo  $category->name;
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join_us_section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6 col-lg-6">
                    <div class="img_text">
                        <p>Join us as a</p>
                        <h3>Provider</h3>
                        <p>to start a new</p>
                        <h3>Journey</h3>
                        <div class="sign_up">
                            <a href="#">Sign Up Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();