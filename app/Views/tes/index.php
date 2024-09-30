<a href="<?=base_url('tes/create'); ?>">Tambah</a>
<body bgcolor=pink>
<table border=1 cellspacing=0>
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    <?php 
    //print_r($tes);
    foreach ($tes as $row) { 
        ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->npm; ?></td>
                <td><?= $row->nama; ?></td>
                <td><?= $row->alamat; ?></td>
                <td>
                    <a title="Edit" href="<?= base_url("tes/edit/$row->id"); ?> " class="btn btn-info"> edit </a>
                    <a title="Delete" href="<?= base_url("tes/delete/$row->id"); ?> " class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"> delete </a>
                </td>
            </tr>
        <?php
        }
    
        ?>
        
    </table>

