<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP bikin gabisa santai</title>
    </head>
    <style>
        body{
            background-color: blanchedalmond;
        }
        p{
            font-weight: bold;
        }
        .error{
            color: #FF0000;
        }
        .border{
            background-color: white;
            width: 500px;
            margin: 10px 500px;
            padding: 25px;
            border-radius: 15px;
            font-family: sans-serif;
        }
    </style>
    <body>
        <div class="border">
        <?php
        $namaErr = $genderErr = $alamatErr = $templahErr = $tanglahErr = $hobiErr = $citaErr = $usiaErr = $sekolahErr = "";
        $nama = $gender = $alamat = $templah = $tanglah = $hobi = $cita = $usia = $sekolah = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $namaErr = "Nama dibutuhkan";
            } else {
                $nama = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
                $namaErr = "Hanya huruf diperbolehkan";
                }
            }
  
            if (empty($_POST["gender"])) {
                $genderErr = "Jenis kelamin dibutukan";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["alamat"])) {
                $alamatErr = "Alamat dibutuhkan";
            } else {
                $alamat = test_input($_POST["alamat"]);
            }

            if (empty($_POST["city"])) {
                $templahErr = "Tempat lahir dibutuhkan";
            } else {
                $templah = test_input($_POST["city"]);
            }

            if (empty($_POST["dateFrom"])) {
                $tanglahErr = "Tanggal lahir dibutuhkan";
            } else {
                $tanglah = test_input($_POST["dateFrom"]);
            }

            if (empty($_POST["hobi"])) {
                $hobiErr = "Hobi dibutuhkan";
            } else {
                $hobi = test_input($_POST["hobi"]);
            }

            if (empty($_POST["cita"])) {
                $citaErr = "Cita-cita dibutuhkan";
            } else {
                $cita = test_input($_POST["cita"]);
            }

            if (empty($_POST["usia"])) {
                $usiaErr = "Usia dibutuhkan";
            } else {
                $usia = test_input($_POST["usia"]);
                if (!preg_match("/^[0-9-' ]*$/",$usia)) {
                $usiaErr = "Hanya angka diperbolehkan";
                }
            }

            if (empty($_POST["sekolah"])) {
                $sekolahErr = "Sekolah asal dibutuhkan";
            } else {
                $sekolah = test_input($_POST["sekolah"]);
            }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <h2>Form Tugas 2</h2>
        <p><span class="error">* Wajib diisi</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Nama
            <br>
            <input type="text" name="name" value="<?php echo $nama;?>">
            <span class="error">* <?php echo $namaErr;?></span>
            <br><br>
            Jenis kelamin
            <br>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Laki-laki") echo "checked";?> value="Laki-laki">Laki-Laki
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Perempuan") echo "checked";?> value="Perempuan">Perempuan
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            Alamat
            <br>
            <input type="text" name="alamat" value="<?php echo $alamat;?>">
            <span class="error">* <?php echo $alamatErr;?></span>
            <br><br>
            Tempat lahir
            <br>
            <input type="text" name="city" value="<?php echo $templah;?>">
            <span class="error">* <?php echo $templahErr;?></span>
            <br><br>
            Tanggal lahir
            <br>
            <input type="date" name="dateFrom" value="<?php echo $tanglah;?>">
            <span class="error">* <?php echo $tanglahErr;?></span>
            <br><br>
            Hobi
            <br>
            <input type="text" name="hobi" value="<?php echo $hobi;?>">
            <span class="error">* <?php echo $hobiErr;?></span>
            <br><br>
            Cita-cita
            <br>
            <input type="text" name="cita" value="<?php echo $cita;?>">
            <span class="error">* <?php echo $citaErr;?></span>
            <br><br>
            Usia
            <br>
            <input type="text" name="usia" value="<?php echo $usia;?>">
            <span class="error">* <?php echo $usiaErr;?></span>
            <br><br>
            Sekolah asal
            <br>
            <input type="text" name="sekolah" value="<?php echo $sekolah;?>">
            <span class="error">* <?php echo $sekolahErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
            echo "<h2>Data Anda:</h2>";
            echo '<p>Nama: </p>'.$nama;
            echo "<br>"."<br>";
            echo '<p>Jenis kelamin: </p>'.$gender;
            echo "<br>"."<br>";
            echo '<p>Alamat: </p>'.$alamat;
            echo "<br>"."<br>";
            echo '<p>Tempat lahir:</p>'.$templah;
            echo "<br>"."<br>";
            echo '<p>Tanggal lahir: </p>'.$tanglah;
            echo "<br>"."<br>";
            echo '<p>Hobi: </p>'.$hobi;
            echo "<br>"."<br>";
            echo '<p>Cita-cita: </p>'.$cita;
            echo "<br>"."<br>";
            echo '<p>Usia: </p>'.$usia;
            echo "<br>"."<br>";
            echo '<p>Sekolah: </p>'.$sekolah;
        ?>
        </div>
    </body>
</html>