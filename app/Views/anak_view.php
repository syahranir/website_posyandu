<div class="container pt-5">
    <a href="<?= base_url('anak/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Anak</h4>
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
                            <th>Anak ke-</th>
                            <th>nama ibu</th>
                            <th>nama ayah</th>
                            <th>alamat</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getAnak as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_anak'];?></td>
                                <td><?= $isi['tanggal_lahir'];?></td>
                                <td><?= $isi['jk'];?></td>
                                <td><?= $isi['anak_ke'];?></td>
                                <td><?= $isi['nama_ibu'];?></td>
                                <td><?= $isi['nama_ayah'];?></td>
                                <td><?= $isi['alamat'];?></td>
                                <td>
                                    <a href="<?= base_url('anak/edit/'.$isi['id_anak']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('anak/hapus/'.$isi['id_anak']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data anak ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>