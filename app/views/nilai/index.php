<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Nilai
            </button>
            <h3>Daftar Nilai</h3>
                <ul class="list-group">
                    <?php foreach($data['nlai'] as $nlai) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $nlai['nm_lengkap064']; ?>
                            <div>
                                <a href="<?php echo BASEURL; ?>/Nilai_2411500064/detail/<?php echo $nlai['id'];?>" class="badge text-bg-primary text-decoration-none ms-auto me-1">
                                    detail
                                </a>
                         
                                <a href="<?php echo BASEURL; ?>/Nilai_2411500064/hapus/<?php echo $nlai['id'];?>" class="badge text-bg-danger text-decoration-none " onclick="return confirm('Yakin?');">
                                    hapus
                                </a>
                            </div>
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
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Nilai</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/Nilai_2411500064/tambah" method="post">
            <div class="form-group">
                <label for="nim064">NIM</label>
                <input type="text" class="form-control" id="nim064" name="nim064">
            </div> 
            <div class="form-group">
                <label for="nm_lengkap064">Nama Lengkap</label>
                <input type="text" class="form-control" id="nm_lengkap064" name="nm_lengkap064">
            </div>
            <div class="form-group">
                <label for="nm_mk064">Nama Matkul</label>
                <input type="nm_mk064" class="form-control" id="nm_mk064" name="nm_mk064">
            </div>
            <div class="form-group">
                <label for="nilai_akhir064">Nilai Akhir</label>
                <input type="nilai_akhir064" class="form-control" id="nilai_akhir064" name="nilai_akhir064">
            </div>
            <div class="form-group">
                <label for="grade064">Grade</label>
                <input type="grade064" class="form-control" id="grade064" name="grade064">
            </div>
            <div class="form-group">
                <label for="ket064">Keterangan</label>
                <input type="ket064" class="form-control" id="ket064" name="ket064">
            </div>
            <!-- <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan" >
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                     value untuk save di database dan yg depan untuk ditampilkan di form 
                </select>
            </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>