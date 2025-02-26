<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div>
<div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Kontak Kami</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 

<div class="container">
<div class="row">
<div class="col-sm-4" style="text-align: center;"> <img src="<?php echo $lokasiweb; ?>box/sirrul_logo.png" style="width:50%;height: auto;"/><p style="text-align: justify;">Silahkan kirim pertanyaan anda melalui form di samping, pesan yang dikirimkan akan dibalas selama 1x24 jam.</p> </div>
<div class="col-sm-7 col-sm-offset-1">
<script>
var dataformcontact = "Nama Lengkap^none|Surat Elektronik atau EMAIL Anda yang valid dan masih aktif^mails|Nomor Handphone dengan angka^isnan|Judul Pertanyaan^none|Isi Pertanyaan^none";
jQuery(document).ready(function(){
dataformcontact=dataformcontact.split("|");
})
function lakukancontactbaru() {
for(lakukanlooping=0;lakukanlooping<dataformcontact.length;lakukanlooping++)
{if (periksaform(dataformcontact[lakukanlooping],"formforcontact"+lakukanlooping)!="lewati")
{alert("Masukkan "+jexpimp(dataformcontact[lakukanlooping],"^","","0"));
if (periksaform(dataformcontact[lakukanlooping],"formforcontact"+lakukanlooping)=="kosongkanisiform")
{jQuery("#formforcontact"+lakukanlooping).val("");}
jQuery("#formforcontact"+lakukanlooping).focus();return false;}
}
            jQuery.post('./?docommand=contactfront&formname=formforcontactdata',jQuery("#formforcontact").serialize(), function(data){
            if (data=="")
           	{alert("Proses Gagal, silahkan di ulangi");return false;} 
            alert(data);
            for(lakukanlooping=0;lakukanlooping<dataformcontact.length;lakukanlooping++)
{jQuery("#formforcontact"+lakukanlooping).val("");}
            return false;
        });
return false;
}	
</script>
<form id="formforcontact" onsubmit="return lakukancontactbaru();return false;"> <div class="formwrap"> <div class="form-group"> <input type="text" value="" id="formforcontact0" name="formforcontactdata[]" title="Masukkan Nama Anda di sini" pattern="^.{3,}$" required="required" placeholder="Nama Lengkap" /> </div>
<div class="form-group"> <input type="text" value="" id="formforcontact1" name="formforcontactdata[]" title="Masukkan Surat Elektronik atau EMAIL Anda yang valid dan masih aktif" required="required" placeholder="Surat Elektronik atau EMAIL Anda yang valid dan masih aktif" /> </div>
<div class="form-group"> <input type="text" value="" id="formforcontact2" name="formforcontactdata[]" title="Masukkan Nomor Telp Anda" pattern="^.{3,}$" required="required" placeholder="No. Handphone" /> </div>
<div class="form-group"> <input type="text" value="" id="formforcontact3" name="formforcontactdata[]" title="Masukkan Judul Pertanyaan Anda" pattern="^.{3,}$" required="required" placeholder="Judul Pertanyaan" /> </div>
<div class="form-group"> <textarea cols="40" rows="7" value="" id="formforcontact4" name="formforcontactdata[]" required="required" placeholder="Isi Pertanyaan" ></textarea> </div> </div> <button type="submit" class="btn btn-primary btn-wd">Kirim</button> </div> </form>
 </div> </div> 
<div class="container text-center">
<div class="row">
<div class="page-header col-sm-8 col-sm-offset-2"> <h2>Lokasi Sekolah</h2> </div> </div>
<div class="row">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.445069194258!2d106.416143!3d-6.2819622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4205dc3b802b75%3A0xc3fd72b624e6abdc!2sPONDOK%20PESANTREN%20SIRRUL%20HIKMAH!5e0!3m2!1sid!2sid!4v1720769846607!5m2!1sid!2sid" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>

</div>
 </div> 


 </div>
  <!-- /.content --> </div> <!-- /.wrapper -->