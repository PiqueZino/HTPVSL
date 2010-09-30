<?php
include("conf/config.php"); //file conf
if ($esql)
{
if ($sql == mysql) //drivers SQL
{
mysql_connect($host, $user, $pass);
mysql_select_db($bdd);
}
elseif ($sql == pg)
{
// pgsql script for connect to server
}
elseif ($sql == sqlite)
{
//sqlite script for connect to server
}
elseif ($sql == mssql)
{
// MS sql script for connect to server
}
elseif ($sql == oracle)
{
// oracle sql scrit for connect to server
}
elseif (sql == firebird)
{
//firebird script dor conenct to server
}
else
{
echo ' Login falied to the server';
}
}
else
{
echo 'SQL DISABLED';
}
?>
