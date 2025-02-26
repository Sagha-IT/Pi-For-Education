<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="reminder-marquee"> <p class="microsoft marquee">Pengumuman: <?php
$querysql="select * from tbl_berita where jenis!='berita' order by dibuatsaat desc";
$isipengumuman="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $isipengumuman.='<span onclick="alert(`'.$tampilkanperkolomdata["isi_berita"].'`);" style="cursor:pointer;">'.$tampilkanperkolomdata["judul_berita"]."</span> - "; } echo substr($isipengumuman,0,-3);}
else
{echo "Mohon Maaf, Belum Ada Pengumuman yang bisa ditampilkan";}
?>
</p> </div> <!-- HOME -->
<div class="home"> <!-- ONESLIDER -->
<div class="oneslider"> <ul data-auto="true">
<?php
$pathzp = "dataslide/";
if (is_dir($pathzp))
{ $isi_dirzp = @opendir($pathzp);
if (!($isi_dirzp))
{die("Ada Bagian Folder Sistem yang tidak ada, harap hati-hati");}
$loopscans=$loopnumber=0;
while ($filezp = readdir($isi_dirzp)) {
$scanallfile = scandir($pathzp);
$filezpx=$scanallfile[$loopnumber];
$gettodelete=substr($filezpx, 0, 2);
$loopnumber=$loopnumber+1;
if (($filezpx=="index.php")||($filezpx=="..")||($filezpx==".")||($filezpx==".DS_Store")||($gettodelete=="._"))
{continue;};
$getfilelen=explode(".", $filezpx);
$getfilecaption=$getfilelen[0];
if (count(explode("^",$getfilecaption))>1)
{$getfilecaption=explode("^",$getfilecaption);$getfilecaption=$getfilecaption[1];}
?> 
<li class="large-size overlay">
<div class="bg" style="background-image: url('dataslide/<?php echo $filezpx; ?>');background-size:100% 100% !important;"></div>
<div class="container vmiddle">
<div class="row text-center">
 </div> </div> </li>
<?php 
}
closedir($isi_dirzp);
 }
?>
</ul>
<div class="slidebar"> <a href="#" class="arrow prev"><i class="custom-icon custom-icon-arrow-prev"></i></a> <a href="#" class="arrow next"><i class="custom-icon custom-icon-arrow-next"></i></a> </div> </div> <!-- /.oneslider -->
 </div> <!-- /.home --> <!-- CONTENT -->
<div class="content">

<div class="highlight">
<div class="container">
<div class="row">
<div class="col-sm-4" style="text-align: center;"> <img src="<?php echo $lokasiweb; ?>box/sirrul_logo.png" style="width:50%;height: auto;"/><h2>Sejarah <?php echo $namasekolah; ?></h2> <p class="grey">Berdiri Sejak <?php echo $tahunberdiri; ?></p> </div>
<div class="col-sm-4"> <p style="text-align: justify;"><?php echo $tentang1; ?></p> </div>
<div class="col-sm-4"> <p style="text-align: justify;"><?php echo $tentang2; ?></div> </div> </div> </div> <!-- /.highlight --> <!-- CONTAINER -->
<div class="container text-center">
<div class="row">
<div class="page-header col-sm-8 col-sm-offset-2"> <h2>Lokasi Sekolah</h2> </div> </div>
<div class="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.445069194258!2d106.416143!3d-6.2819622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4205dc3b802b75%3A0xc3fd72b624e6abdc!2sPONDOK%20PESANTREN%20SIRRUL%20HIKMAH!5e0!3m2!1sid!2sid!4v1720769846607!5m2!1sid!2sid" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>

</div> </div> <!-- CONTAINER -->
<div class="container text-center">
<div class="row">
<div class="page-header col-sm-8 col-sm-offset-2"> <h2>Seputar Berita <?php echo $namasekolah; ?></h2> </div> </div>
<script>
function opendetails(dataids="")
{ if (parseFloat(dataids)>0)
{jQuery("#fullnewseach").html('<div class="col-sm-4">'+"<img src='"+jQuery("#gambaran"+dataids).attr("src")+"' style='width:98.5%;height: auto;margin:0 1px 8px 0;' align='left'/></div>"+'<div class="col-sm-8"><div style="padding-top:9px !important;">'+jQuery("#fulldetailed"+dataids).html()+'<br/> <input type="button" value="tutup" style="padding:5px 6px !important;height:auto !important;width:auto !important;line-height:15px !important;" class="btn btn-warning" onclick="opendetails();"/></div></div>');jQuery("#fullnewseach").show("slow");jQuery("#fullnews").hide("slow");}
else
{jQuery("#fullnewseach").hide("slow");jQuery("#fullnews").show("slow");jQuery("#fullnewseach").html("");}
}

</script>
<div id="fullnewseach" style="display: none;text-align: left;" class="row"></div>
<div id="fullnews" class="row">
<?php
$querysql="select * from tbl_berita where jenis='berita' order by dibuatsaat desc";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ ?>
<div class="col-md-4"> <div class="post-module"><div class="thumbnail"> <div class="date">
<div class="day"><?php echo date("d",strtotime($tampilkanperkolomdata["dibuatsaat"])); ?></div>
<div class="month"><?php echo date("M",strtotime($tampilkanperkolomdata["dibuatsaat"])); ?></div> </div> <img src="<?php 
if (file_exists("box/kotakberita/".$tampilkanperkolomdata["id_berita"].".jpg"))
{echo "box/kotakberita/".$tampilkanperkolomdata["id_berita"].".jpg";}
else
{echo "box/nonewsimage.jpg";}; ?>" id="gambaran<?php echo $tampilkanperkolomdata["id_berita"]; ?>" style="width:400px;min-height: 257px !important;" alt="<?php echo $tampilkanperkolomdata["judul_berita"]; ?>" /> </div> <!-- Post Content-->
<div class="post-content">
 <h2 class="title"> <a id="titleforurl<?php echo $tampilkanperkolomdata["id_berita"]; ?>" gojek="<?php echo strtolower($tampilkanperkolomdata["judul_berita"]); ?>" onclick="opendetails('<?php echo $tampilkanperkolomdata["id_berita"]; ?>');" title="<?php echo $tampilkanperkolomdata["judul_berita"]; ?>"><?php echo $tampilkanperkolomdata["judul_berita"]; ?></a></h2> <p class="description">
<?php echo "<p style='height:16px;overflow:hidden;'>".$tampilkanperkolomdata["isi_berita"]."</p>"; ?>
<?php echo '<input type="button" value="selengkapnya" style="padding:5px 6px !important;height:auto !important;width:auto !important;line-height:15px !important;" class="btn btn-warning" onclick="'."opendetails('".$tampilkanperkolomdata["id_berita"]."');".'">'; ?>

</p>
<div id="fulldetailed<?php echo $tampilkanperkolomdata["id_berita"]; ?>" style="display: none;position: absolute;"><?php echo $tampilkanperkolomdata["isi_berita"]; ?>
<div style="font-size:11px !important;margin-top: 13px;"></i>Dibuat pada: <?php echo date("l, d F Y H:i:s",strtotime($tampilkanperkolomdata["dibuatsaat"])); ?></div>
</div>
<div class="post-meta"><span class="timestamp"><i class="fa fa-edit"></i> <?php echo date("l, d F Y H:i:s",strtotime($tampilkanperkolomdata["dibuatsaat"])); ?></span></div> </div> </div> </div>
<?php } }
else
{echo "Mohon Maaf, Belum Ada data yang bisa ditampilkan";}
?>
</div> </div> <!-- CONTAINER -->
 <!-- CONTAINER: Pendaftaran -->
<div class="highlight darker">
<div class="container purchase">
<div class="row">
<div class="col-md-10 col-sm-10 text-left"> <p class="lead">Pendaftaran Siswa Baru <?php echo lihatisikolomtertentu("tbl_profil","tahunberdiri","2008","nama_sekolah"); ?></p> </div>
<div class="col-md-2 col-sm-2 text-right"> <a class="btn btn-default" href="https://sirrul.pinetmart.com/pendaftaran/">Daftar disini<i class="fa fa-arrow-right"></i></a> </div> </div> </div> </div> <!-- /.container --> </div> <!-- /.content --> </div> <!-- /.wrapper --> <!-- FOOTER --> 
