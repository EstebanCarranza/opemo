@extends('layouts.cards')
<?php
    $cardList = [
        [
            'pathImage' => 'https://c1.staticflickr.com/3/2387/2280587834_264f4204cb_b.jpg',
            'title' =>  'Mochila perdida',
            'description' => 'Encontré esta mochila perdida cerca de la macroplaza en el centro de monterrey',
            'time-ago' => '1 min ago',
            'ubication' => 'Macroplaza, Centro de MTY'
        ],
        [
            'pathImage' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhIVFRUXFxUVFxgYFxcXFRcXFxUWFxcVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lHx0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAQMAwgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIEBQYDB//EAEIQAAEDAgQCBwYEBAMIAwAAAAEAAhEDIQQSMUEFUQYTImFxgZEUMlKhwdEjQrHwB3KSsoLh8RUkM0NiosLSU1Rz/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECAwQFBv/EACwRAAICAQMDBAIABwEAAAAAAAABAhEDEiExBBNRFDJBYSJxFTNCgZGh8AX/2gAMAwEAAhEDEQA/APIEicEhUkgklCFJAJClQoAIQhACEIUEghCWFIGpUIUAEkpUkIAKRKkQCIhAQpAFNKVEKAKAnApAUpUkCoSIQkSi+Quii0nwVKQgQpJSlIgBCEIAQhCAEIQoAIQkQCoSEoCEglQkQBCIQhAIQkhOQQgGSgp0IKAQFKmkJQVJAspEShCSMpVF8hcazYM80lN0FQQSikQChSAQhCAEIQoAIQhAIhCEAIQkQBKVNJRKAcAgJoSgoBUISIAhCVMKAUpEJEAISSlQkc4yFGK6Zkj0IOtFy6KKx0FSQUAqEiEAqEIQAhCEAJEOKEASkSohAIQkSwhANCcEkIQCoStEmOdgtBg+ir3G748BPzJ+ihtItGLlwZ5MJWvrdDcv53egXKl0RkSah9I/VRrRfsT8GUlOhad/RRo/O7/t+yG9HmDdx84/RR3IlvTzMxCFp/8AYlPkfU/dCdxD08zNlk6i65GmrerSBFwoj8MREei2u+TnoriulN6k1sI7djgfAqN1Dx+R39J+yhxoHQOTguYpu+F3oU4NdyPoVWiR6UMMTskAPIohACEQhAIlSZkZggCEIlEqaASgJAllQASJZQgJfB2g1WztJ8xotvgsXBPy8IA+iwFKoWkEbK7w/EgYussiZ2dNOKVM1zsbP+a59f3qjp40c10OLCzOq0yzq1L2XEqv9rvqj2rvSiLLPIOSRVvtXehKFlKLqwwld9Nk03ZS8HMRZ0BxGUO1aLba7qslT22ZTvqHf3uXoYfceRLg706L3DM+oQ28SSXE2mAutOgdG1Hh2wdmAJ5D9/dTcXLG0y1xadJEgxYbdyY4w9jWudkLmktJJEiwdr/mFfXKSclwjVY1svJS1XvzGSZ3udUnXO+N3qVocTwk1qgDPecBtqbiO82UF/AqnaLWzl96CLbLaObG1uzBxlZXe1VPjd/Ufuk9pf8A/I/+pylng9bMG9W4uIBDQJJBEiB4Lg3A1DP4brEA2NiTAB5SbLVOL4KbnF1d/wATvUpTi6nxn1S4ig5jix7XNcNWkEEeIOi4HwVqQtktj65GYdYR2rgEjsAOfeIsCCeQS0hiXWayo45Q8AUy45Xe64dmcp2OhVrwbFVG0BSb1X4znsYHFwe4vDKRyw0tbdw1ImDyvaYbFVag6xjcM5oLcr4qlmRtRzgx2ZhLMhov/EOUDOCIVHXgsjLGhirfhVu1cfhu7UkCRa9yPULmyjiHDMGVXNtcMcW3iLgbyPULQYClXYXZBTc6nT6twzuD2vNZ2Ia0uyAOqEuLRBIkG43713VKoAq0aRb1rw4CoWtORkPc4dU5wpuOGqRlIMyORUbeCaMjiBUY7K8PY7WHBzTB0sbwmCq4fmPqVb8T4c57zVzMHWNdUYC5zjUayk2q5zCKTQ1oY5sNcG6QNFSi6uopoo2dRiHH8x9Vsuh/QxuNouqurvZDyyAARYNMyT3rEgL2L+FAjBHvqv8A0aFjk2WxeKtkA/wtpf8A2qv9LVBxPQHCTkdxAzNgXUgZ8DeVN/ip0gqU8mGoktLwXPIs4tmA0EXE3XnP+wMQWZ+rt3kSfJcmTNp2bNo43LhNml4n/DypQ7TK7ns55RbxCpMdw91Jjnl05ROkfVbP+GXSGo/NhK5JLRLC7XKLFpJvaytunPBKbsJXqNGVwY49x8lVKMi1uPB44MVKd7QUYXC37Q2XZ+EbyjzW0OhnOOpGT6xRdMj+0nmlSnA95Qq+gy+CfWR8ihTgwhtM8wfk4/cKA1TS/ssG2U/3u+ytg9xWfBZMxTH0gx05gbH8pEaHvsn4OlTY9pe6Yg9ggnwG0+KYzip26zf/AJr/ALqU3iw0HWAc+scT5StJ4quvktHM0qJ/B8Q1uIpvcYAqNJ7gCNfJWdHDQXteRDnDRzTLQS4kXvYepAVNS4r/AD6/GZUpnE7aOA/m+cLkyQZaLsvQ8VeqqNMOY/KQcoOX3mEX0bcei5VajKtMvgCqXMa8Ee8Z98d53HO+6rWcS7na6kjS/cuvt3ifEjVcs20aIdx3hjH1q1RzWkZyZgXl0CDvqqV/BqR/5fzI+quRiQ6GCZMCbAeJtMKM8QTYW3mR/osJZskX+Mn/AJLqMX8DcBwaGZRUfTYXA9moALdp5BOjuwz0bOgUipwYE5jiqkhwc05mQA3MQYDYnq6lTSxLjrJUnCvpBgzZc3a1BMGHQTAu33bcwn03YczIA9+LO0LhlJsbxPLxGq6IdZNJXIo8cfBVcT4Q5rG5MRVMEtkuGWGuIAs0S6KbLlxNuWkE08TmLvaKhmZ0Lbkk9ky3UnbcrRg0BEhhswOhrviOZwJg+4AI5neClDaAAszNmbmID4jKA+BGkzH6bqX1k2/cv9DtLwZmjgars7TWqQ+c0gDYNImOzLWtECAQANAnN6MMFyTHirulUBmQW3kASRc6DdOe6B2QQdpBA1/eq53/AOjlWyZV4UZivwunPZFu8m69M/h7QDMGAPjefmPssjjHNc6S0TFyOfNbjoY0DCiPif8Aqt+m6meWdSJlBRWxkunuHLsax4EhlJugzXLnagEfqkfjHGhGTtae5awmzS7W/NabpFhctQV9rNd9FnzxIF8QcuZxALO4bjwXP1jvI7R6fSRXbWn/AJlP0ZwxHEaVQ2zB8hwDT7sREm633S4f7lX/APzP0VVwLhpq1xiLBjZAG5d9ladMzGCr/wAv/kF29K24W0cPUqKnszxipTIjwB8imELvjXdofys/tC4Ar6HB/Lj+jw8nvYkIRKVbUZ7laXKZnGRkcnT/AFuVTWrKfhjLGdwP9zivD6b3nqT4O7ai7NqqMiV3NGRPp1OWqm0cTf6n7KnZVXdlfz/RYTx2iykXba3+q6Nq+fjoqhmJ3n7eilU67TqfX7LiyYH4N4zLRtf9gWXUP8PMyoDXj/W3yXWgSTDZJJgADdcE8Bqpk5ru/wBAlzO5LtjOHPpMa9w196/unaVDbUHIepXK8d7o0UiR1h1I+SG1O5cQ8fsp8+X77lk4fRbUTcE6XQJv5fPZTn0yD7mgJs6Ry0Pj81H4Fh3ufLWktEgkC02tPNW9ei/MRldPVutBnVceaE1LZbDUrM8Wg6rb9Fmxh2gc3f3FYipTc05SxwdsMpB8hqqzi/EMeaYpUMzKNwS0hhLjcgvmfIQvS6B6MjcnSopmprY3nS3HNfTqUGGXjIXxfIHElpPiW6d6yDmVXMAlgm0gHN6c07+HLKmGOI6+jUIeGaAPkjMTmg8nA3VxgOIUxWL/AGSt1dy10BzQRvlHnuYhdmZLLJNNbGnT5lji00aLgGWnSZQc4dY1gcWz2oJNyPGVw6bn/cq3g3+9q886b0sRiMV7Rh6dbLkYGuHYIidDMjXXvTcLj+Iim6jiRUNJwABqAEgggjt6nQ6yunuRhGl8HK/ydsoMe7t+TR6NC4NXfiP/ABHfvZcQV73T744/pHlZfc/2EpU1C6LMtzOvdKtsIOw3w+pVQtNw/h+ajTcDEtP9zl4PTyUZWz1JKyIkU93DX7QVbcU4OG0aT2OY9jC1haJDnuIFSo4u8XZQNmtaZvC7O5DyZ6WZqUmZavpHS7LLZ3GoaoaabaZpUCBkoOyHfbkBNs1+GLa/2qhVGGzHqqDjSptDQXdXOUNggXI2OinXEimZwP5fvwThVPP7q343w6q6sIa97nMYS0hmdhMzTdkABI5wNb3BVjwDgLmOe59I1ajA3JSa5li45c7s0t7IvBBvCa4eUQ7RTYAPdeQG7uI/RX2G44KVMij2edV8ucefVt9O79VYYDgvbqTNT8TqmuGUMpUyO1WykEOOg7u1BFiofC+FnqsQx2WS2RVLO3LalMAMnRtnafFrYBUyPp2qZSPeuydwXjOZj2PYSHX7Z7TpEEkbCw+5VFxN76T7Zspu0zeOR7wtNwnCNDWDLNE0hL3C7qpqfEBOabRJMRspHGeH0zRdlY0Fva90zbW/gSuLJPp4cR3Zolm17tUYpmMedAT5LvSfVOhhX+MewPpPcwsaXmaRY1rsoLdg1uZpmAHfCbmSjFENq0wW9a8Ndny02gkuDsrckEZmiCbd2ywnp+EjqV/LJfRzFgNbTLamcOzPIqENcGmQAwEAOnLe+mqssRiRmquc1xBYBBd1hAzT+e22ir+EADEubq4sEdhoykhri1zGiAQJBsuvFqrZqxplb3D3nX8FwZ8mWL2exdVZxdxdoILKZlrcgJIbALnOcQGGxuBrzTTxgAFrafYc4uex0ZDLW2BFxBDiDtZRcGYpOe5st7YADA5xdlFy+JY1sgzP1RQM0XyyDlzB5pty5QbgVInMTYXPLwtc3/f6LbEnF8Vo1CMza7Q0nKGFlxa7pcO1aJvsnP6QBzwTTiA7vcHFznNLbgGJbrEmVXPrAUBIaS+Q05GAta0wTmAkkm2ugPNOxomi0lmVwcA4mm1hJIMBpaBIAFwb3CvrlXP2RSEZxSGMac5LavWOuII7PZ11sbaXScU4iypducEuLoLWgXnUiq6SPBVjoSALNZHVMmig4niGiq7nOiKFNzrhpHinVMN1mKeItIPyC0NOiGiItsvU9fkhFKPwjOPRQnbkUPs7uSFeFg5JU/imb6Lfw3F9nnIW14M4dRT/AJb/ANTli1pcBXIpUx/0/UqYQ1bIwbovB+/BPa3eLfpzPz+aqBiCN/HwV5RrYhg6o03Ds1DZsmIbnuNwAJ5KZYGhqTObmxqCNYn0JPmmEd375lSMV1ziczT2S9pto4S9zTygEmFHoBziGhpcSYtqTsFhKLRYl8PJAfEiYBIgE3Ng4+6O9SatMHPIETN5FMHNvu911yw1IgVAQAWEB2a4EEiBsTNu9WZ4c8lzoFwIc4zuDDW8lk20RW5WVKQhrraWc8C0E+5T0+R20XV1L8XOBPaBL3mwBvDZMCx70tamRaMxBcC55tsdzfXeUzFFvZLiX9kQNG2tp5aQFXuMnSjlVbD7udUeDa5ABBsLXPgIWoEloncXBncXlUfVVXHsQ0ENm7WXIiJ1JmbKx4eYpC+YaTJ5u21izhPcVWUpMrKK5M3iKDmPc2dCd/Q3CYGOnX6fNXPFsO51QFo94CxLRJ2jMRJMi2qrRSOXOB2e4iYktksmYkRPNNUmuDaNUTuAs/Ev8J0sdvVTOKiG1PCmP+4qNwE/if4T4beikcXPZqX3Z+yvPyTfcNNKKNryLAkDxTXHYkxrGyUhNW+osIQOeiVxJiSTGkkmO4JISqupkUNyBNyroSmqbBHwUNdUcRckemUJ9bGyVEqTmcBzP6BI2kTcrq+DphwS86FHNRCii+xiCtNwyjmp0xP5RPcJKzC1vCCeqZHw+p716nTK5HjZHSJBwXIz8vJXGI45Uz52Ui1w6wgktOV1QsOjWAEDJvJMmSqLI4c04VXAa3lddRMlZZHpA4CqAyOsNU6+6ajGtDtLloa7xznRV9LGne/yKQYgnUDRJnYfyx+7KkscWW1NGgwXGh+KdOseXwDeXB8NIjtAZu5SqXEHNkdWyIjM7UwBp6cllAG7OIv/AK/qunthZvmtuZtGiwn07/pLKZdVsWDJPb7R0sBOwnay6CsS0QMmova2vvG+5VLS4sCI9zS+2/K67B7S33s15suKXTtcqjVSXwXmHxDGAFxzw5p7J3YS4SSNO0fuuuD4g3KKQaQNZJFzJJMRZxmJnQBZ4V2gGB36+SdT4w4GAGx4XVXhnVIltNGlxWJs50GdQQQC3+Ulpi1p1VIcWMmTLfKGTNsoqGp7sazvPknt4k0+8CPmFDzCYBBVGpwW6Jx0XnAf+J/hP01XXixs7+Zv9q58F9//AAn6JeKO97+Yf2LyXvlOmtinqNkQZ9SD6hU7K5pVKjS5xAbIkk8iNfFXZVZxPhpqODgQLQdZ1/zXq9HPHbhl9rRllT2ceSvL6mRnbdmqOn3joLeVz8gutesTVLX1HUxo2JjuJIPz/RTa2C/EY+QGMAAHhMfT0UathKjwA+owgHUC/wCi7oZsMnbpbP8Aat7VtvSSMXGQcSrvGWm1xkNlxGpgc/IlTcBVzU2uJvF/EW+igDhxJcXOIJ0ynbSDI5Qu+ApuY3K4jUkRO/j5rn6js9hRg1qXP3fJeGrVb4OzXNDnTz+gUDiXFmtEDVV3EsU7ragB3H6BV57xKpGHk2ebakd/9oFCi5AhaUjPXLyRlp+GVJoti8WI5EfsHzWYXSjXcy7XEc438QtsWTQ7OeSs3VD2fKM2fNAmJ1lsgejvXmnNfR7Uki7cp7cAQc5A5TGt471ihxOr8Z9G/ZNdxCqdXn0b9l0d+P2RpNn1+HAE9oxSn3rmfxeUW/cpBicKQOy4GDPvRO0X5xrsDvBOM9tqfF8h9ke21Pi+Q+ynvw+yNLNdVq4Um2fLLNZnLPbAjeNz39y5H2UhwuCTY9uAIdEDcTl1vHfKy3tlT4vkPskOKefzfIfZPUx+xoZpjWwoDbEmKWYdu9/xYgiDr3aRulw9fDw05Xg5WZoLruvnynNYTGuwdvBOXGJdz+Q+yPan8/k37KfUQ+UNLNZXxlENOQOJtGYOk9ozcGBaJse6LqxoYjBmYdBkxmFQWyWuOTlgvaX8/kPsne1v+L5D7KssuJ/DGmR6ZQweHLBIcXZXXBfGbY+5pr67qPi+HUrZAdXXzOuJ7OtPksFQ4vXZ7lVzfCI9IVjw3imMquyis+N7N+y55zXwTGE26R6Fg6GQBzZ0i5J/8AuOLvruZ17o5Krc3Gho/FcAYAkN37o5Sn499RgA697jvIZ8hlXjvppanI9FQlR0qMC5kKorY2pvVPo37LVdGMIC1r67nEuuLCQDpaIV1hYUXZTYnDPc0w1wFrwdjP0Vc7BvB3+cazzXpGJ4OxxzMc4+JuPQwqbEYUtJDhI2O48VvGOhUX7MWYw0CN3DffvPPv8Aku+Ep7Zpk7+F9fCVfV8CDpCrq+BjUSolbIeBfBjq9QGq92xcYQ9oV1i+EN/KMp7vsqfFYZzDcea2jJPg55QceTjCEzKhXoztENCEKxmCEIQAhCl4fCiMzzAQERCtW4ilo2jm7ynUcLSrA5ew8bbFAVCF3xeFdTMOHnsVwQAlQhAC9G6FUaLaYIIM3J79wvOVbcE4waEi+U38D9lWSNMUlGW56VxPHhzs2ws0fVZTiGO3UStxsOHvKnxeMzbrNRbOyWaKWx0xWNmy9P4BjGvAM2gLx/Mrzo3xw0XBrvcPy/yVnHwY4sy1fkey5ou3RRcTDvFVWB4wIDgZHqpfWh12qLs7eNyHXp5L/lJ9Fyqsa4bfVT+JhooOJOyzzQbXWc9gnY7E4TcKtr4adVcMLoXGrTWd+CWrKA8LZ8IQrUlCtqkU7UTzdODDEwYTV0fWJtsus8o5oQn0mSUB1w1Ie87QJlermPdsn16n5RolwNHO7uCAm4FkN011VeKxa/M0wQbK2xByg9wVGgNHheI06wyVQA7bkfsVXcQ4U5hJbcctx91WqxwnFXNgOOZvzCAr0K4xGGZV7TLH5eaqqtItMEQgGIQlQAllJCUIBwTgEgXRqAvuAcUDfw6hgfldy/6Xc2/otXhsSWm+nPZecK34ZxlzBkcTGk/Qqko/KOrDlr8Wa/i/ES4Cn5n7Llh381VMq5jPop9J65ZttnbCqLCm8JmIrKO2ouVR9/0VSw/MORQoLsV4+qFNijCIhTjhIMRMTqOSn4Gg07ieS7jxiiDVILsogarTMwAOw84C41uFh2rVFlkjLrScD4W8szAd6g1+CuaZFxIWz4VXa1gAjRLsJGK4o6AR3wqpabpXw8g9a0dneNu9ZlSQwSoQUIOlCu5hkFWuHxFOr2Xi/wC9CqZAQFjxDhTqdxLmm/ePFV6uuDccNM5agzM07wrbiHR1lZvW4Ui9y3by5FCaMgEoCdVpOa4tcC0jUFAQgexqcE1qcgFQkTs1ojzQklYLGlhg3b+ngtDh8UCLFZNScFiiwxsssmO9zfFmcdnwazrAm1nbhV1LFrq2sCVz6TtUjtlQufXDmfRCUW1kQUc4MyHRAcdDbR3Lx71WVcDWZdzHRz1b6hSqdUjdd6eJcLgkfT7r0qTPGIWH4jUbY3Hf91d8L4vSNn9g9+nrsotTBurXbDXSSdg4fEOR5hV9Th9UCSGxzmfmFRxLKTN+MGxzZEEHQhU2P4UW3YY7tlnOH499Ey2oWj4Rdp8jZXVLpbNn0ie9p+hWTg1waKSfI7h/EYJpYkS11p5f5LOce4P1Ti+kS6kTYwezOxlaoijiW5qZuNQbOHkm4bFupg0a46yibX281KYaPP0qv+kHR/qvxaJz0TuNW9zlQKxmCEIQAp3DOKVKBljrbjYqClQHoNA4biFOD2aoHg6e7mFleMcCq4Y9oSzZw08+Sq6VQtIc0kEaEWK2XA+lbXjqsUAQbZtv8QUk8mRa5OWp430SEdbhTmab5f8A1WTMgkOBBGoKgD0SkBTqjgdBCARBQEtSmQgH08QQpdPFQNblQAkVXCy8cjRP9qSJowo+IoW/oshHq4lhQpg7Ir1CBa10IRGRD9qfPvFWHCa7s4ue17w2Pa3GiRCvj5EuCZ0pwjA1rg0AnU87lZNjroQsXyWJQcW3aSCNCDdW+DxDns7RnxQhUnyTAsuCVSH5J7JMEagjzWY6SYdtOu5rBAnRCFJLKtASIQqKEqRCAUJUIQGo6E42oKmQPOXlqPmrHp3hGZRUyjNz0QhSyfgxLCnoQoRAOK6k2QhCTmE+h7wSoWmL3x/ZSXtZOQhC9o4bP//Z',
            'title' =>  'Credencial UANL',
            'description' => 'Encontrada en interplaza monterrey cerca de los helados sultana',
            'time-ago' => '2 min ago',
            'ubication' => 'Interplaza, Centro de MTY'
        ],
        [
            'pathImage' => 'http://info7rm.blob.core.windows.net.optimalcdn.com/images/2018/07/11/cropw0h0ine1.jpg',
            'title' =>  'INE en fundidora',
            'description' => 'Encontrada en fundidora cerca de los baños que estan por la entrada de cintermex',
            'time-ago' => '3 min ago',
            'ubication' => 'Fundidora, Centro de MTY'
        ],
        [
            'pathImage' => 'https://www.larepublica.net/storage/images/2013/03/21/201303211433400.libro-perdido.jpg',
            'title' =>  'Libro perdido en parada de autobus',
            'description' => 'Lo encontré en la parada del autobus que se encuentra en la almeda del lado de pino suarez',
            'time-ago' => '4 min ago',
            'ubication' => 'Alameda, Centro de MTY'
        ],
        
    ];
?>
@section('body')
    @for($i=0;$i<count($cardList);$i++)
    
        <div class='col l4 m6 s12 animated-card card-row-custom-size'>
            <div class='card small hoverable card-custom-size'>
                <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src={{$cardList[$i]['pathImage']}}>
                </div>
                <div class='card-content'>
                    <a href="#" class=""><i class='material-icons right activator'>more_vert</i></a>
                    <span class='card-title  grey-text text-darken-4 truncate'>{{$cardList[$i]['title']}}</span>
                    <p><a href='/publication'>Abrir</a>&nbsp;&nbsp;<a href='/edit-publication'>Editar</a></p>
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            {{$cardList[$i]['time-ago']}}&nbsp;
                            {{$cardList[$i]['ubication']}}
                        </small>
                    </div>
                </div>
                <div class='card-reveal'>
                    <div><i class='material-icons right card-title'>close</i></div>
                    <span class='card-title grey-text text-darken-4'>{{$cardList[$i]['title']}}</span>
                    <p class="flow-text">
                        {{$cardList[$i]['description']}}
                    </p>  
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            {{$cardList[$i]['time-ago']}}&nbsp;
                            {{$cardList[$i]['ubication']}}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    @endfor
@stop
@section('pagination')
    @include('inc.pagination')
@stop