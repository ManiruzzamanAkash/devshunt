<x-guest-layout>
    <!-- Start Header / Hero Section -->
    <header class="bg-[#EB5757] mt-0 text-center text-white">
        <div class="container mx-auto py-28">
            <h2 class="text-4xl mb-1 pb-3">
                All {{ ucfirst(request()->order_by ?? '') }} Courses
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
                        <form action="{{ url()->full() }}">
                            <input type="hidden" name="mode" value="{{ request()->mode }}">
                            <input type="hidden" name="order_by" value="{{ request()->order_by ?? 'latest' }}">
                            <div class="sidebar-section">
                                <div class="group relative">
                                    <input type="search" name="s" value="{{ request()->s ?? '' }}" placeholder="Search by tutorials..."
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
                                    <input type="number" name="min_price" value="{{ request()->min_price ?? '' }}" min="0"
                                        class="basis-2/6 w-full bg-white px-4 py-1.5 focus:outline-none [appearance:textfield]">
                                    <div class="basis-1/6 text-center">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input type="number" name="max_price" value="{{ request()->max_price ?? '' }}" value="10000" min="0"
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
                        <h3>Total {{ $total }} Courses</h3>

                        <div>
                            <div class="bg-gray-100 w-20 h-10">
                                <a class="" href="{{ url()->full() }}&mode=list">
                                    <i class="fa-solid fa-th-list text-2xl py-1 px-2 cursor-pointer {{ request()->mode === 'list' ? 'text-gray-800' : 'text-gray-500' }} cursor-point"></i>
                                </a>
                                <a class="" href="{{ url()->full() }}&mode=card">
                                    <i class="fa-solid fa-table-cells text-2xl cursor-pointer {{ (request()->mode === 'card' || !isset(request()->mode)) ? 'text-gray-800' : 'text-gray-500' }} cursor-point"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="course-lists mt-4">
                        @if (request()->mode === 'list')
                            <div class="flex flex-col md:flex-wrap gap-5 flex-wrap">
                                @foreach ($courses as $course)
                                        @include('courses.partials.single-course-mini-list-view', [
                                            'course' => $course,
                                        ])
                                @endforeach
                            </div>
                        @else
                            <div class="flex flex-col md:flex-row flex-wrap">
                                @foreach ($courses as $course)
                                    <div class="basis-1/4 mb-4">
                                        @include('courses.partials.single-course-mini', [
                                            'course' => $course
                                        ])
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="mt-10">
                            {{ $courses->links() }}
                            {{-- <div class="flex justify-between">
                                <a href="#" class="transition w-10 h-10 border border-gray-200 py-1.5 px-3.5 hover:bg-gray-300">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a>
                                <a href="#" class="mr-3 transition w-10 h-10 border border-gray-200 py-1.5 px-3.5 hover:bg-gray-300">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories Section -->
</x-guest-layout>
