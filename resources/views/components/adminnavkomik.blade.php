<main class="font-serif dark:bg-black">
    <nav class="flex justify-center font-bold">
       <div class="px-36 text-[24px] uppercase ">
            <a href="/admin/DaftarKomik" class=" hover:text-merah
            {{ request()->is('admin/DaftarKomik') ? 'text-merah dark:text-merah' : 'text-black dark:text-black' }}">daftar komik</a>
       </div>
       <div class="px-36 text-[24px] uppercase ">
            <a href="/admin/GenreKomik" class="hover:text-merah {{ request()->is('admin/GenreKomik', 'admin/EditGenreKomik') ? 'text-merah dark:text-merah' : 'text-black dark:text-black' }}">kelola genre</a>
       </div>
    </nav>
    <div class=" px-24">
        <hr class="w-full border-2 border-black">
    </div>
    
</main>
