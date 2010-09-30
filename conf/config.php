<?php 

//#################################################################
//# THIS IS A CONFIGURATION FILE! DOT NOT MODIFI THIS FILE! OR    #
//# WITH PRUDENCE !!                                              #
//#                             THANKS                            #
//# RAPPORT BUG AT alexandre[DOT]maingaut[AT]orange.fr            #
//#################################################################

// ||||||||||| EARLY CONFIG FILE |||||||||||||||

//DESIGN PROPRIETIES
$design = true; //OR FALSE
$rel = "stylesheet";
$media = "media";
$type = "text/css";
$title = "A NAME";
$dhref = "A PATH FOR THE FILE CSS";

// SQL SERVER PROPRIÉTIES
$esql = "true"; // OR FALSE IF YOU WANT DISABLE SQL
$sql = "mysql" //OR pg FOR POSTGRESQL OR sqlite FOR SQLITE OR mssql FOR MS SQL OR oracle FOR ORACLE SQL OR firebird FOR FIREBIRD
// HEADER PROPRIETIES
$header = true; //OR FALSE FOR DISABLE HEADER
$doctype = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
$xml_lang = "en"; //OR YOUR CONTRIE
$lang = "en";// IDEM 
$title = "My Site" //TITLE OF YOUR SITE
$http_equiv = "Content-Type";
$content = "text/html"; //FOR THE PAGE
$charset = "UTF-8"; // FOR THE CHARACTERS
$description = " YOUR DESCRIPTION";
$keywords = "YOUR KEYWORDS";
$author = "YOUR NAME";
$admin_email = "YOUR E-MAIL";
$robots = "all"; //or none for 0 robots

//LOGO PROPRIETIES
$src = "PATH FOR THE LOGO"; 

//RSS PROPRIETIES
$title_rss = "THE TITLE FOR YOUR RSS"
$href_rss = "THE PATH OR IS THE XML FILE";

// ||||||||||| END FOR CONFIG FILE |||||||||||
?>
