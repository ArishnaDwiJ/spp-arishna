<!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

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

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data Petugas</h6>
    </div>
    <div class="card-body">

        <!-- Button trigger modal -->
        <div class="" style="text-align: left";>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#formModal"> Tambah Data Petugas </button>
    </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>ID Pengguna</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['petugas'] as $ptgs):?>
                    <tr>
                        <td><?=$ptgs['id']?></td>
                        <td><?=$ptgs['nama']?></td>
                        <td><?=$ptgs['pengguna_id']?></td>
                        <td>
                            <a href="<?=BASE_URL; ?>admin_petugas/edit/<?=$ptgs['id']?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ; ?>admin_petugas/delete/<?= $ptgs['id']?>" class="btn btn-danger" onclick="return confirm('yakin?');" >Hapus</a>
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
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="<?= BASE_URL; ?>admin_petugas/store" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="pengguna_id">ID Pengguna</label>
            <input type="text" class="form-control" id="pengguna_id" name="pengguna_id">
        </div>

        <!-- <div class="form-group">
            <label for="komke">Kompetensi Keahlian</label>
            <select class="form-control" id="komke">

            <option value="BKP">BKP</option>
            <option value="DPIB">DPIB</option>
            <option value="TAV">TAV</option>
            <option value="TITL">TITL</option>
            <option value="TPTU">TPTU</option>
            <option value="PM">PM</option>
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            </select>
        </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>