<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Treaject</title>
   @vite(['resources/css/app.css','resources/js/app.js'])

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-RpIhZ+1fUwzGZk6gHf41rUzYmiHPc4E8vKscIiV3j8KTVt+GVGeNcLXZIuM3Nq5vB+RREoCg5NZhIcRktrQ3uA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

</head>

<body class="dark">

@include('components.headeruser1')

<!-- content start -->
<main class=" font-serif dark:bg-black px-10 md:px-24 pt-44 pb-20">
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

   <!-- main content start -->
    <!-- komik terpopuler -->
    <section class="pt-3 md:pt-12">
        <p class=" font-bold text-lg mb-5 md:text-[32px] dark:text-white cursor-default">Komik Terpopuler</p>
        <div class="grid grid-cols-2">
            <div class="relative">
                <img src="{{ url('images/komik1.jpg') }}" class=" aspect-3/4 object-cover rounded-lg w-2/3 blur-sm" alt="">
                <div class="absolute w-full top-28 left-10 ...">
                    <div class=" w-full flex justify-center">
                        <img src="{{ url('images/komik2.jpg') }}" class=" rounded-full aspect-square w-1/2 object-cover" alt="">
                    </div>
                </div>
            </div>
            <div class="py-32 dark:text-white cursor-default">
                <h1 class=" mb-3 text-2xl font-bold">William James Moriarty</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed sapiente ex maiores quam doloremque modi veniam consequuntur odio cupiditate, atque necessitatibus quisquam ipsum iusto accusamus nemo incidunt ad rem adipisci!</p>
                <!-- ikon start -->
                <div class="bottom-4 flex mb-4 space-x-4 text-white">
                    <div class="flex items-center space-x-1">
                        <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                            </svg>
                        </span>
                        <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                    </div> 
                </div>
                <!-- ikon end -->

                <!-- button -->
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Baca Sekarang
                    </span>
                </button>
            </div>
        </div>
        <figure class=" pt-1 sm:pt-2 md:pt-4">
            <div class=" grid grid-cols-4 gap-2">
                <!-- content utama 1 -->
                <div class=" relative image-container">
                    <a href="user/DetailKomik">
                        <img src="{{ url('images/komik5.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 2 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik3.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 3 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik4.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 4 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik6.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->   
                        </div>  
                    </a>
                </div>
            </div>
        </figure>

        <div class="dark:text-white flex justify-end mt-4 mx-4">
            <a href="" class="hover:text-merah duration-200 text-lg font-semibold">Lainnya</a>
        </div>
        
    </section>

    <!-- novel terpopuler -->
    <section class="pt-3 md:pt-12">
        
        <p class=" text-end cursor-default font-bold mb-5 text-lg md:text-[32px] dark:text-white">Novel Terpopuler</p>
      
        <div class="grid grid-cols-2">
            <div class="py-32 dark:text-white cursor-default">
                <h1 class=" mb-3 text-2xl font-bold">William James Moriarty</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed sapiente ex maiores quam doloremque modi veniam consequuntur odio cupiditate, atque necessitatibus quisquam ipsum iusto accusamus nemo incidunt ad rem adipisci!</p>
                <!-- ikon start -->
                <div class="bottom-4 flex mb-4 space-x-4 text-white">
                    <div class="flex items-center space-x-1">
                        <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                            </svg>
                        </span>
                        <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                    </div> 
                </div>
                <!-- ikon end -->

                <!-- button -->
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Baca Sekarang
                    </span>
                </button>
            </div>
            <div class="relative">
                <div class="flex justify-end">
                    <img src="{{ url('images/komik10.jpg') }}" class=" aspect-3/4 object-cover rounded-lg w-2/3 blur-sm" alt="">
                </div>
                <div class="absolute w-full  right-10 top-32 ...">
                    <div class=" w-full flex justify-center">
                        <img src="{{ url('images/komik9.jpg') }}" class=" rounded-full aspect-square w-1/2 object-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class=" pt-1 sm:pt-2 md:pt-4">
            <div class=" grid grid-cols-4 gap-2">
                <!-- content utama 1 -->
                <div class=" relative image-container">
                    <a href="/admin/DetailKomik">
                        <img src="{{ url('images/komik7.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 2 -->
                <div class=" relative image-container">
                    <a href="/admin/DetailKomik">
                        <img src="{{ url('images/komik8.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 3 -->
                <div class=" relative image-container">
                    <a href="/admin/DetailKomik">
                        <img src="{{ url('images/komik11.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>

                <!-- content utama 4 -->
                <div class=" relative image-container">
                    <a href="/admin/DetailKomik">
                        <img src="{{ url('images/komik12.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- judul start -->
                            <div class="text-lg bottom-16 left-0 right-0 font-bold absolute  text-white pl-5 pr-2">
                                <p class="h-[56px] overflow-hidden text-sm sm:text-lg">
                                    The economics of villains beda komik
                                </p>
                             </div>
                            <!-- judul end -->
                            <!-- ikon start -->
                            <div class="absolute bottom-4 flex mb-4 space-x-4 pl-5 pr-2 text-white">
                                <div class="flex items-center space-x-1">
                                    <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                    </svg>
                                    </span>
                                    <span class=" text-[12px] sm:text-sm md:text-base">175k</span>
                                </div> 
                            </div>
                            <!-- ikon end -->
                          
                        </div>  
                    </a>
                </div>
            </div>
        </figure>
        <div class="dark:text-white flex justify-end mt-4 mx-4">
            <a href="" class="hover:text-merah duration-200 text-lg font-semibold">Lainnya</a>
        </div>
    </section>

    <!-- komik terbaru -->
    <section class="my-14">
        <h1 class=" text-[32px] dark:text-white font-bold mb-5 text-center">Komik Terbaru</h1>
        <div class="flex gap-3 overflow-x-auto scrollbar-hidden">
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik12.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik13.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik14.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik15.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik16.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik17.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
        </div>

    </section>

    <!-- Novel Terbaru -->
    <section class=" my-14">
        <h1 class=" text-[32px] dark:text-white font-bold mb-5 text-center">Novel Terbaru</h1>
        <div class="flex gap-3 overflow-x-auto scrollbar-hidden">
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik18.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik19.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik20.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik21.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik22.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik23.jpg') }}" class="aspect-square mb-3 rounded-full object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
        </div>
    </section>

    <!-- genre favorite -->
    <section class="dark:text-white my-12">
        <h1 class=" text-[32px] font-bold mb-3">Favorite Genre</h1>
        <div class="grid grid-rows-2 grid-flow-col gap-4">
            <div class="row-span-2 col-span-2 group ...">
                <a href="">
                    <div class="relative">
                        <div class="flex justify-end">
                            <img src="{{ url('images/komik18.jpg') }}" class=" aspect-square object-cover rounded-lg brightness-100 blur-sm duration-500" alt="">
                        </div>
                        <div class="absolute w-full  top-64 ...">
                            <div class=" w-full flex justify-center">
                                <p class="text-8xl font-bold duration-500 text-gray-500 dark:text-gray-500  group-hover:text-merah">Romantis</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-1 group ...">
                <a href="">
                    <div class="relative">
                        <div class="flex justify-end">
                            <img src="{{ url('images/komik19.jpg') }}" class=" aspect-square object-cover rounded-lg brightness-100 blur-sm duration-500" alt="">
                        </div>
                        <div class="absolute w-full top-44 ...">
                            <div class=" w-full flex justify-center">
                                <p class="text-4xl font-bold duration-500 text-gray-500 dark:text-gray-500  group-hover:text-merah">Fantasi</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-1 group ...">
                <a href="">
                    <div class="relative">
                        <div class="flex justify-end">
                            <img src="{{ url('images/komik20.jpg') }}" class=" aspect-square object-cover rounded-lg brightness-100 blur-sm duration-500" alt="">
                        </div>
                        <div class="absolute w-full top-44 ...">
                            <div class=" w-full flex justify-center">
                                <p class="text-4xl font-bold duration-500 text-gray-500 dark:text-gray-500  group-hover:text-merah">Action</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Your History -->
    <section class="dark:text-white my-12">
        <h1 class=" text-[32px] dark:text-white font-bold mb-5">Your History</h1>
        <div class="flex gap-3 overflow-x-auto scrollbar-hidden">
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik18.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik19.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik20.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik21.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik22.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik23.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>

            <a href="" class="group">
                <div class="dark:text-white text-center group min-w-[20%] mx-6 my-16">
                    <span class="group-hover:text-merah">Selengkapnya</span>
                </div>
            </a>
        </div>
    </section>

    <!-- Your Favorite -->
    <section class="dark:text-white my-12">
        <h1 class=" text-[32px] dark:text-white font-bold mb-5">Your Favorite</h1>
        <div class="flex gap-3 overflow-x-auto scrollbar-hidden">
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik24.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik25.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik26.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik27.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik28.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik29.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            <div class="dark:text-white text-center group min-w-[20%]">
                <a href="">
                    <img src="{{ url('images/komik30.jpg') }}" class="aspect-square mb-3 rounded-xl object-cover duration-500 group-hover:brightness-50" alt="">
                    <span class="font-semibold text-lg duration-500 group-hover:text-merah">Bad or Good Situation?</span>
                </a>
            </div>
            
            <a href="" class="group">
                <div class="dark:text-white text-center group min-w-[20%] mx-6 my-16">
                    <span class="group-hover:text-merah">Selengkapnya</span>
                </div>
            </a>
        </div>
    </section>
</main>
<!-- content end -->
   


   @include('components.footeruser')
</body>

</html>