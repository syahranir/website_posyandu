<div class="container p-5">
    <a href="<?= base_url('bidan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Bidan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('bidan/add');?>">
                <div class="form-group">
                    <label for="">Nama Bidan</label>
                    <input type="text" name="nama_bidan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">No telepon Bidan</label>
                    <input type="date" name="tlp_bidan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat_bidan" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>