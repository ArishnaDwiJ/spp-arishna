<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
                
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Edit Data Siswa :</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?=BASE_URL?>admin_siswa/update/<?=$data['siswa']['id']?>">
                        <div class="form-group">
                            <!-- <label for="exampleInput">ID</label> -->
                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['siswa']['id']?>">
                        </div>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">NISN :</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" value="<?=$data['siswa']['nisn']?>">
                        </div>

                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">NIS :</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="<?=$data['siswa']['nis']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['siswa']['nama']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data['siswa']['alamat']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Telepon :</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?=$data['siswa']['telepon']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">ID Kelas :</label>
                            <input type="text" class="form-control" id="kelas_id" name="kelas_id" value="<?=$data['siswa']['kelas_id']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">ID Pengguna :</label>
                            <input type="text" class="form-control" id="pengguna_id" name="pengguna_id" value="<?=$data['siswa']['pengguna_id']?>">
                        </div>
                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">ID Pembayaran :</label>
                            <input type="text" class="form-control" id="pembayaran_id" name="pembayaran_id" value="<?=$data['siswa']['pembayaran_id']?>">
                        </div>
                        <br>
                        <div class="form-footer">
                        <a href="<?=BASE_URL?>/admin_siswa" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
