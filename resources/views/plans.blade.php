<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div>
    <h1>Pricing Plan</h1>

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="container pricing-container">
        <div class="card pricing-card">
            <h2>Basic</h2>
            <span><sup>$</sup>50</span>
            <ul>
                <li>1 year general assistant</li>
                <li>100 free domain name</li>
                <li>unlimited lifetime access</li>
                <li> 1 year product support & chat</li>
                <li> 100 email account</li>
            </ul>
            <a href="{{ route('plans.checkout', $basic->plan_id) }}">Purchase</a>
        </div>

        <div class="card pricing-card">
            <h2>Professional</h2>
            <span><sup>$</sup>100</span>
            <ul>
                <li>1 year general assistant</li>
                <li>100 free domain name</li>
                <li>unlimited lifetime access</li>
                <li> 1 year product support & chat</li>
                <li> 100 email account</li>
            </ul>
            <a href="{{ route('plans.checkout', $professional->plan_id) }}">Purchase</a>
        </div>

        <div class="card pricing-card">
            <h2>Enterprise</h2>
            <span><sup>$</sup>200</span>
            <ul>
                <li>1 year general assistant</li>
                <li>100 free domain name</li>
                <li>unlimited lifetime access</li>
                <li> 1 year product support & chat</li>
                <li> 100 email account</li>
            </ul>
            <a href="{{ route('plans.checkout', $enterprise->plan_id) }}">Purchase</a>
        </div>
    </div>
</div>

<style>
    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #22577a;
        flex-direction: column;
        padding: 40px 0;
        gap: 30px;
    }

    h1{
        font-size: 2em;
        text-transform: uppercase;
        position: relative;
        color: rgba(255, 255, 355, .8);
        padding-bottom: 20px;
        letter-spacing: 1.1px;
        font-weight: 300;
        text-align: center;
    }

    h1::before{
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        background-color: #ee6c4d;
        width: 60px;
        height: 2px;
    }

    .pricing-container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 40px;
        padding: 40px;
    }

    .pricing-card{
        position: relative;
        width: 330px;
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        padding: 20px 0;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .5);
        transition: .3s;
        overflow: hidden;
    }

    .pricing-card::before{
        position: absolute;
        content: '';
        width: 100%;
        height: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, .2);
        z-index: -1;
        transition: .4s;
    }

    .pricing-card:hover::before{
        height: 100%;
    }

    .pricing-card:hover{
        transform: translateY(-30px);
    }

    .pricing-card h2{
        font-size: 26px;
        text-transform: capitalize;
        color: #ee6c4d;
        font-weight: 300;
    }

    .pricing-card span{
        font-size: 4em;
        color: rgba(255, 255, 255, .3);
        font-weight: 200;
    }

    .pricing-card span sup{
        font-size: 25px;
        color: #ee6c4d;
        font-weight: 300;
    }

    .pricing-card ul{
        height: 250px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    .pricing-card ul li{
        list-style: none;
        color: rgba(255, 255, 255, .6);
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, .4);
        letter-spacing: 1px;
        color: black;
    }

    .pricing-card a{
        text-decoration: none;
        padding: 10px 25px;
        border-radius: 25px;
        border: 2px solid #ee6c4d;
        outline: none;
        background: transparent;
        font-size: 16px;
        text-transform: capitalize;
        letter-spacing: 1px;
        color: rgba(255, 255, 255, .7);
        box-shadow: 0 20px 40px rgba(0, 0, 0, .3);
        cursor: pointer;
        transition: .3s;
    }

    .pricing-card a:hover{
        background-color: #ee6c4d;;
    }
</style>
