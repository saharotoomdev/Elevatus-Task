<?php


require_once ('classes/helper.php');

$helper=new Helper('lav');
$s1=$_POST['s1'];
$s2=$_POST['s2'];


echo $helper->calculate($s1, $s2);

?>