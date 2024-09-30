<div class="container p-5">
    <a href="<?= base_url('bidan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Bidan : <?= $bidan->nama_bidan;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('bidan/update');?>">
                <div class="form-group">
                    <label for="">Nama Bidan</label>
                    <input type="text" value="<?= $bidan->nama_bidan;?>" name="nama_bidan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Telepon Bidan</label>
                    <input type="text" value="<?= $bidan->tlp_bidan;?>" name="tlp_bidan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $bidan->alamat_bidan;?>" name="alamat_bidan" required class="form-control">
                </div>
                <input type="hidden" value="<?= $bidan->id_bidan;?>" name="id_bidan">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>