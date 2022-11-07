<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MDevelop</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="menu-toggle" id="responsive_navbar">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlay"></div>
    <div class="container">
        <nav>
            <h1 class="brand"><a href=""><span>M</span>Develop</a></h1>
            <ul>
                <li class="nav-item"><a href="#">{{__('Acasa')}}</a></li>
                <li class="nav-item dropdown">
                    <a  style="margin-right: 0; padding: 0" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('Servicii')}}
                    </a>
                    <div class="dropdown-menu services-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lessons">{{__('Cursuri acreditate')}}</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#">{{__('Despre noi')}}</a></li>
                <li class="nav-item"><a href="#">{{__('Contact')}}</a></li>
            </ul>
        </nav>
    </div>

</header>
<div>
    <h2>Oferă-ți libertatea de a lucra din orice colț al lumii</h2>
</div>
</body>



<style>

    body{
    width: 100%;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html{
        font-size: 10px;
        font-family: "Roboto Cn", sans-serif;
    }

    a{
        text-decoration: none;
        color: #eee;
    }

    header{
        width: 100%;
        height: 100vh;
        /*background: linear-gradient(to bottom, rgba(0,0,0,.8), rgba(0,0,0,.5)), url("https://i.ibb.co/BwyvFVQ/Home-Image.png") no-repeat;*/
        background: linear-gradient(to bottom, rgba(0,0,0,.8), rgba(0,0,0,.5)), url("http://www.g2ntelecom.net/wp-content/uploads/2020/07/World-Hand.jpg") no-repeat;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }

    .container{
        max-width: 120rem;
        width: 90%;
        margin: 0 auto;
    }

    .menu-toggle{
        position: fixed;
        top: 2.5rem;
        right: 2.5rem;
        color: #eeeeee;
        font-size: 3rem;
        cursor: pointer;
        z-index: 1000;
        display: none;
    }

    nav{
        padding-top: 5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-transform: uppercase;
        font-size: 1.6rem;
    }

    .brand{
        font-size: 3rem;
        font-weight: 300;
        transform: translateX(-100rem);
        animation: slideIn .5s forwards;
    }

    .brand span{
        color: #89CFF0;
    }

    nav ul{
        display: flex;
    }

    nav ul li{
        list-style: none;
        transform: translateX(100rem);
        animation: slideIn .5s forwards;
    }

    nav ul li:nth-child(1){
        animation-delay: 0s;
    }

    nav ul li:nth-child(2){
        animation-delay: .5s;
    }

    nav ul li:nth-child(3){
        animation-delay: 1s;
    }

    nav ul li:nth-child(4){
        animation-delay: 1.5s;
    }

    nav ul li a{
        padding: 1rem 0;
        margin: 0 3rem;
        position: relative;
        letter-spacing: 2px;
    }

    nav ul li a:last-child{
        margin-right: 0;
    }

    nav ul li a::before,
    nav ul li a::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #89CFF0;
        left: 0;
        transform: scaleX(0);
        transition: all .5s;
    }

    a:hover{
        color: white;
        text-decoration: none;
    }

    nav ul li a::before{
        top: 0;
        transform-origin: left;
    }

    nav ul li a::after{
        bottom: 0;
        transform-origin: right;
    }

    .overlay{
        background-color: rgba(0,0,0,.95);
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        transition: opacity 650ms;
        transform: scale(0);
        opacity: 0;
        display: none;
    }

    nav ul li a:hover::before,
    nav ul li a:hover::after{
        transform: scaleX(1);
    }

    @keyframes slideIn {
        from{

        }
        to{
            transform: translateX(0);
        }
    }

    @media screen and (max-width: 700px){

        .menu-toggle{
            display: block;
        }

        nav{
            padding-top: 0;
            display: none;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        nav ul{
            flex-direction: column;
        }

        nav ul li{
            margin-top: 5rem;
        }

        nav ul li a{
            margin: 0;
            font-size: 2.5rem;
        }

        .brand{
            font-size: 5rem;
        }

        .overlay.menu-open,
        nav.menu-open{
            display: flex;
            transform: scale(1);
            opacity: 1;
        }

    }

    .services-dropdown{
        width: 200px;
    }
</style>

<script>
    var open = document.getElementById('responsive_navbar');
    var changeIcon = true;

    open.addEventListener("click", function(){

        var overlay = document.querySelector('.overlay');
        var nav = document.querySelector('nav');
        var icon = document.querySelector('.menu-toggle i');

        overlay.classList.toggle("menu-open");
        nav.classList.toggle("menu-open");

        if (changeIcon) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");

            changeIcon = false;
        }
        else {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
            changeIcon = true;
        }
    });
</script>
</html>
