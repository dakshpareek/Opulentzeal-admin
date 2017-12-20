<?php
include 'Dbconnect.php';
$link=$_POST['link'];
$pub=$_POST['pub'];
$rank=$_POST['rank'];
	$ctype=$_POST['ctype'];
	$file=$_POST['file'];
	$nfile=$_POST['nfile'];
	function addScheme($url, $scheme = 'http://')
{
  return parse_url($url, PHP_URL_SCHEME) === null ?
    $scheme . $url : $url;
}

$link=addScheme($link);
	
	
if($que=mysql_query("insert into selink1(link,pub,rank,ctype,file,nfile) values ('$link','$pub','$rank','$ctype','$file','$nfile') "))
{
echo "Inserted";
}
else
{
echo "Error";
}
	?>	