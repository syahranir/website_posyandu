<div class="container p-5">
    <a href="<?= base_url('anak');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Anak</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('anak/add');?>">
                <div class="form-group">
                    <label for="">Nama Anak</label>
                    <input type="text" name="nama_anak" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">tanggal_lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis kelamin</label>
                    <select class="form-control" name="jk">
                        <option value="">---Pilih Jenis Kelamin--</option>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-Laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Anak_ke-</label>
                    <input type="text" name="anak_ke" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">nama_ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">nama_ayah</label>
                    <input type="text" name="nama_ayah" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>