<div class="lesson-container">
    <div class="parallax-image">
        <h1>{{__('Cursuri Acreditate IT')}}
            <i class="fa fa-graduation-cap"></i>
        </h1>
    </div>

    <div id="card_body">
        <div class="grid">
            @foreach(\App\Models\Lesson::all() as $lesson)
                <div class="grid-item" wire:key="{{rand()}}">
                    <livewire:components.cards.simple-card-with-image
                        :lessonId="$lesson->id"
                    />
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>

    /*body {*/
    /*    color: #fff;*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*    perspective: 1px;*/
    /*    transform-style: preserve-3d;*/
    /*    height: 100%;*/
    /*    overflow-y: scroll;*/
    /*    overflow-x: hidden;*/
    /*}*/

    /*.parallax-image {*/
    /*    box-sizing: border-box;*/
    /*    min-height: 100vh;*/
    /*    padding: 30vh 0 5vw;*/
    /*    position: relative;*/
    /*    transform-style: inherit;*/
    /*    width: 100vh;*/
    /*}*/

    /*.parallax-image h1 {*/
    /*    margin-top: -100px;*/
    /*}*/

    /*.parallax-image, .parallax-image:before {*/
    /*    background: 50% 50% / cover;*/
    /*}*/

    /*.parallax-image::before {*/
    /*    bottom: 0;*/
    /*    content: "";*/
    /*    left: 0;*/
    /*    position: absolute;*/
    /*    right: 0;*/
    /*    top: 0;*/
    /*    display: block;*/
    /*    background-image: url("https://images.theconversation.com/files/483055/original/file-20220906-16-vkvxrf.jpg?ixlib=rb-1.1.0&rect=0%2C29%2C4446%2C2492&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip");*/
    /*    background-size: cover;*/
    /*    transform-origin: center center 0;*/
    /*    transform: translateZ(-1px) scale(2);*/
    /*    z-index: -1;*/
    /*    min-height: 100vh;*/
    /*}*/

    /*.lesson-container * {*/
    /*    font-weight: normal;*/
    /*    letter-spacing: 0.2em;*/
    /*    text-align: center;*/
    /*    margin: 0;*/
    /*    padding: 1em 0;*/
    /*}*/


    /*@import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");*/

    /** {*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*}*/

    /*html {*/
    /*    box-sizing: border-box;*/
    /*    font-size: 62.5%;*/
    /*}*/

    /*header {*/
    /*    width: 100%;*/
    /*    height: 100vh;*/
    /*    background: linear-gradient(to bottom, rgba(0, 0, 0, .8), rgba(0, 0, 0, .5)), url("https://edexec.co.uk/wp-content/uploads/2018/02/education-technology.png") no-repeat;*/
    /*    background-size: cover;*/
    /*    position: relative;*/
    /*    overflow: hidden;*/
    /*}*/

    #card_body {
        font-family: "Poppins", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-size: 62.5%;
    }

    .grid {
        display: grid;
        width: 114em;
        grid-gap: 6rem;
        grid-template-columns: 33% 33% 33%;
        /*grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));*/
        align-items: start;
    }

    .grid-item {
        background-color: #fff;
        border-radius: 20px;
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
