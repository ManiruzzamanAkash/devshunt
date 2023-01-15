<div class="course-item group cursor-pointer" onclick="location.href='{{ route('courses.show', $course->slug) }}'">
    <div class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
        <img src="{{ Storage::url($course->banner) }}" alt="" class="w-full rounded rounded-b-none">
        <div class="mt-3 p-3">
            <div class="flex justify-between">
                <div>
                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                        {{ $course->category->name }}
                    </span>
                </div>
                <div>
                    <span class="text-green-600 font-bold">
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
                    </span>
                </div>
            </div>

            <div class="mt-4 mb-4 text-xs">
                <h2 class="text-base mt-3 font-medium">
                    {{ $course->title }}
                </h2>
                <p class="text-gray-400 mt-2">
                    32 Lesson
                </p>
                <div class="flex mt-5 items-center">
                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                    <div class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
                        +2
                    </div>
                    <div class="text-gray-400 ml-4">
                        Student apply
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- Single Course Item -->
