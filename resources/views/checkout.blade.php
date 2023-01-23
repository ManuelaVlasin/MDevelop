<div class="container checkout-container">

    <div class="card-checkout">

        <div class="front">
            <div class="image">
                <img src="{{asset('images/chip.png')}}" alt="">
                <img src="{{asset('images/visa.png')}}" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>Card Holder</span>
                    <div class="card-holder-name">Full Name</div>
                </div>
                <div class="box">
                    <span>Expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="{{asset('images/visa.png')}}" alt="">
            </div>
        </div>

    </div>

    @if(session('alert-success'))
        <div class="alert alert-success" role="alert">
            {{ session('alert-success') }}
        </div>
    @endif

    <form action="{{ route('single.charge') }}" method="POST">
        <div class="inputBox">
            <span>Card Number</span>
            <input type="text" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>Card Holder</span>
            <input type="text" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>Expiration mm</span>
                <select name="" id="" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Expiration yy</span>
                <select name="" id="" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>CVV</span>
                <input type="text" maxlength="4" class="cvv-input">
            </div>
        </div>
        <input type="submit" value="submit" class="submit-btn">
    </form>

</div>

<style>
    .checkout-container{
        min-height: 100vh;
        background: #eee;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        padding-bottom: 60px;
    }

    .checkout-container form{
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 10px 15px rgba(0,0,0,.1);
        /*padding: 20px;*/
        width: 600px;
        padding: 160px 20px 20px 20px;
    }

    .checkout-container form .inputBox{
        margin-top: 20px;
    }

    .checkout-container form .inputBox span{
        display: block;
        color:#999;
        padding-bottom: 5px;
    }

    .checkout-container form .inputBox input,
    .checkout-container form .inputBox select{
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        border:1px solid rgba(0,0,0,.3);
        color:#444;
    }

    .checkout-container form .flexbox{
        display: flex;
        gap:15px;
    }

    .checkout-container form .flexbox .inputBox{
        flex:1 1 150px;
    }

    .checkout-container form .submit-btn{
        width: 100%;
        background:linear-gradient(45deg, blueviolet, deeppink);
        margin-top: 20px;
        padding: 10px;
        font-size: 20px;
        color:#fff;
        border-radius: 10px;
        cursor: pointer;
        transition: .2s linear;
    }

    .checkout-container form .submit-btn:hover{
        letter-spacing: 2px;
        opacity: .8;
    }

    .checkout-container .card-checkout{
        margin-bottom: -150px;
        position: relative;
        height: 250px;
        width: 400px;
    }

    .checkout-container .card-checkout .front{
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0; left: 0;
        background:linear-gradient(45deg, blueviolet, deeppink);
        border-radius: 5px;
        backface-visibility: hidden;
        box-shadow: 0 15px 25px rgba(0,0,0,.2);
        padding:20px;
        transform:perspective(1000px) rotateY(0deg);
        transition:transform .4s ease-out;
    }

    .checkout-container .card-checkout .front .image{
        display: flex;
        align-items:center;
        justify-content: space-between;
        padding-top: 10px;
    }

    .checkout-container .card-checkout .front .image img{
        height: 50px;
    }

    .checkout-container .card-checkout .front .card-number-box{
        padding:30px 0;
        font-size: 22px;
        color:#fff;
    }

    .checkout-container .card-checkout .front .flexbox{
        display: flex;
    }

    .checkout-container .card-checkout .front .flexbox .box:nth-child(1){
        margin-right: auto;
    }

    .checkout-container .card-checkout .front .flexbox .box{
        font-size: 15px;
        color:#fff;
    }

    .checkout-container .card-checkout .back{
        position: absolute;
        top:0; left: 0;
        height: 100%;
        width: 100%;
        background:linear-gradient(45deg, blueviolet, deeppink);
        border-radius: 5px;
        padding: 20px 0;
        text-align: right;
        backface-visibility: hidden;
        box-shadow: 0 15px 25px rgba(0,0,0,.2);
        transform:perspective(1000px) rotateY(180deg);
        transition:transform .4s ease-out;
    }

    .checkout-container .card-checkout .back .stripe{
        background: #000;
        width: 100%;
        margin: 10px 0;
        height: 50px;
    }

    .checkout-container .card-checkout .back .box{
        padding: 0 20px;
    }

    .checkout-container .card-checkout .back .box span{
        color:#fff;
        font-size: 15px;
    }

    .checkout-container .card-checkout .back .box .cvv-box{
        height: 50px;
        padding: 10px;
        margin-top: 5px;
        color:#333;
        background: #fff;
        border-radius: 5px;
        width: 100%;
    }
</style>





<script>

    document.querySelector('.card-number-input').oninput = () =>{
        document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
    }

    document.querySelector('.card-holder-input').oninput = () =>{
        document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
    }

    document.querySelector('.month-input').oninput = () =>{
        document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
    }

    document.querySelector('.year-input').oninput = () =>{
        document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
    }

    document.querySelector('.cvv-input').onmouseenter = () =>{
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
    }

    document.querySelector('.cvv-input').onmouseleave = () =>{
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
    }

    document.querySelector('.cvv-input').oninput = () =>{
        document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
    }

</script>
