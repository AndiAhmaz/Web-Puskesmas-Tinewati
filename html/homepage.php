<?php
  require_once "databases.php";
  require_once "temp.php";
?>
<div class="body">
  <ul><li>
    <div class="introduction"><!-- <b class="introduction title">INTRODUCTION</b> -->
    <ul><li><img src="asset/template/introduction.png" alt=""></li>
      <li><ul class="introduction description">
            <li class="no-mobile"><b class="introduction description title">ABOUT</b></li>
            <li><p class="introduction description desc">Siapa sih yang gak kenal Puskesmas Tinewati! Salah satu Puskesmas terbaik di kabupaten Tasikmalaya. Puskesmas berfokus pada pencegahan, pengobatan, dan pemulihan kesehatan dengan melibatkan berbagai profesi kesehatan seperti dokter, perawat, bidan, apoteker, dan ahli gizi.  </p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </li>
  <li><div class="dokter-list"><b class="dokter-list title">KEPALA PUSKESMAS</b>
      <ul class="doctor-list"><?php foreach ($data_kapus as $datas) { ?><li><?php  include "template_dokter.php"; ?></li><?php } ?>
      </ul>
      </div>
      <div class="dokter-list"><b class="dokter-list title">Kasubag TU</b>
      <ul class="doctor-list"><?php foreach ($data_katu as $datas) { ?><li><?php  include "template_dokter.php"; ?></li><?php } ?>
      </ul>
      </div>
  </li>
  <li><div class="facility-button"><a href="facility.php"><img src="asset/tinewati/Fasilitas depan.jpeg" alt="""><div>FACILITY AND ROOM</div></a></div>
  </li>
  </ul>
</div>
<!-- <script>
  // $(document).ready(function() {
  //   let data_ketua = firebase.database().ref("ketua");
  //   $(".ketua-list").write(data_ketua);
  // })
  
</script> -->