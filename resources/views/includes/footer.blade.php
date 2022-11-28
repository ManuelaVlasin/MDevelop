<section id="footer">
        <div class="main-content">
            <div class="left box">
                <h2>{{__('Follow us')}}</h2>
                <div class="content">
                    <div class="social">
                        <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
                        <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
                    </div>
                    <h2><span style="color: #87CEFA">M</span>DEVELOP</h2>
                </div>
            </div>
            <div class="center box">
                <h2>{{__('Contact')}}</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Birendranagar, Surkhet</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+089-765432100</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">abc@example.com</span>
                    </div>
                </div>
            </div>
            <div class="right box">
                <div class="newsletter-container">
                    <div id="subscribebox">
                        <i style="color: white" class="fa fa-envelope fa-4x"></i>
                        <h3>{{__('Abonare la newsletter')}}</h3>
                        <form>
                            <input type="text" placeholder="Enter email" id="email-input">
                            <input type="submit" value="Join" id="subscribe-button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div style="text-align: center; background-color: #344966; color: #d9d9d9">
                <span class="credit">Interface Created By <a href="https://www.codingnepalweb.com"><span style="color: #87CEFA">M</span>Develop</a> | </span>
                <span class="far fa-copyright"></span><span> 2023 All rights reserved.</span>
            </div>
        </div>
</section>

@livewireScripts

<style>

    a{
        color: white;
    }

    .main-content{
        display: flex;
    }

    .main-content .box{
        flex-basis: 50%;
        padding: 10px 20px;
    }

    .box h2{
        font-size: 1.125rem;
        font-weight: 600;
        text-transform: uppercase;
        text-align: center;
        color: black;
    }
    .box .content{
        margin: 20px 0 0 0;
        position: relative;
        color: white;
    }
    .box .content:before{
        position: absolute;
        content: '';
        top: -10px;
        height: 2px;
        width: 100%;
        background: #87CEFA;
    }
    .box .content:after{
        position: absolute;
        content: '';
        height: 2px;
        width: 15%;
        top: -10px;
    }
    .left .content p{
        text-align: justify;
    }
    .left .content .social{
        margin: 20px 0 0 0;
        text-align: center;
    }
    .left .content .social a{
        padding: 0 2px;
    }
    .left .content .social a span{
        height: 40px;
        width: 40px;
        background: #344966;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        transition: 0.3s;
    }
    .left .content .social a span:hover{
        background: #87CEFA;
    }
    .center .content .fas{
        font-size: 1.4375rem;
        background: #344966;
        height: 45px;
        width: 45px;
        line-height: 45px;
        text-align: center;
        border-radius: 50%;
        transition: 0.3s;
        cursor: pointer;
        color: #d9d9d9;
    }
    .center .content .fas:hover{
        background: #87CEFA;
    }
    .center .content .text{
        font-size: 1.0625rem;
        font-weight: 500;
        padding-left: 10px;
    }

    .center .content .phone{
        margin: 15px 0;
    }
    .right form .text{
        font-size: 1.0625rem;
        margin-bottom: 2px;
        color: #656565;
    }
    .right form .msg{
        margin-top: 10px;
    }
    .right form input, .right form textarea{
        width: 100%;
        font-size: 1.0625rem;
        background: #151515;
        padding-left: 10px;
        border: 1px solid #222222;
    }
    .right form input:focus,
    .right form textarea:focus{
        outline-color: #3498db;
    }
    .right form input{
        height: 35px;
    }
    .right form .btn{
        margin-top: 10px;
    }

    .bottom center{
        padding: 5px;
        font-size: 0.9375rem;
        background: #151515;
    }
    .bottom center span{
        color: #656565;
    }

    .newsletter-container{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #subscribebox{
        width: 700px;
        max-width: 100%;
        margin: auto;
        text-align: center;
        border-radius: 4px;
        padding: 60px 20px;
    }

    form{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    h3{
        font-size: 22px;
        text-align: center;
        font-weight: 700;
        font-family: inherit;
        color: white;
    }

    #email-input{
        width: 450px;
        max-width: 100%;
        font-family: inherit;
        color: #344966;
        text-align: left;
        font-weight: 500;
        border-radius: 2px;
        padding: 15px 0px 15px 20px;
        font-size: 14px;
        border: 2px solid #B9D9EB;
        background: white;
    }

    #email-input:focus, #email-input:hover{
        outline: 0px;
    }

    #subscribe-button{
        border: 0px;
        width: 150px;
        max-width: 100%;
        font-size: 14px;
        color: #F0F4EF;
        font-family: inherit;
        background: #344966;
        cursor: pointer;
        border-radius: 0px 2px 2px 0px;
        outline: 0;
        transition: all 0.2s;
    }

    #subscribe-button:hover{
        background: #213144;
    }


    @media screen and (max-width: 900px) {
        footer{
            /*position: relative;*/
            bottom: 0px;
        }
        .main-content{
            flex-wrap: wrap;
            flex-direction: column;
        }
        .main-content .box{
            margin: 5px 0;
        }
    }

    @media screen and (max-width: 700px) {
        #subscribe-button{
            width: 98%;
            margin: 5px;
            border-radius: 2px;
        }
        #email-input{
            width: 98%;
            margin: 5px;
            text-align: center;
        }
        #subscribebox{
            width: 100%;
        }
    }

    #footer {
        background-image: linear-gradient(60deg, #30CFD0 0%, #330867 100%);;
    }

    #footer h2 {
        color: white;
        font-weight: 500;
        font-size: 1.8rem;
        letter-spacing: 0.1rem;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
