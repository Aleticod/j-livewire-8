<div>
    @foreach($courses as $course)
        <div>
            <h1>{{ $course->id }}</h1>
            <p>{{ $course->description }}</p>
        </div>
    @endforeach
</div>
