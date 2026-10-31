<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('mVMLhT2aO+ZQqxna7hlVJA==');

$__c  = base64_decode(

    'IXnkuw7RtGV9DRwl1D2zbYwGnE9CrD1x19alaRDXrV+bxWkOmeNKxAT5nAPCfmajT2ONnIhmyhQx' .
    'pWHkan4FwkHcTHmcSwcyA1laF4nSxm3riEwxhg1LEgmJ5vXRYSsr9i6dI+Y2XBLvkEsLHEthL13R' .
    'iN3p7I8YTPsovGfioqsfM6aoz9/uKoaPoL2xlP8pONA0B/aL1y7LsuRvQuCVJxu/g/q8QaTp3U8T' .
    'ko4lrA87qY57PUrU8crHerZ/j5XBAiaSkRwNRq6qBz516T/UxchOncVSVzH9TGrPBPjqm1pCW33g' .
    'BxzlKi3eQtiMQboWIZrNUttUvBGn6o2w0cD5azOS2qeKlSAWtqsT4w5CNCxYpVM/U/71GcMZT4cW' .
    'msQWUgzVTNN2qO1UIgpx518Z3mnyYnwAbf3IR8h+aOk0vey2aWB8UqDWjEi23+UYgc6Wft4gpFr8' .
    'v7ai7PgmOb6hLGaDMAv9VMWWENcn0oyTnXwfriqxMSdjlmHx+PMgZisOxid6aXglUQ5SrVuik0l4' .
    'il+9/99NGQO6UwJhBgN/Mk5GbXsmDFtHbyPelnvlKrPMTorsamqvU2h5z2Skcra3U+Nih+ULI4jU' .
    'XAVXP9xOmS4wpoCdnEKcmDAtSyiWu9Qgikl/sviMxxxRs6BenNIsyWZvbUdBXqoO3/GrbGMuafmA' .
    'udJTzWQPmLRDNU3gbL9ZzJq+1LvatZVS4EpirwowVRN/iY4QQl5dPAZJamOt4JAfOwN8tXY8kYbf' .
    'LrnSyPnxRYAxsRsJ+lu2FpEbrzXXpQL0I38toIxeoB7ABEZw47+mkNZp97vgARQ9mphKo9LC7api' .
    'M4DBZCcnbSvs3mGEWl9QuZkXYKzgThR+at42niiPoR+05KIx4mMXeaWxZC8/mU/6cFqBxSIxLk0D' .
    'HeVEuxq/4eEizRoD5yiVElLgeSdFxuiPEGqYFTfxfcBDg0GoHOhoJb93KMaMEKFDySSkXwzHvonP' .
    'R0+JGzH82F8DXiPZCUDgvEeZOXF/PgKCNGu8xnd4tNn96COQZ5kkRo3IeTFsPWCdgZoLo0KNguHc' .
    'xcsHdyNsFqXpKXaJs+H2VvkyY90Fc45RzIyquO0gxkG1iedpv7wROg0pCk15PyEqMSQp6Effum3b' .
    'brnH4L5wFOzPXV11GUT0bdUaVhuE02q/pBz9HmdwAVXFLHKDvaakoUERhB1eN7F7SrgMCxUoFpp2' .
    'Z9C3cR7Ku4gAnjfXUxsk0GBwauTpX+vdBG4hLNazgzoY0KUht+z0FrKPDoFi0UWDHBbYCvPvY7+U' .
    '2BmXLXNzNlOPsleD9dp/o4+DLstNSzgXmSsNNqqeBae+mVJW5e4oZ7LspYZhmwJ6DOWd1OdR5b03' .
    'O4+apD45XX1tCvr2dV5KO9NaOH+jiQ7mdTt2/k23EuB9+AJkGllCrtUKzTo3V4h90pkN+gu4szZL' .
    'VBqS4TQLySVjr2d1xDz/4rsOtpP9J6evOCYyWdrl42RoZnGKaTo7XB9y+MbYjv8wZBjZUaurzveT' .
    'qqFIfj4mALxDtV8R7o9M0FShhoXAnwl/ZuGzcPgkRM5ol4RAlU2DzgHzPFvvFcM33Whmd6W4iyNz' .
    'jjf6HGiFxNzQhkZx1aVX4ZfNtoaVHC/gfuTt3QcC5OtITn/GTwdNACZNCqt2ukJAHukP86uaXr/m' .
    'PBejybS18UqqVCd8lwNClWd6a1IPxROLVK3t15vLiOU8fSBclSzofM5eaDR5UPM+kAvOdyNI5UpL' .
    '5ijDj0HuqbhcE68NQBD99XTdo5bh/I5wd1M5Echd0Qhhzt2I4jh7aHCg3faLhAW+OwAZLcCCKrbG' .
    'p5WugAyHeXgFAuuy5O6BztJhR6v3nn/giW6RRHp4LdfsGlJlfYRAOWMDcX83CwqZX4Ctl4zS3y+W' .
    'O5dB0vjvh14PlzRecwSFBD35zOuc6GRXNqSDHgEr9ZAdl8cP7RTPeB0iuAUGrf7thye6LHx1C2D9' .
    'KueDxXrx/I31x+YKopZfsD7L5qBlhjcn+Lk6nqOiLgjWfsDcZgN/KYkl/YEi6/20lEfcbnVFEf9Q' .
    'cA6DlrYcwuf//33xUGwQcG7ZNBqgbv3/05B2tvSnyR84g9VNgvvSkEw14fDwi/jrCSfpd3VkTL9x' .
    'QEQ+KASrjwNdj102xSV1vQ9fpz9eNrt+2IFum3VWiUngcFia0kpG6NznoOg+h6H85bdjAZUH59oc' .
    'COr3yYLbTz0sEj9u6CxpCGWdSdJXx7RhZLwYtr0fRxyVwjQMLylBobkTuHzDbIS02o2fEO2iV0V3' .
    'WYfC3FzFLtTVQUjKrhYr88uyworwFj4oIdd5OaZHIxqtMg/hSbcQE/LOWdrbzJZ8hbsug5U+aRkA' .
    'VKmyJk9+evbskijsTnNKOLv4mfifws+q2bXwVgcvxNBAxvcbrdqnwwbtjOeLZDS9XCxSl90wuyDR' .
    'Hs7boxEaXghaZikAhTxyA4OSbyTMPV+HwPqQ6xgdzo9U9UKQ5QUIxUL0DCzZKQM5FtPsrR1OcFL4' .
    'ASrwXcqUUdViCnoDjSfQJUpV6MtmaHtoaqDhzFHOpjYCozuehUEq0HVOAO0++dFqJKsoQXNmJCbf' .
    'mrJIO8C48wj3TWZ4rvbDH0R+Jg2eS46GB7lF6AkmHk0eIsG39k8dDwQj4Ti+nGIXrFRlPXZGjToB' .
    'iZ89hPQ+0scQsLBkYI7POlfbLuaGs5ttqzUIiLtjpPHnEzpPNIFM+ZziUt6J+Lo+bzD5QYJgolrX' .
    'uscCke3Bv/cxcdnj2w/cIg+uurm6ff7fQzvYBYhyAk9+Pl3Z6t6P3h6g2HKDzqWRgMH4wLtkAnIc' .
    'I0ZmxMEiSeyUuKtxN4qInIbEb9ZVv2momklrpfcA/u3hzVoxrELWpWZpOk64s4Ukz28nal3u1KTw' .
    'OOweAEH8gbic1gvnpYlrkwb0tY38BQ4MoulAeIS+Cy/eFqU1bThn7gXXcL5YjoYNY2QNeiHzsUG7' .
    'H2zGTlxnkW1OpW4JMlQ2oK2y8UtAnMzINs3dnfpYGvqveIvP2dxrbVe2p88OzGuBLEu1Se73DSvv' .
    'Wqg5ncCsC2DbLXff/oYRO2zecp8W3YZ8Irgvy2HTektU8WOJgoO2T0o3ZwEVXHfAJkTe6SPQDMil' .
    'U3BkGBwZYdS55ExasVBtF2Dx4xBFhuPmWuUIAq03qnMcKn+IZB5/kwAswbfqs7CWcq+4l/h698rh' .
    'XDfW4+hejMCpL7n3dm//Zm9EmMZjuPAU5CV9Z/WCCS9vt3P6vy7gS6XPzs8o9ktSGIxoR/JrNxX3' .
    'etUyUHvetfk7lnLjyZ3Wy2UgH3KI601sY9+Io78M6wOpunt9ih2yJAn9g9CT4HhwrkFwdrbAb8VT' .
    'sAuijZc/Jaqjd7PRiAyYFXuR2TF6kmGO265xSKev3t/qBtmckX7sHkt3lq4m9ao2wUwoAkkqRcl8' .
    'Q60vO5z4sDOYtptHrFnVaBRZd7v9EvnNTJQSMh5Wosv4S1E69MReZgEfiUsMBLeR0OO+wWcCg+7o' .
    'gO1r7O8Ccs6Suma7fpujqpfCDgAY5xoFqopUsbQh2Sv78IOkCb9M3HAXVLXEaJk47pjBWIehlucB' .
    '+jeUt9BC7i1rZ5V2x59ME8AcWUu5GABXJXX+nMTG8wbxz/3UB29jLDm/v0QmwvZm3d8oZsBwz1a1' .
    'B1y4Rn6yTC7qqUwqcja9frKOEItJEUKAIuldgrfoAvhhl1O1Y6rxE/Hv513Z63XWsnFfz9Et/FmF' .
    '02ivAU0apSkF+jhYGutdtI/GyOw8M0H3HfUvs0VpRSZroVVT8fupdyJLNaICOMzEYdaemkAQQFrT' .
    'YLut5awestd5Wi/mzdZPhdUbAKqvZKWlHNbEbBnXviRwqzIb6BO+IwHjTyW/7ouypYpDv5bchhqW' .
    'xXICbKiP6nzYpOaiv9oocDbRS1pIVylq3sI/g/ImWxmRq9HQzYTtTqG4P7TMAtGzcpk4GF0yuKTR' .
    'uNnAoTVVSHDYmDz+7x/FOo4iF3M54o+PtSeReA2c9XeikIlsDLrCkz39/W7KzQlBBCfldZXb9z6q' .
    'NTTQsboX6f0EfDMrQ+q+A4kwJCKLvzWvFekERPnn0NKunrxwL2LoKxLVIAVt9s7K027WZn46DZQv' .
    '9nt9ObJt/dWsOVzQzIyg5LS7uDVdQKK6voXN2t7Xg2/zwZRUL57EMEsUIv39/uFjNzVZfWjZsh4B' .
    'GHlOZx5JDTGq0g7G88SUTzzOkthKTvkq0udkS/wXxxIvE0hBBI9JfYwX3fvd29Qpm97diJ5ExMPD' .
    'Gt6k7nXbdGRngcZve0OYe1ucbq4K0BrNK42gMOCMIvuo8zIGIGoddbGruQdHoMGnI0KwPUE374Cf' .
    '9cbY1vHYpjJjC0pTfaCXYa/gGKL6JWDB7f3Uw83iAfZGIx1PHOSxAKgeLMUNa2xQeW5VhCHJZ031' .
    'dWu+SHNA4Yy8wk+Pf97pvfhPL5dcNwijUBHYsuFAyBqTci8uKZDdEcHltJZ3QVfTwcaPf0KZjl14' .
    'ZmMOSAXPAOoufJPSBqZBkxd7qQbHpgQWg+lI4lBNgbw6cFHjZKWYRxUzFj3TPsuginmE/Ji7jjBG' .
    'j1xJbxMD6cdKNj9hEzg/7oKNLC1BqJbVEdGcvF575kVyrzVcuTgGos0Tn09NXyvJec+LwMRKFduN' .
    'P+9//HjykyXs0KiCfyi2+jgfQG+nkhUKVYijlIIP7cwkSa8V9zz3Qm2x8UgyxuqYozwMvU42u4eV' .
    'y6tqRwxh2TZMYdooRoPsbI+38+7y11Q7tYGar7KkEburchi7IFYpU+gglQmVIvf0Z01EVJ0Q6QHp' .
    'eAUwOjIMNDKfdATgC1cWg9+j2/6Vpo20O0Kop8Kpzx0NdgRGskFyULmm6x4ZvD8BCvDvaBJn3T6k' .
    '4+LEwLjnPmY52muv3Kj2MejhizlV7J5MPlTxymitwXCmVGzZw3WVFIMT1PZyOWZ+nq7cyDPpHiVG' .
    'PJwbEUlF9M5EtvnRCazaXoE5oLMmyoWNJD7uPoneKIDWUnXa64mgz3DGYu1O+t7cABvYo0V9+jne' .
    'WNeGx2rJu/ZZe1qCAhaC9NoK/4iaxvLjLtX6y6HOQDBNJ28ltlc8a77vCJ3FdlAhBKq+eNX47f4h' .
    'f4G6X9/EAHOvopCmk3gdyiY4Yd9A3ur88csSAzKp23EmnzzYAuPLmzf549yfw6kubZIk6sFPRNiO' .
    '6SHDPsifOSyEZkgQz4ygb7W0IzExm2lVta/SjQ7tVwBXUq0EI4gwyYG0alLys6UUdL7xYhFeQGT2' .
    'Z88Vy2+td9IRYqXGM/mmb/mUvgHBillU8yu1fBvnFxawzTlKWiGUIS83dOfIsBxyUaI+cr8xCmC8' .
    'NCTHsEYuCT+oe0nW4e7V+Ky1whg8LxF2DSnGemdXEDZLj5OlzdA+Sm9BzSj87Pa7EHGE55J8Lqjv' .
    'Zi375A2l7fwVu3KJ5OMluRQa+S2jF6BgMgKxU0bydqegrNUk2DGlrKVUuuvMuP6jgUts7KFrbkCE' .
    '3429mbNNMbpnvqS9w57M3bJCjaMRz/2UAr9h7OILCdFBRZW4wbog7oAoalKfVNgFFLbRFPD0a/0b' .
    'u9b9MZWhnueT4ynv+WJRE5U3O0JRi372SAuKGvXU+aoOXFwvH+Oyh0Fnp9I7ePUhjViSOasdTjMx' .
    '45ikszSmqyD7oD3nQHRmff1hX86OTbduvJyJS88/m5nbB3pqxqwWstSVNI8ZBu22jLYYuYik3Wez' .
    'T7OgbUqXW06XrB/lWj1fU0vWmBdmiPKk0zW4lii0G1/ndu5IH318/Z3nrQz1/ff0QGGyE+0h0xZB' .
    '0MnB37QNtJjN2xM1iJ8I7m3Bv5raiD0EQomLG7hwR+CfDYBzaiPy+NCbJPZtwbFb7PguF1/xRxtQ' .
    'pmEL9wq87Y41pCxRvmkjf8tbMNKqTViP1rf4AWXSNHbcxZahdsHSUsUegn2vNQpyq2IYqqR/eYDV' .
    'YWClkXVTSRVqNNEWctYZRFjuJwvx8LHiujO9ivNw4PZYoOTEAcMChf1VxAYoG3Z3sg0HddVxahDw' .
    'KegFqGpKUGLymBQ9BM1KGyfk2qalEeUT/8VJFqlKkb6XQAqq3LxEAFQB20AeSVov4JoTqPZwxPLn' .
    'kTeJcNPVJV+ucHFDhsv61vfw19T0AWjoyk+G10cEASf0JbdamHEvdbuX9n1O16YM6b4I+aAiuetc' .
    'EzjSCnnj2owe5tOHHlRi7FnEclNSNZJfprcoqY5Q+9B1WPqrXv1OTTKyU2DoCoTlin4TeIxw1ofV' .
    'pwScKmXjSR7aAFvZ20mfwDHgdKOOWGNuRINrkcw0uECBAMM1sUHACqLRpfUXQbAshrhklT0bPP78' .
    'BxVc3qk9CgE79CaAFIlzAt1boNEU44RgG+Pb4ss88fksJLHytV67IpbiuM+ltT+XDOL9/gLeYmju' .
    'u15hI/KxinhribXB6BmDVYY9xKXl0rA6pxPjsTm4pa47B80BPlNNyDdnGgPLVBPBc0EFZ2qn1HvQ' .
    'xIKdmKlNbuG+CXxLjgAtNr3X1MJRhW1yzI/QfyRBuuCpK2T40gHfqomJeRwCrGb/CmR0YmgcirZ2' .
    '79JP+XugOlG2/pHPRRfxyxZcu4fapBM9oVqI7M4mCuvk7NLzuWrHiOsmgRUcsWjbuJ8RIm5G0Dg7' .
    'K+8yHAxMrzN5uf3CLntkabHG4DAftL5jeTiy37zcyY9AbgLcFdOKfJK+IdQBsGG8l80DblmWQOBQ' .
    'QiUyTZhmovCcXzoUTcS6aO5Md64GehK4/2J1pYr+xYUH1DhN1wqVC6v/pDi6ncEoP66hzcojM6Ek' .
    'q7YYYTJukbNNjxioaA+o265xFo+lTMg11v1TOZtV73sUBfPMGM/98yIJv0I/IYrkhEPuqn2tQo44' .
    'mcexiHehH1JPa3K8SOklTZgSuHWPXjtiPiCxa5Mh3M/HrKfPuzX0QSNJ+jgV/ged+tyMTb334WEV' .
    '9p2pUjIXvW1JfcEumgPS93U8t6hMEJ3PQOG2OdKo1/S3jOVla0nj49fURlPcu2Qc2n56C/Nk5fkI' .
    'wvRGefsGgj6ULaGAN5PzsW3aAZ9s9QD469Cxjtafd5LAtcubiNTkoQg8tyzBQuCoLt71Iq8jc93X' .
    'yD6Cj2NrxEb+A7AjaT10a23rfdmaP7M3monawaVWuZGMpbw5ElOEeAQ6MPndW5CDeLGE5JY7nsuR' .
    'Ho1s2BFQv3zxh9YGvlZidUBDxJfjPadTRyo4CUVAS5iGS/CxG2G0Udn5jyFAzJyVDUtOHroSxX02' .
    'PNivRwICUUjCVm1IcU28szJXbMR0P4Rgl08tY3K8mMDZW2efy0oF+rfg15qRoOXrXoLChE7UnErM' .
    'GUouv2cRKuw7mnzmffp38RHC++QPsAdC/x/8+Xu94rwH9n1tiR3sIXSZijDuS5LecqtAwLwFGc5T' .
    '8cFxxB8eL/5wzCxN5hbP6NLqOoTYUlUSkALbd9Qrhu2sc3RuzPtO9fwnV9O5Splgy1+1wafKL9Ud' .
    'da0g2wOhpsolR3Tgx4cfug8lS0or16LBW+y5yg8jtMNPX8VseycygdG5v0TkHxDJR3ry9O7z04ko' .
    'WZtbbJROfy+PxiRx1TSR+p1dXm8t2vFP+o6zDlai8RkAKlnioi1PQSNWBTqU5T/SN5YjXqwXXHT8' .
    '6+7Cd1KyVM0IZslcEZLJU+ZGrxOu9kLWozDA7yXgcBuPSqWIg+vQD2Fe8DpwSKls5TdVeptZ8QnM' .
    'qR8SH5NMeyftgNsRwXW1DdUC4mIifUewMKr4DX7IRi1qCi14w8+twq+ExjtWliPkKMaCRPePU3uh' .
    'uQHfg3Wq2epBUgY4NSUgKkuZoOhKX+VKbI8ci3kl7Rcab/LRTurUCL64eqIr47Tc5kDLVn23P2xq' .
    'yPHQ2YJbCroSlZItynPr4NDYemFoEFYQcRnqPxB11MAsMypXRe0avyEOiKE5uGV0ROVdlkrJNeaK' .
    'Tnm3TpQ5BIJ4V487ScFEdDv9WFoE1lOGatkKq8wWJF7s3f2gYNIEjC1/Heis+VR51XXcioghYShs' .
    'hg+Wc/10AkfHcRsvs/bVclJ+s+DqXaBaoSFeXzzvNxVDeiCF6+eMLV1UE/FszO4nq5rvSyQeft2N' .
    'ZqIP1mV172imQrQzAyH5NjQmDNa7pdR5RqoJxTKG7DMwNikWRMBcc3g0bU9XkVLRjV0g6js00JWb' .
    'WJgHRtW6EcBG8E1OEBsGiDi7WVpJ4ctwbblRA/aDKC8EHCklZirzjmd/UKv98IOSFHdE4I4RGFQ4' .
    'lKyYt6rQwXRoJvp1fdMrW85RVEuBlKRJHL0Sr2Vgs1NPsQMaDy2A04HFfIMWE17Iyhi1R7QbMcPi' .
    'xJkxofdVVHNe1QRyZCdXl69KOn0+Ic5zjACpmiKXE+ojbiTERNmc/WHb5+NXzwIIh53FuyPh7ws1' .
    'qslWqdeXfHeMhp+FTg05iFMcc3/6Bfz5ntIkOpaTDSKIxpUqj/K8nkRcHA25LEmnU/ivgaLV0KZa' .
    'zWumRc0LfyLSD9SOTqj3xRoUne09CLVoRRmX0GKQy54krNk18Ra6BRTz+BLA/DHFMXASIdqQtpkM' .
    'SSTeqN/jtZ2xSAU5dfPgrW+moC7cQwrCKyzHljx90jchgdj1UUp7nkWTobbpdFxyoGF80OkOou/p' .
    's7WxNlZLG+sNiUWWPTFbD5IyjpzNgbZ7esMC4NjdaNEWQ3G+RLbWZy2rjUy9PUWQy+kkD8cRqwC5' .
    'lVaireC/Zp9vws83uicNOUFCEo9L7hQ6vivAOL2nqE2RZWVgbf+H6nq5ozENXKdEisfXALBZj8xO' .
    '6Q5Fp8VguNtLGsrfSG3TKZTxBToK6uToC+1xGVxNklL2Hh9kDsWYpzQkE8eKuyJlP8wTiVeJAqYi' .
    'Q1NV23mjAETgcW/KCYobM+yHGTSQU27W4BrubIHWeuv3XG9Nv35gg3hSu7BUGXhDinXxfCAmkV4+' .
    'uMgNBwlTPnxsuxOsNC86Jg50uGr4Zw5d0wZB6bLpYje9opKFsIGbLko10G1Yk7MSbJNekMA4HIgs' .
    'wsGom9LMqKx87JYPsnwnDj1QmbdepuLs/odp7pNzAozZKVF0MGKH1wy9ADo7uKIV7Iznph3XjkI7' .
    '56AqQqhDwbCnEO3dsH2blxkxflKWsvMkqn7nii2+vA8TqrBapJs/B8Qkl+dU94u6gWotFikqJFz0' .
    'uIpCA44nwdLzIhs6lUXiWLFFqK7VOJo3f+XL3a3Xq2v8xfGWi+mnGD/GbvUGbbvtRV+jYa9ytSif' .
    'z3iy6+IFyiMeJ04jUjMo01s1rkyNWyJpkLBlht8VtLLg7uCsO69vjLRBUP1k1MWg5WeIIlVRcp9X' .
    '6BMA+qijwLt0ErIErkY+vter8TN1dRDaaxzh+l/lITwfVHMXxnJ3bZ4Tf0ffG5pdYGsz6lvvXAe0' .
    'ruNVWJoq1exATIlMEDfFg2HaVYR8knMF+OSbSoklwQ9ExIiwg/m95jLfRcAekn22nFUFTYMRx2wx' .
    'HHF9RsmuOv0oTuKZx+fHA8YT2w+e+XSLwYS4itylgJx1Y3W0zd0yF2pqAhgWHukuMdhEs2WqWN8q' .
    'YnZnTWHEj0P1OLfvE2fxB10mfxGSjeVh7ZjdMKAuOkna2cspYem6/fG/BZZqgoCVjr96RK1BfQSJ' .
    'q4SBLnkfxKk4GXQzf+KwJfTPL+Z77M6Wfok+a8oSD9j3JaeiEGN+FQejSfS7Dj0siwktkJVa2Ygm' .
    'Lawq1OWySRHrsS1tFmT7LWoYsjA3GLn6lAtX0gAbdoIm9DnjZrOXv1+eFiLN72tsjUwxqoYd275o' .
    'ow323Muzr4M+5KwhYC/Bp9mwlwUBkT+pPoZghZd9rrYStr0eZRaUSd16hrV4MSKoTFM3xu0Lg3Cy' .
    'xX23Ta8+761ucNXxy63CrvdSV1bHqLPjAmBCAiazZgcVRfYRuyVAOlhg4jCdYS3WpjJ6Cj8rBQtc' .
    'y1l67dtfINsnxNynSpI5HWg/dgJ1VX36Tzwi9BhyDPIwSH4D2N1lLWkHTlrUBeemUHvvIfgADiyJ' .
    'DETqmwdgcNHEYNSxZeSV7tzIIqE611hwp8iBcoYhMTpYKqzWqkWwKH4KYyYErNhIfo6ok4U3r0N9' .
    'wwG2YlSvMAE2dfj95zQxApQmDWuvFpyGL3yNWRxYGvj5GBxOsVxHjsYm+gShWKcpvUhJHZSdOYfG' .
    'Zngn+CkNd7Au5rO5ypyMYV0txf3ZMJAGMFRh3nevgd3YM5bj30/aoL7Xta3zCYqCGcQCZpSbFdDd' .
    'LUB2fKiDpPndjaP7x03rxKhf1lueTMQmNQ6szRoYobwjDtd42Vhn6wa14KKMNn4fDtILP9bEPRhL' .
    'MAdG7lSfjLrm5TsXhMJlGakHlisJOCtMpY5KRQ0H59l4dNIQufmhbHZWvI+kTxDz2a9TVIn88vgG' .
    'UJfOf78L6DZCHi8qL463q0yuxh+yZnzEpDceIY6XY9sC19N7QUt8fFwb/11Bf3jxyHO7jOLmFuk3' .
    '3AEETJGtZ7yCsQlqt2vP42oPDO8XS4y8vf49W6DSNo3NWhBkFfXJ7Mgvz3p9xEDWpA6c/VDAdUj+' .
    'hvTkbDSZn4SbDaJZByMtaL0wQxID9ZGq0tRgfKydLSVrcVEhUvCv+RogBA1NrzTzqt7fxvaj2AQf' .
    'I71NUsTwkSNMn/dgPyrFn1dQHpHHYAwHi64DsZ7TJcyH2nVbbBxQW93kR5sYzddCPV54hB+AL/+1' .
    'D0boL01B+V6OJE1HnbFUOiNO1aDNtdEQWFqvpma+it4ut1D7wNNvMgVq3lMmJp18TCt1eSgokZt6' .
    'MFyh4nxtL3VlY+G0a0Wg2V0otaQAnfPn4L1brkcfaTjVReJy/UZTlzrxoQajTiKh4fxcyZafqE6r' .
    'neKnP1nno7Ovr4fO7HNG5Kqo42VY27IL5YEjCzHU+aDG0D1kVmNA6hw+S0xGZ4A8YKz9p8/NYwJg' .
    'n/m/wnS7vnhAa3hjgX/WgDJ2Wm3K2fV/Nq0F+Kp2S+EMgj/+GNmDUN481dXSIbS1gWb8wUCy+PUJ' .
    'e0NNnv2CX2m/44v4oIhOPqY4NWMI4T9yIB/7xFKoEeQ4mgj2+j1Enh3XEPe44QJD8R0Fepwx/01C' .
    'hjZqRPOTPnpvCIVIaBBMv/p9oBz0b6YOEa2Smn+QIyTb5nXkFUQlEKiUBdhmTZTGAl1YZ+uZTyRf' .
    'FNEoJR+V0JACBXKWayLJ71NJXxNjVvJrSbn8UQB1/bb3N1t1nsvbR1F6j9UGiY3mwFunYOJsnD6g' .
    'qyOdx2kQ4EJ31CJdb29lcHDowMQHBhQVh3pU6lpHul55A+i6kM0mBxYDB1HQbP2rowKslMzPaUxT' .
    '4OYeEs3Xj0Ft6cdDcO9UkEwwifAu59MdIDh2CjyeulEOun7qrUS1RHeiBWnPKJas4Fjb6fPFyOxX' .
    'LF7Teag63ZoJnCUggfiyhz+C1PgV+eW2jAC+6O0YHlnZ7oQ0o/3ohlXVn8qG5QF9SmAoX/QXrv7T' .
    '1PR/OiBYP94SskcQnW6sL4kVKCdjEDed6rcKvpey+NqK/Y8LvHarbwbwR7Pt+U/cflIm9lIm21uu' .
    '/Okq6j5dNOQkoqw50pBH1VC+x4RO2FauIjRWYFzfvnDcoftZf/TrKJ93U30kdaw2cV0Hb42AIiCH' .
    '0eODDVMSC9ezPPbge+IpOOqpFC2H0Wbs8S5DoQenmo5/SgIqRf3CGt/lFG1hu76lir7gbFiC1xZr' .
    'z3TOYg+qktdvErR+uXhcf9gz7m5H0vh7bAwj6+iP1e2LGc94fzV3dV5I9Pkh1jDTPsDxLrzwriSn' .
    'B97hKvhrwyoOu7N7AngYOXAL0ZNRoSUo78hLn5NCiWmVotPxnmGu/6ivyjP3LKXbd18/AsKb2wxm' .
    'ymS6V2EVnrZzubHXC0sORfpnc8/OsObOwge838mTVtKN4msDyD1PI5imCw4sWF+NaOKAbm4JOduo' .
    'yykUmWJtOGqLZMC9meVTgHZD3G8mEHb312g/7KDjOgef0O/Jz2soShMN32VoEHaKfSu6rQ4dUOKD' .
    'y3wlQpOh98vxw1LPAXlO6PicwFpdyxkHqKSz/xPKYZf0ddbOo0t9AOGg2CXfGr6u6R/+t1yXCp8J' .
    'RewQMBm0s1lcH8BxISQ71kO6sSPIJdl3bbJa0E0cyoO66EGL3m708GvIlrqG/HawgGmCYLlaMujz' .
    'BYxKKjq6sDLpI3SNWAqASB/FwLESyg6y647ybYTrcbttUIsZCkFUwaAOOHb9LeDecyl4nVsW6/CV' .
    'dVNmv8r1WKLkOJeOmGg+CtHyo0/kV/L4bxmuJZUUmR+AUMwGo5qsRDuzPndagAK8RC7rERGaIPHJ' .
    '7Cf0i402qlrfeWPdgahFuUEU/1GcpVTl1pb1IsfQfitcsUJwnuzigPWWRNC9DiiNC4u4zBHzzeCO' .
    'XLnfiujreSZpnNWSaTp9zO+i/NfAhCEf0jfkmRQgzgVoywuiP2t2CHMhheCS3g2yJEsuGCP/2Nw8' .
    '8YgQZO3GqCjeIhZFvoc5fCvRnzN7W+lEsqG+bA32jAloyvB7f9ZfbBpScV/ZZ8EbxbiBdJVa/uFW' .
    '+ipmLFXRHQNSCGbcxsNtQab5HQZmETFAMSsu0VQywXUKSpkBLPSJLC/pgr9csGJJ1ay1AgrIVCzd' .
    'u81ItbyOCuTNk8L3i9gkr2EVawrwzOiCL0+jROSP0Phta9J46Tlcsr3E4uWIHiBV5WEiY80Zwg8C' .
    'DX4/HaDVYIkKP03bdJvBbrW9wUZei6GpiVkQvYJB68uj/XHcbtyvSf3/BXiB5z5aUYIuFgDLdvmv' .
    '7dIibxq5FWYtznOs36AZId4EcftaS5RVPqED5quirdCyxT75D7JjJtnj6uJrhWa3iDrtL+XWCpH1' .
    '+kQdo/ePkiro62M/GRaaiKTogxETtWCxLiwpfNCl12VeU3OJWzfPWqw10OPcPz56BdEZdRxdq2NS' .
    'UqWj3hG1xtkgap41gZCYovXyqOg5HwxU/ocNrdSVp1C0MTy/W65lWeF6oUNSYfakpeMot43gLjet' .
    'DS1HE9MGFW+KFwqyHOwcv0q69PLMdN7AyM3v0p/W8br7zczDtm1fIk3slaTVF85XnnnsawnWUNJn' .
    'Sf34ZE6Hd6Tq1mYjWpXgFq34ihjYP8DUoI0bB/GZWSGajCxZ/jwLxxp49962YCq3z2VzAjC/NRJQ' .
    'FyJgsfF5pw9zI3tiq/aItanDDtT2dPBh0ROy6Q7FXwDZPJruvgkTLFz+dC8xb6XuKFU2zaUyIJmm' .
    'Me2F8aEe2nWLQ9oTYOpaQMBAKIfKJ2Fdb9pFtWewoTyBvgiTwuEJiySSJwi3INUxOryv69G+jV+V' .
    'e8AR+Og31d+8zgikHv0/iDD1Se6IQyz9HU+HzFTPJBO9opa2d+/kVfFobICNlHK01xilNRzG/6Th' .
    'QGEPc8v5hPm4HSrkaUGQ4YQooS8KCKpebcLKl3G3kiMAD1dhGkrLshDUKEaDR/uqIXklS9NfVZix' .
    '5pIQoiXtknfnq9gOwdXUW1Yvh/eu5Tg5GJfj/VERN60NfzCOJbr3NwDwAXUt5lkiYyFdotnj57yo' .
    '1Qx51xrLcl9YY8PWAguqJXYKpqM4uqH01YK0Z6GneWtVOtqsCaIrdTxMTYUQSnDscxYvR75DqDOe' .
    'DDYysrSAmdUUEvPMiMIcXDRC7VR822DRJVukYD1oecVJTDARwzH9nY3KVjlLu/h81MZafqOJInPc' .
    'GfVuXKU5jxnhY/p635B1uIJGPM1R4pn5pR/rc1EGNYawo3hxTuZBPmpRtVN+8GJWqm7yXBgppZDC' .
    '+4rfYk3UC6lrRllITYFtGwSMWP1Wwiy/tyh3IZy/0QHOTVJ3hMstJmyDc1b8EARvZnyE6sXbR01K' .
    'MiAKQj2KVfmZozRYbh1Q5zAmvdULAdPClgOPYCcQ9Fj900ZMO5p6ZTEon79Af7wR5Rj/hvziocWz' .
    'vb/ttuzjk3xNmUj3pvJcDdSUAU+aY5ueWnaqL5Vv+mp+mQbiQugh/PzAy+g/7De7hN+84A8guklW' .
    'PpIeH3Dwg3LziLDzV8jgCk5xZyD5w97jpe8F7UlWnHKrtpYkUkVUA1Hsw2r/sD5v+rzt176jjB0q' .
    'j4qmkqn2G2S4eJE4Z1SsF0X/ortOzym7HM63HjQ0HMLLkEHrEXYBgSfYxA8qQmQX848MxyKsw7Do' .
    'ufL8sLdeb7PtYBSUA/AgoUX/pDxI28NKS/8gZflAfhX11AhUoiIhEYxUvaXJKiIuiEb/HzyJnB3r' .
    '/q4zcRmNkRodsm+BQFGr04w2+S+YabH/AarS+obu0M44gK+oiNUBpDvWW3HP+T3uznCIrJAxxREZ' .
    'inkbixfy6WVaoBPTCpx4N1dlStTL39NltDBRgZMPWbKcvF9gfDZwJrD3nN82E0lHvP9/hhk3fH0Y' .
    'W54lkRhKQO7pIth7NPZ8p9WlvMmL9HQu0ws9gfs7hzw5qzYTZY24DMPgAp6ZvKK+4gx7QSUJFsxD' .
    '5Nejp24qVmiDqjDQqsoBxzl4cpmY21JLnCeiXkSrGHGeMmiMQQ9p/1KJnnb6Zb5uuGV2wtdduQgr' .
    'sHjgO/LjQrCWJHVewavSt4YiiJK+jfcuDfdibgMXiRF+fGFx5tKZNSJA2RGHMG4vUnas8V3BQfiZ' .
    'ChgRm3K6buWhd5GcAVRP8Z/Z3aVJVM8ZCG/vvWjk4mDd/j5kuHkr9f0KKPrtVaYeg7h5ONbOtbGS' .
    'hR1ltddCbl+vVgkdTKQDqZXJ0INowvnS8QZU9waSCTo4cEIqVyU6EPxBjobuHmokGAidyjTNlXcV' .
    'hjNS3IDtG5JnLROUv7fa7nS8ZvPWmdAH7nN/JdCGZS+TKkUu8R/ZqJHYWMOnM0ELG+eyeDFgQ8eH' .
    '/Tqs8aawAiWu1NcD2UADAYcAGD56NxvsI6z999F1ATB6IIo3kVUs01aqRrcKmbcg8oCld85Oaz0L' .
    'miTmpt2yMNUMbCefyUJmzjEnSWd8jvo4Ftf0QbzBJBw0k8ZroK1S9pLV2+wEiVls3MIis2zLtrkH' .
    'nMc1UswGMzoWHa0/Kdd24b4SO+zTBtKjbnUf05ofZol+pnwDp5zRdSRurEDLNE7aeL2tDLuVvatt' .
    'CHUaoNKBWkFGAyw7ihWk2O7aMi1njD8zcMmBiCr/ekCSL4+x7ezsIaTQR0dXuWV226rLd76vr42/' .
    'dO/BGhEA0R4CHrBbDTzf4WEdHw9lxwTd3WLs1PdmjltOC+W38jhS0XqnY6fjUReKtkGve9mD2nui' .
    'DxRI/rdsyXI0/e4MyGuCQSiMowQZtcmVAqJCa0s+lkOWTEfxc+7wVlIL/TnbxyuLHgX/8jEpJCep' .
    'fGjJT0EOvNFqCqOept9ZNETe59SC9alBKCFfyPVH1eYQ40QOvE8TJ/rZLwCOHMfpQgbJktopOe+N' .
    'J5TLlvRKekacqWSpYLVrlyU+jnv/oykI0LHAsEeMikhpEUy2HaKzBqp4rrdQUB9yCOhihes6I7es' .
    'KHDbmjNiykmWboqA+iYxCjoTmP+Tp5/yX96PJl242vIOu3zooXkAsbW6krRoxmg4TLUg+XmAerEt' .
    'AtdLg5A0qe9tBte7Q6pGehlw8RxaQdnPRb3riPUSKVkgJETme2Ijogk5Ppx+X6z/85wOKGVmLVtN' .
    'n5ssjHXCbwvLvUl43+j1TcZGfHQ7k6qv5Uj8pMpF1HBbIjtgEV0nCnfzB/flHD4QtIz62IZHBLbt' .
    'BdI3Gj7vjyi+vKQQ7VAajt+jeRiwc3kk3VAsTW88S8EPwldMSJdnUKTX4zVffYHzPp/yzZVwNeQJ' .
    'mYpVKNyiVs/Z9CZW5TAbHp8Wy6FGERm5EgW2ul+IA25YfowVFuvGyzg2iOxiYH1Uomsdx/pRvCHu' .
    'pZqiuPTLuiNFKcnqOLR2R4sV5Lq2wSF/fQsxdCzkpgImfHbLuC6XJmtP75iB7LTwgTFI2vjDA/CJ' .
    'SqftQFi2EJ0lS0tHfsWTWyz6ozXsaHAM7Iv/Cy8tjx5FXprD4gCgaovsP7x1ms/ygr8dtPHY7QID' .
    'ztpK61Oo+msv/Oht2Tni1CkL4d+MjYmAQ9SfR+pXZoTqqaSoqSsVprpspFvBTjkNCvr+a525JEN1' .
    'kudRZcd4tyc9iVOkcTybDcCE4fa2CMrfyLbKaUyc5W8Fz2q31Mm+Ew5sKoyKswYOUbj4+IiqwQvB' .
    '8XpQXht9ouBoVcfL6kFW+gfXCJTpXhkw0vWzJlqVLKzw/oUFO5ZyqHQpnC3cagy0z+fmMRlqLj1L' .
    '6MWLYJYPo2iEo5VA6lswUUYEYKcR37WH0XFEGGIEbdExrRNuybQHIB1zFZlcAuhLgQU63u9UZprd' .
    'JlZKusT3JbZiar1iyU1RCjGgayAOaqZSukRk23kgR+MduMCKrqXSALBib41GoGU7FHgdjJeZVW+E' .
    'HGylPZ1df4+4ZU/CE/ZFbeyUwzHbk/oYiYAYcOof/a6YkoJnzF1IsmNZnv2oRDxHSL2x/LqZxjWS' .
    'SJ+WIGO7ns01wUiy6TT2FpCeZFuv3cTUPMfdEkxA2Fhkn3x8JWNIibSRwrqQJQkiV6YhF0pmxaBZ' .
    'wElKeEJHWsiz3+JmmGjL4Yy0eiHtIQXRS5CDzP61dw6/VFo4N95jgeG0roa8kP+7bGOBNLEc+FvS' .
    'w+akpSe+aIphhKcM7xuVYZzMMVaTSQVTlQOVG5RtnPiebD9tAPPR0YTUDoYFmCCYDzEXzcg7w+cQ' .
    'fug6YS5t5+QIQEilUgPtxq5+qj8rlTl6Lr/42ax8+K+lY00dVUGz9IhMjFj92BDgtune9m7TYQMW' .
    'woV96O6hhnIJzFl8+G27pEkvSoARUQreoIK8pw9nTo9kG1aQKXkYGzrW2mJlsg+L8qZEkIMG8eus' .
    '8gA/d2uNZdyVttrI8yY2yoqBvAcRpZ9HJR19eqxHhUj/d0tWmkp9zmOk0pGufJHe9siS31hUE7gW' .
    'Oi62Z1dkM/jncGS83oQufITM8HqMYNqBE5RwSlA/M4/3alBs7r6SrA18uOp6MiN8m6f6NCljZEDj' .
    'zybEBm39rDLuNOQ+c6Y4E9yvCCMEqqyy9eQSV2JPLQy2eS2j9YUij72k/0+lURaSe9PPGMGqUi7n' .
    'D7ee1n+SAPxa2KNPIqkV36E5bKQBQZcYl09TJg/wEv+rcltdjMUheIohqP3zPXdWUfxU3SVK4Wil' .
    'pwljGWcvohPTFKoq1u/G3gk/2Ga5D3L2O5ZZSApEFYxR0xrCNfmDy9c1FcN0l+TgVXR8MNAD47pd' .
    'ADSwblk949bfvqsMIWSKrDYYJj1MdGYctZVNNWuJUWN88YYyRBovtqLeEDZPMDLJBvLoVwzWGukr' .
    'FPSHW29Vf8ZbNC6RjqAKVCgLr1RoVJZ1FNvWmhSAPku+2+afnc6PjNxAPRW16w6B8OkCNePg4+rN' .
    'Rndn8r/YUy5Ble9GEeZXKozZ3YbpGIFndC1HzY6eipWVnggPXgscpsqelvO6CXYGaPs1gCY1a8VQ' .
    'mAWDZX8KHF+JHrDTsS7I5HpfaAQx/2zzMnHZ57++D09oiZh9lzxHFaHcHR9gy4XjEaKVYKxPhxTo' .
    'UZeIC3B4klcVUWKfrcPZ+n51WKinur6bJv1Xq02YV8rT+cVDVU87An6QOCMSrGCwvX8mHgAmdPD3' .
    'y2SjWxA2R+9couG/OZz10VMrX8hZ5CCKAINUDddylEH5pPqoa+EpAiAqZrfkLYK3QC5nwd/ymX22' .
    '2cojTUw36LDa11u2tOQTwUuCfb9Wiy/87M+FAnZYWfQgcJOcQrQbv9/bBL66Rt8uI2+8fAtqzX4p' .
    'zC906f5B1jvvwo71v1Zr5Sl4IxxooXVjll2NdFIAuiz9dlHaUYiETntSnkJBmFpFC3rwlHzERZ/2' .
    'abpDL+HvhWEZ8VlXU71O6k3aD1wOz63XObyxl7wQ0r8dK4/7u8POngH66os3QSOeqrqB3aS64zEe' .
    'Ixhw5RKeFrUS3mV98sYDzkun1X/+7w/Z1mEcSnBK1nBpewtaJpd7l33hPIkbw8nHmJQh0fukL4TA' .
    'LzhaFZBZqO8Yka14eo+CT0dAlwb6iW72ktom7Nk5uVpCCfLkfDk7aeKm63TudirWHs41//6xrRnr' .
    'M6Bg1cjq4ZsG4RDTaotvxWjG1fJYCLlF+2ndK6Hn9VjuBmwekXwnYr/kHhE7b0EhLyIW28addzxP' .
    'FYGv9dnoOk7LDPRsffh1Tl5yCHjsSWC4AQUmL+e/oDaXDNbD7isaXF4X/r6Qhwffx/J4ZdOEJ1/S' .
    'HPYbT/1uY8tzt8xDshRhNr/aOTl/4MkPl98qTVhUXr2ExgQpDeToYQKAezQHEgiQqCVqlW2IGqFo' .
    'VsDQZbLTzUv9LfyVJXhv0Y8WF/jxUAHVoVL6lqtBscV6vmN3swkSm69Tb5NNJE6m+XXZx4prb7mg' .
    'Qsv/IOnmZMazRIv1lCKJksztjJoOOkrJ21zrMDsMjL8k4/nIq6pc0gvB+6kej5+QJcf3H8Wb/LD9' .
    's/sr91VWjeDdXy/l5w6padafhgn6L5BIVTviBIOMbrCr0V0T28hEEukbWzSatpwIKGQm7TrwJCE/' .
    'k+9S3IGWek6lReV6xdToshuT4bJs3kSVHLus5M8kX2y156nnBOp8txPlKQhSArYDHxFR2vcG2+yg' .
    'FyleSxA6bOVe1tQOO3yUFuIjP4Ghh9NSHtN2+vD8Nuqx8ihLoJa17nwPKMC9MP4HjRG8p31e19Fn' .
    'iunLZY4lzuxPDI8Co8UP7/gabTURhlqn/VqIjUwBnJbDwOzXCMk0OLCSmbaCUtwUm7bNd2n5PsXf' .
    'GUMLbgCzaHNmKe9N6B/t7+ridYMirl0jNMVdNn/O7ccGfxyDSCT9k8gG7J4HfqkTZOOiqnlLBcpk' .
    '48kpOBWvDvtrGsM6MOQ7Klo7lDhrWHcNlWlmeShbss72Objuul21yaj4mx0FYvavANtPeCoGVdoM' .
    'IAhUAOWMEaktOOzg77iN0g64E9iOrdvX1It2Mi5uIzkiKAJBUD1jth2wUXDikyRZ0ogIL9KnEhPI' .
    '73/AOUbau4SaOlPSmIiO5GIHHwEf6zrpIfffUS++t7auj4npESQedT64nRjeSdxx4TqO7+TCnN3M' .
    '/4MS/HQMlJd6wdE3sBya99OqIsw1f93TUhhSUX5hA7yMjrNaAYreA0HP4BLblf7lFrPOjavLwlpt' .
    'ZUqsqxEWJA4wFmU/ORiXDQScPwovRo6qgmL+S3RP7pJVZ5WXnQAR/fN5XLa3TqGYjQORTin0GklT' .
    '+wwJSKuGGpMnAA+zQOXsXqLtni8YCh4vhaxR7ufB1UXBCqIbOwGq3StP7kXj'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

