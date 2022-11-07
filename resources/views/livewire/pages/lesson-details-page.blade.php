<div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$lesson->image}}" style="max-width: 100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$lesson->title}}</h5>
                    <p class="card-text mt-4">
                        @if($lesson->has_period)
                            <span>{{ date('d.M.Y',strtotime($lesson->period_start)) }}</span>
                            <i class="fa fa-arrow-right" style="margin-right: 5px; margin-left: 5px"
                               aria-hidden="true"></i>
                            <span>{{ date('d.M.Y',strtotime($lesson->period_end)) }}</span>
                        @endif
                    </p>
                    <p class="card-text">
                        {{ $lesson->description }}
                    </p>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" style="border-radius: 20px;">
                                <i class="fa fa-shopping-cart" style="margin-right: 5px" aria-hidden="true"></i>
                                {{__('Inscrie-te')}}
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
        <div class="card-header text-center">
            <a class="btn {{$selectedTab === 'overview' ? 'btn-primary' : 'btn-secondary'}}"
               wire:click="selectTab('overview')">
                {{__('General')}}
            </a>
            <a class="btn {{$selectedTab === 'details' ? 'btn-primary' : 'btn-secondary'}}"
               wire:click="selectTab('details')">
                {{__('Detalii')}}
            </a>
            <a class="btn {{$selectedTab === 'reviews' ? 'btn-primary' : 'btn-secondary'}}"
               wire:click="selectTab('reviews')">
                {{__('Review')}}
            </a>
        </div>
        <div class="card-body">
            @if($selectedTab === 'overview')
                <div class="card-text">
                    Experimenteaza puterea unui clasic de zi cu zi - Unul dintre cele mai mici laptop-uri de 15 inchi din lume
                    Fie ca este vorba de lucru sau  gaming, ASUS X515 este laptopul entry-level care ofera performante puternice si imagini vizuale imersive. Afisajul NanoEdge are unghiuri largi de vizualizare de 178° si o acoperire mata anti-glare pentru o experienta cu adevarat incantatoare.
                </div>
            @elseif($selectedTab === 'details')
                <div class="card-text">
                    Working with date and time in PHP can be complicated. We have to deal with strtotime, formatting issues, lots of calculations, and more.
                </div>
            @else
                <div class="card-text">
                    Review Text
                </div>
            @endif
        </div>
    </div>
</div>
