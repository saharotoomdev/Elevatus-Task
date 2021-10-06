<?php


require_once ('classes/helper.php');


$helper=new Helper('lav');
$s1='this is a test';
$s2='this is test';
echo '<h2>Example : </h2>';
echo '<br />first text : '.$s1;
echo '<br /> second text : '.$s2;
echo '<br />levenshtein:: '.$helper->calculate($s1, $s2);


echo '<br /><br /> ';
$helper2=new Helper('lav');
$s1='this is test';
$s2='the is test';
echo '<h2>Example : </h2>';
echo '<br />first text : '.$s1;
echo '<br /> second text : '.$s2;
echo '<br />levenshtein:: '.$helper2->calculate($s1, $s2);


echo '<br /><br /> ';
$helper3=new Helper('ham');
$s1='10101010';
$s2='01010101';
echo '<h2>Example : </h2>';
echo '<br />first text : '.$s1;
echo '<br /> second text : '.$s2;
echo '<br />hamming distance:: '.$helper2->calculate($s1, $s2);

?>