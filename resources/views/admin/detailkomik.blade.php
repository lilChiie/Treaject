<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Komik</title>
</head>
<body>
@include('components.headeradmin')
    <main class="font-serif dark:bg-black ps-2 pr-2 sm:ps-[288px] sm:pt-12 sm:pr-8">
        <a href="/admin/DaftarKomik">
            <svg  class=" mb-6 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
            </svg>
        </a>
        <!-- head komik start-->
        <section>
            <div class="grid grid-cols-3 gap-x-7">
                <div class=" col-span-1">
                    <img src="{{ url('images/komik1.jpg') }}" class=" rounded-lg w-full aspect-3/4 object-cover" alt="">
                </div>

                <div class=" col-span-2">
                    <p class="font-bold text-[28px] mt-2">The economic of villans</p>
                    <div class="flex gap-x-2 mb-5">
                        <div>
                            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="font-medium">175k</span>
                        </div>
                    </div>
                    <p class="font-medium">Cantik, muda, kaya raya, kehidupan Serena nyaris sempurna. Hanya dua hal yang membuatnya tidak sempurna, pernikahan yang cacat dan harta warisan milik keluarganya yang dikelola oleh sang suami yang menurutnya bengis dan tidak punya hati. Tapi kali ini, Serena tidak akan tinggal diam. Dia akan merebut kepemilikannya segera!</p>
                    <p class="font-bold">Author: <span class="font-medium text-gray-800">Anonim</span></p>
                </div>
          </div>
        </section>
        <!-- head komik end -->

        <!-- content start -->
        <section>
            <div class="mt-12 mb-2 mx-3 font-bold text-[20px] text-gray-600">
                <p>4 Chapter</p>
            </div>


            <div>
                <!-- 1 -->
                <a href="/admin/ChapterKomik" class="mb-2 hover:brightness-50  ">
                    <div class="flex border-2 border-50 mb-2 border-b-gray-500  rounded-lg p-1">
                        <div class="w-1/12">
                            <img src="{{ url('images/komik1.jpg') }}" class=" aspect-square object-cover w-full" alt="">  
                        </div>
                        <div class="mx-4 w-9/12 ">
                            <p class=" font-medium text-[20px] mt-2">Ep 1 <span class="mx-2">Prolog</span></p>
                            <div class="flex gap-x-2 mt-1">
                                <div>
                                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-[16px]">15k</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end  items-center text-center">
                            <div>
                            <span class="font-medium text-[20px] text-gray-600">14 Feb 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>

                <!-- 2 -->
                <a href="/admin/ChapterKomik" class=" hover:brightness-50  ">
                    <div class="flex border-2 border-50 mb-2 border-b-gray-500  rounded-lg p-1">
                        <div class="w-1/12">
                            <img src="{{ url('images/komik1.jpg') }}" class=" aspect-square object-cover w-full" alt="">  
                        </div>
                        <div class="mx-4 w-9/12 ">
                            <p class=" font-medium text-[20px] mt-2">Ep 2 <span class="mx-2">Katakan Tidak</span></p>
                            <div class="flex gap-x-2 mt-1">
                                <div>
                                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-[16px]">5k</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end  items-center text-center">
                            <div>
                            <span class="font-medium text-[20px] text-gray-600">14 Feb 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>

                <!-- 3 -->
                <a href="/admin/ChapterKomik" class=" hover:brightness-50  ">
                    <div class="flex border-2 border-50 mb-2 border-b-gray-500  rounded-lg p-1">
                        <div class="w-1/12">
                            <img src="{{ url('images/komik1.jpg') }}" class=" aspect-square object-cover w-full" alt="">  
                        </div>
                        <div class="mx-4 w-9/12 ">
                            <p class=" font-medium text-[20px] mt-2">Ep 3 <span class="mx-2">Pada Para</span></p>
                            <div class="flex gap-x-2 mt-1">
                                <div>
                                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-[16px]">17k</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end  items-center text-center">
                            <div>
                            <span class="font-medium text-[20px] text-gray-600">14 Feb 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>

                <!-- 4 -->
                <a href="/admin/ChapterKomik" class=" hover:brightness-50  ">
                    <div class="flex border-2 border-50 mb-2 border-b-gray-500  rounded-lg p-1">
                        <div class="w-1/12">
                            <img src="{{ url('images/komik1.jpg') }}" class=" aspect-square object-cover w-full" alt="">  
                        </div>
                        <div class="mx-4 w-9/12 ">
                            <p class=" font-medium text-[20px] mt-2">Ep 4 <span class="mx-2">Mata Keranjang Kecuali Niati</span></p>
                            <div class="flex gap-x-2 mt-1">
                                <div>
                                    <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-[16px]">175k</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end  items-center text-center">
                            <div>
                            <span class="font-medium text-[20px] text-gray-600">14 Feb 2023</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- content end -->
    </main>

@include('components.footeradmin')
</body>
</html>
