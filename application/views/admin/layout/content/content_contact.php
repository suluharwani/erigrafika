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
    oFReader.readAsDataURL(document.getElementById("gambar_blog").files[0]);

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
      <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i><?=$this->uri->segment(1)?></a></li>
      <li><a href="<?=base_url('admin/blog')?>"></a><?=$this->uri->segment(2)?></li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Add <?=$title?></h3>

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
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitcontact">
              <div class="box-body">
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control" id="telepon" name="telepon" placeholder="(+62)xxx xxx" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="lorem@mail.com" required>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="jalan x nomor y" required>
                </div>
                <div class="form-group">
                  <label for="buka">Buka</label>
                  <input type="text" class="form-control" id="buka" name="buka" placeholder="Senin - Jumat 09:00-17:00" required>
                </div>
                <div class="form-group">
                  <label for="tutup">Tutup</label>
                  <input type="text" class="form-control" id="tutup" name="tutup" placeholder="Sabtu-Minggu" required>
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
          <h3 class="box-title">Manage Video</h3>

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
              <tbody id="contact_list">

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

    } );
    show_contact();
    function show_contact(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/contact_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            if (data[i].status == '1') {
              var status_video = "aktif";
            }else{
              var status_video = "tidak aktif";
            }
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].judul.substr(0, 50)+'</td>'+
            '<td>'+data[i].keterangan.substr(0, 50)+'</td>'+
            '<td> <img src="<?php echo base_url('assets/web_video/thumb/')?>'+data[i].gambar+'"></td>'+
            '<td> <iframe height="85" src="'+data[i].link_video.replace("watch?v=","embed/")+'" frameborder="0" allowfullscreen></iframe></td>'+
            '<td>'+ status_video +'</td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm video_delete" video_hapus_id="'+data[i].id+'" video_judul="'+data[i].judul+'"    >Delete</a>'+
            '<a href="javascript:void(0);" class="btn btn-success btn-sm video_aktivasi" video_aktif_id="'+data[i].id+'" video_judul="'+data[i].judul+'"    >Aktifkan</a>'+
            '</td>'+
            '</tr>';
          }
          $('#contact_list').html(html);
        }

      });
    }
    $('#submitcontact').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_contact')?>",
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
      show_blog();
      swal ( "Sukses" ,  "Contact Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );

      show_blog();
     $("form").trigger("reset");
    },
    error:function(data) {
     swal ( "Gagal" ,  "Contact Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
    $("form").trigger("reset");
   }
 });
    });
    $('#blog_list').on('click','.video_delete',function(){
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
              show_blog();
              swal ( "Sukses" ,  "Video Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
    $('#blog_list').on('click','.video_aktivasi',function(){
      var id=$(this).attr('video_aktif_id');
      var nama=$(this).attr('video_judul');

      $('#id_video_aktivasi').val(id);
      $('#nama_video_aktivasi').html(nama);
      $('#ModalAktivasiVideo').modal('show');
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
              show_blog();
              swal ( "Sukses" ,  "Video Berhasil Diaktifkan!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });
  </script>
