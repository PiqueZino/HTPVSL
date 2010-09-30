<?php include("conf/config.php"); //File config for this page

include("option.php");
$a_bdd = true;
//complete later

//YOU CAN CHOOSE MODULES

//EXPERIMENTAL SECTION
$choose_modules = false;
if ($choose_modules)
{
//DEFINE VARIABLES...
include("modules/choice.php"); 
$rss = false;
$design = false;
$logo = false;
}
else
{
//OR AUTOMATIC
$end_head = false;
$early_body = false;
$end_page = false;
include("include.php"); //Call the includes
}

?>
