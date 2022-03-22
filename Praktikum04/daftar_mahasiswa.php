<?php
require_once 'header.php';
?>

<?php
require_once ('class_mahasiswa1.php');

    $mahasiswa1 = new Mahasiswa ("02011", "Ammar");
    $mahasiswa1->prodi = "TI";
    $mahasiswa1->thn_angkatan=2021;
    $mahasiswa1->ipk=2.5;

    $mahasiswa2 = new Mahasiswa ("02012", "Tami");
    $mahasiswa2->prodi = "TI";
    $mahasiswa2->thn_angkatan=2021;
    $mahasiswa2->ipk=3.9;

    $mahasiswa3 = new Mahasiswa ("01011", "Abie");
    $mahasiswa3->prodi = "TI";
    $mahasiswa3->thn_angkatan=2021;
    $mahasiswa3->ipk=3.46;

    $mahasiswa4 = new Mahasiswa ("01012", "Zahra");
    $mahasiswa4->prodi = "TI";
    $mahasiswa4->thn_angkatan=2021;
    $mahasiswa4->ipk=3.2;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];

?>

<div class="container mt-4">
    <div class="row justify-content-center ">
        <table class="table table-bordered m-5">
            <thead>
                <tr class="m-5">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Prodi</th>
                    <th>Tahun Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>

            <tbody>
                <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->prodi.'</td>'.
                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                $counter++;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once 'footer.php';
?>