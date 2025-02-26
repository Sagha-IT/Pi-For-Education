<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div> <div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Tentang Kami</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 
<div class="highlight">
<div class="container">
<div class="row">
<div class="col-sm-4" style="text-align: center;"> <img src="<?php echo $lokasiweb; ?>box/sirrul_logo.png" style="width:50%;height: auto;"/><h2>Sejarah <?php echo $namasekolah; ?></h2> <p class="grey">Berdiri Sejak <?php echo $tahunberdiri; ?></p> </div>
<div class="col-sm-4"> <p style="text-align: justify;"><?php echo $tentang1; ?></p> </div>
<div class="col-sm-4"> <p style="text-align: justify;"><?php echo $tentang2; ?></div> </div> </div> </div>

<div class="container text-center">
<div class="row" style="text-align: justify;">
<style>
.visionmissions {text-shadow:0 0 1px #000;letter-spacing: 1.1;border-bottom:1px solid #ccc;padding-bottom: 11px;text-align: center;}
</style>
<div class="col-md-6"> <h3 class="visionmissions">Visi</h3> <p><?php $visionword=lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"visi"); $misionword=lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"misi"); echo '<span class="first-letter">'.substr($visionword,0,1)."</span>".substr($visionword,1);
?></p> </div> 
<div class="col-md-6"> <h3 class="visionmissions">Misi</h3> <p><?php echo '<span class="first-letter">'.substr($misionword,0,1)."</span>".substr($misionword,1); ?></p> </div> 
</div> </div>
<div class="highlight">
<div class="container text-center">
<div class="row" style="text-align: center;">
<div class="row"> <div class="page-header col-sm-8 col-sm-offset-2"> <h2 style="background:#F8F8F8;">Program Pendidikan</h2> </div> </div>

<div class="container text-center">
<div class="row" style="text-align: justify;">
<style>
.visionmissions {text-shadow:0 0 1px #000;letter-spacing: 1.1;border-bottom:1px solid #ccc;padding-bottom: 11px;text-align: center;}
</style>
<div class="col-md-6"> <h3 class="visionmissions">Intrakurikuler</h3> <p>
<ol><li>Kurikulum 2013
</li><li>Kurikulum Merdeka
</li><li>kurikulum pondok pesantren modern dan salafiyah
</li><li>Program Salafiyah
</li><li>Manajemen Modern
</li><li>Tahfidz Qur’an
</li><li>Bilingual Bahasa ( Arab & Inggris )</li></ol>
</p> </div> 
<div class="col-md-6"> <h3 class="visionmissions">Ekstrakulikuler</h3> <p>
<ol><li>Pengajian kitab kuning
</li><li>Penguasaan jenis baca dan tulis Al-qur’an
</li><li>Belajar bersama terpimpin
</li><li>Kursus bahasa Arab, Inggris dan komputer
</li><li>Marawis, marching band dan Hadroh
</li><li>Pramuka dan paskibra
</li><li>Latihan pidato 3 bahasa (Arab, Inggris dan Indonesia)
</li><li>Olahraga (sepak bola, futsal, bulu tangkis, bola voly, pencak silat, Ilmu Tenaga Dalam Al-Hikmah dll)
</li><li>Seni teater dan kaligrafi
</li><li>Tahfidz Qur’an dan seni Tilawah</li></ol>
	
</p> </div> 
</div> </div>

</div></div></div>
 </div> <!-- /.content --> </div> <!-- /.wrapper -->