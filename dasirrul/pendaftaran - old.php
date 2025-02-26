<?php
if (empty($judulweb))
{header ("location:../");exit;};

if ((!empty($deweedysaghakey1))&&(!empty($deweedysaghakey3))&&(!empty($deweedysaghakey2)))
{ ?>
<script> window.location= "<?php echo $lokasiweb; ?>"; </script>
<?php }; ?>
<div class="overlay home medium-size"> <div class="bg bg-services" data-stellar-background-ratio="0.5"></div>
<div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Pendaftaran</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 

<div class="container">
<div class="row">
<form method='POST' action='./?docommand=saveuserregisterdata' enctype='multipart/form-data' class='form-horizontal'>
    <div class="row"><div class="page-header col-sm-8 col-sm-offset-2"> <h2>Data Peserta Didik</h2> </div> </div>

	<input name='nis' type='text' placeholder='Nomor Induk Peserta Didik' autocomplete='off' maxlength='13' class='form-control' readonly style="display: none;"><br>
    <input type='text' name='nama_siswa' placeholder='Nama Siswa' autocomplete='off' maxlength='63' class='form-control' required><br>
    <select name='jekel' autocomplete='off' maxlength='1' required class='form-control'>
            <option value=''>Pilih Jenis Kelamin</option>
            <option value='L'>Laki - Laki </option>
            <option value='P'>Perempuan</option>
            </select><br>
    <input type='text' name='tmpt_lahir' placeholder='Tempat Lahir' autocomplete='off' maxlength='63' required class='form-control'><br>
    <input type='date' name='tgl_lahir' placeholder='Tanggal Lahir' autocomplete='off' maxlength='10' required class='form-control'><br>
    <input type='text' name='nisn' placeholder='Nomor Induk Siswa Nasional (NISN) Siswa' autocomplete='off' maxlength='27' class='form-control'><br>
    <select name='agama' autocomplete='off' maxlength='27' required class='form-control'>
        <option value=''>Pilihan Agama</option>
        <option value='Islam'>Islam</option>
        <option value='Kristen Protestan'>Kristen Protestan</option>
        <option value='Kristen Khatolik'>Kristen Khatolik</option>
        <option value='Hindu'>Hindu</option>
        <option value='Budha'>Budha</option>
        <option value='Konghucu'>Konghucu</option>
        <option value='Aliran Kepercayaan'>Aliran Kepercayaan</option>
    </select><br>
    <select name='status' autocomplete='off' maxlength='18' required class='form-control'>
        <option value=''>Status Anak</option>
        <option value='Anak Kandung'>Anak Kandung</option>
        <option value='Anak Angkat'>Anak Angkat</option>
        <option value='Anak Tiri'>Anak Tiri</option>
    </select><br>
	<input type='number' name='anakke' placeholder='Anak Ke' autocomplete='off' maxlength='2' required class='form-control'><br>
    <textarea row="3" name='alamat' autocomplete='off' maxlength='150' class='form-control' placeholder="Alamat"></textarea><br>
    <input type='text' name='no_tlp' placeholder='No. Handphone' autocomplete='off' maxlength='23' required class='form-control'><br>
    <input type="email" name='email' placeholder='Pastikan Email yang dimasukkan valid karena sistem informasi kami akan mengirimkan email verifikasi email' autocomplete='off' maxlength='255' required class='form-control'><br>
<div class="row"><div class="col-md-4"> <h3>Foto Siswa</h3>
<input type='file' name='gambar' file-accept=".jpg, .jpeg|images" accept=".jpg, .jpeg|images" value='Upload'><br/></div><div class="col-md-4"> 
<h3>JURUSAN</h3>
<script>
function ubahjurusan(yangterpilih="") {
if (jQuery("#jurusannya").val()=="")
{jQuery("#jurusannya").val("");jQuery("#jurusannya").html("<option value=''>Tidak Ada Data Jurusan</option>");
jQuery("#bidang_keahlian").val("");jQuery("#bidang_keahlian").html("<option value=''>Tidak Ada Data Bidang Keahlian</option>");
return false;}
jQuery("#bidang_keahlian").load("./?docommand=pilihanjurusan&subselect="+jQuery("#jurusannya").val()+"&dipilih="+yangterpilih);
}
jQuery(document).ready(function(){
<?php
if (!empty($_REQUEST["loadcontent"]))
{echo "ubahjurusan('".$_REQUEST["loadcontent"]."');"; echo 'jQuery("#jurusannya").val("'.expimpd($_REQUEST["loadcontent"],"-","","0x").'");';}
?>
})
</script>
    <select id="jurusannya" onchange="ubahjurusan();" required placeholder='Nama Jurusan' class='form-control' style="width: 100%;" >
    <?php
$querysql="select * from tbl_jurusan order by kode_jurusan desc";
$cekjurusan=$jurusanfirst="";$mulai=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ if ($cekjurusan!=$tampilkanperkolomdata["nama_jurusan"])
{ $cekjurusan=$tampilkanperkolomdata["nama_jurusan"];
echo "<option value=\"".expimpd($cekjurusan,' ','_')."\">".$tampilkanperkolomdata["nama_jurusan"]."</option>";
if ($mulai==0)
    {$jurusanfirst=$tampilkanperkolomdata["nama_jurusan"]; $mulai=$mulai+1;}
} 
}
}
else
{echo "<option value=\"\">tidak ada jurusan</option>";}
    ?>
    </select><br/></div><div class="col-md-4"> 
<h3 style="text-transform: uppercase;">Bidang Keahlian</h3>
    <select name="kode_jurusan" id="bidang_keahlian" required placeholder='Nama Jurusan' class='form-control' style="width: 100%;" >
    <?php
    $querysql="select * from tbl_jurusan where ".($jurusanfirst===""?"":" nama_jurusan='".$jurusanfirst."' and ")." bidang_keahlian!='' order by kode_jurusan desc";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{ while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
    {echo "<option value=\"".$tampilkanperkolomdata["kode_jurusan"]."\">".$tampilkanperkolomdata["bidang_keahlian"]."</option>";} }
else
{echo "<option value=\"00\">tidak ada bidang keahlian</option>";}
    ?>
    </select><br/></div></div><br/>

<div class="row"><div class="page-header col-sm-8 col-sm-offset-2"> <h2>DATA SEKOLAH ASAL</h2> </div> </div>
<h3></h3>
    <input type='text' name='sekolah_asal' placeholder='Nama Sekolah Asal' autocomplete='off' maxlength='50' class='form-control'><br>
    <select name='diterima' autocomplete='off' maxlength='20' required class='form-control' >
        <option value=''>Pilih Kelas Sebelumnya</option>
        <option value='X'>X (sepuluh)</option>
		<option value='XI'>XI (sebelas)</option>
        <option value='XII'>XII (dua belas)</option>
    </select><br>
	<input type='date' name='tgl_terima' placeholder='Tanggal Terima' readonly style="display: none;" autocomplete='off' maxlength='10' class='form-control'>

<div class="row"><div class="page-header col-sm-8 col-sm-offset-2"> <h2>DATA KELUARGA</h2> </div> </div>
    <input type='text' name='nama_ayah' placeholder='Nama Ayah Kandung' autocomplete='off' maxlength='63' class='form-control'><br>
    <input type='text' name='nama_ibu' placeholder='Nama Ibu Kandung' autocomplete='off' maxlength='63' class='form-control'><br>
    <textarea row="3" name='alamat_ayah' autocomplete='off' maxlength='150' class='form-control' placeholder="alamat ayah"></textarea><br>
    <textarea row="3" name='alamat_ibu' autocomplete='off' maxlength='150' class='form-control' placeholder="alamat ibu"></textarea><br>
    <input type='text' name='pekerjaan_ayah' placeholder='Pekerjaan Ayah' autocomplete='off' maxlength='50' class='form-control'><br>
    <input type='text' name='pekerjaan_ibu' placeholder='Pekerjaan Ibu' autocomplete='off' maxlength='50' class='form-control'><br>
<div class="row"><div class="page-header col-sm-8 col-sm-offset-2"> <h2>DATA WALI<br/><sub style="font-size:70%;letter-spacing: 1.4px;">* Apa Bila tidak bersama orang tua</sub></h2> </div> </div>
    <input type='text' name='nama_wali' placeholder='Nama Wali' autocomplete='off' maxlength='63' class='form-control'><br>
    <textarea row="3" name='alamat_wali' autocomplete='off' maxlength='12' class='form-control' placeholder="alamat wali"></textarea><br>
    <input type='text' name='pekerjaan_wali' placeholder='Pekerjaan Wali' autocomplete='off' maxlength='50' class='form-control'><br>
    <input name='no_tlp_wali' type='text' placeholder='No. Handphone Wali' autocomplete='off' maxlength='23' class='form-control'><br>
    <input name='password' type='password' required placeholder='Password untuk login' autocomplete='off' maxlength='50' class='form-control'><br>
    <br>
	<input type='submit' name='save' value='Simpan' class="btn btn-info">	
    <input type='reset' name='reset' value='Kosongkan' class="btn btn-warning"> <a href="<?php echo $lokasiweb; ?>daftdownload.php" target="_blank"><input type='button' name='download' value='Cetak Formulir' class="btn btn-alert"></a>
</form>

</div> </div> 


 </div> <!-- /.content --> </div> <!-- /.wrapper -->