<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    

    <?php if (validation_errors()) : ?>
        <div style="color: red;">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="d-flex row justify-content-center mt-5">
            
            <h2>Tambah Siswa</h2>
            <form method="post" action="<?= site_url('siswa/simpan'); ?>">
                <table>
                    <tr>
                        <td>
                            <label>Nama :</label>
                            <input class="form-control" type="text" name="nama"><br>
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <label>Alamat :</label>
                            <textarea class="form-control" name="alamat"></textarea><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>No HP :</label>
                            <input class="form-control" type="text" name="no_hp"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            </td>
                            
                        </tr>
                    </table> 
                    <button class="btn btn-success w-full" type="submit">Simpan</button>   
                    <a href="<?= site_url('siswa'); ?>"><button class="btn">Kembali</button></a>
            </form>
        </div>
    </div>


    <br>
</body>
</html>
