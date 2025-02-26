
<?php
ini_set('memory_limit', -1);
ini_set("max_execution_time", 0); // unlimited
$agenrahasiasaghaitxiphone=@explode("iPhone",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2iphone=@explode("Safari/",$_SERVER['HTTP_USER_AGENT']);

ceksikurus();
?>

<style type="text/css">
    .lingkarankecil2 {
      background: #9D359B; 
      border-radius:80% !important;
      padding:1px 7px !important;
      border:1px solid #fff !important;
      width: auto !important;
      text-align: center !important;
      height:auto !important;cursor: pointer;
      display: inline-flex !important;color:#fff;
    }
    .lingkarankecil2:hover, .lingkarankecil2act {
      border:1px solid #F8AD42;color:#F8AD42;
      width: auto !important;
    }
  </style>
<script>
var globalusernamesz="";

function menuopencost(datato="onboardlistdonation")
{
 jQuery(".tohidesbox").hide();
 jQuery("#todoopen"+datato).show();   
 if (datato=="scannner")
 {
    jQuery(".sidelogos").hide();
    jQuery("#scanboxs").load("<?php echo $lokasiweb; ?>botscn.php");
 }
 else
 {
    jQuery("#subbox"+datato).load("<?php echo $lokasiweb; ?>"+datato+".php?opfromkey=<?php echo @$gerdeweedysaghakey1; ?>");
    jQuery(".sidelogos").show();

 }
}    

</script>
<div id="cartbuttons" style="background:rgba(7,144,241, 0.8);padding:5px 7px 3px 3px;border-radius:9px;width:41px;min-height: 9px;position: fixed;z-index: 999;bottom:0;cursor: pointer;margin:0px 0 33.3vh 3px;" onclick="seekeranjangzsof('now');">


<img class="iconkhususpibro" src="<?php echo $lokasiweb; ?>/scannerbutton.png" style="display:none !important;width:91%;height: auto;margin: 4px 0 4px 4px;" onclick="menuopencost('scannner');" />
<?php
if (@$gerdeweedysaghakey1!="")
{ ?>
 <a href="<?php echo $lokasiweb; ?>?metode=logoutgerai" ><img src="<?php echo $lokasiweb; ?>/logout-button.png" style="width:92%;height: auto;margin: 4px 0 4px 4px;" /></a>
<?php }
else
{ 
 ?><img src="<?php echo $lokasiweb; ?>/login-button.png" style="width:92%;height: auto;margin: 4px 0 4px 4px;" onclick="menuopencost('loginboxer');" />


<?php } ?>

</div>

<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div>
<div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Marketplace</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 
<div class="container">
<div class="row">

<div style="display:none;" class="tohidesbox" id="todoopenscannner">
<div id="scanboxs">
</div>
</div>

<?php if (@$gerdeweedysaghakey1=="")
{ ?>
<div class="col-sm-4 sidelogos" style="text-align: center;"> <img src="<?php echo $lokasiweb; ?>box/sirrul_logo.png" style="width:50%;height: auto;"/><p style="text-align: justify;">Silahkan Lakukan Pendaftaran  / Login Ke Gerai <?php echo $namasekolah; ?>.</p> </div>
<div class="col-sm-7 col-sm-offset-1">




 <div  class="tohidesbox" id="todoopenloginboxer">
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Selamat Datang, Silahkan Login</h2>
<br/><br/>

<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ($runonbroco=="mobilep1")
{ ?>
<script>
const Pix2 = window.Pi;
jQuery(document).ready(function() {

        Pix2.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pix2.authenticate(t, onIncompletePaymentFound).then(function(auth){
         globalusernamesz=auth.user.username;
         
          jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+globalusernamesz, function(data){
          
          if (data=="")
          {
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })
jQuery(".usernmboxfromloginboxs").val(globalusernamesztukformdaftar);
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
})
</script>
<?php }; ?>


<script>
function lakukanloginfromlogin() { 

 jQuery.post('<?php echo $lokasiweb; ?>?docommand=loginbroforgerai&formname=inputandatafromlogin',jQuery("#formdaftarinfromlogin").serialize(), function(data){
 if (data=="")
 {alert("Akun Tidak ditemukan, Silahkan Ulangi");return false;} 
 alert(data);
 window.location.href='<?php echo $lokasiweb; ?>markets/';
 return false;
        });
return false;
}


</script>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinfromlogin" onsubmit="lakukanloginfromlogin(); return false;">
<div class="form-fields">
<label >Username *</label><br/>
<input type="text" class="deweedycustom validate[required]" id="usernmboxfromloginboxs" placeholder="Username / No Telp" value="" name="inputandatafromlogin[]" required> <br/>
<label >Passsword  / No Telp *</label><br/><input type="password" class="deweedycustom validate[required]" placeholder="Password" name="inputandatafromlogin[]" value="" required> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Login" style="width:auto;margin-top:5px !important;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;margin-top:5px !important;"/>  <input type="button" class="dt-btn dt-btn-m calactdanger" value="Face Detection" onclick="loadxvideos('usernmboxfromloginboxs');" style="width:auto;margin-top:5px !important;"/>
<iframe id="boxforxvideos" style="width:100% !important;height: 350px;overflow: hidden !important;display: none !important;margin-top:5px;" scrolling="no" frameborder="0"></iframe>
<input type="text" id="focusforfacedetusernmboxfromloginboxs" style="width:0;height: 0;opacity: 0;position: absolute;z-index: -1;" />
</div>
</form>

</div>

</div>
<?php 
}
else
{ ?> 

<div class="container text-center">
<style type="text/css">
  .btnx {padding:5px 6px !important;height:auto !important;width:auto !important;line-height:15px !important;}
</style>
<script>
function opendetailsmarkets(dataids="")
{ if (dataids!="")
{ jQuery("#marketfocus").focus();
jQuery("#fullmarketseach").html('<div class="col-sm-4">'+"<img src='"+jQuery("#gambaran"+dataids).attr("src")+"' style='width:98.5%;height: auto;margin:0 1px 8px 0;' align='left'/></div>"+'<div class="col-sm-8"><div style="padding-top:9px !important;">'+jQuery("#fulldetailed"+dataids).html()+'<br/> <input type="button" value="tutup" style="" class="btn btn-warning btnx" onclick="opendetailsmarkets();"/></div></div>');jQuery("#fullmarketseach").show("slow");jQuery("#fullmarkets").hide("slow");
jQuery("#marketfocus").blur();
}
else
{jQuery("#fullmarketseach").hide("slow");jQuery("#fullmarkets").show("slow");jQuery("#fullmarketseach").html("");}
}

</script>
<input type="text" id="marketfocus" style="opacity: 0;position: absolute;z-index: -1;width: 1px;height: 1px;" readonly/>
<div id="fullmarketseach" style="display: none;text-align: left;" class="row"></div>
<div id="fullmarkets" class="row">
<?php
$querysql="select * from coredatas order by  waktuupdate desc, corename asc";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{
$hargaidr=$tampilkanperkolomdata['corepriceinrupiah'];
if ($hargaidr>0)
{$hargaidr=$hargaidr+(($hargaidr*30)/100); }
$querysqlpbbpayek="select * from savfmyxhomiez where terajanaterajana='".$tampilkanperkolomdata['coreid']."' and ".(@$versez==="mainz"?"usewallmainfor":"usewallfor")."!='-' order by angrytime desc ";
$jmlpayek=@intval(@queryuniverse($querysqlpbbpayek,"num")); $jmlsold=$jmlpayek;
$jmlpayek=@$tampilkanperkolomdata['corestockcount']-$jmlpayek;
if ($jmlpayek<0)
  {$jmlpayek=0;}

 ?>
<div class="col-md-4">
 <div class="post-module">
  <div class="thumbnail"> 
   <img src="<?php 
if (file_exists("dataslide/".$tampilkanperkolomdata["coreid"].".jpg"))
{echo $lokasiweb."dataslide/".$tampilkanperkolomdata["coreid"].".jpg";}
else
{echo $lokasiweb."box/nonewsimage.jpg";}; ?>" id="gambaran<?php echo $tampilkanperkolomdata["coreid"]; ?>" style="width:400px;min-height: 257px !important;" alt="<?php echo $tampilkanperkolomdata["corename"]; ?>" /> </div> <!-- Post Content-->
<div class="post-content">
 <h2 class="title"> <a id="titleforurl<?php echo $tampilkanperkolomdata["coreid"]; ?>" gojek="<?php echo strtolower($tampilkanperkolomdata["corename"]); ?>" onclick="opendetailsmarkets('<?php echo $tampilkanperkolomdata["coreid"]; ?>');" title="<?php echo $tampilkanperkolomdata["corename"]; ?>"><?php echo $tampilkanperkolomdata["corename"]; ?></a></h2> 


<div id="fulldetailed<?php echo $tampilkanperkolomdata["coreid"]; ?>" style="display: none;position: absolute;">
<?php echo $tampilkanperkolomdata["corename"]; ?><br/><span style="color:#EC4B3C;"><?php echo @dohitunganpi(@$hargaidr); ?> Pi<br/> ( Stok: <?php echo @intval(@$jmlpayek); ?> ) <br/> ( Terjual: <?php echo @intval(@$jmlsold); ?> ) </span><br/><br/>

<?php
if ($gerdeweedysaghakey1!="")
{
$printedresuldo='<a href="'.$lokasiweb.'digicontractken.php?toroll='.$gerdeweedysaghakey1.'&defz='.$tampilkanperkolomdata['coreid'].'&destytag='.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gerdeweedysaghakey1,"username").'"><input type="button" class="btn btn-success btnx" value="bayar"/></a> ';


$querysqlpbb3=$tampilkanperkolomdata["coreid"];

$querysqlpbb="select * from savfmyxhomiez where kornerkick='".@$gerdeweedysaghakey1."' and usewallmainfor!='-' order by angrytime desc ";
$querysqlpbb3="select * from savfmyxhomiez where kornerkick='".@$gerdeweedysaghakey1."' and terajanaterajana='".@$querysqlpbb3."' and usewallmainfor!='-' order by angrytime desc ";
$querysqlpbb3=@lihatisikolomtertentu("","","","terajanaterajana",$querysqlpbb3);
//$querysqlpbb3=@lihatisikolomtertentu("coredatas","coreid",@$querysqlpbb3,"corecategory");

$querysqlpbb=$querysqlpbb2=@lihatisikolomtertentu("","","","terajanaterajana",$querysqlpbb);

$querysqlpbb2=($querysqlpbb3===""?$printedresuldo:"");

if ($jmlpayek>1)
  {
    $querysqlpbb=($querysqlpbb===""?$printedresuldo:((($tampilkanperkolomdata["corecategory"]==="kendaraan")||($tampilkanperkolomdata["corecategory"]==="property"))?$querysqlpbb2:$printedresuldo));

//$querysqlpbb=($querysqlpbb===""?$printedresuldo:((($tampilkanperkolomdata["corecategory"]==="kendaraan")||($tampilkanperkolomdata["corecategory"]==="property"))?"":$printedresuldo));
//$querysqlpbb=((($tampilkanperkolomdata["corecategory"]==="kendaraan")||($tampilkanperkolomdata["corecategory"]==="property"))?"":$querysqlpbb);
   }
else
{$querysqlpbb="";}
echo $querysqlpbb;

}
?>


</div>
<div class="post-meta"><span class="timestamp"><i class="fa fa-edit"></i> <?php echo @dohitunganpi(@$hargaidr); ?> Pi</span><br/>
<?php echo '<input type="button" value="selengkapnya" style="padding:5px 6px !important;height:auto !important;width:auto !important;line-height:15px !important;" class="btn btn-warning" onclick="'."opendetailsmarkets('".$tampilkanperkolomdata["coreid"]."');".'">'; ?>
</div>
 </div>
  </div> 
</div>
<?php } }
else
{echo "Mohon Maaf, Belum Ada data yang bisa ditampilkan";}
?>
</div> 
</div> <!-- CONTAINER -->
 <?php }; ?>

 </div> 


 </div>
 </div>
