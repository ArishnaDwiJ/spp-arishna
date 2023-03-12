<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
                
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Edit Data Petugas :</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?=BASE_URL?>admin_petugas/update/<?=$data['petugas']['id']?>">
                        <div class="form-group">
                            <!-- <label for="exampleInput">ID</label> -->
                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['petugas']['id']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['petugas']['nama']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Pengguna ID :</label>
                            <input type="text" class="form-control" id="pengguna_id" name="pengguna_id" value="<?=$data['petugas']['pengguna_id']?>">
                        </div>
                        <br>
                        <div class="form-footer">
                        <a href="<?=BASE_URL?>/admin_petugas" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
