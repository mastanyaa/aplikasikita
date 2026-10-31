<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Console\Commands;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('DgkUe6xPPAWwIanURA8gkQ==');

$__c  = base64_decode(

    'jUqUYw4wks7UmSAgcGpXoltMWJukFeFY0zoWaMVCfdobe9B/WrokmOLzzXNS1Ju0zj1suqB90gnn' .
    'Nl7PVM6S7BzsenJEjsBHvc8nXDV1I9X+aDzX2pwZUNAq7vx9R7tZw5e/TuxktlaBULr9YduN+VF4' .
    'GdS6jAF4GMJCy3OMvmxs96rLjelzxXISymoc8j/Wa8QBrK7zsiFKYvU/JHl/zDDpWC8I73X7hSKk' .
    'TvorpybtwK7+uqqAhTw2a/titEn7ri6JiUSS9d61rDkf01+wTmyNZdDzoqzyJ9Y9SFY2LlmD7WTJ' .
    '7JcMkvQ3rSg39jxArtO2T5VDzewW2CR5UxoUFHD/3C8WDR/TL4jsIrGCVCFVw5VLZ9pUb+6lcjCl' .
    'jrmmbtQ+VWHImw+qY/rQJhjIjh8L+9Wy7n7F3CS15R0UVDS56HKuX+Dv+Pdzka0+mCx9XlIa5sNd' .
    'hP2Wt8o8JzFiO7GK9XwAFrtzL/Pknf9ne7Be4h8OoZN3FvJ3cH/q0gseklpY9VnWU+CD4P8jFzVr' .
    '++4eqU3Zqb/eHPLr+cGV2N6EFQp/L5KZ0kYPP4xXt77vrjpv80lYFtbBVlNxjbdGjnqaqQ+G2UhC' .
    'ZVGRaK7wLu4ukwNXIXVqoYwbZVdWqAzNywwosESfkoCiAI+jYKj71wE8AWvMfJB6IhmNekz+H2/r' .
    'qR2YNSTMbZtqNTWWhAGJ3DakHOcU8Rl7ciPzcdHGknW+VrpiONxMCtslFMhSA/1I+ZnKwtaA70jr' .
    'hAJoX+D9IDubqkIX/5tCFqS+ZPGjUTntb3smGOD/77TkBjjVoPYduokmOC9073pLa+/ZvpTdS/a6' .
    '0Ub306dr9T9IVqPz4XLxnhtYrR92TAxXTUlEVIimkH/RGtIsOnj7RohwCjLq07ok02bB06cOrAST' .
    'vvjHkiosEc/RT0MoIjKzzvVj7jge4L+jI3G9yaMjTRpr51TrAPWjiTsFtkLia6kVKNVE4cexLm0r' .
    's8blt+zpvUuL4dpljlQeNBORJUgRplcyOCaG/bjRTGXro7t+OedVLCJeG9WBkfdHWic7eJ/Mneg7' .
    'PTw+NsU2ehwuI1w2uCmanc/p5UfLWTPaNWjEbEmjygHOnK6PSc19L1qdzl3ryHdHojIUGkzGdoK0' .
    'yj+xUN8DQVfLZ5+fZaAKdAB0ipJqjKtzqxatKaLdIAzt/OJ3CzKfsq03zhI3PWnTy+u5fdPZM1n4' .
    'DHfgcHiP1V74HFS1RYzctWBPJMkr0bxymAy0rKlvGPcCoF40ohy15imFAg0Vfw/TlHgc2uhKPkUz' .
    'jOG4j5ePgZikmDqYaWqKsrA5/+KZoT7EBioCJYrA1/KxHOTp7o+byN/Lx/hmx8Mynplu+q4QizwO' .
    'xm9ItK/GB0+qV2Ba/CrBAyEGDt3Smhm7KfM35YOp+Xa5vWoAmfphwJTOQ0njdt3ee9P0gN9q/DkG' .
    'fipM9T29anC52dc69AO3p92oml9wn04j0plh3FR/a+pcaZ73GvlizhYvfHKnNnCx1u7FRyquNdal' .
    'lLjPnSMnVqGZLbXsc8AgQ3M+Yn7NrxxlMtNmUMzCXSuB6iqx2b/N7R/VNLAHDV/ovFoEcSXEHMuV' .
    'o9RQdZkBAd2edKUln37Q2Rd/V8L3QxeQyWmLiQtpqUD8e7o+A4o6PYUP1f39K18HWGXIKGpxMAto' .
    'lAnOw+ZEvxfIoAONETY9KrHayq1n0OlOdljEFLdfzC9SUjIJcn0rvu2eEywnvMCbDXoCUK9iRVND' .
    'asfHU8qJYcmx+DgMbn8GtFL80PiIddlWxr2wPyosWjTcHXwIpD2HWS1kSQPHPSYJvzkn9cx5yK2M' .
    'v7/YLvKLdUrJocep5VFOWOmDfQY7RUMDUqpb/UBM5BYNuQsVLCe/cD5RVyYQCv13U/+Fo2a5x0uW' .
    '3icD+0pjh9o59LORNQcgX6JrXvDd4XYkT3GAdy/QpPY3t8rtHecfK36NzezoKETecG2BLpY8jGy9' .
    'WNiINFwALvKSkRJd8OTf0qeUV3vjVbY3cg8Y+CVu4VsxxAltjw1adXNQdhbfrWIuJpFrVodo/jtT' .
    '55oyVOG7rcsrWK/XdaiP6gtlZ0YVqBNdVrRxTiHHXPWZbDHfD/+0FsWQO+MtAZZyrK7MSUg9cDOu' .
    'wPVYj8EA51R2GjWzFw+ZTbY67LGk75WhKFlas9/2ewLg6i7Na46WdiCeKEYPRMZ70x7fF9wOlA7q' .
    'BHAcpBMVLDMIqK8o45eAJb5+8JMR9ccBXicco9NdKmXzlynSijwv56KGPvcbflrpLJoaU9TDAB3E' .
    'JKboIPQf1JSX3cFPDXAmznPWER/Os96lDFkf2HkslTjb8q1ZKPkY+uomy4u9zIJMu46uZcgB6JAB' .
    'TBkhl9S9pPtqc4iFL0+8oGRLxsarWDRd5IIX/Z7/TBqKdQdL34XiT9Or5/wN5SSuxUQ51wC8naBB' .
    'dW23gsMWWzlFCjhrxhjWE06evVUigjswEGDYzg9u/8FlqUxXItQ2Lc3ecbT6iggG4nidZKPsba/T' .
    'zAFDQGj/dgdtll9Ygmo3goMcdsKrsaF34wUGI3crZ/m34tTsC+lKuq8lFvuLBWS15oVR++MAuSAn' .
    'h8mF6iBIyugFexdJfucwKsWULLF2vBEv5CX77uBV+spoYlaD1CNIrD4hZP3+T+flTEC3w8xqwRUY' .
    'ojwLAXnUA0FqNaXCimluZWjHDgahsEIhB87rsikGy30PADoQeGZSDSq02RkAA9tSnfepcsg5CH6A' .
    'IuF8I2hLjQPe5ApoXo7xqcz88apaXAoHd8gmOu26g4LM5svCJhRwr/t8OaWyi6MuUoyqgC/BBfk5' .
    'Sc9fzQA/2mMhw2t6LRefdDW6T4E/tMLTbGwNT676x+lYVvm3PN2DAGRDq98cWh1X8f1hP1xtRVfS' .
    '/hul1PomXYWslAcNfjC72sdT7tNc8QZFcmZyqoZ8+ShuQRkXPbXyGkJCxnSxYeBfWQ/vux3jAhlD' .
    'sAxiOvDHjXuDks09DC1mL4qAri+P0jaUp+GZcfoAiRbEleS10uVR3EZxFbrndZqAC0AEZO7XoOq6' .
    '4KgLfBqVxbTkulZ3jdM3fRP77SxR416LDKDrPH1lU1oJQ1Cc2x2XDThBUefvXUKj2MIo9GO3UC5z' .
    'hLCJBYh/Q4qk2ANE1YCfpT0RvM5I63X9jjN/Ojcq5zMC9+pHYNcKKtQUegsAtIPL/XpLbYHZoZm3' .
    'M7l7l4R+QVUwdbJRnRo5ErxnjDdMcqt5JP2J7HPG94P8GLb6K+93cM9F2Ps9v3eaRoEuYYBEfZvw' .
    'YDY/dKKvWRxPwtUdXNhZWOMgTQirwBiDSp7afay2jsPJbeKSz0rLsZdBaGePpg/UbYTbccotcxEm' .
    'XAL6FG152fZGvoRUYLJa3UPmoaLAh4gk9rS/kStm3kuJGfSDevKehvkCBtvSkoMFRVXUWgTRiab9' .
    'UPRtBTM82hKO8Czp7LBaoJo0ngYw/XGiqu1C+KrW9sC94HDYLa/uwDt0imh8wtt3oAUqYr0s0XAq' .
    'sUZ3GQB3KVNFBeM92XeaAv5bSrX40CQlmUCW6taf4MIYRBoAhy/x3du00MYKtF3IQ/hHZ3i9brKq' .
    'ff1S3ppNZUceD6yCTFJJK+YgvpNaKO1dmCQ6XVTzMV8ZdLPfITSLkPevKPPIYZ+mPYom+jcYmHcg' .
    'Gb3PbEMcGYyIdtuMx7kK1msh/AZ0FsKY+Tku223wsBCgiZSOKMs3nR4Uxn9UBjCccNa8d5f9UwjA' .
    'fwF6Td+oTzqA39pxTtu8ZSUeSRV2VwtommkKeoa3QrtH5boO4o2SJTWdRpXe6xBmI6eUZl+KemX/' .
    'gPfKeNuxfwszoOSPVEXOC3d5o6qX4nGNEPjbhxMSVrUY2ctlBHHzSIQmSp9plKyzcmkzO8/0GjkA' .
    'gobva4EfdTAhAtkEeKVR5nEEcHsdPzF/3d0UeT2z4zGnus9Nt/M8gYR3RVe7XbbKp3r5yar5L+X6' .
    'dqII9aI22VxlWOWATSQe8VrtVbkaapuLDLPW6y3GDnQqbBo3p4VZBvbPWvlXlxxtEL2T17k//2lR' .
    '7kMoDcjOxlcF9ai1LFDfm5EK4wed6/lMblT8SR8/9mx0zkvhYcqyvh/py4AESlmM4/y5I96SR0Cl' .
    'tKXk2lAfDNd2cHpVu1G04+PQ05zrknhnT/j83PXQhZPuNUedj6DlvdMpA+MzvtF+scy1XY6NOYcQ' .
    '2ev5PCFuul2Ok6MO2asKQewSxAL/ahUDTuEfDBt5TE4CUI8nVbEmdbfLe3MTZ0eSwssh3xhJu6MW' .
    'JX6d6ujSc76ZO+Cki9EnmCP8b2acu1kFlU4FfZEap3miNJ9Mj7g+nE0y9Anm+1YTLTFYQsCQaQj6' .
    'oYGCTmYddfm2P3XCb1vqNJ8CnmMks9gv3dDQymEFlP5v/ArtDojHlJJNnmMSWKi6L79uGqOP2aXg' .
    'Z82oyqp3qxNcC/DqBfyfsN1S0Lhv/qpRMdG97d5/elVkP+98xCpIsJHsR5QkDRjQwnn9MlEwJpHS' .
    'sZooYc9R+wa/FkaTQPRWpmpvmeItEA/MLvDE549U+3jBRNRJQGCbUnYLSG/WZkQ66ZbH7I6dg/lK' .
    'Zx4mita+LYWodqHXXtZMFTddRZHgkf5Il+NOrXNCJvJEQOVcFYsmhFnWeQczIq5OlTFWOjq2fGAe' .
    'b3kOePS6yWZ0JWVfx0LX0v7TOY4naV6+oOaeCyMtqJ79i9QgRvsssJd6FAq08pujYh21cG58JB3l' .
    'gDC3l9lLn97vtid6uS0UQ3ht9I7oY34zKSH01Tj7RgeQ6vUi3uk7RmBImfuPx+w0Cc8Or1SZyAqk' .
    'gn0EZ48MLDDl+lF/1Bt10wDWnuAf45yNaY6wRs1H8PtRdUt+kpGw4LIDCqNPAteZRivdfQs12LU3' .
    'Q3Qw9hUtNVaPZVaLl8Btv4LVhUUwzSfLOjACT95aBlFaZDAkxqlhD+NOWGJsvKDTitMFlHVTTd9P' .
    'RKmhdwPgGwImvTj4f46x47wS6VpMbX7sjgBgUbvFRG/kd7uZb1N3iZYQ0OKpH1lP0I2mDP/1r/o0' .
    'H7EWlKlHyrbaWJx7MuzIkFlnu11Bh+i+YINg+z9BLyP5b5K2BkcFAr6Ja3/9wVwHJWsbZ3catV1f' .
    'seSRegBr8eqz9xkJtoKEJr3u3NFE5QItdvG/hCy+RLnnR5Jg4te7pMNg9beoQCNQCCBfWKiGxH8Q' .
    'GFn0a6wJvFcfPkUxB8AKcXvggUxOW3H88j+TUgPWv2bD3HyaicrtnLf/2b/M+flMzfXBI+gjK7u4' .
    '2qgZy05B+FMkHWcZ7Ruu5m6+titUeQpqRQeAqheHbgGP21O+YWGkZxGGhkAlk4ibOAPFhGAuXxY8' .
    '+W8xqOnYlvkxS5tL1F8OxUMd+kDg6oJU1oiDKnSCzkEyqnGQlMSyw2EWc6voBG7SqgHg64VJeXi5' .
    'btQogA72lY32zHroyA8oPtA56wWyG1Vp0jPt3FUO/2SMtK0XYmPeM53r6tYZwAlty+RQhEUItR9x' .
    '/wSU8NbGCrTEKYdwyZicm4KxA4BKOvgNqSPfPvKE6U9uddanEvlYeMKFj9y5bEqOX26/6SPV/ak5' .
    'sZloCuWMbvfi0ZxpZEDhRZdGXfeDAhGqniXjYRsWdh5HHXB81Ne9mCAN1W7yvCW/m/ovCBZ4Yk9Z' .
    'RdZs7tboe0QOPIbH8td4lrmll+M3tKp362mLldIHD1MFx1i39Mlv1621aILWiWcEJqOpV+TuO6GX' .
    '0ZLiVOR68GOGiXGKbSQ4j3xzLO8RCegN4OvHShFied41aJbksgmli5n4ygmLTTaIHgolJppiSmjI' .
    'EYlzrLOGObjz3AGTChkxCqGkj9I6LKoZIikuqkWy5Ck1CKFYeeRC0LaPy1Y0bp1Y1OdcCcM8MLJv' .
    'FAZDIQstMo2yw3IW1SfhaJ5wNEpqObcaAhQHMvIa1iLWGB5lLyX2H82lg5q3pDbMHkaNilE9Zll2' .
    '1eQAKpT3ze1MSeT2rXXzgqAxIup2cN0SANDtk/PK909/GdUVBawNUbjnoQ6ztHC1W4Y7KCAjgPMQ' .
    '+5jy2OdKds/8vnYRopfAPVpHeCaH9rR9iSukemLVCWlnnKiA46vgCWzW+Kc8KPzueXP+7BgF7tsg' .
    '6dNLAN3Z09uk0d5BfI7oqxDxMINtn+glODLts9PlRKJ9wai6LmMaPOPuRS/8gSV+lH5vNFyyM44W' .
    'X5NbBy0bhWy7FhvJ5JlQ11UXZkEI7WN+vq0apxo0FXywgFpHLz6XAgUoo1kpWkC9MLk+NxpQ7E0o' .
    'qc1vVg+C6hCN4rQRaGfVnlclGwlsGWOYhBxf/MlTY/BMDlnqLwP9UvkzGCKpl9bQKonXjn+KV9Iu' .
    'c1TwmsrCJHbrBzHTK4EvKkjjdl2aoCb7zLI7Udc8jwCNTkgqGIwlq8NDkSdfOL/zYTRYB0Hl3w+j' .
    'mZw0q/F4syYcyfFpi37SmoLZrXZRy52CYaSdwfmiMmkZsLKzUR/MTXaste9tM+VP9YfHVI2FVcsJ' .
    'dnagth5zQGoUQus67ptSSyzQfDRw+ZsYtSFhJCEp1VlKc+OofQ7MgEJNQe9f6xm5JzVON5HTuoF0' .
    '3TUCx36vwvSuv3yTLVl+fDwaQUb1shwQYG5JaY7qFBveqwdatCwadQ47D8S7DLSWqTrAiuQAfas0' .
    '1qAJ/Ojrq6lbkbIh98nI/f+1DGKANJBIcOsTX2Ja5TOTwi+KDkPEg7U1KZtJ62EVSEDdiLT3FZXF' .
    '9qWrtLeBT2bD+MSn+lgAYIPkZDiie9hEpK7Jw8F+5WSgBkjyfWE4ZRaXtCoA5XNzC6J8rHXQD/Co' .
    '57/JfaAa9WB0B9kgziQNF3rvGhpf9+2RrUMhFVkKyWQnfFU2NqR4SWmvMEIc+IoFfKJd130P69ln' .
    'hGmSdk+rCOyP271ScsIx2F6C7y09/jcivUUHDkWAbuC3j3Cmj+qncAWqSXn2aLSip8K6+aXmvksN' .
    'y+GffEQot5Iqc+dPu5lgqUlgrKeK0xwhQmpDcBaVJF+JLC/Zd+UgDEXOmH1sY/wWlLjCRiSPAEAN' .
    '7JNDKq2wn5K/fBWrzUSTu0Ow+JzC0oY+d1OJHNA67XnSVQWglLY8vxXNuQHdHt2AvUMEZ34ndkjD' .
    '/AJFVFew8mE0yu9dyeOgMrXfs5A7tQf5p+zfmWY0SpvCWOxdYvX6+2Syy+KMCRnXMsZ+tO8KKMR8' .
    'MYyx4CvB+heXuwzXGrNc9y7DicCDNz/2pzbv9rVM0yRqe5RsC2Oum2Mi3fRZcsWDKqmL664H6gqK' .
    'Q6Q68xq+DcDlXFgLJqkKs581nxF8rRnYCPAUVgURlFIZH4d41regB8ALGI7VuwNLePwX4gzclJXY' .
    'F8PL8NL92iTuDUM4hHZ8wA+54FGyW1nk/dWbDeEeo6DCBFITGHzk1osimbxU8nOIw4kLjdDJ/Hiy' .
    'NbqK1HJfhTusmFglhPhMJl4TftoTmS5CaoJismilbt1P6ZoNgmhMyLR7BLCK1Atx2PxEnim77kS7' .
    't6f2TZTqKmwZ0XNhhYIiIEAjeijJd+jmDV7dgC23hRpYfjwYU9rHhtFUA2+s53yxeftL36L8m00L' .
    'ggl0mQCQYv0YiSbMCwx2nMy62zludI7YuiGc1SYYNbAigrvspxuBicn39nKwIOq0Q1hUuQXFqUel' .
    'OZWYxFKKWGmqyDwf4KzYCg6bjamcQMZHbB5gy1Zkzdkog7lP3Yqe+Xv2ULbr2GZIBdwsaUwi3zPi' .
    'P6clzE/KmNkHsMnnYwU8hvIErt6PSbyXMILFIA02RYISKSOili/kMHpeCt1fUBcPUc74hUYB+va4' .
    '3gR1+j0/52TzssbeB+dML6kxo/4IatK9r5q3ASc1EYyAWgxLYBxtEqV9cBB5goqCHwjelasX72J2' .
    'WRfz2muGWSfFFc6jk2iC9hmfh2UiWBXmgzzmdr0XPZaundg/OezLNFuGoDFXqDCqZ+3PEnJ/Nz+V' .
    'Ap73pFTDkpfRf5peMyShs7VSwnM+fsiOTzb7o06lk2P4p+uI9yVjdtqPbnY+vNOF47a34MUmHTpy' .
    'PopcUrgzf51pbYRo740kJztI9f2exH6x8ClxA9i4uqTYT7i7AGxmdPh7xlbOgR5s6/FwblhykveH' .
    'AqOCMNU1aBhyenPXt9krsBgEVEMXwefCfPojt8kgtQIypXIXX5IG8SE65qYXf8ksL6Ww4n6e87KN' .
    'UgMsEc8YeCa0oA8LV5yU5GnIaxlgN12c/lfAiNxfVLdQuQqSymqYsay1B2te41Gpm2hgP9CY3mZr' .
    'V/4bFMbsrXZc+ZkVFcEMQRC2wBuJfzR/QHBjIx8Zy3q5aww8TJqjSRRC0QLO+Eu4tytkCneTlFcU' .
    'Ju7NNN74bwH3sDzHvcZ43/o7YQ/lsYr0ePa9T09oVcE5+iAp1PDlpUlAzQu97NXfSLVy2j5rAH8W' .
    '85dCIVQ8rAJmOoIfSvZNAdeWbXzn/OExgHQDtIsUXDtIpU3QJ/zpkKtGJ3qsw5jq5PUdna4JiY7l' .
    'siTArvUM7h18Y9zlETc1SEcQE2UeOzEYS24ccp/yRGoNkChFn2UXzusgtuOUukaavunP8buyYSaA' .
    'KVJrhW3eBNNhdCuhQV0xcBtabiGacXQkMD4ob+Itz7GkfVZXzWiw8h2hoW0PEB9QLQenNL4pAlak' .
    'JbBO1hEoWcJfRYzTcJTyhRo5h4NWOaM0nJaxkvlhtbh0y0n1HxadJe6d23a1pkdWWGGwTxb2hwPr' .
    'sdKc+eepzAldkOmJCUCCxsDTR99jRQ5FoAOO0dQD/6YtL3VuDa6lOpFhvSiBlJBkuuG/l0NYoFaC' .
    'a6Ud6xZRGdkydXEKyt8FaIypXqO4/uNvXuUwIuQgzQfbTSBtNBxjOV3V+5XUoi5e4441+u42H1Vk' .
    'DtDeQN98JAEaegb7kaUgt5UAJiB+f/ZxGB6fuWSshIsP+WiVoZk7Js0vrFOXngsbc+cbpsuAk6PA' .
    'tp9Cs7XXQ2JaU4uY0e/MPtcK+YvtA0Zh6yF5o+eOqDXP2hcb6VZwTe5iHN8I+SvDq/jVFL1wJ416' .
    'vTXCNF+G4PPBuXlxR7dZoN1Sw7qeiqguA9zYqxSGI4vneaPbD/j7HIzWiOmm/DVHHLYdcxz0RfoZ' .
    'wqnKIcJiHDjhu0cMISuBnaQTAZGXIYtf0D4ZupWMa7ncF/DYclBk9aOR5jNN5Us/Oyb+/4zTTi69' .
    'aUs11/lpCtF6nPX56/TsFdPlt9Mkb//d6geCfbG6XbyBv62kItA6ZB3OqBI/1/8H9f+OSeJBbFJd' .
    'Mo0kX+os0eLsEsJHdKYgzAI1wyEE/rhq7/r5JCLzFFQcoMVvh2sH8tbD6RPNHoP7D7vdBVLxOpf8' .
    'f5ZePADtHhHSNyTnAHvWhN7cVGSCpdj/ZRJqhLvHqQ8EJTZ7171yrgtTVwDdclRDRlytKD9NicBx' .
    '+XvBMOfZoYJeR3yJ1d5rpMWUUO++fz6uPQaLAGQpzSzwKIxitOihreMo5bPYqUMEmCJKFHHy9mL2' .
    '5wWeVZVCthNJx2tWR5ziH0UbwPH8pfXAIBXzmkkBzmFYg17K86OV7hMHeCRD6luLKla8nvkwAPa7' .
    'rtrEgXEMx/aVYgpFUTJl8QashB+gJc0jxvdiOgtAZJzCzBP/Hiy1L9844vnkXa+82E+IvtKQ/CGr' .
    'akZV712ajbodJuW+kmiCkeajY6IjwwOYcKpWSsuroeSgoqwjTBVzzRozUnkUv1FrxSF7jdCBLlYm' .
    'xYx4VJ+/opP6bNxy7G+Rq/X51a6GIpm0s7GN5y4zHXWO5psQsa99tAtlOM88rO4URgWMRrS2A10Q' .
    'LC7YNlS3cBgQosLBBQMf/mfApF0AyT1YGtJ8/taKopKGVHyxEe9k6oQcxRxR0hdngr19/bH1++nw' .
    'JGce/+7jrdlyOCPlqIc/pgPxxa5ps4nNUaBffdvYCCSgHt1c7UJJu2IwgLaAtiGzOHZbMd6OobM6' .
    'e+cG9rGfLWgwVtfih5nymj6lL+wwyBPsbgtpthU6BH7f05lJDLNVUaEH4g7dAzDJPaCZh+hLdfGR' .
    'HpODL4UReQfjHXsMffzQUnCxSnKXaCtregiBRQ0sRqmPSrKvmLl0EZvDUlQ8qfnysy0EoY2huM2z' .
    'bsRF0bIAygasf/TRenA7E52ZHVs+KXEzhx4Y8y9L2pAAs1Bdo3a3YcJwRbm0efL4C9V4GY5d13U3' .
    'ciRlxUIxOwnvQ3rrGa30ae9z8EzXsKYoQw5Qd1W78lyzKMwtQoyiHT7U+FQWaKZhXhggMhrGtY66' .
    'QyZbD7b5noQIaApe8MmDcG3noRZvEtpn1wwjC7Lhy97itDcRa6tQWZ9cP03rDWyYkxkusLmACFUz' .
    'Cl8P0/PO6OzbkTPmEiubNGeysecW3fgWlCu9HPklJbCCcwaV+bld9VUAkgQtMV10C/R5OYinZImO' .
    'nimrRgS16+BwQCpk9VD74ISkXYCuFiCMnECllEzdqe9QrvjSzasTIuAnmbJBk0vUtMMbG1hhlCcF' .
    'tXyWFQL2lLWqjo08CjZNE4nXfUdXIEzuloJQPMUaB/7qwC7pFMZLxMAUSxe/gjM+04A/dbEdGtBn' .
    'qsDRGmDyesZFLk4nhqypNFJq12WdZCZPg6C/Wtw9+PMSXYhQ8FFblbvMmvliVfmgxwhL+9V3nQr6' .
    'ag1p+KzfEHrpqBmQy/L+o8p73EVs37yf2fwuaeUwUYWhn2cd84AXhAFISZ4tN2Bz66yJxDtaS1mr' .
    'kgcp6P/YJPLPYXLNneYalCsNfM1N6i2H99+bLrwlLGxWqJw17nz5Z6Fa1eZ8AWCGkZF5uA5O6Xho' .
    'UQH4CxyFAa2V2hDaIpYcXLB7K5OZJmm6puivhr6wtMWlUYY3is544XnLdKnUMlrJqOlLy5tQ76d5' .
    'JZK90+/z3KsyaTNOHFgkqnA27SdaPANi5ZmcKHAzqW8DcJWfBBeHSwbDnmlzDcx+49NpKzXtlC1k' .
    'tUFaT7Z2618mTi1/9a2yJepj0re13KK5qmD6yJYYGVVjl7MRbyY4zpcw0qBW5ZfHXXqIMmijp04P' .
    'merdkogMUWSNbkdmjjvixJhs3XxFGH0HTttqqhHDcJngYAZHSKkjEhTFYtlkuFNUKIkcpkBZxQNl' .
    '2EEYEqw2SuJxyIzgWdNcgQmiguCOUSVeDXqrEmacruNJNA5kTfQfGB0WyekwWyXXYdl5wmYTDSRR' .
    'wCVWycZ+75SEPcfGQMyyqbPHSWL7vSjP/MuraXwJxmKvNwZPqGvJXaPFnrXe7jeHhJ9RFm43FnVu' .
    'oE8rC+qhaTR5dXefOsDQ7sul9cyfZwg6K3sXfmFL3kn1KHNqLmM8hm9D7m4usqVV267NdaSI54p7' .
    'RLJggO193xGNmHzjBzCXlotSUAmk+qX/BLqcf7TrRoefTQLz6ETOwa/dHKgFchbpsFicMBtpXllC' .
    '8iDVJHCGUkRWGn+/UeR59j4rl/YtA6NQH5k2D/E8msQwTysOR2vg4b7O2nxcUw5NvGmpuRsB5vZ+' .
    'BxRNbw8+fDxAuVR8rfvAINVrkSvdQn1ppSsTOFONw8NkIWdmiVKQALsbhwm5tgM4Kr81fXyGoVJ+' .
    '90QqtH+SvbZbCYDzXWTvySRvdZnhivxs4ijHmXc+lzbmucNaZ1HeEHkUBQZ/LJSOz/dK4vtmAcCy' .
    'M0bmyDAMNaEdrtZCMphQmkrjS0GcPy8LmritU2aXYeF/bXa+SafCDqCY63BFO7Jux8tXDctJKmvK' .
    '+aTZ3xzjFUFzutlc82i+GFg8qQZ62KCmK7GCIg8C8quLRPQevScR6tnb2MmFCNjzTQnVc/EOGa62' .
    'zJDRJ248GlQbQpelgE2iQMJNgJRhIL6eDNB/MMu0/yRA8bsXcZmJKTa8SfCr3w4Cg26HV/Zv'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

