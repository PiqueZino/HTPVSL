<?php include("conf/config.php"); //File config for this page

if ($logo)
{
//src is the path for the picture.
echo'<div id="header"><img src="' . $src . '" alt="header" /></div>';
}
else
{
//not header
}
?>
