<!DOCTYPE html>
<html lang="en">

 <head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Four || Ontech || Ontech HTML 5 Template</title>
  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/user_assets/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/user_assets/images/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/user_assets/images/favicons/favicon-16x16.png" />
  <link rel="manifest" href="<?=base_url()?>assets/user_assets/images/favicons/site.webmanifest" />
  <meta name="description" content="Ontech HTML 5 Template " />

  <!-- fonts -->
  <link
   href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
   rel="stylesheet"
  />

  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/animate/animate.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/animate/custom-animate.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/jarallax/jarallax.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/nouislider/nouislider.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/nouislider/nouislider.pips.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/odometer/odometer.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/swiper/swiper.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/flaticon/style.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/ontech-icons-two/style.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/tiny-slider/tiny-slider.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/reey-font/stylesheet.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/owl-carousel/owl.theme.default.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/bxslider/jquery.bxslider.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/vegas/vegas.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/timepicker/timePicker.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css" />

  <!-- template styles -->
  <link rel="stylesheet" href="<?=base_url()?>assets/user_assets/css/ontech.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body class="custom-cursor">
  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>

  <div class="preloader">
   <div class="preloader__image"></div>
  </div>
  <!-- /.preloader -->

  <div class="page-wrapper">
   <!--Start Main Header One-->
   <header class="main-header main-header-four clearfix bg-white">
    <nav class="main-menu clearfix">
     <div class="main-menu__wrapper">
      <div class="logo-one">
       <a href="index-2.html"><img src="<?=base_url()?>uploads/<?=$log[0]['logo_image']?>" width="70" alt="ontech" /></a>
      </div>
      <div class="main-menu__main-menu-box">
       <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
       <ul class="main-menu__list">
        <li>
         <a href="<?=base_url()?>user/home">Home</a>
        </li>
        <li>
         <a href="<?=base_url()?>user/services">Services</a>
         <ul>
          <!-- <li><a href="user/services.php">Services</a></li>
          <li><a href="it-consultancy.html">It Consultancy</a></li>
          <li><a href="digital-marketing.html">Digital Marketing</a></li>
          <li><a href="graphic-designing.html">Graphic Designing</a></li>
          <li><a href="data-structuring.html">Data Structuring</a></li>
          <li><a href="web-development.html">Web Development</a></li>
          <li><a href="seo-marketing.html">Seo Marketing</a></li> -->
         </ul>
        </li>
        <li>
         <a href="<?=base_url()?>user/about">About</a>
        </li>
        <li class="dropdown">
         <a href="<?=base_url()?>user/project">Projects </a>
         <ul>
          <!-- <li><a href="projects.html">Projects</a></li>
          <li><a href="projects-details.html">Projects Details</a></li> -->
         </ul>
        </li>
        <!-- <li class="dropdown">
         <a href="#">Page</a>
         <ul>
          <li><a href="team.html">Team</a></li>
          <li><a href="team-details.html">Team Details</a></li>
          <li><a href="faq.html">Faq</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="shop-details.html">Shop Details</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="sign-up.html">Sign Up</a></li>
          <li><a href="sign-in.html">Sign In</a></li>
          <li><a href="404.html">404</a></li>
         </ul>
        </li> -->
        <li class="dropdown">
         <a href="<?=base_url()?>user/blog">Blog</a>
         
        </li>
        <li>
         <a href="<?=base_url()?>user/contact">Contact</a>
        </li>   
       </ul>
      </div>
      <div class="main-header-four__right">
       <a href="#" class="main-header-four__search search-toggler"><span class="ontech-icons-two-search"></span></a>
       <a class="main-header-four__login" href="sign-in.html"><span class="ontech-icons-two-user-regular"></span>Login</a>
       <a class="thm-btn" href="sign-up.html">Sign Up</a>
      </div>
     </div>
    </nav>
   </header>
   <!--End Main Header One-->

   <div class="stricky-header stricky-header__one main-header-four stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
   </div>
   <!-- /.stricky-header -->
  </div>
 </body>
</html>
