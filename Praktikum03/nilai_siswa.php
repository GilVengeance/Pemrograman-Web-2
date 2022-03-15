<?php
require_once 'header.php';
?>

<!-- konten -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2>Form Nilai Siswa</h2>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="post" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-4">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control"
                            required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-4">
                        <select id="matkul" name="matkul" class="custom-select" required="required">
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-4">
                        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control"
                            required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-4">
                        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control"
                            required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label>
                    <div class="col-4">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text"
                            required="required" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label style="color: grey;" class="col-12 col-form-label">*Klik simpan untuk melihat data
                        siswa</label>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>

            <!-- PHP -->
            <?php
require_once 'libfungsi.php';

//variable

$proses = $_POST['submit'];
$nama_siswa = $_POST['nama'];
$mata_kuliah =$_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total = $nilai_uts + $nilai_uas + $nilai_tugas;
$nilai = $total/3;
$grade = grade($nilai);
$predikat = predikat($grade);
$hasil_ujian = kelulusan($nilai);

if(isset($_POST['submit'])):
    echo "<hr/>";
    echo "<br/>Nama : " . $nama_siswa;
    echo "<br/>Mata Kuliah : ". $mata_kuliah;
    echo "<br/>Nilai UTS : ". $nilai_uts;
    echo "<br/>Nilai UAS : ". $nilai_uas;
    echo "<br/>Nilai Tugas : ". $nilai_tugas;
    echo "<br/>Grade : ". $grade . " ". $predikat;
    echo "<br/>Keterangan : ". $hasil_ujian;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
endif;

?>

            <?php
require_once 'footer.php';
?>