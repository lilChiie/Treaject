<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Komik</title>
    
</head>
<body>
@include('components.headeradmin')
<main class="font-serif dark:bg-black ps-2 pr-2 sm:ps-[288px] sm:pt-12 sm:pr-10">
    @include('components.adminnavkomik')

    <!-- tambah genre start-->
    <section>
        <div class="flex mt-6 mb-2">
            <div class=" ">
                <svg class="w-7 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#000000" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
                </svg>
            </div>
        
            <div class=" ">
                <p class=" text-[16px] font-bold">Tambah Genre</p>
            </div>
        </div>
        
        <form action="">
            <div>
                <input type="text" class="placeholder:font-bold rounded-lg w-full" placeholder="Masukkan Genre ">
            </div>
            <div class="flex justify-end">
                <button type="button" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-2xl text-[14px] px-6 py-1.5 text-center my-4 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Tambah
                </button>
            </div> 
        </form>
    </section>
    <!-- tambah genre end -->

    <!-- genre start -->
    <section class=" my-6 px-28">
        <div class=" grid grid-cols-4 gap-x-2 gap-y-6 justify-center">
            <div class=" flex justify-center h-14">
                <a href="/admin/EditGenreKomik" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 active:bg-merah active:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-[14px] w-32 h-full flex justify-center items-center text-center my-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Action
                </a> 
            </div>
            <div class=" flex justify-center h-14">
                <a href="/admin/EditGenreKomik" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 active:bg-merah active:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-[14px] w-32 h-full flex justify-center items-center text-center my-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Action
                </a> 
            </div>
            <div class=" flex justify-center h-14">
                <a href="/admin/EditGenreKomik" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 active:bg-merah active:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-[14px] w-32 h-full flex justify-center items-center text-center my-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Action
                </a> 
            </div>
            <div class=" flex justify-center h-14">
                <a href="/admin/EditGenreKomik" class="text-gray-900 transition duration-700 hover:text-white border border-gray-800 hover:bg-gray-900 active:bg-merah active:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-[14px] w-32 h-full flex justify-center items-center text-center my-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Action
                </a> 
            </div>
        </div>
    </section>
    <!-- genre end -->

    
</main>

@include('components.footeradmin')
</body>
</html>