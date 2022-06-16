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
      <h4 class="card-title"> Barang Yang Di Masukkan</h4>
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

              <!-- <button class="btn btn-danger delete_this btn-xs" urls="<?php echo base_url("master/C_barang/deleteBarang/").$data->id_barang ?>" idp="<?php echo $data->id_barang; ?>" >Hapus <span class="glyphicon glyphicon-trash"></span></button> -->
             
              <button class="btn btn-danger del btn-xs" urls="<?php echo base_url("master/C_barang/deleteBarang/").$data->id_barang ?>" idp="<?php echo $data->id_barang; ?>" >Hapus <span class="glyphicon glyphicon-trash"></span></button>
              </td>
            </tr>
           
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- <script>
/// fungsi scrip\\\
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

</script> -->


<script type="text/javascript">
  
  $(".del").click(function(){
    var urls = $(this).attr('urls');
   // console.log(urls);
    var id = $(this).attr('idp');
    $.post( urls, { id: id } );
    $(this).closest("tr").fadeOut();
    //window.location
  });
</script>


<script type="text/javascript">
    $(document).ready(function() {
             $('#dt_table').dataTable( {
            "language": {
                "url": "<?php echo site_url("assets/js/indonesian.lang"); ?>"
            }
        } );
    } );
 </script>

