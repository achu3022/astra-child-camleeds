<?php 
require_once('headload.php');
$imgroot = dirname(get_template_directory_uri()) . '/astra-child-camleeds';?>
<body id="body">

    <!-- preloader -->
    <div id="preloader">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

    <!-- 
        Fixed Navigation
        ==================================== -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand" href="#body">
                    <div id="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/camleedsdark.png" alt="Brandi" style=" filter: invert(100%);">
                    </div>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Home</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#Store">Store</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
        End Fixed Navigation
        ==================================== -->



        <!--
        Home Slider
        ==================================== -->

    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Indicators bullet -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <!-- End Indicators bullet -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- single slide -->
                <div class="item active" style="background-image: url('<?php echo $imgroot; ?>/assets/img/banner2.png');">
                    <div class="carousel-caption">
                        <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                        Power Your <span> Storytelling</span>!</h2>
                        <h3 data-wow-duration="1000ms" class="wow slideInLeft animated">
                            Trusted Camera Rentals from  <span
                                class="color">camleeds</span></h3>
                        <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals
                        </p>

                        <ul class="social-links text-center">
                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end single slide -->

                <!-- single slide -->
                <div class="item" style="background-image: url('<?php echo $imgroot; ?>/assets/img/banner3.jpg');">
                    <div class="carousel-caption">
                        <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                        Capture <span> Every Moment</span>!</h2>
                        <h3 data-wow-duration="500ms" class="wow slideInLeft animated"> Unmatched Camera Selection at<span
                                class="color"> Camleeds</span></h3>
                        <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals
                        </p>

                        <ul class="social-links text-center">
                            <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end single slide -->

            </div>
            <!-- End Wrapper for slides -->

        </div>
    </section>

    <!--
        End Home SliderEnd
        ==================================== -->

<!--
        Features
        ==================================== -->

        <section id="About" class="features">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h2>About</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- service item -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-github fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Camera Rentals</h3>
                            <p>
                                Camleeds offers high-quality camera rentals for photographers and videographers in Leeds.
                                Our extensive selection includes the latest DSLR, mirrorless, and video cameras from top brands.
                                Whether you need equipment for a professional shoot or a personal project,
                                we provide flexible rental   options and competitive pricing. 
                                Enhance your creative vision with Camleeds' reliable and well-maintained gear.</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

                <!-- service item -->
                <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-pencil fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Wedding</h3>
                            <p>Capture the magic of your special day with our expert wedding photography 
                                services. At Camleeds, we blend artistic vision with professional skill to
                                 create timeless memories. From intimate moments to grand celebrations, our
                                 photographers ensure every detail is beautifully preserved. We offer 
                                 customizable packages to suit your needs, providing high-quality images 
                                 that reflect the joy and love of your wedding day.</p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

                <!-- service item -->
                <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Shortfilm</h3>
                            <p>
                            Elevate your short film production with our top-tier camera and accessories
                             rental services. At Camleeds, we offer a wide range of cutting-edge
                              equipment, including high-resolution cameras, professional lenses, lighting 
                              kits, and audio gear. Our rental options are flexible and affordable, 
                              designed to meet the needs of independent filmmakers and production teams. 
                              With our reliable and well-maintained gear. </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

            </div>
        </div>
    </section>

    <!--
        End Features
        ==================================== -->





        <!--
        Our Works
        ==================================== -->

    <section id="works" class="works clearfix">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <h2>Products</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                </div>

                <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" data-filter=".camera" class="filter">DSLR Camera</a></li>
                        <li><a href="javascript:;" data-filter=".video" class="filter">Video Camera</a></li>
                        <li><a href="javascript:;" data-filter=".lens" class="filter">Lenses</a></li>
                        <li><a href="javascript:;" data-filter=".accessories" class="filter">Accessories</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="project-wrapper">

            <figure class="mix work-item camera">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item1.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item1.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item camera">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item2.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item2.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item accessories">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item3.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item3.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item accessories">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item4.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item4.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item accessories">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item5.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item5.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item accessories">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item6.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item6.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item accessories">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item7.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item7.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

            <figure class="mix work-item video">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item8.jpg" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/works/item8.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>

        </div>


    </section>

    <!--
        End Our Works
        ==================================== -->



 <!--
        Some fun facts
        ==================================== -->

        <section id="facts" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row number-counters">

                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h2>Some Fun Facts</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
                        data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="fa fa-clock-o fa-3x"></i>
                            <strong data-to="3200">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Hours of Work</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong data-to="120">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa fa-rocket fa-3x"></i>
                            <strong data-to="360">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p> Projects Delivered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="900ms">
                        <div class="counters-item">
                            <i class="fa fa-trophy fa-3x"></i>
                            <strong data-to="6454">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <!-- end first count item -->

                </div>
            </div>
        </div>
    </section>

    <!--
        End Some fun facts
        ==================================== -->

        <!--
        Contact Us
        ==================================== -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Let’s Discuss</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>Capture your vision with expert guidance. Illuminate your path to stunning imagery. Reach out and let’s create
                         a masterpiece together!</p>
                </div>

                <!-- contact address -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Cras at ultrices erat, sed vulputate!</h3>
                        <p>2345 Setwant natrer, 1234,</p>
                        <p>Washington. United States.</p>
                        <p>(401) 1234 567</p>
                    </div>
                </div>
                <!-- end contact address -->
 <!-- contact form -->
 <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3>Say hello!</h3>
                        <form action="#" id="contact-form">
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message"
                                    class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <input type="submit" id="form-submit" class="pull-right" value="Send message">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->

                 <!-- footer social links -->
                 <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                        <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->

            </div>
        </div>

        <!-- Google map -->
        <!--<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>-->
        <!-- End Google map -->

    </section>



        <?php 
        require_once('footercam.php');

require_once('footload.php');
?>