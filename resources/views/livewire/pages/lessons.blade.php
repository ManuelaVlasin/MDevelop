<div class="lesson-container">
    {{--    <div class="parallax-image">--}}
    {{--        <h1>{{__('Cursuri Acreditate IT')}}--}}
    {{--            <i class="fa fa-graduation-cap"></i>--}}
    {{--        </h1>--}}
    {{--    </div>--}}

    {{--    <div class="parallax"></div>--}}
    {{--    <h1 class="title-home">This is my title</h1>--}}
    {{--    <div class="col-lg-12 text-box text-center">--}}
    {{--        <h1>This is my subtitle. Example, example, etc.</h1>--}}
    {{--    <div class="parallax"></div>--}}

    <section id="hero">
        <div class="hero container">
            <div>
                <h1>{{__('Fă primul pas spre')}}<span></span></h1>
                <h1>{{__('LIBERTATEA ta')}}<span></span></h1>
                <h1>{{__('FINANCIARĂ ')}}<span></span></h1>
                <a href="#card_section" type="button" class="cta">{{__('Explorează')}}</a>
            </div>
        </div>
    </section>

    <div class="col-lg-12 text-box text-center">
        {{--        <img src="https://www.itfactory.ro/wp-content/uploads/2021/05/Cursuri-Acreditate-250-%C3%97-250-px.png" />--}}
        <h1 class="text-title">{{__('Cursuri Acreditate de IT')}}
            <i class="fa fa-graduation-cap"></i>
        </h1>
    </div>


    <div class="row">
        <div class="category-head col-2">
            <div class="filter-card">
                <div class="search-bar">
                    <div class="search-bar-form">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control form-input" placeholder="Search anything...">
                        <span class="left-pan"><i class="fa fa-microphone"></i></span>
                    </div>
                </div>
            </div>
            <div class="filter-card">
                <h3 style="color: black">{{__('Categorie')}}</h3>
                <ul>
                    <div class="category-title active" id="all">
                        <span><i class="fas fa-border-all"></i></span>
                        <li>All</li>
                    </div>
                    <div class="category-title">
                        <span><i class="fa fa-code"></i></span>
                        <li>HTML</li>
                    </div>
                    <div class="category-title">
                        <span><i class="fa fa-palette"></i></span>
                        <li>CSS</li>
                    </div>
                    <div class="category-title">
                        <span><i class="fa fa-toolbox"></i></span>
                        <li>JavaScript</li>
                    </div>
                </ul>
            </div>

            <div class="filter-card">
                <div class="price-title">
                    <h3 style="color: black">{{__('Preț')}}</h3>
                </div>
                <div class="price-input">
                    <div class="field">
                        <span>Min</span>
                        <input type="number" class="input-min" value="2500">
                    </div>
                    <div class="separator">-</div>
                    <div class="field">
                        <span>Max</span>
                        <input type="number" class="input-max" value="7500">
                    </div>
                </div>
                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                </div>
            </div>

            <div class="filter-card">
                <h3 style="color:black;">{{__('Selecteză luna')}}</h3>

                <div class="d-grid">
                    <input class="text-center p-2 rounded" type="month" id="start" name="start" value="">
                </div>

            </div>
        </div>

        <div class="card_body col" id="card_section">
            <ul class="cards">
                @foreach(\App\Models\Lesson::all() as $lesson)
                    <livewire:components.cards.simple-card-with-image
                        :lessonId="$lesson->id"
                    />
                @endforeach
            </ul>
        </div>
    </div>
</div>

<style>

    .search-bar-form {

        position: relative;
    }

    .search-bar-form .fa-search {

        position: absolute;
        top: 20px;
        left: 20px;
        color: #9ca3af;

    }

    .search-bar-form span {

        position: absolute;
        right: 17px;
        top: 13px;
        padding: 2px;
        border-left: 1px solid #d1d5db;

    }

    .left-pan {
        padding-left: 7px;
    }

    .left-pan i {

        padding-left: 10px;
    }

    .form-input {

        height: 55px;
        text-indent: 33px;
        border-radius: 10px;
    }

    .form-input:focus {

        box-shadow: none;
        border: none;
    }

    .filter-card {
        border-radius: 10px;
        padding: 20px 25px 40px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .price-input {
        width: 100%;
        display: flex;
        margin: 30px 0 35px;
    }

    .price-input .field {
        display: flex;
        width: 100%;
        height: 45px;
        align-items: center;
    }

    .field input {
        width: 100%;
        height: 100%;
        outline: none;
        font-size: 19px;
        margin-left: 12px;
        border-radius: 5px;
        text-align: center;
        border: 1px solid #999;
        -moz-appearance: textfield;
    }

    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .price-input .separator {
        width: 130px;
        display: flex;
        font-size: 19px;
        align-items: center;
        justify-content: center;
    }

    .slider {
        height: 5px;
        position: relative;
        background: #ddd;
        border-radius: 5px;
    }

    .slider .progress {
        height: 100%;
        left: 25%;
        right: 25%;
        position: absolute;
        border-radius: 5px;
        background: #17A2B8;
    }

    .range-input {
        position: relative;
    }

    .range-input input {
        position: absolute;
        width: 100%;
        height: 5px;
        top: -5px;
        background: none;
        pointer-events: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    input[type="range"]::-webkit-slider-thumb {
        height: 17px;
        width: 17px;
        border-radius: 50%;
        background: #17A2B8;
        pointer-events: auto;
        -webkit-appearance: none;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }

    input[type="range"]::-moz-range-thumb {
        height: 17px;
        width: 17px;
        border: none;
        border-radius: 50%;
        background: #17A2B8;
        pointer-events: auto;
        -moz-appearance: none;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }

    .category-head {
        margin: 30px 0;
    }

    .category-head ul {
        padding: 0;
        display: grid;
        justify-content: center;
    }

    .category-title {
        flex: 0 0 calc(16.6667% - 10px);
        display: flex;
        background: #a8a8a8;
        padding: 12px;
        color: #fff;
        margin: 5px;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .category-title i {
        color: white;
    }

    .category-title:hover {
        opacity: 0.7;
    }

    .category-title li {
        padding: 0 10px;
    }

    .category-title span {
        color: #222;
    }


    .text-title {
        font-size: 72px;
        background: -webkit-linear-gradient(#30CFD0, #330867);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-box {
        padding: 50px;
    }

    .card_image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .card_body {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        font-weight: 400;
        text-align: center;
    }

    .card_btn {
        padding: 0.8rem;
        border-radius: 40px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid;
        background: transparent;
    }

    .card_btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
    }

    .card {
        background-color: white;
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-radius: 30px;
    }

    .card_content {
        padding: 1rem;
    }

    .card_title {
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        text-align: center;
    }

    .card_text {
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
        text-align: center;
    }

    @media only screen and (max-device-width: 1024px) {
        .parallax {
            background-attachment: scroll;
        }
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }

        #title-home {
            left: 20vw;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            /*width: 33.3333%;*/
        }
    }

    html {
        scroll-behavior: smooth;
    }

    .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cta {
        display: inline-block;
        padding: 10px 30px;
        color: white;
        background-color: transparent;
        border: 2px solid #87CEFA;
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        margin-top: 30px;
        transition: 0.3s ease;
        transition-property: background-color, color;
    }

    .cta:hover {
        color: white;
        background-color: #87CEFA;
    }

    /* Hero Section */
    #hero {
        background-image: url('https://wallpapercave.com/wp/wp6116609.jpg');
        background-size: cover;
        background-position: top center;
        position: relative;
        z-index: 1;
        min-height: 650px;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    #hero::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.3;
        z-index: -1;
    }

    #hero .hero {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 50px;
        justify-content: flex-start;
    }

    #hero h1 {
        display: block;
        width: fit-content;
        font-size: 4rem;
        position: relative;
        color: transparent;
        animation: text_reveal 0.5s ease forwards;
        animation-delay: 1s;
    }

    #hero h1:nth-child(1) {
        animation-delay: 1s;
    }

    #hero h1:nth-child(2) {
        animation-delay: 2s;
    }

    #hero h1:nth-child(3) {
        animation: text_reveal_name 0.5s ease forwards;
        animation-delay: 3s;
    }

    #hero h1 span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: #87CEFA;
        animation: text_reveal_box 1s ease;
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(1) span {
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(2) span {
        animation-delay: 1.5s;
    }

    #hero h1:nth-child(3) span {
        animation-delay: 2.5s;
    }

    /* End Hero Section */


    /* Keyframes */
    @keyframes hamburger_puls {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(1.4);
        }
    }

    @keyframes text_reveal_box {
        50% {
            width: 100%;
            left: 0;
        }
        100% {
            width: 0;
            left: 100%;
        }
    }

    @keyframes text_reveal {
        100% {
            color: white;
        }
    }

    @keyframes text_reveal_name {
        100% {
            color: #87CEFA;
            font-weight: 500;
        }
    }

    /* End Keyframes */

    @media only screen and (min-width: 768px) {
        .cta {
            font-size: 2.5rem;
            padding: 20px 60px;
        }

        h1.section-title {
            font-size: 6rem;
        }

        #hero h1 {
            font-size: 7rem;
        }
    }


</style>

<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach(input => {
        input.addEventListener("input", e => {
            let minPrice = parseInt(priceInput[0].value),
                maxPrice = parseInt(priceInput[1].value);

            if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
                if (e.target.className === "input-min") {
                    rangeInput[0].value = minPrice;
                    range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                } else {
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });

    rangeInput.forEach(input => {
        input.addEventListener("input", e => {
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

            if ((maxVal - minVal) < priceGap) {
                if (e.target.className === "range-min") {
                    rangeInput[0].value = maxVal - priceGap
                } else {
                    rangeInput[1].value = minVal + priceGap;
                }
            } else {
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });
</script>
