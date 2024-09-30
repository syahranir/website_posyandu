<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Imunisasi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Anak</th>
                            <th>Tanggal lahir</th>
                            <th>Jenis kelamin</th>
                            <th>Jenis Imunisasi</th>
                            <th>Jadwal Imunisasi</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getImunisasi as $anak){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $anak['nama_anak'];?></td>
                                <td><?= $anak['tanggal_lahir'];?></td>
                                <td><?= $anak['jk'];?></td>
                                <td><?= $anak['jenis_imunisasi'];?></td>
                                <td><?= $anak['jadwal_imunisasi'];?></td>
                                <td>
                                <a href="<?= base_url('imunisasi/edit/'.$anak['id_anak']);?>" 
                                    class="btn btn-success">
                                    Tambah imunisasi</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
</div>