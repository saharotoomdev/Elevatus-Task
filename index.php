<?php


require_once ('classes/helper.php');


$helper=new Helper('lav');
$s1='AC';
$s2='ABAA';


echo $helper->calculate($s1, $s2);//output 2
//echo '<br />******';
//echo hamDist ($s1, $s2);//output 4

?>