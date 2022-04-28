<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/11.css">
    <title> Hasil Login</title>
</head>
<body>
<section>
    <h1><?php echo $judul ?></h1>
    <table> 
                <tr>
                    <td>Nama</td>
                    <th>:</th>
                    <td>
                        <?= $nama1; ?>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <?= $nim; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td>
                        <?= $umur; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tala; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $alamat ?>
                    </td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>
                        <?= $kopo; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <?= $email; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kata Sandi</td>
                    <td>:</td>
                    <td>
                        *********
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="left">
                        <a href="<?= base_url('web/login'); ?>"><b>Kembali</b></a>
                    </td>
                    <td colspan="3" align="right">
                        <a href="<?= base_url('web/home'); ?>"><b>Lanjutkan</a> untuk membaca artikel</b>
                    </td>
                </tr>
            </table>
</section>
</body>
</html>
    