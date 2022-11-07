<div class="card">
    <img class="card-img"
         src="{{$lesson->image}}" alt="Rome"/>
    <div class="card-content">
        <h1 class="card-header">{{ $lesson->title }}</h1>
        <p class="card-text">
            {{ $lesson->description }}
        </p>
        <a href="{{ route('lesson.details', ['lessonId' => $lesson->id]) }}" class="card-btn">{{__('Afla mai multe! ')}}<span>&rarr;</span></a>
    </div>
</div>
