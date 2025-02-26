<?php
if (empty($judulweb))
{header ("location:../");exit;};
?>
<div class="overlay home medium-size"> <div class="bg bg-gallery" data-stellar-background-ratio="0.5"></div> <div class="container vmiddle"> <div class="row text-center"> <h1 class="judulberanimasiwhite">Galeri</h1> </div> </div> </div> <!-- /.home --> <!-- CONTENT --> <div class="content"> <!-- CONTAINER: gallery --> <div class="container gallery magnific-wrap"> <div class="row"> <ul class="nav-category text-center"> <li><a href="#all" class="filter" data-filter="all">semua<ins>&nbsp;</ins></a></li> <?php echo opengalleria("box/galleria"); ?>
 </ul> </div>
 <!-- mix-list --> 
 <div class="row mix-list"> 
 <?php echo opengalleria("box/galleria","bacalah"); ?> 
 </div> <!-- /.mix-list --> </div> <!-- /.container --> </div> <!-- /.content --> </div> <!-- /.wrapper -->