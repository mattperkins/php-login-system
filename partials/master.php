<?php
require_once("../functions.php"); 
ob_start();
include_once("partials/header.php"); 
?>

<div class="container">
<header><?php fileIfPartial("nav.php"); ?></header>


<?php echo $content; ?>


</div><!-- end container -->

<footer><?php fileIfPartial("partials/footer.php"); ?></footer>
