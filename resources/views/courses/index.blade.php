<x-guest-layout>
    <!-- Start Header / Hero Section -->
    <header class="bg-[#EB5757] mt-0 text-center text-white">
        <div class="container mx-auto py-28">
            <h2 class="text-4xl mb-1 pb-3">
                All Courses
            </h2>
            <h3 class="text-2xl mb-1 pt-3 font-thin">
                Let’s Learn The World Most Useful Tutorials & Grow Together....
            </h3>
        </div>
    </header>
    <!-- End Header / Hero Section -->

    <!-- Start Courses Section -->
    <section id="coures-page" class="mt-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-7 grid-flow-row auto-rows-max gap-5">
                <div class="md:col-span-2 filter-course">
                    <h2 class="font-medium text-xl mb-7">Filter Courses</h2>

                    <div class="h-screen bg-gray-100 p-3">
                        <form action="">
                            <div class="sidebar-section">
                                <div class="group relative">
                                    <input type="search" placeholder="Search by tutorials..."
                                        class="transition w-full px-3 py-2 bg-white text-slate-800 focus:outline-none border focus:border-slate-400 placeholder:font-thin shadow-sm">
                                    <i
                                        class="fa-solid fa-magnifying-glass absolute right-3.5 top-3.5 cursor-pointer"></i>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="flex justify-between collapse-button cursor-pointer">
                                    <h3 class="font-medium">Price</h3>
                                    <div>
                                        <i class="fas fa-chevron-down text-sm"></i>
                                    </div>
                                </div>
                                <div class="collapse-content flex mt-4 gap-3 justify-center items-center text-xs">
                                    <input type="number" value="8" min="0"
                                        class="basis-2/6 w-full bg-white px-4 py-1.5 focus:outline-none [appearance:textfield]">
                                    <div class="basis-1/6 text-center">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input type="number" value="10000" min="0"
                                        class="basis-2/6 w-full bg-white px-4 py-1.5 focus:outline-none [appearance:textfield]">
                                    <button class="basis-1/6 w-6 h-9 bg-gray-200">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="flex justify-between collapse-button cursor-pointer">
                                    <h3 class="font-medium">On Sale</h3>
                                    <div>
                                        <i class="fas fa-chevron-down text-sm"></i>
                                    </div>
                                </div>
                                <div class="collapse-content mt-4 text-xs">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            1
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3" checked>
                                                No
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            1
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="flex justify-between collapse-button cursor-pointer">
                                    <h3 class="font-medium">Sales</h3>
                                    <div>
                                        <i class="fas fa-chevron-down text-sm"></i>
                                    </div>
                                </div>
                                <div class="collapse-content mt-4 text-xs">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                No Sales
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            10
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                Low
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            20
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                Medium
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            5
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                High
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            10
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="checkbox" name="" class="mr-3">
                                                Top Sellers
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            100
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="flex justify-between collapse-button cursor-pointer">
                                    <h3 class="font-medium">Rating</h3>
                                    <div>
                                        <i class="fas fa-chevron-down text-sm"></i>
                                    </div>
                                </div>
                                <div class="collapse-content mt-4 text-xs">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="radio" name="rating" class="mr-3" checked>
                                                Show all
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            50
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="radio" name="rating" class="mr-3">
                                                1 star and higher
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            20
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="radio" name="rating" class="mr-3">
                                                2 star and higher
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            15
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="radio" name="rating" class="mr-3">
                                                3 star and higher
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            10
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <label>
                                                <input type="radio" name="rating" class="mr-3">
                                                4 star and higher
                                            </label>
                                        </div>
                                        <div class="pr-2">
                                            5
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="md:col-span-5 course-lists-area">
                    <div class="flex justify-between">
                        <h3>Total 59 Courses</h3>
                        <div>
                            <div class="bg-gray-100 w-20 h-10">
                                <i
                                    class="fa-solid fa-list text-2xl py-1 px-3.5 text-gray-500 font-thin cursor-point"></i>
                                <i class="fa-solid fa-table-cells text-2xl text-gray-800 font-thin cursor-point"></i>
                            </div>
                        </div>
                    </div>
                    <div class="course-lists mt-4">
                        <div class="flex flex-col md:flex-wrap gap-5 flex-wrap">
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                            <div class="course-item md:basis-[31.4%] group">
                                <div
                                    class="border border-gray-100 shadow-sm rounded transition hover:shadow-md group-hover:opacity-75">
                                    <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
                                    <div class="mt-3 p-3">
                                        <div class="flex justify-between">
                                            <div>
                                                <span
                                                    class="bg-[#FFE7D2] text-[#FF8D3F] p-2 rounded text-[10px] font-bold">
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
                                                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
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
                        <div class="mt-10">
                            <div class="flex justify-between">
                                <a href="#" class="transition w-10 h-10 border border-gray-200 py-1.5 px-3.5 hover:bg-gray-300">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a>
                                <a href="#" class="mr-3 transition w-10 h-10 border border-gray-200 py-1.5 px-3.5 hover:bg-gray-300">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories Section -->
</x-guest-layout>
