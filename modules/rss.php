<?php
include("conf/config.php"); 
if ($rss)
{
echo'<link rel="alternate" type="application/atom+xml" title="' . $title_rss .'" href="' . $href_rss . '" />'
}
else
{
echo'';
}
?>
