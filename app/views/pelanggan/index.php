<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Data Pelanggan</h4>

    <table class="table table-bordered">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Id Golongan</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>KTP</th>
            <th>Seri</th>
            <th>Meteran</th>
            <th>Aktif</th>
            <th>Id User</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
            <tbody>
            <tr>
<?php 
$no =1;
foreach ($data['rows'] as $row) {
 ?>                
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['pel_nama']; ?></td>
                <td><?php echo $row['pel_id_gol']; ?></td>
                <td><?php echo $row['pel_alamat']; ?></td>
                <td><?php echo $row['pel_hp']; ?></td>
                <td><?php echo $row['pel_ktp']; ?></td>
                <td><?php echo $row['pel_seri']; ?></td>
                <td><?php echo $row['pel_meteran']; ?></td>
                <td><?php echo $row['pel_aktif']; ?></td>
                <td><?php echo $row['pel_id_user']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['updated_at']; ?></td>                
                <td>
                    <a href="<?php echo URL; ?>/pelanggan/edit?pel_id=<?php echo $row['pel_id']; ?>" class="btn btn-success" role="button">Update</a></td>
                    <td>
                    <a href="<?php echo URL; ?>/pelanggan/delete?pel_id=<?php echo $row['pel_id']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
<?php } ?>            
            </tbody>
    </table>
    <a href="<?php echo URL; ?>/pelanggan/tambah/" class="btn btn-primary" role="button">Tambah Data</a>

</div>
</body>
</html>