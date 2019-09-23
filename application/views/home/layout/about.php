<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
  <div class="container h-100">
    <div class="row h-100 align-items-end">
      <div class="col-12">
        <div class="breadcumb--con">
          <h2 class="title">About</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Background Curve -->
  <div class="breadcrumb-bg-curve">
    <img src="<?=base_url('assets/home-master')?>/img/core-img/curve-5.png" alt="">
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="uza-about-us-area section-padding-80">
  <div class="container">
    <div class="row align-items-center">
      <!-- About Thumbnail -->
      <?php
      if ($video->result()) {
        foreach ($video->result() as $vid) {
          ?>
          <div class="col-12 col-lg-6">
            <div class="about-us-thumbnail mb-80">
              <img src="<?=base_url("assets/web_video/fix/$vid->gambar")?>" alt="">
              <!-- Video Area -->
              <div class="uza-video-area hi-icon-effect-8">
                <a href="<?=$vid->link_video?>" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
      <!-- About Us Content -->
      <div class="col-12 col-lg-6">
        <div class="section-heading mb-5">
          <h2>Tentang Kami</h2>
        </div>

        <div class="about-us-content mb-80">
          <div class="about-tab-area">
            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">PERUSAHAAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">LAYANAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">MOTTO</a>
              </li>
            </ul>
          </div>

          <!-- Mona Tab Content -->
          <div class="about-tab-content">
            <div class="tab-content" id="mona_modelTabContent">
              <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_perusahaan?></p>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_layanan?></p>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                <!-- Tab Content Text -->
                <div class="tab-content-text">
                  <p><?=$about_us_motto?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Background Pattern -->
  <div class="about-bg-pattern">
    <img src="<?=base_url('assets/home-master')?>/img/core-img/curve-2.png" alt="">
  </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Choose Us Area Start ***** -->
<section class="uza-why-choose-us-area">
  <div class="container">
    <div class="row align-items-center">
      <!-- Choose Us Content -->
      <div class="col-12 col-lg-6">
        <div class="choose-us-content mb-80">
          <div class="section-heading mb-4">
            <h2>Alasan memilih kami</h2>
            <p>Kami adalah partner anda menuju success</p>
          </div>
          <ul>
            <?php
            if ($alasan_memilih) {
              foreach ($alasan_memilih->result() as $alasan) {?>
                <li><i class="fa fa-check" aria-hidden="true"></i><?=$alasan->alasan?></li>
                <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>
      <!-- Choose Us Thumbnail -->
      <div class="col-12 col-lg-6">
        <div class="choose-us-thumbnail mb-80">
          <img class="w-100" src="img/bg-img/22.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Why Choose Us Area End ***** -->

<!-- ***** Team Member Area Start ***** -->
<section class="uza-Portfolio-area section-padding-80">
  <div class="container">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Team of Experts</h2>
          <p>Kami konsisten pada industri kami dengan menjadi ahli di bidangnya.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <!-- Team Member Slides -->
      <div class="team-sildes owl-carousel">
        <?php
        if ($team) {
          foreach ($team as $key) {
          ?>
          <div class="single-team-slide">
            <img src="<?=base_url('assets/team/fix/')?><?=$key->foto?>" alt="">
            <!-- Overlay Effect -->
            <div class="overlay-effect">
              <h6><?=$key->posisi?></h6>
              <h4><?=$key->nama?></h4>
              <p><?=$key->keterangan?></p>
            </div>
        </div>
        <?php
      }
    }
    ?>
  </div>
</div>
</div>

<!-- Border -->
<div class="container">
  <div class="border-line mt-80"></div>
</div>
</section>
