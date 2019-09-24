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
    oFReader.readAsDataURL(document.getElementById("foto").files[0]);

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
      <li><a href="<?=base_url('admin/team')?>"></a><?=$this->uri->segment(2)?></li>

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
              <h3 class="box-title">Input Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" id="submitteam">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Team</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Team" required>
                </div>
                <div class="form-group">
                  <label for="posisi">Posisi</label>
                  <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Nama Team" required>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" id="foto" name="foto" onchange="previewImage();" required>
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
          <h3 class="box-title">Manage Team</h3>

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
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Foto</th>
                  <th>Posisi</th>
                  <th style="text-align: right;">Actions</th>
                </tr>
              </thead>
              <tbody id="team_list">

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
  <div class="modal fade" id="ModalHapusTeam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
          <h4 class="modal-title" id="myModalLabel">Hapus Team</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">

            <input type="hidden" name="kode" id="id_team" value="">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus <u> <span id="nama_team"></span></u>?</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button class="btn_hapus btn btn-danger" id="btn_hapus_team">Hapus</button>
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

            <input type="hidden" name="kode" id="id_team" value="">
            <div class="alert alert-warning"><p>Apakah Anda akan mengaktifkan <u> <span id="nama"></span></u>?</p>
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
    show_team();
    function show_team(){
      $.ajax({
        type  : 'ajax',
        url   : "<?php echo base_url('admin/team_list')?>",
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
            '<td> <img src="<?php echo base_url('assets/team/thumb/')?>'+data[i].foto+'"></td>'+
            '<td>'+data[i].posisi.substr(0, 50)+'</td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:void(0);" class="btn btn-danger btn-sm delete_team" id_team="'+data[i].id+'" nama="'+data[i].nama+'"    >Delete</a>'+
            '</td>'+
            '</tr>';
          }
          $('#team_list').html(html);
        }

      });
    }
    $('#submitteam').submit(function(e){
      e.preventDefault();

      $.ajax({
       url:"<?php echo site_url('admin/tambah_team')?>",
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
      show_team();
      swal ( "Sukses" ,  "Team Berhasil Ditambahkan!" ,  "success", {
        buttons: false,
        timer: 1000,
      } );

      show_team();
     $("form").trigger("reset");
    },
    error:function(data) {
     swal ( "Gagal" ,  "Team Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
    $("form").trigger("reset");
   }
 });
    });
    $('#team_list').on('click','.delete_team',function(){
      var id=$(this).attr('id_team');
      var nama=$(this).attr('nama');

      $('#id_team').val(id);
      $('#nama_team').html(nama);
      $('#ModalHapusTeam').modal('show');

    });
    $('#btn_hapus_team').on('click',function(){
      var id = $('#id_team').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url('admin/hapus_team')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
              // $('[name="kode"]').val("");
              $('#ModalHapusTeam').modal('hide');
              show_team();
              swal ( "Sukses" ,  "Team Berhasil Dihapus!" ,  "success", {
                buttons: false,
                timer: 1000,
              } );
            },
            error:function(data) {
             swal ( "Gagal" ,  "Team gagal dihapus!" ,  "error", {
              buttons: false,
              timer: 1000,
            } );
             $("form").trigger("reset");
           }
          });
      return false;
    });

  </script>
