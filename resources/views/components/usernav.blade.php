@vite(['resources/css/app.css','resources/js/app.js'])
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

<!-- <div class="flex items-center justify-center">
    <hr class="  border-2 dark:border-merah border-merah w-2/4">
</div> -->
<div class="flex items-center">
    <div class="font-semibold hover:text-merah  duration-700">
        <a href="/user/GenreKomikUser" class="text-2xl dark:text-white dark:hover:text-merah duration-700
         {{ request()->is('user/GenreKomikUser') ? 'text-merah dark:text-merah' : 'text-black dark:text-black' }}">Komik</a>
    </div>
    <div class=" mx-5 font-semibold hover:text-merah duration-700">
        <a href="/user/GenreNovelUser" class="text-2xl dark:text-white dark:hover:text-merah duration-700
        {{ request()->is('user/GenreNovelUser') ? 'text-merah dark:text-merah' : 'text-black dark:text-black' }}">Novel</a>
    </div> 
</div>  