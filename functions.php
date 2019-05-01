<?php 
// Global variables
$webmaster = "webmaster@dormshed.com";

// protect against XSS 
function e($value)
{
  return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

// check for partial file load
function fileIfPartial($file)
{
  GLOBAL $webmaster;
  if((@include_once $file) === FALSE) 
  {
    echo "<p style=\"color: red;\"><b>$file</b> has not loaded, please contact: <a href=\"mailto:$webmaster\">$webmaster</a></p>";
  }
}
?>