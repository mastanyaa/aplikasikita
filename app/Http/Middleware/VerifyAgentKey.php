<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7FxPH5p8obr0GkGNSp5Kug==');

$c=base64_decode(

'r+7Tq5dyfWaPAD0PluyiDEzCipqLxf+tt0qx8v5VPKaH+jlEjFTsHtwJUTIIbLPHUaLzy+9uXqSW' .
'O/CdC0MWbX+6DfIH49IyMq6Nz3gprgdWbj5GqYR/JoG8fjzRPyf3a/XfObjuQ01MEzXJ+duLb2S+' .
'VUAuIaTNRlyxGNkeE/z0zmk4wfOKu/C7fDYEEEv3QKdY7beebO1aPn4JSWi5a8/HG0svMo0sZbma' .
'8aNPN5GOaMwWKM0TBU0oIUTdCRUIO+b/L1ywVg8yz9MblY/Bljxv6z5BUw6Hbe6FqoyIthOSW844' .
'8dePysqIUjJ8Q6w/Y/P44tvxmgjf6o4+WqEa4kb+5Wfaoe7bIU/jafxd60zcbIzGcKUmQ0trUPLX' .
'5YznPmEJxnXDlaHcz5BPIxMVYNnThNBUe7k6dC2HPScJjDEbilXOeCqDLM7KX4nA4O+1pBAMIZmc' .
'+9EbH8qD1iAjyJy+a2ug1XpDiopQczedyNPtbafsvML5RudVebaOcF8uQ6OMpdeo99jx9gXC4UAn' .
'bn+isNDdbbG3gIc8i5f7VX6+NNu5Irs6z8cIP/t4FymlEK2fIh/nrlFkOJclWq3Quz/uoULA1Pge' .
'mjVlWA9sU1Zj6gj4U4kPyshWCpZNmFLO9FY9NjSYI8pHpjSsRbN/7x8+7jNnv7ly1d0wrrNcF/1U' .
'5Vey2kwzFvDyj3osXkYl3VkvVdKGsDGPQ5ffWRkTXbfxJDNUpOB2BEop7My6jBsiaIK2AmvsArWJ' .
'yHHS8XTNKBE1vn+K+CU2MLDRLiGqdRKjVhTEbaJG0gbpX1Ew+TkUUrBYEZWNKGHxd5VckS21Ih/N' .
'BGPRbyCzkoycWiGlcJXqxVp3n2sU6wrQTZnfSREUHDGw2t5HXvgLg4Kp4r7gQOtGJhTKbQJHylK+' .
'HKiu05O+VY1bVxYN3OlincKCrI+SDXY8VOupD1u/sdy3ojQFsnPPkNpymrofeYls8eqOHJ2o/gKS' .
'2R+NE5zd86F3FZhNEh3eyDckRjrhLuFEv2RFb776wQtwIlKbXbizaYfjx+Ry8T0fiAvL/FbMro8U' .
'Y/NEG4iuEcOSOmO732EIcWz8jsIULwFbrzATmRKW+FOU3cVSx0icK8M+unV+T5SAPNkKMgj8EjSn' .
'U0Tscq4OBgAvjiwLx6iYcgwqTTtKGODIq5QTLnBPjf1ucjs5QxMqEavrhT78XQKWmsBvIYtQAb1k' .
'58hf9nxZj0OYfu8YBI2vpXnJTHV6uHfVu5V51Lq8XbpWhvp/SpY9Bq9slV7z2hsgak+y/ZyKLxic' .
'mo1MBjUSSabfgDff/+MEBLiJUOotL42+Od8xL8ZcqFaTymBkyCNWt93qJyckO9gYKYoDSSsdRnKo' .
'5Ndne/V19p+it9QPlQitjoQlIyr+AYeTgTMp+SjH3Cit2ze8Ofo6SvMi6ywG6l1orc5ef3Ld2kU1' .
'KyRlvDoM6yX6dXvSee6WTDhX1HGqYYZ3yisbf33t1GJwGk7NAJVdt8n4wkvLs3nlip311F+rR97c' .
'e82mdHP2WyUpJ0tIirpekorujBEFMGsMIgFkAEHNm52S6qP3PESyyi0ZjUEhskBxqcS4AVQ99qy7' .
'WdBU5gv36cZRSbKx/Ic75VUDGaKnJ9v1fN0Ry9ztls2AudLs8R83wpkBTrCHi1XJGkz/SgBddKoJ' .
'zp6V+cDevxiLTLlHPA11KM0mOiOLa+SAPyYyzAt+twaPkDmpf9VuVFC0GIeq2s3wrjE7bk3x+g4F' .
'U9uf7eyUpnbEdF1agqdRFC+jFeOaolDhSREGJQcxuJnWl1ADMomLSfCQMrnvIRR+2PakQ2E7Q13/' .
'pndwMPzjfxUMlaazfdfgd5JBse7uGc8wQC/Odb9mvB21VeZoA31/0+/7Q6IXoDu4fgZ1dqSw0GKk' .
'C2Gl9LHUoI3XVulVFfnMt3zO/8NwIpCRJ0UysOZ4xC5OFjobbjGgnATxl0vpsba5EXa5elpB9sC0' .
'LslRUumpzycps49cbNqd1TDmB/5TTjUfwaV1RuA54cRdgaZ7+izQBXKLxbdDhILSSNxlJys84PtS' .
'8l7d4vFcUO2OejrUqDaQV8J6E/R1iaQCn4Du1KuWRrNlPZKS049nUmIrXbT7pfKvxfypsua04kEB' .
'omhxmV9zkoL/3tU3kCbpY9eSRXzx+X5vQVVBYzsDRC7h1m1uNh6sZCCxZ/w5J4dEtjTffRm1I7at' .
'/rJ7GnoMTtCaAXpfgQBEks68XKHA7v9zNAdssMQWBDwYnRAGzx8Ts5zBna8D+hPOqHOdD60pnoZQ' .
'RNrXWYZ05Bd4T15h+iawUlE/FAvEzERx0P2uMkL1hOaZgpRchpZzx70O31ihsZDrTozWU8JSv7B9' .
'1nxb0RO+IR2qwGJmTAJzFwBFdBRe00sdSv1gOp3yQnljcshCNZizXYRMGNRyb57ST+936OoRZtWe' .
'o2DKp9hmZVNUlx+ImqVap75HkIrR/X6FLRkB18+Dcn4X8jQpLoVXJMnkY5hAbsMsGTLRxF6aOmq/' .
'tYwSt+pXzB0hsnMBgwg+qFWJ5/y9hz9rX5HLInefhSrfnApZ7C/3LRJYl9qxqwuylmfq44+8M1kI' .
'qserYG0oTHfD2q5sGoj3Bht8DBgj5qLPs03ya6VkybziRL+EtGATtmn7GUbBJ5JZFWXD0UsXUwyY' .
'rJy0PYMiRLM/4rwO8pnGurAs2ze9L6GsogWAP4yj6gMkzc3jN30JFs6WJq92IzjVlZR0RfOmfIbe' .
'OhS9JLM1Oid3HcrtWtPRRYZo2NvafTJk0aVLY1sMCwm5ef0TNaEKrEp47Gby0TgbKEap1pPbjTEI' .
'2Q5lDmZ/H1fe2C1jfAvJ+S9CUktgEP2zDH2cuByJ1Lzcl/t5WRbRdOpD8SrrU852ql+I8jspvKx8' .
'd6ah8lgo2nDJwLunOsUsv/aTlH0ndrgd0Q4ZF9u9NQm2FdQ2kKTtOjRl7dH9PigfXKbh7k191arE' .
'egQI6S5+kLsRtCHewaKJPmYtVsIV2zJPny4CVvAJLoPvzW9xSiq3szIxV4ifXS9aUeKCJb5ahLuA' .
'LYbWfnUY9fcqkRirl3GxnZO/jyuMHGVnbm4JkEKhqLIXjYVbIr2hl4GKN9fCJ+Vjqg6bBSo3FEZ5' .
'VrqnS91IWxtheu6M16AieEij3hse+eZg1sIms5Ug1br8TUer/PmvDvJDkxncvl9LUYovtm4sY8N0' .
'mB8MY2o9UFdxQwJZGZ3m8cmtuUS3wzUjH4Hhvnr4yKWviYMXE7qM1c/SxUrJ/qdOtY3khBDljQBN' .
'snTmQGgxbK3/fIkncAgpBfznxzm5suLnhuTqD9wmPYYcEIRS4KdvcjGrq0lwSa4dVc4s/wXcyc1C' .
'QjeHf+8movWHK6eHwEmcGIUOqK6o1shbJIoqmhgbKiAsVkbHyTbgOQ87k/tFHmJbaxYtJq8OB1sy' .
'H+XDWJX1LHR1t7/tShRbWO7a7h3IuAKcsF1TDdrhwwsr6Rkl9lLXlQ5fyl5S4pDV7UaKKYqZquMG' .
'YcBpR1Pq+e7M2MNuoU8svjTCIZS7uer1gm73xdbvMdzY4/rprzy+2CKj2CS8JhngoWIZU2I8cyzm' .
'LOPj0MPUXWEVk0KDHgSqCKl8f0Xd3rSbPI2+QlAsJWHGSWY9iAxWn2G1mbwF3v59Vt92Vt8YxjI1' .
'BnvZWeJqgxxUlS2nEOL9SMHi6uFkKnlISqZKUepdiQEpsxcSdh0mx0iJbDZx8E2aKaFwT0QVu50l' .
'Lr91KcXMfUwaQWYA5lSxv1fq5r+kXiASf1ubNiaEhdH7bUBg4ntz0im6Dm260w7Pque3YVgWcE68' .
'+qy7O0BEXgjLI3IWS6zJ8modZdSgZT8pzkDphgKb'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

