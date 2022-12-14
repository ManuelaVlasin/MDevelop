<div class="lesson-container">
    <section id="hero">
        <div class="hero container">
            <div style="padding-top: 50px">
                <h1>{{__('Cursuri Acreditate de IT')}}<span></span></h1>
            </div>
        </div>
    </section>

    <div class="container flex flex-column gap-2">
        <div class="grid grid-flow-col w-full gap-3 md:hidden">
            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">
                {{ __('Filtreaza') }}
            </button>
            <button class="btn btn-outline-secondary">
                {{ __('Ordoneaza dupa') }}
            </button>
        </div>
        <div class="grid grid-flow-col gap-4">
            <div class="hidden md:block">
                {{--                <div class="mb-3">--}}
                {{--                    <div class="input-group" style="max-width: 320px">--}}
                {{--                        <input type="text" class="form-control" placeholder="{{ __('Cautā') }}" wire:model="textSearch">--}}
                {{--                        <div class="input-group-append">--}}
                {{--                        <span class="input-group-text" id="basic-addon2" style="height: 100%">--}}
                {{--                            <i class="fa fa-search" aria-hidden="true"></i>--}}
                {{--                        </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div wire:ignore class="mb-3">--}}
                {{--                    <livewire:components.dropdown.multi-select-dropdown--}}
                {{--                        :placeholder="'Selecteaza categorii'"--}}
                {{--                        :options="$lessonCategories"--}}
                {{--                        :searchFunctionCallback="'filterLessonByCategory'"--}}
                {{--                    />--}}
                {{--                </div>--}}
                <div class="mb-3">
                    <livewire:components.cards.filter-card
                        :header="'Categorii'"
                        :options="$lessonCategories"
                        :callbackFunction="'filterLessonByCategory'"
                    />
                </div>

                <div class="mb-3">
                    <livewire:components.cards.filter-card
                        :header="'Preturi'"
                        :options="$prices"
                        :callbackFunction="'filterByPrice'"
                    />
                </div>

                <div class="mb-3">
                    <livewire:components.cards.filter-card
                        :header="'Luna'"
                        :options="$months"
                        :callbackFunction="'filterByMonth'"
                    />
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4" id="card_section">
                @foreach($lessons as $lesson)
                    <livewire:components.cards.simple-card-with-image
                        :lessonId="$lesson->id"
                        :wire:key="rand()"
                    />
                @endforeach
                {{ $lessons->links() }}
            </div>
        </div>
    </div>


    <!-- Modal -->
        <div class="modal left fade" wire:ignore.self id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header text-right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            <button class="btn btn-info" data-dismiss="modal" aria-label="Close">{{ __('Afiseaza') }}</button>
                        </h4>
                    </div>

                    <div class="modal-body" >
                        <div>
                            {{--                <div class="mb-3">--}}
                            {{--                    <div class="input-group" style="max-width: 320px">--}}
                            {{--                        <input type="text" class="form-control" placeholder="{{ __('Cautā') }}" wire:model="textSearch">--}}
                            {{--                        <div class="input-group-append">--}}
                            {{--                        <span class="input-group-text" id="basic-addon2" style="height: 100%">--}}
                            {{--                            <i class="fa fa-search" aria-hidden="true"></i>--}}
                            {{--                        </span>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                            {{--                </div>--}}
                            {{--                <div wire:ignore class="mb-3">--}}
                            {{--                    <livewire:components.dropdown.multi-select-dropdown--}}
                            {{--                        :placeholder="'Selecteaza categorii'"--}}
                            {{--                        :options="$lessonCategories"--}}
                            {{--                        :searchFunctionCallback="'filterLessonByCategory'"--}}
                            {{--                    />--}}
                            {{--                </div>--}}
                            <div class="mb-3">
                                <livewire:components.cards.filter-card
                                    :header="'Categorii'"
                                    :options="$lessonCategories"
                                    :callbackFunction="'filterLessonByCategory'"
                                />
                            </div>

                            <div class="mb-3">
                                <livewire:components.cards.filter-card
                                    :header="'Preturi'"
                                    :options="$prices"
                                    :callbackFunction="'filterByPrice'"
                                />
                            </div>

                            <div class="mb-3">
                                <livewire:components.cards.filter-card
                                    :header="'Luna'"
                                    :options="$months"
                                    :callbackFunction="'filterByMonth'"
                                />
                            </div>
                        </div>
                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
</div>

<style>
    .modal.left .modal-dialog,
    .modal.right .modal-dialog {
        position: fixed;
        margin: auto;
        width: 100%;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
        -o-transform: translate3d(0%, 0, 0);
        transform: translate3d(0%, 0, 0);
    }

    .modal.left .modal-content,
    .modal.right .modal-content {
        height: 100%;
        overflow-y: auto;
    }

    .modal.left .modal-body,
    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }

    /*Left*/
    .modal.left.fade .modal-dialog{
        -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
        -o-transition: opacity 0.3s linear, left 0.3s ease-out;
        transition: opacity 0.3s linear, left 0.3s ease-out;
    }

    .modal.left.fade.in .modal-dialog{
        left: 0;
    }

    .demo {
        padding-top: 60px;
        padding-bottom: 110px;
    }

    .btn-demo {
        margin: 15px;
        padding: 10px 15px;
        border-radius: 0;
        font-size: 16px;
        background-color: #FFFFFF;
    }

    .btn-demo:focus {
        outline: 0;
    }

    .demo-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 15px;
        background-color: #212121;
        text-align: center;
    }

    .demo-footer > a {
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        color: #fff;
    }

    .active-category {
        background: #87CEFA !important;
    }

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

    .lesson-card {
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
        /*background-image: url('https://wallpapercave.com/wp/wp6116609.jpg');*/
        background-image: url('https://www.simplilearn.com/ice9/free_resources_article_thumb/6_Best_Places_to_Study_Abroad_v2.jpg');
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

    @media only screen and (min-width: 1024px) {
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

    @media (max-width: 600px) {
        .cta{
            font-size: 1rem;
        }

        #hero h1{
            font-size: 2rem;
        }

        .text-title{
            font-size: 30px;
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
