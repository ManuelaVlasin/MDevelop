<div class="lesson-details-page">
    <div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="card mb-3">
        <div class="row no-gutters align-items-center">
            <div class="col-md-4">
                <img class="lesson-image" src="{{$lesson->image}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$lesson->title}}</h5>
                    <p class="card-text mt-4">
                        @if($lesson->has_period)
                            <span>
                                <ion-icon name="calendar-outline"></ion-icon>
                                {{ date('d.M.Y',strtotime($lesson->period_start)) }}
                            </span>
                            <i class="fa fa-arrow-right" style="margin-right: 5px; margin-left: 5px"
                               aria-hidden="true"></i>
                            <span>
                                <ion-icon name="calendar-outline"></ion-icon>
                                {{ date('d.M.Y',strtotime($lesson->period_end)) }}
                            </span>
                        @endif
                    </p>
                    <p class="card-text">
                        {{ $lesson->description }}
                    </p>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary rounded">
                                <ion-icon name="hand-right-sharp" style="margin-right: 5px"
                                          aria-hidden="true"></ion-icon>
                                {{__('Vreau să mă înscriu')}}
                            </button>
                        </div>
                        <div class="col" style="text-align: right">
                            <span style="margin-left: 2px">4.5</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-center p-5">
            <a class="mb-1 btn {{$selectedTab === 'overview' ? 'btn-secondary' : 'btn-outline-secondary'}}"
               wire:click="selectTab('overview')">
                {{__('Detalii Curs')}}
            </a>
            <a class="mb-1 btn {{$selectedTab === 'accreditation' ? 'btn-secondary' : 'btn-outline-secondary'}}"
               wire:click="selectTab('accreditation')">
                {{__('Acreditare')}}
            </a>
            <a class="mb-1 btn {{$selectedTab === 'payment' ? 'btn-secondary' : 'btn-outline-secondary'}}"
               wire:click="selectTab('payment')">
                {{__('Modalități de plată')}}
            </a>
            <a class="mb-1 btn {{$selectedTab === 'location' ? 'btn-secondary' : 'btn-outline-secondary'}}"
               wire:click="selectTab('location')">
                {{__('Locație și organizare')}}
            </a>

        </div>
        <div class="card-body">
            @if($selectedTab === 'overview')
                <div class="card-text">
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">{{__('DEZVOTARE')}} &#10004;</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">2</div>
                            <div class="step-name">{{__('ACREDITARE')}} &#10004;</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter">3</div>
                            <div class="step-name">{{__('UN JOB BINE PLĂTIT')}} &#10004;</div>
                        </div>
                    </div>

                    <div>
                        <h5 class="text-center p-3">{{__('Vino la programul acreditat de pregatire pentru meseria de
                            Front-End Developer! În cele 100 de ore vei învăța tehnologii ca HTML5, CSS3 sau Javascript
                            pentru a putea candida pentru posturi de Front-End Developer! Cursul se adreseaza atât celor
                            care încep de la zero (nu au pregatire anterioară în IT) cât și celor care vor să își ridice
                            nivelul profesional.')}}</h5>
                        <h2 class="fw-bold text-center p-3">{{__('Ce vei învăța la curs ?')}}</h2>

                        <div class="row">
                            @foreach($lesson->features as $feature)
                                <div class="col-sm-4">
                                    <div class="card mb-3">
                                        <div class="card-body" style="height: 120px; display: grid; text-align: center; align-items: center;">
                                            <h5 class="card-title d-flex justify-content-center text-center">{{__($feature->feature_name)}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <i class="fa fa-pencil" title="Edit"></i>
                        <a href="/images/CuriculaJavascript.pdf" download>
                            <h4 class="fw-bold download-pdf">{{__('Descarca curicula cursului aici')}}
                                &#11123;&#128193;</h4>
                        </a>
                    </div>
                </div>
            @elseif($selectedTab === 'accreditation')
                <div class="card-text">
                    <div class="accreditation-cards row text-center">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header fw-bold">
                                    {{__('Tip Curs')}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{__('Specializare')}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header fw-bold">
                                    {{__('Ocupația')}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$lesson->title}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header fw-bold">
                                    {{__('Certificat')}}
                                    <i style="color: goldenrod" class="fa fa-certificate"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{__('Acreditat și recunoscut internațional')}} </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img
                                    src="https://cdn.searchenginejournal.com/wp-content/uploads/2021/12/google-career-certificates-61bd445f96b29-sej-1520x800.png"
                                    style="max-width: 100%; padding: 20px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title mt-5 text-center">
                                        {{__(' Certificatul pe care îl vei obține la finalul cursului este eliberat de')}}
                                        <span
                                            class="fw-bold"> {{__('Ministerul Educației și Ministerul Muncii')}}</span>
                                        {{__('și este recunoscut la')}}
                                        <span class="fw-bold">{{__('nivel internațional')}}</span>
                                        {{__(', ceea ce reprezintă un avantaj la angajare.')}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($selectedTab === 'payment')
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img
                                        src="https://i0.wp.com/usps-track.us/blog/wp-content/uploads/2018/01/alternative-payment-options.jpg"
                                        style="max-width: 100%; padding: 20px">
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex text-center mb-5 payment-methods">
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div><h5 class="mb-1 fw-bold">{{__('Integral')}}</h5></div>
                                            <p class="mb-1">{{__('La banca sau prin Internet Bancking')}}</p>
                                        </div>
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div><h5 class="mb-1 fw-bold">{{__('4 rate fără dobâdă')}}</h5></div>
                                            <p class="mb-1">{{__('La banca sau prin Internet Bancking')}}</p>
                                        </div>
                                        <div
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div><h5 class="mb-1 fw-bold">{{__('2-12 rate fără dobâdă')}}</h5></div>
                                            <p class="mb-1">{{__('cu card de credit')}}</p>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr style="vertical-align: baseline">
                                                <th scope="col"></th>
                                                <th scope="col">{{__('Plata')}}</th>
                                                <th scope="col">{{__('La Bancă')}}</th>
                                                <th scope="col">{{__('Card de credit')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{__('Integral')}}</td>
                                                <td>{{$lesson->price}} lei</td>
                                                <td>{{$lesson->price}} lei</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>2 {{__('rate')}}</td>
                                                <td>{{$lesson->price / 2}} lei</td>
                                                <td>{{$lesson->price / 2}} lei</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>4 {{__('rate')}}</td>
                                                <td>{{$lesson->price / 4}} lei</td>
                                                <td>{{$lesson->price / 4}} lei</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div style="margin-left:10px">
                            <h2 class="text-center fw-bold mb-5">{{__('Locație și organizare')}}</h2>
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="wrapper-location">
                                            <ul class="StepProgress">
                                                <div class="StepProgress-item is-done">
                                                    <strong>{{__('În ce zile se va desfășura cursul ?')}}</strong>
                                                    {{__($lesson->teaching_day_1)}} {{__('și')}} {{__($lesson->teaching_day_2)}} {{__('de la')}} {{$lesson->start_time}}
                                                    - {{$lesson->end_time}}
                                                </div>
                                                <div class="StepProgress-item is-done">
                                                    <strong>{{__('Numărul de ore')}}</strong>
                                                    {{$lesson->number_of_hours}} (curs + laborator)
                                                </div>
                                                <div class="StepProgress-item is-done">
                                                    <strong>{{__('Locația')}}</strong>
                                                    {{$lesson->location}}
                                                </div>
                                                <div class="StepProgress-item is-done">
                                                    <strong>{{__('Te pregătești pentru un job de')}}</strong>
                                                    {{$lesson->title}}
                                                </div>
                                                <div class="StepProgress-item last-is-done">
                                                    <strong>{{__('Ai nevoie de')}}</strong>
                                                    {{__('Laptop')}}
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <img
                                            src="https://ictbyte.com/wp-content/uploads/2021/05/oral-presentation.jpg"
                                            style="width: 50%">
                                    </div>
                                </div>
                        </div>
                    @endif
                </div>
        </div>
    </div>
</div>

<style>

    .lesson-details-page{
        margin: 80px;
    }

    .lesson-image{
        max-width: 100%;
        margin: 20px
    }

    .wrapper-location {
        width: 330px;
        font-size: 20px;
    }

    .StepProgress {
        position: relative;
        /*padding-left: 45px;*/
        list-style: none;
    }

    .StepProgress::before {
        display: inline-block;
        content: '';
        position: absolute;
        top: 0;
        left: 15px;
        width: 10px;
        height: 100%;
    }

    .StepProgress-item {
        position: relative;
        counter-increment: list;
    }

    .StepProgress-item:not(:last-child) {
        padding-bottom: 20px;
    }

    .StepProgress-item::before {
        display: inline-block;
        content: '';
        position: absolute;
        left: -30px;
        height: 100%;
        width: 10px;
    }

    .StepProgress-item::after {
        content: '';
        display: inline-block;
        position: absolute;
        top: 0;
        left: -37px;
        width: 20px;
        height: 20px;
        border: 2px solid #CCC;
        border-radius: 50%;
        background-color: #FFF;
    }

    .StepProgress-item.is-done::before {
        border-left: 2px solid green;
    }

    .StepProgress-item.is-done::after {
        content: "✔";
        font-size: 13px;
        color: #FFF;
        text-align: center;
        border: 2px solid green;
        background-color: green;
    }

    .StepProgress-item.last-is-done::after {
        content: "✔";
        font-size: 13px;
        color: #FFF;
        text-align: center;
        border: 2px solid green;
        background-color: green;
    }

    .StepProgress strong {
        display: block;
    }

    .download-pdf {
        color: black;
    }

    .download-pdf:hover {
        color: #87CEFA;
    }

    .stepper-wrapper {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .stepper-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        font-size: 20px;
    }

    @media (max-width: 600px) {
        .stepper-item {
            font-size: 12px;
        }

        .accreditation-cards {
            display: block;
        }

        .payment-methods{
            display: block !important;
        }

        .lesson-image{
            margin: 0;
        }

        .lesson-details-page{
            margin: 80px 0 0 0;
        }
    }

    .stepper-item::before {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: -50%;
        z-index: 2;
    }

    .stepper-item::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 2;
    }

    .stepper-item .step-counter {
        position: relative;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ccc;
        margin-bottom: 6px;
        color: white;
    }

    .stepper-item.active {
        font-weight: bold;
    }

    .stepper-item.completed .step-counter {
        background-color: #50C878;
    }

    .stepper-item.completed::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #4bb543;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 3;
    }

    .stepper-item:first-child::before {
        content: none;
    }

    .stepper-item:last-child::after {
        content: none;
    }

    .wrapper-location {
        font-size: 15px;
    }
</style>
