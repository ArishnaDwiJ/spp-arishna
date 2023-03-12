<!-- Begin Page Content -->
<div class="container-fluid" style="text-align: center;">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History Pembayaran SPP</h1>
    <a href="<?=BASE_URL; ?>cetak.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
    
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data History</h6>
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
                        <th>Siswa ID</th>
                        <th>Petugas ID</th>
                        <th>Pembayaran ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['transaksi'] as $transaksi):?>
                    <tr>
                        <td><?=$transaksi['id']?></td>
                        <td style="text-align: left;"><?=$transaksi['tanggal_bayar']?></td>
                        <td style="text-align: left;"><?=$transaksi['bulan_dibayar']?></td>
                        <td style="text-align: left;"><?=$transaksi['tahun_dibayar']?></td>
                        <td style="text-align: left;"><?=$transaksi['siswa_id']?></td>
                        <td style="text-align: left;"><?=$transaksi['petugas_id']?></td>
                        <td style="text-align: left;"><?=$transaksi['pembayaran_id']?></td>
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