
@vite(['resources/css/app.css','resources/js/app.js'])
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

<body class="dark">
@include('components.headeruser1')
    
    <!-- main content start -->
    <main class="font-serif  dark:bg-black px-10 md:px-24 pt-44 pb-20">
        @include('components.usernav')

        <section class="dark:text-white mt-5">
            <!-- genre start -->
            <div class="flex overflow-x-auto scrollbar-hidden space-x-10">
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Action</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Romantis</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Drama</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Fantasi</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Kerajaan</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Komedi</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Horror</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Trailer</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Slice Of Life</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Supranatural</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Shounen</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Advanture</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Magic</span>
                    </a>
                </div>
                <div class="dark:text-white text-center group flex-shrink-0">
                    <a href="">
                        <span class="font-semibold text-lg duration-500 group-hover:text-merah">Harem</span>
                    </a>
                </div>
            </div>
        </section>

            <!-- daftar komik start -->
            <section class="pt-12 cursor-pointer">
                <!-- jumlah komic -->
                <div class=" flex justify-between">
                    <div>
                        <h2 class=" flex items-center dark:text-white text-sm">205 Judul</h2>
                    </div>
                    <div>                         
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="dark:text-white  font-medium text-sm px-5 py-1 text-center inline-flex items-center " type="button">Berdasarkan <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown1" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Popularitas</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rating</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jumlah Chapter</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Status</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <figure class=" pt-1 sm:pt-2 md:pt-4">
                    <div class=" grid grid-cols-3 md:grid-cols-2 gap-4">
                        <!-- content utama 1 -->
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik1.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>
                        
                        <!-- content utama 2 -->
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik2.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>

                        <!-- content utama 3 -->
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik3.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>

                        <!-- content utama 4 -->
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik4.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>

                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik5.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik6.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik7.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>
                        <a href="" class="grid grid-cols-3 gap-2">
                            <div>
                                <img src="{{ url('images/komik8.jpg') }}" class=" aspect-3/4 object-cover rounded-lg hover:brightness-50" alt="">
                            </div>
                            <div class=" col-span-2 my-12 mx-5">
                                <h1 class="text-xl font-bold h-12 mb-2 overflow-hidden dark:text-white">GOOD/BAD FORTUNE</h1>
                                    <div class="flex pr-2">
                                        <div class="flex items-center space-x-1">
                                            <span class=" w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 fill-current">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                                            </svg>
                                            </span>
                                            <span class=" text-[12px] sm:text-sm md:text-base dark:text-white">175k</span>
                                        </div> 
                                    </div>
                                <p class=" h-[78px] overflow-hidden text-base mt-3 dark:text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint iure natus nisi facilis? Eligendi facere natus eaque officiis dolorem beatae, ipsa nostrum quia ea fugiat voluptates excepturi ducimus iure tempora inventore consequuntur consequatur distinctio doloremque numquam temporibus vel obcaecati soluta! Veritatis laboriosam sequi porro voluptas ad. Sunt aliquid minima delectus?</p>
                            </div>
                        </a>
                    </div>
                </figure>
            </section>
            <!-- daftar komik end -->
        </section>
    </main>
    <!-- main content end -->

@include('components.footeruser')
</body>
