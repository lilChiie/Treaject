<main class="font-serif dark:bg-black">
    <nav class="flex justify-center font-bold">
       <div class="px-36 text-[24px] uppercase">
            <a href="/admin/DaftarNovel" class=" hover:text-merah
            {{ request()->is('admin/DaftarNovel') ? 'text-merah dark:text-merah' : 'text-black dark:text-black' }}">daftar novel</a>
       </div>
       <div class="px-36 text-[24px] uppercase">
            <a href="" class="hover:text-merah">kelola genre</a>
       </div>
    </nav>
    <div class=" px-24">
        <hr class="w-full border-2 border-black">
    </div>
    
</main>

