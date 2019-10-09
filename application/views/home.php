  
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
                  <h2>Perpustakaan</h2> <br> <h4> SMKN 1 TEMPEL</h4>
        </div>
        </div>
      </div>
    </div>
    </div>
    </section>

    <!--==========================
      profil Us Section
    ============================-->
    <section id="profil" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <div class="garis2"></div>
          <h3>PROFIL</h3>
        </header>

        <div class="row profil-container">

          <div class="col-lg-6 content order-lg-3 order-2 " >
            <?php
                foreach ($profil as $key => $value) {
                    
                    echo 
                    '<p>' . 
                    $value->content . '</p>
                
            <a href="' . base_url($value->permalink). '" class="makeap_but" style="float: right; margin-bottom: 20px;">Selengkapnya</a>';
          }
                ?>
          </div>

                      <div class="col-lg-6 content order-lg-1 order-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php
                foreach ($slider as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
                }
                ?>
              </ol>
              <div class="carousel-inner">
                <?php
                foreach ($slider as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '">
                    <img class="d-block w-100" src="' . base_url('files/'.$value->file_name) . '">

                           </div>';
                }
                ?>
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
     <section id="koleksi" class="section-bg">
      
      <div class="container">
        <header class="section-header">
          <div class="garis"></div>
          <h3> KOLEKSI BUKU TERBARU </h3>
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
                        <img src="<?php echo base_url('assets/') ?>img/buku/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Antologi Rasa</h2>
                        <p>Ika Natassa</p>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/buku/2.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Aku Tanpamu</h2>
                        <p>RuDee</p>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/buku/3.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                         <h2>Sisa Umur</h2>
                        <p>Mukhlis A Hamid</p>
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
                        <img src="<?php echo base_url('assets/') ?>img/buku/4.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                         <h2>Raja Rao</h2>
                        <p>Kantapura</p>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/buku/5.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                         <h2>Geliat Dalam Keterbatasan</h2>
                        <p>Ika Natassa</p>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/buku/3.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Sisa Umur</h2>
                        <p>Mukhlis A Hamid</p>
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
                        <img src="<?php echo base_url('assets/') ?>img/buku/4.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                        <h2>Raja Rao</h2>
                        <p>Kantapura</p>
                      </div>
                    </a>
                  </div>
             
                  <div class="col-lg-4 col-md-4 ">
                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        
                        <img src="<?php echo base_url('assets/') ?>img/buku/2.jpg" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                         <h2>Aku Tanpamu</h2>
                        <p>RuDee</p>
                      </div>
                      </a>
                  </div>
                

                  <div class="col-lg-4 col-md-4 ">

                    <a href="#" target="_blank" class="gtco-card-item">
                      <figure>
                        <div class="overlay">
                          <i class="ti-plus"></i>  
                        </div>
                        <img src="<?php echo base_url('assets/') ?>img/buku/cover.png" width="100%" height="100%" style="padding: 15px 15px" alt="image" class="img-responsive">
                      </figure>
                      <div class="gtco-text">
                         <h2>Antologi Rasa</h2>
                        <p>Ika Natassa</p>
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
                <span class="carousel-control-next-icon" aria-hidden="true" style="width: 50px; height: 50px; margin-left: 50px; color: #757575;"></span>
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
    <section id="statistik" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <div class="garis3"></div>
          <h3>DATA STATISTIK</h3>
        </header>
        <?php foreach ($stats as $stat): ?>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->member ?></span>
            <p>Anggota</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->visitor ?></span>
            <p>Pengunjung</p>
          </div>

           <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $stat->borrower ?></span>
            <p>Peminjam</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
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
          <h3> BERITA TERBARU </h3>
        </header>
      <!-- percobaan data target -->

          <div class="row">
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
              	<?php
                foreach ($news as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    $show = ($key == 0) ? 'show' : '';
                    $home = ($key == 0) ? 'home' : '';
                    $profile = ($key == 1) ? 'profile' : '';
                    $messages = ($key == 2) ? 'messages' : '';
                    $settings = ($key == 3) ? 'settings' : '';
                    echo
                '<div class="tab-pane fade ' . $show . ' ' . $active . '" id="list-'. $home . $profile . $messages . $settings .'" role="tabpanel" aria-labelledby="list-'. $home . $profile . $messages . $settings .'-list">
                  
                  <div class="col-md-12 ">
                  <div class="row">
                    <div class="card mb-3 thumb">
                    
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="'. base_url("files/" . $value->file_name) . '" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8 bg-primary text-light">
                          <div class="card-body">
                            <h2 class="card-title">' . $value->judul . '</h2>
                            <p class="card-text"><small><i>' .  $value->tanggal . ' / ' . $value->jam . '</i></small></p>
                            <p class="card-text">' .  $value->content . '..' . '<a href="' . $value->permalink . '" class="text-light"> (Selanjutnya)</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>
                  </div> 
                </div>';
                }
                ?>
              </div>
            </div>

            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
              <?php
                foreach ($news as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    $home = ($key == 0) ? 'home' : '';
                    $profile = ($key == 1) ? 'profile' : '';
                    $messages = ($key == 2) ? 'messages' : '';
                    $settings = ($key == 3) ? 'settings' : '';
                    echo
                '<a class="list-group-item list-group-item-action ' . $active . '" id="list-'. $home . $profile . $messages . $settings . '-list" data-toggle="list" href="#list-'. $home. $profile . $messages . $settings . '" role="tab" aria-controls="'. $home . $profile . $messages . $settings . '">' . $value->judul . '</a>';
             }
                ?>
              </div>
            </div>
        
            
            <div class="col-md-12">
                    <a href="" class="makeap_but" style="float: right; margin-top: 20px;">Berita Lainnya</a>
         </div> 
          </div>

         </div>
         </div>

         <div class="row float-right">
         
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
          <h3> EVENT TERBARU </h3>
        </header>

        <?php foreach ($event as $events): ?>
      
         <article class="post">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 event-date" style="border-right:1px solid #E6E6E6; text-align: center;">
              <span style="display: block;width: 100%;line-height: 1;font-size: 100px;color: #a6a6a6;font-family:sans-serif;">
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
         
         <a href="event.html" class="makeap_but" style="float: right;">Event Lainnya</a>
      </div>
    </section><!-- #berita -->


 <!--==========================
      Galeri
    ============================-->
    <section id="galeri" class="section-bg">
      <div class="container">
        <header class="section-header">
            <div class="garis"></div>
            <h3> GALERI </h3>
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
       <a href="galeri.html" class="makeap_but" style="float: right; margin-bottom: 20px;">Foto Lainnya</a>
       </div>
        </div>
      </div>
     
    </section>
        
    <!-- #galeri -->


    <!--==========================
      Testimoni Section
    ============================-->
   <section id="testimoni" class="section-bg">
      <div class="container">
        <header class="section-header">
          <div class="garis2"></div>
          <h3> TESTIMONI </h3>
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
              <img src="<?php echo base_url('files/banner/'.$ban->file_name) ?>" class="img-fluid" alt="">
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

  
  
