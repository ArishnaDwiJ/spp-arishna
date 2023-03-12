<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Data History</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan Bayar</th>
                        <th>Tahun Bayar</th>
                        <th>ID Siswa</th>
                        <th>ID Petugas</th>
                        <th>ID Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['transaksi'] as $transaksi):?>
                    <tr>
                        <td><?=$transaksi['id']?></td>
                        <td><?=$transaksi['tanggal_bayar']?></td>
                        <td><?=$transaksi['bulan_dibayar']?></td>
                        <td><?=$transaksi['tahun_dibayar']?></td>
                        <td><?=$transaksi['siswa_id']?></td>
                        <td><?=$transaksi['petugas_id']?></td>
                        <td><?=$transaksi['pembayaran_id']?></td>
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