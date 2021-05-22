<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title', config("app.name"))</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="http://2.bp.blogspot.com/-m3RKOPdGCwQ/UNnyCATHb9I/AAAAAAAAHPY/N7JtO-ZEt10/w1200-h630-p-k-no-nu/Volvo+Logo+1.gif" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active">
                                 <a href="index.html">artikel</a>
                              </li>
                              <li>
                                 <a href="Contact.html">contact</a>
                              </li>
                              <li>
                                 <a href=""></a>
                              </li>
                              <li>
                                 <a href=""></a>
                              </li>
                              <li>
                                 <a href=""></a>
                              </li>
                              <li>
                                 <a href=""></a>
                              </li>
                              <li>
                                 <a href=""></a>
                              </li>
                              <li>
                                 <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqK9uGSrwttXcGsZYiau4g100IfrrJFOR7SA&usqp=CAU" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="data:image/jpeg;base64,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" alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>mengenal framework</h4>
                     <h3>PENGERTIAN FRAMEWORK</h3>
                     <p>Framework (kerangka kerja) adalah istilah yang sering muncul dalam dunia developer. Istilah tersebut memiliki fungsi yang sangat besar bagi pengembangan kode program secara sistematis. Saat ini, seorang pengembang khususnya dalam bidang web development diharuskan untuk mempelajari dan menggunakan sebuah kerangka kerja dalam pembuatan perangkat lunak.

Keuntungan lain adalah untuk mengembangkan perangkat lunak dengan penyusunan kode secara terstruktur dan konsisten. Kode yang baik tentu saja merupakan kode yang dapat dimengerti oleh mesin serta pengembang (developer).

Pada artikel kali ini, akan membahas seputar apa itu framework beserta jenis – jenisnya. Untuk jenis dari kerangka kerja -nya sendiri lebih menekankan pada web development. Kita akan membahas terlebih dahulu mengenai apa itu framework.</p>
                     <div class="button_section">
                        <a href="about.html">lebih banyak</a>
                        <a href="contact.html">kontak kami</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>tentang <span class="orange_color">in</span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="https://repository-images.githubusercontent.com/12256376/d53af780-fe7d-11ea-886c-85f904001554" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>KELEBIHAN DALAM FRAMEWORK</h4>
                     <h5>dibuat pada 2021</h5>
                     <p>kelebihan 
1. Lebih Cepat dan Efisien
Penggunaan Framework akan lebih terasa apabila saat mengerjakan proyek besar. Hal ini dikarenakan Framework berisi beragam fungsi, plugin, konsep, serta teknologi yang dapat membantu proses pengembangan aplikasi ataupun website menjadi  jauh lebih cepat daripada menulis kode dari awal.

2. Menghemat Biaya Pengeluaran
Sebagian besar Framework saat ini bersifat open source dan gratis untuk digunakan. Oleh sebab itu, biaya yang dikeluarkan client Anda akan menjadi lebih sedikit karena proses pengerjaan yang cepat dan simple.

3. Faktor Keamanan Selalu Diutamakan
Banyak Framework populer saat ini digunakan oleh berbagai Developer di seluruh dunia yang kemungkinan adanya masalah akan keamanan dan bug akan selalu diperbaiki.

4. Memiliki Komunitas yang Besar
Semakin besar komunitas yang menggunakannya maka akan semakin mudah untuk bertanya jika pengguna menemukan kesulitan – kesulitan, seperti bug, error, dan lainnya dalam mengembangkan program dan saat pengguna yang menemukan celah keamanan dapat memberi tahu tim pengembang untuk segera memperbaikinya.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaVAJCLvbdJxX1f3hD4YHTBdHqBJI7BKE5pQ&usqp=CAU" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>KEKURANGAN DALAM FRAMEWORK</h4>
                     <h5>dibuat pada 2021</h5>
                     <p>1. Pemahaman Terhadap Bahasa Pemrograman Berkurang
Terkadang menggunakan Framework boleh – boleh saja saat ada proyek besar namun jika menggunakannya terlalu sering dikhawatirkan pengetahuan dan pemahaman akan bahasa pemrograman yang digunakan menjadi berkurang dan tidak berkembang.

2. Terdapat Batasan
Dalam penggunaannya, kerangka ini juga memiliki beberapa batasan yang tidak dapat Anda modifikasi. Sehingga Anda harus bekerja sesuai dengan standar yang digunakan di dalamnya. Oleh karena itu, ketika mengembangkan sebuah aplikasi, Anda harus menggunakan kerangka kerja yang sesuai dengan kebutuhan Anda.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">lebih banyak</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Marketing</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="images/marketing_img.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font">KESIMPULAN</h3>
                     <h5 class="grey_font">dibuat pada 2021</h5>
                     <p class="white_font">Dalam memilih suatu framework diperlukan pertimbangan terhadap beberapa hal sebagai berikut.

Dokumentasi
Dokumentasi sangat penting, mengingat pada umumnya tidak banyak orang atau perusahaan yang membuat framework sendiri dalam membuat applikasi.

Standar – standar
Semakin banyak hal yang di support oleh framework tersebut semakin baik. Karena hal tersebut akan mempengaruhi kualitas dari software yang dikembangkan.

Faktor Kemudahan
Standar kemudahan sangat sulit di ukur karena ini berhubungan dengan minat seseorang akan sesuatu. Namun berdasarkan dokumentasinya kita bisa mengira – ngira pola kerja framework tersebut.

Oleh karena itu, pemilihan framework itu sangatlah penting karena jika pemilihan framework yang salah akan menjadi sebuah bencana bagi penggunanya. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comments / 2</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTOkHm3_mPQ5PPRvGtU6Si7FJg8DVDtZ47rw&usqp=CAU" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>sobirin</h3>
                              <h4>Posted on mei 10 / 2021 at 06:53 am</h4>
                              <p>bagaimana jika terjadi masalah jika mereka tidak pandai bahasa pemprograman
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">ulang</a>
                        </div>
                     </div>
                  </div>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTOkHm3_mPQ5PPRvGtU6Si7FJg8DVDtZ47rw&usqp=CAU" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>bayu</h3>
                              <h4>Posted on mei 19 / 2021 at 06:53 am</h4>
                              <p>apakah ada kekurangan lain pada framework?
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">ulang</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>posting komentar anda : </h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.html">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>kirim</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="heading">
                     <h3>Blog</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="https://frameworkmi.org/wp-content/uploads/2019/08/Framework-Preview-Logo.jpg" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3><blogger></article></h3>
                        <p class="sublittle">dibuat pada 2021</p>
                        <p>bagaimana kita belajar coding</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="http://2.bp.blogspot.com/-m3RKOPdGCwQ/UNnyCATHb9I/AAAAAAAAHPY/N7JtO-ZEt10/w1200-h630-p-k-no-nu/Volvo+Logo+1.gif" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="images/location_icon.png" alt="#" /></span><span class="text_cont">indonesia<br>surabaya</span></li>
                     <li><span><img src="images/phone_icon.png" alt="#" /></span><span class="text_cont">08113142227<br>08113142227</span></li>
                     <li><span><img src="images/mail_icon.png" alt="#" /></span><span class="text_cont">volvobudipiratama@gmail.com<br>volvobudipriatama@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Artikel</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>kontak</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">kirim</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
      <script src="{{ URL::asset('js/popper.min.js')}}"></script>
      <script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ URL::asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ URL::asset('js/plugin.js')}}"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ URL::asset('js/custom.js')}}"></script>
   </body>
</html>