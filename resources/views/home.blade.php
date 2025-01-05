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
      <title>Music</title>
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
         <div class="about_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <img src="{{asset('/image/poster.jpeg')}}" class="card-img-top" alt="Poster Music">
                  </div>
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <div class="yoga_taital">Music Class </div>
                        <p class="about_text">Selamat datang di Kelas Musik, ruang di mana melodi bertemu dengan kreativitas dan impian menjadi kenyataan. Di sini, musik bukan sekadar kumpulan nada—ia adalah bahasa universal yang menghubungkan hati dan pikiran. 
                           Kelas ini dirancang untuk semua kalangan, dari pemula yang baru menyentuh instrumen hingga musisi berpengalaman yang ingin menyempurnakan keahliannya.
                        </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- classes section start -->
      <style>
         .classes_section .card-img-top {
           width: 100%; /* Memastikan gambar sesuai dengan lebar kolom */
           height: 300px; /* Atur tinggi gambar */
           object-fit: cover; /* Memastikan gambar tidak terdistorsi dan terpotong rapi */
           border-radius: 8px; /* Opsional: memberi sudut sedikit melengkung */
         }
       
         .classes_section {
           margin-bottom: 30px;
         }
       
         .astanga_taital {
           margin-top: 15px;
           font-weight: bold;
         }
       
         .astanga_text {
           margin-top: 10px;
         }
       
         .read_btn a {
           display: inline-block;
           margin-top: 10px;
           padding: 10px 20px;
           background-color: #007bff;
           color: white;
           text-decoration: none;
           border-radius: 5px;
         }
       
         .read_btn a:hover {
           background-color: #0056b3;
         }
       </style>
       
       <div class="classes_section layout_padding">
         <div class="container">
           <div class="classes_border">
             <div class="row">
               <div class="col-md-12">
                 <h1 class="classes_taital">Our Classes</h1>
                 <p class="classes_text">Kelas Musik adalah tempat di mana para peserta dapat mengeksplorasi dan mengembangkan bakat serta minat mereka dalam dunia musik.</p>
               </div>
             </div>
       
             <div class="classes_section_2">
               <div class="row">
                 <div class="col-md-6">
                   <img src="{{asset('/image/class 1.jpeg')}}" class="card-img-top" alt="Class 1">
                   <h3 class="astanga_taital">Kelas Instrumen Individu</h3>
                   <div class="read_btn"><a href="#">Read More</a></div>
                 </div>
       
                 <div class="col-md-6">
                   <img src="{{asset('/image/class 2.jpeg')}}" class="card-img-top" alt="Class 2">
                   <h3 class="astanga_taital">Kelas Vokal</h3>
                   <p class="astanga_text">
                   <div class="read_btn"><a href="#">Read More</a></div>
                 </div>
               </div>
             </div>
       
             <div class="classes_section_2">
               <div class="row">
                 <div class="col-md-6">
                   <img src="{{asset('/image/class 3.jpeg')}}" class="card-img-top" alt="Class 3">
                   <h3 class="astanga_taital">Kelas Produksi Musik Digital</h3>
                   <div class="read_btn"><a href="#">Read More</a></div>
                 </div>
       
                 <div class="col-md-6">
                   <img src="{{asset('/image/class 4.jpeg')}}" class="card-img-top" alt="Class 4">
                   <h3 class="astanga_taital">Kelas Musik Tradisional dan Etnik</h3>
                   <div class="read_btn"><a href="#">Read More</a></div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       
      <!-- classes section end -->
      <!-- customers section start -->
      <div class="customer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="customer_taital">REVIEW</h1>
               </div>
            </div>
         </div>
         <div class="customer_section_2">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="box_main">
                        <div id="costum_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <img src="{{asset('/image/akhlis.jpg')}}" class="card-img-top rounded-circle" alt="Class 4">
                                   </div>                                   
                                    <div class="customer_right">
                                       <h3 class="customer_name">AKHLIS ABDALLAH</h3>
                                       <p class="customer_text">Kelas musik menawarkan lebih dari sekadar belajar memainkan instrumen; kelas ini memberikan pengalaman belajar yang holistik dan menyenangkan. Apakah Anda ingin menjadi musisi profesional, atau hanya mencari hobi yang memuaskan, kelas musik adalah pilihan yang tepat. Dengan dedikasi, latihan, dan bimbingan dari instruktur yang tepat, siapa pun bisa menikmati manfaat belajar musik.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img"><img src="images/customer-img.png"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">JONY DEN</h3>
                                       <p class="customer_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velitipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img"><img src="images/customer-img.png"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">JONY DEN</h3>
                                       <p class="customer_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velitipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                           </a>
                           <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- customers section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="blog_taital">Recent Blogs</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_box">
                        <img src="{{asset('/image/gifari.jpg')}}" class="card-img-top" alt="Class 4">
                        <div class="blog_taital_main">
                           <p class="yoga_text">BY GIFARI COMMENTS</p>
                           <h3 class="practising_taital">Menumbuhkan Kreativitas dan Ekspresi Diri</h3>
                           <p class="blog_text">Salah satu manfaat terbesar dari kelas musik adalah kemampuan untuk menumbuhkan kreativitas. Melalui belajar bermain instrumen atau bernyanyi, Anda diberi ruang untuk mengekspresikan perasaan dan ide-ide pribadi melalui musik.</p>
                           <div class="date_btn"><a href="#">28 Apr</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <img src="{{asset('/image/iqbal.jpg')}}" class="card-img-top" alt="Class 4">
                        <div class="blog_taital_main">
                           <p class="yoga_text">BY IQBAL COMMENTS</p>
                           <h3 class="practising_taital">Meningkatkan Keterampilan Kognitif dan Fisik</h3>
                           <p class="blog_text">Kelas musik tidak hanya melibatkan otak kanan, tetapi juga otak kiri. Berlatih musik dapat membantu meningkatkan kemampuan kognitif, seperti memori, konsentrasi, dan pemecahan masalah.</p>
                           <div class="date_btn"><a href="#">28 Apr</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="blog_box">
                        <img src="{{asset('/image/david.jpg')}}" class="card-img-top" alt="Class 4">
                        <div class="blog_taital_main">
                           <p class="yoga_text">BY DAVID COMMENTS</p>
                           <h3 class="practising_taital">Membangun Kepercayaan Diri dan Rasa Percaya Diri</h3>
                           <p class="blog_text">Kelas musik memberikan ruang bagi setiap siswa untuk berkembang dan mengatasi tantangan. Dalam proses belajar musik, ada banyak kemajuan kecil , seperti mempelajari lagu baru, memainkan bagian yang sulit, atau berhasil menguasai teknik tertentu. </p>
                           <div class="date_btn"><a href="#">28 Apr</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
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
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
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