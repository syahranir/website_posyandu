<div class="container p-5">
    <a href="<?= base_url('imunisasi');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Imunisasi</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('imunisasi/update');?>">
                <div class="form-group">
                    <label for="">Nama Anak</label>
                    <input type="text" value="<?= $anak->nama_anak;?>" name="nama_anak" readonly value="" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal lahir</label>
                    <input type="date" value="<?= $anak->tanggal_lahir;?>" name="tanggal_lahir" readonly value="" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis kelamin</label>
                    <input type="text" value="<?= $anak->jk;?>" name="jk" readonly value="" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Imunisasi</label>
                    <select type="text" value="<?= $anak->jenis_imunisasi;?>" name="jenis_imunisasi" required class="form-control">
                        <option value="">---Pilih Jenis Imunisasi--</option>
                        <option value="Hepatitis B">Hepatitis B</option>
                        <option value="Polio">Polio</option>
                        <option value="BCG">BCG</option>
                        <option value="Campak Rubella">Campak Rubella</option>
                        <option value="DPT-HB-HiB">DPT-HB-HiB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jadwal Imunisasi</label>
                    <input type="date" value="<?= $anak->jadwal_imunisasi;?>" name="jadwal_imunisasi" required class="form-control">
                </div>
                <input type="hidden" value="<?= $anak->id_anak;?>" name="id_anak">
                <button class="btn btn-success">Tambah</button>
            </form>
            
        </div>
    </div>
</div>