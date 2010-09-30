<?php include("conf/config.php"); // file for config
if ($header)
{
echo'' . $doctype . '
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' . $xml_lang . '" lang="' . $lang . '">
<head>
<title>' . $title . '</title>
<meta http-equiv="' . $content_type . '" content="' . $content . '" ; charset="' . $charset . '" />
<meta name="description" content="' . $description . '">

<meta name="keywords" content="' . $keywords . '">
<meta name="language" content="' . $lang . '">
<meta name="author" content="' . $author . '">
<meta name="reply-to" content="' . $admin_email . '">
<meta name="robots" content="' . $robots . '">';
}
else
{
//the doctype is present in the file
}
?>
