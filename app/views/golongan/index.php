<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Data Golongan</h4>

    <table class="table table-bordered">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Golongan</th>
            <th>Created At</th>
                      
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
            <tbody>
<?php 
$no =1;
foreach ($data['rows'] as $row) {
 ?>                
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['gol_kode']; ?></td>
                <td><?php echo $row['gol_nama']; ?></td>
                <td><?php echo $row['created_at']; ?></td>

                <td>
                                        <a href="<?php echo URL; ?>/golongan/edit?gol_id=<?php echo $row['gol_id']; ?>" class="btn btn-success" role="button">Edit</a>
                    <a href="<?php echo URL; ?>/golongan/delete?gol_id=<?php echo $row['gol_id']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
                
            </tr>
        <?php }?>
            </tbody>
    </table>
    <a href="<?php echo URL; ?>/golongan/tambah/" class="btn btn-primary" role="button">Tambah Data</a>

</div>
</body>
</html>