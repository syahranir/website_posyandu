<div class="container p-5">
    <a href="<?= base_url('kader');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Kader</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kader/add');?>">
                <div class="form-group">
                    <label for="">Nama Kader</label>
                    <input type="text" name="nama_kader" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">No telepon Kader</label>
                    <input type="date" name="tlp_kader" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat_kader" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>