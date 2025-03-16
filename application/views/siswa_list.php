<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row col-md-10">
                <div class="d-flex justify-content-between mt-5 mb-2">
                    <h2>Daftar Siswa</h2>
                    <a class="btn btn-success p-2" href="<?= base_url('siswa/tambah'); ?>">Tambah Siswa</a>                    
                </div>
                <table class="table table-striped table-hover" border="1">
                    <tr class="table-primary">
                        
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($siswa as $row): ?>
                    
                    <tr>
                        <td><?= $no++; ?></td>
                        
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['no_hp']; ?></td>
                        <td>
                            <a class="btn btn-warning p-2" href="<?= base_url('siswa/edit/'.$row['id']); ?>">Edit</a>  
                            <a class="btn btn-danger p-2" href="<?= base_url('siswa/hapus/'.$row['id']); ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
                    </table>
            
            </div>

            </div>


    </div>
</body>
</html>
