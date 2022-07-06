<br>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Masukkan Nama Barang</h4>
      <form role="form" method="post" action="<?php echo base_url("master/C_barang/tambahBarang/") ?>">
        <div class="form-group">
          <label for="exampleInputName1">Nama Barang</label>
          <input type="text" class="form-control" id="exampleInputName1" name="nama_barang" placeholder="Masukkan Nama Barang">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Jumlah Barang</label>
          <input type="text" class="form-control" id="exampleInputName1" name="jumlah_barang" placeholder="Jumlah Barang">
        </div>
        <div class="form-group">
          <label for="exampleInputName1"> Stok </label>
          <input type="text" class="form-control" id="exampleInputName1" name="stok_barang" placeholder="Stok Barang">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Harga Barang </label>
          <input type="number" class="form-control" id="exampleInputName1" name="harga_barang" placeholder="Harga Barang">
        </div>
        <!-- <div class="form-group">
          <label>File upload</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
            </span>
          </div>
        </div> -->
        <!-- <div class="form-group">
          <label for="exampleInputCity1">City</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div> -->
        <!-- <div class="form-group">
          <label for="exampleTextarea1">Textarea</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
        </div> -->
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
    
    <div class="card-body">
      <h4 class="card-title"> Barang Yang Tersedia</h4>
      <!-- <p class="card-description"> Add class <code>.table-dark</code>
      </p> -->
      <div class="table-responsive">
        <table class="table table-dark">
          <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Jumlah Barang</th>
              <th>Stok</th>
              <th>Harga Barang</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($data_barang as $data) {  ?>
            <tr>
              <td><?php echo $data->nama_barang; ?></td>
              <td><?php echo $data->jumlah_barang; ?></td>
              <td><?php echo $data->stok_barang; ?></td>
              <td><?php echo $data->harga_barang; ?></td>
              <td>
              
              <div class="btn-group">
              <a url="<?php echo base_url("master/C_barang/deletebarang") ?>" id="<?php echo $data->id_barang ?>" href="#" class="btn btn-sm btn-danger delete_this" title="hapus data"><i class="glyphicon glyphicon-trash"></i></a>
              <a data-toggle="modal" data-target="#editModal" class="addData btn btn-info btn-xs" 
              data-id="<?php echo $data->id_barang  ?>"
              data-nm_posisi="<?php echo $data->nama_barang ?>"
              data-ket_posisi="<?php echo $data->harga_barang ?>"
              > Edit <i class="fa fa-pencil"></i></a> 
              </div>
              </td>
            <?php } ?>
          </tbody>
        </table>
        <?php if(!$data_barang){ ?>
        <hr> 
        <div align="center"><label >User Tidak Ditemukan </label></div> 

        <?php } ?>
        </div><!-- end col-lg-21 -->
        </div><!-- end row -->
      </div>
                          
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

    </div>
                      
    </div>
    </div>
    </div>
    </div>
</div>
 
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Edit Informasi</h3>
    </div>
    <form role="form" method="post" action="<?php echo base_url("simrs/C_simrs_aset/ubah_Aset") ?>">
    <input type="hidden" name="nm_mst_aset" id="id_mst_aset">
      <div class="modal-body">
          <!-- content goes here -->
          
            <div class="form-group">
              <label>Nama Aset</label>
              <input class="form-control" id="id_mst_aset" type="text" name="nm_mst_aset" placeholder="Isi Perubahan" value="" required>
            </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
          </div>
          <div class="btn-group" role="group">
            <button type="submit" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>
</div>


 <script type="text/javascript">
    $(document).ready(function() {
             $('#dt_table').dataTable( {
            "language": {
                "url": "<?php echo site_url("assets/js/indonesian.lang"); ?>"
            }
        } );
    } );
 </script>

 <script type="text/javascript">
  
  $(".delete_this").click(function(e) {
            e.preventDefault();
            if (confirm('Apakah anda yakin?')) {
                var url = $(this).attr('url');
                var id = $(this).attr('id');
                $.post(url, {
                    id: id
                });
                $(this).closest("tr").fadeOut();

            }
        });
  
</script>

