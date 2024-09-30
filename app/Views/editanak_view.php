<div class="container p-5">
    <a href="<?= base_url('anak');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Anak : <?= $anak->nama_anak;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('anak/update');?>">
                <div class="form-group">
                    <label for="">Nama Anak</label>
                    <input type="text" value="<?= $anak->nama_anak;?>" name="nama_anak" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal lahir</label>
                    <input type="date" value="<?= $anak->tanggal_lahir;?>" name="tanggal_lahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis kelamin</label>
                    <select class="form-control" name="jk">
                    <option value="<?= $anak->jk; ?>">---Pilih Jenis Kelamin--</option>
                        <option value="P">Perempuan</option>
                        <option value="L">Laki-Laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Anak ke</label>
                    <input type="number" value="<?= $anak->anak_ke;?>" name="anak_ke" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama ibu</label>
                    <input type="text" value="<?= $anak->nama_ibu;?>" name="nama_ibu" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama ayah</label>
                    <input type="text" value="<?= $anak->nama_ayah;?>" name="nama_ayah" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $anak->alamat;?>" name="alamat" required class="form-control">
                </div>
                <input type="hidden" value="<?= $anak->id_anak;?>" name="id_anak">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>