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
                        <span class="absolute top-0.5 left-4">
                            <i class="fa-solid fa-search text-slate-300"></i>
                        </span>
                        <input type="search" class="pl-12 md:pl-16 pr-2 w-full outline-none focus:outline-none font-thin"
                            placeholder="Search online courses">
                    </div>
                    <div class="basis-1/3 md:basis-2/6 flex">
                        <div>
                            <i class="fa-solid fa-cube text-gray-400 mr-2"></i>
                        </div>
                        <div class="flex-1">
                            <select name="category" id="category_id" class="bg-white text-gray-400 font-thin w-full">
                                <option value="">Category</option>
                                <option value="">Bootstrap</option>
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
                <div
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
                </div> <!-- End Single Category Item -->

            </div>
        </div>
    </section>
    <!-- End Categories Section -->

    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </div>


<div id="accordion-collapse" data-accordion="collapse">
  <h2 id="accordion-collapse-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
      <span>What is Flowbite?</span>
      <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
      <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-2">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
      <span>Is there a Figma file available?</span>
      <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
      <span>What are the differences between Flowbite and Tailwind UI?</span>
      <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
      <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
      </ul>
    </div>
  </div>
</div>


<div id="default-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
            <span class="absolute text-2xl font-semibold text-red -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>



    <!-- Start Popular Courses Section -->
    <section id="courses" class="mt-12">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="font-medium my-5">Popular Courses</h2>
                <div class="">
                    <a href="{{ route('courses.index') }}" class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>

            <div id="popular-course">
                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course3.jpg') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course3.jpg') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                    <a href="{{ route('courses.index') }}" class="transition bg-white py-2 px-6 text-sm border rounded hover:bg-red-500 text-slate-900 hover:text-white">
                        View More
                    </a>
                </div>
            </div>
            <div id="new-course">
                <div class="course-item group">
                    <div
                        class="border border-gray-100 shadow-sm rounded mr-3 transition hover:shadow-md group-hover:opacity-75">
                        <img src="{{ asset('images/course1.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course3.jpg') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course3.jpg') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
                        <img src="{{ asset('images/course2.png') }}" alt="" class="w-full rounded rounded-b-none">
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
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-0">
                                    <img src="{{ asset('images/avatar2.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar3.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
                                    <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-8 h-8 rounded-full z-10 -ml-4">
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
