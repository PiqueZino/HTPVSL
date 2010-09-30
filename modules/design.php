<?php
include("../conf/config.php"); 
if ($desing)
{
echo '<link rel="' . $rel . '" media="'. $media . '" type="' . $type .'" title="' . $title .'" href="' . $dhref .'" />';
}
else
{
'<link rel="stylesheet" media="screen" type="text/css" title="Default" href="' . $dhref .'" />';
}
?>
