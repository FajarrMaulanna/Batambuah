<div class="modal fade" id="modal_detail<?php echo $kuliner['id'] ?>">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Detail Kuliner</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img class="detail_img" src="img/<?php echo $kuliner['img_kul'] ?>" alt="">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label>Nama Kuliner :</label>
                    <p><?php echo $kuliner['name_kul'] ?></p>
                </li>
                <li class="list-group-item">
                    <label>Kategori :</label>
                    <p><?php echo $kuliner['kategori'] ?></p>
                </li>
                <li class="list-group-item">
                    <label>Deskripsi Kuliner :</label>
                    <pre class="pre"><?php echo $kuliner['desc_kul'] ?></pre>
                </li>
                <li class="list-group-item">
                    <label>Tempat :</label>
                    <pre class="pre"><?php echo $kuliner['place_kul'] ?></pre>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal_edit<?php echo $kuliner['id'] ?>">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Kuliner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="update_kuliner.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Kuliner</label>
            <input type="text" class="form-control" name="nama_kul" placeholder="Masukan nama kuliner..." value="<?php echo $kuliner['name_kul'] ?>" required>
            <input type="hidden" name="id_kul" value="<?php echo $kuliner['id'] ?>">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori_kul">
              <option>Jajanan</option>
              <option>Kerupuk</option>
              <option>Minuman</option>
              <option>Sambal</option>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="desk_kul" rows="4" placeholder="Masukan deskripsi kuliner..." required><?php echo $kuliner['desc_kul'] ?></textarea>
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <p class="text-danger">Jika lokasi lebih dari 1, buat di baris baru textarea</p>
            <textarea class="form-control" name="lok_kul" rows="4" placeholder="Masukan lokasi kuliner tiap baris..." required><?php echo $kuliner['place_kul'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Gambar Kuliner</label>
            <p class="text-danger">Format harus PNG, JPG, JPEG, GIF dengan ukuran maksimal 1 MB</p>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="img_kul" id="exampleInputFile" required>
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
      </div>
        <div class="modal-footer justify-content-between">
          <input type="submit" class="btn btn-primary ml-auto" value="Save changes">
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>