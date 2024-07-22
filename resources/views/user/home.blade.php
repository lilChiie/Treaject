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

<body>

   @include('components.headeruser')

   <!-- slider start -->
   <div id="controls-carousel" class="relative w-full " data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-12 mt-12">
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
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none mx-12" data-carousel-prev>
         <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
         </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none mx-12" data-carousel-next>
         <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
         </span>
      </button>
   </div>
   <!-- slider end -->

   <!-- daftar komik terbaru  -->
   <section class=" pt-12 mx-12 ">
      <p class=" font-bold text-[32px]">Daftar Komik</p>
      <figure class=" pt-4">
         <div class=" grid grid-cols-4 gap-2 ">
            <!-- content 1 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik5.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 2 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik6.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 3 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik7.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 4 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik8.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>
      </figure>
   </section>


   <!-- daftar novel terbaru  -->
   <section class=" pt-12 mx-12 mb-12">
      <p class=" font-bold text-[32px]">Daftar Novel</p>
      <figure class=" pt-4">
         <div class=" grid grid-cols-4 gap-2 ">
            <!-- content 1 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik5.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 2 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik6.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 3 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik7.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>

            <!-- content 4 -->
            <div class=" relative image-container">
               <a href="">
                  <img src="{{ url('images/komik8.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                  <div class="absolute inset-0 overlay">
                     <!-- ikon start -->
                     <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                        <div class="flex space-x-1">
                           <span class="w-6 h-6 fill-current">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                 <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                              </svg>
                           </span>
                           <span class="text-sm">175k</span>
                        </div>

                        <span class="w-6 h-6 fill-current">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                           </svg>
                        </span>
                     </div>
                     <!-- ikon end -->

                     <!-- judul start -->
                     <div class="text-lg font-bold absolute bottom-4 text-white pl-5 pr-2">
                        <p class="h-[56px] overflow-hidden ">
                           The economics of villains beda komik
                        </p>
                     </div>
                     <!-- judul end -->

                  </div>
               </a>
            </div>
      </figure>
   </section>

   @include('components.footeruser')
</body>

</html>