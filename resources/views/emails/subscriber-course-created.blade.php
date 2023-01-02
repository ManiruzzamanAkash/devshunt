<div style="background: #eee; padding: 30px;">
    <h2>
        {{ $course->title }}
    </h2>
    <hr>
    <p>
        <b>Category: </b> {{ $course->category->name }}
    </p>
    <div>
        <img src="{{ Storage::url($course->banner) }}" alt="" width="200" >
    </div>

    <br>
    <a href="{{ route('courses.show', $course->slug) }}">
        View course details
    </a>
</div>
