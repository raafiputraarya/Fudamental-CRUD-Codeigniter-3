<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <div class="d-flex justify-content-center mt-5">   
                <h2>Edit Siswa</h2>
                <form method="post" action="<?= site_url('siswa/update/'.$siswa['id']); ?>">
                    <table>
                        <tr>
                            <td>
                                <label>Nama :</label>
                                <input type="text" class="form-control required mt-2"  name="nama" value="<?= $siswa['nama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Alamat :</label>
                                <textarea class="form-control required mt-2" name="alamat"><?= $siswa['alamat']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>No HP :</label>
                                <input type="text" class="form-control required mt-2" name="no_hp" value="<?= $siswa['no_hp']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-success w-100 mt-4" type="submit">Update</button>
                                <a href="siswa_list.php"><button class="btn btn-warning w-100 mt-2" type="submit">Kembali</button></a>
                            </td>
                        </tr>
                    </table>
                </form>            
            
        </div>
    </div>


</body>
</html>