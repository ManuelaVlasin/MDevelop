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

    <h1 id="title-home">{{__('Sky is the limit')}}</h1>
    <div class="parallax"></div>
    <div class="col-lg-12 text-box text-center">
        <h1>{{__('Cursuri Acreditate IT')}}</h1>
    </div>

    <div class="card_body">
        <ul class="cards">
            @foreach(\App\Models\Lesson::all() as $lesson)
                <livewire:components.cards.simple-card-with-image
                    :lessonId="$lesson->id"
                />
            @endforeach
        </ul>
    </div>
</div>

<style>
    #title-home{
        position: absolute;
        z-index: 1000;
        top: 30vw;
        left: 30vw;
        font-size: 72px;
        background: -webkit-linear-gradient(#eee, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-box{
        padding: 50px;
    }

    .parallax {
        /* The image used */
        background-image: url("https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/weather/cloud/cumulus-cloud.jpg");
        min-height: 650px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card_image img {
        width: 100%;
        display: block;
    }

    .card_body{
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
        /*box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);*/
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
            width: 33.3333%;
        }
    }

</style>
