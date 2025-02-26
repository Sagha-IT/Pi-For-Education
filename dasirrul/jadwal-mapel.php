<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="overlay home medium-size"> <div class="bg bg-sitemap" data-stellar-background-ratio="0.5"></div> <div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Jadwal Mata Pelajaran</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> 
<iframe id="mapels" src="<?php echo $lokasiweb; ?>jadwalmapelstatis.html" style="width:100%;overflow: auto !important;" scrolling="auto" frameborder="0"></iframe>
 <!-- /.container --> </div> <!-- /.content --> </div> <!-- /.wrapper -->