<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Content Row -->
<div class="row">
                
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Edit Data Pembayaran :</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?=BASE_URL?>/admin_pembayaran/update/<?=$data['pembayaran']['id']?>">
                        <div class="form-group">
                            <!-- <label for="exampleInput">ID</label> -->
                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['pembayaran']['id']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Tahun Ajaran :</label>
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="<?=$data['pembayaran']['tahun_ajaran']?>">
                        </div>

                        <br>

                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Nominal :</label>
                            <input type="text" class="form-control" id="nominal" name="nominal" value="<?=$data['pembayaran']['nominal']?>">
                        </div>
                        <div class="form-footer">
                        <a href="<?=BASE_URL?>/admin_pembayaran" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
