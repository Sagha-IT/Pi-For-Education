<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="overlay home medium-size"> <div class="bg bg-blog" data-stellar-background-ratio="0.5"></div> <div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Member Area</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content">
<div class="container">
<div class="row">
<?php
if ((!empty($deweedysaghakey1))&&(!empty($deweedysaghakey3))&&(!empty($deweedysaghakey2)))
{ $buatlink="pluginmemberarea/plugin".$deweedysaghakey2.".php";
if (!file_exists($buatlink))
{ ?>
<script> alert('Member Area Sedang Dibuat');window.location= "<?php echo $lokasiweb; ?>"; </script>
<?php }
?>

<script>
var getoldwayshow="master";
function changetabview(viewwhat="") {
if (viewwhat=="")
	{return false;}
jQuery("#bigtab"+getoldwayshow+" .tabcontent").hide();
jQuery("#bigtab"+getoldwayshow+" .tabhead span").css("font-size","81%");jQuery("#bigtab"+getoldwayshow+" .tabhead span").css("padding-top","0");jQuery("#bigtab"+getoldwayshow+" .tabhead span").css("font-weight","bold");jQuery("#bigtab"+getoldwayshow+" .tabhead span").html("V");
jQuery("#bigtab"+viewwhat+" .tabhead span").css("font-size","153%");jQuery("#bigtab"+viewwhat+" .tabhead span").css("padding-top","7px");jQuery("#bigtab"+viewwhat+" .tabhead span").css("font-weight","normal");jQuery("#bigtab"+viewwhat+" .tabhead span").html("^");
jQuery("#bigtab"+viewwhat+" .tabcontent").show("slow");
getoldwayshow=viewwhat;
}
jQuery(document).ready(function(){
<?php
if ($deweedysaghakey2=="siswa")
{$partialofadmins = array('siswa','transaksi','nilai','absensi','cetak-laporan'); echo 'getoldwayshow="siswa";';}
else
if ($deweedysaghakey2=="guru")
{$partialofadmins = array('guru','nilai','absensi'); echo 'getoldwayshow="guru";'; }
else
if ($deweedysaghakey2=="adm")
{$partialofadmins = array('master','artikel','transaksi','laporan'); echo 'getoldwayshow="master";';}
else
{ ?>
window.location= "<?php echo $lokasiweb; ?>";
<?php };

?>
changetabview(getoldwayshow);
})
</script>
<?php

for ($ilops=0;$ilops<count($partialofadmins);$ilops++)
{$partialloaderdata=str_replace("-", "_", $partialofadmins[$ilops]);
?>
<div id="bigtab<?php echo $partialloaderdata; ?>" class="bigtaber calact">
<div class="tabhead" onclick="changetabview('<?php echo $partialloaderdata; ?>');"><span>V</span>Data <?php echo ucwords(str_replace("-", " ", $partialofadmins[$ilops])); ?></div>
<div class="tabcontent">
<?php
$fitur=$partialofadmins[$ilops];
require ($buatlink);
?>
</div></div>
<?php
}
?>
<?php
}
else
{ ?>
<script> window.location= "<?php echo $lokasiweb; ?>"; </script>
<?php }; ?>
</div></div>
 </div> <!-- /.content --> </div> <!-- /.wrapper -->