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
    oFReader.readAsDataURL(document.getElementById("gambar_portofolio").files[0]);

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
      <li><a href="<?=base_url('admin/slider')?>"></a>portofolio</li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">  
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Kategori Portofolio</h3>

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
              <h3 class="box-title">Input Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_kategori_portofolio">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama_kategori_portofolio" name="nama_kategori_portofolio" placeholder="Kategori Portofolio" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="btn_simpan_kategori" class="btn btn-primary">Tambah</button>
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
          <h3 class="box-title">Manage Portofolio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive" >
             <table class="table table-bordered table-striped" id="data_kategori">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="kategori_portofolio_list">
              </tbody>
            </table>  
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
          <h3 class="box-title">Add portofolio</h3>

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
              <form enctype="multipart/form-data" id="submitportofolio">
                <div class="box-body">
                  <div class="form-group">
                    <label for="nama_perusahaan_portofolio">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="nama_perusahaan_portofolio" name="nama_perusahaan_portofolio" placeholder="Nama portofolio" required>
                  </div>
                  <div class="form-group">
                    <label for="layanan_portofolio">Jenis Layanan</label>
                    <input type="text" class="form-control" id="layanan_portofolio" name="layanan_portofolio" placeholder="Jenis Layanan" required>
                  </div>
                  <div class="form-group">
                    <label for="layanan_portofolio">Kategori</label>
                    <input type="text" class="form-control" id="layanan_portofolio" name="layanan_portofolio" placeholder="Jenis Layanan" required>
                  </div>
                  <div class="form-group">
                    <label for="keterangan_portofolio">Keterangan</label>
                    <textarea class="form-control" id="keterangan_portofolio" name="keterangan_portofolio"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar_portofolio">Gambar</label>
                    <input type="file" id="gambar_portofolio" name="gambar_portofolio" onchange="previewImage();" required>
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
            <h3 class="box-title">Manage Portofolio</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
              <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive" >
               <table class="table table-bordered table-striped" id="mydata">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th style="text-align: right;">Actions</th>
                  </tr>
                </thead>
                <tbody id="portofolio_list">

                </tbody>
              </table>  
            </div>
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
    <!--MODAL HAPUS-->
    <div class="modal fade" id="ModalHapusVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
            <h4 class="modal-title" id="myModalLabel">Hapus Video</h4>
          </div>
          <form class="form-horizontal">
            <div class="modal-body">

              <input type="hidden" name="kode" id="id_video_hapus" value="">
              <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama_video_hapus"></span></u>?</p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button class="btn_hapus btn btn-danger" id="btn_hapus_video">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--END MODAL HAPUS-->
    <!--MODAL HAPUS-->
    <div class="modal fade" id="ModalAktivasiVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
            <h4 class="modal-title" id="myModalLabel">Aktifkan Video</h4>
          </div>
          <form class="form-horizontal">
            <div class="modal-body">

              <input type="hidden" name="kode" id="id_video_aktivasi" value="">
              <div class="alert alert-warning"><p>Apakah Anda akan mengaktifkan <u> <span id="nama_video_aktivasi"></span></u>?</p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button class="btn_aktivasi btn btn-success" id="btn_aktivasi_video">Aktifkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--END MODAL HAPUS-->

    <script type="text/javascript">
      $(document).ready(function() {
        $('#mydata').DataTable();
        $('#data_kategori').DataTable();
      } );
      show_portofolio();
      show_kategori_portofolio();
      function show_kategori_portofolio(){
        $.ajax({
          type  : 'ajax',
          url   : "<?php echo base_url('admin/kategori_portofolio_list')?>",
          async : false,
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              no = i+1;
              html += '<tr>'+
              '<td>'+ no++ +'</td>'+
              '<td>'+data[i].nama.substr(0, 50)+'</td>'+
              '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-sm video_delete" video_hapus_id="'+data[i].id+'" video_judul="'+data[i].nama+'"    >Delete</a>'+
              '</td>'+
              '</tr>';
            }
            $('#kategori_portofolio_list').html(html);
          }

        });
      }
      function show_portofolio(){
        $.ajax({
          type  : 'ajax',
          url   : "<?php echo base_url('admin/portofolio_list')?>",
          async : false,
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
              no = i+1;
              html += '<tr>'+
              '<td>'+ no++ +'</td>'+
              '<td>'+data[i].nama.substr(0, 50)+'</td>'+
              '<td>'+data[i].keterangan.substr(0, 50)+'</td>'+
              '<td> <img src="<?php echo base_url('assets/portofolio/thumb/')?>'+data[i].gambar+'"></td>'+
              '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-sm video_delete" video_hapus_id="'+data[i].id+'" video_judul="'+data[i].nama+'"    >Delete</a>'+
              '<a href="javascript:void(0);" class="btn btn-success btn-sm video_aktivasi" video_aktif_id="'+data[i].id+'" video_judul="'+data[i].nama+'"    >Aktifkan</a>'+
              '</td>'+
              '</tr>';
            }
            $('#portofolio_list').html(html);
          }

        });
      }
      $('#submitportofolio').submit(function(e){
        e.preventDefault(); 

        $.ajax({
         url:"<?php echo site_url('admin/tambah_portofolio')?>",
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
      show_portofolio();
      swal ( "Sukses" ,  "portofolio Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );

      show_portofolio();
      $("form").trigger("reset");
    },
    error:function(data) {
     swal ( "Gagal" ,  "portofolio Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
     $("form").trigger("reset");
   }
 });
      });
      $('#portofolio_list').on('click','.video_delete',function(){
        var id=$(this).attr('video_hapus_id');
        var nama=$(this).attr('video_judul');

        $('#id_video_hapus').val(id);
        $('#nama_video_hapus').html(nama);
        $('#ModalHapusVideo').modal('show');

      });
      $('#btn_hapus_video').on('click',function(){
        var id_video = $('#id_video_hapus').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url('admin/hapus_video')?>",
          dataType : "JSON",
          data : {id_video:id_video},
          success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalHapusVideo').modal('hide');
              show_portofolio();
              swal ( "Sukses" ,  "Video Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
        return false;
      });
      $('#portofolio_list').on('click','.video_aktivasi',function(){
        var id=$(this).attr('video_aktif_id');
        var nama=$(this).attr('video_judul');

        $('#id_video_aktivasi').val(id);
        $('#nama_video_aktivasi').html(nama);
        $('#ModalAktivasiVideo').modal('show');
      });
      $('#btn_simpan_kategori').on('click',function(){
        var nama_kategori_portofolio = $('#nama_kategori_portofolio').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url('admin/tambah_kategori_portofolio')?>",
          dataType : "JSON",
          data : {nama_kategori_portofolio:nama_kategori_portofolio},
          success: function(data){
              show_kategori_portofolio();
              swal ( "Sukses" ,  "Kategori berhasil ditambahkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
        $("form").trigger("reset");
        return false;
      });
      $('#btn_aktivasi_video').on('click',function(){
        var id_video = $('#id_video_aktivasi').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo site_url('admin/aktivasi_video')?>",
          dataType : "JSON",
          data : {id_video:id_video},
          success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalAktivasiVideo').modal('hide');
              show_portofolio();
              swal ( "Sukses" ,  "Video Berhasil Diaktifkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
        return false;
      });
    </script>