<?php require_once "databases.php" ?>
<!-- <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js"></script> -->
<!-- <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-analytics.js"></script> -->
<!-- <script src="firebase.js"></script> -->
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
<style><?php require_once "css/navbar.css" ?></style>
<style><?php require_once "css/header.css" ?></style>
<style><?php require_once "css/artikel.css" ?></style>
<style><?php require_once "css/goverment_logo.css" ?></style>
<style><?php require_once "css/faq.css" ?></style>
<style><?php require_once "css/footer.css" ?></style>
<style>
  @media (max-width: 768px) {
    .template-artikel-image-wrapper > img {
      transform: translate(-50%, 0) !important;
    }
  }
</style>
<body>
<?php require_once "html/navbar.html" ?>
<?php require_once "html/header.html" ?>
<?php require_once "html/homepage.php" ?>
<?php require_once "html/artikel.php" ?>
<?php require_once "html/faq.php" ?>
<?php require_once "html/goverment_logo.html" ?>
<?php require_once "html/footer.html" ?>
</body>
<script src="javascript/drag_scrolling.js"></script>
</html>