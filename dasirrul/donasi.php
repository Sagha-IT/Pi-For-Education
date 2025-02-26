
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
<img src="<?php echo $lokasiweb; ?>box/-gerai-sirrul.png" style="width:98%;height: auto;margin: 4px 0 3px 3px;" onclick="menuopencost('onboardlistdonation');" />
 <a href="<?php echo $lokasiweb; ?>?metode=logoutgerai" ><img src="<?php echo $lokasiweb; ?>/logout-button.png" style="width:92%;height: auto;margin: 4px 0 4px 4px;" /></a>
<?php }
else
{ 
 ?><img src="<?php echo $lokasiweb; ?>/login-button.png" style="width:92%;height: auto;margin: 4px 0 4px 4px;" onclick="menuopencost('loginboxer');" />

<img src="<?php echo $lokasiweb; ?>/regis-button.png" style="width:92%;height: auto;margin: 4px 0 4px 4px;" onclick="menuopencost('dafboxer');" />

<?php } ?>

</div>

<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div>
<div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Mari Ber-Donasi</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 
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
 window.location.href='<?php echo $lokasiweb; ?>donasi/';
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

<div style="display: none !important;" class="tohidesbox" id="todoopendafboxer">

    <script type="text/javascript">
        
                 <?php $formfrom="datadaftarfile"; ?>
        var donextboxdari<?php echo $formfrom; ?> = "";
        function lakukandaftar() { 
recekusernames('formusernamefordaftar');
if (donextboxdari<?php echo $formfrom; ?>!="validgambarnya") {
if (donextboxdari<?php echo $formfrom; ?>=="tidakvalid") {
var konfirmasifotoz=confirm("Tidak terdeteksi Wajah di Gambar yang Anda pilih, pastikan foto Anda tidak blur dan posisi wajah terlihat.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\nklik cancel atau batal untuk melanjutkan proses tanpa deteksi foto\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}
else if (donextboxdari<?php echo $formfrom; ?>=="kurangvalid") {
var konfirmasifotoz=confirm("Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\nklik cancel atau batal untuk melanjutkan proses tanpa deteksi foto\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}
}



jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();

var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandatadaftar&metoz=formdaftar",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            window.location.href='<?php echo $lokasiweb."donasi/".(@$_REQUEST["launchfor"]==="mobile"?"?launchfor=mobile":""); ?>';
            return false;
            },
        });

return false;
}
    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">
<?php
$tabletarget="data_pioneerweb"; $loadfromiddata="";
?>
<div id="boxofasalnya" >
<?php

$iloopform=0; $formsource=@explode("||",@$source1); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1))
{$setformdisp=(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")==="admin"?"":'style="display: none;" readonly');}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>7)&&($iloopform<15))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.$iloopform.'" ';}

}
?>
<div <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{    ?>

    <input type="email" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select style="height: 40px !important;" class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")=="admin") { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="non-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")===""?"unverified":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    {
    ?>
    <input type="text" <?php echo $setformdisp." ".($iloopform===2?"id='formusernamefordaftar' "."  ":""); ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
    <?php
    }
}

?>
</div>
<?php
}
}
?>
<?php if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")=="admin") { ?>
<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="penguna" >User App</option>
    <option value="admin" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</div>

<div <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dibuatsaat")));?> *</label><br/><br/>

</div>
<?php } else { ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatadaftar[]" value="penguna" >

<?php } ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo @$waktusebenernyawib; ?>" >

<?php
if (@$gerdeweedysaghakey1=="")
{ ?>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if (((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["launchfor"]=="")))||((count($agenrahasiasaghaitxiphone)>1)&&(count($agenrahasiasaghaitx2iphone)<2)))
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
          
          if (data!="")
          {
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })
jQuery(".usernameboxesdaftar").val(globalusernamesztukformdaftar);
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
})
</script>
<?php }; ?>

<div>
<label >Foto Profil *</label><br/>
<?php
$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (file_exists($forbayar))
{ $reqforphoto="";
?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php } else { $reqforphoto="required"; } ?>

<?php if (file_exists("saghafotodetection.php"))
{ echo "<div style=\"width:98% !important;position:relative !important;display:block;z-index:3;min-height:0 !important;height:auto !important;\">"; 
$formfrom="datadaftarfile";
require ('saghafotodetection.php');
echo "</div>";
}
else
{ ?> <input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatadaftarfile" ><br/> <?php }; ?>

</div>
<?php }; ?>
</div>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="daftar" style="width:auto;margin-bottom: 7px !important;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;margin-bottom: 7px !important;"/> 
</form>
</div>

</div>
<?php 
}
else
{ ?> 

<div  style="display:none;" class="tohidesbox" id="todoopenonboardlistdonation">
<div id="subboxonboardlistdonation">

</div>
</div>


<script>
jQuery(document).ready(function() {

menuopencost();

})
</script>

 <?php }; ?>

 </div> 


 </div>
 </div>
