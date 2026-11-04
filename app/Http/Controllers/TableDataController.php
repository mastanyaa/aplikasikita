<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qCW7II2oPvhsmwoF9GT1TA==');

$c=base64_decode(

'HuN7UyAoVq9ft67aTZcom05HPmQ9Y/Gc+TAYyE+helDibDsFhwyHvkKyCQH2upDwJPgZ87q92nKE' .
'W/Vfq5EoGErzvbYLpeuAhMutfkx1JxG+m7wXZEvoIPwII4c+yP7SsDlfiBxm3rMk4yczWpAoPOSr' .
'jJNBoYkEGsScr/gRxdYW3NWMDVUoJe7jglKoQHAtEjDAKa4yXXbaCiRaJjyJ3SAjNpU7MqK7NQqu' .
'gkZ2m1z/DLWxS45iu8TCRc0BgUaQPmU2m+St49PZjGXgn1lrcUap2MHNHUhw1nJoE3LfajyHWtc+' .
'h1KVEM8dHLpCb6IJcQu+8Tgxm9ir5qpgjRkGsO79L494l9VqkpIrOC3rRaFrwXZ/cMwdfk5P3VtJ' .
'CLoOQLN2vKFvTpEC9X0XmFGDueFeaCGMOEjNuYNN4AQ1+v8AjC1NDgDNh+RDOTmTDRK8UU33FJeC' .
'RAL4g8fqtuCpWjerk+rDvrGVPYgjwqp2k7qwALX5P0ymr8hxHm1xnwMfgIgdwuVwdy0xZBkbU72h' .
'U3NsXQ/jgfrH1HRm4yLxTyo45vznsvd7as9nXISnExui80AodKhQ1jnFStVc80PG3dHcmsluI6Zx' .
'YkBkhzwnKrwZBh1KU++FpPIaREHZhYtTBAcamN3nOhYk+y+Dp4PTMzJS4Y2r81nDVJzw6etISEnP' .
'T/44SLOwC4M+hDnT3rSmmLYYDRpis2GiP+0Cdkcxy7YuD1ChR+OwT6j6+UT1JwRxIOSa/fhIMOo8' .
'TyHzO8nGOtXI92ZS+xed0ZNccJdTs4hf2K9l9uhitGcykzLBIc7TEO6soBtGfd9Q+KOkAXL4NF5O' .
'bkCD90OdWTTbnQtc0rU4L6RblnbvkhwCBVoA+Rt0QH3wr3nD1WAe2fA9opv847DfdsY74EVkb29e' .
'zbCLAcoJ3dBDjZNon/axGvBcIdFnVnZ7GrnloUHM53PPKZKpsjtVaDqFqVxwaytqCFXL1AZRG2Yu' .
'gqMabWadobDTU1DXLOito2/021iwfMX2bMLjYIQc3SgR8ywIbTUmZk37WbjjZK7DC4UnQIrwbJVz' .
'3HPwpn9jE0e2KY7BBXGkB3NkLm2gR5M8jA+sMH/LdduVrPVEqSt5Y9wpmMKAXL1TM5Tb2enLgbEG' .
'M+vGCjLQFEIrFgwBpcHhtnegA6Zkznotf8ELgbBuC5BN9czNA8IOeH3/MPBhjVxWRRq4/gOfTyp+' .
'L1AKhaJA2AozA+wri/CsfpUAlaMtVJEezOAtLmwGuUPOUqTRfObqyhkKyf2ms87xAqmnran1XKwR' .
'GltNiiCS+PjZL6smepNY5/XLimuJGO7dU4QAeaPKgx83S8ghRMkTusursKVteH7jugFhI+WPy+8R' .
'aUSXA3oHoFnVw+GG/hjVzyliLzATFax20n1FDhxCxKBCAkjIyGZblZlxmQXRRP/3avj1y9+syplx' .
'VAEpEtgXigdH4wHeQkNBBhSDO2futKmDnhdXyCmU8LZoby2Szxdpp7taKGYvk2lhqT/ug2cvpTEm' .
'k4EA+y6xSq6/6HdJfivLomRCKZXRpBHv8xkXERG8KQjkwTWHfLerp7UERagV7ZT5l96jwW2jTjBk' .
'5oSZ9WsB5gLxNzzj/G34IPRdl37Sh0HZ4eP9kMzcztuVblpSM9kC5Yl22xYLJmHOL+H4lZf11/y/' .
'bzN4vMF+XC1b+RNy980W0dpCCAvPQr9/sX1DlaxYqhwRn+/EZiSbmjL/j4KMozppjYOFkfLq78QV' .
'8VpK4duUx9/E1bfKvMPaDLacCzOxWlN6GMlQpkfJUEB0Iz1tEwy3uKMZis5nCbAYB4Kypsukc8jn' .
'Qe7INdDpaqGs75eZAO5IqIopIgWYlJJGf+DMjutdrg0xG2Y20QOt812NhBnXaD22qwOHGGmZ2+4+' .
'1IVCLyjQ489XNsSvgyil8oVFyift0cuh3xC23rY+g4g1zgvSuYyU6e7YwrcXAFJj0Qti2PxTPNh8' .
'3yYrSv3MVVwJp2t5iui9Kf84irxEn6scZKlbAfufT7EJd4wJzQiDIzHUt7FvSdxjYLuwInNCau9Z' .
'uU3/Bu+FbmjPKBTzTrquqllleCjyngK2SAB1mfyTH3tRvcfH5II0MWr3bX8tj+1HBniEiIDcn0DM' .
'GAtbUxVs4W2Iz9Hiq4o8Ta2EJuSrWxlatEGh3MY7iZ0aihXOVHitYqFbnYBT95zfrHs0YEG1ZBXs' .
'JydKLRQihcXQ8rDGRjjbBtgiUoZ7g/DiZA5TlDIyQCu2eK0qYlWhiwFl2s2wdmjZFga9iass0Grs' .
'WwQmy8/MUTbVtTbhnbnnRgTigHEyTwJVxFQf6oBIPYe1+RKv3hoTa/SDIJGebi2ifhKrikP6pSYf' .
'hmLDijQEE1sE6dXPqVNTnmJslvB1DRs+q/1NGUEUrWILfFXrCNcj71JZYHygFLpHYKfv/Yh8p7EO' .
'anbq1N1pB2fnlk0MY3tigJP1RnjaqTN0dqB7kK6iSwbZ//MurXSHNoYlgygzta2AP3HandQIvDUP' .
'kFSSTglsisjojBGgaeYdw7CEc16WT1wYo1f2ZpNYT90D7sKtcWCgcq02uSL3pd6ZABeWRbDcVpUy' .
'QOxzVPGAM4Ekmte4yRxd/+Q5O4EPjymyKTWHmAe9ZbVBCOoaDKmWpEhznCVvpCuP+mqmJjdepJTQ' .
'OuooxhP9b/gK5z096GaTyLxHYKTpVpxE6zaupr3uVg8zdpwmr4D5323RNKFBdjAG8Fl3DL1hskK1' .
'qgI7HFg+hlBfXHcuFne6a+NIPbvMWv1YdrORE1hv6iJvuxfVb39XccRZtZvrDX+qYjiMVrbr12ub' .
'bLVa3VhZtUYO9cMQqwORLVlpINUOvwmh2an5ogvnWZGY2UQK++2ePlxGZnEHHWlV8Z3va6C8k6d3' .
'bEFd/yIH11yMCvR3BaVxuyS3uLnbHng4RfHQVcbU0qnjkvl9nP3AEwYlXYT3Wbxrk9A0YlQdtHJO' .
'wl9Wf1OwuoYXG3aedIWBV1ZFKu31AgiizlU/6n7pd8z+v61dr+2pMEZT5aqeYvkHMgtMeYUEWfS5' .
'OUGCjggq19RJLEGuy5Lob8/PsoFYHDscfXaV/455rIrUBsf8rMWHeR+FgQJntmH3TZJ6sulA/wc3' .
'dBrG9QfDAAiBjdY5Hwzdp7JH0O/ej/1A5kf3uY64/fxdzaNn7wG/GgC0FhOsBvAapOsDdsT+wdfX' .
'3lcrFAtoJdtjf9s8KJEnd/tR3BGszoecRQm2GWvTydQ05rq8ZsvKXym5wnhsKS8Iaqx9FEf7ZJWn' .
'SJRjtry8/4Q6HlWPMPYaLkd0Yfae17zBx2ikbduVqQlBUs42j8AjirWNjE/eo1L1/cCIyr1nt/5o' .
'otCIEKK2Q6AlWSCJs4QjGGKqzjTdTG7f27AoDKI262NMOZt5EKR4/1ZygEaIVlq77PwtkYheFB8M' .
'lwb4wsA7YGvWT1CgTW6Y6EiolpWaqUF3AaJXaav8qsHtKqMP7XsJ90vWy+i8nyrfqXwuDJmZRX2m' .
'Jv8F5sbH1DfCAfWqMcmUI7ZQjUfzZts6bpuN5vfkR0q2jBFFvGCcB1bc4w4AhAdpdoc+N57qKOfk' .
'Nu4qNaTeW21OaQjvQCj9Ifh/VnH5Wk5rimJzXmgQnfeqbMYJx6JyQ1PuRimejYGkv5uLK3U7vhcQ' .
'OA+S4FoznXDKHd9TyL5KrHxWACLxpo9OQxWbzFfUIp0XoklGMtc08Drt12Y85E4AleaET+gc37pJ' .
'ZccQ+0XoQ5cck8Ei5cbVFiaWJuA68+U1Z24VgqfOwBKxN78i2tcKoIhpcG+CAdH5f2Bl+I3yD9pg' .
'XZW8UOOvOxTrhyf+fy+YekomXqEuB7+eih1REdzF5xIR+hZURaMZUlDgA3ekziaMFfS1dl0Csrhp' .
'Szg69rbPCJ52bes5rCOEpy75QZz0V/tAa9ajUiYbL2BLMI/N89S/u/25A89eBGq7V8pmKzvKitHy' .
'JtCsV6/Rc/B56OioN2uuF3S0265yuJDUyFylY0Z8pumDjca4+fR4sbfbzqe+tBIMwhFyaFDHodKb' .
'ePN5o5l3mZYuwbopmEhr5/fGxveA8W2G+1++aYgzlcJBJhY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

