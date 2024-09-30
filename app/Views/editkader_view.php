<div class="container p-5">
    <a href="<?= base_url('kader');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Kader : <?= $kader->nama_kader;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kader/update');?>">
                <div class="form-group">
                    <label for="">Nama Kader</label>
                    <input type="text" value="<?= $kader->nama_kader;?>" name="nama_kader" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Telepon Kader</label>
                    <input type="text" value="<?= $kader->tlp_kader;?>" name="tlp_kader" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $kader->alamat_kader;?>" name="alamat_kader" required class="form-control">
                </div>
                <input type="hidden" value="<?= $kader->id_kader;?>" name="id_kader">
                <button class="btn btn-success">Edit Data</button>
            </form>
        </div>
    </div>
</div>