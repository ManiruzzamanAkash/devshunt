<x-guest-layout>
    <!-- Start Header / Hero Section -->
    <header class="bg-[#DEF6FD] mt-0 md:mt-2 rounded-md text-center md:text-left">
        <div class="container mx-auto py-10 md:py-40 bg-contain bg-no-repeat bg-[right_0px_top_10px]">
            <h2 class="text-4xl mb-1 pb-3 md:pb-0">
                Find a perfect
            </h2>
            <h2 class="font-semibold text-4xl pb-3 md:pb-0">
                Online Course
            </h2>
            <p class="text-gray-500 my-3">
                For only course, you need to learn Web Development
            </p>

            <form action="" method="get" class="mt-4">
                <div class="flex bg-white items-center p-4">
                    <div class="basis-1/3 md:basis-3/6 relative">
                        <span class="absolute top-2.5 left-4">
                            <i class="fa-solid fa-search text-slate-300"></i>
                        </span>
                        <input type="search"
                            class="pl-12 md:pl-16 pr-2 w-full outline-none focus:outline-none font-thin border border-transparent"
                            placeholder="Search online courses">
                    </div>
                    <div class="basis-1/3 md:basis-2/6 flex">
                        <div class="mt-2.5">
                            <i class="fa-solid fa-cube text-gray-400 mr-2"></i>
                        </div>
                        <div class="flex-1">
                            <select name="category" id="category_id" class="bg-white text-gray-400 font-thin w-full border border-transparent">
                                {!! $printCategories !!}
                            </select>
                        </div>
                    </div>
                    <div class="basis-1/3 md:basis-1/6">
                        <button
                            class="transition bg-red-500 text-white px-8 hover:opacity-75 rounded-full p-3 w-full ml-3">
                            Search
                        </button>
                    </div>
                </div>
            </form>

            <p class="mt-6 text-gray-600">
                <strong>Popular Search: </strong>
                <span class="text-gray-400">
                    Designer, Developer, PHP
                </span>
            </p>
        </div>
    </header>
    <!-- End Header / Hero Section -->

    <!-- Start Categories Section -->
    <section id="categories" class="mt-12">
        <div class="container mx-auto">
            <h2 class="font-medium my-5">Browse Categories</h2>

            <div class="flex flex-row gap-2 items-center text-center flex-wrap pl-4 md:pl-0">
                @foreach ($homepageCategories as $homeCategory)
                    <div
                        class="transition basis-[45%] md:basis-[11.7%] cursor-pointer rounded hover:opacity-75 group hover:-translate-y-2 min-h-[210px]" style="background:{{ $homeCategory->bg_color }}">
                        <div class="mr-3 p-5">
                            <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                                <img src="{{ Storage::url($homeCategory->logo) }}" alt="" class="w-16 h-16">
                            </div>
                            <h4 class="mt-4 mb-2 font-medium overflow-hidden h-[50px]">
                                {{ $homeCategory->name }}
                            </h4>
                            <p class="text-gray-500 text-xs">
                                {{ $homeCategory->total_course }} Courses
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#FCF1EB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/bootstrap.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        Bootstrap
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#FEF9EC] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/html.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        HTML
                    </h4>
                    <p class="text-gray-500 text-xs">
                        30 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#E4F4FB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/jquery.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        JQuery
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#E4F4FB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/sass.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        Sass
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#FCF1EB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/react.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        React
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#FEF9EC] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/java.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        Java
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#E4F4FB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/python.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        Python
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item -->

                <div
                    class="transition basis-[45%] md:basis-[10.93%] bg-[#FCF1EB] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                    <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                        <img src="{{ asset('images/icons/mongodb.png') }}" alt="" class="w-16 h-16">
                    </div>
                    <h4 class="mt-4 mb-2 font-medium">
                        MongoDB
                    </h4>
                    <p class="text-gray-500 text-xs">
                        32 Courses
                    </p>
                </div> <!-- End Single Category Item --> --}}

            </div>
        </div>
    </section>
    <!-- End Categories Section -->

    <!-- Start Popular Courses Section -->
    <section id="courses" class="mt-12">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="font-medium my-5">Popular Courses</h2>
                <div class="">
                    <a href="{{ route('courses.index') }}?type=popular"
                        class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>

            <div id="popular-course">
                @foreach ($popularCourses as $popularCourse)
                    @include('courses.partials.single-course-mini', [
                        'course' => $popularCourse
                    ])
                @endforeach
            </div>
        </div>

    </section>
    <!-- End Popular Courses Section -->

    <!-- Start New Courses Section -->
    <section id="new-courses" class="mt-12">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="font-medium my-5">New Courses</h2>
                <div>
                    <a href="{{ route('courses.index') }}?type=latest"
                        class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>
            <div id="new-course">
                @foreach ($newCourses as $newCourse)
                    @include('courses.partials.single-course-mini', [
                        'course' => $newCourse
                    ])
                @endforeach
            </div>
        </div>

    </section>
    <!-- End New Courses Section -->
</x-guest-layout>
