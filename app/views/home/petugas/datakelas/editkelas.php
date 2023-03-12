<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
                
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Edit Data Kelas :</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?=BASE_URL?>petugas_kelas/update/<?=$data['kelas']['id']?>">
                        <div class="form-group">
                            <!-- <label for="exampleInput">ID</label> -->
                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['kelas']['id']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['kelas']['nama']?>">
                        </div>

                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Kompetensi Keahlian :</label>
                            <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" value="<?=$data['kelas']['kompetensi_keahlian']?>">
                        </div>
                        <div class="form-footer">
                        <a href="<?=BASE_URL?>petugas_kelas" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
