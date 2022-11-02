<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>MDEVELOP</title>
</head>
<body style="background-color: #eee;">
<header></header>

<div style="display: flex; justify-content: center; margin-top: 10%; font-size: 30px">
    <h1>{{__('Cursuri Acreditate IT')}}
        <i class="fa fa-graduation-cap"></i>
    </h1>
</div>
<div id="card_body">
    <div class="grid">
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="data:image/jpeg;base64,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" alt="Rome"/>
                <div class="card-content">
                    <h1 class="card-header">JavaScript</h1>
                    <p class="card-text">
                       25 Ianuarie - 30 Mai 2023
                        <br>
                        <strong> Nivel: Incepator</strong>
                    </p>
                    <button class="card-btn">Afla mai multe! <span>&rarr;</span></button>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img
                    class="card-img"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAABL1BMVEUAFi0FKE3DAC/dADEBGjICHTgCHTsBGTL///8AFi4BGzUCHz0AKU5h2vsCHTkAFixk4P/IAC9l4/8AACoDI0PlAC8EJ0nKAC29AADBACIAACbhADAAACPcACW9AAfCACoAACjaAAz41NkAAC3cAChd0vPqh5Hah5BUv98AEjgAAB9mHEIAEy8AABsAGThPtdS/ABMADTntmaHfmaBJqcdYyOlCmrjbABpHIUcAHEGlEjuuCjMUJky4BTFTIEZ0GUCYFT0tJErmbXrQYm8NL0j45+osa4ckXXoVQF41f5zoub6qEToeUW/fNkvIOUxqHUSEFz6BFz2OFDviSVtLIUYyd5ERNk7eIT3vrbMjJUv13eHGKEA+j6zelZ0MMVI6IkgAADQAABHneYTLSFnjWWnbMJeNAAAVF0lEQVR4nN2dC3vaSLKGwQZkJEsIwUCC8QYHM4McDONZICH3ZB0uCbtzxWdnDuvJnt3//xtOd0t9kdSSWhKIRDVPLoNtYr2u6vqqutTK5fdo9YJctKyALZcx2yc+Dj/p0Ne7Y9srvrwiZ5zffvHlNQ+/Q1/wbm3P+AC/ootf+dCXvEvbN748cT85i/63d3zZ5rd/fI2Ch1924nf/+PKNDPtfCvjydcnmp2VOPqeBL8PlRyr48grhJ2WLXzr4OOVHNvilhI8jnzNRvqWFL1/MJL/U8FH5nKXyLT18mZR/6eHjlR+HvvrEliK+fN3rf197/KaJj5HPWfG/VPEx8jkj/NLFlzn5nDI+pnufifItbXyMfM4Cv9TxceTzV1x+pI8vU/wOgK9xoPKtYtsu3/MA+Hjyb6/8ALCyJMnAiiBzyVKhXN4VxEPgS1M+A06SrJXcpmmSlNsBwoPg48nnffgfYCd7yFGTkxM8DD5GPu/T/zhu5/bChFnrQPgY+bwvflIxjJ1liVzwUPgY+bwPfhUp1PGYII4P8GD4GPm38/KjUhb0POKBcfkdDt8e+fHzhWYb92Mx18AD4mtIeyk/eHErS1I5Vy6D7F6Gf/KkjHwAfKfA4n81lX+75Od2PVlC1BwGPk1yf54WZwVMCO/Hn94lIMjhl1j+uYOy7EZHEZZdBGP87JKwe/38+Jtm88Wbl7EJKjvmV5Gcjse6mwsd+qPs+vzI/heb3Z9vm9+cHR9Xj46qzU9P4kbxbuWfk55sLXf+Pw+E0LFSaingA6Te/VSF7I4RPgiw+vZ1PICaV/7F9z9ZYUhgrws2CDABvxjsXr55ZbPD+BDBo1+exSG4Q/nMLmWSEDxk5bLGUo/0T0aG9+TFGYVH8SGCr36OkUjkHfGrMPSKPvAkiZceyjnGAaP5XzR2MFkw7Jz4EMEYicTLL458qUgkchXZzU7ymhMg64D7wIeShZudB9+RlUjykQg2dlF+MPRQ4Aai8yIs5yi/YoT8K8qOJgunPXTjQ4nkeaREUt8BvzL1HjZwA9i5CDIiMIJ+EWLnSBYOu/zbIy+/yIlkB+WHxtIThucASPkVhPkJwHMlCwe99x8e8PBFTSQc+RyNnxxGD72l569+/ITTbxg7b7Jg7eKPE777RU0kmnf3LQq9guKl50Bn7RQRs19zAyQurIm6XyC8Z7xkwTrfrycnj/3cj00kIvyKbn4RFBibNZz0vOh4CL3vI8gvgJ5PsmCd7+PJyck//N0PJ5I/Bfglkc8k6uSckx7gw0VHEGKA9lfRBCT4Lwfga4bAOz47BvROPn4fiA9Y84lI/MaXz0T0ajh0seu54cE3dwN0OKBEfxBJ8b0Kw/f0nxDfSbD3QXy/CSWQQszyt0KWLCe9QgHyGQCTIDiNrA4ahCgN2oMB/ASnAxJHFktdAfieh+JD9E7+ytF+TnzvhPDR2Wctkv8Rj5Fs2ozrDa6X882ieDUAb0qtWBxc3c5Xm/XVgHFA62dBPDkpvl9C8J1/a+E7CYveZl5MvtSlOPFLnE9z+h6id9c3dGD9eadFdbU2qG368GVjsvTwkyK5XwC+N2GJ44ON77sw90sgn8P5kevl0LtVdRVgUlWjt2kPFcuG7XnPUK3X9TsrgBl+WhT3C8D3+ptAepfvbXonvtLZthfC9Rsjn4XLN3y5eLFnksb1SNcnm/kWuKBq9O9qiF7ttm+outFfLeYjXZ1cMQnEegP7/RSRhTcA35/B+IBkxhYgnYFVn4uXv4pXPofwKysc57PoDZaG2rvqmJ2r5Ri626YN6LXmKnDG8V27MzSv+6qxGLj4kcaXSOkbgO9lsPP9SuiFSeefIrRfOOVH4CJELzZH6Uko58qtra7POyUYr63lBDjguDbsTIHrTdYtGMml4cLQpy2Zyb/oPSJov4ArOQ12vo8UX7B0rr6J0v8resuPwAvgrXwWvWK7r6r1kr3gdaZgGewPQbwa0669DJZqqjppWwKQ434CySMI31EAvbP/YegFS+fm60jtUzlS+YYTh+YJXbl43VN7bQVbDUYtTCXzGnmt1Vd7Q012hS9+T4HGXxC+FwGp15bM2IK8rylSszEWRT5TT6H4LLksa8WWofZbFqc6MHM5Afx6axP+j410rOu3msaEL3pT4tGJ8L0NwuegFyidq79Hw9fg8PP9/jWHymBDt6iZhjqqYXiAWBcEszqZ4f/F+IZ2JUfdTzx6g/D97I/v/AecNQSks6BqJlYX9z9c48uM89mhq2F8ddu6YN0D/01M/ALGpxVd4YujNzz3BuH70V+5YMn8+H/DpfOryLuXPH78b19yxC7jfBrA19LVfo3SGwOZvOyp+qhL+AF8an2o4fDF+HAhE972C8L3zBcfkczvH/wRJp2rn6Jv/iqC/EjBliP4SOiWSu2eOukQeisg/ZbmEmSPKeHXhakDYGLDN8esqGH0AvH97osPS+YPFw+/C5PO1bcxpg9E5TN2E+p8OHRB2QDyqoojdbYAem9h1s01UC4b/Ko5UXs1BfJjwpd16iT48r7OhyXzD+fVB2HSufpzvOENkfKNLH05p/PBIUhFAeGqL0t1ZTYzPzeA123vl8vl/Qasf8uuaaIUoqujDtB/muZ0v5wiuPgFXcJp08/5cMK4PKs+xArGTzo3f4w1PMSRz15+Di+hzodCV1FMVHV07xer6aiHRJ+O+gRAvYymq8W9WVuDqgMkFxK+2P0qO8Hn0zAlkvnj0+PqI5w8/KRzRNVMjCOfPbHkwVegoQvwLYBzjSe6YTGz6DF/743Gtogm4YvxlRRWD8XE94mPj0jmXy+Pq0cPsCv6eZ9Ys9RjjXB+ziXe4XzKsNZaT1UbFfytPxqPx1Pwa9QnLwIbL2q1IQhfdL+WbDeuKsVd4PPRzVgyf7iAQxoP/xYsnasvY85O8vg55R/BV8mxmg/QG3Zutz0DYQOBOp+Aha92Y1p2090Yam++HfUQQUOdLltDl/vZb6wkwsdvmBLJ/O05mnF5gNum/Oh9FXt4N1Q+Y3wawWc5X6lzD7IGcjB9c3PTXenq5KZB7Wak69PWTXehIy/U9dGyXbJWP4JPEVIugfiecJUL6TIDehDfw38FSufoqjmQnwOf5vY+lHYHtS2EAuJyoetjs34PIK1nCBzwaWD1e/Dhdd2cgtQCIhwCHA8HRRK9uVzBxhdW9Qbi4zZMiWT+51ML39EjHMw87RKlWeoxnnxmr4ipDmjebS1BVOq9Vb07NEFwmjfAE8fQ+WY39+v7z5CjCfyx3/0MShBz2DU36PMXLSb3SrvA95KHj3SZ/35m4/set/540rn6SwJ8rHzm+Z+FT8H40NLXgiGprjom0HUmIDdfgnKjDkN2PjEMo7f5DP7+eaIac6CgYQGnmG0I0NhcUXzA+xQR3RyIj6ebL/+LdfLFMfa+/wRI52jNUo9pgfzc+GCHfg3bovdWqwDWGuORqq+Ay91sDZRqDeiJM8B4AmN3hloH5nBsAJ5tsvhhfEm8L39a5Tgf1invLzG+I1z48qSz2IiBvzHy2cPPXvuUEosPROQU9eJhVXaD5HIPAbPoAX4bCBOpFxX3/oZXAK5+K2F80k7weXUzkcwfLs6hPYT2PS58OdJZcMTA3xj54i7fKkWP97XBqja6LpEW6RYm1znlhWia+UZ9DT8wJa3T0jXwxWl7t/i8gwZEMj/+AdlfkeHcy5HOzYjNUo8x3VO3fLaFC4vvqq8aylChTVJAaQJXu5lB8BnLPBQvAN+Sdk7hvkcP4wNvbOELoReCzztocH4SaF7p3Exy1xsy//DF+BSK73qi9v5dovi6YOXbmgDfPYNvDfDN5mD16zL4AHi1RfApu8D3xp16iWT2s7/sUPbZpvmvfpK99uWo941U447xPqDw0NKXv9EJPh15H6ClL2YE31Cxdt0sfJqFL/Quj2B8nkGDixB6HulcFR8x8DO6+GnuxQ/jKxB8A1CQTVDmYNY+lHhHBB+sQGZzuHE+7mJ8JTiRsG258CX0vncufOf/F4bPLZ1jNUsdFiSdyzY+mWbeNqhv+ybOvCbJvPk1ybwLSHOC/LBBMi9s5Q+wcKkotvclw5d34WMGM/zMJZ0jjRjwDBRuAXcN2mtfsUKFyy1sE6zbQ6L7gHSGq585t5osxgo6H3DSESjtVjD1KqUOHELQ1wRfwcYXOiQZ/L27Bg2IZA4wl3ROqJpZery2C9XNpOoY3MESYnxfK6HtIX0Bl797WKktxz21N1rDRDLrgQSyhJVbvV6q1acQrFW1IXww8SoJm/V5z6ABkcx/PPYa5ueUznGbpbY1Ct6mPUMPp16cO6zJoOLIgE2AdddENS/sDIxgzZs3Z6ezG1jz3kxhGdwFIufe7C5h08CY3NFZoVxREZN9YfgcgwZnf8eInl5g+wu2B7jwdUrnqCMGLivI9LhEidMyxblDYjsu2tUcNgGMyWoOKcEF0JjbHRf0ex34nX5fN1cgrFd91J1ZtYdMx0XZET5Hw5RI5o9PyWvknjZS+DqlczNus1SIHp4QItFrN5s7tZU1AQn3h7qwr9ebsf0+kF5WrW5jY/cE1e2wozH9PuGlLwzfTyy+Swzov5defLRr6pDOzST0ZJaexNsuwlWv4uw2a6VabT6ymvR6b7SdQI1yg60L1EwPNputj/c3Zs252VEU7LeE4mMbpkQyf7g45uAjO74nbPJIopqLBZaexNtsI4uf7Gg3Q6hmp7FCI1X4V2/S74/6/f7E0s7Wfoc+vauZJYVstUWL3TB8vzH4iGT+4ZyH7+gh/jgjneOMGGDTpFB6ZKfXEb3I/aCYW4OlD3mZTksOvHuEvBJKF+9Om2TTE7i3IwTfOxq8VDKzAc3gI11TRjonUM0KI/h86eFhMlh48Pd5u93u/WKz7cPizao54K/tZgHWRHMJZGEXwmL3eXO45Eg2Hgnx5SkqssXx8YKPjyYPKp3jjRhAqwvRI1u9sOfHuB/cqkTzU8sSVM8zE2aL6TVY+K5WAGTDnKFqFwibiTVloDmdT6jkCMXHDBpQycwkDufd5KRr+pg0DmKOGIjTI7kXux8TvmjGxe5bzZag3tjeNEw06zLDI0LAFYcl14yLVhKO3VB8pGFKJDObOJz4aPIg0jmuaq5TySLjhY9/AaRpxVYeZMKq18LDVOYctuO7a1S14RdrI1W/HTonrCTxxBGODw8aUMnMJg7XWQYkeRDpHFM1N4TpMe4nuYZLS1eq2u/Q+b4V8LsNbbPY833GcmhPGFj0ypp44gjHhxumT8kgfcBJGiR5nLzCa1881Sx56fn7Ana/Eut+cMiqrUN8ZLy0Bu9JUPURGfkDq+PUwseErqwI9qqE8OEB3ctvbXt/7o/v0T++s+0/OHrjwHPJ5WDfo9qlJFcY9wPL35WND/Nrj0HS7bcJPIyPG7pi50GE4SO6+dy2y2N/fEePHtpm06vGUs0cekEagqx+7vC96qkTZrK+tkbCZdXB8BQcvBY9K29Ecr7woyCeVAPvzfKc48JYtflLnNjVwosNl5Vw9nDc16FdgbzaofdwwAoX3ls0rZWY+zrUIntfh6bY+ATvxg+9mNPTN8cBNygE4Gt+ehdnm0io2HC6n913gdmX5deCus++gciswY3w0TXMHxP75kBrd826KUumCx9yvsRnGTAA3575AvTF13zxW6w9NiWy7wEr4vDV2PAdwIYUdLXSsL2APdRt27q3CLxqwpeBCNTHbSZ0FYxP9BgKkSs6Pf39k9+pED74mq+exNugrMehR5r2iiIzNxZJtwBVvdOptRbwHlR1ASPZvIN9+d5m2Kp1ahP2jsoCpSd8jpDYRZ2ePnvFXwK5+KrVNzF3d8WLDYfR8FVkJnzbU9iZWk0nBhxtqZuIztAeXxttt2Bt7F/RhY/Q29ExOA6AT5o8gBx8KGPEHMiNRy9niz90+XKZ8mtNrLvJdWOyuMJ3k5dqt2PDHoxUbweutBEldKMcQMfPIZwT1J7HyhjInMVGBHr2phG6/iLlJ4HsYeiGOl5fD+gpV9qwfbuFw2r6iKHHZF1hepGOPzwFNYgboBtf88Wz+FMZUUq1AH6aRNe/trZe3LXa7pM0hq22slxqbYnSyxHJJ3wEU8TTIzk5xIkvdsZAJiehh7fMkUnMAjiwjmspsmYl5gFTbNhTVfZA/c5OUPMA/NOZQ1h8IGNEvXmSNdqbFyh0/fjZ65u9ANr1W4AxpwhV8Dx4hCPEI1/k6elrtg6h+EDGEDrsy884cjkKPBc/zXbAwEOsJOcZVhX6oABRfjGu05FD6Mm5z39PNIrGkcuRjzBl+VGAPgQpO3oCmBaVX6xLZXJIdQcZAxpHLkc/ANY6wZVUuTgy0ZtJLnIWu4KDHnuCqVjRG+9iT09fPrdySNXKGK8TDkHGLDZC+GEPJG+JDb8kw2yLSwx0TnZEfnGvF+eQapIaY9f0IAF4crjCAJQlkh0cBl4sYi+l9Mr0BD9FhF/8SwY55Oibs2rSjAGN6c0nomedoa45+AGCmp1EGHKSrNFPQO0V8jCASP6X5KphDkmaMXZLz6Igl1wAIcOiPUKAtkFcH6zQxyk48kfSIY1QgPmEGQNZglKNiw/t/br5BVmFfTCF4xDj/eJLHLbQkhUbPH4RAcpOeuwR2nvGtwMrSsmKDT+Amig/N70c+8iZkG/l0PDyipdeIniYHwQYjg4/FMVJj3lsSsikxsHpeSVL8qdVYhxl2Z2F3fAkDrwo/A5MjyP4dvKsT+ZxTr6PC5TZx0C5vp7lFyRfvjh6u3pSNPNcJ8n9XDYNiOky+wgtztfTB1gE8TsoPY7g2+lztike66lOSDKXnXB9nV3oARRZpueG6LKwr2P4+X7OIfFJuys29mKEn+L7Uz0gPfkLp8e0T32Xv8PRK3pKtX1EbiKjB5L7fcbh6Em7K3T3Z1pI8jgUPeWroIf5+aaZQ9FLuKuWnsmB95Qfhl7dSy9FIpEsuGV6aHqFL5xeiB2CHkcuf6GRG2qHwOeVy4emENsOQC+dUi0dS5+et9j4eumlj48OAn2hpVokS5seHQTKAr208Tnl8ldPL2V89YzRSxdf5uilio9Tqn2tchlbivRosfHFF7rCliK+DNJLEV92Cl3GUqPnLTYOfem7sLToaZ5i4ysu1ailRE/JJr2U8HnpZSJ0U8JXzyq9VPBll14a+BqZK9WopYDPIZezRS8FfFmmt398cgZLNWr7pkd685mkt298pDefmRaVw/4fceYOjy+26pQAAAAASUVORK5CYII="
                    alt="Grand Canyon"
                />
                <div class="card-content">
                    <h1 class="card-header">React & Angular</h1>
                    <p class="card-text">
                        25 Ianuarie - 30 Mai 2023
                        <br>
                        <strong> Nivel: Incepator</strong>
                    </p>
                    <button class="card-btn">Afla mai multe! <span>&rarr;</span></button>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg6ahPBwJf_hnTyK9_mMQUDT8qr1EbQwL3Pg&usqp=CAU" alt="Maldives"/>
                <div class="card-content">
                    <h1 class="card-header">Backend PHP</h1>
                    <p class="card-text">
                        25 Ianuarie - 30 Mai 2023
                        <br>
                        <strong> Nivel: Incepator</strong>
                    </p>
                    <button class="card-btn">Afla mai multe! <span>&rarr;</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

    * {
        margin: 0;
        padding: 0;
    }

    html {
        box-sizing: border-box;
        font-size: 62.5%;
    }

    header {
        width: 100%;
        height: 100vh;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .8), rgba(0, 0, 0, .5)), url("https://edexec.co.uk/wp-content/uploads/2018/02/education-technology.png") no-repeat;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }

    #card_body {
        font-family: "Poppins", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .grid {
        display: grid;
        width: 114em;
        grid-gap: 6rem;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        align-items: start;
    }

    .grid-item {
        background-color: #fff;
        border-radius: 0.4rem;
        overflow: hidden;
        box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: 0.2s;
    }

    .grid-item:hover {
        transform: translateY(-0.5%);
        box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
    }

    .card-img {
        display: block;
        width: 100%;
        height: 20rem;
        object-fit: cover;
    }

    .card-content {
        padding: 3rem;
    }

    .card-header {
        font-size: 3rem;
        font-weight: 500;
        color: #0d0d0d;
        margin-bottom: 1.5rem;
    }

    .card-text {
        font-size: 1.6rem;
        letter-spacing: 0.1rem;
        line-height: 1.7;
        color: #3d3d3d;
        margin-bottom: 2.5rem;
    }

    .card-btn {
        display: block;
        width: 100%;
        padding: 1.5rem;
        font-size: 2rem;
        text-align: center;
        color: #3363ff;
        background-color: #d8e0fd;
        border: none;
        border-radius: 0.4rem;
        transition: 0.2s;
        cursor: pointer;
        letter-spacing: 0.1rem;
    }

    .card-btn span {
        margin-left: 1rem;
        transition: 0.2s;
    }

    .card-btn:hover,
    .card-btn:active {
        background-color: #c2cffc;
    }

    .card-btn:hover span,
    .card-btn:active span {
        margin-left: 1.5rem;
    }

    @media only screen and (max-width: 60em) {
        body {
            padding: 3rem;
        }

        .grid {
            grid-gap: 3rem;
        }
    }

</style>
