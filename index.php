<!DOCTYPE html>
<html>
    <head>
        <title>Mama Home &mdash; One Stop Solution</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">        
        <style>
            .item-list{
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
                /* padding-top: 2% !important; */
                padding-bottom: 5% !important;
                height: 100px;
            }
            .top-border{
                border-style: ridge;
                border-width: thin;
                border-top-style: solid;
                border-top-width: 20px;
                border-top-color: #ff9933;
            }
            .dark{
                background-color: #ff9933;
            }
            .item-list a{
                padding-top: 10% !important;
            }
        </style>
    </head>
    <body class="appear-animate">
        <?php
            @require_once("connection.php");
            $text = "";
            $i = 0;
            $connection = New mySqli($server,$username,$password,$database);
            if($connection->connect_error){
                echo($connection->connect_error);
            }else{

                $statement = "SELECT * FROM `web_contents`;";
                $result = $connection->query($statement);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        if($i == 4){
                            $text .= "</ul>";
                            $i = 0;
                        }
                        if($i == 0){
                            $text .= "<ul class='nav nav-tabs tpl-alt-tabs font-alt pt-40'>";
                        }
                        ++$i;
                        $text .= "<li class='item-list'><div class='top-border'></div>
                                    <a href=\"category.php?id=" . $row['id'] . "\">".
                                    $row['category_name']."</a>
                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                }
            }
        ?>
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            
            <!-- Home section -->
            <section class="home-section bg-scroll bg-dark" data-background="images/full-width-images/section-bg-2.jpg">
                
                <!-- Slider -->
                <div class="fullwidth-slider owl-carousel">
                    
                    <!-- Slide Item -->
                    <div class="js-height-full container">
                        
                        <!-- Hero Content -->
                        <div class="home-content">
                            <div class="home-text">
                                
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h2 class="hs-line-14 font-alt mb-50 mb-xs-30" style="font-family: Arial, Helvetica, sans-serif; font-size:40px;">Mama Home Pvt. Ltd.</h2>
                                <br><br>
                                <div class="local-scroll">
                                    <a href="#about" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">See More</a>
                                    <span class="hidden-xs">&nbsp;</span>
                                    <a href="https://vimeo.com/79802823" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe">Play Reel</a>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30" style="font-family:Arial, Helvetica, sans-serif"> Linking Construction Industry With A professional Approach</h1>
                            </div>
                        </div>
                        <!-- End Hero Content -->
                        
                    </div>
                    <!-- End Slide Item -->
                    
                </div>
                <!-- End Slider -->
                
            </section>
            <!-- End Home section -->
            
            
            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                            <img src="images/logo-white.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="/design"><b>Home</b></a></li>
                            <li><a href="#about"><b>Mama Micro Technology</b></a></li>
                            <li><a href="#services"><b>Products</b></a></li>
                            <!-- <li><a href="#portfolio"><b>Portfolio</b></a></li> -->
                            <li><a href="#news"><b>News</b></a></li>
                            <li><a href="#contact"><b>Contacts</b></a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                        About Mama Micro Technology
                    </h2>
                    
                    <div class="section-text mb-50 mb-sm-20">
                        <div class="row">
                        
                            <div class="col-md-4">
                                <blockquote>
                                    <p>
                                        “Create with the heart; build with the mind.” 
                                    </p>
                                    <footer>
                                        Criss Jami, Killosophy
                                    </footer>
                                </blockquote>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                MAMA Micro Technology Is a Micro Level Process To Fetch The Complete Information Persistently Related To Construction Industry And Process According To The Requirement.
                            </div>
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                We Are Avoiding All The Middle Agents Between The Manufactures And Consumers , This Will Help Reduce The Overall Cost And Consumers Will Get The Best Price.
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->
            
            <!-- Divider -->
            <hr class="mt-0 mb-0 "/>
            <!-- End Divider -->
            
            <!-- Services Section -->
            <section class="page-section" id="services">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Products
                    </h2>
                    
                    <!-- Nav tabs -->
                    <div>
                        <?php echo($text); ?>
                    </div>
                    <!-- End Nav tabs -->
                    
                </div>
            </section>
            <!-- End Services Section -->
            
            
            <!-- Call Action Section -->
            <section class="page-section pt-0 pb-0 banner-section bg-dark hidden" data-background="images/full-width-images/section-bg-2.jpg">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            
                            <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                <div class="banner-content">
                                    <h3 class="banner-heading font-alt">Offers</h3>
                                    <div class="banner-decription text-justify">
                                        At <span style="color:#f0582f"><b>MAMA HOME</b></span> we are always committed to provide you best deals and offers
                                        We at <span style="color:#f0582f"><b>MAMA HOME</b></span> try to benefit our buyers with our exiting offers as we are tied up with big brands.
                                        <span style="color:#f0582f"><b>MAMA HOME</b></span> wishes to build a long relationship with its buyers, hence we have come up with great offers at every time our buyers visit our website.
                                        We <span style="color:#f0582f"><b>MAMA HOME</b></span> provide discount coupons which can be redeemed to enjoy maximum benefit.
                                        Exclusive offer for first time signups
                                    </div>
                                    <div class="local-scroll">
                                        <a href="#contact" class="btn btn-mod btn-w btn-medium btn-round">Lets talk</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-6 banner-image wow fadeInUp" data-wow-duration="1.2s">
                            <img src="images/promo-1.png" alt="" />
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            
            <!-- Portfolio Section -->
            <section class="page-section pb-0 hidden" id="portfolio">
                <div class="relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Portfolio
                    </h2>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="section-text align-center mb-70 mb-xs-40">
                                    In&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor. Lorem ipsum dolor sit amet, 
                                    consectetur adipiscing elit. In&nbsp;maximus ligula semper metus pellentesque mattis.  
                                    Maecenas volutpat, diam enim sagittis quam, id&nbsp;porta quam. Sed id&nbsp;dolor 
                                    consectetur fermentum nibh volutpat, accumsan purus.
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">All works</a>
                        <a href="#branding" class="filter" data-filter=".branding">Branding</a>
                        <a href="#design" class="filter" data-filter=".design">Design</a>
                        <a href="#photography" class="filter" data-filter=".photography">Photography</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography">
                            <a href="images/portfolio/full-project-1.jpg" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-1.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Portrait</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-2.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Vase 3D</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-3.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Boy in T-shirt</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-4.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-5.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix design branding">
                            <a href="images/portfolio/full-project-3.jpg" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-6.jpg" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Young Man</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->
            
            
            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Like Our Creative Works?</h3>
                        <div class="local-scroll">
                            <a href="#contact" class="btn btn-mod btn-w btn-medium btn-round">Start Project</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
            
            <!-- Features Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Why Choose Us?
                    </h2>
                    
                    <!-- Features Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-flag"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Creative</h3>
                                <div class="alt-features-descr align-left">
                                    Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                                    In maximus ligula semper metus pellentesque mattis. 
                                    Maecenas  volutpat, diam enim.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Punctual</h3>
                                <div class="alt-features-descr align-left">
                                    Proin fringilla augue at maximus vestibulum. 
                                    Nam pulvinar vitae neque et porttitor. Praesent sed 
                                    nisi eleifend, lorem fermentum orci sit amet, iaculis libero.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-hotairballoon"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We have magic</h3>
                                <div class="alt-features-descr align-left">
                                    Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. 
                                    Duis placerat ex gravida nibh tristique porta. Nulla facilisi. 
                                    Suspendisse ultricies eros blandit.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-heart"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We love minimalism</h3>
                                <div class="alt-features-descr align-left">
                                    Cras luctus interdum sodales. Quisque quis odio dui. Sedes sit 
                                    amet neque malesuada, lobortis  commodo magna ntesque pharetra 
                                    metus vivera sagittis.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-linegraph"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re responsible</h3>
                                <div class="alt-features-descr align-left">
                                    Fusce aliquet quam eget neque ultrices elementum. Nulla posuere 
                                    felis id arcu blandit sagittis. Eleifender vestibulum purus, sit 
                                    amet vulputate risus.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We're Friendly</h3>
                                <div class="alt-features-descr align-left">
                                    Pulvinar vitae neque et porttitor. Integer non dapibus diam, ac 
                                    eleifend lectus. Praesent sed nisi eleifend, fermentum orci sit 
                                    amet, iaculis libero interdum.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                    </div>
                    <!-- End Features Grid -->
                
                </div>
            </section>
            <!-- End Features Section -->
            
            
            <!-- Testimonials Section -->
            <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="images/full-width-images/section-bg-3.jpg">
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
            </section>
            <!-- End Testimonials Section -->
            
            
            <!-- Blog Section -->
            <section class="page-section" id="news">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                        Latest News
                        
                        <a href="blog-classic-sidebar-right.html" class="section-more right">All News in our blog <i class="fa fa-angle-right"></i></a>
                        
                    </h2>
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-1.jpg" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="">New Web Design Trends</a>
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                <a href="">John Doe</a> | 10 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-2.jpg" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="">Minimalistic Design Forever</a>
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                <a href="">John Doe</a> | 9 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
                            
                            <div class="post-prev-img">
                                <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-3.jpg" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="">Hipster&rsquo;s Style in&nbsp;Web</a>
                            </div>
                            
                            <div class="post-prev-info font-alt">
                                <a href="">John Doe</a> | 7 December
                            </div>
                            
                            <div class="post-prev-text">
                                Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor 
                                consectetur fermentum nibh volutpat, accumsan purus. 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Blog Section -->
            
            
            <!-- Newsletter Section -->
            <section class="small-section bg-gray-lighter">
                <div class="container relative">
                    
                    <form class="form align-center" id="mailchimp">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="newsletter-label font-alt">
                                    Stay informed with our newsletter
                                </div>
                                
                                <div class="mb-20">
                                    <input placeholder="Enter Your Email" class="newsletter-field form-control input-md round mb-xs-10" type="email" pattern=".{5,100}" required/>
                                    
                                    <button type="submit" class="btn btn-mod btn-medium btn-round mb-xs-10">
                                        Subscribe
                                    </button>
                                </div>
                                
                                <div class="form-tip">
                                    <i class="fa fa-info-circle"></i> Please trust us, we will never send you spam
                                </div>
                                
                                <div id="subscribe-result"></div>
                                
                            </div>
                        </div>
                    </form>
                    
                </div>
            </section>
            <!-- End Newsletter Section -->
            
            
            <!-- Contact Section -->
            <section class="page-section" id="contact">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Contact
                    </h2>
                    
                    <div class="row mb-60 mb-xs-40">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Call Us
                                        </div>
                                        <div class="ci-text">
                                            +61 3 8376 6284
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Address
                                        </div>
                                        <div class="ci-text">
                                            245 Quigley Blvd, Ste K
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form -->                            
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <form class="form contact-form" id="contact_form">
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Message -->
                                        <div class="form-group">                                            
                                            <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Inform Tip -->                                        
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> All the fields are required
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Send Button -->
                                        <div class="align-right pt-10">
                                            <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Submit Message</button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                
                                <div id="result"></div>
                            </form>
                            
                        </div>
                    </div>
                    <!-- End Contact Form -->
                    
                </div>
            </section>
            <!-- End Contact Section -->
            
            
            <!-- Google Map -->
            <div class="google-map">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12286.715636833376!2d-75.59837531200412!3d39.65694025682884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2s245+Quigley+Blvd+Ste+K%2C+New+Castle%2C+DE+19720%2C+USA!5e0!3m2!1sen!2sua!4v1530266633608" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                <div class="map-section">
                    
                    <div class="map-toggle">
                        <div class="mt-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="mt-text font-alt">
                            <div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
                            <div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!-- End Google Map -->
            
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                        <a href="#top"><img src="images/logo-white.png" width="78" height="36" alt="" /></a>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->  
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="" target="_blank">&copy; Mama Home</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            <!-- Made with love for great people. -->
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
