<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small><?=$title?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Memory Terpakai</span>
            <span class="info-box-number"><?=$memory_usage?><small></small></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-chrome"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pengunjung Hari Ini</span>
            <span class="info-box-number"><?=$pengunjung_hari_ini?> Perangkat</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-bar-chart"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Kunjungan Total</span>
            <span class="info-box-number"><?=$pengunjung_sepanjang_waktu?> Perangkat</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pengunjung unik</span>
            <span class="info-box-number"><?=$unique_pengunjung?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Statistik pengunjung website</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Pengunjung web tahun <?=date("Y")?></strong>
                  </p>
                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Pengunjung Terbanyak</strong>
                  </p>
                  <?php
                  foreach ($pengunjung_terbanyak->result() as $p_terbanyak) {?>
                    <div class="progress-group">
                      <span class="progress-text">IP: <?=$p_terbanyak->ip_address?></span>
                      <span class="progress-number"><b><?=$p_terbanyak->total_pengunjung?></b>/<?=$pengunjung_sepanjang_waktu?></span>
                      <div class="progress sm">
                        <div class="progress-bar progress-bar-aqua" style="width: <?=$p_terbanyak->total_pengunjung / $pengunjung_sepanjang_waktu * 100?>%"></div>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <script type="text/javascript">
    var data_bulan = <?=$array_statistik_bulan?>;
    var data_jumlah = <?=$array_statistik_jumlah_ip?>;
    </script><script src="<?=base_url('assets/AdminLTE/')?>dist/js/pages/dashboard2.js"></script>
