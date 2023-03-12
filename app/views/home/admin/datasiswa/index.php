<!-- Begin Page Content -->
<!-- <div class="container-fluid" style="text-align: center;"> -->

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div> -->

<!-- Content Row -->
<!-- <div class="row"> -->
    
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data Siswa</h6>
    </div>
    <div class="card-body">

    <!-- Button trigger modal -->
    <div class="" style="text-align: left";>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#formModal"> Tambah Data Siswa </button>
    </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['siswa'] as $siswa):?>
                    <tr>
                        <td><?=$siswa['id']?></td>
                        <td><?=$siswa['nisn']?></td>
                        <td><?=$siswa['nis']?></td>
                        <td><?=$siswa['nama']?></td>
                        <td><?=$siswa['alamat']?></td>
                        <td><?=$siswa['telepon']?></td>
                        <td>
                            <a href="<?=BASE_URL; ?>admin_siswa/edit/<?=$siswa['id']?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ; ?>admin_siswa/delete/<?= $siswa['id']?>" class="btn btn-danger" onclick="return confirm('yakin?');" >Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


</div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="<?= BASE_URL; ?>admin_siswa/store" method="POST">
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn">
        </div>
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon">
        </div>
        <div class="form-group">
            <label for="kelas_id">ID Kelas</label>
            <input type="text" class="form-control" id="kelas_id" name="kelas_id">
        </div>
        <div class="form-group">
            <label for="id_pengguna">ID Pengguna</label>
            <input type="text" class="form-control" id="id_pengguna" name="pengguna_id">
        </div>
        <div class="form-group">
            <label for="pembayaran_id">ID Pembayaran</label>
            <input type="text" class="form-control" id="pembayaran_id" name="pembayaran_id">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>