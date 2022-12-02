{{--<li class="cards_item">--}}
{{--    <div class="card">--}}
{{--        <div class="card_image"><img src="{{$lesson->image}}"></div>--}}
{{--        <div class="card_content">--}}
{{--            <h2 class="card_title">{{ $lesson->title }}</h2>--}}
{{--            <p class="card_text">{{ $lesson->description }}</p>--}}
{{--            <a href="{{ route('lesson.details', ['lessonId' => $lesson->id]) }}"--}}
{{--               class="btn card_btn">{{__('Afla mai multe! ')}}<span>&rarr;</span></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</li>--}}


<div class="card lesson-card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4 card_image">
            <img src="{{$lesson->image}}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $lesson->title }}</h5>
                <p class="card-text">{{ $lesson->description }}</p>
                <p class="card-text">
                    <small class="text-muted">
                        <a href="{{ route('lesson.details', ['lessonId' => $lesson->id]) }}"
                           class="btn card_btn">{{__('Afla mai multe! ')}}<span>&rarr;</span></a>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>

