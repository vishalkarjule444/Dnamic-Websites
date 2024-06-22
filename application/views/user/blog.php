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