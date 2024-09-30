<div class="container pt-5">
    <a href="<?= base_url('kader/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Kader</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kader</th>
                            <th>No Telepon Kader</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getKader as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_kader'];?></td>
                                <td><?= $isi['tlp_kader'];?></td>
                                <td><?= $isi['alamat_kader'];?></td>
                                <td>
                                    <a href="<?= base_url('kader/edit/'.$isi['id_kader']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('kader/hapus/'.$isi['id_kader']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data kader?')"
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