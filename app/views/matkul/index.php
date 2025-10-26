<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mata Kuliah
            </button>
            <h3>Daftar Mata Kuliah</h3>
                <ul class="list-group">
                    <?php foreach($data['matkul'] as $matkul) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $matkul['nama_mk']; ?>
                            <a href="<?php echo BASEURL; ?>/matkul/detail/<?php echo $matkul['id'];?>" class="badge text-bg-primary text-decoration-none ">
                                detail
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mata Kuliah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/matkul/tambah" method="post">
            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk">
            </div>
            <div class="form-group">
                <label for="kode_mk">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="kode_mk" name="kode_mk">
            </div>
            <div class="form-group">
                <label for="jns_mk">Jenis Mata Kuliah</label>
                <select class="form-control" name="jns_mk" id="jns_mk" >
                    <option value="Praktikum">Praktikum</option>
                    <option value="Teori">Teori</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>