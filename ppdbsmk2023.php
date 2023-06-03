<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB 2023 SMK</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            background: #7aa092;
            background: linear-gradient(to right, #9aac9a, #5f6aa4);
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>

</head>

<body>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">PPDB 2023 SMK</h5>
                        <form  action="simpandatasmk.php" method="post">
                            <div class="form-floating mb-3">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namalengkap"
                                    placeholder="Isi dengan nama lengkap" required>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="">Tanggal Lahir </label>
                                <input type="date" class="form-control" name="tanggallahir" placeholder="tanggal lahir" required>

                            </div>

                            <div class="form-floating mb-3">
                                <label for="">Alamat </label>
                                <input type="text" class="form-control" name="alamatlengkap"
                                    placeholder="isi alamat lengkap" required>

                            </div>

                            <div class="form-floating mb-3">
                                <label for=""> Asal Sekolah </label>
                                <input type="text" class="form-control" name="asalsekolah"
                                    placeholder="isi asal sekolah" required>

                            </div>

                            <div class="form-floating mb-3">
                                <label for=""> Jurusan yang Diminati </label>
                                <select name="jurusanyangdiminati" required>
                                    <option value="TKJ">TKJ</option>
                                    <option value="RPL">RPL</option>
                                    <option value="MP">MP</option>
                                    <option value="AKL">AKL</option>
                                    <option value="BDP">BDP</option>
                                </select>
                            </div>

                            <div class="form-floating mb-3">
                                <label for=""> NISN</label>
                                <input type="text" class="form-control" name="NISN"
                                    placeholder="isi dengan NISN Sekolah asal" required>
                            </div>

                            <div class="form-floating mb-3">
                                <label for="NIK"> NIK </label>
                                <input type="text" class="form-control" name="NIK"
                                    placeholder="isi NIK anda" required>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="daftar" value="daftar"
                                    type="submit">DAFTAR</button>
                            </div>
                            <hr class="my-4">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>