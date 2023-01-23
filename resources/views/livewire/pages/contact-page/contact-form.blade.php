<section class="contact-section">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="contact-container">
        <div class="contactInfo">
            <div>
                <h2>{{__('Contact Info')}}</h2>
                <ul class="info">
                    <li>
                        <span><img src="{{asset(url('images/location.png'))}}"/></span>
                        <span>
                            Str Franklin Delano Roosevelt, nr.1
                            Cluj-Napoca
                        </span>
                    </li>

                    <li>
                        <span><img src="{{asset(url('images/mail.png'))}}"/></span>
                        <span>
                            manuela.vlasin@yahoo.com
                        </span>
                    </li>

                    <li>
                        <span><img src="{{asset(url('images/call.png'))}}"/></span>
                        <span>
                            0767544016
                        </span>
                    </li>
                </ul>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="{{asset(url('images/facebook.png'))}}"/></a></li>
                <li><a href="#"><img src="{{asset(url('images/instagram.png'))}}"/></a></li>
                <li><a href="#"><img src="{{asset(url('images/linkedIn.png'))}}"/></a></li>
                <li><a href="#"><img src="{{asset(url('images/pinterest.png'))}}"/></a></li>
                <li><a href="#"><img src="{{asset(url('images/twitter.png'))}}"/></a></li>
            </ul>
        </div>

        <form wire:submit.prevent="sendEmailNotification">
            <div class="contactForm">
                <h2>{{__('Trimite un mesaj')}}</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input wire:model="contact.last_name" type="text" required>
                        <span>{{__('Nume')}}</span>
                    </div>

                    <div class="inputBox w50">
                        <input wire:model="contact.first_name" type="text" required>
                        <span>{{__('Prenume')}}</span>
                    </div>

                    <div class="inputBox w50">
                        <input wire:model="contact.email" type="email" required>
                        <span>{{__('Email')}}</span>
                    </div>

                    <div class="inputBox w50">
                        <input wire:model="contact.phone" type="text" required>
                        <span>{{__('Telefon')}}</span>
                    </div>

                    <div class="inputBox w100">
                        <textarea wire:model="contact.message" required></textarea>
                        <span>{{__('Scrie mesajul aici...')}}</span>
                    </div>

                    <div class="inputBox w100">
                        <input type="submit" value="Trimite">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<style>

    .contact-section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url("https://www.abercrombiekent.co.uk/-/media/abercrombieandkent/images/itineraries/destinations/north-america/usa/city-lights-of-the-usa/day-11--miami.jpg?w=1920&h=940");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .contact-section::after {
        background-color: black;
        content: "";
        opacity: 0.3;
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
    }

    .contact-container {
        position: relative;
        min-width: 1100px;
        min-height: 550px;
        display: flex;
        z-index: 1000;
    }

    .contact-container .contactInfo {
        position: absolute;
        top: 40px;
        width: 350px;
        height: calc(100% - 80px);
        background: #87CEFA;
        z-index: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
    }

    .contact-container .contactInfo h2 {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }

    .contact-container .contactInfo ul.info {
        position: relative;
        padding: 20px 0;
    }

    .contact-container .contactInfo ul.info li {
        position: relative;
        list-style: none;
        display: flex;
        margin: 20px 0;
        cursor: pointer;
        align-items: flex-start;
    }

    .contact-container .contactInfo ul.info li span:nth-child(1) {
        width: 30px;
        min-width: 30px;
    }

    .contact-container .contactInfo ul.info li span:nth-child(1) img {
        max-width: 100%;
        filter: invert(1);
    }

    .contact-container .contactInfo ul.info li span:nth-child(2) {
        color: #fff;
        margin-left: 10px;
        font-weight: 300;
    }

    .contact-container .contactInfo ul.sci {
        position: relative;
        display: flex;
    }

    .contact-container .contactInfo ul.sci li {
        list-style: none;
        margin-right: 15px;
    }

    .contact-container .contactInfo ul.sci li a img {
        filter: invert(1);
    }

    .contact-container .contactForm {
        position: absolute;
        padding: 70px 50px 70px 250px;
        margin-left: 150px;
        width: calc(100% - 150px);
        height: 100%;
        background: #fff;
        box-shadow: 0 50px 50px rgba(0, 0, 0, 0.25);
    }

    .contact-container .contactForm h2 {
        color: #0f3959;
        font-size: 24px;
        font-weight: 500;
    }

    .contact-container .contactForm .formBox {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }

    .contact-container .contactForm .formBox .inputBox {
        position: relative;
        margin-bottom: 35px;
    }

    .contact-container .contactForm .formBox .inputBox.w50 {
        width: 47%;
    }

    .contact-container .contactForm .formBox .inputBox.w100 {
        width: 100%;
    }

    .contact-container .contactForm .formBox .inputBox input,
    .contact-container .contactForm .formBox .inputBox textarea {

        width: 100%;
        resize: none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color: #333;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
    }

    .contact-container .contactForm .formBox .inputBox textarea {
        height: 120px;
    }

    .contact-container .contactForm .formBox .inputBox span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        pointer-events: none;
        font-size: 18px;
        font-weight: 300;
        transition: 0.3s;
    }

    .contact-container .contactForm .formBox .inputBox input:focus ~ span,
    .contact-container .contactForm .formBox .inputBox input:valid ~ span,
    .contact-container .contactForm .formBox .inputBox textarea:focus ~ span,
    .contact-container .contactForm .formBox .inputBox textarea:valid ~ span {
        transform: translateY(-20px);
        font-size: 12px;
        letter-spacing: 1px;
        color: #095a55;
        font-weight: 500;
    }

    .contact-container .contactForm .formBox .inputBox input[type="submit"] {
        position: relative;
        cursor: pointer;
        background: #87CEFA;
        color: #fff;
        border: none;
        max-width: 150px;
        padding: 12px;
    }

    .contact-container .contactForm .formBox .inputBox input[type="submit"]:hover {
        background: #344966;
    }

    @media (max-width: 1200px) {
        .contact-container {
            width: 90%;
            min-width: auto;
            margin: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .contact-container .contactInfo {
            top: 0;
            height: 500px;
            position: relative;
            box-shadow: none;
        }

        .contact-container .contactForm {
            position: relative;
            /*width: calc(100% - 350px);*/
            width: calc(100%);
            margin-left: 0;
            padding: 40px;
            height: 550px;
            box-shadow: none;
        }
    }

    @media (max-width: 991px) {
        .contact-section {
            background-image: url("https://www.abercrombiekent.co.uk/-/media/abercrombieandkent/images/itineraries/destinations/north-america/usa/city-lights-of-the-usa/day-11--miami.jpg?w=1920&h=940");
        }

        .contact-section::before {
            display: none;
        }

        .contact-container {
            display: flex;
            flex-direction: column-reverse;
            margin: 90px 0 20px 0;
        }

        .contact-container .contactForm {
            width: 100%;
            height: auto;
        }

        .contact-container .contactInfo {
            width: 100%;
            height: auto;
            flex-direction: row;
        }

        .contact-container .contactInfo ul.sci {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (max-width: 600px) {
        .contact-container .contactForm {
            padding: 25px;
        }

        .contact-container .contactInfo {
            padding: 25px;
            flex-direction: column;
            align-items: flex-start;
        }

        .contact-container .contactInfo ul.sci {
            margin-top: 40px;
        }

        .contact-container .contactForm .formBox .inputBox.w50 {
            width: 100% !important;
        }

    }


</style>
