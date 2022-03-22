<?php
require_once('header.php')
?>
<!-- Tittle  -->
<br>
<h2 class="ml-5">Form Nilai Ujian</h2>

<br>
<form method="post" action="">
    <div class="container">
        <div class="container-fluid">
            <form>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select">
                            <option value="matematika">Matematika</option>
                            <option value="bahasa1">Bahasa Inggris</option>
                            <option value="bahasa2">Bahasa Indonesia</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai</label>
                    <div class="col-8">
                        <input id="nilai" name="nilai" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<div class="m-5 p-4">
    <?php
        require_once 'class_nilaimahasiswa.php';

        $mahasiswa = new nilai_mahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
        if(isset($_POST['submit'])){
            echo "<hr>";
            echo "NIM : ".$nim = $_POST['nim'];
            echo "<br>Mata Kuliah : ".$matakuliah = $_POST['matakuliah'];
            echo "<br>Nilai : ".$nilai = $_POST['nilai'];
            echo "<br>Hasil Ujian : ".$mahasiswa->grade();
            echo "<br/>Grade : " .$mahasiswa->hasil();
        }
    ?>
</div>
<?php
require_once('footer.php')
?>