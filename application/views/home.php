  
<?php
$this->load->view('_partials/header');
$this->load->view('_partials/navbar');
?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
<div class="video-background-holder">
    <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="<?php echo base_url('assets/') ?>video/video2.mp4" type="video/mp4">
      </video>
    <div class="video-background-content container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="int-info">
                <h2>Perpustakaan SMKN 1 TEMPEL</h2>
        </div>
        </div>
      </div>
    </div>
    </div>
    </section>
  <main id="main">

    <!--==========================
      profil Us Section
    ============================-->
    <section id="profil">
      <div class="container">

        <header class="section-header">
          <div class="garis2"></div>
          <h3 style="font-size: 50px;color:black;text-align: left;font-weight: bold;position: relative; "> PROFIL</h3>
        </header>

        <div class="row profil-container">

          <div class="col-lg-6 content order-lg-3 order-2 " >
            <p>     Perpustakan SMK Negeri 1 Tempel mulai dirintis pada tahun 1968 pada saat Kepala Sekolahnya R. Soewardi B.A yang menempati ruang seadanya untuk melayani kebutuhan sumber bacaan siswa.Seiring perkembangan sekolah yang semakin maju, maka kebutuhan ruangan perpustakaan tidak bisa dipandang sebelah mata. </p><p> Sehingga sejak 1988, perpustakaan sudah memiliki ruangan yang lebih representatif dan lokasinya strategi seperti lokasi saat ini yang diberi nama CINTA ILMU.      Gedung perpustakaan sudah mengalami beberapa kali renovasi untuk menambah kenyamanan bagi pengunjung. Dengan bertambahnya jumlah siswa SMK Negeri 1 Tempel, maka pada tahun 2019 direnovasi kembali sesuai standar akreditasi perpusnas.
            </p>
            <a href="" class="makeap_but" style="float: right; margin-bottom: 20px;">Selengkapnya</a>
          </div>

                      <div class="col-lg-6 content order-lg-1 order-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url('assets/') ?>img/contoh.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url('assets/') ?>img/bg1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url('assets/') ?>img/course01.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #profil -->

    <!--==========================
      Services Section
    ============================-->
     <section id="services" class="section-bg">
      
      <div class="container">
        <header class="section-header">
          <div class="garis"></div>
          <h3 style="font-size: 50px;color: black;text-align: right;font-weight: bold;position:relative;top: -30px; right: -33px;"> KOLEKSI BUKU TERBARU </h3>
        </header>
      </div>


      <!-- <div class="gtco-container">
        <div class="row"> -->
          <div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">

             

           <div class="container">
           
            <div class="carousel-inner">
              
      <div class="carousel-item active" >
          <div class="gtco-container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat2</h2>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                       </a>
                     </div>

                </div>
               </div>
            </div> 

              <div class="carousel-item " >
          <div class="gtco-container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Buku 2</h2>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                       </a>
                     </div>
                     
                </div>
               </div>
            </div> 

            <div class="carousel-item " >
          <div class="gtco-container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat2</h2>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Filsafat</h2>
                      </div>
                       </a>
                     </div>
                     
                </div>
               </div>
            </div> 

        </div>

              
      </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 50px; height: 50px; margin-right: 50px; color: #757575;"></span>
                <span class="sr-only">Previous</span>
             </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="width: 50px; height: 50px; margin-left: 50px; color: #757575; background-color: black;"></span>
                <span class="sr-only">Next</span>
              </a>
              
    </div>
    <div class="container">
    <a href="buku.html" class="makeap_but" style="float: right;">Buku Lainnya</a>
    </div>
      

      
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <div class="garis3"></div>
          <h3 style="font-size: 50px;color:white;text-align: left;font-weight: bold;position: relative; ">DATA STATISTIK</h3>
        </header>
        <?php foreach ($stats as $stat): ?>
        <div class="row counters">
        	
          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->member ?></span>
            <p>Anggota</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->visitor ?></span>
            <p>Pengunjung</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->collection ?></span>
            <p>Buku</p>
          </div>
          
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    
    

    <!--==========================
      berita Section
    ============================-->
      <section id="berita">
      <div class="container">
        <header class="section-header">
          <div class="garis"></div>
          <h3 style="font-size: 50px;color:black;text-align: right;font-weight: bold;position: relative;top: -30px;right: -91px;"> BERITA TERBARU </h3>
        </header>
      <!-- percobaan data target -->

<div class="row">
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <!-- pertama -->
        <div class="col-md-12 ">
        <div class="row">
          <div class="card mb-3 thumb">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo base_url('assets/') ?>img/contoh.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8 bg-primary text-light">
                <div class="card-body">
                  <h2 class="card-title">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</h2>
                  <p class="card-text"><small><i>13 Juli 2018 / 17:00:00</i></small></p>
                  <p class="card-text">SMKN 1 TEMPEL Mendpat Predikat Juara III Lomba ..<a href="" class="text-light">(Baca Sekarang)</a></p>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div> 
        <!-- /pertama -->
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <!-- kedua -->
        <div class="col-md-12 ">
        <div class="row">
          <div class="card mb-3 thumb">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo base_url('assets/') ?>img/bg1.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8 bg-primary text-light">
                <div class="card-body">
                  <h2 class="card-title">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</h2>
                  <p class="card-text"><small><i>13 Juli 2018 / 17:00:00</i></small></p>
                  <p class="card-text">SMKN 1 TEMPEL Mendpat Predikat Juara III Lomba ..<a href="" class="text-light">(Baca Sekarang)</a></p>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div> 
        <!-- /kedua -->
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <!-- ketiga -->
        <div class="col-md-12 ">
        <div class="row">
          <div class="card mb-3 thumb">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo base_url('assets/') ?>img/contoh.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8 bg-primary text-light">
                <div class="card-body">
                  <h2 class="card-title">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</h2>
                  <p class="card-text"><small><i>13 Juli 2018 / 17:00:00</i></small></p>
                  <p class="card-text">SMKN 1 TEMPEL Mendpat Predikat Juara III Lomba ..<a href="" class="text-light">(Baca Sekarang)</a></p>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div> 
        <!-- /ketiga -->
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <!-- ke empat -->
        <div class="col-md-12 ">
        <div class="row">
          <div class="card mb-3 thumb">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?php echo base_url('assets/') ?>img/bg1.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8 bg-primary text-light">
                <div class="card-body">
                  <h2 class="card-title">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</h2>
                  <p class="card-text"><small><i>13 Juli 2018 / 17:00:00</i></small></p>
                  <p class="card-text">SMKN 1 TEMPEL Mendpat Predikat Juara III Lomba ..<a href="" class="text-light">(Baca Sekarang)</a></p>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div> 
        <!-- /ke empat -->
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Lomba Kepala Perpustkaan Berprestasi SMK / SMA Tingkat Provinsi</a>
    </div>
  </div>
  
</div>
        <!-- /percobaan data target -->

          
         <div class="row float-right">
         <div class="col-md-12">
                    <a href="" class="makeap_but" style="float: right;">Berita Lainnya</a>
         </div> 
         </div>       
      </div>
    </section>

    <!-- #berita -->

    <!--==========================
      berita Section
    ============================-->
    <section id="event">
      <div class="container">

        <header class="section-header">
          <div class="garis2"></div>
          <h3 style=""> EVENT TERBARU </h3>
        </header>

        <?php foreach ($event as $events): ?>
      
         <article class="post">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 event-date" style="border-right:1px solid #E6E6E6; text-align: center;">
              <span style="display: block;width: 100%;line-height: 1;font-size: 100px;color: #a6a6a6;font-family:Circular Std;">
                <?php echo $events->tanggal ?>
              </span>
               <strong ><?php echo $events->blnthn ?></strong>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 post-content">
              <div class="post-title">
                <h3>
                  <a href="<?php echo base_url($events->permalink) ?>">
                   <?php echo $events->title ?>
                  </a>
                </h3>
                <br>
              </div>
              <div class="entry-content">
                <p>
                  <?php echo $events->content ?>
                </p>
              </div>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
       
         <a href="" class="makeap_but" style="float: right;">Event Lainnya</a>
      </div>
    </section><!-- #berita -->


 <!--==========================
      Galeri
    ============================-->
    <section id="galeri" class="section-bg">
      <div class="container">
        <header class="section-header">
            <div class="garis" style="top: 20px"></div>
            <h3 style="font-size: 50px;color:black;text-align:right;font-weight: bold;position: relative; padding: 10px;top:6px;right: -91px;"> GALERI </h3>
          </header>
      
      <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
    
      <div class="row galeri-container">
      	<?php foreach ($gallery as $galeri) : ?>
          <div class="col-lg-4 col-md-6 galeri-item filter-web" data-wow-delay="0.1s">
            <div class="galeri-wrap">
              <img src="<?php echo base_url('files/'.$galeri->file_name) ?>" class="img-fluid" alt="">
              <div class="galeri-info">
                <h4><a href="#"><?php echo $galeri->title ?></a></h4>
                <p><?php echo $galeri->name ?></p>
                <div>
                  <a href="<?php echo base_url('files/'.$galeri->file_name) ?>" class="link-preview" data-lightbox="galeri" data-title="Perpustakaan" title="Preview"><i class="ion ion-eye"></i></a>
                </div>
              </div>
            </div>
          </div> 
      <?php endforeach; ?>
          
           <div class="container">
       <a href="" class="makeap_but" style="float: right; margin-bottom: 20px;">Foto Lainnya</a>
       </div>
        </div>
      </div>
     
    </section>
        
    <!-- #galeri -->


    <!--==========================
      Testimoni Section
    ============================-->
   <section id="testimonials" class="section-bg">
      <div class="container">
        <header class="section-header">
          <div class="garis2"></div>
          <h3 style="font-size: 50px;color:black;text-align: left;font-weight: bold;position: relative; "> TESTIMONI </h3>
        </header>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    		<?php foreach ($testi as $test): ?>
              <div class="testimonial-item">
                <img src="<?php echo base_url('files/'.$test->file_name) ?>" class="testimonial-img" alt="">
                <h3><?php echo $test->name ?></h3>
                <h4><?php echo $test->job ?></h4>
                <p>
                  <?php echo $test->content ?>
                </p>
              </div>
              <?php endforeach; ?>
            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Banner Section
    ============================-->
    <section  id="clients" class="section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
        <?php foreach ($banner as $ban): ?>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
            <a href="<?php echo $ban->url ?>"><img src="<?php echo base_url('files/banner/'.$ban->file_name) ?>" class="img-fluid" alt=""></a>
            </div>
          </div>
        <?php endforeach; ?>

        </div>

      </div>

    </section><!-- #contact -->

  </main>
<?php
$this->load->view('_partials/footer');
$this->load->view('_partials/js');
?>

  
  
