 <!-- Begin Page Content -->
 <div class="container-fluid">
  <!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data Kelas</h6>
    </div>
    <div class="card-body">

    <!-- Button trigger modal -->
    <div class="" style="text-align: left";>
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#formModal"> Tambah Data Kelas </button>
    </div>

    <!-- <div class="" style="text-align: left;">
        <button class="btn btn-success" style="margin-bottom: 20px;">Tambah Data</button>
    </div> -->

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['kelas'] as $kelas):?>
                    <tr>
                        <td><?=$kelas['id']?></td>
                        <td><?=$kelas['nama']?></td>
                        <td><?=$kelas['kompetensi_keahlian']?></td>
                        <td>
                        <a href="<?=BASE_URL; ?>petugas_kelas/edit/<?=$kelas['id']?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ; ?>petugas_kelas/delete/<?= $kelas['id']?>" class="btn btn-danger" onclick="return confirm('yakin?');" >Hapus</a>
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
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="<?= BASE_URL; ?>petugas_kelas/store" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
            <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian">
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