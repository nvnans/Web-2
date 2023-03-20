<?php
require_once 'header.php';
require_once 'sidebar.php';

$nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jk'];
    $prodi = $_POST['ps'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $skor = 0;

    foreach ($skill as $s) {
        //Cek Skill
        switch ($s) {
            case 'HTML':
                $skor += 10;
                break;
            case 'CSS':
                $skor += 10;
                break;
            case 'JavaScript':
                $skor += 20;
                break;
            case 'Bootstrap':
                $skor += 20;
                break;
            case 'PHP':
                $skor += 30;
                break;
            case 'Python':
                $skor += 30;
                break;
            case 'Java':
                $skor += 50;
                break;
            default:
                $skor = 0;
                break;
        }
    }

$nilai_skill;
if ($skor >= 100 && $skor <= 150) {
    $nilai_skill = "SANGAT BAIK";
} elseif ($skor >= 60 && $skor <= 100) {
    $nilai_skill = "BAIK";
} elseif ($skor >= 40 && $skor <= 60) {
    $nilai_skill = "CUKUP BAIK";
} elseif ($skor >= 0 && $skor <= 40) {
    $nilai_skill = "KURANG";
} else {
    $nilai_skill = "TIDAK MEMADAI";
}

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="container" style="border: solid 1px;">
        <form method="POST" action="praktikum03.php" style="background-color: lightgoldenrodyellow;">
        <h1>Form Registrasi</h1>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki - Laki">
                        <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="ps" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="ps" name="ps" class="custom-select">
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="BD">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Bootstrap">
                        <label for="skill[]_2" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="PHP">
                        <label for="skill[]_3" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="Python">
                        <label for="skill[]_4" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Java">
                        <label for="skill[]_5" class="custom-control-label">Java</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="JavaScript">
                        <label for="skill[]_6" class="custom-control-label">Javascript</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Depok</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Tanggerang">Tanggerang</option>
                        <option value="Bekasi">Bekasi</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-chain"></i>
                            </div>
                        </div>
                        <input id="email" name="email" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        <hr style="border-width: 3px;">
        <br>
        <div style="border-width: 3px; background-color: white">
        <h5><u>Data Pendaftar</u></h5>
        <?php
            echo "<b>NIM : </b>" . $nim . "<br>";
            echo "<b>Nama Lengkap : </b>" . $nama . "<br>";
            echo "<b>Jenis Kelamin : </b>" . $jenis_kelamin . "<br>";
            echo "<b>Program Studi : </b>" . $prodi . "<br>";
            echo "<b>Skill Web & Programming : </b>";
            foreach ($skill as $s) {
                echo $s . "," . "<br>";
            }
            echo "<b>Tempat Domisili : </b>" . $domisili . "<br>";
            echo "<b>Skor : </b>" .  $skor . "<br>";
            echo "<b>Kategori : </b>" . $nilai_skill . "<br>";
            echo "<b>Email : </b>" . $email . "<br>";
        ?>
        </div>
        <br>
    </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>