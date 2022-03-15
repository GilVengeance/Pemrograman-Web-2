<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <title>Form Nilai</title>
</head>

<body>

    <!-- navbar -->
    <nav style="background-color: lightblue;" class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
    </nav>

    <!-- main content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Form Nilai Siswa</h2>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="form_nilai.php" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                <option value="Basis Data I">Basis Data I</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label>
                        <div class="col-8">
                            <input id="tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text"
                                required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="color: grey;" class="col-12 col-form-label">*Klik simpan untuk melihat data
                            siswa</label>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <button name="proses" type="submit" value="Form Nilai Siswa"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- Kode PHP -->
                <?php
                    $proses = $_POST['proses'];
                    $nama_siswa = $_POST['nama'];
                    $mata_kuliah = $_POST[ 'matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
           
                    echo 'Proses: '.$proses;
                    echo '<br/>Nama : '.$nama_siswa;
                    echo '<br/>Mata Kuliah : '.$mata_kuliah;
                    echo '<br/>Nilai UTS :' .$nilai_uts;
                    echo '<br/>Nilai UAS : '.$nilai_uas;
                    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                ?>

            </div>
        </div>
    </div>

    <!-- footer -->
    <footer style="background-color: lightblue;" class="fixed-bottom">
        <p class="text-center pt-3">Developed by <a class="text-black fw-bold">Gilbran
                Khatami</a></p>
    </footer>

</body>

</html>