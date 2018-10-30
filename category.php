<?php
    @require_once("connection.php");
    $text = "";
    $connection = New mySqli($server,$username,$password,$database);
    if($connection->connect_error){
        echo($connection->connect_error);
    }else{
        $statement = "SELECT * FROM `web_contents` WHERE `id` = ".$_GET['id'].";";
        $result = $connection->query($statement);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $title = $row['category_name'];
                $brands = explode(",",$row['brand_images']);
                $text .= $row['content'];
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Mama Home &mdash; <?php echo($title); ?> </title>
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
            p{
                text-align: justify;
            }
        </style>
    </head>
    <body class="appear-animate">
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation panel -->
            <nav class="main-nav js-stick">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="mp-index.html" class="logo">
                            <img src="images/logo-white.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Navigation panel -->
                    <nav class="main-nav dark transparent stick-fixed">
                        <div class="full-wrapper relative clearfix">
                            <!-- Logo ( * your text or image into link tag *) -->
                            <div class="nav-logo-wrap local-scroll">
                                <a href="/new_design" class="logo">
                                    <img src="images/logo-white.png" alt="" />
                                </a>
                            </div>
                            <div class="mobile-nav">
                                <i class="fa fa-bars"></i>
                            </div>
                            <!-- Main Menu -->
                            <div class="inner-nav desktop-nav">
                                <ul class="clearlist scroll-nav local-scroll">
                                    <li class="active"><a href="/new_design">Home</a></li>
                                    <li><a href="/new_design#about">Mama Micro Technology</a></li>
                                    <li><a href="/new_design#services">Products</a></li>
                                    <!-- <li><a href="/new_design#portfolio">Portfolio</a></li> -->
                                    <li><a href="/new_design#news">News</a></li>
                                    <li><a href="/new_design#contact">Contacts</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navigation panel -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter" style="padding-top:35px; padding-bottom:25px;">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                <?php echo($title); ?>
                            </h1>
                            <div class="hs-line-4 font-alt black">
                                <!-- We share our best ideas in our blog -->
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="/new_design">Home</a>&nbsp;/&nbsp;<span>
                                    <?php echo($title); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            <!-- Section -->
            <!-- images -->
            <br>
            <div class="col-md-6 col-md-offset-3">
                <center>
                    <?php
                        $statement = "SELECT * FROM `direct_aligned_partners` WHERE `category_id` = ".$_GET['id'].";";
                        $result = $connection->query($statement);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $link = "<a href='/new_design/brands.php?id=".$row['id']."'><img class='img img-thumbnail' height='60' width='120' src='images/logos/".$row['images']."'></a>&nbsp;";
                                echo($link);
                            }
                        }
                    ?>
                </center>
            </div>
            <section class="page-section" style="padding-top: 10px;">
                <div class="container relative">
                    
                    <div class="row">
                        <!-- <div class="btn btn-primary"> -->
                        <!-- </div> -->
                        <!-- Content -->
                        <div class="col-sm-10 col-sm-offset-1">
                            
                            <!-- Post -->
                            <div class="blog-item mb-80 mb-xs-40">
                                
                                <!-- Text -->
                                <?php
                                    echo($text);
                                ?>
    							
    						</div>
    						<!-- End Post -->
    						
                            <!-- Prev/Next Post -->
                            <!-- <div class="clearfix mt-40">
                                <a href="#" class="blog-item-more left"><i class="fa fa-angle-left"></i>&nbsp;Prev post</a>
                                <a href="#" class="blog-item-more right">Next post&nbsp;<i class="fa fa-angle-right"></i></a>
                            </div> -->
                            <!-- End Prev/Next Post -->
                            
                        </div>
                        <!-- End Content -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
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
                            <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Mama Home</a>.
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
