<?php
// RSS
if ($rss)
{
include("rss.php"); 
}
else
{
echo'';
}

// DESIGN
if ($design)
{
include("design.php");
}
else
{
echo'';
}

// LOGO

if ($logo)
{
include("logo.php"); 
}
else
{
echo'';
}
?>
