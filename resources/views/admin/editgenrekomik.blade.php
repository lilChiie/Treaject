<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Genre Komik</title>
    
</head>
<body>
@include('components.headeradmin')
<main class="font-serif dark:bg-black ps-2 pr-2 sm:ps-[288px] sm:pt-12 sm:pr-10">
    @include('components.adminnavkomik')

    <!-- tambah genre start-->
    <section>
        <div class="mt-6 mb-2">
           
            <p class=" text-[16px] font-bold">Edit Genre</p>
            
        </div>
        
        <form action="">
            <div>
                <input type="text" class="placeholder:font-bold rounded-lg w-full" placeholder="Genre cth Action ">
            </div>
            <div class="flex justify-end gap-x-4">
                <button type="button" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-2xl text-[14px] px-8 py-1.5 text-center my-4 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Edit
                </button>
                <button type="button" class="text-red-700 transition duration-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-2xl text-[14px] px-6 py-1.5 text-center my-4 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Hapus
                </button>
            </div> 
        </form>
    </section>
    <!-- tambah genre end -->

    <!-- genre start -->
    <section class=" mt-6 px-28">
        <div class="">
            <div class=" flex justify-center h-14">
                <div class="border-solid border-2 border-sky-500 font-medium rounded-lg text-[14px] w-32 h-full flex justify-center items-center text-center my-2 bg-merah text-white">
                    Action
                </div>
            </div>
        </div>
    </section>
    <!-- genre end -->

    <!-- edit genre start -->
     <!-- edit genre end -->

    <!-- daftar komik sesuai genre -->
    <section class="mt-20">
        <figure>
            <div class=" grid grid-cols-4 gap-2">
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
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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

                <!-- content 5 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik9.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- ikon start -->
                            <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                                <div class="flex space-x-1">
                                <span class="w-6 h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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

                <!-- content 6 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik10.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- ikon start -->
                            <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                                <div class="flex space-x-1">
                                <span class="w-6 h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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

                <!-- content 7 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik11.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- ikon start -->
                            <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                                <div class="flex space-x-1">
                                <span class="w-6 h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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

                <!-- content 8 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik12.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- ikon start -->
                            <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                                <div class="flex space-x-1">
                                <span class="w-6 h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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

                <!-- content 9 -->
                <div class=" relative image-container">
                    <a href="">
                        <img src="{{ url('images/komik13.jpg') }}" class=" aspect-3/4 object-cover rounded-lg" alt="">
                        <div class="absolute inset-0 overlay">
                            <!-- ikon start -->
                            <div class="absolute bottom-16 left-0 right-0 flex justify-center mb-4 space-x-4 text-white">
                                <div class="flex space-x-1">
                                <span class="w-6 h-6 fill-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                </span>
                                <span class="text-sm">175k</span>
                                </div>
                                
                                <span class="w-6 h-6 fill-current">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
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
            </div>
        </figure>
    </section>
</main>

@include('components.footeradmin')
</body>
</html>