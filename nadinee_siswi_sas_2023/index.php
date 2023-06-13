<?php
include('konekdb.php');

$sql = "SELECT * FROM about";
$srcabout = $conn->query($sql);
$data_about = $srcabout->fetch_assoc();

$sql = "SELECT * FROM portofolio";
$srcportofolio = $conn->query($sql);
$data_portofolio = $srcportofolio->fetch_assoc();

$sql = "SELECT * FROM hubungi_saya";
$srchubungi = $conn->query($sql);
$data_hubungi = $srchubungi->fetch_assoc();


if(isset($_POST['tombolsend'])){
    mysqli_query($koneksioy, "insert into hubungi_saya set
    nama_lengkap = '$_POST[nama]',
    email = '$_POST[email]',
    no_telp = '$_POST[number]',
    pesan = '$_POST[pesan]'");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nadine</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav>
      <ul>
        <li class="nama">
          <a href="#"><?= $data_about['nama']; ?></a>
        </li>
        <li>
          <a href="#porto">PORTOFOLIO</a>
        </li>
        <li>
          <a href="#about">ABOUT</a>
        </li>
        <li>
          <a href="#kontak">CONTACT</a>
        </li>
      </ul>
    </nav>
    <div class="first">
      <div class="foto">
        <img class="img" src="asset/<?= $data_about['foto']; ?>"/>
      </div>
      <h1 class="kutip"><?= $data_about['judul']; ?></h1>
      <h2 class="kutip"><?= $data_about['profesi']; ?></h2>
    </div>

      <div class="porto">
        <h1 class="kutip">portofolio</h1>
        <div class="bungkus"> 
          <?php    
$sql = "SELECT * FROM portofolio";
$srcportofolio = $conn->query($sql);
// Buat variabel penampung data
$dataPorto = [];

// Looping setiap row dari query
while($row = $srcportofolio->fetch_assoc()){
  // Masukkan setiap row ke variabel data
    $dataPorto[] = $row;
}

// Looping data untuk menampilkan
foreach ($dataPorto as $porto) {
    ?>
    <img src="asset/<?= $porto['foto']; ?> " alt="foto" />
    <?php
}
?>
        </div>
      </div>

    <div class="about">
      <div class="high">
        <h1 class="kutip">about</h1>
        <div class="bungkusdua">
          <p>
            <?= $data_about['about']; ?>
          </p>
        </div>
      </div>
    </div>


    <div class="kontak">
      <div class="hub">
        <div>
          <h1 class="kutip">contact me</h1>
        </div>
            <form action="" method="post">
          <input class="formhub" name="nama" type="text" placeholder="Full Name" required /> <br>
          <input class="formhub" name="email" type="email" placeholder="Email Address" required /> <br>
          <input class="formhub" name="number" type="tel" placeholder="Phone Number" required /> <br>
          <input class="formhub" name="pesan" type="message" placeholder="Message" style="height: 7rem" required /> <br>
          <input class="buton" name="tombolsend" type="submit" value="send" ></input>
            </form>
        </div>
    

    <table>
      <tr>
        <th>LOCATION</th>
        <th>ABOUT THE WEB</th>
        <th>ABOUT THE EXAM</th>
      </tr>
      <tr>
        <th><?= $data_about['alamat']; ?></th>
        <th>O   O   O</th>
        <th><?= $data_about['about_footer']; ?></th>
      </tr>
    </table>

    <div class="cop kutip2">
      <p>copyright &copy; NADINE A 2007</p>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
