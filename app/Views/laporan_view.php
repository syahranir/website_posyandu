<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Laporan Data</h4>
        </div>
        <div class="card-body">
        <form method="GET" action="" class="form-group">
            <div class="table-responsive">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Cari data berdasarkan nama">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                    </div>
                </div>
            </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Anak</th>
                            <th>Tanggal lahir</th>
                            <th>Jenis kelamin</th>
                            <th>Anak ke-</th>
                            <th>Nama ibu</th>
                            <th>Nama ayah</th>
                            <th>Alamat</th>
                            <th>Jenis Imunisasi</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Tanggal Timbang</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($anak as $row){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $row['nama_anak'];?></td>
                                <td><?= $row['tanggal_lahir'];?></td>
                                <td><?= $row['jk'];?></td>
                                <td><?= $row['anak_ke'];?></td>
                                <td><?= $row['nama_ibu'];?></td>
                                <td><?= $row['nama_ayah'];?></td>
                                <td><?= $row['alamat'];?></td>
                                <td><?= $row['jenis_imunisasi'];?></td>
                                <td><?= $row['jadwal_imunisasi'];?></td>
                                <td><?= $row['bb'];?> kg</td>
                                <td><?= $row['tb'];?> cm</td>
                                <td><?= $row['tgl_timbang'];?></td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
</div>