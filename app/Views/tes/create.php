<html>
    <body bgcolor="aqua">
        <h1>Tes Halaman Pendaftaran</h1>
         <p>
            <form action="<?= base_url('tes/store')?>" method="post">
               <table>
                    <tr>
                        <td>NPM</td>
                        <td>:</td>
                        <td><input type="text" id="npm" name="npmku"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" id="nama" name="namaku"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" id="alamat" name="alamatku"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit"></td>
                    </tr>
                </table>
            </form>
    </body>
</html>