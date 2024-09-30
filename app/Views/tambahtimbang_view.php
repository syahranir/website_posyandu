<div class="container p-5">
    <a href="<?= base_url('timbang');?>" class="btn btn-secondary mb-2">Kembali</a>
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Timbang</h4>
        </div>
            <form method="post" action="<?= base_url('timbang/update');?>">
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
                    <label for="">Berat Badan</label>
                    <input type="text" value="<?= $anak->bb;?>" name="bb" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tinggi Badan</label>
                    <input type="text" value="<?= $anak->tb;?>" name="tb" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Timbang</label>
                    <input type="date" value="<?= $anak->tgl_timbang;?>" name="tgl_timbang" required class="form-control">
                </div>
                <input type="hidden" value="<?= $anak->id_anak;?>" name="id_anak">
                <button class="btn btn-success">Tambah</button>
            </form>
</div>