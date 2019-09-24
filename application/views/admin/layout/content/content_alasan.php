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

    <!-- halaman about us -->

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
              <h3 class="box-title">Tambah Daftar Alasan Memilih Kami</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitalasan">
              <div class="box-body">
                <div class="form-group">
                  <label for="link_sosmed">Link Sosial Media</label>
                  <input type="text" class="form-control" id="alasan" name="alasan" placeholder="kami terbaik dalam bidangnya" required>
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
          <h3 class="box-title">Manage Alasan Memilih Kami</h3>

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
                  <th>Alasan</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="alasan_list">

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
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--MODAL HAPUS-->
  <div class="modal fade" id="AlasanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Hapus Alasan</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <input type="hidden" name="kode" id="id_alasan" value="">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama"></span></u>?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-danger" id="btn_hapus_alasan">Hapus</button>
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
    show_alasan();
    function show_alasan(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/alasan_list')?>",
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            no = i+1;
            html += '<tr>'+
            '<td>'+ no++ +'</td>'+
            '<td>'+data[i].alasan+'</td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm alasan_delete" hapus_id="'+data[i].id+'" alasan="'+data[i].alasan+'"    >Delete</a>'+
            '</td>'+
            '</tr>';
          }
          $('#alasan_list').html(html);
        }

      });
    }
    $('#submitalasan').submit(function(e){
      e.preventDefault();
      $.ajax({
       url:"<?php echo site_url('admin/tambah_alasan')?>",
       type:"post",
       data:new FormData(this),
       processData:false,
       contentType:false,
       cache:false,
       async:false,
     beforeSend: function(data) {
      $('#wait').show();
    },
    success: function(data){
      swal ( "Sukses" ,  "Alasan Memilih Kami Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );
    show_alasan();
    },
    error:function(data) {
     swal ( "Gagal" ,  "Alasan Memilih Kami Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
   }
 });
    });
    $('#alasan_list').on('click','.alasan_delete',function(){
      var id=$(this).attr('hapus_id');
      var alasan=$(this).attr('alasan');

      $('#id_alasan').val(id);
      $('#nama').html(alasan);
      $('#AlasanModal').modal('show');

    });
    $('#btn_hapus_alasan').on('click',function(){
      var id = $('#id_alasan').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_alasan')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#AlasanModal').modal('hide');
              show_alasan();
              swal ( "Sukses" ,  "Alasan Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            }
          });
      return false;
    });

  </script>
