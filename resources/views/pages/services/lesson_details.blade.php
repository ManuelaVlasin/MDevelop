@include('layout.partials.header')
@yield('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<div class="container">
    <div class="detail-box">
        <div class="images">
            <div class="img-holder active">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxESEhAQEBMPEBAVEBUVFRAQEBAPFRAQFRIWFhUVFRUYHSggGBomGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGi0fIB8tLS0tKystLS0tLS4tLS0rLS0tLS0tLS0tLS0tLSstKystLS4tLS0tLS0tLystLysrLf/AABEIALwBDAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAECBAUGB//EAE8QAAIBAwIDBAYFBgkJCQEAAAECAwAEERIhBRMxBiJBURQyYXGBkQcVI6GxQlKT0dLwJCUzU1RzdYKzNENydJKywcLhFiY1NmNlZqLxF//EABoBAAIDAQEAAAAAAAAAAAAAAAABAgMEBQb/xAA7EQABAwMCBAIHBQYHAAAAAAABAAIRAwQhEjEFQVFhEyIUMnGBkaGxYsHR0/AGI1KCkpMzQlNzsrPh/9oADAMBAAIRAxEAPwDzqyNXOnSqFr1q8TXraB8ipKsRXPgahH62aBiiwHcVoDy4iUkLiqbg1SU7GtfiCjArKMVZ7lhFQkJhH4V1NNxJd6nYDDfCicQG/wAKeibeO6OazB1q0GzVZRvUg2DWVphSTTCo6aLL50+mkW5SQdNNpoumn0edGhNB002KNpPtpaKPDPRCEBTkURUojQEDcUxTd0QquKY1PFMRVekoQ6VPimqEFCVKlR4oT1wakGkmAhApVaZMeygtUi2EIdKnNNUEJUqVKhCVKlSoQlSpUqJQtDh696tKWDyrGjl0tmta3v1brsa6Vq9mnQ7BUShyLtUUPSrzKGqs9vjpWh9MjISR5kDLvVF7ffatGPpUWjqdSmH5SVG3jIapcQHSrAG9PcR5FV+H5CELERd6k0RzV7kjVV5YxWanazglSlYbIcb0WrnEkxpPtqqLRmY46Z6+VQdSLHFoyiUawA1rXYGww0MaRWbM9sJ5Z7qNJhGhyVC68qgVACTg5LVzlnYhDk7t5+Xursj1l9vBYiPcEgJ/A1Tf0j4TaTwIMug5BjS0agIkDXqLZglolRccrLu4pAcNccBZcbLLHZdPcIaED7ey5/uxD8FrA4zFkK3vFZmiufccGYyqQ3SPZTYPpCNMrtYB3l/8sdR6qpn4bVpcQ2TP/d7r/nFXH4V5/aqdQOcYIrS4kSyY365q+hwb9w/O/wBgfilpytM5/wDin+yv6qiSfPsn/sr+quYlAxVbNcx/BWg+uP6R+KkGBdcgYkAf9kyScABF3J6fk1m8ZhV4ZJDFBb3Fve+jSJapyo3UrKQ2jJAYPDIMjqCPKqXCcc2D+vj/AMRa1OODMXEj4txwqfcFvWH3msxtfQ6zA0yTpzEbva0gwYIIcZB5gEQQnzXPWMWp1HhXSCMYxisGxQowY1rwuzddhXs7KGtIIyUnKhxC3I38KqejMRqA2reeEHrv76lpAGB0qb7MOcSTARK5apipXKYY++oVyYgwppmFRohG1DqJQlSpUqSEqeiiLu5oVMtIQptSFGKVHTVmlCJBeMvtFadvfK2x2NYpWmFXUrh9PG4SIXTj2U1YdveMvtFaUF6rddjXRp3LH9lEhWGTNO42p80xq+ElVxvVqMUBxR4TUKeChVeJju/Grdqe4p9lC4gMoabhzZQfGkMVz3H3p8lbFdUOo9vBD90Lj/gK5Wuo8V/sR/8ACkrn8Xw0Hs/6BQcuQvUyjezes70cVrsMgiqqrXSr0g58lSVvs27RtcBCyu9rLp0gElo8TAAEHOREy/3q3J7SWSBoZo4xeHDgNbQRSNABn7JkUFm1dRnOBgb6hXOxSshDoSjjoysQRtjY+HWtDhnE8IIptTRg5VlOHgfOdcR8Dncr0PsO9citYHxjVY1p9U+rLtTTuDjywGgskasw9pgPRC542GfGofV1dLxqaNmUoQ76ftZVUosrk5DBTvnGxO2Tk48TnVro0WVabXlhaTyO4+IB7jUGuiNTWmWiUqrwyyxND/XR/wCItaXGoDyr/wDtxj/9Lyo8OH2sP9an++K1eLL9nff2t/y3VcriFqw3NOPs/wDbTSJyuRtidQ1Db/jWqtVQtGRvOu7RGgQUFFzSxVcuSfZRkNXh0lCzeJw+OKy2rd4idsedZtvZM/TYeZrl3NImrDcyphVRU/R2q3Lw513He91WIelQbbmYeISlZnozUvRmrXxSxVvojUSsgxNTchq1ZEqIWoG1E7olUJqFzMUaYVWkrPUJBTCtQSKSM1Ye0U+qfnWYlb/DRmPJ65P4CtFtFU6HBIrLltWXwoYreYAqGIoUlojdNqtdafwFErOhuWX2ir8N2D12NVJLEjpQCCOoIqLX1KWDsiFsYzUoxis2C4IrQimBrZTqNd7VGFK5GVPuqvwo90j21ak6H3VU4X+WPbTd/jNPYoV4V1Xiv9iP/hSVyoroeKJMiWdxFzFX0SNebEXXSylwwLr06jr1+FYeJM8Q06cgF+tonmS2QPfBwJPZIiVgkHyNZd3OyuyhT8j410Y47efz9z+mk/aqf1nfHcTXnwln/XWmu29I9Rjf53flBNcok7n8lvkaJDI+rGGx7jXSnid7/P3n6af9qkeL3g/z91+mm/aqhtG+6MP87vy0SsoIfI/I02g+R+RrRPHLv+kXX6eX9ql9e3f9Iuv08v7VaIvf9Nv9b/ykKtw5DzYtj/Kp4H88VqcX/k77+1v+W5qmeO3f9Iuv08v66e9WVLGSWZXUvfxkNICDJ/B5tTb7nc9fHeuZfCoypTqV9LPMxoAcTPnaebW8hsJ9wCUZWOKes/0+n+sK6PpNPqpQVepCXwFZ/wBY1bSLxNNtUP8AURCjMhYgZq4hCgCoQxge+ptHvk1axhEu5lJFLVTZaup0qEqb1a9shCq04FPilVMIQ5BUAKLJUBUCMprNloEq10iWaeQPvonoy/mj5VUbBztyE9S5Ra6Hhn8n8T+Aqz6Mv5o+VSWMDYVbb2hou1EzhImUB9ox+/jUEPdNW2QEY8KjyRjFaHUzy6QkiaBQJLf2AirFMauc0FCzJLNfycg+VAaNl/6VfghPMZ23yNIHktWzEPdWT0cOEjCay4rnwp7DIds9CKsT2Wd9vhsaGkDJ3j099R0Pa4F3JCt1vcH7RmFOWyucE6Hik5TrkNgE4IdQXZgrDAJ8dsE4bwaFYVub13VHOI449IdxjOrDDp1/HO4qevhHlffOD9dcy+uLS8a6hUo1KzGug6WEt1DBAcC3IktMEjdp5hJWW7WoQR/DFyGHduIsrqCgEEp1ABxnxYk5OCGHalDp34hs0Z/ype8sY9UnTnDHdj6x6ZxtVfmcI8r8/of11pXPAoVK8uKFkYJgz3jRyMZdkGhVI3Ow88GuBUtOB25DX2tSnO2ryAwRsX1QJBIgTOTGJRKjdcdSPkOZOIHXCXA9KTBLySLlxp7xBXIHqjAAGM5gna9AAMXpAwMm6BJA0dTpzvoOT1+0b2Yr33BZZ9GhrNEVRGipO0m3NYdSMsS7MPu8KqnsrN/OWvqlv5U+oMgn1endO9XUbH9n6lMGqWzJxrOPM4gHSYkA5gnnk7lArXl7RgwJP/DcLdaCBcKDIQvM7x0er3yMDHh5DFFu2Aydrz1NH+VqPy9RYYj9Y9M+A2GKLa8ElWMwSLYzJztQDzzIVlMeCMpjPdTOD0xRhwa2jiee5hQIujBs55ZC+vTseY23rqdj0NYxa/s/TfpdR8Ql406HgzrI0QPFa4kkgertiS0YYKtcf4/yBCcTtz7fm4W6dNHNAGB3T0HTpjrjO9ed9qu0L3OE0CNNYc995Xd1TQpd2O4C5wAAMsx3JzWv2j4t6TIpVeXHHGEjXrhFzjPt3+4VyN4u5rpWH7P21nQp1DSDauZ8zjEkkD1i2RjYYcJBwCmFVAqeKQqSL59ACT7h+/310QFNPaRZYeQrcKkkVW4ZGNAYjc1exXVtaWmnnnlQKHHjJqFzONsUpAPHrUWt84zVpLogJIkMhIqE0hBFWI1GKHcDpUnNOndCDT0+KcCoIQ5KhU5KjUDuhaK1KooNqlWwbITUqc01NCVKlSpISpqemoQoZ3ouaDneplqQKFOtTgPCFuXYynTBGNcrE47i7lc+GcH4A1lBqvcG441uzaUSWOQaZIn3Vl8c+XU+B6nasXExcOtKjbYxUIgZjcgGCcB2mdJOA6CcIS7RcUNzKWxpiQaYk9XRGOm3gT1PwHhQOG8O5mtiyxxoup5GBwN8KNtyxOwA9tdBatw2d1QQXayO2AsRQrknw1NsPgABU2sOaTHZ7WsEmpndWm59yD10opMg04A2xjPnXIbf0bak22ZTdbtYBl4bDGzAIIc8Oc4jSwGdTiXEODXAolUP+zalQVa7YMMhouH3Dgg+IJIyPbVi1t5x9mk/G20YBRIHXQMZUYM+23hWnxFJ9GuQ2hOpV+1sHXUXYIADKm/6hUH4fcZkVyJMyl218KmnHM0hMqWTGAqgDHhXDqcRq1m6qlywjIALQ6CNJO1uJ8rt/LJIPUIVZopgwi5vHw5UvpGkEqCATvPsMkfOpZmUrqfj4ZiQqmSPJwMnpIRsN96M3DpdwdZXliPl/U+U0IxdQEK6R3mJ2Hl5CqrWdxkYadQFddC8EwhWTTrBQDDZCruR4e01lN6xrs16Wx/yVBmDG1EQAYBGZEmZgBR3/XwRmWYFNT8eDMxVQZFOpgpYgfadcAn4Gg8RsiwHP+umXUoHNWOQa2OlQA0nUk4+NDaxucZSR4+WHlAbhBtULrC4JZtGndCy97I388VaHCrplMfpEWHUDVHZRwqwbDD7RFBC5xvVlPibKTmvdcUmjmQ2pO+SJo48sb7u1CQE9PdUD2bX+a4r8bOJvwkrmO0fCOUEdWLRvrHfjMTI8baXR0JOlhkeO+a7a0t7uRVkFxb5bOR6KrlX1FWVmWIgkMCKp8V4bJy7mKd0lkIN5G6grllyk4IIBB0YbGN9Fb7bidU1fCrXDHwYLW6p30u9ak3DT5idXqtdLTMtJhcDbwqRvQ7tBlUX8ojJ9g/f7qN6JjLMcDwA6n9VAgiZm1ANgDAO4z7j+/WvQvBADC3J+Mc1NbGjpjoKkJBQYAQN8+470O4jJ6H4VvLiBICiiO2d/GhyXWOooDyMo361NSNIY9ap8ScAwmjRXRI6GneTJHlR4cY2qEydKuh2ndJRBBpxUIUxmpFqQ2koUZKGKNjNLk0FpKEe2fUoPmKNVHhjZT3VeFX0namAoSNNT01TQlSpUqSEqi1SqLUFCCzbijMdqEaiFY9T8AKrBQjxnaoMAQMU2gjxqEEgOcfOnOwKF0nZa6hjWTmtEhZkVjIJixt2DCURGPdX6b1c/i7HrRA6PyTfgczV7VPdx99crUHcAZNcmvwhtSs6uLitTLoJDKmlvlAGwafmT2hC6qccLAyWj2UY7176+2ekfTr91SS74WzEcxCAvi1/knT7VxjV91cQGMhGchQenn76sNCB6ox7qzjhDnZbd3Ef7pn/AI/qShdfq4awHei3O+/EPU26e3r91RaLhfhyx3W/Kv8Arvo8f9HNcfCjAYxTGJupzQ7g5cAfSrn+91/l+HuQuvYcN7wDJjUAO/xIjl76sjVu3s6VEQ8JydocGT/3Ank+Pj6/T2e+uWVfOkffURwGBi7uf70ch9nt9eqcrp0h4SBssPq+XED39X+n0x9/lVy0u+GxvzIxGCrEgab0kxFSCCGbSWOT1GPfXF4NQ5oGc7Y86VTgTXsNOpdXBa4EEGrggjIjRt2922EShCIuxJ9QH1d+83j8KsSShR5D5VlLxBlyoGRkkb4xk5qrPcM/U/AV0XXjACRlx3RC1BdA9DUGck7GsyB8HpmrfpNVtuNY8xhOFZZyKJFKCOlUWuBVqz6EmradTU6AUkJpGBOCcZ239tE5jeJb5mq4I6+3/rRM7fqqtrj1+aZUmnYeJ+QNLnnGT+FQnbbOx9mDTzYxpHXOKZcROUQhxXb5yCcHw61oC6b80fOqKDThRuf3+6jBKdJz28ygovCG9Ye6tMVhcJm75GMZH4Vu1rs3aqXsSKemp6atSSVKlSpISpjT1S4ihKkDA95xUXu0tJiULX4Lw1rmeO3RkV5CQCxOBpRm3xv0U11x+i26/nbb5y/s1xP0Y2pHFbI5G0knTP8AR5a9m7U9nrm5kje3vZbRVQqyIZcOSc6iFdR91cC64lVZVa2QwETkT16CVMNleQ8d4Q9rNJbyMrMmnJTOk6kDDGRno1ZrQ43Xr+Nd3wbsaLm+vob2e4leERfbo+lpCyZ72vUcAaR18KPxTsrYWsNyJJ9d2FcxRmVAygk8oaBuzY058znArcy+plwpukvhuwOZAM9hmc7JFp3XneHP5o9+9Thixu27ef79K9MsuxFnbQpLxGYozYGjmCNFYjOkEbu3XPhsdvGszth2Mjt4Rd2bmSDukgsHwr4Cujj1lyR885Pg6d/bvqhgJMmASPKT2O0+5GkridIplAHSvSH7CWYtYLh5pYUKRvM7shCoyZIQafWLFQM569D0qXE+xljJZvc2TyHRG7qxbWsnLyWUgjIPdI8MGgcUtyRvkxMGAeko0lcFacLuJVLwwzSoCQWjjdwCACQSB1wR86z8g/8A6a9s+j+G2Fj9i7OG702fyJzDHzFGw2G3n7zXlfEOGAyyiyWe4tlYBZRG76joUnJCjfJPgPCi3vPGq1KZEaDgkfXoenUZQRAlZttbB3SMbF3VQTnALMAM/Ou3H0U3P87bfOX9muWsrWSOe25kckeZ48cxGTOJFzjUN+o+dezdrOD3FzHGlvdPZssmpnj15ddJGk6WXxIPwrPxG8dQewNIAMySJQ1srx7tP2eksHSOVonLpqBQnAAON9QFc9fyfZtjGfDvA+NdhxHsxIeLWfD766nuxLCX5uWDImidgq6y+O9Dn4/Gta67BcJtrhY7u6kCS6VggdwGdicMzuqjCliAOg2O5zgQPEgKYa7zEgmWjfflGP8AxAavJUibBfGQfHqfacVIlNI272fLFd79I3YsWclr6Hl1uJOUscgVik5KhFDY3Vs+O4x1Odt29+j7hNrAh4lcOsz93miTlDXjflRgHIHXvBvb5VnN5Ra1pbJ1coz3UoK5+87DQR8KXifMcsYon5ZAxmSRExnPhqrgZZVz3entr2/tlZJF2eaGORZokjtgkykESRi5i0NttuMdK8I5dQoXD6jCTHrHlGMY5IIV0adqc3GA2M4x1HTNU8ClprT4p5BKEZZRVhXHnWfipKPfSZVIQr0rD208JyWPkD8ztVZIWPQqT5Z0n76tWsbKrhwVOR16Hr4+NXsLnOmIGfoUiiRR4yfE/hRKA0uNvZS5lXBzRgJKtZth1PtrpBWCto4IOB1rcTpV1k1zQQQgqdNT0SytjLJHEpVWd1QFyQoZiAMkA4GSK2kwJKSFSrb7Rdlp7IRtNymVyQDEzNggZwcqP3Boo7HXXovpv2XK5XM06218vz06cdN+vSqRc0i0O1CCYBnc9AnBXPms7iLdBXV9nuy896JDDylCFQTKzLksCcDCnOMb+8Vz/FuGaJpInZWaN2Q6CSpZTg4JAJ3B8KhVqNfNNpGobjp7UK/9GchPFLIAbapM+wejy12v0tyOs9sVeRByW2R3QE6+pAO9ecwIF9Xb3bV19t2SaTh54gZ8YSR+SYyx+zdkxzNfjpz6vjWF1synWZXqv+zETJMkZz8xyTnELb+iJy0t4WJYmOPJYkk95+pNcp2knK39zJ6zLduRnx0Sd0H2YAFY6yY6Ej3HFMWzW1lsG131p9YARG0Y68/YkThew8d4ZHxe3gkt5gulidxqxqUBkcA5Vht+5zVLtZcRWPDlsdfMmaMRhehIJy8hX8leuPbgedcR2V4Jc3TS+iSLEyBdRMskRIYtjBQHPqmtW4+jm/3YtbyMdziVyzH3so395rli3o0XtpPrjSx2oNMAzuJPv946KUk8l0vbM/xND/V23+6tP2J/8Hl/q7n8GrzHiFrNC5hnV42HVH8vAjwI9o2oCsQMZOPLJrQOHB1Dww+QX65j5b/OUtWZXqf0V/5Bc/6xJ/gRVyPZXto9jCYVhSUNIZNTSFMEoq4wFP5v31zIYjoSPcSKbFaDYU3uqGp5hUIMbRE9Dnfslq27LoePdrmvrjh5eJYeXcKBpcvq5k0XmBjGgfOvUe13Z1r2OONbiW20Sa9UWct3Suk4I23z8K8HmhBGD0oHoo/Ok/22/XWK54a5zmeCQ0MmOe5k7z1KkHdV6Ba9njZcb4XG08lyXjmbXKDlQLecaRknbqfjWb9MDfxrB/q1vj9PNXItZr1y+R0Opsj3Gur7X/R4tjEkzTmfVKI8ctkIyjNnUXbPq9PbVJtHsqsL3jUQQB13J2EDfmicLsfpcvRB9VzsMrFxFJCAMkqgLMB7cA0ftx2UHFktZ7e4jAVX0sQZI5I5NJyCDsRoH31449kp6lj72Y/jRI7fSrIryqjZ1IsjqrZ66lBwfjSbwiswN0OALZzHI9vj8UagvU+1djHB2ekgjkE6RpCvOGwkYXceojc7as43O3ia8RwK2PQlxp72n83UcfKo/V0fl99aKHD6tJpBIMkn4oLll4FLArU+ro/L76b6uj8vvq70Sp2/XuSlZelfOn0L51p/V0fl99L6uj8vvo9Ff0HzRKzCo86iLllGAdvLrWoeGR+R+dRPC4/b86j6LVBlsD3lErIa4Jpc+tb6qj9vzpvqpPbUPRK/b4okLQ00RahqqQNdcKKnSRiCCpwQcgjwI6GoaqYtUpQvYe10JvuGxSRjLsYJFHkzkIR8BI3yrpVtYhELTbTyOXo/9LTo/CuX+iu+ElmYTuYZSMHfuMeYp+ZYf3arNx/+OxHkcvlejddtZHNzjz14WvHuo1HOfbtwKWtw+UfiPaVb36q72Qt/QeHzSSjvq08jjzMZMYHxEY+dcbwXslE1u3EOIzPDC3eGjAdwzYDEkH1mOwAyciuv+lS/5VlyxsZpVXbbuKeYx+aqP71E4DxSSbhsXoPJe4iijjaKbOAyAKwIBGCQCQc46Ve2vV8I3AwatTJmIbnmQQMkiYxCUCY6LkOJ9jbZ7Rrzh00k0aBi6SAZwo7+MKpBA3wRuOnhnp+y9oJeCiIsqB47hS7dEUzyZY+4ZND4pxHi8VrJPOvDI1wQ0Z5uvSRgYw5Usc4xny91T7NWQm4IsJcRB1lUSN0Um5k059mcD41OvUe63Be8ECo2CCHECDvAAMezPsQBnCyv/wCeWNzExs7t5JF218yKVNeM4cIoI+fj415pLZujMjalZWKsp8GU4I+YNez9iezT8OW4kuJYjqVc6C2hEj1HUzMB+cfDbHtryjjNyJbi4lX1ZJ5XXbHdeRmGR54IrZY1PErVG6/EaIh3t3HKenzUSMBdv9CykNe5Oe5B+MtVOP8AbC9teIThJS8KS/yDqpUppBKg4yPHcH9VX/oa9a9/0YfxlrWvvo9jnu5LqaZmR5A5gWPTkDHdZyxyDjfAHXwrLVqW9K+qePkaRynk3bv8PapAHSITfSrZI9mtxjvxOuGxuUkIUr7slT/drnl7IWltBHNxSeSJ5DhYoQMqSM6T3WLEDqRgDpv46P0k9qIiI7aErKVlWSUqQVHLOVjz0znBPlj210vFOJXUsMVxwsW9wG9ZZc5wRtjvqAQcgg7/ACqqhUr0Lek0nS1xOZDcQCBJB0yZMwgwSVwXaDslDAkF3FJJNYu0ethpMiRuRh1IGGGD5dcdc7Ltr2RS0iingeWWNn0sX0NgsuUK6QNjgj4itTtze8RS003X1eEm0gpEJRKrBg+2WIONIyRn8DWr9Hl8t5Zi3mAZreSPY+KI4khb3App/ue2tXpVxTosrufra1xDogy04BmBkHE88JQJhc32g7GxW1pE5edruQxxrEGj0md8alHdzgd7x6486JN2RsLRIvrK5kjmkBwkIGlcY1fkMSBkd7Yb9KH207RBuJwH1obSZBgb5dZFaUj290L70rueOXt8Vhl4atpcROpLGTJO+NLKdagrjOfHaouuLhraXiOjXJJkN7hskECBnacxyBRAzC827Z9k/RFjmikMttIcK506lYrqAJGzAgEggDofZnsvpdH8Eg8f4Wuw3z9jLWH9Id7frCkF2bApIwYC353MVkGTszeqCcZ/Cui+lG45cFpJjVov430+emORsfdTY9732zqhDjL8jngfPlsg7GFiWXYC2iiWTiNwYWbHdEkUSISM6Czg6m92PHrjNZPbDsX6LGLmCQzW5wCW0lk1eq2pcBlJIGQB1HXNdj2q4KOKw281tMmF1Eas6WVwuc4yQwK4xjzFVe2U0dnwxLFnDzNHHGo6EhWUs+nwUYwPbgVXbXtV1Wn+81Oc6HMiABP3DP15yyBlZp7AWot4Lhrh4lZY3laV4gqoyZITujvFioGT4+PSlxXsBbtbNcWEzzFVLAF45VlC51BWQDDbHz3GNutb/GuDNecOtIUdI30QMnMJCswhPdJGT0JPQ+rUuA2X1XYzekyIx1PI2knTqKKqxoSASTpHgN2qo31bTIqy/XAZAyJ9mfj8wjSOi4fsx2RSaF7y7lMFqoYhlxqcKcM2SCAMgjoSTn2Zuzdj7S4t3uOGTSymMnVHKBlioyVHdUq2CCM5B9nWuj7FcSaThqx2ph9KiQry5clchiVLAEHDL4+efI08t/xiOCSeVeGRBNyj83JUDqCshXPQAZ3/ABvqXdx4zwHhpa+AC4ARy8ukkz/EHfclAhcv2V7FR3lm8+uUTZkVFBQIWUdzVlScEnfeq3a3s7aWkKcq451zzQkqiSIhBoYseWveXvBRuT1rrvo9kI4ZMy90h5yMbYOkEYryQVtt3VatzVBfDWOgCBmZwecCMBI7J6VKlXUUUqVKlQhV9RpCSmWo1RJQjK1OaErUSpAyEKcF3JHnQ8kecZ0OyZx0zg79T86QnbVr1Nrzq1ajq1ZznPXOfGgOKGr1CQChXri5kkxzHkfGca3Z8Z64ydug+VDguJI21xPJE3TVG7Rtj3qQaEHqLPTMRCFZueJTS450s0xHQyyvLj3aicVNbyTTy9cnL/m9baME5PdzjrWa1TSSotfGELVm4lO6iN5p3jGMRvLI6DHTCk4qvQFaig1cCOSEaG4dM8t3TPXQ7JnHTODvUpb2Vhh5ZWHk0jsD8Car5qVECZQo4qzZ380OeTLNFnrypXiz79JGarUs0zndCLc3LyNqkeSRsY1SO0jY97HNKC4dMlHdCepR2TI9uDQM05NLGyE5OdzufM75NWLTiM0QIhmniB3IilkiBPt0kVVzTZpGDuhFnnZyWdmdj1Z2LsfeTuanPeyOMPJK4ByA8juAfPBNVs1HNKQhXLPiE0WeTLNDnrypXiz79JGaFNMzks7M7HqzsWY+8nc0Go5oBgyhemdqeP20nDbaKGdGnT0clUYhkKJufYQa4O74jNLjnSzS46c2WSTT7tROKog04aqLagyg3S3OSc90yZVmCZkYMjMjDoyMUYe4jei3fEZpcCWaeUDcCWWSXB9monFVA1ODWoRMpKxHeSKNKySKu/dV3VTnrsDig1HNPTxyQnpUqVCEqVKlTQqaGk5pkpSdKyzhCbVRVaquanEaiHZQjE0J6nUHqTtkJkkqeaqv1qUbmqm1OSaKag1SqJpkoSSbFWUkzVF6aJzUW1SDBQtQGp5qvGaKK1tckpUqVPU0KFOaemNRhCjUakaaooTGmp6akhKlSNNQhKlmlSoQnzUg1QpqJQjBqcNQKenqQjhqfNABqYNS1IRc0qGKlUpQv//Z">
            </div>
{{--            <div class="img-holder">--}}
{{--                <img src="imgs/headphone.jpg">--}}
{{--            </div>--}}
{{--            <div class="img-holder">--}}
{{--                <img src="imgs/headphone.jpg">--}}
{{--            </div>--}}
{{--            <div class="img-holder">--}}
{{--                <img src="imgs/headphone.jpg">--}}
{{--            </div>--}}
        </div>
        <div class="basic-info">
            <h1>Front-End Web Developer - ACREDITAT</h1>
            <p style="text-align: center">23 Octombrie 2022 - 7 Ianuarie 2023</p>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="fa-solid fa-check"></i>
            </div>
            <span>6000 LEI</span>
            <div class="options">
                <button class="btn btn-success enroll-btn">Vreau să mă înscriu</button>
            </div>
        </div>
        <div class="description">
            <p>Înscrierile pentru seria <b>Octombrie 2022 - Ianuarie 2023</b> sunt deschise. Acest curs se ține la sală.</p>
            <p>Pentru plata integrală prin transfer bancar se oferă o <b>reducere de 10%.</b></p>

            <div id="progress">
                <div id="progress-bar"></div>
                <ul id="progress-num">
                    <li class="step active">1
                        <span class="progress-bar-steps">DEZVOTARE</span>
                    </li>
                    <li class="step active">2
                        <span class="progress-bar-steps">ACREDITARE</span>
                    </li>
                    <li class="step active">3
                        <span class="progress-bar-steps">UN JOB BINE PLĂTIT</span>
                    </li>
                </ul>
            </div>
{{--            <ul class="features">--}}
{{--                <li><i class="fa fa-circle-check"></i>Supported Feature</li>--}}
{{--                <li><i class="fa fa-circle-check"></i>Supported Feature</li>--}}
{{--                <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>--}}
{{--                <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>--}}
{{--                <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>--}}
{{--            </ul>--}}
{{--            <ul class="social">--}}
{{--                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>--}}
{{--                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>--}}
{{--            </ul>--}}
        </div>
    </div>
</div>

<style>
    .enroll-btn{
        color: green;
        border: 2px solid green;
        padding: 10px;
        border-radius: 20px;
    }

    .container {
        background-color: var(--primary-color);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .detail-box {
        border-radius: 10px;
        padding: 45px;
        margin: 15px 0;
        /*width: 950px;*/
        display: grid;
        /*grid-template-columns: repeat(2, 1fr);*/
        grid-template-rows: auto 1fr;
        grid-template-areas:
    "images info"
    "images description";
        grid-gap: 35px;
    }

    .detail-box .images {
        grid-area: images;
        display: grid;
        grid-template-columns: repeat(3, auto);
        grid-template-rows: auto 1fr;
        grid-template-areas:
    "active active active"
    "idle idle idle";
        grid-gap: 5px;
    }

    .detail-box .images .img-holder img {
        width: 100%;
        display: block;
        border-radius: 10px;
    }

    .detail-box .images .img-holder.active {
        grid-area: active;
    }

    .detail-box .images .img-holder:not(.active):hover {
        opacity: 0.95;
        cursor: pointer;
    }

    .detail-box .basic-info {
        grid-area: info;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .detail-box .basic-info .rate {
        color: var(--yellow-color);
    }

    .detail-box .basic-info span {
        font-weight: 800;
        font-size: 25px;
    }

    .detail-box .basic-info .options a {
        color: white;
        background-color: var(--secondary-color);
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        font-weight: 600;
        font-size: 12px;
        border-radius: 5px;
    }

    .detail-box .basic-info .options a:hover {
        background-color: var(--tertiary-color);
    }

    .detail-box .description {
        grid-area: description;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .detail-box .description p {
        color: var(--gray-color);
        font-size: 14px;
        line-height: 1.5;
    }

    .detail-box .description .features {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 10px;
        color: var(--gray-color);
    }

    .detail-box .description .features i {
        margin-right: 5px;
    }

    .detail-box .description .features .fa-circle-check {
        color: var(--tertiary-color);
    }

    .detail-box .description .features .fa-circle-xmark {
        color: var(--yellow-color);
    }

    .detail-box .description .social {
        list-style: none;
        display: flex;
    }

    .detail-box .description .social a {
        margin-right: 15px;
        color: var(--gray-color);
    }

    .detail-box .description .social a:hover {
        color: var(--secondary-color);
    }

    @media (max-width: 991px) {
        .detail-box {
            width: 750px;
            grid-template-areas:
        "info info"
        "images description";
        }
        .detail-box .basic-info .options a {
            padding: 8.5px 12px;
        }
    }

    #progress {
        position: relative;
        margin-bottom: 30px;
    }

    #progress-bar {
        position: absolute;
        background: lightseagreen;
        height: 5px;
        width: 0%;
        top: 50%;
        left: 0;
    }

    #progress-num {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        justify-content: space-between;
    }

    #progress-num::before {
        content: "";
        background-color: seagreen;
        position: absolute;
        top: 50%;
        left: 0;
        height: 5px;
        width: 100%;
        z-index: -1;
    }

    #progress-num .step {
        border: 3px solid seagreen;
        border-radius: 100%;
        width: 37px;
        height: 37px;
        line-height: 28px;
        text-align: center;
        background-color: #fff;
        font-family: sans-serif;
        /*font-size: 14px;*/
        position: relative;
        z-index: 1;
    }

    #progress-num .step.active {
        border-color: seagreen;
        background-color: seagreen;
        color: #fff;
    }

    .progress-bar-steps{
        color: black;
    }

    @media screen and (max-width: 991px) and (min-width: 769px) {
        .detail-box .basic-info span {
            position: absolute;
            align-self: flex-end;
        }
        .detail-box .basic-info .options {
            position: absolute;
            align-self: flex-end;
            margin-top: 40px;
        }
    }

    @media (max-width: 768px) {
        .detail-box {
            width: 600px;
            grid-template-areas:
        "images info"
        "description description";
        }
        .detail-box .images {
            gap: 3px;
        }
        .detail-box .images .img-holder img {
            border-radius: 5px;
        }
    }

    @media (max-width: 640px) {
        .detail-box {
            width: 100%;
            min-height: 100vh;
            border-radius: 0;
            padding: 35px;
            margin: 0;
            grid-template-columns: 1fr;
            grid-template-rows: repeat(3, auto);
            grid-template-areas:
        "images"
        "info"
        "description";
        }
    }
</style>
