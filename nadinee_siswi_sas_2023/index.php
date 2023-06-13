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

    <div id="porto">
      <div class="porto">
        <h1 class="kutip">portofolio</h1>
        <div class="bungkus"> 
          <?php    
$sql = "SELECT * FROM portofolio";
$srcportofolio = $conn->query($sql);
$data_portofolio = $srcportofolio->fetch_assoc();
 {
          ?>
          <img src="asset/<?= $data_portofolio['foto']; ?>"/>
          <img src="asset/<?= $data_portofolio['foto']; ?>"/>
          <img src="asset/<?= $data_portofolio['foto']; ?>"/>
        </div>
      </div>
    </div>
<?php
                }
                ?>

    <div id="about">
      <div class="high">
        <h1 class="kutip">about</h1>
        <div class="bungkusdua">
          <p>
            <?= $data_about['about']; ?>
          </p>
        </div>
      </div>
    </div>


    <div id="kontak">
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
</html>
