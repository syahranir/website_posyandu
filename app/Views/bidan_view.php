<div class="container pt-5">
    <a href="<?= base_url('bidan/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Bidan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Bidan</th>
                            <th>No Telepon Bidan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBidan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_bidan'];?></td>
                                <td><?= $isi['tlp_bidan'];?></td>
                                <td><?= $isi['alamat_bidan'];?></td>
                                <td>
                                    <a href="<?= base_url('bidan/edit/'.$isi['id_bidan']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('bidan/hapus/'.$isi['id_bidan']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data bidan?')"
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