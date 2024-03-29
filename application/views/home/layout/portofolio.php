
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
  <div class="container h-100">
    <div class="row h-100 align-items-end">
      <div class="col-12">
        <div class="breadcumb--con">
          <h2 class="title">Portofolio</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Portofolio</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Background Curve -->
  <div class="breadcrumb-bg-curve">
    <img src="<?=base_url('assets/home-master/')?>img/core-img/curve-5.png" alt="">
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ****** Gallery Area Start ****** -->
<section class="uza-portfolio-area section-padding-80">

  <!-- Portfolio Menu -->
  <div class="portfolio-menu text-center mb-80">
    <button class="btn active" data-filter="*">All Portofolio</button>
    <?php
    foreach ($kategori_portofolio_list->result() as $port_cat) {?>
      <button class="btn" data-filter=".<?=str_replace(' ', '-', $port_cat->nama);?>"><?=$port_cat->nama?></button>
      <?php
    }
    ?>
    <!-- <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
    <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
    <button class="btn" data-filter=".market-analytics">Market Analytics</button>
    <button class="btn" data-filter=".marketing-social">Marketing Social</button> -->
  </div>

  <div class="container-fluid">
    <div class="row uza-portfolio">
      <!-- Single Portfolio Item -->
      <?php
      foreach ($portofolio_full->result() as $port_value) {?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item <?=str_replace(' ', '-', $port_value->kategori);?>">
          <div class="single-portfolio-slide">
            <img src="<?=base_url('assets/portofolio/thumb/').$port_value->gambar?>" alt="$port_value->nama">
            <!-- Overlay Effect -->
            <div class="overlay-effect">
              <h4><?=$port_value->kategori?></h4>
              <p><?=word_limiter($port_value->keterangan, 15)?></p>
            </div>
            <!-- View More -->
            <div class="view-more-btn">
              <a href="<?=base_url('home/portofolio/').$port_value->url?>"><i class="arrow_right"></i></a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>
<!-- ****** Gallery Area End ****** -->

<!-- ***** Newsletter Area Start ***** -->
<!-- ***** Newsletter Area End ***** -->
