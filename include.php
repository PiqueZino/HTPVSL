<?php 
//INCLUDE MODULES...
include("header.php"); 
include("modules/rss.php"); //RSS
include("modules/design"); //DESIGN 

if ($end_head)
{
?>
</head>
<?php
}
else
{
//NOT END FOR <HEAD>
}

if ($early_body)
{
?>
<body>
<?php
}
else
{
//NOT EARLY FOR <BODY>
}
include("modules/logo.php"); //LOGO

if ($end_page)
{
?>
</body>
</html>
<?php
}
else
{
//NOT END FOR PAGE
}
?>
