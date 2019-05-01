<?php
// functions path relative to index.php (not this file)
require_once("functions.php"); 
ob_start();
include_once("partials/header.php"); 
?>

<div class="container">

<header><?php fileIfPartial("partials/nav.php"); ?></header>


<?php echo $content; ?>


<?php fileIfPartial("partials/footer.php"); ?>

</div><!-- end container -->