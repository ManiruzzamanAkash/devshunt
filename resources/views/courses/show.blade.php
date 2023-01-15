<x-guest-layout>

    @section('title')
        {{ $course->title }} | {{ config('app.name') }}
    @endsection

    <div class="course-header bg-dark text-white py-8">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="basis-[70%]">
                    <p class="mb-2">
                        @if ($course->category && $course->category->parent)
                            <a href="{{ route('courses.index') }}?category={{ $course->category->parent->id }}">
                                {{ $course->category->parent->name }}
                            </a> ›
                        @endif

                        @if ($course->category->name)
                            <a href="{{ route('courses.index') }}?category={{ $course->category->id }}">
                                {{ $course->category->name }}
                            </a>
                        @endif
                    </p>
                    <img src="{{ Storage::url($course->banner) }}" alt="" class="w-full rounded rounded-b-none">
                    <div class="mt-3">
                        <h2 class="text-4xl font-bold">
                            {{ $course->title }}
                        </h2>
                        <p class="my-2">
                            {!! $course->meta_description !!}
                        </p>
                        <p>
                            <span class="text-yellow-400">
                                {{ $course->average_rating }}
                            </span>

                            <span class="text-yellow-400">
                            @for ($i = 0; $i < intval($course->average_rating); $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                            </span>
                            {{-- <span class="mx-2">
                                (2210 ratings)
                            </span> --}}
                            <span>
                                {{ $course->total_enrolled }} students
                            </span>
                        </p>
                        <p class="my-2">
                            <i class="fa fa-user"></i> Created by &nbsp;
                            @if ($course->createdBy->name)
                                <a href="{{ route('courses.index') }}?author={{ $course->createdBy->id }}" class="text-violet-400">
                                    {{ $course->createdBy->name }}
                                </a>
                            @endif
                        </p>
                        <p>
                            <i class="fa fa-clock"></i> Last updated - {{ $course->updated_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
                <div class="basis-[30%]"></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-6">
        <div class="flex flex-col md:flex-row">
            <div class="basis-[70%] order-2">
                <h3 class="text-3xl font-bold py-3">
                    Course Content
                </h3>
                <p class="mb-4">
                    {{ $course->chapters->count() }} chapters |
                    {{ $course->lessons->count() }} lectures
                </p>
                <div id="accordion-collapse" data-accordion="collapse">
                    @foreach ($course->chapters as $chapter)
                    <h2 id="accordion-collapse-heading-{{ $chapter->id }}">

                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                            data-accordion-target="#accordion-collapse-body-{{ $chapter->id }}" aria-expanded="true"
                            aria-controls="accordion-collapse-body-{{ $chapter->id }}">
                            <div class="flex justify-between w-full">
                                <div class="relative">
                                    <span class="ml-5 md:ml-12">
                                        {{ $chapter->title }}
                                    </span>
                                    <svg data-accordion-icon class="absolute -left-2 md:left-2 top-0 w-6 h-6 rotate-180 shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    {{ $chapter->lessons->count() }}
                                    {{ $chapter->lessons->count() > 1 ? 'lectures' : 'lecture' }}
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-{{ $chapter->id }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $chapter->id }}">
                        <div
                            class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            @foreach ($chapter->lessons as $lesson)
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    <a href="{{ route('courses.lessons.show', [$course->slug, $lesson->slug]) }}" class="text-slate-600">
                                        @if ($lesson->type === 'video')
                                            <i class="fa fa-video mr-3"></i>
                                        @elseif ($lesson->type === 'text')
                                            <i class="fa fa-file mr-3"></i>
                                        @elseif ($lesson->type === 'assignment')
                                            <i class="fa fa-th mr-3"></i>
                                        @endif
                                        {{ $lesson->title }}
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

                <h3 class="text-3xl font-bold pt-6 pb-3">
                    Description
                </h3>
                <div class="my-5 course-description">
                    {!! $course->description !!}
                </div>
            </div>
            <div class="basis-[30%] md:fixed md:top-28 md:right-4 md:self-start order-1 md:order-last">
                <div class="md:ml-6 shadow-lg bg-white p-5">
                    <h4 class="price text-red-500 text-4xl font-bold mb-4">
                        @if ($course->is_free)
                            <span class="px-2 bg-blue-600 rounded text-white text-sm py-1">
                                Free
                            </span>
                        @elseif (!empty($course->offer_price))
                            <del>
                                ${{ $course->price }}
                            </del>
                            <br>
                            ${{ $course->offer_price }}
                        @else
                            ${{ $course->price }}
                        @endif
                    </h4>
                    <button class="w-full border border-gray-300 p-4 transition hover:bg-dark hover:text-white">
                        Buy Now
                    </button>
                    <div class="mt-4">
                        <h4 class="font-bold text-lg">This course includes:</h4>
                        <ul class="list-disc pl-4 my-3">
                            @php
                                $totalArticles = $course->lessons()->where('type', 'text')->count();
                            @endphp
                            <li>{{ $totalArticles }} {{ $totalArticles > 1 ? 'articles' : 'article' }}</li>
                            <li>Many downloadable resources</li>
                            <li>Full lifetime access</li>
                            <li>Access on mobile and TV</li>
                            <li>Closed captions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
