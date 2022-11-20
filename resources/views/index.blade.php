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
                        class="transition basis-[45%] md:basis-[10.93%] bg-[{{ $homeCategory->bg_color }}] cursor-pointer rounded mr-3 p-5 hover:opacity-75 group hover:-translate-y-2">
                        <div class="bg-white rounded-full m-0 mx-auto w-20 h-20 p-2.5 scale-90 group-hover:scale-125">
                            <img src="{{ Storage::url($homeCategory->logo) }}" alt="" class="w-16 h-16">
                        </div>
                        <h4 class="mt-4 mb-2 font-medium">
                            {{ $homeCategory->name }}
                        </h4>
                        <p class="text-gray-500 text-xs">
                            {{ $homeCategory->total_course }} Courses
                        </p>
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
                    <a href="{{ route('courses.index') }}"
                        class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>

            <div id="popular-course">
                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course1.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course3.jpg') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course3.jpg') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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
                    <a href="{{ route('courses.index') }}"
                        class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>
            <div id="new-course">
                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course1.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course3.jpg') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course3.jpg') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course2.png') }}" alt=""
                            class="w-full rounded rounded-b-none">
                        <div class="mt-3 p-3">
                            <div class="flex justify-between">
                                <div>
                                    <span class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
                                        Python
                                    </span>
                                </div>
                                <div>
                                    <span class="text-green-600 font-bold">
                                        $2,000
                                    </span>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 text-xs">
                                <h2 class="text-base mt-3 font-medium">
                                    Complete Python Bootcamp from Zero to hero in Python
                                </h2>
                                <p class="text-gray-400 mt-2">
                                    32 Lesson
                                </p>
                                <div class="flex mt-5 items-center">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt=""
                                        class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gray-100 z-10 text-gray-400 -ml-4 text-center pt-2">
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

            </div>
        </div>

    </section>
    <!-- End New Courses Section -->
</x-guest-layout>
