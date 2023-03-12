<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data Pengguna</h6>
    </div>
    <div class="card-body">

    <!-- Button trigger modal -->
        <div class="" style="text-align: left";>
           <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#formModal"> Tambah Data Pengguna </button>
       </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['pengguna'] as $pengguna):?>
                    <tr>
                        <td><?=$pengguna['id']?></td>
                        <td><?=$pengguna['username']?></td>
                        <td><?=$pengguna['password']?></td>
                        <td><?=$pengguna['role']?></td>
                        <td>
                            <a href="<?=BASE_URL; ?>admin_pengguna/edit/<?=$pengguna['id']?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ; ?>admin_pengguna/delete/<?= $pengguna['id']?>" class="btn btn-danger" onclick="return confirm('Yakin?');" >Hapus</a>
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
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="<?= BASE_URL; ?>admin_pengguna/store" method="POST">
        <div class="form-group">
            <label for="tahun_ajaran">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="nominal">Password</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
                        <label for="example">Pengguna ID</label>
                        <select name="role" class="form-control">
                            <?php foreach($data['pengguna'] as $pengguna):?>
                            <option value="<?=$pengguna['id']?>"><?=$pengguna['role']?></option>
                            <?php endforeach?>
                        </select>
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