
        <!--End Main Header One-->

<?php
include("navbar.php");
?>

        <!--Start Main Slider One-->
        <section class="main-slider main-slider-one">
            <div class="main-slider-one__inner">
                <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                    data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow2\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                    <?php
                    foreach($slides as $row)
                    {
                    ?>
                    

                    <!--Start Main Slider One Single-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url(<?=base_url()?>uploads/<?=$row['slider_image']?>)"></div>
                        

                        <div class="container">
                            <div class="main-slider-one__content text-center">
                                

                                <div class="title">
                                    <h2><?=$row['slider_heading']?></h2>
                                </div>

                                <div class="text">
                                    <p><?=$row['slider_subheading']?></p>
                                </div>

                                <div class="main-slider-one__content-btn">
                                    <a class="thm-btn" href="contact.html">View Our Services</a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--End Main Slider One Single-->
                    <?php
                    }
                    ?>
                    
                </div>
            </div>
        </section>
        <!--End Main Slider One-->
<!--  -->
        
        <!--Start Intro One-->
        <section class="intro-one">
            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shap.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <!--Start Intro One Single-->
                    <div class="col-xl-4  d-inline-block col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="intro-one__single">
                            <div class="intro-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$feat[0]['feature_image']?>" alt="#">
                                </div>

                            </div>

                            <div class="intro-one__single-content text-center">
                                <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shape1.png" alt="#"></div>
                                <h2><a href="#"><?=$feat[0]['feature_title']?></a></h2>
                                <p><?=$feat[0]['feature_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Intro One Single-->
                
                    <!--Start Intro One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="intro-one__single">
                            <div class="intro-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$feat[1]['feature_image']?>" alt="#">
                                </div>

                            </div>

                            <div class="intro-one__single-content text-center">
                                <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shape1.png" alt="#"></div>
                                <h2><a href="#"><?=$feat[1]['feature_title']?></a></h2>
                                <p><?=$feat[1]['feature_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Intro One Single-->

                    <!--Start Intro One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="intro-one__single">
                            <div class="intro-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$feat[2]['feature_image']?>" alt="#">
                                </div>
                                
                            </div>

                            <div class="intro-one__single-content text-center">
                                <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shape1.png" alt="#"></div>
                                <h2><a href="#"><?=$feat[2]['feature_title']?></a></h2>
                                <p><?=$feat[2]['feature_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Intro One Single-->
                </div>
            </div>
        </section>
        <!--End Intro One-->
        
        <!--Start About One-->
        <section class="about-one">
            <div class="shape5 rotate-me"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape4.png" alt="#"></div>
            <div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape5.png" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start About One Content-->
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <div class="inner">
                                        <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png"
                                                alt="#">
                                        </div>
                                        <div class="text">
                                            <p>introduce Company</p>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="sec-title__title"><?=$abou[0]['about_title']?></h2>
                            </div>

                            <div class="about-one__content-text1">
                                <p><?=$abou[0]['about_subtitle']?></p>
                                <h2>Ready to transform your business?</h2>
                            </div>

                            <div class="about-one__content-text2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text2-single">
                                            <div class="icon-box">
                                                <div class="shape1"></div>
                                                <span class="icon-buoy-help"></span>
                                            </div>

                                            <div class="content-box">
                                                <h3>Tech Solution</h3>
                                                <p>There are many variations
                                                    of passages of lorem </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text2-single">
                                            <div class="icon-box">
                                                <div class="shape1"></div>
                                                <span class="icon-answer-call"></span>
                                            </div>

                                            <div class="content-box">
                                                <h3>Quick support</h3>
                                                <p>There are many variations
                                                    of passages of lorem </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-one__content-text3">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text3-progress">
                                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape1.png"
                                                    alt="#"></div>
                                            <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape2.png"
                                                    alt="#"></div>
                                            <div class="progress-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#ffffff"
                                                        data-bgColor="#fcbb54" data-width="80" data-height="80"
                                                        data-linecap="normal" value="95">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="<?=$abou[0]['about_project_solution']?>" data-speed="2000"></span><span
                                                            class="count-Parsent">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h3>IT Project Solution</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text3-content">
                                            <p><?=$abou[0]['about_subtitle']?></p>
                                            <ul>
                                                <li>
                                                    <p> <span class="icon-check-circle"></span> <?=$abou[0]['about_content']?></p>
                                                </li>

                                                <li>
                                                    <p> <span class="icon-check-circle"></span> <?=$abou[1]['about_content']?></p>
                                                </li>

                                                <li>
                                                    <p> <span class="icon-check-circle"></span> <?=$abou[2]['about_content']?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Content-->

                    <!--Start About One Img-->
                    <div class="col-xl-6">
                        <div class="about-one__img">
                            <div class="about-one__img1">
                                <img src="<?=base_url()?>uploads/<?=$abou[0]['image1']?>" alt="#">
                            </div>

                            <div class="about-one__img2">
                                <div class="shape4 rotate-me"><img src="assets/user_assets/images/shapes/about-v1-shape3.png"
                                        alt="#"></div>
                                <ul>
                                    <li>
                                        <div class="img-box1">
                                            <img src="<?=base_url()?>uploads/<?=$abou[0]['image3']?>" alt="#">
                                        </div>
                                    </li>

                                    <li>
                                        <div class="img-box2">
                                            <img src="<?=base_url()?>uploads/<?=$abou[1]['image1']?>" alt="#">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End About One Img-->
                </div>
            </div>
        </section>
        <!--End About One-->

        <!--Start Services One-->
        <section class="services-one">
            <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape2.png" alt="#"></div>
            <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape3.png" alt="#"></div>
            <div class="shape5"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape4.png" alt="#"></div>
            <div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape5.png" alt="#"></div>
            <div class="shape7"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape6.png" alt="#"></div>
            <div class="shape8"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape7.png" alt="#"></div>
            <div class="shape9"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape8.png" alt="#"></div>
            <div class="shape10"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape9.png" alt="#"></div>
            <div class="shape11"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape10.png" alt="#"></div>
            <div class="shape12"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape11.png" alt="#"></div>
            <div class="container">
                <div class="services-one__top">
                    <div class="sec-title">
                        <div class="sec-title__tagline">
                            <div class="inner">
                                <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                                </div>
                                <div class="text">
                                    <p>Our Services</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="sec-title__title">Providing complete <br>
                            Professional IT Services</h2>
                    </div>

                    <div class="services-one__top-text">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit asper
                            natur aut odit aut fugit, sed quia consequuntur magni dolor
                            qui ratione business</p>
                    </div>
                </div>

                <div class="row">
                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape1.png" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-server-data"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html"><?=$serv[0]['services_title']?></a></h2>
                                <p><?=$serv[0]['services_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape1.png" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-laptop"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html"><?=$serv[1]['services_title']?></a></h2>
                                <p><?=$serv[1]['services_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape1.png" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-hard-drive"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html"><?=$serv[2]['services_title']?></a></h2>
                                <p><?=$serv[2]['services_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape1.png" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-marketing-analysis"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html"><?=$serv[3]['services_title']?></a></h2>
                                <p><?=$serv[3]['services_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->
                </div>

                <div class="services-one__bottom text-center">
                    <h2>We’re Ready Grow your IT Solution !</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit asper natur aut odit aut fugit <br>
                        sed quia consequuntur magni dolor qui ratione business</p>
                    <div class="btn-box">
                        <a class="thm-btn" href="#">More Solution</a>
                    </div>
                </div>

            </div>
        </section>
        <!--End Services One-->

        <!--Start Video One-->
        <section class="video-one">
            <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape1.png" alt="#"></div>
            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape1.png" alt="#"></div>
            <div class="container">
                <div class="video-one__inner">
                    <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape3.png" alt="#"></div>
                    <div class="video-one__bg"
                        style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/video-v1-bg.jpg);"></div>

                    <div class=" video-one__icon">
                        <a href="https://www.youtube.com/watch?v=pVE92TNDwUk" class="video-one__btn video-popup">
                            <span class="icon-play-button"></span>
                        </a>
                        <span class="border-animation border-1"></span>
                        <span class="border-animation border-2"></span>
                        <span class="border-animation border-3"></span>
                    </div>
                    <div class="title-box text-center">
                        <h2>We are IT Solution Specialists.</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video One-->

        <!--Start Testimonial One-->
        <section class="testimonial-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                            </div>
                            <div class="text">
                                <p>Our Testimonial</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Our Client Feedback What <br>
                        They’re Talking?</h2>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel case-one__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-next\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        },
                                        "1500": {
                                            "items": 2
                                        }
                                    }
                                }'>

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-img">
                                        <div class="testimonial-one__single-img-bg"
                                            style="background-image: url(<?=base_url()?>assets/user_assets/images/shapes/testimonial-v1-shape1.png);">
                                        </div>
                                        <img src="<?=base_url()?>uploads/<?=$feed[0]['feedback_image']?>" alt="#">
                                    </div>

                                    <div class="testimonial-one__single-content">
                                        <div class="testimonial-one__single-content-top">
                                            <div class="icon-box">
                                                <span class="icon-bubble-message"></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star2"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="testimonial-one__single-content-middle">
                                            <h2><?=$feed[0]['feedback_title']?></h2>
                                            <p><?=$feed[0]['feedback_subtitle']?></p>
                                        </div>

                                        <div class="testimonial-one__single-content-bottom">
                                            <h2><?=$feed[0]['feedback_personname']?></h2>
                                            <p><?=$feed[0]['feedback_persondegree']?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->


                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-img">
                                        <div class="testimonial-one__single-img-bg"
                                            style="background-image: url(<?=base_url()?>assets/user_assets/images/shapes/testimonial-v1-shape1.png);">
                                        </div>
                                        <img src="<?=base_url()?>uploads/<?=$feed2[0]['feedback2_image']?>" alt="#">
                                    </div>

                                    <div class="testimonial-one__single-content">
                                        <div class="testimonial-one__single-content-top">
                                            <div class="icon-box">
                                                <span class="icon-bubble-message"></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star2"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="testimonial-one__single-content-middle">
                                            <h2><?=$feed2[0]['feedback2_title']?></h2>
                                            <p><?=$feed2[0]['feedback2_subtitle']?></p>
                                        </div>

                                        <div class="testimonial-one__single-content-bottom">
                                            <h2><?=$feed2[0]['feedback2_personname']?></h2>
                                            <p><?=$feed2[0]['feedback2_persondegree']?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial One-->

        <!--Start Projects One-->
        <section class="projects-one">
            <div class="shape5"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape5.png" alt="#"></div>
            <div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape6.png" alt="#"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                            </div>
                            <div class="text">
                                <p>Our Completed Projects</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Technology Solutions Recent <br>
                        Our Tech Projects</h2>
                </div>
                <div class="row">
                    <!--Start Projects One Single-->
                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$proj[0]['project_image']?>" alt="#">
                                    <div class="overlay-content">
                                        <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape1.png"
                                                alt="#"></div>
                                        <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape2.png"
                                                alt="#"></div>
                                        <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape3.png"
                                                alt="#"></div>
                                        <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape4.png"
                                                alt="#"></div>
                                        <div class="content-box">
                                            <p class="text1">Tech</p>
                                            <h3><a href="projects-details.html"><?=$proj[0]['project_title']?></a></h3>
                                            <p class="text2"><?=$proj[0]['project_subtitle']?></p>
                                        </div>

                                        <div class="icon-box">
                                            <a href="projects-details.html"><span class="icon-right-arrow3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Projects One Single-->

                    <!--Start Projects One Single-->
                    <div class="col-xl-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$proj[1]['project_image']?>" alt="#">
                                    <div class="overlay-content">
                                        <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape1.png"
                                                alt="#"></div>
                                        <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape2.png"
                                                alt="#"></div>
                                        <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape3.png"
                                                alt="#"></div>
                                        <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape4.png"
                                                alt="#"></div>
                                        <div class="content-box">
                                            <p class="text1">Tech</p>
                                            <h3><a href="projects-details.html"><?=$proj[1]['project_title']?></a></h3>
                                            <p class="text2"><?=$proj[1]['project_subtitle']?></p>
                                        </div>

                                        <div class="icon-box">
                                            <a href="projects-details.html"><span class="icon-right-arrow3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Projects One Single-->


                    <!--Start Projects One Single-->
                    <div class="col-xl-4  wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$proj[2]['project_image']?>" alt="#">
                                    <div class="overlay-content">
                                        <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape1.png"
                                                alt="#"></div>
                                        <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape2.png"
                                                alt="#"></div>
                                        <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape3.png"
                                                alt="#"></div>
                                        <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape4.png"
                                                alt="#"></div>
                                        <div class="content-box">
                                            <p class="text1">Tech</p>
                                            <h3><a href="projects-details.html"><?=$proj[2]['project_title']?></a></h3>
                                            <p class="text2"><?=$proj[2]['project_subtitle']?></p>
                                        </div>

                                        <div class="icon-box">
                                            <a href="projects-details.html"><span class="icon-right-arrow3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Projects One Single-->
                </div>
            </div>
        </section>
        <!--End Projects One-->

        <!--Start Cta One-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/cta-v1-bg.jpg);">
                    </div>
                    <div class="cta-one__text">
                        <h2>IT Services Customized for Your Agency</h2>
                    </div>

                    <div class="cta-one__btn">
                        <a href="contact.html">View All Protfolio</a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One-->

        <!--Start Counter One-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/counter-v1-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
                                </div>
                                <div class="content-box">
                                    <h2><span class="odometer" data-count="<?=$count[0]["counter_count"]?>">00</span> <span class="plus">+</span>
                                    </h2>
                                </div>
                            </div>

                            <div class="counter-one__single-text">
                                <h3><?=$count[0]["counter_desc"]?></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
                                </div>
                                <div class="content-box">
                                    <h2><span class="odometer" data-count="<?=$count[1]["counter_count"]?>">00</span> <span class="plus">+</span>
                                    </h2>
                                </div>
                            </div>

                            <div class="counter-one__single-text">
                                <h3><?=$count[1]["counter_desc"]?></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
                                </div>
                                <div class="content-box">
                                    <h2><span class="odometer" data-count="<?=$count[2]["counter_count"]?>">00</span> <span class="plus">+</span>
                                    </h2>
                                </div>
                            </div>

                            <div class="counter-one__single-text">
                                <h3><?=$count[2]["counter_desc"]?></h3>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->
                </div>

                <div class="counter-one__bottom text-center">
                    <h2>Assisting you in Overcoming your <br>
                        Technological Obstacles</h2>
                    <div class="btn-box">
                        <a class="thm-btn" href="contact.html">Discover more </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Counter One-->

        <!--Start Team One-->
        <section class="team-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                            </div>
                            <div class="text">
                                <p>Our Team</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Our Professional Team</h2>
                </div>
                <div class="row">
                    <!--Start Team One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$tea[0]['person_image']?>" alt="#">
                                    <div class="social-link">
                                        <ul>
                                            <li>
                                                <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                            </li>
                                            <li>
                                                <a class="in" href="#"><span class="icon-instagram"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="team-details.html"><?=$tea[0]['person_name']?></a></h2>
                                <p><?=$tea[0]['person_post']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                    <!--Start Team One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$tea[1]['person_image']?>" alt="#">
                                    <div class="social-link">
                                        <ul>
                                            <li>
                                                <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                            </li>
                                            <li>
                                                <a class="in" href="#"><span class="icon-instagram"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="team-details.html"><?=$tea[1]['person_name']?></a></h2>
                                <p><?=$tea[1]['person_post']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                    <!--Start Team One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$tea[2]['person_image']?>" alt="#">
                                    <div class="social-link">
                                        <ul>
                                            <li>
                                                <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                            </li>
                                            <li>
                                                <a class="in" href="#"><span class="icon-instagram"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2><a href="team-details.html"><?=$tea[2]['person_name']?></a></h2>
                                <p><?=$tea[2]['person_post']?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->
                </div>
            </div>
        </section>
        <!--End Team One-->

        <!--Start Blog One-->
        <section class="blog-one">
            <div class="blog-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/blog-v1-bg.jpg);"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                            </div>
                            <div class="text">
                                <p>Our News Post</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Latest News & Articles</h2>
                </div>
                <div class="row">
                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=base_url()?>uploads/<?=$new[0]['news_image']?>" alt="#">
                                <div class="text-box"><?=$new[0]['news_title']?></div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user3"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">By Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?=$new[0]['news_comment']?> Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <h2><a href="blog-details.html"><?=$new[0]['news_subtitle']?></a>
                                </h2>
                                <div class="btn-box">
                                    <a href="blog-details.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=base_url()?>uploads/<?=$new[1]['news_image']?>" alt="#">
                                <div class="text-box"><?=$new[1]['news_title']?></div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user3"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">By Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?=$new[1]['news_comment']?> Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <h2><a href="blog-details.html"><?=$new[1]['news_subtitle']?></a></h2>
                                <div class="btn-box">
                                    <a href="blog-details.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                     <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=base_url()?>uploads/<?=$new[2]['news_image']?>" alt="#">
                                <div class="text-box"><?=$new[2]['news_title']?></div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user3"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">By Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#"><?=$new[2]['news_comment']?> Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <h2><a href="blog-details.html"><?=$new[2]['news_subtitle']?></a></h2>
                                <div class="btn-box">
                                    <a href="blog-details.html">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                </div>
            </div>
        </section>
        <!--End Blog One-->

        <!--Start Google Map One-->
        <section class="google-map-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map-one__map" allowfullscreen></iframe>
        </section>
        <!--End Google Map One-->


