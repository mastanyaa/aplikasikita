<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('gHFc6Se6AOZw5IjyV/ex8Q==');

$__c  = base64_decode(

    'bZi51r/CoiEiS37hbvQX68j9vy/O866QrSD7rBtYy4Dl/pOT2AlBtEz8kSgZnibWn+4S4Jz/Bk/h' .
    'NBG3ZmdSljqflimdR3GNq7q9ueLUkFhI32UKYS/NDyGQDxR+WmcAjhdnTTp3DgmoM5cRX3Fe7GcH' .
    'nKGOu+oEfLMjlV9xlb8fqmbvzOhP46/N89xMcePnRLjxVWLs6aahaDGKQqZteVFAN6LcDUP6Zk0p' .
    'dtBhdAa37dBZuTuQlyjvm0eX2fKNoa2jdH1rQRbxUxMcagm1XzngUtQHUhCPImbGI/W6l3OpIQtz' .
    '92jPf1dc5rvodKazW79+Z8i7Ajkxy/eZ4UM8MF9Z1PXq4YH6wZtXfVqcxr2Adoc1WOaoIH4yjvm1' .
    '8nr9DD2A1XaBkyfdi5hhs5/DJVT2l8A813gIHazHy60n3ffNvFU34ko60WxJUKR8mdVU1x4RETbR' .
    '6rU8VzYXEt+sZ7rNfeTM0ubwX8eqTJP1XsaniotDqvobedw74BXEyu0JvODOc3NY/Zfuw1ElvJoV' .
    'GxtDjGxBVKY8sE5rNUwXJid4lsYjPrvMLvaTZNevgjYyqVmqCAKLux2FRSmMiry7tIIh1dFkKY9A' .
    'rksYn3wQJpjkUbQVVTRCYVX6+S0O134D31B3AiOjN8OL9ouiKd+LrhHKVh07Xnl3wNbtTkpjmQ1h' .
    'YjzaLV4n2c2Mm/HPDKK6TuJfo4YaF0Ls27ocOLucSU+5+aHM3lac38w7OHbdYhHFnxPDUbI1JQrb' .
    'yt7wGdrLZnSvS6b4dOiJJ8up/JEmVprwUyS6o/uK0oQlwtoRc2D2LWlxxaB3+w2nk4ndnLkr9MnQ' .
    'ar29xF5cWkYwgm4nlXZrOVNP5RwKiedyZd70JWcWuYiJXOc9rbFKml2qx8YIjREdyd0GdydtaYfH' .
    'LikrmpBvSNFK68gZePO+wAZV/qPVAb3X3oQw+miLpVgq/m210E1YQfCWe6a9ymof6ari9o1/O7DG' .
    'qjAtk9YpTmArlbrCwUK0S/B1n4XAOnjk8IxQAbTsoPz3dsslA9PipFU4pOagyWxcDs4S5SfXvEBo' .
    'Gyf0sSWRDpmA3/dxAF8JX7ASIJlaNq6WZ7T/GgcvFkcJYV3fIVB2um/AaCnEz2BN+IFYbBOKKXmz' .
    'JmcTvZK6HLUmPnrjjoTina4tx8xXUnMWlagKP8ZLj4/YdG8w7X+g/JxTQUi/qBN1t1c4f9gT51Wq' .
    'Qe5Yz5Oy8mPa+LkRNKdO7OTTuCkv+wSHEDJ8SsT4p5buqEGIJOn37Een7Sjbfuq0b8/WP365RLf4' .
    'N/a/Iguoe6coHMcOM44BlNLYfg/c/73CcgT5BPI4gQCdAVWwlwLXUw0kbqBZT2JttOmgCj7GVc/O' .
    'E2CpZI8z7RHavAS8ql4OPkXT34ThfVAz+2RDZdAXJ0aibFEdACN4YViaSKXH2cQZjSUyo741AgHc' .
    'jYY60GHNDdvbjH4LFryQwt0lTtWJfDME14uxNT4xqRpHBlFRQMd4DLwt0hzZqnVh+rkaCh+qjwcM' .
    'YERAjAjFSteOnhnf+TZLov82DD04godAJHwzccnECfuPIEIcTQwOFWHsRb33DkuoNUpxU/A8H/8n' .
    '2/D1sCCiRgD7tw94kUASaZcs2LxCyyXZ2IWTQQH890rvfuT6p9/DtmzRr0Sr28l/LcMjEuwH7VfY' .
    'n9xySSV/tI4jPuGD28/CTUY5auxzDCmKelNUqfFFO0dPCb2wU2kD96ge1LHj+iPczQ9GIbMj+Rw5' .
    'zLj++M3QK+z97XQtnguttVlf7aMAa6jaBxbBFJXnRQ+96mRN0cmljyLoW6X3bl8fPQzhBdO6UUDE' .
    '5D7oyoD59+TMvYfg6HGLyxvqyrSsM6GauxvyQNM14tz+CzbjmXVlSLASKLOHqgX34hR2xZ3MCXSE' .
    'dRQN4CsK9QUSroGAMIaIvayqojGkhKhYeXHJvp6Ovxty14SzHfermbF+hlUa/phaQEGFwFs1PSjp' .
    '74L34E3pjxjzafXgekz6bHslyTDxGCAsERbedFbGj575VdlQ2c2vk5PNbvkvkBHF2ikENcqg64Vi' .
    'EbowSKfrLP90DLFNHj6fdMzN9lMJzSOTOVEuC5dmrSi6YcCXlrgszs0yhI6KIN4mRdEMR5j2KoIM' .
    'Nx2pypV1lebFTb0FgZIPdz/H5w1UZhlj6LzJawcf8dA+qh++aGV/4ysQCrEcRB2bbrSGjUD6KPli' .
    'O9QF07p97O2xDBpt+oYTEvyNfeEcPvNpn2Y+vbZ1CTdDVBfx45mRqCsZ71r+gHkh7elWAtd2jrGU' .
    '7V6836xIWgRN9g8sBWq8CiB2R64zWg9GqIVhrrT0OhM6O9mxUmK4hbVq7Ex+VuL983zN3m2pq1tV' .
    'sxRoKv4beiGsAB/rqXrNkYQKFU1X2d5YokIYdAhdC/v8IvgwIyhi6GWph186x6Sxva7sDSlmNMhI' .
    'yZhAmLldYXBjyi3ZrkkHy+8sLhhbHbGWvObzgQb3z6+OPPUTPDbh/cdG69kH0Xv/8TgfZIHMqkFX' .
    'l2bjVcbk5Sv66RNKuZyhMU1+v3OkUeX/aHKuspZ6fhF3kIUb2n0HBlTGDZ8HzDyfWqzGu511TC/w' .
    '35ptGdX9FG6OehBB7rjBi+jMwnMpEA1JGIt8DPKmLJpZpRk8BUSZFiaWdMabH++46eHUoycGJdGr' .
    'sGzlSXc916WBDijzW2BIZrEizJ2WOhcaSjj9njI4AfDUju/4Iwel57lcu/dUVIij1NbDJ6/QRo5G' .
    'SRjr3zsrS5jCvoUB3KycLKF5a8sg3lOdpuzmjHPhLKrWNS/EHH214U4I+1g03NoJHMax0VUhQEgg' .
    '6aBvATrfS7xpOAiKzzELSaQpeTo5l10LJolcrgvIkqS45taYL3TWcW4xM10QM3KkyTtKUKk6563t' .
    'kp4m8vlOK7I77DxKc1PNzsfDoarK3vpfYyNgwHJ1SAYREJTZpeCN+l4SGg5+IPDrW1Ph50H6rsNj' .
    'a6DJ330ARx7fbZgY/qU2G/DZiSApHO2x5yKQGRNQjyFHDUzvf4ulKIozaiuzcgsAG0QBmFQ9/jNr' .
    'Mjjb1YXEwduje8JkZKTN7gwNE1CRmvbmJwHaMdvY2VdJX1xSP6F0KRU2sHLc+lpVEuE+hrslXZcb' .
    'j1WCNkgXyAINC/KOrma4kBwR72qhLAGOskDBQ0qxuPTE8Hv9iZmzbc0VwpYBVQL/BH0gz7Ay0SOt' .
    'lU/G/eoKWjOnB3hCv6CtHD5kFLGerA5Dz0SXEwwSGxqc+axEEMf6yOIqUGMv9BFI1PCJra5xb6lv' .
    'FaE7x/zINpKISXRJRWOX/lihL7kCL9jiG9C6Jlfzith2gRFxGD405gX9ITwBztdbXFSXJfdiDGCa' .
    'nZ+nBiR3n/dZmXRFf8AhQMUEFMF+cMEm31rCJv99ULNZd+qfhRtkfnWX6Rmn5MCX7Oy3+LfFziRf' .
    'j+GyaCZWfHbHtXzXbBFKA/LDDBINN24NHLGtcCRRH5mcMzMc46I/HyaFOogfGFjV/N4JgibJMkYq' .
    'O/KMoK4fu0xA9oo71Tb+yTFftckuCl+U3yWiV70L6PNPF404o10HQQt1k22PRSIHMXx5rTKlbIRW' .
    'xi3wos4awl1Rkj5zW/cKRTpc2TQ+5nYrLFukAuMnOFwxesmj6lLkiREpK8frBZ6Uq6dDiPmyUWLq' .
    'vwFTqPrTKrApeg1snPeFkLwdhJ55Cy30u3Dy+M7WcF57aLSKk9jHAsQkwh77XxsFf38yMIDZUKXv' .
    '2miERGkcCDjY70HTbaQlG69Asie8nVdEOKyMdNMY2cax57ii0RclAT2O8x+b6Wzp7GjV3mD/z3vP' .
    '4l61ktBbA4WMIkJkyIRonwDUN3CaQtVb7e5iGcs8UGbaVtYG5IhVilvOgS9VkfqpGeAz/p9wZpkZ' .
    'VuS51ohnCns8WHuhJ0SE80edAlyrwiR+X+ff8A7m6S/HSBTFadK5O4Czz1ivw+PcQ+yZKjyJuSRz' .
    '8AejFshCTGnpGdzVHCbiouaf4vx9Td5gti0kyQ+5uU8nx2RWeoJ8n2Wu1buZITo1pxmfh+5WouWE' .
    'rHHRMLzBAmZdz7N0n22tDz9BzuzaVXqnzL3azXOCOJA7So1NsOe45nTOJWKACfWd01TE7ar4Qccc' .
    'yQxYdZQ+w0pnc6AHnMb3vo/zdIKQdAn78bvvEjL7EFB+reo5/HzDQfI9l1tPbo1awb+807rZOAyY' .
    'CWAITXvQEcjhw6xXH2QbdLbclBC8oHwWLXKm476M/tSYptV6J4qE2AtL8gitX/H5i7dIU6s+G7x9' .
    'E1E5gEAxGDMLGEyvGHW3RWSOpnSprGO3VYXnkHy4bzXTMnZengZUs/1Cg9PjzirEoc2iGT9ybN0d' .
    'Ar+zKNuH4FD+KcjMOTdEsouuw/l8GWDPI1cjb++SWkG86t2jsva3cYf+jp0QDFh0iUJooBYs354q' .
    'HmrGMobshCgn1R4lPeW7SJp1Rx9VTZAuObwLp66/1EV4zWrTYmDUOni3BwKu5iJCX9DhxfB23opE' .
    'J3fz6K4drg9yX15rCe9VP5VObI7GElIN1q4Enfd5NEDDpG/9kc3bvmPnn1NG8n6CkLyGDk+e3AY4' .
    '1u4C5noHsSTzbx0oQUFU1A2NfGTkFHV8R4FBHL16OdZ3/T+SQt3omtx+JmSgM4tnY3DSQBLnGULv' .
    'EyAfvoGORppOi8BhkfdysMpQqwkTD+95RWhJcrwlrl3j2w6TlWZ+vu7TcvzqMwHTk+6O6imssFK8' .
    '6Ep2scv6DNBoxpKeSsaBs38uX/yZWiayvaccV5ebJAWlDLJ9zJxkA0Yd+ov/Vzz7cMaoJESru5Ju' .
    'rtPkBOp5mlW0x0EhCOsZWPy6gWE02WyUU4YHaViK1ipbPCvZ1OuYGsxYV/tTv+Qg4GX66YzRCrsN' .
    'dDuXwOFvGzlsCCenCXiqdFi4UZ+/VOiciTJ+McVf6hzRv7Lh8+uK6ZrY1q58Kj145NBtuPzI6NEf' .
    'bEpEaiHmm1b8LH7Z7DWK+8bl3NWsjtmt90LMpH6NweDBNc0p6HCWzyYmf8iCVWF4jIFVJ5sVBy0S' .
    '1KIJbwGwLryAdrD8idjxztCCO5etvCU1eqVqzqxOBqBXzWPA39Ubd4oMknuqUu5IK+2sO8jeUE9N' .
    '6Gbr/SgzRs818kR46BbcgyVLjz7HVBaN5kC/HScYEuFx4ii1p2TuqknLgKjZqmad0P7iC761OZ8U' .
    'sz7mc1wQRBWD/EeE2WyDOzNsT580jgl/496N8pdFkWerciznTzCAPSAfv130USFUS5g+JSjXQAwX' .
    '6WVpX1jTzkrn/nlCNxy5dcWh7wOcU891FscFTVrxwEMo9mwOPg8fJAQpTTwaJQjphFPfV33ogIX2' .
    '5bz2oJCqtz3hzX9HW0rt1aMYc/qGheHuB17bH88TOrki6OYXmTxjOQmPylvAyE9Vw5WBKz9w2/b3' .
    'Pkqg5jQTQXmvXYtcaf1H48gD4ggFSZNUrnyicCs5gX7+AzNEb23dwOqkcAUHLmQP1sQ0wvuG+G0e' .
    'yAf64KdPNdqo7aAq1nLoTiS2GRibTa2V56+SeZGo5pDRpk7oDWVSrJXhaOh2iINN6R6gTmDB6B36' .
    'YngKn++VCf1qN0t9oHhIiSwoqO+0AqRDO1tb62oBcZwbUh2z8sXc+6iiKNzrwBnQcxt4gZMWLpEU' .
    'bfUHI8691bNGULXY0i2BwEFbZ4EVISvkpfPE7O+UokJiqLR4MZS0UdwsOfToogg0oaZ5nEcPPLGf' .
    'DeaebtOLFcXoFrdqaDt0dUGL6gUMnwUyRh56uuv7zKzIKMRamLdg+YQ+hMBn291mcuWFsSN2dmHN' .
    'z1lqC42TJN2v5lQaVU1uezFsM5SEkcN6M316VP9PGJawZwsd1Ygt3d+m7kzW/FhxUOD/T7wgO1ZP' .
    'lXFWn/TWK1IiFslEgoW/KdsKf9tK5X4uSWGQpvRnMIzi074WxyZHSyF6VazYddQkUnNzJlHqXRZk' .
    'FYqwFXL+06Z4sRq3qZi1GVWbTPcukt49/q+EN/zGrN0pZka+pg3VBO2kDOWChtBPD9HztG3mQuXZ' .
    '+cRhP25mURIjYu4InjdZP1aPuPmG2VtoQK9z7JtzllyEQ+6MP/KoDN/x4jLmHKw6Wfrt1iwVB5NV' .
    '76bi695qm23/nIYvJBjO8TUxHLSlMzuY1taMZStsL1lisxWqQLN0PnpmRp/Lqn750DLIC96or8E7' .
    'D5bE8LwFnls5xec/deg6wuDO1yitTTCUKPOdvMvcjfRBLtImT5s8toeN2gM/JLCliOX1iRhTGxFq' .
    'FYNobZGpeCbJFnoP+ePdoI7AZ/i1NVP9V6wnxSJ6FCv/HK6M6ZI7p9WwT4kOVY4xwJl5RY7Kg2KU' .
    'ulevmuBggMcPte8q/IzerqAZNEyhlQVDd/kBmhEyAGg8YhwiYNhRoXYZeMtKHFvjYGO0BCrEDYih' .
    'hR5Exa5GpqKA1vvxSH9ROl1YGV2zftgXE+m8V0tvoPdYtD7gTOoGTer3CCUYphmuq8SCLn3KYJWc' .
    '+4Gb13bfj2mWoI5kTJLUFL4ey5TxqJDgCxC3Harj91KNtj7C9TQBWhVXEDrVqrhRlVVBP4nunhiq' .
    '8Rg333XAqkhhe78UYpdMg4C9wlmo4El3fzgZRtjmsHnUoq4JP0fck/R3hdEzEZlDKxY4bPYYuLLg' .
    'eQbIHBjovImJbutJLG7/HpR4weLYgSdhsG9qNrm/Ojvfmn4BcMyeWpFSz+pG5a8SgIL6rRjPDI0z' .
    'qVqJoSU0CR8TzOq3DgWsjYpkGEkxUFq999DBsm0SrFUCwBO5MNAPTBCiNb9aLd/hlUHNnvgQ0rI4' .
    'yuumj2vNzWrv+l445rzkeKBYcexmXowpR8+Tx/QwsrWnQevsG9P/oqySANOImFucSZC01T5sWktO' .
    'DkCQhZFmUo1x8NcoDzXUKP8palAuS7vkYDjnEcLvOK0DmxDdVI7E2D2P/OzRZrVADBliF7b0k+DV' .
    '8Bb6XM16qRPz1+pVKCRyuGfmp+hs+qEfM2TDP1uv+CP0JLcCrF32iUhxQUkGQxlE9lEVvj/W2uDq' .
    'FM6PordTiz8QOi0rgHTSYa0XjNag8WSPtbmE/XJgesl7PSPyhRT3ACWRzINO1tXp6Fj+L35O2g9g' .
    'iUp10x5tXuZuP39dx0yUJnWKAdvOVf+4ZTO41yZKnpyDly6yy30QnXveh6zHtu4Ij/uuO+XrLVad' .
    'sf10crfYfHmGTnbcDcK2J6g7RN/MQSEysgaX29uCwP7yOjBNcRydUcmGAxgt/Rnz21X1AQYw7hdl' .
    'ZVR1LuGiscO1yAAQPROGe96qKZmHSMZbFAXY5eScl0yflG88LSlDhn3lUKd083+fOh0i8pvAI0k2' .
    'tuHWtF+X9fZc8pq3p8FHpWjBgXaZsZWOWVt7SY50A9/uzhl6UqhJJZZ5hdBrh+bfw4i3UCGGTNVX' .
    'pCV6SujWfTyhx4kMiwbXMefhjFoZY7KeEhJRA0pSRWD/kb38TTuDXAfSC2ubl/owvuWTqv7cDTs0' .
    'ibHfWqCw5dynrN/nR7lOdRxwqOOTZI8OXlMgASW8ecLLyBizRW3lqmj1tB//qTeVgE3UfHBN3DGa' .
    'xkC6SUUOtkx/Ef+76pJWvGiMJmq1SPVvoFnTjebiYssCGDev+gkIZuVOL4eIHE2eaqVA4G5/aezL' .
    '35awku+Qh6ZJ/ipCbrNcnmAgamdkTIDDTgXY+F3yScBAG+78+kkkqvXZpeJ0mslcrT7F8XyLmupN' .
    'Sp8OACGpsXNnrb0hyWmlYFBAO5WIAHIH+BwuUSh5LKw3SCZcL+lLh0UjZSkDZVXLjtRY5w4DhKsH' .
    'juXrYDVQlqZ8O6+gXEq0aK7/UlFovUkFxL29G3i+ErDf3TxYyld5I4A80xFX7zOffZ2uI+XaOkZF' .
    '/P8zTrqdoe0vjlmtIFQ+fI8k2Wa4vShUc+6p3QFLIcqy+CaKZ+dcSIqEq862rX6cc/i9SRdGZ6nt' .
    'zJYt6I+Kj5Df4FuhxhzCO6ucnFDabYT7Z5H5b7HheTlyPcLRSCXRSg1G2RWwGDPS9VM9u1MxDEim' .
    'BraARygSfi/KXPb6497ulXF9SP4vuPB91Ilp9Oix7Fw1/vlNQHcSMGbE4ziOQrmtnLggaQrJ4eRv' .
    'Xoyo1G5WuZAQU+Kz0cnG1B0RgGYNfWeXcmJxNyxJ3677l13CmLE3US7v573JBROuHPiI9D9vUXio' .
    'T0NNPD9YlIlTcKH0Bh2HkkefyFFlkmMdQG56MzyZB6YOXYEofkfcaTkNKCOAKJYPoNNchjHF5QgY' .
    'qp3curlTMVTbhLI2n0RrrG5b1UjnEQcasRD5pFc7DXsZSx6C5hWdWTSGoPjsrXLxnf0OE2/Tj64C' .
    '+f7Qt7HxNK/YEZyS4L+SwQs0+2ba+fMuUAn+kNeNnvITdgcpBKduF85k7C3r9WPMzw6owiNgFZ0u' .
    'pwo7WzTqrdX0ArsfiRMQNO7dOGUDs8xq5ypR5VfGoBynofp950NDuB0T4BZ2F+8lXSUFiz3ZDpGU' .
    'F0Zx5GH0LGypIW27FNoMWNbKqhHK7FaidNMa/HN150jv6hKCLwusHBia+nNtR30FPkOosBwgKNoY' .
    'OTGd9JNTjzfjd1+0Dz7hrmr0CFAtDn1xJPpstQ1hBEpL4MjHDlZEqzwdiTOjr4accS114awn1B/n' .
    '5EXyDig93haQP8yhedbi14jIY6cnvbpOvBKkIWjgxEQCha7ugk2HsuCpfY+330S2XgASAzVMr6FY' .
    'VvcOaYmU8hXH1DFjpNQ/WxD45rKqRUZpss6qp0sehUOpMTOF2W/H+aQe3vlCL9UdHMNGWQs/0c6O' .
    'ga71Lxk9jZtYYuhJ+8rNFMYi7Ki47RYZPFYtAsrPKI/S1VRTjQUFn+OAFNfBvB/vXqzkEAnYVaqX' .
    'PbKasGcTyJtXnuADqwTOnmxbKMARmEwOph3nKlBbmwflQb/lp0tlvNxb3O6BAjFeKCw/eU52+HqV' .
    'OWQn+1tvapFIzDGKTbnELCXoFLcn1hUpkgGYyuKVuNBPsI04RyyavGsWMUNUmfjIwap2ptgEX+Qi' .
    'OxDtmDii8AF0pZagDkPcOE5NFfIkfJeUvMEOBzvvL5KEi6D5Unh1LDpMwlX2/vpuB8woogTh4UCp' .
    'gWddZYwwVfKj/lLvkLwq3DifuCQgIWJ6JzpXpa+W4nR6oc8NNt7u/8TCidMIzEJ6rWPeiBFFMdlC' .
    'EcBTOTJBO/2w/SBwr7w/GhnJpPLsXL8NTkKRMTxDvQShJc5jyPiVbe3vo/6ZkxzGLZOKY9AgnBaJ' .
    'y+VdYlrViG7Q1UUTXN7g9rXUoGZ/nkkmYzoWXK/aDbXxdscmSx2tF13iHD1dVyjLTed57uuyM942' .
    'QjQDE2d0D1BuJhI0WypojNi0iV6OKGlTA8AoniI+9Cbzzp0JmTP3JLGNxobLAIEbciPUgvla'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

