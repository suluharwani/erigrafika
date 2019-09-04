<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Portfolio</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="<?=base_url('home/portofolio')?>">Portfolio</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$port_nama_portofolio?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?=base_url('assets/home-master/')?>img/core-img/curve-1.png">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Portfolio Single Area Start ***** -->
<section class="uza-portfolio-single-area section-padding-80">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-md-6">
                <div class="portfolio-details-text">
                    <h2><?=str_replace('_', '-', $port_nama_portofolio);?></h2>
                    <h6><?=$port_kategori?></h6>
                    <p><?=$port_keterangan?></p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="portfolio-meta">
                    <!-- <h6>Client: Clarence Ryan</h6> -->
                    <h6>Date: <?=date("F j, Y", strtotime($port_tanggal));?></h6>
                    <!-- <h6>Location: United States</h6> -->
                    <h6>Author: <?=$port_nama_admin?></h6>
                </div>
                <!-- <div class="portfolio-social-info d-flex align-items-center">
                    <p>Share:</p>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-feed" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                </div> -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="portfolio-thumbnail mt-80">
                    <img src="<?=base_url('assets/portofolio/fix/').$port_gambar?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Portfolio Single Area End ***** -->

<!-- ***** Newsletter Area Start ***** -->
<!-- ***** Newsletter Area End ***** -->
