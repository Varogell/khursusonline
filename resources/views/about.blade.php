<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
     <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
     
      @include('partials.navbar')
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about_taital">Music Classes</div>
               </div>
            </div>
         </div>
         <div class="about_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <img src="{{asset('/image/poster.jpeg')}}" class="card-img-top" alt="Poster Music">
                  </div>
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <div class="yoga_taital">Best Music </div>
                        <p class="about_text">Selamat datang di Kelas Musik, ruang di mana melodi bertemu dengan kreativitas dan impian menjadi kenyataan. Di sini, musik bukan sekadar kumpulan nada—ia adalah bahasa universal yang menghubungkan hati dan pikiran.
                            Kelas ini dirancang untuk semua kalangan, dari pemula yang baru menyentuh instrumen hingga musisi berpengalaman yang ingin menyempurnakan keahliannya.</p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top90">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">About</h2>
                     <p class="dummy_text">Selamat datang di Kelas Musik, ruang di mana melodi bertemu dengan kreativitas dan impian menjadi kenyataan.</p>
                     <div class="location_text"><a href="#">(+62)81345674366</a></div>
                     <div class="location_text"><a href="#">classmusic@gmail.com</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Our Products</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">Bestsellers</a></li>
                           <li><a href="#">New In</a></li>
                           <li><a href="#">Chairs</a></li>
                           <li><a href="#">Sofas</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Useful link</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="classes.html">Classes</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Newsletter Signup</h2>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->

      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
   </body>
</html>