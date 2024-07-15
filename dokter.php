<?php 
require_once "databases.php";
require_once "temp.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Tinewati</title>
  <link rel="icon" href="asset/tinewati/logo_tinewati.png">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<style><?php require_once "css/template_dokter.css" ?></style>
<style><?php require_once "css/main.css" ?></style>
<style><?php require_once "css/dokter.css" ?></style>
<style><?php require_once "css/navbar.css" ?></style>
<style><?php require_once "css/footer.css" ?></style>
<body>
<?php require_once "html/navbar.html" ?>
<br><br><br><br><br>
<div class="ketua">
  <div class="dokter-list">
    <b class="dokter-list title">KEPALA PUSKESMAS</b>
    <ul class="doctor-list">
    <?php foreach ($data_kapus as $datas) { ?>
      <li>
      <?php include "html/template_dokter.php"; ?>
      </li>
    <?php } ?>
    </ul>
  </div>
    <br><br>
  <div class="dokter-list">
    <b class="dokter-list title">KASUBAG TU</b>
    <ul class="doctor-list">
    <?php foreach ($data_katu as $datas) { ?>
      <li>
      <?php include "html/template_dokter.php"; ?>
      </li>
    <?php } ?>
    </ul>
  </div>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">DOKTER</b>
  <ul class="doctor-list">
  <?php foreach ($data_dokter as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">PERAWAT</b>
  <ul class="doctor-list">
  <?php foreach ($data_perawat as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">FARMASI</b>
  <ul class="doctor-list">
  <?php foreach ($data_farmasi as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">LABORATORIUM</b>
  <ul class="doctor-list">
  <?php foreach ($data_laboratorium as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">BIDAN</b>
  <ul class="doctor-list">
  <?php foreach ($data_bidan as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
  <br><br>
<div class="dokter-list">
  <b class="dokter-list title">STAFF</b>
  <ul class="doctor-list">
  <?php foreach ($data_staff as $datas) { ?>
    <li>
    <?php include "html/template_dokter.php"; ?>
    </li>
  <?php } ?>
  </ul>
</div>
<br><br>
<?php require_once "html/footer.html" ?>
</body>
<script src="javascript/drag_scrolling.js"></script>
</html>