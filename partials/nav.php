<?php $navLinks = array("Home", "About", "Login"); ?>

<nav><ul>
<?php 
foreach ($navLinks as $navLink) {
  echo "<li>$navLink</li>";
}
?>

</ul></nav>

