<style type="text/css">
  #image-preview{
    display:none;
    width : 250px;
  }
</style>
<script type="text/javascript" charset="utf-8" async defer>
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("gambar_slider").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?=$title?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="<?=base_url('admin/slider')?>"></a>Slider</li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add Slider</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitslider">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_slider">Nama</label>
                  <input type="text" class="form-control" id="nama_slider" name="nama_slider" placeholder="Nama Slider">
                </div>
                <div class="form-group">
                  <label for="keterangan_slider">Keterangan</label>
                  <textarea class="form-control" id="keterangan_slider" name="keterangan_slider"></textarea>
                </div>
                <div class="form-group">
                  <label for="gambar_slider">Gambar</label>
                  <input type="file" id="gambar_slider" name="gambar_slider" onchange="previewImage();">
                  <img id="image-preview" alt="image preview"/>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="btn_simpan" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manage Slider</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            Start creating your amazing application!
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="<?=base_url('assets/AdminLTE/')?>bower_components/jquery/dist/jquery.min.js"></script>

    <script type="text/javascript">
     $('#submitslider').submit(function(e){
      e.preventDefault(); 

      $.ajax({
       url:"<?php echo site_url('admin/tambah_slider')?>",
       type:"post",
       data:new FormData(this),
       processData:false,
       contentType:false,
       cache:false,
       async:false,
     // xhr: function(data){
     //  $('#wait').show();
     // },
     beforeSend: function(data) {
      $('#wait').show();
    },
    success: function(data){
     $('#modal_tambah_slider').modal('hide');
     swal ( "Sukses" ,  "Foto Slider Berhasil Ditambahkan!" ,  "success", {
      buttons: false,
      timer: 1000,
    } );

     show_slider();
     $('#wait').hide();
   },
   error:function(data) {
     swal ( "Gagal" ,  "Foto Slider Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
     $('#wait').hide();
   }
 });
    });
  </script>