<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body class="">
    @include('components.headeradmin')

<main>
    <div class="font-serif dark:bg-black ps-2 pr-2 sm:ps-[288px] sm:pt-12 sm:pr-8">

        <!-- slider start -->
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/slider.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ url('images/slider2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/slider3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/slider4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('images/slider5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <!-- slider end -->


        <!-- users start -->
        <div class="mt-4 xl:mt-12 grid grid-cols-3">
            <div class="grid grid-cols-3">
                <div class="col-span-1">
                    <svg class=" dark:text-white group w-9 md:w-14 lg:w-16 xl:w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path class="svg-path"
                        d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                    </svg>
                </div>
                <div class="col-span-2 ml-2 mt-1 md:mt-4 xl:mt-6">
                    <span class=" font-bold text-[10px] sm:text-[14px] md:text-[16px] lg:text-[24px] xl:text-[32px] dark:text-white">1700 comics</span>
                </div> 
            </div>
            <div class="grid grid-cols-3 lg:mt-2">
                <div class="col-span-1">
                    <svg class=" dark:text-white group w-10 md:w-14 lg:w-20 xl:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path class="svg-path" d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/>
                    </svg>
                </div>
                <div class="col-span-2 ml-2 mt-1 md:mt-4 xl:mt-6">
                    <span class="font-bold text-[10px] sm:text-[14px] md:text-[16px] lg:text-[24px] xl:text-[32px] dark:text-white">2000 Novels</span>
                </div> 
            </div>
            <div class="grid grid-cols-3 lg:mt-2">
                <div class="col-span-1">
                    <svg class="dark:text-white group w-10 md:w-14 lg:w-20 xl:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path class="svg-path"  d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                    </svg>
                </div>
                <div class="col-span-2 ml-2 mt-1 md:mt-4 xl:mt-6">
                    <span class="font-bold text-[10px] sm:text-[14px] md:text-[16px] lg:text-[24px] xl:text-[32px] dark:text-white">7000 Users</span>
                </div> 
            </div>
        </div>
        <!-- users end -->

        <!-- about us start -->
         <div class=" w-full mt-10 sm:mt-32 grid grid-cols-3 gap-3 sm:gap-12 content-center">
            <div>
                <div class="relative ...">
                    <svg class="w-9/12 rounded-full text-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/>
                    </svg>
                    <div class="absolute bottom-0 left-0 ...">
                        <img src="{{ url('images/cipe.png') }}" class="w-9/12" alt="">
                    </div>
                </div>
                <div class="flex justify-end">
                    <div>
                        <p class=" text-[10px] sm:text-[20px] lg:text-[30px] font-bold dark:text-white mr-6">Shifa Humaira</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative ...">
                    <svg class="w-9/12 rounded-full text-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/>
                    </svg>
                    <div class="absolute bottom-0 left-0 ...">
                        <img src="{{ url('images/nia.png') }}" class="w-8/12" alt="">
                    </div>
                </div>
                <div class="flex justify-end">
                    <div>
                        <p class="text-[10px] sm:text-[20px] lg:text-[30px] font-bold dark:text-white sm:mr-20">Niati</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative ...">
                    <svg class="w-9/12 rounded-full text-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/>
                    </svg>
                    <div class="absolute bottom-0 left-0 ...">
                        <img src="{{ url('images/yulia.png') }}" class="w-8/12" alt="">
                    </div>
                </div>
                <div class="flex justify-end">
                    <div>
                        <p class="text-[10px] sm:text-[20px] lg:text-[30px] font-bold dark:text-white mr-6">Yulia Pipka</p>
                    </div>
                </div>
            </div>
        </div> 
        <!-- about us end -->
    </div>
</main>

    @include('components.footeradmin')
</body>
</html>

