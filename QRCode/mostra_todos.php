<?php
 $pasta = 'img_php/';

 $arquivos = glob("$pasta{*.jpg,*.png,*.gif,*.bmp}", GLOB_BRACE);
 foreach($arquivos as $img){?>
<img src="<?php echo $img; ?>" title="<?php echo $img; ?>" width="150"/><br />
 <?php  
 }

?>