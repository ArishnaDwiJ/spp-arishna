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
                    <form class="user" method="POST" action="<?=BASE_URL?>/admin_pengguna/update/<?=$data['pengguna']['id']?>">
                        <div class="form-group">
                            <!-- <label for="exampleInput">ID</label> -->
                            <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['pengguna']['id']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Username :</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?=$data['pengguna']['username']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Password :</label>
                            <input type="text" class="form-control" id="password" name="password" value="<?=$data['pengguna']['password']?>">
                        </div>
                        <div class="form-group">
                        <label for="exampleInput" style="text-align: left;">Role :</label>
                            <input type="text" class="form-control" id="role" name="role" value="<?=$data['pengguna']['role']?>">
                        </div>
                        <div class="form-footer">
                        <a href="<?=BASE_URL?>/admin_pengguna" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
