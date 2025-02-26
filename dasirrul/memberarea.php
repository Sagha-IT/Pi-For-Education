<?php
ini_set('memory_limit', -1);
ini_set("max_execution_time", 0); // unlimited

?>
<?php if (@$gerdeweedysaghakey1=="")
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>?<?php echo (@$_REQUEST["launchfor"]==="mobile"?"launchfor=mobile&":""); ?>';
})
</script>
	<?php };
  ?>
  <?php $overvalue1=$overvalue2="";
if ((@$gerdeweedysaghakey1==mengacakstring("2025foreverptkawanuavipi",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$gerdeweedysaghakey1,"level_akun")=="admin")) { $overvalue1="overflow-x: hidden !important;";$overvalue2="overflow-x: auto !important;"; }
 ?>
<div style='text-align:center;width:100%;display: none;' id="kotakkops"><img src="<?php echo $lokasiweb; ?>box/piquickresponse.png" style='width:94%;'/></div>
<div class="areapercetakan" style="display: none;"></div>

<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div>
<div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Member Area</h1> </div> </div> </div> <!-- /.home -->

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container" style="width: 98vw !important;min-height:100px;<?php echo $overvalue1; ?>">
<script>
function doloadeachmember(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loadmemberdataformid&loadfromdata="+dataid);
}
jQuery("#forfocusbox").blur();
}

function deleteaccounts(dataid="") {
if (dataid!="")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus akun?\nKarena menghapus akun akan menghapus seluruh data akun seperti produknya, tempat usaha dan data daftar belanjanya dari pioneer bernama: \n"+jQuery("#namaakunnya"+dataid).html());
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholy&loadfromdata="+dataid);}
}
}

function doreverify(dataid="") {
if (dataid!="")
{ jQuery.get('<?php echo $lokasiweb; ?>?docommand=resendemailverifi&whatnext='+dataid, function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
}
}


function doloadallmember() {
  jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loadmemberdataallform");
jQuery("#forfocusbox").blur();}
</script>
<input type="text" id="forfocusbox" style="opacity: 0;position: absolute;z-index: -1;">

<?php $overvalue1=$overvalue2="";
if ((@$gerdeweedysaghakey1==mengacakstring("2025foreverptkawanuavipi",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$gerdeweedysaghakey1,"level_akun")=="admin")) { 
?>
<script type="text/javascript">

function doloadeachproto(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=updzcatals&calloffdut="+dataid);
}
jQuery("#forfocusbox").blur();
}
  
  function wallsec() {
  jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
 <?php
 if (!empty($_REQUEST["directslinks"]))
  { $selecz="loadmemberdataallform";
    if ($_REQUEST["directslinks"]=="dapur")
    {$selecz="catals";}
   ?> jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=<?php echo $selecz; ?>"); return false; <?php }
  ?>   

if (jQuery("#wallselections").val()=="catfights")
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loadmemberdataallform");}
else
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=catals");}
jQuery("#forfocusbox").blur();}
</script>

</script>
<div style="width:99% !important;text-align:center !important;display: none !important;">
<select id="wallselections" onchange="wallsec();"><option value="catfights">Kelola Member</option><option value="catfights2">Kelola Produk</option></select>
</div>
<?php
 }
 ?>

<div id="loadboxfordatas" style="width:100% !important;min-height: 100px;background: #fff;box-shadow: 0 0 10px 1px rgba(123,123,123,0.1) !important;border-right: 13px solid #fff !important;<?php echo $overvalue2; ?>">
<?php
if ((@$gerdeweedysaghakey1==mengacakstring("2025foreverptkawanuavipi",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$gerdeweedysaghakey1,"level_akun")=="admin")) {
 ?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    <?php
 if (!empty($_REQUEST["directslinks"]))
  { ?>     wallsec(); <?php }
  ?>

  })
</script>
<?php }
else {
?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    doloadeachmember("<?php echo @$gerdeweedysaghakey1; ?>");
  })
</script>
<?php };
?>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
