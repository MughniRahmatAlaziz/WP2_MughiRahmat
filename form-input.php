<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/11.css">
    <title>Form Data Diri</title>
</head>
<body>
<section>
    <center>
        <form action="<?= base_url('web/hasil'); ?>" method="post">
        <h1><?php echo $judul ?></h1>
        <table>
            <tr align="left">
                <th>Nama</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama1" id="nama1" required/>
            </td>
            </tr>
            <tr align="left">
                <th>NIM</th>
                <th>:</th>
                <td>
                    <input type="number" name="nim" id="nim" required />
                </td>
            </tr>
            <tr align="left">
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" required/>
            </td>
            </tr>
            <tr align="left">
                <th>Umur</th>
                <td>:</td>
                <td>
                    <input type="number"name="umur" id="umur" required />
                </td>
            </tr>
            <tr align="left">
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tala" id="tala" required/>
            </td>
            </tr>
            <tr align="left">
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat" required/>
            </td>
            </tr>
            <tr align="left">
                <th>Kode Pos</th>
                <td>:</td>
                <td>
                    <input type="number" name="kopo" id="kopo" >
            </td>
            </tr>
            <tr align="left">
                <th>Email</th>
                <td>:</td>
                <td>
                    <input type="text" name="email" id="email" required/>
            </td>
            </tr>
            <tr align="left">
                <th>Kata Sandi</th>
                <td>:</td>
                <td>
                    <input type="password" name="kasa" id="kasa" required/>
            </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" value="Kirim">
            </td>
            </tr>
        </form>
        </table>
</center>
</section>
</body>

</html>