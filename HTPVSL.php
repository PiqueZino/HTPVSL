<?php include("conf/config.php"); //File config for this page

$choose_modules = "false";
if ($choose_modules)
{
//DEFINE VARIABLES...
include("modules/choice.php"); 
$rss = "false";
$design = "false";
$logo = "false";
}
else
{
//OR AUTOMATIC
include("include.php"); //Call the includes
}

?>
