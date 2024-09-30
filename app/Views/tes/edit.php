<body bgcolor="aqua">

    <h1>Halaman Edit Data</h1>
    <p>
        <form action="<?= base_url('tes/proses_edit')?>" method="post">
            <table>
                <tr>
                    <td>NPM</td>
                    <td>:</td>
                    <td><input type="text" id="npm" name="npm" value="<?php echo $tes->npm;?>">
                    <input type="hidden" id="id" name="id" value="<?php echo $tes->id;?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="nama" value="<?php echo $tes->nama;?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" id="alamat" name="alamat" value="<?php echo $tes->alamat;?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="EDIT"></td>
                </tr>
            </table>
        </from>
</body>