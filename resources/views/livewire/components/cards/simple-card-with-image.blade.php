<li class="cards_item">
    <div class="card">
        <div class="card_image"><img src="{{$lesson->image}}"></div>
        <div class="card_content">
            <h2 class="card_title">{{ $lesson->title }}</h2>
            <p class="card_text">{{ $lesson->description }}</p>
            <a href="{{ route('lesson.details', ['lessonId' => $lesson->id]) }}" class="btn card_btn">{{__('Afla mai multe! ')}}<span>&rarr;</span></a>
        </div>
    </div>
</li>

