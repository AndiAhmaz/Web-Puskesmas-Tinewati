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
<style><?php require_once "css/main.css" ?></style>
<style><?php require_once "css/navbar.css" ?></style>
<style><?php require_once "css/facility.css" ?></style>
<style><?php require_once "css/footer.css" ?></style>
<body>
<?php require_once "html/navbar.html" ?>
<br><br><br><br>
<div class="facility-list">
  <b class="facility-list title">FASILITAS</b>
  <ul class="facility-list-table">
    <?php foreach ($data_fasilitas as $datas) { ?>
      <li>
        <?php include "html/template_fasilitas.php"; ?>
      </li>
    <?php } ?>
  </ul>
</div>
<br>
<div class="facility-detil">
  <img src="" alt="">
</div>
<br><br>
<?php require_once "html/footer.html" ?>
</body>
<script>
let data_fasilitas = <?php echo json_encode($data_fasilitas) ?>;
$(document).ready(function() {
  $(".facility-detil img").attr("src", data_fasilitas[0]["image"]);
  setTimeout(function() {
    $(".facility-detil").addClass("selected");
    $(".facility-list-table").find("li:eq(0)").addClass("selected-item");
  }, 200);
});
</script>
<script src="javascript/fasilitas.js"></script>
</html>